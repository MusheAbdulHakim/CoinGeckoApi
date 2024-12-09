<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts;

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
use MusheAbdulHakim\CoinGecko\Api\Companies;
use MusheAbdulHakim\CoinGecko\Api\Globals;

interface ClientContract
{
    public function ping(): Ping;


    public function simple(): Simple;

    public function coins(): Coins;

    public function contract(): Contract;

    public function assetPlatforms(): AssetPlatforms;

    public function categories(): Categories;

    public function exchanges(): Exchanges;

    public function derivates(): Derivatives;

    public function nft(): NFT;

    public function exchangeRate(): ExchangeRate;

    public function search(): Search;

    public function trending(): Trending;


    public function globals(): Globals;

    public function companies(): Companies;


}
