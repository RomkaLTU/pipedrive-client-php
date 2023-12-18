<?php
/**
 * RecentsApi
 * PHP version 7.3
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Pipedrive API v1
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Pipedrive\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Utils;
use InvalidArgumentException;
use Pipedrive\ApiException;
use Pipedrive\Configuration;
use Pipedrive\Exceptions\OAuthProviderException;
use Pipedrive\HeaderSelector;
use Pipedrive\ObjectSerializer;
use RuntimeException;

/**
 * RecentsApi Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RecentsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface|null $client
     * @param Configuration|null   $config
     * @param HeaderSelector|null  $selector
     * @param int                  $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex(int $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex(): int
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Operation getRecents
     *
     * Get recents
     *
     * @param  string $since_timestamp The timestamp in UTC. Format: YYYY-MM-DD HH:MM:SS. (required)
     * @param  string|null $items Multiple selection of item types to include in the query (optional) (optional)
     * @param  int|0 $start Pagination start (optional, default to 0)
     * @param  int|null $limit Items shown per page (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException|GuzzleException
     * @return \Pipedrive\Model\GetRecents
     */
    public function getRecents($since_timestamp, $items = null, $start = 0, $limit = null)
    {
        list($response) = $this->getRecentsWithHttpInfo($since_timestamp, $items, $start, $limit);
        return $response;
    }

    /**
     * Operation getRecentsWithHttpInfo
     *
     * Get recents
     *
     * @param  string $since_timestamp The timestamp in UTC. Format: YYYY-MM-DD HH:MM:SS. (required)
     * @param  string|null $items Multiple selection of item types to include in the query (optional) (optional)
     * @param  int|0 $start Pagination start (optional, default to 0)
     * @param  int|null $limit Items shown per page (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException|GuzzleException
     * @return array<mixed> of \Pipedrive\Model\GetRecents, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRecentsWithHttpInfo($since_timestamp, $items = null, $start = 0, $limit = null)
    {
        $request = $this->getRecentsRequest($since_timestamp, $items, $start, $limit);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() === 401 && $this->config->isRefreshPossible()) {
                    $this->config->refreshToken();
                    $request = $this->getRecentsRequest($since_timestamp, $items, $start, $limit);
                    $response = $this->client->send($request, $options);
                } else {
                    throw new ApiException(
                        "[{$e->getCode()}] {$e->getMessage()}",
                        (int) $e->getCode(),
                        $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                        $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                    );
                }
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    /* @phpstan-ignore-next-line */
                    if ('\Pipedrive\Model\GetRecents' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Pipedrive\Model\GetRecents', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            /* @phpstan-ignore-next-line */
            if ('\Pipedrive\Model\GetRecents' === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, '\Pipedrive\Model\GetRecents', []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Pipedrive\Model\GetRecents',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getRecentsAsync
     *
     * Get recents
     *
     * @param  string $since_timestamp The timestamp in UTC. Format: YYYY-MM-DD HH:MM:SS. (required)
     * @param  string|null $items Multiple selection of item types to include in the query (optional) (optional)
     * @param  int|0 $start Pagination start (optional, default to 0)
     * @param  int|null $limit Items shown per page (optional)
     *
     * @throws InvalidArgumentException|OAuthProviderException
     * @return PromiseInterface
     */
    public function getRecentsAsync($since_timestamp, $items = null, $start = 0, $limit = null): PromiseInterface
    {
        return $this->getRecentsAsyncWithHttpInfo($since_timestamp, $items, $start, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRecentsAsyncWithHttpInfo
     *
     * Get recents
     *
     * @param  string $since_timestamp The timestamp in UTC. Format: YYYY-MM-DD HH:MM:SS. (required)
     * @param  string|null $items Multiple selection of item types to include in the query (optional) (optional)
     * @param  int|0 $start Pagination start (optional, default to 0)
     * @param  int|null $limit Items shown per page (optional)
     *
     * @throws InvalidArgumentException|OAuthProviderException
     * @return PromiseInterface
     */
    public function getRecentsAsyncWithHttpInfo($since_timestamp, $items = null, $start = 0, $limit = null): PromiseInterface
    {
        $returnType = '\Pipedrive\Model\GetRecents';
        $request = $this->getRecentsRequest($since_timestamp, $items, $start, $limit);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    /* @phpstan-ignore-next-line */
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getRecents'
     *
     * @param  string $since_timestamp The timestamp in UTC. Format: YYYY-MM-DD HH:MM:SS. (required)
     * @param  string|null $items Multiple selection of item types to include in the query (optional) (optional)
     * @param  int|0 $start Pagination start (optional, default to 0)
     * @param  int|null $limit Items shown per page (optional)
     *
     * @throws InvalidArgumentException|OAuthProviderException
     * @return Request
     */
    public function getRecentsRequest($since_timestamp, $items = null, $start = 0, $limit = null): Request
    {
        // verify the required parameter 'since_timestamp' is set
        /* @phpstan-ignore-next-line */
        if ($since_timestamp === null || (is_array($since_timestamp) && count($since_timestamp) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $since_timestamp when calling getRecents'
            );
        }

        $resourcePath = '/recents';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        /* @phpstan-ignore-next-line */
        if (is_array($since_timestamp)) {
            $since_timestamp = ObjectSerializer::serializeCollection($since_timestamp, '', true);
        }
        if ($since_timestamp !== null) {
            $queryParams['since_timestamp'] = $since_timestamp;
        }
        // query params
        /* @phpstan-ignore-next-line */
        if (is_array($items)) {
            $items = ObjectSerializer::serializeCollection($items, '', true);
        }
        if ($items !== null) {
            $queryParams['items'] = $items;
        }
        // query params
        /* @phpstan-ignore-next-line */
        if (is_array($start)) {
            $start = ObjectSerializer::serializeCollection($start, '', true);
        }
        if ($start !== null) {
            $queryParams['start'] = $start;
        }
        // query params
        /* @phpstan-ignore-next-line */
        if (is_array($limit)) {
            $limit = ObjectSerializer::serializeCollection($limit, '', true);
        }
        if ($limit !== null) {
            $queryParams['limit'] = $limit;
        }




        /* @phpstan-ignore-next-line */
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            /* @phpstan-ignore-next-line */
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = Utils::jsonEncode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('api_token');
        if ($apiKey !== null) {
            $queryParams['api_token'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            // If access token is expired
            if ($this->config->isRefreshPossible() && $this->config->getExpiresAt() <= time()) {
                $this->config->refreshToken();
            }
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws RuntimeException on file opening failure
     * @return array<string, resource> of http client options
     */
    protected function createHttpClientOption(): array
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
