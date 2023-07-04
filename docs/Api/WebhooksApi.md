# OpenAPI\Client\WebhooksApi

All URIs are relative to https://api.telgorithm.com/messaging, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1WebhooksGet()**](WebhooksApi.md#v1WebhooksGet) | **GET** /v1/Webhooks | Gets all webhook subscriptions. |
| [**v1WebhooksTypeDelete()**](WebhooksApi.md#v1WebhooksTypeDelete) | **DELETE** /v1/Webhooks/{Type} | Unsubscribes from webhooks of the specified type. |
| [**v1WebhooksTypeGet()**](WebhooksApi.md#v1WebhooksTypeGet) | **GET** /v1/Webhooks/{Type} | Gets webhook subscription with the specified type. |
| [**v1WebhooksTypePut()**](WebhooksApi.md#v1WebhooksTypePut) | **PUT** /v1/Webhooks/{Type} | Subscribes webhooks of the specified type. |
| [**v1WebhooksTypesGet()**](WebhooksApi.md#v1WebhooksTypesGet) | **GET** /v1/Webhooks/types | Returns an array of valid webhook types. |


## `v1WebhooksGet()`

```php
v1WebhooksGet(): \OpenAPI\Client\Model\WebhookSubscriptionListModel
```

Gets all webhook subscriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1WebhooksGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->v1WebhooksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\WebhookSubscriptionListModel**](../Model/WebhookSubscriptionListModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1WebhooksTypeDelete()`

```php
v1WebhooksTypeDelete($type): \OpenAPI\Client\Model\WebhookUnsubscriptionResultModel
```

Unsubscribes from webhooks of the specified type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\WebhookType(); // \OpenAPI\Client\Model\WebhookType | Specifies the type of the webhook.

try {
    $result = $apiInstance->v1WebhooksTypeDelete($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->v1WebhooksTypeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**\OpenAPI\Client\Model\WebhookType**](../Model/.md)| Specifies the type of the webhook. | |

### Return type

[**\OpenAPI\Client\Model\WebhookUnsubscriptionResultModel**](../Model/WebhookUnsubscriptionResultModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1WebhooksTypeGet()`

```php
v1WebhooksTypeGet($type): \OpenAPI\Client\Model\WebhookSubscriptionListModel
```

Gets webhook subscription with the specified type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\WebhookType(); // \OpenAPI\Client\Model\WebhookType | Specifies the type of the webhook.

try {
    $result = $apiInstance->v1WebhooksTypeGet($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->v1WebhooksTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**\OpenAPI\Client\Model\WebhookType**](../Model/.md)| Specifies the type of the webhook. | |

### Return type

[**\OpenAPI\Client\Model\WebhookSubscriptionListModel**](../Model/WebhookSubscriptionListModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1WebhooksTypePut()`

```php
v1WebhooksTypePut($type, $v1_webhooks_type_put_request): \OpenAPI\Client\Model\WebhookSubscriptionModel
```

Subscribes webhooks of the specified type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\WebhookType(); // \OpenAPI\Client\Model\WebhookType | Specifies the type of the webhook.
$v1_webhooks_type_put_request = new \OpenAPI\Client\Model\V1WebhooksTypePutRequest(); // \OpenAPI\Client\Model\V1WebhooksTypePutRequest

try {
    $result = $apiInstance->v1WebhooksTypePut($type, $v1_webhooks_type_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->v1WebhooksTypePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**\OpenAPI\Client\Model\WebhookType**](../Model/.md)| Specifies the type of the webhook. | |
| **v1_webhooks_type_put_request** | [**\OpenAPI\Client\Model\V1WebhooksTypePutRequest**](../Model/V1WebhooksTypePutRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebhookSubscriptionModel**](../Model/WebhookSubscriptionModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1WebhooksTypesGet()`

```php
v1WebhooksTypesGet(): \OpenAPI\Client\Model\WebhookTypesResponseModel
```

Returns an array of valid webhook types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1WebhooksTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->v1WebhooksTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\WebhookTypesResponseModel**](../Model/WebhookTypesResponseModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
