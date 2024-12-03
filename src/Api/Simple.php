<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Api\Concerns\Transportable;
use MusheAbdulHakim\CoinGecko\Contracts\Api\SimpleContract;
use MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\Payload;

final class Simple implements SimpleContract
{
    use Transportable;


    public function getPrice(string $ids, string $vsCurrencies, array $params = []): array|string
    {
        $params['ids'] = $ids;
        $params['vs_currencies'] = $vsCurrencies;
        $payload = Payload::get("simple/price", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    public function getTokenPrice(string $id, string $contractAddress, string $vsCurrencies, array $params = []): array|string
    {
        $params['contract_addresses'] = $contractAddress;
        $params['vs_currencies'] = $vsCurrencies;

        $payload = Payload::get("simple/token_price/$id", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    public function getSupportedVsCurrencies(): array|string
    {
        $payload = Payload::get("simple/supported_vs_currencies");
        return $this->transporter->requestObject($payload)->data();
    }


}
