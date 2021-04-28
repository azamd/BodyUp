<?php

namespace App\Controller;

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
        return $this->render('exercices_front/index.html.twig');
    }
}
