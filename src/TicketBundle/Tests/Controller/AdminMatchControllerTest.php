<?php

namespace TicketBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminMatchControllerTest extends WebTestCase
{
    public function testAffichagestandings()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'Match/Affichage');
    }

}
