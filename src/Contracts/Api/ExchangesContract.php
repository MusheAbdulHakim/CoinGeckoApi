<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts\Api;

interface ExchangesContract
{
    /**
     * Exchanges List with data
     *
     * @param array<int> $params
     * @return array<mixed>|string
     */
    public function list(array $params = []): array|string;


    /**
     * Exchanges List (ID Map)
     *
     * @return array<mixed>|string
     */
    public function idMap(): array|string;

    /**
     * Exchange Data by ID
     * @return array<mixed>|string
     */
    public function get(string $id): array|string;

    /**
     * Exchange Tickers by ID
     *
     * @param array<mixed> $params
     * @return array<mixed>|string
     */
    public function tickers(string $id, array $params = []): array|string;

    /**
     * Exchange Volume Chart by ID
     * @param array<mixed> $params
     * @return array<mixed>|string
     */
    public function volume(string $id, array $params = []): array|string;


    /**
     * 💼 Exchange Volume Chart within Time Range by ID
     *
     * @return array<mixed>|string
     */
    public function volumenWithin(string $id, int $from, int $to): array|string;
}
