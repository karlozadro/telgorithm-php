# OpenAPI\Client\OptOutsApi

All URIs are relative to https://api.telgorithm.com/messaging, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1OptOutsGet()**](OptOutsApi.md#v1OptOutsGet) | **GET** /v1/OptOuts | Get all company opt outs. |
| [**v1OptOutsPost()**](OptOutsApi.md#v1OptOutsPost) | **POST** /v1/OptOuts | Create opt outs. |


## `v1OptOutsGet()`

```php
v1OptOutsGet($number, $created_on, $scope, $page_size, $order_by_direction, $search_id): \OpenAPI\Client\Model\OptOutModelPaginatedResult
```

Get all company opt outs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OptOutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 'number_example'; // string | End-user number that opted out
$created_on = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Created date
$scope = 'scope_example'; // string | TollFree phone number (must start with country code e.g. +1...) or TCR Campaign Sid  to which end-user is opted out
$page_size = 56; // int
$order_by_direction = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderByDirections(); // \OpenAPI\Client\Model\OrderByDirections
$search_id = 'search_id_example'; // string

try {
    $result = $apiInstance->v1OptOutsGet($number, $created_on, $scope, $page_size, $order_by_direction, $search_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptOutsApi->v1OptOutsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **string**| End-user number that opted out | [optional] |
| **created_on** | **\DateTime**| Created date | [optional] |
| **scope** | **string**| TollFree phone number (must start with country code e.g. +1...) or TCR Campaign Sid  to which end-user is opted out | [optional] |
| **page_size** | **int**|  | [optional] |
| **order_by_direction** | [**\OpenAPI\Client\Model\OrderByDirections**](../Model/.md)|  | [optional] |
| **search_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OptOutModelPaginatedResult**](../Model/OptOutModelPaginatedResult.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OptOutsPost()`

```php
v1OptOutsPost($v1_opt_outs_post_request): \OpenAPI\Client\Model\CreatedOptOutsModel
```

Create opt outs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OptOutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_opt_outs_post_request = new \OpenAPI\Client\Model\V1OptOutsPostRequest(); // \OpenAPI\Client\Model\V1OptOutsPostRequest

try {
    $result = $apiInstance->v1OptOutsPost($v1_opt_outs_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptOutsApi->v1OptOutsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_opt_outs_post_request** | [**\OpenAPI\Client\Model\V1OptOutsPostRequest**](../Model/V1OptOutsPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreatedOptOutsModel**](../Model/CreatedOptOutsModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
