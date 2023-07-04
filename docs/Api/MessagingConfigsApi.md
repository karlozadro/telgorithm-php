# OpenAPI\Client\MessagingConfigsApi

All URIs are relative to https://api.telgorithm.com/messaging, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1MessagingConfigsGet()**](MessagingConfigsApi.md#v1MessagingConfigsGet) | **GET** /v1/MessagingConfigs | Get all Messaging Configs. |
| [**v1MessagingConfigsPost()**](MessagingConfigsApi.md#v1MessagingConfigsPost) | **POST** /v1/MessagingConfigs | Add a Messaging Config. |
| [**v1MessagingConfigsSidAddPhonesPatch()**](MessagingConfigsApi.md#v1MessagingConfigsSidAddPhonesPatch) | **PATCH** /v1/MessagingConfigs/{sid}/addPhones | Add phone numbers to the Messaging Config. |
| [**v1MessagingConfigsSidDelete()**](MessagingConfigsApi.md#v1MessagingConfigsSidDelete) | **DELETE** /v1/MessagingConfigs/{sid} | Delete a Messaging Config. |
| [**v1MessagingConfigsSidDeletePhonesPatch()**](MessagingConfigsApi.md#v1MessagingConfigsSidDeletePhonesPatch) | **PATCH** /v1/MessagingConfigs/{sid}/deletePhones | Delete phone numbers from the Messaging Config. |
| [**v1MessagingConfigsSidGet()**](MessagingConfigsApi.md#v1MessagingConfigsSidGet) | **GET** /v1/MessagingConfigs/{sid} | Get a Messaging Config. |
| [**v1MessagingConfigsSidPatch()**](MessagingConfigsApi.md#v1MessagingConfigsSidPatch) | **PATCH** /v1/MessagingConfigs/{sid} | Update only values that is passed in request and do not touch others. |
| [**v1MessagingConfigsSidPhonesGet()**](MessagingConfigsApi.md#v1MessagingConfigsSidPhonesGet) | **GET** /v1/MessagingConfigs/{sid}/phones | Get Messaging Config phone numbers. |
| [**v1MessagingConfigsSidPut()**](MessagingConfigsApi.md#v1MessagingConfigsSidPut) | **PUT** /v1/MessagingConfigs/{sid} | Update all values in the Message Config. |


## `v1MessagingConfigsGet()`

```php
v1MessagingConfigsGet($page_size, $order_by_direction, $search_id): \OpenAPI\Client\Model\MessagingConfigModelPaginatedResult
```

Get all Messaging Configs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MessagingConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 56; // int
$order_by_direction = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderByDirections(); // \OpenAPI\Client\Model\OrderByDirections
$search_id = 'search_id_example'; // string

try {
    $result = $apiInstance->v1MessagingConfigsGet($page_size, $order_by_direction, $search_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingConfigsApi->v1MessagingConfigsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_size** | **int**|  | [optional] |
| **order_by_direction** | [**\OpenAPI\Client\Model\OrderByDirections**](../Model/.md)|  | [optional] |
| **search_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MessagingConfigModelPaginatedResult**](../Model/MessagingConfigModelPaginatedResult.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MessagingConfigsPost()`

```php
v1MessagingConfigsPost($v1_messaging_configs_post_request): \OpenAPI\Client\Model\MessagingConfigModel
```

Add a Messaging Config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MessagingConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_messaging_configs_post_request = new \OpenAPI\Client\Model\V1MessagingConfigsPostRequest(); // \OpenAPI\Client\Model\V1MessagingConfigsPostRequest

try {
    $result = $apiInstance->v1MessagingConfigsPost($v1_messaging_configs_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingConfigsApi->v1MessagingConfigsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_messaging_configs_post_request** | [**\OpenAPI\Client\Model\V1MessagingConfigsPostRequest**](../Model/V1MessagingConfigsPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MessagingConfigModel**](../Model/MessagingConfigModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MessagingConfigsSidAddPhonesPatch()`

```php
v1MessagingConfigsSidAddPhonesPatch($sid, $v1_messaging_configs_sid_add_phones_patch_request): \OpenAPI\Client\Model\PhoneNumberBulkResult
```

Add phone numbers to the Messaging Config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MessagingConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sid = 'sid_example'; // string | Messaging Config Sid.
$v1_messaging_configs_sid_add_phones_patch_request = new \OpenAPI\Client\Model\V1MessagingConfigsSidAddPhonesPatchRequest(); // \OpenAPI\Client\Model\V1MessagingConfigsSidAddPhonesPatchRequest | 

try {
    $result = $apiInstance->v1MessagingConfigsSidAddPhonesPatch($sid, $v1_messaging_configs_sid_add_phones_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingConfigsApi->v1MessagingConfigsSidAddPhonesPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sid** | **string**| Messaging Config Sid. | |
| **v1_messaging_configs_sid_add_phones_patch_request** | [**\OpenAPI\Client\Model\V1MessagingConfigsSidAddPhonesPatchRequest**](../Model/V1MessagingConfigsSidAddPhonesPatchRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PhoneNumberBulkResult**](../Model/PhoneNumberBulkResult.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MessagingConfigsSidDelete()`

```php
v1MessagingConfigsSidDelete($sid)
```

Delete a Messaging Config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MessagingConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sid = 'sid_example'; // string | Messaging Config Sid.

try {
    $apiInstance->v1MessagingConfigsSidDelete($sid);
} catch (Exception $e) {
    echo 'Exception when calling MessagingConfigsApi->v1MessagingConfigsSidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sid** | **string**| Messaging Config Sid. | |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MessagingConfigsSidDeletePhonesPatch()`

```php
v1MessagingConfigsSidDeletePhonesPatch($sid, $v1_messaging_configs_sid_add_phones_patch_request): \OpenAPI\Client\Model\PhoneNumberBulkResult
```

Delete phone numbers from the Messaging Config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MessagingConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sid = 'sid_example'; // string | Messaging Config Sid.
$v1_messaging_configs_sid_add_phones_patch_request = new \OpenAPI\Client\Model\V1MessagingConfigsSidAddPhonesPatchRequest(); // \OpenAPI\Client\Model\V1MessagingConfigsSidAddPhonesPatchRequest | 

try {
    $result = $apiInstance->v1MessagingConfigsSidDeletePhonesPatch($sid, $v1_messaging_configs_sid_add_phones_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingConfigsApi->v1MessagingConfigsSidDeletePhonesPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sid** | **string**| Messaging Config Sid. | |
| **v1_messaging_configs_sid_add_phones_patch_request** | [**\OpenAPI\Client\Model\V1MessagingConfigsSidAddPhonesPatchRequest**](../Model/V1MessagingConfigsSidAddPhonesPatchRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PhoneNumberBulkResult**](../Model/PhoneNumberBulkResult.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MessagingConfigsSidGet()`

```php
v1MessagingConfigsSidGet($sid): \OpenAPI\Client\Model\MessagingConfigModel
```

Get a Messaging Config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MessagingConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sid = 'sid_example'; // string | Messaging Config Sid.

try {
    $result = $apiInstance->v1MessagingConfigsSidGet($sid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingConfigsApi->v1MessagingConfigsSidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sid** | **string**| Messaging Config Sid. | |

### Return type

[**\OpenAPI\Client\Model\MessagingConfigModel**](../Model/MessagingConfigModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MessagingConfigsSidPatch()`

```php
v1MessagingConfigsSidPatch($sid, $v1_messaging_configs_sid_patch_request): \OpenAPI\Client\Model\MessagingConfigModel
```

Update only values that is passed in request and do not touch others.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MessagingConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sid = 'sid_example'; // string | Messaging Config Sid.
$v1_messaging_configs_sid_patch_request = new \OpenAPI\Client\Model\V1MessagingConfigsSidPatchRequest(); // \OpenAPI\Client\Model\V1MessagingConfigsSidPatchRequest | 

try {
    $result = $apiInstance->v1MessagingConfigsSidPatch($sid, $v1_messaging_configs_sid_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingConfigsApi->v1MessagingConfigsSidPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sid** | **string**| Messaging Config Sid. | |
| **v1_messaging_configs_sid_patch_request** | [**\OpenAPI\Client\Model\V1MessagingConfigsSidPatchRequest**](../Model/V1MessagingConfigsSidPatchRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MessagingConfigModel**](../Model/MessagingConfigModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MessagingConfigsSidPhonesGet()`

```php
v1MessagingConfigsSidPhonesGet($sid): \OpenAPI\Client\Model\MessagingConfigPhonesResult
```

Get Messaging Config phone numbers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MessagingConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sid = 'sid_example'; // string | Messaging Config Sid.

try {
    $result = $apiInstance->v1MessagingConfigsSidPhonesGet($sid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingConfigsApi->v1MessagingConfigsSidPhonesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sid** | **string**| Messaging Config Sid. | |

### Return type

[**\OpenAPI\Client\Model\MessagingConfigPhonesResult**](../Model/MessagingConfigPhonesResult.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MessagingConfigsSidPut()`

```php
v1MessagingConfigsSidPut($sid, $v1_messaging_configs_post_request): \OpenAPI\Client\Model\MessagingConfigModel
```

Update all values in the Message Config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MessagingConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sid = 'sid_example'; // string | Messaging Config Sid.
$v1_messaging_configs_post_request = new \OpenAPI\Client\Model\V1MessagingConfigsPostRequest(); // \OpenAPI\Client\Model\V1MessagingConfigsPostRequest | 

try {
    $result = $apiInstance->v1MessagingConfigsSidPut($sid, $v1_messaging_configs_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingConfigsApi->v1MessagingConfigsSidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sid** | **string**| Messaging Config Sid. | |
| **v1_messaging_configs_post_request** | [**\OpenAPI\Client\Model\V1MessagingConfigsPostRequest**](../Model/V1MessagingConfigsPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MessagingConfigModel**](../Model/MessagingConfigModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
