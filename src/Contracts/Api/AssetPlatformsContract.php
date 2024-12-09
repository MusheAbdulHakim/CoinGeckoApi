<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts\Api;

interface AssetPlatformsContract
{
    /**
     * Asset Platforms List (ID Map)
     * @param array<string> $params
     * @return array<mixed>|string
     */
    public function list(array $params = []): array|string;


    /**
     * 👑 Token Lists by Asset Platform ID
     *
     * @return array<mixed>|string
     */
    public function get(string $id): array|string;

}
