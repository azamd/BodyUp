<?php

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUserName()
    {
        $user = new User();
        $this->assertNull($user->getUserName());
        $user->setUserName(123);
        $this->assertStringMatchesFormat('%d', $user->getUserName());
        $user->setUserName('username');
        $this->assertStringMatchesFormat('%a', $user->getUserName());
    }

    public function testEmail()
    {
        $user = new User();
        $this->assertNull($user->getEmail());

    }

}