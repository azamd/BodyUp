<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/admin")
 * Class DashboardController
 * @package App\Controller\admin
 */
class DashboardController extends AbstractController
{
    /**
     * @Route("/", name="dashboard")
     */
    public function index(): Response
    {
        return $this->render("admin/dashboard/index.html.twig");
    }
}
