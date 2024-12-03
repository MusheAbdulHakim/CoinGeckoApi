<?php
declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko;

final class CoinGecko {


    /**
     * Initialize the client factory.
     * This gives you control over the client. you will be able to set headers, baseurl,
     * and httpclient.
     */
    public static function init(string $apiKey): Factory
    {
        return self::factory()
            ->withApiKey($apiKey);
    }

    public static function client(string $apiKey, string $baseUri = '', string $version = ''): Client
    {
        $apiBaseUri = '';
        if ($baseUri !== '') {
            $apiBaseUri = $baseUri;
        }

        $apiVersion = '';
        if ($version !== '') {
            $apiVersion = $version;
        }

        return self::factory()
            ->withBaseUri($apiBaseUri)
            ->withApiKey($apiKey)
            ->withVersion($apiVersion)
            ->make();
    }

    /**
     * Creates a new factory instance to configure a custom Open AI Client
     */
    public static function factory(): Factory
    {
        return new Factory();
    }
}