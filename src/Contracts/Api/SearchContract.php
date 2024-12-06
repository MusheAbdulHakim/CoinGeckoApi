<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts\Api;

interface SearchContract
{
    /**
     * Search Queries
     *
     * @param array<mixed> $params
     * @return array<mixed>|string
     */
    public function query(array $params = []): array|string;
}
