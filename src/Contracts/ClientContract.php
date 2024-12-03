<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts;

use MusheAbdulHakim\CoinGecko\Api\Ping;

interface ClientContract
{
  
    /**
     * 
     * @return \MusheAbdulHakim\CoinGecko\Api\Ping
     */
    public function ping(): Ping;

}
