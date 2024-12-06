<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts\Api;

interface CategoriesContract
{
    /**
     * Coins Categories List (ID Map)
     *
     * @return array<mixed>|string
     */
    public function list(): array|string;


    /**
     * Coins Categories List with Market Data
     *
     * @param array<mixed> $params
     * @return array<mixed>|string
     */
    public function listWithData(array $params = []): array|string;
}
