<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts\Api;

interface GlobalContract
{
    /**
     * Crypto Global Market Data
     * @return array<mixed>|string
     */
    public function list(): array|string;

    /**
     * Global De-Fi Market Data
     * @return array<mixed>|string
     */
    public function defi(): array|string;
}
