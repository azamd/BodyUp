<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SinglePackController extends AbstractController
{
    /**
     * @Route("/single/pack", name="single_pack")
     */
    public function index(): Response
    {
        return $this->render('single_pack/index.html.twig', [
            'controller_name' => 'SinglePackController',
        ]);
    }
}
