## Coins Api

```php
$client = \MusheAbdulHakim\CoinGecko\CoinGecko::client('your-api-key');

$coins = $client->coins();
```


### 💼 Top Gainers & Losers


```php
$data = $coins->topGainersAndLosers($vs_currency, [
    //parameters
]);

```


### 💼 Recently Added Coins


```php
$data = $coins->recent();

//or 

$data = $coins->recentlyAdded();

```


### Coins List (ID Map)


```php
$data = $coins->list([
    //parameters
]);

```


### Coins List with Market Data


```php
$data = $coins->listWithMarket($vs_currency,[
    //parameters
]);
//or
$data = $coins->getMarkets($vs_currency,[
    //parameters
]);

```


### Coin Data by ID

```php
$data = $coins->getCoin($id,[
    //parameters
]);

//or 

$data = $coins->data($id,[
    //parameters
]);

//or 
$data = $coins->get($id,[
    //parameters
]);

```

### Coin Tickers by ID

```php

$data = $coins->getTickers($id,[
    //parameters
]);

//or 

$data = $coins->tickers($id,[
    //parameters
]);

```

### Coin Historical Data by ID


```php

$data = $coins->getHistory($id, $date,[
    //parameters
]);

//or 

$data = $coins->history($id, $date,[
    //parameters
]);

```

### Coin Historical Chart Data by ID


```php

$data = $coins->getMarketChart($id, $vs_currency, $days,[
    //parameters
]);

//or 

$data = $coins->chartHistory($id, $vs_currency, $days, [
    //parameters
]);

//or 

$data = $coins->marketChart($id, $vs_currency, $days, [
    //parameters
]);

//or 

$data = $coins->historicalChart($id, $vs_currency, $days, [
    //parameters
]);

```


### Coin Historical Chart Data within Time Range by ID



```php

$data = $coins->getMarketChartRange($id, $vs_currency, $from, $to,[
    //parameters
]);

//or

$data = $coins->chartWithin($id, $vs_currency, $from, $to,[
    //parameters
]);

```


### Coin OHLC Chart by ID

```php
$data = $coins->ohlcChart($id, $vs_currency, $from, $to,[
    //parameters
]);

```


### 💼 Coin OHLC Chart within Time Range by ID


```php
$data = $coins->ohclChartWithin($id, $vs_currency, $from, $to,$interval);

```


### 👑 Circulating Supply Chart by ID


```php
$data = $coins->circulatingSupplyChart($id, $days,$interval);

```


### 👑 Total Supply Chart by ID


```php
$data = $coins->totalSupplyChart($id, $days,[
    //parameters
]);

```


### 👑 Total Supply chart within time range by ID


```php
$data = $coins->totalSupplyChartWithin($id, $from, $to);

```

