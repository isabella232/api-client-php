<?php
/**
 * AuditLogApi
 * PHP version 5
 *
 * @category Class
 * @package  LaunchDarklyApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * LaunchDarkly REST API
 *
 * Build custom integrations with the LaunchDarkly REST API
 *
 * OpenAPI spec version: 2.0.15
 * Contact: support@launchdarkly.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace LaunchDarklyApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use LaunchDarklyApi\ApiException;
use LaunchDarklyApi\Configuration;
use LaunchDarklyApi\HeaderSelector;
use LaunchDarklyApi\ObjectSerializer;

/**
 * AuditLogApi Class Doc Comment
 *
 * @category Class
 * @package  LaunchDarklyApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuditLogApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getAuditLogEntries
     *
     * Get a list of all audit log entries. The query parameters allow you to restrict the returned results by date ranges, resource specifiers, or a full-text search query.
     *
     * @param  int $before A timestamp filter, expressed as a Unix epoch time in milliseconds. All entries returned will have before this timestamp. (optional)
     * @param  int $after A timestamp filter, expressed as a Unix epoch time in milliseconds. All entries returned will have occured after this timestamp. (optional)
     * @param  string $q Text to search for. You can search for the full or partial name of the resource involved or fullpartial email address of the member who made the change. (optional)
     * @param  float $limit A limit on the number of audit log entries to be returned, between 1 and 20. (optional)
     * @param  string $spec A resource specifier, allowing you to filter audit log listings by resource. (optional)
     *
     * @throws \LaunchDarklyApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \LaunchDarklyApi\Model\AuditLogEntries
     */
    public function getAuditLogEntries($before = null, $after = null, $q = null, $limit = null, $spec = null)
    {
        list($response) = $this->getAuditLogEntriesWithHttpInfo($before, $after, $q, $limit, $spec);
        return $response;
    }

    /**
     * Operation getAuditLogEntriesWithHttpInfo
     *
     * Get a list of all audit log entries. The query parameters allow you to restrict the returned results by date ranges, resource specifiers, or a full-text search query.
     *
     * @param  int $before A timestamp filter, expressed as a Unix epoch time in milliseconds. All entries returned will have before this timestamp. (optional)
     * @param  int $after A timestamp filter, expressed as a Unix epoch time in milliseconds. All entries returned will have occured after this timestamp. (optional)
     * @param  string $q Text to search for. You can search for the full or partial name of the resource involved or fullpartial email address of the member who made the change. (optional)
     * @param  float $limit A limit on the number of audit log entries to be returned, between 1 and 20. (optional)
     * @param  string $spec A resource specifier, allowing you to filter audit log listings by resource. (optional)
     *
     * @throws \LaunchDarklyApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \LaunchDarklyApi\Model\AuditLogEntries, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAuditLogEntriesWithHttpInfo($before = null, $after = null, $q = null, $limit = null, $spec = null)
    {
        $returnType = '\LaunchDarklyApi\Model\AuditLogEntries';
        $request = $this->getAuditLogEntriesRequest($before, $after, $q, $limit, $spec);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\LaunchDarklyApi\Model\AuditLogEntries',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAuditLogEntriesAsync
     *
     * Get a list of all audit log entries. The query parameters allow you to restrict the returned results by date ranges, resource specifiers, or a full-text search query.
     *
     * @param  int $before A timestamp filter, expressed as a Unix epoch time in milliseconds. All entries returned will have before this timestamp. (optional)
     * @param  int $after A timestamp filter, expressed as a Unix epoch time in milliseconds. All entries returned will have occured after this timestamp. (optional)
     * @param  string $q Text to search for. You can search for the full or partial name of the resource involved or fullpartial email address of the member who made the change. (optional)
     * @param  float $limit A limit on the number of audit log entries to be returned, between 1 and 20. (optional)
     * @param  string $spec A resource specifier, allowing you to filter audit log listings by resource. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAuditLogEntriesAsync($before = null, $after = null, $q = null, $limit = null, $spec = null)
    {
        return $this->getAuditLogEntriesAsyncWithHttpInfo($before, $after, $q, $limit, $spec)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAuditLogEntriesAsyncWithHttpInfo
     *
     * Get a list of all audit log entries. The query parameters allow you to restrict the returned results by date ranges, resource specifiers, or a full-text search query.
     *
     * @param  int $before A timestamp filter, expressed as a Unix epoch time in milliseconds. All entries returned will have before this timestamp. (optional)
     * @param  int $after A timestamp filter, expressed as a Unix epoch time in milliseconds. All entries returned will have occured after this timestamp. (optional)
     * @param  string $q Text to search for. You can search for the full or partial name of the resource involved or fullpartial email address of the member who made the change. (optional)
     * @param  float $limit A limit on the number of audit log entries to be returned, between 1 and 20. (optional)
     * @param  string $spec A resource specifier, allowing you to filter audit log listings by resource. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAuditLogEntriesAsyncWithHttpInfo($before = null, $after = null, $q = null, $limit = null, $spec = null)
    {
        $returnType = '\LaunchDarklyApi\Model\AuditLogEntries';
        $request = $this->getAuditLogEntriesRequest($before, $after, $q, $limit, $spec);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAuditLogEntries'
     *
     * @param  int $before A timestamp filter, expressed as a Unix epoch time in milliseconds. All entries returned will have before this timestamp. (optional)
     * @param  int $after A timestamp filter, expressed as a Unix epoch time in milliseconds. All entries returned will have occured after this timestamp. (optional)
     * @param  string $q Text to search for. You can search for the full or partial name of the resource involved or fullpartial email address of the member who made the change. (optional)
     * @param  float $limit A limit on the number of audit log entries to be returned, between 1 and 20. (optional)
     * @param  string $spec A resource specifier, allowing you to filter audit log listings by resource. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAuditLogEntriesRequest($before = null, $after = null, $q = null, $limit = null, $spec = null)
    {

        $resourcePath = '/auditlog';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($before !== null) {
            $queryParams['before'] = ObjectSerializer::toQueryValue($before);
        }
        // query params
        if ($after !== null) {
            $queryParams['after'] = ObjectSerializer::toQueryValue($after);
        }
        // query params
        if ($q !== null) {
            $queryParams['q'] = ObjectSerializer::toQueryValue($q);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($spec !== null) {
            $queryParams['spec'] = ObjectSerializer::toQueryValue($spec);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAuditLogEntry
     *
     * Use this endpoint to fetch a single audit log entry by its resouce ID.
     *
     * @param  string $resource_id The resource ID. (required)
     *
     * @throws \LaunchDarklyApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \LaunchDarklyApi\Model\AuditLogEntry
     */
    public function getAuditLogEntry($resource_id)
    {
        list($response) = $this->getAuditLogEntryWithHttpInfo($resource_id);
        return $response;
    }

    /**
     * Operation getAuditLogEntryWithHttpInfo
     *
     * Use this endpoint to fetch a single audit log entry by its resouce ID.
     *
     * @param  string $resource_id The resource ID. (required)
     *
     * @throws \LaunchDarklyApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \LaunchDarklyApi\Model\AuditLogEntry, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAuditLogEntryWithHttpInfo($resource_id)
    {
        $returnType = '\LaunchDarklyApi\Model\AuditLogEntry';
        $request = $this->getAuditLogEntryRequest($resource_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\LaunchDarklyApi\Model\AuditLogEntry',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAuditLogEntryAsync
     *
     * Use this endpoint to fetch a single audit log entry by its resouce ID.
     *
     * @param  string $resource_id The resource ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAuditLogEntryAsync($resource_id)
    {
        return $this->getAuditLogEntryAsyncWithHttpInfo($resource_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAuditLogEntryAsyncWithHttpInfo
     *
     * Use this endpoint to fetch a single audit log entry by its resouce ID.
     *
     * @param  string $resource_id The resource ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAuditLogEntryAsyncWithHttpInfo($resource_id)
    {
        $returnType = '\LaunchDarklyApi\Model\AuditLogEntry';
        $request = $this->getAuditLogEntryRequest($resource_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAuditLogEntry'
     *
     * @param  string $resource_id The resource ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAuditLogEntryRequest($resource_id)
    {
        // verify the required parameter 'resource_id' is set
        if ($resource_id === null || (is_array($resource_id) && count($resource_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $resource_id when calling getAuditLogEntry'
            );
        }

        $resourcePath = '/auditlog/{resourceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($resource_id !== null) {
            $resourcePath = str_replace(
                '{' . 'resourceId' . '}',
                ObjectSerializer::toPathValue($resource_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
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
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
