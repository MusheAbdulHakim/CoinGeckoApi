<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Request;


class Categories extends Request
{

    /**
     * List all categories
     *
     * @return array
     */
    public function getList(): array
    {
        return $this->get('/coins/categories/list');
    }

    /**
     * List all categories with market data
     *
     * @param string $order
     * @return array
     */
    public function getListWithMarketData(string $order = 'market_cap_desc'): array
    {
        $params['order'] = $order;
        return $this->get('/coins/categories', $params);
    }
}
