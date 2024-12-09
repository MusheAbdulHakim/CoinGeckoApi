<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Api\Concerns\Transportable;
use MusheAbdulHakim\CoinGecko\Contracts\Api\SearchContract;
use MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\Payload;

final class Search implements SearchContract
{
    use Transportable;

    public function query(array $params = []): array|string
    {
        $payload = Payload::get("search", $params);
        return $this->transporter->requestObject($payload)->data();
    }
}
