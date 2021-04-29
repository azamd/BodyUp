<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{

   
    /**
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function index(Request $request,UserRepository $userRepository,PaginatorInterface $paginator): Response
    {
        $em = $this->getDoctrine()->getManager();

        $search_input = !empty($request->get('search_input')) ? $request->get('search_input'):'';
        
        $query = $em->getRepository(User::class)->findBySearchInput($search_input);

     
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            3 /*limit per page*/
        );

        return $this->render('user/index.html.twig', [
            'users' => $pagination
        ]);
    }
    
    /**
     * @Route("/login", name="user_login", methods={"GET"})
     */
    public function indexLogin(): Response
    {
        return $this->render('login.html.twig');
    }



    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user): Response
    {
        
        $user = $this->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST') ) {
            $user->setName($request->get('nom'));
            $user->setLastname($request->get('prenom'));
            $user->setPhone($request->get('phone'));
            $user->setAdresse($request->get('adresse'));
            $user->setEmail($request->get('email'));
            
            $entityManager->flush();
            return $this->redirectToRoute('user_index');

        }
 

        return $this->render('user/edit.html.twig', [
            'user' => $user]);
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_index');
    }
}