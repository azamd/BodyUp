<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class DashboardController extends AbstractController
{
    /**
     *  
     * @Route("/dashboard", name="dashboard")
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('dashboard/index.html.twig', [
         
                'users' => $userRepository->findAll(),
          
        ]);
    }
    /**
     * @Route("/statistique", name="static")
     */
    public function dashboard(ChartBuilderInterface $chartBuilder,UserRepository $userRepository)
    {
        $nb_actifs=0;
        $nb_inactifs=0;
        $users=$userRepository->findby(['state' => '1']);
        foreach($users as $u){
            $nb_actifs++;
        }
        $userss=$userRepository->findby(['state' => '0']);
        foreach($userss as $u){
            $nb_inactifs++;
        }
       return $this->render('dashboard/chart.html.twig', [
            'nb_actifs' => $nb_actifs,
            'nb_inactifs' => $nb_inactifs,
            'users'=>$users
            
        ]);
       
    }
    /**
     *  
     * @Route("/espaceclient", name="espaceclient")
     */
    public function client(UserRepository $userRepository): Response
    {
        return $this->render('dashboard/espace.html.twig');
    }
    
}
