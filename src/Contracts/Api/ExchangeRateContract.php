<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts\Api;

interface ExchangeRateContract
{
    /**
     * BTC-to-Currency Exchange Rates
     * @return array<mixed>|string
     */
    public function list(): array|string;
}
