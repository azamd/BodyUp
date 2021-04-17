<?php

namespace App\Controller\Backend;

use App\Entity\User;
use App\Entity\UserActivity;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class DefaultBackendController
 * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
 * @package App\Controller\Backend
 */
class DefaultBackendController extends AbstractController
{

    /**
     * @Route("{_locale}/app", name="app_backend")
     */
    public function appIndex()
    {
        /** @var User $user */
        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();
        $log = $em->getRepository(UserActivity::class)
            ->findBy([
                'user' => $user->getId()
            ], [
                'id' => 'DESC'
            ],
                100
            );

        return $this->render('backend/index.html.twig', [
            'user' => $user,
            'activity' => $log
        ]);

    }

}