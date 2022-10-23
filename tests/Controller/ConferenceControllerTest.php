<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ConferenceControllerTest extends WebTestCase
{
      public function testIndex()
      {
            $client = static::createClient();
            $client->request('GET', '/');
            $this->assertResponseIsSuccessful();
            $this->assertSelectorTextContains('h4', 'Ajouter un commentaire');

            echo $client->getResponse();
      }
}