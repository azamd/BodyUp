<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventsFrontController extends AbstractController
{
    /**
     * @Route("/events", name="events_front")
     */
    public function index(): Response
    {
        return $this->render('events_front/index.html.twig');
    }
}
