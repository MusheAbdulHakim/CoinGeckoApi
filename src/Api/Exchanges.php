<?php
declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Request;

class Exchanges extends Request
{

    /**
     * List all exchanges
     * 
     * @param array $params
     * @return array
     * @throws Exception
     */
    public function getExchanges(array $params = []): array
    {
        return $this->get('/exchanges', $params);
    }

    /**
     * Use this to obtain all the markets' id in order to make API calls
     * 
     * @return array
     * @throws Exception
     */
    public function getList(): array
    {
        return $this->get('/exchanges/list');
    }

    /**
     * Get exchange volume in BTC and tickers
     * 
     * @param string $id
     * @return array
     * @throws Exception
     */
    public function getExchange(string $id): array
    {
        return $this->get('/exchanges/' . $id);
    }

    /**
     * 	Get exchange tickers
     * 
     * @param string $id
     * @param array $params
     * @return array
     * @throws Exception
     */
    public function getTickers(string $id, array $params = []): array
    {
        return $this->get('/exchanges/' . $id . '/tickers', $params);
    }


    /**
     * Get volume_chart data for a given exchange
     * 
     * @param string $id
     * @param string $days
     * @return array
     * @throws Exception
     */
    public function getVolumeChart(string $id, string $days): array
    {
        return $this->get('/exchanges/' . $id . '/volume_chart', ['days' => $days]);
    }
}
