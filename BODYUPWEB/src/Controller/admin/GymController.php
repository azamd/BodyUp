<?php

namespace App\Controller\admin;
use App\Entity\Gym;
use App\Form\GymType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/admin")
 * Class GymController
 * @package App\Controller\admin
 */
class GymController extends AbstractController
{
    /**
     * @Route("/gym", name="gym")
     */
    public function index(Request $request): Response
    {
        $gyms = $this->getDoctrine()->getRepository(Gym::class)->findAll();
        $gym = new Gym();
        $form = $this->createForm(GymType::class,$gym);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $data = $form->getData();
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $img = $form->get('image')->getData();
            $fileName = md5(uniqid()).'.'.$img->guessExtension();
            $img->move($this->getParameter('image_directory'), $fileName);
            $data->setImage($fileName);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($data);
            $entityManager->flush();
            return $this->redirectToRoute('gym');
        }











        return $this->render('admin/gym/index.html.twig',['gyms' => $gyms,'form' => $form->createView()]);
    }
}
