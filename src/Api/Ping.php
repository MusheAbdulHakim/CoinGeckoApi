<?php
namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Request;


class Ping extends Request {

    /**
     * @return array
     * @throws Exception
     */
    public function ping(): array
    {
        return $this->get('/ping');
    }

}