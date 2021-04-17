<?php

namespace App\Security;

use App\Entity\User;
use App\Exception\AccountNotConfirmed;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface
{

    public function checkPreAuth(UserInterface $user)
    {

    }

    public function checkPostAuth(UserInterface $user)
    {
        if (!$user instanceof User) {
            return;
        }

        /** @var User $user */
        if(!$user->getConfirmed() && $user->getConfirmationToken()!==null)
            throw new AccountNotConfirmed("Account prohibited. Need email confirmation.");
    }

}