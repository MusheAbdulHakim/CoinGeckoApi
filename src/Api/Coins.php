<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Request;

class Coins extends Request
{

    /**
     * 	List all coins with id, name, and symbol
     * 
     * @return array
     * @throws Exception
     */
    public function list(array $params = []): array
    {
        return $this->get('/coins/list', $params);
    }

    /**
     * 	List all coins with market data
     * 
     * @param string $vsCurrency
     * @param array $params
     * @return array
     * @throws Exception
     */
    public function getMarkets(string $vsCurrency, array $params = []): array
    {
        $params['vs_currency'] = $vsCurrency;

        return $this->get('/coins/markets', $params);
    }

    /**
     * Get current data for a coin
     * 
     * @param string $id
     * @param array $params
     * @return array
     * @throws Exception
     */
    public function getCoin(string $id, array $params = []): array
    {
        return $this->get('/coins/' . $id, $params);
    }

    /**
     * Get coin tickers (paginated to 100 items)
     * 
     * @param string $id
     * @param array $params
     * @return array
     * @throws Exception
     */
    public function getTickers(string $id, array $params = []): array
    {
        return $this->get('/coins/' . $id . '/tickers', $params);
    }

    /**
     * @param string $id
     * @param string $date
     * @param array $params
     * @return array
     * @throws Exception
     */
    public function getHistory(string $id, string $date, array $params = []): array
    {
        $params['date'] = $date;
        return $this->get('/coins/' . $id . '/history', $params);
    }

    /**
     * @param string $id
     * @param string $vsCurrency
     * @param string $days
     * @return array
     * @throws Exception
     */
    public function getMarketChart(string $id, string $vsCurrency, string $days): array
    {
        $params['vs_currency'] = $vsCurrency;
        $params['days'] = $days;
        return $this->get('/coins/' . $id . '/market_chart', $params);
    }

    /**
     * @param string $id
     * @param string $vsCurrency
     * @param string $from
     * @param string $to
     * @return array
     * @throws Exception
     */
    public function getMarketChartRange(string $id, string $vsCurrency, string $from, string $to): array
    {
        $params['vs_currency'] = $vsCurrency;
        $params['from'] = $from;
        $params['to'] = $to;
        return $this->get('/coins/' . $id . '/market_chart/range', $params);
    }

    /**
     * @param string $id
     * @param array $params
     * @return array
     * @throws Exception
     */
    public function getStatusUpdates(string $id, array $params = []): array
    {
        return $this->get('/coins/' . $id . '/status_updates', $params);
    }
}
