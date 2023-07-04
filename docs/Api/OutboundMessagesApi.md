# OpenAPI\Client\OutboundMessagesApi

All URIs are relative to https://api.telgorithm.com/messaging, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1OutboundMessagesGet()**](OutboundMessagesApi.md#v1OutboundMessagesGet) | **GET** /v1/OutboundMessages | Get all outbound messages. |
| [**v1OutboundMessagesPost()**](OutboundMessagesApi.md#v1OutboundMessagesPost) | **POST** /v1/OutboundMessages | Send an outbound message. |
| [**v1OutboundMessagesSidGet()**](OutboundMessagesApi.md#v1OutboundMessagesSidGet) | **GET** /v1/OutboundMessages/{sid} | Get an outbound message. |


## `v1OutboundMessagesGet()`

```php
v1OutboundMessagesGet($status, $from, $to, $created_on_from, $created_on_to, $error_code, $include_fees, $page_size, $order_by_direction, $search_id): \OpenAPI\Client\Model\OutboundMessageModelPaginatedResult
```

Get all outbound messages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OutboundMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OutboundMessageStatus(); // \OpenAPI\Client\Model\OutboundMessageStatus | Outbound message status
$from = 'from_example'; // string | Sender phone number
$to = 'to_example'; // string | Recipient phone number
$created_on_from = 'created_on_from_example'; // string | Date-time, that Outbound message creation should be greater or equal than.  <br><b>Must have ISO format (e.g. yyyy-MM-dd'T'HH:mm:ss)</b>
$created_on_to = 'created_on_to_example'; // string | Date-time, that Outbound message creation should be less than.  <br><b>Must have ISO format (e.g. yyyy-MM-dd'T'HH:mm:ss)</b>
$error_code = 56; // int | Outbound message error code
$include_fees = True; // bool | If `true`, enriches response with message fees
$page_size = 56; // int
$order_by_direction = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderByDirections(); // \OpenAPI\Client\Model\OrderByDirections
$search_id = 'search_id_example'; // string

try {
    $result = $apiInstance->v1OutboundMessagesGet($status, $from, $to, $created_on_from, $created_on_to, $error_code, $include_fees, $page_size, $order_by_direction, $search_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundMessagesApi->v1OutboundMessagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | [**\OpenAPI\Client\Model\OutboundMessageStatus**](../Model/.md)| Outbound message status | [optional] |
| **from** | **string**| Sender phone number | [optional] |
| **to** | **string**| Recipient phone number | [optional] |
| **created_on_from** | **string**| Date-time, that Outbound message creation should be greater or equal than.  &lt;br&gt;&lt;b&gt;Must have ISO format (e.g. yyyy-MM-dd&#39;T&#39;HH:mm:ss)&lt;/b&gt; | [optional] |
| **created_on_to** | **string**| Date-time, that Outbound message creation should be less than.  &lt;br&gt;&lt;b&gt;Must have ISO format (e.g. yyyy-MM-dd&#39;T&#39;HH:mm:ss)&lt;/b&gt; | [optional] |
| **error_code** | **int**| Outbound message error code | [optional] |
| **include_fees** | **bool**| If &#x60;true&#x60;, enriches response with message fees | [optional] |
| **page_size** | **int**|  | [optional] |
| **order_by_direction** | [**\OpenAPI\Client\Model\OrderByDirections**](../Model/.md)|  | [optional] |
| **search_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OutboundMessageModelPaginatedResult**](../Model/OutboundMessageModelPaginatedResult.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OutboundMessagesPost()`

```php
v1OutboundMessagesPost($v1_outbound_messages_post_request): \OpenAPI\Client\Model\CreateOutboundMessageResult
```

Send an outbound message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OutboundMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_outbound_messages_post_request = new \OpenAPI\Client\Model\V1OutboundMessagesPostRequest(); // \OpenAPI\Client\Model\V1OutboundMessagesPostRequest

try {
    $result = $apiInstance->v1OutboundMessagesPost($v1_outbound_messages_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundMessagesApi->v1OutboundMessagesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_outbound_messages_post_request** | [**\OpenAPI\Client\Model\V1OutboundMessagesPostRequest**](../Model/V1OutboundMessagesPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateOutboundMessageResult**](../Model/CreateOutboundMessageResult.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OutboundMessagesSidGet()`

```php
v1OutboundMessagesSidGet($sid, $include_fees): \OpenAPI\Client\Model\OutboundMessageModel
```

Get an outbound message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OutboundMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sid = 'sid_example'; // string | Outbound Message Sid.
$include_fees = True; // bool | If `true`, enriches response with message fees

try {
    $result = $apiInstance->v1OutboundMessagesSidGet($sid, $include_fees);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundMessagesApi->v1OutboundMessagesSidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sid** | **string**| Outbound Message Sid. | |
| **include_fees** | **bool**| If &#x60;true&#x60;, enriches response with message fees | [optional] |

### Return type

[**\OpenAPI\Client\Model\OutboundMessageModel**](../Model/OutboundMessageModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
