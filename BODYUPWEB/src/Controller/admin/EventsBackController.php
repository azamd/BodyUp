<?php

namespace App\Controller\admin;

use App\Entity\Event;
use App\Form\EventType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/admin")
 * Class EventsBackController
 * @package App\Controller\admin
 */
class EventsBackController extends AbstractController
{
    /**
     * @Route("/events", name="events")
     */
    public function index(Request $request): Response
    {
        $events = $this->getDoctrine()->getRepository(Event::class)->findAll();
        $event = new Event();
        $form = $this->createForm(EventType::class,$event);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid())
        {
            //var_dump($event);die();

            $data = $form->getData();

            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $img = $form->get('image')->getData();
            //var_dump($data);die();
            $fileName = md5(uniqid()).'.'.$img->guessExtension();
            $img->move($this->getParameter('image_directory'), $fileName);
            $data->setImage($fileName);
            //var_dump($data);die();

            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($data);

            $entityManager->flush();

            return $this->redirectToRoute('events');

        }


        return $this->render('admin/events/index.html.twig', ['events' => $events,'form' => $form->createView()],);
    }



    /**
     * @Route("/event/modify={id}", name="event_modify")
     */
    public function show(Request $request,$id)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $Event = $entityManager->getRepository(Event::class)->find($id);
        $form = $this->createForm(EventType::class,$Event);
        $form->handleRequest($request);


        if($form->isSubmitted()&& $form->isValid())
        {

            $entityManager = $this->getDoctrine()->getManager();

            $data = $form->getData();

            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $img = $form->get('image')->getData();
            //var_dump($data);die();
            $fileName = md5(uniqid()).'.'.$img->guessExtension();
            $img->move($this->getParameter('image_directory'), $fileName);
            $data->setImage($fileName);

            $entityManager->flush();

            return $this->redirectToRoute('events');

        }

        return $this->render("admin/events/modify_event.html.twig", [
            "form" => $form->createView(),'event' => $Event
        ]);
    }



    /**
     * @Route("/event/delete/{id}",name="delete_event")
     * @Method({"DELETE"})
     */
    public function delete(Request $request, $id)
    {
        $event = $this->getDoctrine()->getRepository(Event::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($event);
        $entityManager->flush();

        $response = new Response();
        $response->send();

        return $this->redirectToRoute('events');
    }

    /**
     * @Route("/events/all", name="events_list")
     */
    public function showe()
    {
        $events = $this->getDoctrine()->getRepository(Event::class)->findAll();
        return $this->render("admin/events/list_events.html.twig", [
            'events' => $events
        ]);
    }

    /**
     * @Route("/events/new", name="new_event")
     */
    public function new(Request $request): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class,$event);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid())
        {
            //var_dump($event);die();

            $data = $form->getData();

            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $img = $form->get('image')->getData();
            //var_dump($data);die();
            $fileName = md5(uniqid()).'.'.$img->guessExtension();
            $img->move($this->getParameter('image_directory'), $fileName);
            $data->setImage($fileName);
            //var_dump($data);die();

            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($data);

            $entityManager->flush();

            return $this->redirectToRoute('events_list');

        }


        return $this->render('admin/events/new_event.html.twig', ['form' => $form->createView()],);
    }

    /**
     * @Route("/event/{id}", name="single_event")
     */
    public function single($id) {
        $event = $this->getDoctrine()->getRepository(Event::class)->find($id);

        return $this->render('admin/events/single_event.html.twig', array('event' => $event));
    }
}
