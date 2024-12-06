<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts\Api;

interface NFTContract
{
    /**
     * NFTs List (ID Map)
     * @param array<string> $params
     * @return array<mixed>|string
     */
    public function list(array $params = []): array|string;

    /**
     * NFTs Collection Data by ID
     * @return array<mixed>|string
     */
    public function get(string $id): array|string;

    /**
     * NFTs Collection Data by Contract Address
     *
     * @return array<mixed>|string
     */
    public function getCollection(string $platformId, string $contractAddress): array|string;

}
