## Ping Api

```php
$client = \MusheAbdulHakim\CoinGecko\CoinGecko::client('your-api-key');

$ping = $client->ping();
```


### Check API server status

```php
$response = $client->ping()->ping();

//or

$response = $cliennt->pingServer();

```

