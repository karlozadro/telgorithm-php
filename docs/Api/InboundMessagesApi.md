# OpenAPI\Client\InboundMessagesApi

All URIs are relative to https://api.telgorithm.com/messaging, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1InboundMessagesGet()**](InboundMessagesApi.md#v1InboundMessagesGet) | **GET** /v1/InboundMessages | Get all inbound messages. |
| [**v1InboundMessagesSidGet()**](InboundMessagesApi.md#v1InboundMessagesSidGet) | **GET** /v1/InboundMessages/{sid} | Get an inbound message. |


## `v1InboundMessagesGet()`

```php
v1InboundMessagesGet($created_on_from, $created_on_to, $include_fees, $page_size, $order_by_direction, $search_id): \OpenAPI\Client\Model\InboundMessageModelPaginatedResult
```

Get all inbound messages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\InboundMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$created_on_from = 'created_on_from_example'; // string | Date-time, that Inbound message creation should be greater or equal than.  <br><b>Must have ISO format (e.g. yyyy-MM-dd'T'HH:mm:ss)</b>
$created_on_to = 'created_on_to_example'; // string | Date-time, that Inbound message creation should be less than.  <br><b>Must have ISO format (e.g. yyyy-MM-dd'T'HH:mm:ss)</b>
$include_fees = True; // bool | If `true`, enriches response with message fees
$page_size = 56; // int
$order_by_direction = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderByDirections(); // \OpenAPI\Client\Model\OrderByDirections
$search_id = 'search_id_example'; // string

try {
    $result = $apiInstance->v1InboundMessagesGet($created_on_from, $created_on_to, $include_fees, $page_size, $order_by_direction, $search_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundMessagesApi->v1InboundMessagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **created_on_from** | **string**| Date-time, that Inbound message creation should be greater or equal than.  &lt;br&gt;&lt;b&gt;Must have ISO format (e.g. yyyy-MM-dd&#39;T&#39;HH:mm:ss)&lt;/b&gt; | [optional] |
| **created_on_to** | **string**| Date-time, that Inbound message creation should be less than.  &lt;br&gt;&lt;b&gt;Must have ISO format (e.g. yyyy-MM-dd&#39;T&#39;HH:mm:ss)&lt;/b&gt; | [optional] |
| **include_fees** | **bool**| If &#x60;true&#x60;, enriches response with message fees | [optional] |
| **page_size** | **int**|  | [optional] |
| **order_by_direction** | [**\OpenAPI\Client\Model\OrderByDirections**](../Model/.md)|  | [optional] |
| **search_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InboundMessageModelPaginatedResult**](../Model/InboundMessageModelPaginatedResult.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1InboundMessagesSidGet()`

```php
v1InboundMessagesSidGet($sid, $include_fees): \OpenAPI\Client\Model\InboundMessageModel
```

Get an inbound message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\InboundMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sid = 'sid_example'; // string | Inbound Message Sid.
$include_fees = True; // bool | If `true`, enriches response with message fees

try {
    $result = $apiInstance->v1InboundMessagesSidGet($sid, $include_fees);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundMessagesApi->v1InboundMessagesSidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sid** | **string**| Inbound Message Sid. | |
| **include_fees** | **bool**| If &#x60;true&#x60;, enriches response with message fees | [optional] |

### Return type

[**\OpenAPI\Client\Model\InboundMessageModel**](../Model/InboundMessageModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
