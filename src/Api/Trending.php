<?php
declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Request;

/**
 * Top-7 trending coins on CoinGecko as searched by users in the last 24 hours (Ordered by most popular first)
 */
class Trending extends Request {

    /**
     * List trending coins by most popular first
     *
     * @return array
     */
    public function getList(): array {
        return $this->get('/search/trending')['coins'];
    }
}
