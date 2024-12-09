<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts\Api;

interface SimpleContract
{
    /**
     * Coin Price by IDs
     *
     * @param array<string,bool> $params
     * @return array<mixed>|string
     * @see https://docs.coingecko.com/v3.0.1/reference/simple-price
     */
    public function getPrice(string $ids, string $vsCurrencies, array $params = []): array|string;


    /**
     * Coin Price by Token Addresses
     * @param array<string,bool> $params
     * @return array<mixed>|string
     */
    public function getTokenPrice(string $id, string $contractAddress, string $vsCurrencies, array $params = []): array|string;

    /**
     * Supported Currencies List
     * @return array<mixed>|string
     */
    public function getSupportedVsCurrencies(): array|string;
}
