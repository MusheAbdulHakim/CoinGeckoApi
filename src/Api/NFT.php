<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Contracts\Api\NFTContract;
use MusheAbdulHakim\CoinGecko\Api\Concerns\Transportable;
use MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\Payload;

final class NFT implements NFTContract
{
    use Transportable;

    public function list(array $params = []): array|string
    {
        $payload = Payload::get("nfts/list", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    public function get(string $id): array|string
    {
        $payload = Payload::get("nfts/$id");
        return $this->transporter->requestObject($payload)->data();
    }

    public function getCollection(string $platformId, string $contractAddress): array|string
    {
        $payload = Payload::get("nfts/$platformId/contract/$contractAddress");
        return $this->transporter->requestObject($payload)->data();
    }

}
