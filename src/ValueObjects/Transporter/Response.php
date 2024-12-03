<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\ValueObjects\Transporter;

/**
 * @internal
 */
final readonly class Response
{
    /**
     * Creates a new Response value object.
     * 
     * @param array<mixed>|string $data
     */
    private function __construct(
        private array|string $data
    ) {
        // ..
    }

    /**
     * Creates a new Response value object from the given data.
     *
     *
     * @param array<mixed>|string $data
     * @return \MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\Response
     */
    public static function from(array|string $data): self
    {
        return new self($data);
    }

    /**
     * Returns the response data.
     *
     * @return array<mixed>|string
     */
    public function data(): array|string
    {
        return $this->data;
    }

    /**
     * Get item from the response data.
     * 
     * @return array<mixed>|string
     */
    public function get(string $key): array|string
    {
        // @phpstan-ignore-next-line
        return $this->data[$key];
    }
}
