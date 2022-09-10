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

## Test

To run the tests, run the following command from the project folder.

``` bash
$ ./vendor/bin/phpunit
```


