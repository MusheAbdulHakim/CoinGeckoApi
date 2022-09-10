<?php
declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Request;

class ExchangeRates extends Request
{

    /**
     * @return array
     * @throws Exception
     */
    public function getExchangeRates(): array
    {
        return $this->get('/exchange_rates');
    }
}
