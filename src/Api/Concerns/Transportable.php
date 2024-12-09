<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api\Concerns;

use MusheAbdulHakim\CoinGecko\Contracts\TransporterContract;

trait Transportable
{
    public function __construct(private readonly TransporterContract $transporter)
    {
        // ..
    }
}
