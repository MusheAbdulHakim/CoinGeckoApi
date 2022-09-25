<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Tests\Api;

use MusheAbdulHakim\CoinGecko\Api\Ping;
use MusheAbdulHakim\CoinGecko\Tests\TestCase;

class PingTest extends TestCase
{

    public function testPing()
    {
        $ping = (new Ping())->ping();
        $this->assertIsArray($ping);
    }
}
