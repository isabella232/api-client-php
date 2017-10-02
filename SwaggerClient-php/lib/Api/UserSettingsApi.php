<?php
/**
 * UserSettingsApi
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
 * UserSettingsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserSettingsApi
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
     * @return UserSettingsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getUserFlagSetting
     *
     * Get a user by key.
     *
     * @param string $project_key The project key, used to tie the flags together under one project so they can be managed together. (required)
     * @param string $environment_key The environment key (required)
     * @param string $user_key The user&#39;s key (required)
     * @param string $feature_flag_key The feature flag&#39;s key. The key identifies the flag in your code. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\UserFlagSetting
     */
    public function getUserFlagSetting($project_key, $environment_key, $user_key, $feature_flag_key)
    {
        list($response) = $this->getUserFlagSettingWithHttpInfo($project_key, $environment_key, $user_key, $feature_flag_key);
        return $response;
    }

    /**
     * Operation getUserFlagSettingWithHttpInfo
     *
     * Get a user by key.
     *
     * @param string $project_key The project key, used to tie the flags together under one project so they can be managed together. (required)
     * @param string $environment_key The environment key (required)
     * @param string $user_key The user&#39;s key (required)
     * @param string $feature_flag_key The feature flag&#39;s key. The key identifies the flag in your code. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\UserFlagSetting, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserFlagSettingWithHttpInfo($project_key, $environment_key, $user_key, $feature_flag_key)
    {
        // verify the required parameter 'project_key' is set
        if ($project_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $project_key when calling getUserFlagSetting');
        }
        // verify the required parameter 'environment_key' is set
        if ($environment_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $environment_key when calling getUserFlagSetting');
        }
        // verify the required parameter 'user_key' is set
        if ($user_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_key when calling getUserFlagSetting');
        }
        // verify the required parameter 'feature_flag_key' is set
        if ($feature_flag_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $feature_flag_key when calling getUserFlagSetting');
        }
        // parse inputs
        $resourcePath = "/users/{projectKey}/{environmentKey}/{userKey}/flags/{featureFlagKey}";
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
        if ($project_key !== null) {
            $resourcePath = str_replace(
                "{" . "projectKey" . "}",
                $this->apiClient->getSerializer()->toPathValue($project_key),
                $resourcePath
            );
        }
        // path params
        if ($environment_key !== null) {
            $resourcePath = str_replace(
                "{" . "environmentKey" . "}",
                $this->apiClient->getSerializer()->toPathValue($environment_key),
                $resourcePath
            );
        }
        // path params
        if ($user_key !== null) {
            $resourcePath = str_replace(
                "{" . "userKey" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_key),
                $resourcePath
            );
        }
        // path params
        if ($feature_flag_key !== null) {
            $resourcePath = str_replace(
                "{" . "featureFlagKey" . "}",
                $this->apiClient->getSerializer()->toPathValue($feature_flag_key),
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
                '\Swagger\Client\Model\UserFlagSetting',
                '/users/{projectKey}/{environmentKey}/{userKey}/flags/{featureFlagKey}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\UserFlagSetting', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\UserFlagSetting', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getUserFlagSettings
     *
     * Lists the current flag settings for a given user.
     *
     * @param string $project_key The project key, used to tie the flags together under one project so they can be managed together. (required)
     * @param string $environment_key The environment key (required)
     * @param string $user_key The user&#39;s key (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\UserFlagSettings
     */
    public function getUserFlagSettings($project_key, $environment_key, $user_key)
    {
        list($response) = $this->getUserFlagSettingsWithHttpInfo($project_key, $environment_key, $user_key);
        return $response;
    }

    /**
     * Operation getUserFlagSettingsWithHttpInfo
     *
     * Lists the current flag settings for a given user.
     *
     * @param string $project_key The project key, used to tie the flags together under one project so they can be managed together. (required)
     * @param string $environment_key The environment key (required)
     * @param string $user_key The user&#39;s key (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\UserFlagSettings, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserFlagSettingsWithHttpInfo($project_key, $environment_key, $user_key)
    {
        // verify the required parameter 'project_key' is set
        if ($project_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $project_key when calling getUserFlagSettings');
        }
        // verify the required parameter 'environment_key' is set
        if ($environment_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $environment_key when calling getUserFlagSettings');
        }
        // verify the required parameter 'user_key' is set
        if ($user_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_key when calling getUserFlagSettings');
        }
        // parse inputs
        $resourcePath = "/users/{projectKey}/{environmentKey}/{userKey}/flags";
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
        if ($project_key !== null) {
            $resourcePath = str_replace(
                "{" . "projectKey" . "}",
                $this->apiClient->getSerializer()->toPathValue($project_key),
                $resourcePath
            );
        }
        // path params
        if ($environment_key !== null) {
            $resourcePath = str_replace(
                "{" . "environmentKey" . "}",
                $this->apiClient->getSerializer()->toPathValue($environment_key),
                $resourcePath
            );
        }
        // path params
        if ($user_key !== null) {
            $resourcePath = str_replace(
                "{" . "userKey" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_key),
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
                '\Swagger\Client\Model\UserFlagSettings',
                '/users/{projectKey}/{environmentKey}/{userKey}/flags'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\UserFlagSettings', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\UserFlagSettings', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation putFlagSetting
     *
     * Specifically enable or disable a feature flag for a user based on their key.
     *
     * @param string $project_key The project key, used to tie the flags together under one project so they can be managed together. (required)
     * @param string $environment_key The environment key (required)
     * @param string $user_key The user&#39;s key (required)
     * @param string $feature_flag_key The feature flag&#39;s key. The key identifies the flag in your code. (required)
     * @param \Swagger\Client\Model\UserSettingsBody $user_settings_body  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function putFlagSetting($project_key, $environment_key, $user_key, $feature_flag_key, $user_settings_body)
    {
        list($response) = $this->putFlagSettingWithHttpInfo($project_key, $environment_key, $user_key, $feature_flag_key, $user_settings_body);
        return $response;
    }

    /**
     * Operation putFlagSettingWithHttpInfo
     *
     * Specifically enable or disable a feature flag for a user based on their key.
     *
     * @param string $project_key The project key, used to tie the flags together under one project so they can be managed together. (required)
     * @param string $environment_key The environment key (required)
     * @param string $user_key The user&#39;s key (required)
     * @param string $feature_flag_key The feature flag&#39;s key. The key identifies the flag in your code. (required)
     * @param \Swagger\Client\Model\UserSettingsBody $user_settings_body  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function putFlagSettingWithHttpInfo($project_key, $environment_key, $user_key, $feature_flag_key, $user_settings_body)
    {
        // verify the required parameter 'project_key' is set
        if ($project_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $project_key when calling putFlagSetting');
        }
        // verify the required parameter 'environment_key' is set
        if ($environment_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $environment_key when calling putFlagSetting');
        }
        // verify the required parameter 'user_key' is set
        if ($user_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_key when calling putFlagSetting');
        }
        // verify the required parameter 'feature_flag_key' is set
        if ($feature_flag_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $feature_flag_key when calling putFlagSetting');
        }
        // verify the required parameter 'user_settings_body' is set
        if ($user_settings_body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_settings_body when calling putFlagSetting');
        }
        // parse inputs
        $resourcePath = "/users/{projectKey}/{environmentKey}/{userKey}/flags/{featureFlagKey}";
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
        if ($project_key !== null) {
            $resourcePath = str_replace(
                "{" . "projectKey" . "}",
                $this->apiClient->getSerializer()->toPathValue($project_key),
                $resourcePath
            );
        }
        // path params
        if ($environment_key !== null) {
            $resourcePath = str_replace(
                "{" . "environmentKey" . "}",
                $this->apiClient->getSerializer()->toPathValue($environment_key),
                $resourcePath
            );
        }
        // path params
        if ($user_key !== null) {
            $resourcePath = str_replace(
                "{" . "userKey" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_key),
                $resourcePath
            );
        }
        // path params
        if ($feature_flag_key !== null) {
            $resourcePath = str_replace(
                "{" . "featureFlagKey" . "}",
                $this->apiClient->getSerializer()->toPathValue($feature_flag_key),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($user_settings_body)) {
            $_tempBody = $user_settings_body;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/users/{projectKey}/{environmentKey}/{userKey}/flags/{featureFlagKey}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
