<?php

namespace App\Controller;

use App\Entity\Categories;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatFrontController extends AbstractController
{
    /**
     * @Route("/exercices", name="exercices_front")
     */
    public function index(): Response
    {
        $categories= $this->getDoctrine()->getRepository(Categories::class)->findAll();


        return $this->render('exercices_front/index.html.twig',['categories' => $categories]);
    }
}
