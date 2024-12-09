<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Api\Concerns\Transportable;
use MusheAbdulHakim\CoinGecko\Contracts\Api\ExchangesContract;
use MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\Payload;

final class Exchanges implements ExchangesContract
{
    use Transportable;


    public function list(array $params = []): array|string
    {
        $payload = Payload::get("exchanges", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    public function idMap(): array|string
    {
        $payload = Payload::get("exchanges/list");
        return $this->transporter->requestObject($payload)->data();
    }

    public function get(string $id): array|string
    {
        $payload = Payload::get("exchanges/$id");
        return $this->transporter->requestObject($payload)->data();
    }

    public function tickers(string $id, array $params = []): array|string
    {
        $payload = Payload::get("exchanges/$id/tickers", $params);
        return $this->transporter->requestObject($payload)->data();

    }

    public function volume(string $id, array $params = []): array|string
    {
        $payload = Payload::get("exchanges/$id/volume_chart", $params);
        return $this->transporter->requestObject($payload)->data();
    }


    public function volumenWithin(string $id, int $from, int $to): array|string
    {
        $params['from'] = $from;
        $params['to'] = $to;
        $payload = Payload::get("exchanges/$id/volume_chart/range", $params);
        return $this->transporter->requestObject($payload)->data();
    }

}
