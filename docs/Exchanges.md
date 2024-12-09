## Exchanges Api

```php
$client = \MusheAbdulHakim\CoinGecko\CoinGecko::client('your-api-key');

$exchanges = $client->exchanges();
```


### Exchanges List with data

```php
$data = $exchanges->list([
    //parameters
]);
``` 


### Exchanges List (ID Map)

```php
$data = $exchanges->idMap();
``` 


### Exchange Data by ID


```php
$data = $exchanges->get($id);
``` 


### Exchange Tickers by ID


```php
$data = $exchanges->tickers($id, [
    //parameters
]);
``` 


### Exchange Volume Chart by ID


```php
$data = $exchanges->volume($id, [
    //parameters
]);
``` 



### 💼 Exchange Volume Chart within Time Range by ID


```php
$data = $exchanges->volumenWithin($id, $from, $to);
``` 



