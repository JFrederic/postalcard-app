<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EmailControllerTest extends WebTestCase
{
    public function testEnvoi()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/envoi');
    }

    public function testListemail()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/email/list');
    }

}
