<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CaissierControllerTest extends WebTestCase
{
    public function testgetcaissierAction()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'api/caissiers');
        $rep=$client->getResponse();
        $this->assertSame(200,$client->getResponse()->getStatusCode());
    }

    public function testpostAdminSystemeAction()
    {
        $client = static::createClient();
        $crawler = $client->request('POST', '/api/caissier',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{"Identite":"M@2019","Nom": "Gaye","Prenom": "Maimouna","Adresse": "Thies","Contact": "771853214","NumeroIdentite": "21475836","Login": "mounana@gmail.com","Motdepasse": "4725319846","adminSysteme": 3}');
        $rep=$client->getResponse();
        $this->assertSame(201,$client->getResponse()->getStatusCode());
    }
}