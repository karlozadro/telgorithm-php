# OpenAPI\Client\TimeZonesApi

All URIs are relative to https://api.telgorithm.com/messaging, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1TimeZonesGet()**](TimeZonesApi.md#v1TimeZonesGet) | **GET** /v1/TimeZones | Get the list of supported time zones for MessagingConfigs&#39; sending times. |


## `v1TimeZonesGet()`

```php
v1TimeZonesGet(): \OpenAPI\Client\Model\TimeZonesModel
```

Get the list of supported time zones for MessagingConfigs' sending times.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TimeZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1TimeZonesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeZonesApi->v1TimeZonesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TimeZonesModel**](../Model/TimeZonesModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
