<?php


declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko;

use MusheAbdulHakim\CoinGecko\Api\NFT;
use MusheAbdulHakim\CoinGecko\Api\Ping;
use MusheAbdulHakim\CoinGecko\Api\Coins;
use MusheAbdulHakim\CoinGecko\Api\Search;
use MusheAbdulHakim\CoinGecko\Api\Simple;
use MusheAbdulHakim\CoinGecko\Api\Contract;
use MusheAbdulHakim\CoinGecko\Api\Trending;
use MusheAbdulHakim\CoinGecko\Api\Exchanges;
use MusheAbdulHakim\CoinGecko\Api\Categories;
use MusheAbdulHakim\CoinGecko\Api\Derivatives;
use MusheAbdulHakim\CoinGecko\Api\ExchangeRate;
use MusheAbdulHakim\CoinGecko\Api\AssetPlatforms;
use MusheAbdulHakim\CoinGecko\Contracts\ClientContract;
use MusheAbdulHakim\CoinGecko\Contracts\TransporterContract;

final readonly class Client implements ClientContract
{
    /**
     * Creates a Client instance with the given API token.
     */
    public function __construct(private TransporterContract $transporter)
    {
        // ..
    }

    public function ping(): Ping
    {
        return new Ping($this->transporter);
    }

    /**
     *
     * @return array<mixed>|string
     */
    public function pingServer(): string|array
    {
        return (new Ping($this->transporter))->ping();
    }

    public function simple(): Simple
    {
        return new Simple($this->transporter);
    }

    public function coins(): Coins
    {
        return new Coins($this->transporter);
    }

    public function contract(): Contract
    {
        return new Contract($this->transporter);
    }


    public function assetPlatforms(): AssetPlatforms
    {
        return new AssetPlatforms($this->transporter);
    }

    public function categories(): Categories
    {
        return new Categories($this->transporter);
    }

    public function exchanges(): Exchanges
    {
        return new Exchanges($this->transporter);
    }

    public function derivates(): Derivatives
    {
        return new Derivatives($this->transporter);
    }

    public function nft(): NFT
    {
        return new NFT($this->transporter);
    }

    public function exchangeRate(): ExchangeRate
    {
        return new ExchangeRate($this->transporter);
    }

    public function search(): Search
    {
        return new Search($this->transporter);
    }

    public function trending(): Trending
    {
        return new Trending($this->transporter);
    }

}
