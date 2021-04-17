<?php
/**
 * Created by HeximCZ
 * Date: 10/28/17 1:05 PM
 */

namespace App\Controller\Admin;

use App\Exception\AccountNotConfirmed;
use App\Form\LoginForm;
use App\Utils\TokenGenerator;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * Class SecurityController
 * @package App\Controller\Admin
 */
class SecurityController extends AbstractController
{

    private $authUtils;
    private $tokenGenerator;

    public function __construct(AuthenticationUtils $authUtils, TokenGenerator $tokenGenerator)
    {
        $this->authUtils = $authUtils;
        $this->tokenGenerator = $tokenGenerator;
    }

    /**
     * @Route("/{_locale}/login", name="security_login")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function loginAction(Request $request)
    {
        // logged user
        if ($this->isGranted('ROLE_USER')) {
            $this->addFlash('error', 'text.still_logged');
            return $this->redirectToRoute('app_backend');
        }

        // get the login error if there is one
        $error = $this->authUtils->getLastAuthenticationError();

        // is account confirmed?
        if ($error instanceof AccountNotConfirmed) {
            $hash = $this->tokenGenerator->generateToken();
            $this->get('session')->set('hash', $hash);
            return $this->redirectToRoute('email_confirmation_error', ['slug' => $hash]);
        }

        // last username entered by the user
        $lastUsername = $this->authUtils->getLastUsername();

        $form = $this->createForm(LoginForm::class, [
            '_username' => $lastUsername
        ]);

        return $this->render('user/login.html.twig', array(
            'form' => $form->createView(),
            'error' => $error,
        ));
    }

    /**
     * @Route("/logout", name="security_logout")
     * @throws \Exception
     */
    public function logoutAction()
    {
        throw new \Exception("Nothing here.");
    }

    /**
     * @Route("/logout-success")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function logoutSuccessAction()
    {
        return $this->render('user/logout.html.twig');
    }

}