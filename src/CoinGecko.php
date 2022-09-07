<?php
namespace MusheAbdulHakim\CoinGecko;

use GuzzleHttp\Client;

class CoinGecko {


    /**
     * 
     * @var  \MusheAbdulHakim\CoinGecko\Config
     */
    private $config;

    /**
     * Guzzle http client
     *
     * @var \GuzzleHttp\Client
     */
    private $http;

    /**
     * CoinGecko constructor.
     *
     * @param \MusheAbdulHakim\CoinGecko\Config $config
     */
    public function __construct(?Config $config=null, ?Client $client=null)
    {
        $this->config = $config;
        $this->http = $client ?: new Client(['base_uri' => $config->get('base_url')]) ;
    }


    public function BaseUrl(){
        return $this->config->get('base_url');
    }

}

