<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts\Api;

interface TrendingContract
{
    /**
     * Trending Search List
     *
     * @return array<mixed>|string
     */
    public function list(): array|string;
}
