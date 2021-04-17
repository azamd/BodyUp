<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{

    public function testDefaultPage()
    {
        $client = static::createClient();

        $client->request('GET', '/');

        // check that the response is a redirect to any URL
        $this->assertTrue($client->getResponse()->isRedirect());

        // check - redirect to default en language
        $this->assertTrue($client->getResponse()->isRedirect('/en'));

        // check return code
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    public function testDefaultPageCsLanguage()
    {
        $client = static::createClient();

        $client->request('GET', '/cs');

        // check return code
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testDefaultPageEnLanguage()
    {
        $client = static::createClient();

        $client->request('GET', '/en');

        // check return code
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testChangeLocaleEn()
    {
        $client = static::createClient();

        $client->request('GET', '/locale/en');

        // check return code
        $this->assertEquals(302, $client->getResponse()->getStatusCode());

    }

    public function testChangeLocaleCs()
    {
        $client = static::createClient();

        $client->request('GET', '/locale/cs');

        // check return code
        $this->assertEquals(302, $client->getResponse()->getStatusCode());

    }

}