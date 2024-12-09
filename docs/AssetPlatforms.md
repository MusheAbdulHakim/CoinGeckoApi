## Asset Platforms Api

```php
$client = \MusheAbdulHakim\CoinGecko\CoinGecko::client('your-api-key');

$assetPlatforms = $client->assetPlatforms();
```


### Asset Platforms List (ID Map)


```php
$data = $assetPlatforms->list([
    //parameters
]);

```


### 👑 Token Lists by Asset Platform ID


```php
$data = $assetPlatforms->get($asset_platform_id);

```