<?php

namespace App\Controller;


use App\Entity\Categories;
use App\Entity\Exercices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExercicesFrontController extends AbstractController
{

    /**
     * @Route("/exercices", name="exercices_front")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Categories::class);
        $repos = $this->getDoctrine()->getRepository(Exercices::class);

        $categories = $repo->findAll();
        $exercices = $repos->findAll();


        return $this->render('exercices_front/index.html.twig',[
            'controller_name' => 'ExercicesFrontController',
            'categories' => $categories,
            'exercices' => $exercices
        ]);

    }

    /**
     * @Route("se/{id}", name="se", methods={"GET"})
     */
    public function send(Exercices $exercices): Response
    {
        return $this->render('single_exercice/index.html.twig', [
            'exercices' => $exercices,
        ]);
    }




}
