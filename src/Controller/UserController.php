<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="user_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('dashboard');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user): Response
    {
        $user = $this->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST') ) {
           // $user->setId($request->get('id'));
            $user->setFirstName($request->get('firstname'));
            $user->setLevel($request->get('level'));
            $user->setPhone($request->get('phone'));
            $user->setAdress($request->get('adress'));
            $user->setEmail($request->get('email'));
            $user->setCity($request->get('city'));
            $user->setZip($request->get('zip'));
            $user->setGender($request->get('gender'));
            
            $entityManager->flush();
            return $this->redirectToRoute('dashboard');

        }
        return $this->render('user/edit.html.twig', [
            'user' => $user,
           
        ]);
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('dashboard');
    }
    /**
     * @Route("/profile", name="user_profile")
  
     */
    public function profile()
    {
        return $this->render('user/user_profile.html.twig');
    }
    /**
     * @Route("/{id}/send_mail", name="send_mail", methods={"GET","POST"})
  
     */
    public function send_mail(Request $request, User $user): Response
    {
        return $this->render('user/send_mail.html.twig', [
            'user' => $user,
           
        ]);
    }
    /**
     * @Route("/user/send_mail_action", name="send_mail_action", methods={"POST"})
  
     */
    public function send_mail_action(MailerInterface $mailer,Request $request): Response
    {
      /*$titre = $request->query->get('titre');
        $mesg = $request->query->get('mesg');
        $message = (new \Swift_Message('Hello Email'))
        ->setFrom("marwan1921@gmail.com")
        ->setTo("mirodevgabes@gmail.com")
        ->setBody('Votre compte a été creé');
        $mailer->send($message);
*/
$email = (new Email())
            ->from('bodyup17@gmail.com')
            ->to($request->get('email'))
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject($request->get('titre'))
            ->text($request->get('mesg'));

        $mailer->send($email);
        
        $this->addFlash('notice', 'Email sent');

        return $this->redirectToRoute('dashboard');
    }
    /**
     * @Route("/user/{id}", name="user_active", methods={"GET"})
     */
    public function activeuser(Request $request, User $user): Response
    {
        $user->setState("1");
            $entityManager = $this->getDoctrine()->getManager();
           
            $entityManager->flush();
      

        return $this->redirectToRoute('dashboard');
    }
    /**
     * @Route("/block/{id}", name="user_inactive", methods={"GET"})
     */
    public function inactiveuser(Request $request, User $user): Response
    {
        $user->setState("0");
            $entityManager = $this->getDoctrine()->getManager();
           
            $entityManager->flush();
      

        return $this->redirectToRoute('dashboard');
    }
    /**
     * @Route("/{id}/show", name="show", methods={"GET","POST"})
  
     */
    public function show(Request $request, User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
           
        ]);
    }
}
