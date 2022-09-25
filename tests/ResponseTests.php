<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Tests;

use GuzzleHttp\Psr7\Response;
use MusheAbdulHakim\CoinGecko\Exceptions\ResponseException;
use MusheAbdulHakim\CoinGecko\Response as CoinGeckoResponse;
use MusheAbdulHakim\CoinGecko\Tests\TestCase;

class ResponseTests extends TestCase
{


    public function testToArray()
    {

        $data = [
            'foo' => 'bar'
        ];
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode($data));
        $http_response = new CoinGeckoResponse();
        $this->assertEquals($data, $http_response->toArray($response));
    }

    public function testResponseWithEmptyBody()
    {
        $data = [];
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode($data));
        $http_response = new CoinGeckoResponse();
        $this->assertEquals($data, $http_response->toArray($response));
    }

    public function testResponseException()
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], '');
        $http_response = new CoinGeckoResponse();
        $this->expectException(ResponseException::class);
        $http_response->toArray($response);
    }

    public function testResponseWithIncorrectContentType()
    {
        $data = [
            'foo' => 'bar'
        ];
        $response = new Response(200, ['Content-Type' => 'application/javascript'], json_encode($data));
        $http_response = new CoinGeckoResponse();
        $this->expectException(ResponseException::class);
        $this->assertEquals($data, $http_response->toArray($response));
    }
}
