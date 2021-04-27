<?php

namespace App\Controller\admin;

use App\Entity\Diet;
use App\Form\DietType;
use App\Repository\DietRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/admin")
 * Class DietController
 * @package App\Controller\admin
 */
class DietController extends AbstractController
{



    /**
     * @Route("/diets", name="diets_list")
     */
    public function home(): Response
    {
        $diet= $this->getDoctrine()->getRepository(Diet::class)->findAll();
        return $this->render("admin/diets/index.html.twig",['diet' => $diet]);
    }
    /**
     * @Route("/diets/save", name="save")
     */
    public function save() {
        $entityManager = $this->getDoctrine()->getManager();

        $diet = new Diet();
        $diet->setName('Diet 1');
        $diet->setDescription('good diet');
        $diet->setCalories(30);
        $diet->setCarbs(10);
        $diet->setFat(100);
        $diet->setProtein(20);
        $diet->setBmi('overweight');

        $entityManager->persist($diet);
        $entityManager->flush();

        return new Response('diet saved by id   '.$diet->getId());
    }

    /**
     * @Route("/diets/new", name="new_diet")
     * Method({"GET", "POST"})
     */
    public function new(Request $request) {
        $dt = new Diet();
        $form= $this->createForm(DietType::class,$dt);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $dt = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($dt);
            $entityManager->flush();

            return $this->redirectToRoute('diets_list');

        }return  $this->render('admin/diets/new.html.twig',['form' => $form->createView()]);
    }





    /**
     * @Route("/diets/edit/{id}", name="edit_diet")
     * Method({"GET", "POST"})
     */
    public function edit(Request $request, $id) {
        $diet = new Diet();
        $diet = $this->getDoctrine()->getRepository(Diet::class)->find($id);

        $form = $this->createFormBuilder($diet)
            ->add('name', TextType::class,['attr' => [
                'placeholder'=>"Diet's name",
                'class' => 'form-control'
            ]
            ])

            ->add('description', TextType::class,['attr' => [
                'placeholder'=>"Diet's description",
                'class' => 'form-control'
            ]
            ])
            ->add('calories', TextType::class,['attr' => [
                'placeholder'=>"Diet's calories",
                'class' => 'form-control'
            ]
            ])
            ->add('carbs', TextType::class,['attr' => [
                'placeholder'=>"Diet's carbs",
                'class' => 'form-control'
            ]
            ])
            ->add('fat', TextType::class,['attr' => [
                'placeholder'=>"Diet's fat",
                'class' => 'form-control'
            ]
            ])
            ->add('protein', TextType::class,['attr' => [
                'placeholder'=>"Diet's protein",
                'class' => 'form-control'
            ]
            ])
            ->add('bmi', TextType::class,['attr' => [
                'placeholder'=>"BMI target",
                'class' => 'form-control'
            ]
            ])

            ->add('save', SubmitType::class, array(
                    'label' => 'EDIT Diet')
            )->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return $this->redirectToRoute('diets_list');
        }

        return $this->render('admin/diets/edit.html.twig');
    }

    /**
     * @Route("/diets/delete/{id}",name="delete_diet")
     * Method({"DELETE"})
     */
    public function delete (Request $request, $id) {
        $dt = $this->getDoctrine()->getRepository(Diet::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($dt);
        $entityManager->flush();

        $response = new Response();
        $response->send();

        return $this->redirectToRoute('diets_list');
    }

    /**
     * @Route("/diets/order",name="order_diet")
     */
    public function order(Request $request, DietRepository $repository): Response{


        $diets= $repository->tri_asc();
        return $this->render("admin/diets/index.html.twig",['diet' => $diets]);
    }


    /**
     * @Route("/diets/stat/{id}", name="Stats")
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


        return $this->render('admin/diets/stats.html.twig', array(
                'piechart' => $pieChart,
            )

        );

    }
    }
