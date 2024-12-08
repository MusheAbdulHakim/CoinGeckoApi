<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts\Api;

interface CompaniesContract
{
    /**
     * Public Companies Holdings
     * @param string $id
     * @return array<mixed>|string
     */
    public function list(string $id): array|string;

}
