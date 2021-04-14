<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SingleEventController extends AbstractController
{
    /**
     * @Route("/ev", name="single_event")
     */
    public function index(): Response
    {
        return $this->render('single_event/index.html.twig');
    }

}
