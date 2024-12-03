<?php

declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko;

use Closure;
use Exception;
use GuzzleHttp\Client as GuzzleClient;
use Http\Discovery\Psr18Client;
use Http\Discovery\Psr18ClientDiscovery;
use MusheAbdulHakim\CoinGecko\Transporters\HttpTransporter;
use MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\ApiKey;
use MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\BaseUri;
use MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\Headers;
use MusheAbdulHakim\CoinGecko\ValueObjects\Transporter\QueryParams;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

final class Factory
{
    /**
     * The API Version.
     */
    private ?string $apiVersion = null;


    /**
    * The base URI for the requests.
    */
    private ?string $baseUri = null;


    /**
     * The API key for the requests.
     */
    private ?string $apiKey = null;


    /**
     * The HTTP client for the requests.
     */
    private ?ClientInterface $httpClient = null;


    /**
     * The HTTP headers for the requests.
     *
     * @var array<string, string>
     */
    private array $headers = [];

    private ?Closure $streamHandler = null;

    /**
     * The query parameters for the requests.
     *
     * @var array<string, string|int>
     */
    private array $queryParams = [];

    /**
     * Sets the API key for the requests.
     */
    public function withApiKey(string $apiKey): self
    {
        $this->apiKey = trim($apiKey);

        return $this;
    }

    /**
     * Sets the API Version for the requests
     *
     * @return $this
     */
    public function withVersion(?string $apiVersion): self
    {
        $this->apiVersion = trim((string) $apiVersion);

        return $this;
    }

    public function withApiversion(string $version): self
    {
        $this->apiVersion = trim($version);
        return $this;
    }

    /**
     * Sets the base URI for the requests.
     * If no URI is provided the factory will use the default OpenAI API URI.
     */
    public function withBaseUri(string $baseUri): self
    {
        $this->baseUri = trim($baseUri);

        return $this;
    }



    /**
     * Sets the HTTP client for the requests.
     * If no client is provided the factory will try to find one using PSR-18 HTTP Client Discovery.
     */
    public function withHttpClient(ClientInterface $client): self
    {
        $this->httpClient = $client;

        return $this;
    }


    /**
     * Sets the stream handler for the requests. Not required when using Guzzle.
     */
    public function withStreamHandler(Closure $streamHandler): self
    {
        $this->streamHandler = $streamHandler;

        return $this;
    }


    /**
     * Adds a custom HTTP header to the requests.
     */
    public function withHttpHeader(string $name, string $value): self
    {
        $this->headers[$name] = $value;

        return $this;
    }

    /**
     * Adds a Content-Type HTTP header to the requests.
     */
    public function withContentType(string $value): self
    {
        $this->headers['Content-Type'] = $value;

        return $this;
    }

    /**
     * Adds a custom query parameter to the request url.
     */
    public function withQueryParam(string $name, string $value): self
    {
        $this->queryParams[$name] = $value;

        return $this;
    }

    /**
     * Creates a new stream handler for "stream" requests.
     */
    private function makeStreamHandler(ClientInterface $client): Closure
    {
        if (! is_null($this->streamHandler)) {
            return $this->streamHandler;
        }

        if ($client instanceof GuzzleClient) {
            return fn (RequestInterface $request): ResponseInterface => $client->send($request, ['stream' => true]);
        }

        if ($client instanceof Psr18Client) {
            return fn (RequestInterface $request): ResponseInterface => $client->sendRequest($request);
        }

        return function (RequestInterface $_): never {
            throw new Exception('To use stream requests you must provide an stream handler closure via the OpenAI factory.');
        };
    }

    public function make(): Client
    {
        $headers = Headers::create();

        $config = new Config();

        if ($this->apiKey !== null) {
            $headers = Headers::withAuthorization(ApiKey::from(
                $this->baseUri !== null && $this->baseUri !== '' && $this->baseUri !== '0' ? $this->baseUri : $config->get('COINGECKO_API_KEY')
            ));
        }

        foreach ($this->headers as $name => $value) {
            $headers = $headers->withCustomHeader($name, $value);
        }

        $baseUri = BaseUri::from(
            $this->baseUri !== null && $this->baseUri !== '' && $this->baseUri !== '0' ? $this->baseUri : $config->get('COINGECKO_BASE_URI'),
            $this->apiVersion !== null && $this->apiVersion !== '' && $this->apiVersion !== '0' ? $this->apiVersion : $config->get('COINGECKO_API_VERSION'),
        );


        $queryParams = QueryParams::create();
        foreach ($this->queryParams as $name => $value) {
            $queryParams = $queryParams->withParam($name, $value);
        }
        $client = $this->httpClient ??= Psr18ClientDiscovery::find();

        $sendAsync = $this->makeStreamHandler($client);


        $transporter = new HttpTransporter($client, $baseUri, $headers, $queryParams, $sendAsync);

        return new Client($transporter);
    }
}
