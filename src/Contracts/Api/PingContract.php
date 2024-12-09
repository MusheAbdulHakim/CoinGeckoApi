<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts\Api;

interface PingContract
{
    /**
     *
     * Check API server status
     *
     * @return array<mixed>|string
     * @see https://docs.coingecko.com/v3.0.1/reference/ping-server
     */
    public function ping(): array|string;

}
