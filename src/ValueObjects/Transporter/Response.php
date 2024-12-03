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
     * @param  mixed  $data
     */
    private function __construct(
        private mixed $data
    ) {
        // ..
    }

    /**
     * Creates a new Response value object from the given data.
     *
     *
     * @param  mixed $data
     */
    public static function from($data): self
    {
        return new self($data);
    }

    /**
     * Returns the response data.
     *
     * @return array<mixed>
     */
    public function data(): array
    {
        return $this->data;
    }

    /**
     * Get item from the response data.
     */
    public function get(string $key): mixed
    {
        // @phpstan-ignore-next-line
        return $this->data[$key];
    }
}
