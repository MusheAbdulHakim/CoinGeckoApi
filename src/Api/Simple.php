<?php
declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Request;

class Simple extends Request {

    /**
     * price(s) of cryptocurrency
     *
     * @param string $ids 
     *  id of coins, comma-separated if querying more than 1 coin
     * 
     * @param string $vs_currencies 
     *  vs_currency of coins, comma-separated if querying more than 1 vs_currency
     *  refers to @method getSupportedVsCurrencies()
     * 
     * @param array $params
     * @return void
     */
    public function getPrice(string $ids, string $vs_currencies, array $params = []){
        $params['ids'] = $ids;
        $params['vs_currencies'] = $vs_currencies;
        return $this->get('/simple/price', $params);
    }

    /**
     * @param string $id
     * @param string $contractAddresses
     * @param string $vsCurrencies
     * @param array $params
     * @return array
     * @throws Exception
     */
    public function getTokenPrice(
        string $id,
        string $contractAddresses,
        string $vsCurrencies,
        array $params = []
    ): array {
        $params['contract_addresses'] = $contractAddresses;
        $params['vs_currencies'] = $vsCurrencies;

        return $this->get('/simple/token_price/' . $id, $params);
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getSupportedVsCurrencies(){
        return $this->get('/simple/supported_vs_currencies');
    }

}