<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts;

use MusheAbdulHakim\CoinGecko\Api\Coins;
use MusheAbdulHakim\CoinGecko\Api\Ping;
use MusheAbdulHakim\CoinGecko\Api\Simple;

interface ClientContract
{
    public function ping(): Ping;


    public function simple(): Simple;

    public function coins(): Coins;

}
