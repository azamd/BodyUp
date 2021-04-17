<?php
/**
 * Created by IntelliJ IDEA.
 * User: hexim
 * Date: 11/27/17
 * Time: 3:32 PM
 */

namespace App\Utils;

use App\Entity\User;
use App\Entity\UserActivity;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Exception\InvalidArgumentException;

class UserActivityProcess
{

    const LOGIN = 'LOGIN';
    const REGISTRATION = 'REGISTRATION';
    const ACCOUNT_CONFIRMED = 'ACCOUNT_CONFIRMED';
    const ACCOUNT_NEW_CONFIRMATION = 'ACCOUNT_NEW_CONFIRMATION';
    const CHANGE_PWD_REQUEST = 'CHANGE_PWD_REQUEST';
    const CHANGE_PWD_DONE = 'CHANGE_PWD_DONE';

    /**
     * Save user activity information to database
     * @param string $activity
     * @param User $user
     * @param ObjectManager $em
     * @param Request $request
     */
    public function saveActivityFromRequest(string $activity, User $user, ObjectManager $em, Request $request)
    {
        if (!is_string($activity)) {
            throw new InvalidArgumentException('Value activity is not string!');
        }
        $userActivity = new UserActivity();
        $userActivity->setUser($user);
        $userActivity->setAddress($request->getClientIp());
        $userActivity->setUserAgent($request->headers->get('user-agent'));
        $userActivity->setActivity($activity);
        $userActivity->setCreatedAt();
        $em->persist($userActivity);
        $em->flush();
    }

}