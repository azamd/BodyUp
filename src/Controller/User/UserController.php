<?php
/**
 * Created by HeximCZ
 * Date: 10/29/17 4:19 PM
 */

namespace App\Controller\User;

use App\Entity\User;
use App\Form\EmailForm;
use App\Form\PasswordRecoveryForm;
use App\Form\UserRegistrationForm;
use App\Utils\MailSender;
use App\Utils\TokenGenerator;
use App\Utils\UserActivityProcess;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Class UserController
 * @package App\Controller
 */
class UserController extends AbstractController
{
    private $logger;
    private $tokenGenerator;
    private $mailSender;
    private $userActivity;
    private $em;

    /**
     * UserController constructor.
     * @param LoggerInterface $logger
     * @param TokenGenerator $tokenGenerator
     * @param MailSender $mailSender
     * @param EntityManagerInterface $entityManager
     * @param UserActivityProcess $userActivity
     */
    public function __construct(
        LoggerInterface $logger,
        TokenGenerator $tokenGenerator,
        MailSender $mailSender,
        UserActivityProcess $userActivity,
        EntityManagerInterface $entityManager
    )
    {
        $this->logger = $logger;
        $this->tokenGenerator = $tokenGenerator;
        $this->mailSender = $mailSender;
        $this->userActivity = $userActivity;
        $this->em = $entityManager;
    }

    /**
     * Registration
     * @Route("/{_locale}/register", name="user_register")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function registerAction(Request $request)
    {
        // logged user
        if ($this->isGranted('ROLE_USER')) {
            $this->addFlash('error', 'text.still_logged');
            return $this->redirectToRoute('app_backend');
        }

        $form = $this->createForm(UserRegistrationForm::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var User $user */
            $user = $form->getData();

            $user->setConfirmed(false);
            $user->setConfirmationToken($this->tokenGenerator->generateToken());
            $user->setConfirmationTokenCreatedAt(new \DateTime());
            $user->setCreatedAt(new \DateTime()); // date created
            $user->setConfirmed(false);
            $this->em->persist($user);
            $this->em->flush();

            $this->mailSender->sendConfirmationEmail($user);

            $this->logger->info('New registration. User: ' . $user->getUserName());
            $this->userActivity->saveActivityFromRequest($this->userActivity::REGISTRATION, $user, $this->em, $request);

            $this->addFlash('info', 'account.must_activate');

            return $this->redirectToRoute('app_homepage');
        }

        return $this->render('user/register.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Account activation
     * @Route("/{_locale}/account-activation/{slug}", name="account_activation", requirements={"slug"="([A-Za-z0-9-_]{43})"})
     * @param Request $request
     * @param $slug
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function accountActivation(Request $request, $slug)
    {
        /** @var User $user */
        $user = $this->em->getRepository(User::class)->findOneBy([
            'confirmationToken' => $slug
        ]);
        if ($user) {
            $user->setConfirmationToken(null);
            $user->setConfirmed(true);
            $this->em->flush();

            $this->userActivity->saveActivityFromRequest($this->userActivity::ACCOUNT_CONFIRMED, $user, $this->em, $request);

            $this->addFlash('info', 'account.confirmed');
            return $this->redirectToRoute('security_login');
        }

        $this->addFlash('error', 'account.error_confirmed');
        return $this->redirectToRoute('security_login');
    }

    /**
     * "Error" page with form to resend confirmation link
     * @Route("/{_locale}/account-not-confirmed/{slug}", name="email_confirmation_error", requirements={"slug"="([A-Za-z0-9-_]{43})"})
     * @param Request $request
     * @param $slug
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function accountIsNotConfirmed(Request $request, $slug)
    {

        if (!$this->get('session')->has('hash') || $this->get('session')->get('hash') != $slug) {
            throw new NotFoundHttpException("This page is not for direct call.");
        }

        $form = $this->createForm(EmailForm::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var User $user */
            $user = $this->em->getRepository(User::class)->findOneBy([
                'email' => $form->getData()
            ]);
            if ($user) {
                // invalidate unique hash in session
                $this->get('session')->remove('hash');
                $this->mailSender->sendConfirmationEmail($user);

                $this->userActivity->saveActivityFromRequest($this->userActivity::ACCOUNT_NEW_CONFIRMATION, $user, $this->em, $request);

                $this->addFlash('info', 'account.new-activation');
                return $this->redirectToRoute('app_homepage');
            }
            $this->addFlash('error', 'account.no_exist');
        }

        return $this->render('user/email-not-confirmed.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Restore password request
     * @Route("/{_locale}/password-restoration", name="password_restoration")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function passwordRestorationRequest(Request $request)
    {
        $form = $this->createForm(EmailForm::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var User $user */
            $user = $this->em->getRepository(User::class)->findOneBy([
                'email' => $form->getData()
            ]);
            if ($user) {
                $hash = $this->tokenGenerator->generateToken();
                if ($user->getConfirmed()) {
                    $user->setConfirmationToken($hash);
                    $user->setConfirmationTokenCreatedAt(new \DateTime());
                    $this->em->flush();

                    $this->mailSender->sendPasswordRestorationEmail($user, $hash);

                    $this->userActivity->saveActivityFromRequest($this->userActivity::CHANGE_PWD_REQUEST, $user, $this->em, $request);

                    $this->addFlash('info', 'password.restoration_sent');
                    return $this->redirectToRoute('app_homepage');
                }
                // account is not activated
                $this->addFlash('error', 'account.confirm_first');
                $this->get('session')->set('hash', $hash);
                return $this->redirectToRoute('email_confirmation_error', ['slug' => $hash]);
            }
            $this->addFlash('error', 'account.no_exist');
        }

        return $this->render('user/password-restoration-request.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Restore password form
     * @Route("/{_locale}/password-restoration/{slug}", name="password_change", requirements={"slug"="([A-Za-z0-9-_]{43})"})
     * @param Request $request
     * @param $slug
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function passwordChange(Request $request, $slug)
    {
        $form = $this->createForm(PasswordRecoveryForm::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var User $user */
            $user = $form->getData();
            $newPassword = $user->getPlainPassword();

            /** @var User $client */
            $client = $this->em->getRepository(User::class)->findOneBy([
                'confirmationToken' => $slug
            ]);

            if (!$client) {
                $this->logger->critical('Password restoration -> Token not found');
                $this->addFlash('info','text.page_expired');
                return $this->redirectToRoute('password_change',[
                    'slug' => $slug
                ]);
            }

            $client->setPlainPassword($newPassword);
            $client->setConfirmationToken(null);
            $this->em->flush();

            $this->userActivity->saveActivityFromRequest($this->userActivity::CHANGE_PWD_DONE, $client, $this->em, $request);

            $this->addFlash('notice', 'text.password_changed');

            return $this->redirectToRoute('security_login');
        }

        return $this->render('user/password-restoration.html.twig', [
            'form' => $form->createView()
        ]);
    }

}
