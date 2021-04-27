<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/admin")
 * Class ExercicesController
 * @package App\Controller\admin
 */
class ExercicesController extends AbstractController
{
    /**
     * @Route("/exercices", name="exercices")
     */
    public function index(): Response
    {
        return $this->render("admin/exercices/index.html.twig");

    }
}
