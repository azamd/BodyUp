<?php


namespace App\Controller;


use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Mime\Email;

use Symfony\Component\Mailer\MailerInterface;
class UtilisateurApiController extends AbstractController
{

    /**
     * @Route("userr/signup", name="app_register")
     */
    public function  signupAction(MailerInterface $mailer,Request  $request, UserPasswordEncoderInterface $passwordEncoder) {
        $fn = $request->query->get("fn");
        $email = $request->query->get("email");
        $username = $request->query->get("username");
        $password = $request->query->get("password");
        $state="0";

        //control al email lazm @
        $user = $this->getDoctrine()->getManager()->getRepository(User::class)->findOneBy(['email'=>$email]);
        if($user) {
            return new Response("email invalid.");
        }
        $error="";
       
           /* $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize($password);*/
            $mail = (new Email())
            ->from('bodyup17@gmail.com')
            ->to($email)
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject("Confirmation email")
            ->text("pour confirmer votre compte enter le code suivante:")
            ->html('<br> <label><strong>'.$request->get('code').'</strong></label>');
            

        $mailer->send($mail);
      
        $user = new User();
        $user->setLevel("0");
        $user->setCity("0");
        $user->setPhone("0");
        $user->setZip("0");
        $user->setGender("0");
        $user->setAdress("0");
        $user->setUsername($username);
        $user->setEmail($email);
        $user->setFirstname($fn);
        $user->setState($state);
        $user->setRoles(["ROLE_USER"]);
        $pass = $passwordEncoder->encodePassword(
            $user,
            $password
        );

        $user->setPassword($pass);

        try {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

                return new JsonResponse("success",200);//200 ya3ni http result ta3 server OK
        }catch (\Exception $ex) {
            return new Response("execption ".$ex->getMessage());
        }
    
    }

    /**
     * @Route("userr/signin", name="app_login")
     */

    public function signinAction(Request $request) {
        $username = $request->query->get("username");
        $password = $request->query->get("password");

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findOneBy(['username'=>$username]);//bch nlawj ala user b username ta3o fi base s'il existe njibo
        //ken l9ito f base
        if($user){
            //lazm n9arn password zeda madamo crypté nesta3mlo password_verify
            if(password_verify($password,$user->getPassword())) {
                $serializer = new Serializer([new ObjectNormalizer()]);
                $formatted = $serializer->normalize($user);
                return new JsonResponse($formatted);
            }
            else {
                return new Response("passowrd not found");
            }
        }
        else {
            return new Response("failed");//ya3ni username/pass mch s7a7

        }
    }


    /**
     * @Route("userr/ediUser", name="app_gestion_profile")
     */

    public function editUser(Request $request, UserPasswordEncoderInterface $passwordEncoder) {
        $id = $request->get("id");//kima query->get wala get directement c la meme chose
        $fn = $request->query->get("fn");
        $email = $request->query->get("email");
        $level = $request->query->get("level");
        $city = $request->query->get("city");
        $phone = $request->query->get("phone");
        $zip = $request->query->get("zip");
        $gender = $request->query->get("gender");
        $adress = $request->query->get("adress");
        $username = $request->query->get("username");
        $password = $request->query->get("password");
        
        $em=$this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);
        //bon l modification bch na3mlouha bel image ya3ni kif tbadl profile ta3ik tzid image
        if($request->files->get("photo")!= null) {

            $file = $request->files->get("photo");//njib image fi url
            $fileName = $file->getClientOriginalName();//nom ta3ha

            //taw na5ouha w n7otaha fi dossier upload ely tet7t fih les images en principe te7t public folder
            $file->move(
                $fileName
            );
            $user->setPhoto($fileName);
        }

        $user->setFirstName($fn);
        $user->setEmail($email);
        $user->setLevel($level);
        $user->setCity($city);
        $user->setPhone($phone);
        $user->setZip($zip);
        $user->setGender($gender);
        $user->setAdress($adress);
        $user->setUsername($username);
        $user->setRoles(["ROLE_USER"]);
        $user->setPassword(
            $passwordEncoder->encodePassword(
                $user,
                $password
            )
        );

        



        try {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return new Response("success");
        }catch (\Exception $ex) {
            return new Response("failed ".$ex->getMessage());
        }

    }

    /**
     * @Route("userr/forget", name="forget")
     */
     public function  ForgetAction(MailerInterface $mailer,Request  $request, UserPasswordEncoderInterface $passwordEncoder) {
       
        $email = $request->query->get("email");
       

        //control al email lazm @
        $user = $this->getDoctrine()->getManager()->getRepository(User::class)->findOneBy(['email'=>$email]);
        if($user) {
            $mail = (new Email())
            ->from('bodyup17@gmail.com')
            ->to($email)
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject("Forget Password")
            ->text("pour reset password enter le code suivante:")
            ->html('<br> <label><strong>'.$request->get('code').'</strong></label>');
            

        $mailer->send($mail);
        return new JsonResponse("success",200);
        }else{
            return new Response("execption ");  
        }
       
        
    
    }


    /**
     * @Route("userr/changepassword", name="change")
     */

    public function changepassword(Request $request, UserPasswordEncoderInterface $passwordEncoder) {
        
        $email = $request->query->get("email");
      
        $password = $request->query->get("password");
        
        $user = $this->getDoctrine()->getManager()->getRepository(User::class)->findOneBy(['email'=>$email]);

       

        
        $user->setPassword(
            $passwordEncoder->encodePassword(
                $user,
                $password
            )
        );

        



        try {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return new JsonResponse("success",200);//200 ya3ni http result ta3 server OK
        }catch (\Exception $ex) {
            return new Response("failed ".$ex->getMessage());
        }

    }

}