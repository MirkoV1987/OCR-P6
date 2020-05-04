<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AccountControllerTest extends WebTestCase
{

    private $client = null;

    public function setUp()
    {
        $this->client = static::createClient();
    }

    public function testchangePasswordPageAccess()
    {
        //Check if we need to add /user prefix to url ion order to get a 200 status
        //Assert is valid 
        $this->client->request('GET', '/update-password');

        static::assertSame(
            404,
            $this->client->getResponse()->getStatusCode()
        );
    }

    public function testforgotPasswordPageAccess()
    {
        $this->client->request('GET', '/user/forgot-password');

        static::assertSame(
            200,
            $this->client->getResponse()->getStatusCode()
        );
    }
}