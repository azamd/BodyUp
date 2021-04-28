<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\User;
use App\Form\ReclamationType;
use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReclamationsController extends AbstractController
{
    /**
     * @Route("/reclamations/user/{id}", name="reclamations")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request,int $id): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $date = new \DateTime('now');
        $today = $date->format('d-m-Y');



        $newReclamation = new Reclamation();
        $newReclamation->setDate($today);
        $newReclamation->setUser($user);
        //var_dump($newReclamation->getUserId());die();
        //var_dump($userName,$reclamation->getDate());die();
        $form = $this->createForm(ReclamationType::class,$newReclamation);
        $form->handleRequest($request);

        if($form->isSubmitted()&& $form->isValid()){
            $data = $form->getData();
            //var_dump($data);die();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($data);

            $entityManager->flush();

            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = '465';
            $mail->isHTML();
            $mail->Username = 'bodyupworkouts@gmail.com';
            $mail->Password = 'bodyup.123';
            $mail->SetFrom('no-reply@bodyup.tn');
            $mail->Subject = 'BODYUP client service';
            $mail->Body = 'reclalmation submitted!!';
            $mail->addAddress('mohammed.nasri@esprit.tn');
            $mail->send();

            return $this->redirectToRoute('home');
        }



        return $this->render('reclamations/index.html.twig',['form' => $form->createView(),'user'=>$user,
                'newreclamation'=>$newReclamation
            ]
       );
    }
    /**
     * @Route("/events/success", name="success")
     * @return \Symfony\Component\HttpFoundation\Response
     */
}
