<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SingleGYMController extends AbstractController
{
    /**
     * @Route("/sg", name="single_gym")
     */
    public function index(): Response
    {
        return $this->render('single_gym/index.html.twig');
    }
}
