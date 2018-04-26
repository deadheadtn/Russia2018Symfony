<?php

namespace TicketBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ClientMatchControllerControllerTest extends WebTestCase
{
    public function testAffichagematch()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AffichageMatch');
    }

}
