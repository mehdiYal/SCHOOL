<?php

namespace PaymentBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PaymentControllerControllerTest extends WebTestCase
{
    public function testInit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/init');
    }

}
