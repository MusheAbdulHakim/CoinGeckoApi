<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Exceptions;

use JsonException;

final class UnserializableResponse extends Exception
{
    /**
     * Creates a new Exception instance.
     */
    public function __construct(JsonException $exception)
    {
        parent::__construct($exception->getMessage(), 0, $exception);
    }
}
