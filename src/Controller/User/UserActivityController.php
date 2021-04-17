<?php
/**
 * Created by IntelliJ IDEA.
 * User: hexim
 * Date: 11/28/17
 * Time: 12:58 PM
 */

namespace App\Controller\User;

use App\Entity\User;
use App\Entity\UserActivity;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * Class UserActivityController
 * @package App\Controller\User
 * @Security("is_granted('ROLE_USER')")
 */
class UserActivityController extends AbstractController
{

    /**
     * @Route("/app/user-activity", name="user_activity")
     */
    public function userActivityAction()
    {
    }
}