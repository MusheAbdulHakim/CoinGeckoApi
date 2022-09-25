<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Facades;

use Illuminate\Support\Facades\Facade;
use MusheAbdulHakim\CoinGecko\CoinGecko as CoinGeckoService;

/**
 * Class CoinGeckoFacade
 *
 * @author  MusheAbdulHakim  <musheabdulhakim99@gmail.com>
 */
class CoinGecko extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return CoinGeckoService::class;
    }
}
