<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Api\Concerns\Transportable;
use MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\Payload;
use MusheAbdulHakim\CoinGecko\Contracts\Api\DerivativesContract;

final class Derivatives implements DerivativesContract
{
    use Transportable;

    public function tickers(): array|string
    {
        $payload = Payload::get("derivatives");
        return $this->transporter->requestObject($payload)->data();
    }

    public function exchanges(array $params = []): array|string
    {
        $payload = Payload::get("derivatives/exchanges", $params);
        return $this->transporter->requestObject($payload)->data();
    }


    public function getExchange(string $id, array $params = []): array|string
    {
        $payload = Payload::get("derivatives/exchanges/$id", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    public function exchangeIds(): array|string
    {
        $payload = Payload::get("derivatives/exchanges/list");
        return $this->transporter->requestObject($payload)->data();

    }
}
