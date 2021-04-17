<?php

namespace App\Security;

use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LogoutSuccessHandler implements LogoutSuccessHandlerInterface
{

    public function onLogoutSuccess(Request $request)
    {
        return new RedirectResponse('/logout-success');
    }

}