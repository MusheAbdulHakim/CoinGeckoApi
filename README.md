# CoinGeckoApi


**CoinGeckApi** is a PHP & Laravel Package, (Designed to help working with coingecko api easier and faster).


## Software Requirement
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

$client = new CoinGecko();
$ping = $client->ping();

```


## Test

To run the tests, run the following command from the project folder.

``` bash
$ ./vendor/bin/phpunit
```


