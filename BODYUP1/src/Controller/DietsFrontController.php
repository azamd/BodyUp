<?php

namespace App\Controller;

use App\Entity\Diet;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DietsFrontController extends AbstractController
{
    /**
     * @Route("/diets", name="diets_front")
     */
    public function index(): Response
    {

        $repo = $this->getDoctrine()->getRepository(Diet::class);
        $diet = $repo->findAll();

        return $this->render('diets_front/index.html.twig', [
            'controller_name' => 'DietsFrontController',
            'diet' => $diet
        ]);
    }


    /**
     * @Route("diets/desc/{id}", name="diet_desc", methods={"GET"})
     */
    public function show(Diet $diet): Response
    {
        return $this->render('diets_front/desc.html.twig', [
            'diet' => $diet,
        ]);
    }

    /**
     * @Route("diets/bmi", name="bmi")
     */
    public function send(): Response
    {
        return $this->render('diets_front/bmi.html.twig', [

        ]);
    }





    /**
     * @Route("diets/chart/{id}", name="chart_front")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function statAction(Request $request, $id)
    {
        $pieChart = new PieChart();


        $data = $this->getDoctrine()->getRepository(Diet::class)->find($id);


        $pieChart->getData()->setArrayToDataTable(array(
            ['Calories', 'Carbs'],
            ['Calories', (int)$data->getCalories()],
            ['Carbs', (int)$data->getCarbs()],
            ['Fat', (int)$data->getFat()],
            ['Protein', (int)$data->getProtein()],


        ));

        $pieChart->getOptions()->setTitle($data->getName());
        $pieChart->getOptions()->setHeight(1000);
        $pieChart->getOptions()->setWidth(1000);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#07600');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(30);
        $pieChart->getOptions()->setIs3D(true);


        return $this->render('diets_front/charts.html.twig', array(
                'piechart' => $pieChart,
            )

        );

    }


}
