<?php
// tests/Controller/TrickControllerTest.php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TrickControllerTest extends WebTestCase
{
    public function testView()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/trick/view/5');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        // Count the two img tag and classes .card-img-top contained in /trick/view/5 URL
        $this->assertSame(2, $crawler->filter('img.card-img-top')->count());
    }
}