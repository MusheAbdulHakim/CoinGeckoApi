<?php
namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Request;

/**
 * Get public companies bitcoin or ethereum holdings
 */
class Companies extends Request {

    /**
     * Get public companies bitcoin or ethereum holdings
     *
     * @param string $coin_id
     * @return array
     */
    public function getPublicTreasury(string $coin_id): array {

        return $this->get('companies/public_treasury/'.$coin_id);
    }

}