## Contract Api

```php
$client = \MusheAbdulHakim\CoinGecko\CoinGecko::client('your-api-key');

$contract = $client->contract();
```


### Coin Data by Token Address

```php
$data = $contract->byToken($id, $contact_address);

```


### Coin Historical Chart Data by Token Address


```php
$data = $contract->history($id, $contact_address, $vs_currency, $days, [
    //parameters
]);
```


### Coin Historical Chart Data within Time Range by Token Address


```php
$data = $contract->historyWithin($id, $contact_address, $vs_currency, $from, $to, [
    //parameters
]);
```