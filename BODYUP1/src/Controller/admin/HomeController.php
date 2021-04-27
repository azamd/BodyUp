<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 * Class HomeController
 * @package App\Controller\admin
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="admin")
     */
    public function index(): Response
    {
        return $this->render("admin/home/index.html.twig");
    }
}
