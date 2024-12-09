<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Contracts;

use MusheAbdulHakim\CoinGecko\Exceptions\ErrorException;
use MusheAbdulHakim\CoinGecko\Exceptions\TransporterException;
use MusheAbdulHakim\CoinGecko\Exceptions\UnserializableResponse;
use MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\Payload;
use MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\Response;
use Psr\Http\Message\ResponseInterface;

interface TransporterContract
{
    /**
     * Sends a request to a server.
     *
     *
     * @throws ErrorException|UnserializableResponse|TransporterException
     */
    public function requestObject(Payload $payload): Response;

    /**
     * Sends a content request to a server.
     *
     * @throws ErrorException|TransporterException
     */
    public function requestContent(Payload $payload): string;

    /**
     * Sends a stream request to a server.
     **
     * @throws ErrorException
     */
    public function requestStream(Payload $payload): ResponseInterface;
}
