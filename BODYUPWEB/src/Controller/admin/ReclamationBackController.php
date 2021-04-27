<?php

namespace App\Controller\admin;

use App\Entity\Reclamation;
use App\Form\ReplyType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/admin")
 * Class ReclamationBackController
 * @package App\Controller\admin
 */
class ReclamationBackController extends AbstractController
{
    /**
     * @Route("/reclamation/back", name="reclamation_back")
     */
    public function index(): Response
    {
        $reclamations = $this->getDoctrine()->getRepository(Reclamation::class)->findAll();
        return $this->render('admin/reclamations/index.html.twig',[
            'reclamations'=>$reclamations,
        ]);
    }
    /**
     * @Route("/reclamations/single/{id}", name="single_reclamation")
     */
    public function singleReclamation(Request $request,int $id): Response{
        $reclamation = $this->getDoctrine()->getRepository(Reclamation::class)->find($id);

        $form = $this->createForm(ReplyType::class,$reclamation);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $data = $form->getData();
            //var_dump($data);die();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($data);

            $entityManager->flush();
            return $this->redirectToRoute('reclamation_back');
        }


        return $this->render('admin/reclamations/single_reclamation.html.twig',[
            'reclamation'=>$reclamation,
            'form' => $form->createView()
        ]);
}
    /**
     * @Route("/reclamations/delete/{id}", name="single_delete")
     */
    public function delete(Request $request, $id)
    {
        $event = $this->getDoctrine()->getRepository(Reclamation::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($event);
        $entityManager->flush();

        $response = new Response();
        $response->send();

        return $this->redirectToRoute('reclamation_back');
    }
}
