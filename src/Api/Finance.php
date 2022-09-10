<?php
namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Request;

class Finance extends Request {
    /**
     * @param array $params
     * @return array
     * @throws Exception
     */
    public function getPlatforms(array $params = []): array
    {
        return $this->get('/finance_platforms', $params);
    }

    /**
     * @param array $params
     * @return array
     * @throws Exception
     */
    public function getProducts(array $params = []): array
    {
        return $this->get('/finance_products', $params);
    }
}