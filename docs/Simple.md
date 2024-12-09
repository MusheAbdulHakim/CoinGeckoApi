## Exchanges Api

```php
$client = \MusheAbdulHakim\CoinGecko\CoinGecko::client('your-api-key');

$simple = $client->simple();
```


### Coin Price by IDs

```php
$data = $simple->getPrice($id, $vs_currency, [
    //parameters
]);
```


### Coin Price by Token Addresses

```php
$data = $simple->getTokenPrice($id, $contract_addresses, $vs_currency, [
    //parameters
]);
```


### Supported Currencies List

```php
$data = $simple->getSupportedVsCurrencies();
```