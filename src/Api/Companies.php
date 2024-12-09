<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Api\Concerns\Transportable;
use MusheAbdulHakim\CoinGecko\Contracts\Api\CompaniesContract;
use MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\Payload;

final class Companies implements CompaniesContract
{
    use Transportable;


    public function list(string $id): array|string
    {
        $params['coin_id'] = $id;
        $payload = Payload::get("coin_id", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    public function marketCap(string $days, array $params = []): array|string
    {
        $params['days'] = $days;
        $payload = Payload::get("global/market_cap_chart", $params);
        return $this->transporter->requestObject($payload)->data();
    }
}
