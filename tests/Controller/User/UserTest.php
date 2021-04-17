<?php

namespace App\Tests\Controller\User;

use App\DataFixtures\UserFixtures;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserTest extends WebTestCase
{

    public function testUserLoginPage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/en/login');

        // check response code value
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        // asserts that the response matches the h1 selector
        $this->assertGreaterThan(0, $crawler->filter('h1')->count());

        // check login form
        $this->assertGreaterThan(
            0,
            $crawler->filter('form.form-signin')->count(),
            'This page contain form with form-signin class.'
        );

        // check login header text
        $this->assertEquals(
            1,
            $crawler->filter('html:contains("Sign in")')->count(),
            'Page contain login header text "Sign in".'
        );

        // check content type
        $this->assertTrue(
            $client->getResponse()->headers->contains(
                'Content-Type',
                'text/html; charset=UTF-8'
            ),
            'The "Content-Type" header is "text/html; charset=UTF-8"'
        );

        // cache must revalidate
        $this->assertTrue(
            $client->getResponse()->headers->contains(
                'cache-control',
                'max-age=0, must-revalidate, private'
            ),
            'The "Cache-Control" header must be "max-age=0, must-revalidate, private"'
        );
    }

    public function testUserLoginPageSendFormLoginUnconfirmedUser()
    {
        $client = static::createClient();

        // load fixtures
        $container = $client->getContainer();
        $doctrine = $container->get('doctrine');
        $entityManager = $doctrine->getManager();
        $fixture = new UserFixtures($container->get('security.password_encoder'));
        $fixture->load($entityManager);

        $crawler = $client->request('GET', '/en/login');

        $form = $crawler->selectButton('Login')->form();
        $form['form_login[_username]'] = 'test@domain.com';
        $form['form_login[_password]'] = 'Pa33w0rd';
        $client->submit($form);
        if ($client->getResponse()->isRedirect()) {
            $client->followRedirect();
            if ($client->getResponse()->isRedirect()) {
                $client->followRedirect();
            }
        }
        // check response code value
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        // check url
        $this->assertRegExp(
            '(\/en\/account-not-confirmed\/)',
            $client->getRequest()->getUri(),
            'URL contain "/en/account-not-confirmed/"'
        );

    }

    public function testUserLoginPageSendFormLoginConfirmedUser()
    {
        $client = static::createClient();

        // load fixtures
        $container = $client->getContainer();
        $doctrine = $container->get('doctrine');
        $entityManager = $doctrine->getManager();
        $fixture = new UserFixtures($container->get('security.password_encoder'));
        $fixture->load($entityManager);

        $crawler = $client->request('GET', '/en/login');

        $form = $crawler->selectButton('Login')->form();
        $form['form_login[_username]'] = 'test2@domain.com';
        $form['form_login[_password]'] = 'Pa33w0rd';
        $client->submit($form);
        if ($client->getResponse()->isRedirect()) {
            $client->followRedirect();
            if ($client->getResponse()->isRedirect()) {
                $client->followRedirect();
            }
        }
        // check response code value
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        // check url
        $this->assertRegExp(
            '(\/en\/app)',
            $client->getRequest()->getUri(),
            'Backend URL contain "/en/app".'
        );
        // check user name
        $crawler = $client->getCrawler();
        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("John Doo")')->count(),
            'User "John Doo" logged in.'
        );
    }

    public function testUserRegistrationPage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/en/register');

        // check response code value
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        // asserts that the response matches the h1 selector
        $this->assertGreaterThan(0, $crawler->filter('h1')->count());

        // check login form
        $this->assertGreaterThan(
            0,
            $crawler->filter('form.form-register')->count(),
            'This page contain form with "form-register" class.'
        );

        // check login header text
        $this->assertEquals(
            1,
            $crawler->filter('html:contains("Register")')->count(),
            'Page contain login header text "Register"'
        );

        // check content type
        $this->assertTrue(
            $client->getResponse()->headers->contains(
                'Content-Type',
                'text/html; charset=UTF-8'
            ),
            'The "Content-Type" header is "text/html; charset=UTF-8"'
        );

        // cache must revalidate
        $this->assertTrue(
            $client->getResponse()->headers->contains(
                'cache-control',
                'max-age=0, must-revalidate, private'
            ),
            'The "Cache-Control" header must be "max-age=0, must-revalidate, private"'
        );
    }

    public function testUserRegisterPageSendValidForm()
    {
        $client = static::createClient();

        // load fixtures
        $container = $client->getContainer();
        $doctrine = $container->get('doctrine');
        $entityManager = $doctrine->getManager();
        $fixture = new UserFixtures($container->get('security.password_encoder'));
        $fixture->load($entityManager);

        $crawler = $client->request('GET', '/en/register');

        $form = $crawler->selectButton('Register')->form();
        $form['app_bundle_user_registration_form[userName]'] = 'test123';
        $form['app_bundle_user_registration_form[email]'] = 'test@gmail.com';
        $form['app_bundle_user_registration_form[plainPassword][first]'] = 'Pa33w0rd';
        $form['app_bundle_user_registration_form[plainPassword][second]'] = 'Pa33w0rd';
        $client->submit($form);
        if ($client->getResponse()->isRedirect()) {
            $client->followRedirect();
        }
        // check response code value
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        // check info alert
        $crawler = $client->getCrawler();
        $this->assertGreaterThan(0, $crawler->filter('html:contains("Registration is complete")')->count());

    }

    public function testUserRegisterPageSendFormDuplicateUserNameAndEmailAndPasswordsMismatch()
    {
        $client = static::createClient();

        // load fixtures
        $container = $client->getContainer();
        $doctrine = $container->get('doctrine');
        $entityManager = $doctrine->getManager();
        $fixture = new UserFixtures($container->get('security.password_encoder'));
        $fixture->load($entityManager);

        $crawler = $client->request('GET', '/en/register');

        $form = $crawler->selectButton('Register')->form();
        $form['app_bundle_user_registration_form[userName]'] = 'John Doe';
        $form['app_bundle_user_registration_form[email]'] = 'test@domain.com';
        $form['app_bundle_user_registration_form[plainPassword][first]'] = 'Pa33word';
        $form['app_bundle_user_registration_form[plainPassword][second]'] = 'Pa33w0rd';
        $client->submit($form);
        if ($client->getResponse()->isRedirect()) {
            $client->followRedirect();
        }
        // check response code value
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        // check info alert
        $crawler = $client->getCrawler();
        // check alerts
        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Username does exist.")')->count(),
            'Registration form wit alert "Username does exist."'
        );
        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("This e-mail is currently in use.")')->count(),
            'Registration form wit alert "This e-mail is currently in use."'
        );
        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Passwords mismatch.")')->count(),
            'Registration form wit alert "Passwords mismatch."'
        );

    }

    public function testUserRegisterPageSendFormNoExistMxEmailDomain()
    {
        $client = static::createClient();

        // load fixtures
        $container = $client->getContainer();
        $doctrine = $container->get('doctrine');
        $entityManager = $doctrine->getManager();
        $fixture = new UserFixtures($container->get('security.password_encoder'));
        $fixture->load($entityManager);

        $crawler = $client->request('GET', '/en/register');

        $form = $crawler->selectButton('Register')->form();
        $form['app_bundle_user_registration_form[userName]'] = 'Test User';
        $form['app_bundle_user_registration_form[email]'] = 'test@googlenx3e.com';
        $form['app_bundle_user_registration_form[plainPassword][first]'] = 'Pa33w0rd';
        $form['app_bundle_user_registration_form[plainPassword][second]'] = 'Pa33w0rd';
        $client->submit($form);
        if ($client->getResponse()->isRedirect()) {
            $client->followRedirect();
        }
        // check response code value
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        // check info alert
        $crawler = $client->getCrawler();
        // check alerts
        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("This is not the correct e-mail format")')->count(),
            'Registration form wit alert "This is not the correct e-mail format"'
        );

    }

    public function testUserRegisterPageSendFormValidationPassword()
    {
        $client = static::createClient();

        // load fixtures
        $container = $client->getContainer();
        $doctrine = $container->get('doctrine');
        $entityManager = $doctrine->getManager();
        $fixture = new UserFixtures($container->get('security.password_encoder'));
        $fixture->load($entityManager);

        $crawler = $client->request('GET', '/en/register');

        $form = $crawler->selectButton('Register')->form();
        $form['app_bundle_user_registration_form[userName]'] = 'Test User';
        $form['app_bundle_user_registration_form[email]'] = 'test@domain.com';
        $form['app_bundle_user_registration_form[plainPassword][first]'] = 'p';
        $form['app_bundle_user_registration_form[plainPassword][second]'] = 'p';
        $client->submit($form);
        if ($client->getResponse()->isRedirect()) {
            $client->followRedirect();
        }
        // check response code value
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        // check info alert
        $crawler = $client->getCrawler();
        // check alerts
        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Password is too short.")')->count(),
            'Registration form wit alert "Password is too short."'
        );
        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Password must contain: a-z,A-Z,0-9")')->count(),
            'Registration form wit alert "Password must contain: a-z,A-Z,0-9"'
        );

    }

    public function testUserRegisterPageSendFormBlank()
    {
        $client = static::createClient();

        // load fixtures
        $container = $client->getContainer();
        $doctrine = $container->get('doctrine');
        $entityManager = $doctrine->getManager();
        $fixture = new UserFixtures($container->get('security.password_encoder'));
        $fixture->load($entityManager);

        $crawler = $client->request('GET', '/en/register');

        $form = $crawler->selectButton('Register')->form();
        $client->submit($form);
        if ($client->getResponse()->isRedirect()) {
            $client->followRedirect();
        }
        // check response code value
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        // check info alert
        $crawler = $client->getCrawler();
        // check alerts
        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Username cannot be blank.")')->count(),
            'Registration form wit alert "Username cannot be blank."'
        );
        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Insert your e-mail.")')->count(),
            'Registration form wit alert "Insert your e-mail."'
        );
        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Password cannot be empty.")')->count(),
            'Registration form wit alert "Password cannot be empty."'
        );

    }

    public function testUserAccountActivationPendingUser()
    {
        $client = static::createClient();

        // load fixtures
        $container = $client->getContainer();
        $doctrine = $container->get('doctrine');
        $entityManager = $doctrine->getManager();
        $fixture = new UserFixtures($container->get('security.password_encoder'));
        $fixture->load($entityManager);
        /** @var User $user */
        $user = $entityManager->getRepository(User::class)->findOneBy(['email' => 'test@domain.com']);
        // check instance of
        $this->assertInstanceOf(User::class, $user);
        $client->request('GET', '/en/account-activation/' . $user->getConfirmationToken());
        if ($client->getResponse()->isRedirect()) {
            $client->followRedirect();
        }
        // check response code value
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        // check alert
        $crawler = $client->getCrawler();
        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Your account has been activated. You can sign in.")')->count(),
            'Registration form wit alert "Your account has been activated. You can sign in."'
        );

    }



//dump($client->getResponse()->getContent());

}