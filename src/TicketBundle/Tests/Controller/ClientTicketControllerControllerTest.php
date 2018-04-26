<?php

namespace TicketBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ClientTicketControllerControllerTest extends WebTestCase
{
    public function testAffichageticket()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'Client/AffichageTicket');
    }

}
