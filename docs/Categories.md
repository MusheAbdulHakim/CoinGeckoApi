## Categories Api

```php
$client = \MusheAbdulHakim\CoinGecko\CoinGecko::client('your-api-key');

$categories = $client->categories();
```


### Coins Categories List (ID Map)


```php
$data = $categories->list();

```


### Coins Categories List with Market Data


```php
$data = $categories->listWithData([
    //parameters
]);

```