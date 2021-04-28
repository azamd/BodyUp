<?php

namespace App\Controller;

use App\Entity\Event;
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
        $events = $this->getDoctrine()->getRepository(Event::class)->findAll();
        return $this->render('events_front/index.html.twig',array('events'=>$events));
    }

    /**
     * @Route("/event/post/{id}", name="event_post")
     */
    public function single($id): Response {
        $event = $this->getDoctrine()->getRepository(Event::class)->find($id);

        return $this->render('events_front/single_event.html.twig', array('event' => $event));
    }
}
