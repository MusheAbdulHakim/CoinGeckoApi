<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Api\Concerns\Transportable;
use MusheAbdulHakim\CoinGecko\Contracts\Api\CoinsContract;
use MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\Payload;

final class Coins implements CoinsContract
{
    use Transportable;

    /**
     * @inheritDoc
     */
    public function topGainersAndLosers(string $vsCurrency, array $params = []): array|string
    {
        $params['vs_currency'] = $vsCurrency;
        $payload = Payload::get("coins/top_gainers_losers", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    /**
    * @inheritDoc
    */
    public function recent(): array|string
    {
        $payload = Payload::get("coins/list/new");
        return $this->transporter->requestObject($payload)->data();
    }

    /**
    * @inheritDoc
    */
    public function recentlyAdded(): array|string
    {
        $payload = Payload::get("coins/list/new");
        return $this->transporter->requestObject($payload)->data();
    }

    /**
     * @inheritDoc
     */
    public function list(array $params = []): array|string
    {
        $payload = Payload::get("coins/list", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    /**
     * @inheritDoc
     */
    public function listWithMarket(string $vsCurrency, array $params = []): array|string
    {
        $params['vs_currency'] = $vsCurrency;
        $payload = Payload::get("coins/markets", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    /**
     * @inheritDoc
     */
    public function getMarkets(string $vsCurrency, array $params = []): array|string
    {
        $params['vs_currency'] = $vsCurrency;
        $payload = Payload::get("coins/markets", $params);
        return $this->transporter->requestObject($payload)->data();
    }


    /**
    * @inheritDoc
    */
    public function getCoin(string $id, array $params = []): array|string
    {
        $payload = Payload::get("coins/$id", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    /**
    * @inheritDoc
    */
    public function data(string $id, array $params = []): array|string
    {
        $payload = Payload::get("coins/$id", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    /**
    * @inheritDoc
    */
    public function get(string $id, array $params = []): array|string
    {
        $payload = Payload::get("coins/$id", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    /**
     * @inheritDoc
     */
    public function getTickers(string $id, array $params = []): array|string
    {
        $payload = Payload::get("coins/$id/tickers", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    /**
     * @inheritDoc
     */
    public function tickers(string $id, array $params = []): array|string
    {
        $payload = Payload::get("coins/$id/tickers", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    /**
     * @inheritDoc
     */
    public function getHistory(string $id, string $date, array $params = []): array|string
    {
        $params['date'] = $date;
        $payload = Payload::get("coins/$id/history", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    /**
     * @inheritDoc
     */
    public function history(string $id, string $date, array $params = []): array|string
    {
        $params['date'] = $date;
        $payload = Payload::get("coins/$id/history", $params);
        return $this->transporter->requestObject($payload)->data();
    }


    /**
     * @inheritDoc
     */
    public function getMarketChart(string $id, string $vsCurrency, string $days, array $params = []): array|string
    {
        $params['vs_currency'] = $vsCurrency;
        $params['days'] = $days;
        $payload = Payload::get("coins/$id/market_chart", $params);
        return $this->transporter->requestObject($payload)->data();
    }


    /**
     * @inheritDoc
     */
    public function chartHistory(string $id, string $vsCurrency, string $days, array $params = []): array|string
    {
        $params['vs_currency'] = $vsCurrency;
        $params['days'] = $days;
        $payload = Payload::get("coins/$id/market_chart", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    /**
     * @inheritDoc
     */
    public function marketChart(string $id, string $vsCurrency, string $days, array $params = []): array|string
    {
        $params['vs_currency'] = $vsCurrency;
        $params['days'] = $days;
        $payload = Payload::get("coins/$id/market_chart", $params);
        return $this->transporter->requestObject($payload)->data();
    }


    /**
     * @inheritDoc
     */
    public function historicalChart(string $id, string $vsCurrency, string $days, array $params = []): array|string
    {
        $params['vs_currency'] = $vsCurrency;
        $params['days'] = $days;
        $payload = Payload::get("coins/$id/market_chart", $params);
        return $this->transporter->requestObject($payload)->data();
    }


    /**
     * @inheritDoc
     */
    public function getMarketChartRange(string $id, string $vsCurrency, string $from, string $to, array $params = []): array|string
    {
        $params['vs_currency'] = $vsCurrency;
        $params['from'] = $from;
        $params['to'] = $to;
        $payload = Payload::get("coins/$id/market_chart/range", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    /**
     * @inheritDoc
     */
    public function chartWithin(string $id, string $vsCurrency, string $from, string $to, array $params = []): array|string
    {
        $params['vs_currency'] = $vsCurrency;
        $params['from'] = $from;
        $params['to'] = $to;
        $payload = Payload::get("coins/$id/market_chart/range", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    /**
    * @inheritDoc
    */
    public function ohlcChart(string $id, string $vsCurrency, string $days, array $params = []): array|string
    {
        $params['vs_currency'] = $vsCurrency;
        $params['days'] = $days;
        $payload = Payload::get("coins/$id/ohlc", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    /**
    * @inheritDoc
    */
    public function ohclChartWithin(string $id, string $vsCurrency, int $from, int $to, string $interval): array|string
    {
        $params['vs_currency'] = $vsCurrency;
        $params['from'] = $from;
        $params['to'] = $to;
        $params['interval'] = $interval;
        $payload = Payload::get("coins/$id/ohlc/range", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    /**
    * @inheritDoc
    */
    public function circulatingSupplyChart(string $id, string $days, string $interval): array|string
    {
        $params['days'] = $days;
        $params['interval'] = $interval;
        $payload = Payload::get("coins/$id/circulating_supply_chart", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    /**
    * @inheritDoc
    */
    public function circulatingSupplyChartWithin(string $id, string $days, string $interval): array|string
    {
        $params['days'] = $days;
        $params['interval'] = $interval;
        $payload = Payload::get("coins/$id/circulating_supply_chart", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    public function totalSupplyChart(string $id, string $days, array $params = []): array|string
    {
        $params['days'] = $days;
        $payload = Payload::get("coins/$id/total_supply_chart", $params);
        return $this->transporter->requestObject($payload)->data();
    }

    public function totalSupplyChartWithin(string $id, int $from, int $to): array|string
    {
        $params['from'] = $from;
        $params['to'] = $to;
        $payload = Payload::get("coins/$id/total_supply_chart/range", $params);
        return $this->transporter->requestObject($payload)->data();
    }

}
