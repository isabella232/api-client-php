<?php
/**
 * WebhooksApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * LaunchDarkly REST API
 *
 * Build custom integrations with the LaunchDarkly REST API
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@launchdarkly.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * WebhooksApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebhooksApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return WebhooksApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation deleteWebhook
     *
     * Delete a webhook by ID
     *
     * @param string $webhook_id The webhook ID (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function deleteWebhook($webhook_id)
    {
        list($response) = $this->deleteWebhookWithHttpInfo($webhook_id);
        return $response;
    }

    /**
     * Operation deleteWebhookWithHttpInfo
     *
     * Delete a webhook by ID
     *
     * @param string $webhook_id The webhook ID (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteWebhookWithHttpInfo($webhook_id)
    {
        // verify the required parameter 'webhook_id' is set
        if ($webhook_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $webhook_id when calling deleteWebhook');
        }
        // parse inputs
        $resourcePath = "/webhooks/{webhookId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($webhook_id !== null) {
            $resourcePath = str_replace(
                "{" . "webhookId" . "}",
                $this->apiClient->getSerializer()->toPathValue($webhook_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/webhooks/{webhookId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getWebhook
     *
     * Get a webhook by ID
     *
     * @param string $webhook_id The webhook ID (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Webhook
     */
    public function getWebhook($webhook_id)
    {
        list($response) = $this->getWebhookWithHttpInfo($webhook_id);
        return $response;
    }

    /**
     * Operation getWebhookWithHttpInfo
     *
     * Get a webhook by ID
     *
     * @param string $webhook_id The webhook ID (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Webhook, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWebhookWithHttpInfo($webhook_id)
    {
        // verify the required parameter 'webhook_id' is set
        if ($webhook_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $webhook_id when calling getWebhook');
        }
        // parse inputs
        $resourcePath = "/webhooks/{webhookId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($webhook_id !== null) {
            $resourcePath = str_replace(
                "{" . "webhookId" . "}",
                $this->apiClient->getSerializer()->toPathValue($webhook_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Webhook',
                '/webhooks/{webhookId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Webhook', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Webhook', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getWebhooks
     *
     * Fetch a list of all webhooks
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Webhooks
     */
    public function getWebhooks()
    {
        list($response) = $this->getWebhooksWithHttpInfo();
        return $response;
    }

    /**
     * Operation getWebhooksWithHttpInfo
     *
     * Fetch a list of all webhooks
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Webhooks, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWebhooksWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/webhooks";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Webhooks',
                '/webhooks'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Webhooks', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Webhooks', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation patchWebhook
     *
     * Modify a webhook by ID
     *
     * @param string $webhook_id The webhook ID (required)
     * @param \Swagger\Client\Model\PatchDelta[] $patch_delta http://jsonpatch.com/ (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function patchWebhook($webhook_id, $patch_delta)
    {
        list($response) = $this->patchWebhookWithHttpInfo($webhook_id, $patch_delta);
        return $response;
    }

    /**
     * Operation patchWebhookWithHttpInfo
     *
     * Modify a webhook by ID
     *
     * @param string $webhook_id The webhook ID (required)
     * @param \Swagger\Client\Model\PatchDelta[] $patch_delta http://jsonpatch.com/ (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchWebhookWithHttpInfo($webhook_id, $patch_delta)
    {
        // verify the required parameter 'webhook_id' is set
        if ($webhook_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $webhook_id when calling patchWebhook');
        }
        // verify the required parameter 'patch_delta' is set
        if ($patch_delta === null) {
            throw new \InvalidArgumentException('Missing the required parameter $patch_delta when calling patchWebhook');
        }
        // parse inputs
        $resourcePath = "/webhooks/{webhookId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($webhook_id !== null) {
            $resourcePath = str_replace(
                "{" . "webhookId" . "}",
                $this->apiClient->getSerializer()->toPathValue($webhook_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($patch_delta)) {
            $_tempBody = $patch_delta;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/webhooks/{webhookId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation postWebhook
     *
     * Create a webhook
     *
     * @param \Swagger\Client\Model\WebhookPost $webhook_post New webhook (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function postWebhook($webhook_post)
    {
        list($response) = $this->postWebhookWithHttpInfo($webhook_post);
        return $response;
    }

    /**
     * Operation postWebhookWithHttpInfo
     *
     * Create a webhook
     *
     * @param \Swagger\Client\Model\WebhookPost $webhook_post New webhook (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function postWebhookWithHttpInfo($webhook_post)
    {
        // verify the required parameter 'webhook_post' is set
        if ($webhook_post === null) {
            throw new \InvalidArgumentException('Missing the required parameter $webhook_post when calling postWebhook');
        }
        // parse inputs
        $resourcePath = "/webhooks";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($webhook_post)) {
            $_tempBody = $webhook_post;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/webhooks'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
