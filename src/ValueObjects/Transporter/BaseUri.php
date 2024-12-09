<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\ValueObjects\Transporter;

use MusheAbdulHakim\CoinGecko\Contracts\StringableContract;

/**
 * @internal
 */
final readonly class BaseUri implements StringableContract
{
    /**
     * Creates a new Base URI value object.
     */
    private function __construct(private string $baseUri, private string $version)
    {
        // ..
    }


    /**
     * Creates a new Base URI value object.
     */
    public static function from(string $baseUri, string $version): self
    {
        return new self($baseUri, $version);
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        foreach (['http://', 'https://'] as $protocol) {
            if (str_starts_with($this->baseUri, $protocol)) {
                return "$this->baseUri/$this->version/";
            }
        }

        return "https://$this->baseUri/$this->version/";
    }
}
