<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Request;
use MusheAbdulHakim\CoinGecko\Api\Concerns\Transportable;
use MusheAbdulHakim\CoinGecko\Contracts\Api\PingContract;
use MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\Payload;

class Ping implements PingContract
{
    use Transportable;

    /**
     * @inheritDoc
     */
    public function ping(): array
    {
        $payload = Payload::get("ping");
        return $this->transporter->requestObject($payload)->data();
    }

}
