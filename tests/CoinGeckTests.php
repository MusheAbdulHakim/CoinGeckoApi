<?php
namespace MusheAbdulHakim\CoinGecko\Tests;

use PHPUnit\Framework\TestCase;
use MusheAbdulHakim\CoinGecko\Config;
use MusheAbdulHakim\CoinGecko\CoinGecko;

/**
 * Class CoinGecko
 *
 * @category Test
 * @package  MusheAbdulHakim\CoinGecko\Tests
 * @author   Mushe Abdul-Hakim <musheabdulhakim99@gmail.com>
 */
class CoinGeckTests extends TestCase {


    public function testSayHello()
    {
        $config = new Config();
        $client = new CoinGecko($config);

        $result = $client->BaseUrl();
        $expected = $config->get('base_url');

        $this->assertEquals($result, $expected);
        
    }

}