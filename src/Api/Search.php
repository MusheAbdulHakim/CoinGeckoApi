<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Request;

class Search extends Request
{

    public function query(string $query): array
    {
        $params = [];
        $params['query'] = $query;
        return $this->get('/search', $params);
    }
}
