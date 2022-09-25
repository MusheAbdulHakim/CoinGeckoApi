<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Request;

class Indexes extends Request
{

    /**
     * List all market indexes
     * 
     * @param array $params 
     * @return array
     * @throws Exception
     */
    public function getIndexes(array $params = []): array
    {
        return $this->get('/indexes', $params);
    }

    /**
     * get market index by market id and index id
     * 
     * @param string $market_id
     * @param string $id
     * @return array
     * @throws Exception
     */
    public function getIndex(string $market_id, string $id): array
    {
        return $this->get('/indexes/' . $market_id . '/' . $id);
    }

    /**
     * 	list market indexes id and name
     * @return array
     * @throws Exception
     */
    public function getList(): array
    {
        return $this->get('/indexes/list');
    }
}
