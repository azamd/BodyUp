<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PacksFrontController extends AbstractController
{
    /**
     * @Route("/packs/front", name="packs_front")
     */
    public function index(): Response
    {
        return $this->render('packs_front/index.html.twig', [
            'controller_name' => 'PacksFrontController',
        ]);
    }
}
