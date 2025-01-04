<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\ValueObjects\Transporter;

use MusheAbdulHakim\CoinGecko\Enums\Transporter\ContentType;

/**
 * @internal
 */
final readonly class Headers
{
    /**
     * Creates a new Headers value object.
     *
     * @param  array<string, string>  $headers
     */
    private function __construct(private array $headers)
    {
        // ..
    }

    /**
     * Creates a new Headers value object
     */
    public static function create(): self
    {
        return new self([]);
    }

    /**
     * Creates a new Headers value object with the given API token.
     */
    public static function withAuthorization(bool $isPro, ApiKey $apiKey): self
    {
        return new self([
            !empty($isPro) && ($isPro === true) ? 'x-cg-pro-api-key' : 'x-cg-demo-api-key' => "{$apiKey->toString()}",
        ]);
    }

    /**
     * Creates a new Headers value object, with the given content type, and the existing headers.
     */
    public function withContentType(ContentType $contentType, string $suffix = ''): self
    {
        return new self([
            ...$this->headers,
            'Content-Type' => $contentType->value.$suffix,
        ]);
    }


    /**
     * Creates a new Headers value object, with the newly added header, and the existing headers.
     */
    public function withCustomHeader(string $name, string $value): self
    {
        return new self([
            ...$this->headers,
            $name => $value,
        ]);
    }

    /**
     * @return array<string, string> $headers
     */
    public function toArray(): array
    {
        return $this->headers;
    }
}
