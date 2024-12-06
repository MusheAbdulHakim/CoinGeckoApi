<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Api\Concerns\Transportable;
use MusheAbdulHakim\CoinGecko\Contracts\Api\ContractContract;
use MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\Payload;

final class Contract implements ContractContract
{
    use Transportable;

    /**
     * @inheritDoc
     */
    public function byToken(string $id, string $contactAddress): array|string
    {

        $payload = Payload::get("coins/$id/contract/$contactAddress");
        return $this->transporter->requestObject($payload)->data();

    }

    /**
     * @inheritDoc
     */
    public function history(string $id, string $contactAddress, string $vsCurrency, string $days, array $params = []): array|string
    {
        $params['vs_currency'] = $vsCurrency;
        $params['days'] = $days;
        $payload = Payload::get("coins/$id/contract/$contactAddress/market_chart", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    /**
     * @inheritDoc
     */
    public function historyWithin(string $id, string $contactAddress, string $vsCurrency, int $from, int $to, array $params = []): array|string
    {
        $params['vs_currency'] = $vsCurrency;
        $params['from'] = $from;
        $params['to'] = $to;
        $payload = Payload::get("coins/$id/contract/$contactAddress/market_chart/range", $params);
        return $this->transporter->requestObject($payload)->data();
    }


}
