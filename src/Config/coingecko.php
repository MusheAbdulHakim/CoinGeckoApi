<?php

return [

    /*
    |--------------------------------------------------------------------------
    |CoinGecko Api Version
    |--------------------------------------------------------------------------
    |
    */
    'COINGECKO_API_VERSION' => 'v3',

    /**
     * Base Api Url.
     *
     * Note:
     *  If you are using api pro version,
     *  Replace with https://pro-api.coingecko.com/api
     *
     *
     *
     */
    'COINGECKO_BASE_URI' => 'https://api.coingecko.com/api',

    /**
     * CoinGecko Api Key.
     *
     * Note:
     *  Pro Api Users only.
     *
     */
    'COINGECKO_API_KEY' => '',

    /**
     * Set to true if you are using the pro version
     * When this is set to true, make sure the base uri is also set to the pro api url
     */
    'COINGECKO_PRO' => false,

];
