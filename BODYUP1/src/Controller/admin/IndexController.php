<?php

namespace App\Controller\admin;

use PHPMailer\PHPMailer\PHPMailer;
use App\Entity\Exercices;
use App\Form\ExercicesType;
use App\Repository\ExercicesRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
/**
 * @Route("/admin")
 * Class IndexController
 * @package App\Controller\admin
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="exercices_list")
     */
    public function home(): Response
    {
        $exercices= $this->getDoctrine()->getRepository(Exercices::class)->findAll();
        return $this->render("admin/exercices/index.html.twig",['exercices' => $exercices]);
    }
    /**
     * @Route("/index/save", name="save")
     */
    public function save() {
        $entityManager = $this->getDoctrine()->getManager();

        $exercice = new Exercices();
        $exercice->setName('Yoga');
        $exercice->setPrice(4000);
        $exercice->setRate(30);
        $exercice->setDuration(22);

        $entityManager->persist($exercice);
        $entityManager->flush();

        return new Response('exercice enregisté avec id   '.$exercice->getId());
    }

    /**
     * @Route("/index/new", name="new_exercice")
     * Method({"GET", "POST"})
     */
    public function new(Request $request) {
        $ex = new Exercices();
        $form= $this->createForm(ExercicesType::class,$ex);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
        $ex = $form->getData();
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($ex);
        $entityManager->flush();

            return $this->redirectToRoute('exercices_list');

        }return  $this->render('admin/exercices/new.html.twig',['form' => $form->createView()]);
    }






    /**
     * @Route("/index/edit/{id}", name="edit_exercice")
     * Method({"GET", "POST"})
     */
    public function edit(Request $request, $id) {
        $exercice = new Exercices();
        $exercice = $this->getDoctrine()->getRepository(Exercices::class)->find($id);

        $form = $this->createFormBuilder($exercice)
            ->add('name', TextType::class)
            ->add('price', TextType::class)
            ->add('save', SubmitType::class, array(
                'label' => 'EDIT'
            ))->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return $this->redirectToRoute('exercices_list');
        }

        return $this->render('admin/exercices/edit.html.twig');
    }

    /**
     * @Route("/index/delete/{id}",name="delete_exercice")
     * @Method({"DELETE"})
     */
    public function delete (Request $request, $id) {
        $ex = $this->getDoctrine()->getRepository(Exercices::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($ex);
        $entityManager->flush();

        $response = new Response();
        $response->send();

        return $this->redirectToRoute('exercices_list');
    }

    /**
     * @Route("/index/order",name="order_exercice")
     */
   public function order(Request $request, ExercicesRepository $repository): Response{


        $exercices = $repository->tri_asc();
        return $this->render("admin/exercices/index.html.twig",['exercices' => $exercices]);
   }



   public function searchAction(Request $request){

     $em=$this->getDoctrine()->getManager();
     $requeststring=$request->get(p);
     $exercices= $em->getRepository('AppBundle:exercices')->findEntitiesByString($requeststring);
     if(!$exercices) {
         $result['exercices']['error']="exercice not found";

     }
     else {

         $result['exercices']=$this->getRealEntities($exercices);
     }
      return new Response(json_encode($result));

   }


public function  getRealEntities($exercices){
foreach ($exercices as $exercices ){

    $RealEntities[$exercices->getExId()] =[$exercices->getImage(), $exercices->getName()];
}

}



/**
* @Route("/index/stat/{id}", name="Stat")
* @return \Symfony\Component\HttpFoundation\Response
*/
    public function statAction(Request $request, $id)
    {
        $pieChart = new PieChart();



        $data = $this->getDoctrine()->getRepository(Exercices::class)->find($id);


        $pieChart->getData()->setArrayToDataTable( array(
            ['Price', 'Duration'],
            ['Price',   (int) $data->getPrice() ],
            ['Duration',    (int) $data->getDuration()],
        ));

        $pieChart->getOptions()->setTitle('Duration / Price Ratio');
        $pieChart->getOptions()->setHeight(1000);
        $pieChart->getOptions()->setWidth(1000);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#07600');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(30);
        //$pieChart->getOptions()->setIs3D(true);
        $pieChart->getOptions()->setPieHole(0.45);

        return $this->render('admin/exercices/stats.html.twig', array(
                'piechart' => $pieChart,
            )

        );
    }

    /**
     * @Route("/index/mailer", name="Mailer")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function sendMail(Request $request){
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '465';
        $mail->isHTML();
        $mail->Username = 'bodyupworkouts@gmail.com';
        $mail->Password = 'bodyup.123';
        $mail->SetFrom('no-reply@bodyup.tn');
        $mail->Subject = 'BODYUP client service';
        $mail->Body = 'check our latest workouts, packages, diet suggestions and more NOW !!';
        $mail->addAddress('tinkertailor1999@gmail.com');
        $mail->send();
        print ("email sent");
        return $this->redirectToRoute('exercices_list');

    }




}
