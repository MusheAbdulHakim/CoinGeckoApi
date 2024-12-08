<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Api\Concerns\Transportable;
use MusheAbdulHakim\CoinGecko\Contracts\Api\GlobalContract;
use MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\Payload;

final class Globals implements GlobalContract
{
    use Transportable;

    public function list(): array|string
    {
        $payload = Payload::get("global");
        return $this->transporter->requestObject($payload)->data();
    }

    public function defi(): array|string
    {
        $payload = Payload::get("global/decentralized_finance_defi");
        return $this->transporter->requestObject($payload)->data();
    }
}
