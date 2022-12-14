<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Tests;

use MusheAbdulHakim\CoinGecko\Api\AssetPlatforms;
use MusheAbdulHakim\CoinGecko\Api\Categories;
use MusheAbdulHakim\CoinGecko\Api\Coins;
use MusheAbdulHakim\CoinGecko\Api\Companies;
use MusheAbdulHakim\CoinGecko\Api\Contract;
use MusheAbdulHakim\CoinGecko\Api\Derivatives;
use MusheAbdulHakim\CoinGecko\Api\ExchangeRates;
use MusheAbdulHakim\CoinGecko\Api\Exchanges;
use MusheAbdulHakim\CoinGecko\Api\Globals;
use MusheAbdulHakim\CoinGecko\Api\Indexes;
use MusheAbdulHakim\CoinGecko\Api\Search;
use MusheAbdulHakim\CoinGecko\Api\Simple;
use MusheAbdulHakim\CoinGecko\Api\Trending;
use MusheAbdulHakim\CoinGecko\CoinGecko;
use MusheAbdulHakim\CoinGecko\Tests\TestCase;
use Psr\Http\Message\ResponseInterface;

/**
 * Class CoinGecko
 *
 * @category Test
 * @package  MusheAbdulHakim\CoinGecko\Tests
 * @author   Mushe Abdul-Hakim <musheabdulhakim99@gmail.com>
 */
class CoinGeckTests extends TestCase
{

    public function testClient()
    {
        $coingecko = new CoinGecko();
        $this->assertIsObject($coingecko->getClient());
    }


    public function testPing()
    {
        $coingecko = new CoinGecko();
        $this->assertIsArray($coingecko->ping());
    }

    public function testSimple()
    {
        $coingecko = new CoinGecko();
        $this->assertInstanceOf(Simple::class, $coingecko->simple());
    }

    public function testCoins()
    {
        $coingecko = new CoinGecko();
        $this->assertInstanceOf(Coins::class, $coingecko->coins());
    }

    public function testContract()
    {
        $coingecko = new CoinGecko();
        $this->assertInstanceOf(Contract::class, $coingecko->contract());
    }

    public function testassetPlatforms()
    {
        $coingecko = new CoinGecko();
        $this->assertInstanceOf(AssetPlatforms::class, $coingecko->assetPlatforms());
    }

    public function testCategories()
    {
        $coingecko = new CoinGecko();
        $this->assertInstanceOf(Categories::class, $coingecko->categories());
    }

    public function testExchanges()
    {
        $coingecko = new CoinGecko();
        $this->assertInstanceOf(Exchanges::class, $coingecko->exchanges());
    }

    public function testTrending()
    {
        $coingecko = new CoinGecko();
        $this->assertInstanceOf(Trending::class, $coingecko->trending());
    }


    public function testSearch()
    {
        $coingecko = new CoinGecko();
        $this->assertInstanceOf(Search::class, $coingecko->search());
    }

    public function testIndexes()
    {
        $coingecko = new CoinGecko();
        $this->assertInstanceOf(Indexes::class, $coingecko->indexes());
    }

    public function testDerivatives()
    {
        $coingecko = new CoinGecko();
        $this->assertInstanceOf(Derivatives::class, $coingecko->derivatives());
    }


    public function testExchangeRates()
    {
        $coingecko = new CoinGecko();
        $this->assertInstanceOf(ExchangeRates::class, $coingecko->exchangeRates());
    }

    public function testGlobals()
    {
        $coingecko = new CoinGecko();
        $this->assertInstanceOf(Globals::class, $coingecko->globals());
    }

    public function companies()
    {
        $coingecko = new CoinGecko();
        $this->assertInstanceOf(Companies::class, $coingecko->companies());
    }

    public function testGetLastResponseIsNull()
    {
        $coingecko = new CoinGecko();
        $this->assertNull($coingecko->getLastResponse());
    }

    public function testSetLastResponse()
    {
        $coingecko = new CoinGecko();
        $response = $this->createMock(ResponseInterface::class);
        $coingecko->setLastResponse($response);

        $this->assertInstanceOf(ResponseInterface::class, $coingecko->getLastResponse());
    }
}
