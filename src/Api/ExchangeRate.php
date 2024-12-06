<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Api\Concerns\Transportable;
use MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\Payload;
use MusheAbdulHakim\CoinGecko\Contracts\Api\ExchangeRateContract;

final class ExchangeRate implements ExchangeRateContract
{
    use Transportable;

    public function list(): array|string
    {
        $payload = Payload::get("exchange_rates");
        return $this->transporter->requestObject($payload)->data();
    }
}
