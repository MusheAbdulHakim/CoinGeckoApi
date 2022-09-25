<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Request;

class Globals extends Request
{

    /**
     * Get cryptocurrency global data
     * 
     * @return array
     * @throws Exception
     */
    public function getGlobal(): array
    {
        return $this->get('/global');
    }

    /**
     * Get Top 100 Cryptocurrency Global Decentralized Finance(defi) data
     * 
     * @return array
     * @throws Exception
     */
    public function getGlobalDecentralizedFinanceDefi(): array
    {
        return $this->get('/global/decentralized_finance_defi');
    }
}
