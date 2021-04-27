<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\User;
use App\Form\ReclamationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReclamationsController extends AbstractController
{
    /**
     * @Route("/reclamations/user/{id}", name="reclamations")
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
            return $this->redirectToRoute('home');
        }



        return $this->render('reclamations/index.html.twig',['form' => $form->createView(),'user'=>$user,
                'newreclamation'=>$newReclamation
            ]
       );
    }
}
