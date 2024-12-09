<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts\Api;

interface DerivativesContract
{
    /**
     * Derivatives Tickers List
     *
     * @return array<mixed>|string
     */
    public function tickers(): array|string;

    /**
     * Derivatives Exchanges List with Data
     *
     * @param array<string, int> $params
     * @return array<mixed>|string
     */
    public function exchanges(array $params = []): array|string;

    /**
     * Derivatives Exchange Data by ID
     *
     * @param array<mixed> $params
     * @return array<mixed>|string
     */
    public function getExchange(string $id, array $params = []): array|string;

    /**
     * Derivatives Exchanges List (ID Map)
     *
     * @return array<mixed>|string
     */
    public function exchangeIds(): array|string;

}
