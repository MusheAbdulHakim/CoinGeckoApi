<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Api\Concerns\Transportable;
use MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\Payload;
use MusheAbdulHakim\CoinGecko\Contracts\Api\AssetPlatformsContract;

final class AssetPlatforms implements AssetPlatformsContract
{
    use Transportable;

    /**
     * @inheritDoc
     */
    public function list(array $params = []): array|string
    {
        $payload = Payload::get("asset_platforms", $params);
        return $this->transporter->requestObject($payload)->data();
    }
}
