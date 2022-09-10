<?php
namespace MusheAbdulHakim\CoinGecko;

use GuzzleHttp\Client;
use MusheAbdulHakim\CoinGecko\Api\Ping;
use Psr\Http\Message\ResponseInterface;
use MusheAbdulHakim\CoinGecko\Api\Coins;
use MusheAbdulHakim\CoinGecko\Api\Companies;
use MusheAbdulHakim\CoinGecko\Api\Events;
use MusheAbdulHakim\CoinGecko\Api\Simple;
use MusheAbdulHakim\CoinGecko\Api\Finance;
use MusheAbdulHakim\CoinGecko\Api\Globals;
use MusheAbdulHakim\CoinGecko\Api\Indexes;
use MusheAbdulHakim\CoinGecko\Api\Contract;
use MusheAbdulHakim\CoinGecko\Api\Exchanges;
use MusheAbdulHakim\CoinGecko\Api\Derivatives;
use MusheAbdulHakim\CoinGecko\Api\ExchangeRates;

class CoinGecko {


    /**
     * 
     * @var  \MusheAbdulHakim\CoinGecko\Config
     */
    protected $config;

    /**
     * Guzzle http client
     *
     * @var \GuzzleHttp\Client
     */
    protected $http;

    /** @var ResponseInterface|null */
    protected $lastResponse;

    /**
     * CoinGecko Api Version
     *
     * @var string
     */
    protected $version = 'v3';


    /**
     * CoinGecko constructor.
     *
     * 
     */
    public function __construct()
    {
        $this->config = new Config();
        $this->version = $this->config->get('version') ?? $this->version;
        $this->http = new Client(['base_uri' => $this->config->get('base_url')]);
    }


    /**
     * Get GuzzleHttp Client
     *
     * @return Client
     */
    public function getClient(): Client {
        return $this->http;
    }

    /**
     * Get CoinGecko Api Version
     *
     * @return string
     */
    public function getVersion(): string {
        return $this->version;
    }

    /**
     * Set CoinGecko Api Version
     *
     * @param string $version
     * @return string
     */
    public function setVersion(string $version): string {
        return ($this->version = $version);
    }


    public function setLastResponse(ResponseInterface $response)
    {
        return $this->lastResponse = $response;
    }

    public function getLastResponse(): ?ResponseInterface
    {
        return $this->lastResponse;
    }

    public function ping(): array {
        return (new Ping())->ping();
    }


    public function simple(): Simple
    {
        return (new Simple());
    }

    public function coins(): Coins
    {
        return (new Coins());
    }

    public function contract(): Contract
    {
        return (new Contract());
    }

    public function exchanges(): Exchanges
    {
        return (new Exchanges());
    }

    public function finance(): Finance
    {
        return (new Finance());
    }

    public function indexes(): Indexes
    {
        return new (new Indexes());
    }

    public function derivatives(): Derivatives
    {
        return (new Derivatives());
    }

    public function events(): Events
    {
        return (new Events());
    }

    public function exchangeRates(): ExchangeRates
    {
        return (new ExchangeRates());
    }

    public function globals(): Globals
    {
        return (new Globals());
    }

    public function companies(){
        return (new Companies());
    }
}

