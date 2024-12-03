<?php


declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko;

use MusheAbdulHakim\CoinGecko\Api\Ping;
use MusheAbdulHakim\CoinGecko\Api\Simple;
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

}
