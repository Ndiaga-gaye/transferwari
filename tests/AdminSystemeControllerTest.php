<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminSystemeControllerTest extends WebTestCase
{
    public function testgetAdminSystemeAction()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/api/adminSystemes');
        $rep=$client->getResponse();
        $this->assertSame(200,$client->getResponse()->getStatusCode());
    }
    public function testpostAdminSystemeActionok()
    {
        $client = static::createClient();
        $crawler = $client->request('POST', '/api/adminSysteme',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{"NomComplet":"Cheikh Bamba Fall","Email": "bamba@gmail.com","Motdepasse": 1853249257}');
        $rep=$client->getResponse();
        $this->assertSame(201,$client->getResponse()->getStatusCode());
    }
/*
    public function testpostAdminSystemeActionko()
    {
        $client = static::createClient();
        $crawler = $client->request('POST', '/api/adminSysteme',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{"NomComplet":"Cheikh Bamba Fall","Email": "bamba@gmail.com","Motdepasse": "jalamek"}');
        $rep=$client->getResponse();
        $this->assertSame(200,$client->getResponse()->getStatusCode());
    }
    */
}
