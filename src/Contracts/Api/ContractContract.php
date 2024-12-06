<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts\Api;

interface ContractContract
{
    /**
     * Coin Data by Token Address
     *
     * @return array<mixed>|string
     */
    public function byToken(string $id, string $contactAddress): array|string;

    /**
     * Coin Historical Chart Data by Token Address
     *
     * @param array<string> $params
     * @return array<mixed>|string
     */
    public function history(string $id, string $contactAddress, string $vsCurrency, string $days, array $params = []): array|string;


    /**
     * Coin Historical Chart Data within Time Range by Token Address
     *
     * @param array<mixed> $params
     * @return array<mixed>|string
     */
    public function historyWithin(string $id, string $contactAddress, string $vsCurrency, int $from, int $to, array $params = []): array|string;



}
