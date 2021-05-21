<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Mailer\MailerInterface;

class SecurityController extends AbstractController
{
    public function __construct(UserPasswordEncoderInterface $passwordEncoder) {
        $this->passwordEncoder = $passwordEncoder;
    }

    
    /**
     * @Route("/admin", name="login")
     */
    public function login(Request $request, AuthenticationUtils $utils)
    {
        $error = $utils->getLastAuthenticationError(); 
        $lastUsername = $utils->getLastUsername();
        return $this->render('security/index.html.twig', [
            'error' =>$error,
            'last_username'=>$lastUsername
        ]);
    }

    /**
     * @IsGranted("ROLE_USER")
     * @Route("/logout", name="security_logout")
     * @throws Exception
     */
    public function logout(): void
    {
       
    }
    /**
     * @Route("/register", name="register")
  
     */
    public function register()
    {
        return $this->render('security/inscrie.html.twig');
    }
     /**
     * @Route("/forget", name="forget")
  
     */
    public function forget()
    {
        $error="";
        return $this->render('security/forget.html.twig',[
            'error'=>$error
        ]);
    }
    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription(Request $request) {
        $user = new User();
        $entityManager = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST') ) {
           // $user->setId($request->get('id'));
            $user->setFirstName($request->get('firstname'));
            $user->setLevel($request->get('level'));
            $user->setPhone($request->get('phone'));
            $user->setAdress($request->get('adress'));
            $user->setEmail($request->get('email'));
            $user->setCity($request->get('city'));
            $user->setState('0');
            $user->setZip($request->get('zip'));
            $user->setGender($request->get('gender'));
            $user->setUsername($request->get('username'));
            $user->setRoles(["ROLE_USER"]);
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                $request->get('password')
            ));

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('login');
        }
    }

    /**
     * @Route("/", name="app-login")
     */
    public function loginapp(Request $request, AuthenticationUtils $utils)
    {
        $error = $utils->getLastAuthenticationError(); 
        $lastUsername = $utils->getLastUsername();
        return $this->render('clients/login.html.twig', [
            'error' =>$error,
            'last_username'=>$lastUsername
        ]);
    }

    /**
     * @Route("/forget_action", name="forget_action")
  
     */
    public function forget_action(MailerInterface $mailer,Request $request): Response
    {
        $email = $request->get('email');
        $error="";
        $user = $this->getDoctrine()->getManager()->getRepository(User::class)->findOneBy(['email'=>$email]);
        if($user){
            $password = $user->getPassword();
           /* $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize($password);*/
            $email = (new Email())
            ->from('bodyup17@gmail.com')
            ->to($request->get('email'))
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject("restore password")
            ->text("pour reintialiser votre mot de passe clique sur lien suivante:")
            ->html('
            <html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Packages | Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
   
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/css/custom_css/panel.css" rel="stylesheet" />
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/css/custom_css/coupon.css" rel="stylesheet">
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/vendors/summernote/summernote.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" type="text/css" href="http://elibot.geoglobepro.net/bodyup/vendors/jasny-bootstrap/css/jasny-bootstrap.css">
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/vendors/bootstrapvalidator/dist/css/bootstrapValidator.css" rel="stylesheet" />
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/vendors/datatables/css/dataTables.bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/vendors/fancyBox/source/jquery.fancybox.css?v=2.1.5" media="screen" rel="stylesheet" />
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/css/custom_css/timings.css" rel="stylesheet" />
	</head>
	<body>
 <div class="container-fluid">
                <!--main content-->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <i class="fa fa-fw fa-file-text-o"></i> Liste des Utilisateurs
                            </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class=" table-responsive">
                 <img src=""/>
				 <form action="http://localhost:8000/restore_password" method="POST">
                <input type="hidden" name="email"  value="'.$email.'" />
            <button class="btn btn-primary" type="submit">lien</button>
            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>');

        $mailer->send($email);
        return $this->render('security/index.html.twig', [
            'error' =>$error,
            
        ]);
        }else{
            $error="email not found";
            return $this->render('security/forget.html.twig', [
                'error' =>$error,
                
            ]);
        }
            
        
    }
   /**
     * @Route("/restore_password", name="restor_password")
     */
    public function restore(Request $request)
    {
        $email = $request->get('email'); 
        return $this->render('security/restore_password.html.twig', [
            'email' =>$email,
           
        ]);
    }

    /**
     * @Route("/chnage_password_action", name="chnage_password_action")
     */
    public function restore_client_action(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $email = $request->get('email'); 
        $password = $request->get('password'); 
        $user = $this->getDoctrine()->getManager()->getRepository(User::class)->findOneBy(['email'=>$email]);
        
            $pass = $passwordEncoder->encodePassword(
                $user,
                $password
            );
    
            $user->setPassword($pass);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        return $this->render('security/index.html.twig',[
            'error'=> ''
        ]);
      
    }

     /**
     * @Route("/client_forget_password_action", name="client_forget_password_action")
     */
    public function restore_client_mail_action(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $email = $request->get('email'); 
        $password = $request->get('password'); 
        $user = $this->getDoctrine()->getManager()->getRepository(User::class)->findOneBy(['email'=>$email]);
        
            $pass = $passwordEncoder->encodePassword(
                $user,
                $password
            );
    
            $user->setPassword($pass);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        return $this->render('clients/login.html.twig',[
            'error'=> ''
        ]);
      
    }

     /**
     * @Route("/client_forget_password_change", name="client_forget_password_change")
     */
    public function restoreclient(Request $request)
    {
        $email = $request->get('email'); 
        return $this->render('clients/restore_password.html.twig', [
            'email' =>$email,
           
        ]);
    }


    /**
     * @Route("/forget_cc_action", name="forget_cc_action")
  
     */
    public function forget_cc_action(MailerInterface $mailer,Request $request): Response
    {
        $email = $request->get('email');
        $error="";
        $user = $this->getDoctrine()->getManager()->getRepository(User::class)->findOneBy(['email'=>$email]);
        if($user){
            $password = $user->getPassword();
           /* $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize($password);*/
            $email = (new Email())
            ->from('bodyup17@gmail.com')
            ->to($request->get('email'))
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject("restore password Client")
            ->text("pour reintialiser votre mot de passe clique sur lien suivante:")
            ->html('
            <html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Packages | Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
   
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/css/custom_css/panel.css" rel="stylesheet" />
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/css/custom_css/coupon.css" rel="stylesheet">
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/vendors/summernote/summernote.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" type="text/css" href="http://elibot.geoglobepro.net/bodyup/vendors/jasny-bootstrap/css/jasny-bootstrap.css">
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/vendors/bootstrapvalidator/dist/css/bootstrapValidator.css" rel="stylesheet" />
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/vendors/datatables/css/dataTables.bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/vendors/fancyBox/source/jquery.fancybox.css?v=2.1.5" media="screen" rel="stylesheet" />
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link type="text/css" href="http://elibot.geoglobepro.net/bodyup/css/custom_css/timings.css" rel="stylesheet" />
	</head>
	<body>
 <div class="container-fluid">
                <!--main content-->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <i class="fa fa-fw fa-file-text-o"></i> Liste des Utilisateurs
                            </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class=" table-responsive">
                 <img src=""/>
				 <form action="http://localhost:8000/client_forget_password_change" method="POST">
                <input type="hidden" name="email"  value="'.$email.'" />
            <button class="btn btn-primary" type="submit">lien</button>
            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>');

        $mailer->send($email);
        return $this->render('clients/login.html.twig', [
            'error' =>$error,
            
        ]);
        }else{
            $error="email not found";
            return $this->render('clients/login.html.twig', [
                'error' =>$error,
                
            ]);
        }
            
        
    }
 
}
