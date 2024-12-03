<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts\Api;

interface CoinsContract
{
    /**
     * 💼 Top Gainers & Losers
     *
     * @param array<string> $params
     * @return array<mixed>|string
     */
    public function topGainersAndLosers(string $vsCurrency, array $params = []): array|string;

    /**
     * 💼 Recently Added Coins
     *
     * @return array<mixed>|string
     */
    public function recent(): array|string;

    /**
     * 💼 Recently Added Coins
     *
     * @return array<mixed>|string
     */
    public function recentlyAdded(): array|string;

    /**
     * Coins List (ID Map)
     * @param array<bool> $params
     * @return array<mixed>|string
     * @see https://docs.coingecko.com/v3.0.1/reference/coins-list
     */
    public function list(array $params = []): array|string;

    /**
     * Coins List with Market Data
     * @param array<bool> $params
     * @return array<mixed>|string
     * @see https://docs.coingecko.com/v3.0.1/reference/coins-list
     */
    public function listWithMarket(string $vsCurrency, array $params = []): array|string;


    /**
     * Coins List with Market Data
     *
     * @param array<mixed> $params
     * @return array<mixed>|string
     * @see https://docs.coingecko.com/v3.0.1/reference/coins-markets
     */
    public function getMarkets(string $vsCurrency, array $params = []): array|string;

    /**
     * Coin Data by ID
     *
     * @param array<string,boolean> $params
     * @return array<mixed>|string
     * @see https://docs.coingecko.com/v3.0.1/reference/coins-id
     */
    public function getCoin(string $id, array $params = []): array|string;

    /**
     * Coin Data by ID
     *
     * @param array<string,bool> $params
     * @return array<mixed>|string
     * @see https://docs.coingecko.com/v3.0.1/reference/coins-id
     */
    public function data(string $id, array $params = []): array|string;


    /**
     * Coin Data by ID
     *
     * @param array<string,bool> $params
     * @return array<mixed>|string
     * @see https://docs.coingecko.com/v3.0.1/reference/coins-id
     */
    public function get(string $id, array $params = []): array|string;

    /**
     * Coin Tickers by ID
     * @param array<mixed> $params
     * @return array<mixed>|string
     * @see https://docs.coingecko.com/v3.0.1/reference/coins-id-tickers
     */
    public function getTickers(string $id, array $params = []): array|string;

    /**
     * Coin Tickers by ID
     * @param array<mixed> $params
     * @return array<mixed>|string
     * @see https://docs.coingecko.com/v3.0.1/reference/coins-id-tickers
     */
    public function tickers(string $id, array $params = []): array|string;

    /**
     * Coin Historical Data by ID
     * @param array<string,boolean> $params
     * @return array<mixed>|string
     * @see https://docs.coingecko.com/v3.0.1/reference/coins-id-history
     */
    public function getHistory(string $id, string $date, array $params = []): array|string;


    /**
     * Coin Historical Data by ID
     * @param array<string,boolean> $params
     * @return array<mixed>|string
     * @see https://docs.coingecko.com/v3.0.1/reference/coins-id-history
     */
    public function history(string $id, string $date, array $params = []): array|string;

    /**
     * Coin Historical Chart Data by ID
     * @param array<string> $params
     * @return array<mixed>|string
     * @see https://docs.coingecko.com/v3.0.1/reference/coins-id-market-chart
     */
    public function getMarketChart(string $id, string $vsCurrency, string $days, array $params = []): array|string;

    /**
     * Coin Historical Chart Data by ID
     * @param array<string> $params
     * @return array<mixed>|string
     * @see https://docs.coingecko.com/v3.0.1/reference/coins-id-market-chart
     */
    public function chartHistory(string $id, string $vsCurrency, string $days, array $params = []): array|string;

    /**
     * Coin Historical Chart Data by ID
     * @param array<string> $params
     * @return array<mixed>|string
     * @see https://docs.coingecko.com/v3.0.1/reference/coins-id-market-chart
     */
    public function marketChart(string $id, string $vsCurrency, string $days, array $params = []): array|string;


    /**
     * Coin Historical Chart Data by ID
     * @param array<string> $params
     * @return array<mixed>|string
     * @see https://docs.coingecko.com/v3.0.1/reference/coins-id-market-chart
     */
    public function historicalChart(string $id, string $vsCurrency, string $days, array $params = []): array|string;


    /**
     * Coin Historical Chart Data within Time Range by ID
     * @param array<string> $params
     * @return array<mixed>|string
     */
    public function getMarketChartRange(string $id, string $vsCurrency, string $from, string $to, array $params = []): array|string;


    /**
     * Coin Historical Chart Data within Time Range by ID
     * @param array<string> $params
     * @return array<mixed>|string
     */
    public function chartWithin(string $id, string $vsCurrency, string $from, string $to, array $params = []): array|string;

    /**
     * Coin OHLC Chart by ID
     *
     * @param array<string> $params
     * @return array<mixed>|string
     */
    public function ohlcChart(string $id, string $vsCurrency, string $days, array $params = []): array|string;

    /**
     *
     * 💼 Coin OHLC Chart within Time Range by ID
     *
     * @return array<mixed>|string
     */
    public function ohclChartWithin(string $id, string $vsCurrency, int $from, int $to, string $interval): array|string;

    /**
     * 👑 Circulating Supply Chart by ID
     *
     * @return array<mixed>|string
     */
    public function circulatingSupplyChart(string $id, string $days, string $interval): array|string;

    /**
     * 👑 Circulating Supply chart within Time Range by ID
     * @return array<mixed>|string
     */
    public function circulatingSupplyChartWithin(string $id, string $days, string $interval): array|string;

    /**
     * 👑 Total Supply Chart by ID
     * @param array<mixed> $params
     * @return array<mixed>|string
     */
    public function totalSupplyChart(string $id, string $days, array $params = []): array|string;

    /**
     * 👑 Total Supply chart within time range by ID
     *
     * @return array<mixed>|string
     */
    public function totalSupplyChartWithin(string $id, int $from, int $to): array|string;

}
