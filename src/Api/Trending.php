<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Api\Concerns\Transportable;
use MusheAbdulHakim\CoinGecko\Contracts\Api\TrendingContract;
use MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\Payload;

final class Trending implements TrendingContract
{
    use Transportable;

    public function list(): array|string
    {
        $payload = Payload::get("search/trending");
        return $this->transporter->requestObject($payload)->data();
    }
}
