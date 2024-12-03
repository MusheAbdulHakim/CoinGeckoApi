<?php 
declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts\Api;
interface PingContract
{


    /**
     * 
     * Check API server status
     * 
     * @see https://docs.coingecko.com/v3.0.1/reference/ping-server
     * @return array
     */
    public function ping(): array;

}