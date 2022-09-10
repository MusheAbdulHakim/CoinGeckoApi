# CoinGeckoApi


**CoinGeckApi** is a PHP & Laravel Package, (Designed to help working with coingecko api easier and faster).


## Requirement
- Git
- Composer
- php >= 7.4

<a name="Installation"></a>
## Installation

```bash
$ composer require musheabdulhakim/coingecko
```

## Basic usage


### Example
```php
use MusheAbdulHakim\CoinGecko\CoinGecko;

$coingecko = new CoinGecko();
$ping = $coingecko->ping();

```


## Available methods

### Ping

#### [ping](https://www.coingecko.com/api/documentations/v3#/ping/get_ping)

Check API server status

```php
$ping = $coingecko->ping();
```


### Simple

#### [getPrice](https://www.coingecko.com/api/documentations/v3#/simple/get_simple_price)

Get the current price of any cryptocurrencies in any other supported currencies that you need.

```php
$price = $coingecko->simple()->getPrice('0x,bitcoin', 'usd,rub');
```

#### [getTokenPrice](https://www.coingecko.com/api/documentations/v3#/simple/get_simple_price)

Get current price of tokens (using contract addresses) for a given platform in any other currency that you need.

```php
$token_price = $coingecko->simple()->getTokenPrice('ethereum','0xE41d2489571d322189246DaFA5ebDe1F4699F498', 'usd,rub');
```

#### [getSupportedVsCurrencies](https://www.coingecko.com/api/documentations/v3#/simple/get_simple_supported_vs_currencies)

Get list of supported_vs_currencies.

```php
$data = $coingecko->simple()->getSupportedVsCurrencies();
```

### Coins

#### [getList](https://www.coingecko.com/api/documentations/v3#/coins/get_coins_list)

List all supported coins id, name and symbol (no pagination required)

```php
$coins = $coingecko->coins()->getList();
```

#### [getMarkets](https://www.coingecko.com/api/documentations/v3#/coins/get_coins_markets)

List all supported coins price, market cap, volume, and market related data

```php
$result = $coingecko->coins()->getMarkets('usd');
```

#### [getCoin](https://www.coingecko.com/api/documentations/v3#/coins/get_coins__id_)

Get current data (name, price, market, ... including exchange tickers) for a coin

```php
$data = $coingecko->coins()->getCoin('bitcoin', ['tickers' => 'false', 'market_data' => 'false']);
```

#### [getTickers](https://www.coingecko.com/api/documentations/v3#/coins/get_coins__id__tickers)

Get coin tickers (paginated to 100 items)

```php
$tickets = $coingecko->coins()->getTickers('bitcoin');
```

#### [getHistory](https://www.coingecko.com/api/documentations/v3#/coins/get_coins__id__history)

Get historical data (name, price, market, stats) at a given date for a coin

```php
$result = $coingecko->coins()->getHistory('bitcoin', '30-12-2017');
```

#### [getMarketChart](https://www.coingecko.com/api/documentations/v3#/coins/get_coins__id__market_chart)

Get historical market data include price, market cap, and 24h volume (granularity auto)

```php
$result = $coingecko->coins()->getMarketChart('bitcoin', 'usd', 'max');
```

#### [getMarketChartRange](https://www.coingecko.com/api/documentations/v3#/coins/get_coins__id__market_chart_range)

Get historical market data include price, market cap, and 24h volume within a range of timestamp (granularity auto)

```php
$result = $coingecko->coins()->getMarketChartRange('bitcoin', 'usd', '1392577232', '1422577232');
```

#### [getMarketChartRange](https://www.coingecko.com/api/documentations/v3#/coins/get_coins__id__status_updates) [BETA]

Get status updates for a given coin

```php
$result = $coingecko->coins()->getStatusUpdates('0x');
```

### Contract

#### [getContract](https://www.coingecko.com/api/documentations/v3#/contract/get_coins__id__contract__contract_address_)

Get coin info from contract address

```php
$data = $coingecko->contract()->getContract('ethereum', '0xE41d2489571d322189246DaFA5ebDe1F4699F498');
```

#### [getMarketChart](https://www.coingecko.com/api/documentations/v3#/contract/get_coins__id__contract__contract_address__market_chart_)

Get historical market data include price, market cap, and 24h volume (granularity auto) from a contract address

```php
$result = $coingecko->contract()->getMarketChart('ethereum', '0xE41d2489571d322189246DaFA5ebDe1F4699F498', 'usd', '1');
```

#### [getMarketChartRange](https://www.coingecko.com/api/documentations/v3#/contract/get_coins__id__contract__contract_address__market_chart_range)

Get historical market data include price, market cap, and 24h volume within a range of timestamp (granularity auto) from a contract address

```php
$result = $coingecko->contract()->getMarketChartRange('ethereum', '0xE41d2489571d322189246DaFA5ebDe1F4699F498', 'usd', '11392577232', ' 1422577232');
```

### Exchange [BETA]

#### [getExchanges](https://www.coingecko.com/api/documentations/v3#/exchanges_(beta)/get_exchanges)

List all exchanges

```php
$exchanges = $coingecko->exchanges()->getExchanges();
```

#### [getList](https://www.coingecko.com/api/documentations/v3#/exchanges_(beta)/get_exchanges_list)

List all supported markets id and name (no pagination required)

```php
$exchange_list = $coingecko->exchanges()->getList();
```

#### [getExchange](https://www.coingecko.com/api/documentations/v3#/exchanges_(beta)/get_exchanges__id_)

Get exchange volume in BTC and top 100 tickers only

```php
$exchange = $coingecko->exchanges()->getExchange('binance');
```

#### [getTickers](https://www.coingecko.com/api/documentations/v3#/exchanges_(beta)/get_exchanges__id__tickers)

Get exchange tickers (paginated)

```php
$data = $coingecko->exchanges()->getTickers('binance', ['coin_ids' => '0x,bitcoin']);
```

#### [getStatusUpdates](https://www.coingecko.com/api/documentations/v3#/exchanges_(beta)/get_exchanges__id__status_updates)

Get status updates for a given exchange (beta)

```php
$data = $coingecko->exchanges()->getStatusUpdates('binance');
```

#### [getVolumeChart](https://www.coingecko.com/api/documentations/v3#/exchanges_(beta)/get_exchanges__id__volume_chart)

Get volume_chart data for a given exchange (beta)

```php
$data = $coingecko->exchanges()->getVolumeChart('binance', '1');
```

## Test

To run the tests, run the following command from the project folder.

``` bash
$ ./vendor/bin/phpunit
```

## Inspire By 

#### [coingecko-api](https://github.com/codenix-sv/coingecko-api)

## License

`musheabdulhakim/coingecko` is released under the MIT License. See the bundled [LICENSE](./LICENSE) for details.

