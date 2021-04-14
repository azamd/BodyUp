<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SingleExerciceController extends AbstractController
{
    /**
     * @Route("/se", name="single_exercice")
     */
    public function index(): Response
    {
        return $this->render('single_exercice/index.html.twig');
    }
}
