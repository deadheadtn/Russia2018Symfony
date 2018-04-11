<?php

namespace TicketBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminTicketControllerTest extends WebTestCase
{
    public function testAffichage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'Admin/Tickets/Affichage');
    }

    public function testAjout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'Admin/tickets/Ajout');
    }

    public function testModif()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'Admin/tickets/modif');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'Admin/tickets/supprimer');
    }

    public function testRecherche()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'Admin/Tickets/Recherche');
    }

}
