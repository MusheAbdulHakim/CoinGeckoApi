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

    /**
     * 💼 NFTs List with Market Data
     *
     * @param array<string,int> $params
     * @return array<mixed>|string
     */
    public function markets(array $params = []): array|string;


    /**
     * 💼 NFTs Collection Historical Chart Data by ID
     *
     * @param array<mixed> $params
     * @return array<mixed>|string
     */
    public function history(string $id, array $params = []): array|string;

    /**
     * 💼 NFTs Collection Historical Chart Data by Contract Address
     *
     * @param array<mixed> $params
     * @return array<mixed>|string
     */
    public function historyByContract(string $id, string $contractAddress, array $params = []): array|string;

    /**
     * 💼 NFTs Collection Tickers by ID
     *
     * @return array<mixed>|string
     */
    public function collectionTickers(string $id): array|string;


}
