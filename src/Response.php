<?php
declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko;

use MusheAbdulHakim\CoinGecko\Exceptions\ResponseException;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Response
 * @package MusheAbdulHakim\CoinGecko
 */
class Response {

    /**
     * Convert Api response to Array. Else throws an Exception
     *
     * @param ResponseInterface $response
     * @return array
     * @throws Exception
     */
    public function toArray(ResponseInterface $response): array {
        $body = (string) $response->getBody();
        if (strpos($response->getHeaderLine('Content-Type'), 'application/json') === 0) {
            $content = json_decode($body, true);
            if (JSON_ERROR_NONE === json_last_error()) {
                return $content;
            }

            throw new ResponseException('Error converting response to array. JSON_ERROR: '
                . json_last_error() . ' --' . $body . '---');
        }
        throw new ResponseException('Error converting response to array. Content-Type 
            is not application/json');
    }
}