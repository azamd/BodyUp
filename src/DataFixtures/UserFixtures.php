<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Utils\TokenGenerator;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        // Purge all
        $purge = new ORMPurger($manager);
        $purge->purge();

        // Add one test user
        $token = new TokenGenerator();

        // unconfirmed user
        $user = new User();
        $user->setUsername('John Doe');
        $user->setEmail('test@domain.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'Pa33w0rd')
        );
        $user->setConfirmationToken($token->generateToken());
        $user->setConfirmationTokenCreatedAt(new \DateTime());
        $user->setCreatedAt(new \DateTime());
        $manager->persist($user);

        // confirmed user
        $user = new User();
        $user->setUsername('John Doo');
        $user->setEmail('test2@domain.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'Pa33w0rd')
        );
        $user->setConfirmationToken(null);
        $user->setConfirmed(true);
        $user->setConfirmationTokenCreatedAt(new \DateTime());
        $user->setCreatedAt(new \DateTime());
        $manager->persist($user);

        $manager->flush();
    }

}