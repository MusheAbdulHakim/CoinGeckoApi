<?php 

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko;

use MusheAbdulHakim\CoinGecko\Api\Ping;
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
    
    public function ping()
    {
        return (new Ping($this->transporter))->ping();
    }
    

    

}
