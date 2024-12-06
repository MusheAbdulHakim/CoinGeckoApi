<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts;

use MusheAbdulHakim\CoinGecko\Api\Ping;
use MusheAbdulHakim\CoinGecko\Api\Coins;
use MusheAbdulHakim\CoinGecko\Api\Simple;
use MusheAbdulHakim\CoinGecko\Api\Contract;
use MusheAbdulHakim\CoinGecko\Api\Exchanges;
use MusheAbdulHakim\CoinGecko\Api\Categories;
use MusheAbdulHakim\CoinGecko\Api\AssetPlatforms;

interface ClientContract
{
    public function ping(): Ping;


    public function simple(): Simple;

    public function coins(): Coins;

    public function contract(): Contract;

    public function assetPlatforms(): AssetPlatforms;

    public function categories(): Categories;

    public function exchanges(): Exchanges;

}
