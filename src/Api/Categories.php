<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Api\Concerns\Transportable;
use MusheAbdulHakim\CoinGecko\Contracts\Api\CategoriesContract;
use MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\Payload;

final class Categories implements CategoriesContract
{
    use Transportable;

    /**
    * @inheritDoc
    */
    public function list(): array|string
    {
        $payload = Payload::get("coins/categories/list");
        return $this->transporter->requestObject($payload)->data();
    }

    /**
     * @inheritDoc
     */
    public function listWithData(array $params = []): array|string
    {
        $payload = Payload::get("coins/categories", $params);
        return $this->transporter->requestObject($payload)->data();
    }
}
