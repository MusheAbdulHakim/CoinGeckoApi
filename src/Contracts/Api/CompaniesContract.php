<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts\Api;

interface CompaniesContract
{
    /**
     * Public Companies Holdings
     * @return array<mixed>|string
     */
    public function list(string $id): array|string;


    /**
     * 💼 Global Market Cap Chart Data
     *
     * @param array<string> $params
     * @return array<mixed>|string
     */
    public function marketCap(string $days, array $params = []): array|string;

}
