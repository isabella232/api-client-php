# Swagger\Client\WebhooksApi

All URIs are relative to *https://app.launchdarkly.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWebhook**](WebhooksApi.md#deleteWebhook) | **DELETE** /webhooks/{resourceId} | Delete a webhook by ID
[**getWebhook**](WebhooksApi.md#getWebhook) | **GET** /webhooks/{resourceId} | Get a webhook by ID
[**getWebhooks**](WebhooksApi.md#getWebhooks) | **GET** /webhooks | Fetch a list of all webhooks
[**patchWebhook**](WebhooksApi.md#patchWebhook) | **PATCH** /webhooks/{resourceId} | Modify a webhook by ID
[**postWebhook**](WebhooksApi.md#postWebhook) | **POST** /webhooks | Create a webhook


# **deleteWebhook**
> deleteWebhook($resource_id)

Delete a webhook by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\WebhooksApi();
$resource_id = "resource_id_example"; // string | The resource ID

try {
    $api_instance->deleteWebhook($resource_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_id** | **string**| The resource ID |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhook**
> \Swagger\Client\Model\Webhook getWebhook($resource_id)

Get a webhook by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\WebhooksApi();
$resource_id = "resource_id_example"; // string | The resource ID

try {
    $result = $api_instance->getWebhook($resource_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_id** | **string**| The resource ID |

### Return type

[**\Swagger\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhooks**
> \Swagger\Client\Model\Webhooks getWebhooks()

Fetch a list of all webhooks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\WebhooksApi();

try {
    $result = $api_instance->getWebhooks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Webhooks**](../Model/Webhooks.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchWebhook**
> \Swagger\Client\Model\Webhook patchWebhook($resource_id, $patch_delta)

Modify a webhook by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\WebhooksApi();
$resource_id = "resource_id_example"; // string | The resource ID
$patch_delta = array(new \Swagger\Client\Model\PatchDelta()); // \Swagger\Client\Model\PatchDelta[] | http://jsonpatch.com/

try {
    $result = $api_instance->patchWebhook($resource_id, $patch_delta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->patchWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_id** | **string**| The resource ID |
 **patch_delta** | [**\Swagger\Client\Model\PatchDelta[]**](../Model/PatchDelta.md)| http://jsonpatch.com/ |

### Return type

[**\Swagger\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWebhook**
> postWebhook($webhook_body)

Create a webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\WebhooksApi();
$webhook_body = new \Swagger\Client\Model\WebhookBody(); // \Swagger\Client\Model\WebhookBody | New webhook

try {
    $api_instance->postWebhook($webhook_body);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->postWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_body** | [**\Swagger\Client\Model\WebhookBody**](../Model/WebhookBody.md)| New webhook |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
