# OpenAPI\Client\CallsApi

All URIs are relative to https://api.telgorithm.com/messaging, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1CallsGet()**](CallsApi.md#v1CallsGet) | **GET** /v1/Calls | Gets all call legs. |
| [**v1CallsSidGet()**](CallsApi.md#v1CallsSidGet) | **GET** /v1/Calls/{sid} | Gets call leg by its id |


## `v1CallsGet()`

```php
v1CallsGet($call_sid, $status, $leg_direction, $from, $to, $created_on_from, $created_on_to, $page_size, $order_by_direction, $search_id, $include_fees): \OpenAPI\Client\Model\CallLegModelPaginatedResult
```

Gets all call legs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$call_sid = 'call_sid_example'; // string | Call sid.
$status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\CallStatus(); // \OpenAPI\Client\Model\CallStatus | Call leg status.
$leg_direction = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\CallDirection(); // \OpenAPI\Client\Model\CallDirection | Call leg direction.
$from = 'from_example'; // string | Originating phone number.
$to = 'to_example'; // string | Terminating phone number.
$created_on_from = 'created_on_from_example'; // string | Date-time, that Outbound message creation should be greater or equal than.  <br><b>Must have ISO format (e.g. yyyy-MM-dd'T'HH:mm:ss)</b>
$created_on_to = 'created_on_to_example'; // string | Date-time, that Outbound message creation should be less than.  <br><b>Must have ISO format (e.g. yyyy-MM-dd'T'HH:mm:ss)</b>
$page_size = 56; // int
$order_by_direction = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderByDirections(); // \OpenAPI\Client\Model\OrderByDirections
$search_id = 'search_id_example'; // string
$include_fees = True; // bool | If true fees are included into result

try {
    $result = $apiInstance->v1CallsGet($call_sid, $status, $leg_direction, $from, $to, $created_on_from, $created_on_to, $page_size, $order_by_direction, $search_id, $include_fees);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->v1CallsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **call_sid** | **string**| Call sid. | [optional] |
| **status** | [**\OpenAPI\Client\Model\CallStatus**](../Model/.md)| Call leg status. | [optional] |
| **leg_direction** | [**\OpenAPI\Client\Model\CallDirection**](../Model/.md)| Call leg direction. | [optional] |
| **from** | **string**| Originating phone number. | [optional] |
| **to** | **string**| Terminating phone number. | [optional] |
| **created_on_from** | **string**| Date-time, that Outbound message creation should be greater or equal than.  &lt;br&gt;&lt;b&gt;Must have ISO format (e.g. yyyy-MM-dd&#39;T&#39;HH:mm:ss)&lt;/b&gt; | [optional] |
| **created_on_to** | **string**| Date-time, that Outbound message creation should be less than.  &lt;br&gt;&lt;b&gt;Must have ISO format (e.g. yyyy-MM-dd&#39;T&#39;HH:mm:ss)&lt;/b&gt; | [optional] |
| **page_size** | **int**|  | [optional] |
| **order_by_direction** | [**\OpenAPI\Client\Model\OrderByDirections**](../Model/.md)|  | [optional] |
| **search_id** | **string**|  | [optional] |
| **include_fees** | **bool**| If true fees are included into result | [optional] |

### Return type

[**\OpenAPI\Client\Model\CallLegModelPaginatedResult**](../Model/CallLegModelPaginatedResult.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1CallsSidGet()`

```php
v1CallsSidGet($sid, $include_fees): \OpenAPI\Client\Model\CallLegModel
```

Gets call leg by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sid = 'sid_example'; // string | Call leg sid.
$include_fees = True; // bool | If true fees are included into result

try {
    $result = $apiInstance->v1CallsSidGet($sid, $include_fees);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->v1CallsSidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sid** | **string**| Call leg sid. | |
| **include_fees** | **bool**| If true fees are included into result | [optional] |

### Return type

[**\OpenAPI\Client\Model\CallLegModel**](../Model/CallLegModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
