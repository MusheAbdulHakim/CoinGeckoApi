<?php
namespace MusheAbdulHakim\CoinGecko;

use GuzzleHttp\Client;
use MusheAbdulHakim\CoinGecko\Response;
use MusheAbdulHakim\CoinGecko\CoinGecko;

class Request {

    protected $config;

    protected $client;

    protected $response;

    public function __construct(){
        $this->client = new CoinGecko();
        $this->response = new Response();
        $this->config = new Config();
    }
    
    /**
     * Make a 
     * @param string $uri
     * @param array $query
     * @return array
     * @throws Exception
     */
    public function get(string $uri, array $query = []): array {
        try {
            $url = $this->client->getVersion().'/'.$uri;
            $api_key = $this->config->get('api_key');
            if(!empty($api_key)){
                $query['x_cg_pro_api_key'] = $api_key;
            }
            $http_response = $this->client->getClient()->get(
                $url,
                [
                    'query' => $query
                ]
            );
            $this->client->setLastResponse($http_response);
            return $this->response->toArray($http_response);
        } catch (\Exception $e) {
            return array($e->getMessage());
        }
    }

}