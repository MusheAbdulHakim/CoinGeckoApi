<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Request;

class AssetPlatforms extends Request
{

    /**
     * List all asset platforms
     *
     * @return array
     */
    public function getList(): array
    {
        return $this->get('/asset_platforms');
    }
}
