# OpenAPI\Client\TcrCampaignsApi

All URIs are relative to https://api.telgorithm.com/messaging, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1TcrCampaignsGet()**](TcrCampaignsApi.md#v1TcrCampaignsGet) | **GET** /v1/TcrCampaigns | Get all TCR Campaigns. |
| [**v1TcrCampaignsPost()**](TcrCampaignsApi.md#v1TcrCampaignsPost) | **POST** /v1/TcrCampaigns | Import a TCR Campaign. |
| [**v1TcrCampaignsTcrCampaignIdDelete()**](TcrCampaignsApi.md#v1TcrCampaignsTcrCampaignIdDelete) | **DELETE** /v1/TcrCampaigns/{tcrCampaignId} | Delete Campaign. |
| [**v1TcrCampaignsTcrCampaignIdGet()**](TcrCampaignsApi.md#v1TcrCampaignsTcrCampaignIdGet) | **GET** /v1/TcrCampaigns/{tcrCampaignId} | Get a TCR Campaign. |
| [**v1TcrCampaignsTcrCampaignIdPatch()**](TcrCampaignsApi.md#v1TcrCampaignsTcrCampaignIdPatch) | **PATCH** /v1/TcrCampaigns/{tcrCampaignId} | Update only values that is passed in request and do not touch others. |
| [**v1TcrCampaignsTcrCampaignIdPut()**](TcrCampaignsApi.md#v1TcrCampaignsTcrCampaignIdPut) | **PUT** /v1/TcrCampaigns/{tcrCampaignId} | Update all values in the TCR Campaign. |


## `v1TcrCampaignsGet()`

```php
v1TcrCampaignsGet($tcr_brand_sid, $page_size, $order_by_direction, $search_id): \OpenAPI\Client\Model\CampaignModelPaginatedResult
```

Get all TCR Campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TcrCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tcr_brand_sid = 'tcr_brand_sid_example'; // string | TCR Brand ID.
$page_size = 56; // int
$order_by_direction = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderByDirections(); // \OpenAPI\Client\Model\OrderByDirections
$search_id = 'search_id_example'; // string

try {
    $result = $apiInstance->v1TcrCampaignsGet($tcr_brand_sid, $page_size, $order_by_direction, $search_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TcrCampaignsApi->v1TcrCampaignsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tcr_brand_sid** | **string**| TCR Brand ID. | [optional] |
| **page_size** | **int**|  | [optional] |
| **order_by_direction** | [**\OpenAPI\Client\Model\OrderByDirections**](../Model/.md)|  | [optional] |
| **search_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CampaignModelPaginatedResult**](../Model/CampaignModelPaginatedResult.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TcrCampaignsPost()`

```php
v1TcrCampaignsPost($v1_tcr_campaigns_post_request): \OpenAPI\Client\Model\CampaignModel
```

Import a TCR Campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TcrCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_tcr_campaigns_post_request = new \OpenAPI\Client\Model\V1TcrCampaignsPostRequest(); // \OpenAPI\Client\Model\V1TcrCampaignsPostRequest

try {
    $result = $apiInstance->v1TcrCampaignsPost($v1_tcr_campaigns_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TcrCampaignsApi->v1TcrCampaignsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_tcr_campaigns_post_request** | [**\OpenAPI\Client\Model\V1TcrCampaignsPostRequest**](../Model/V1TcrCampaignsPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CampaignModel**](../Model/CampaignModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TcrCampaignsTcrCampaignIdDelete()`

```php
v1TcrCampaignsTcrCampaignIdDelete($tcr_campaign_id)
```

Delete Campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TcrCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tcr_campaign_id = 'tcr_campaign_id_example'; // string | TCR Campaign ID.

try {
    $apiInstance->v1TcrCampaignsTcrCampaignIdDelete($tcr_campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling TcrCampaignsApi->v1TcrCampaignsTcrCampaignIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tcr_campaign_id** | **string**| TCR Campaign ID. | |

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

## `v1TcrCampaignsTcrCampaignIdGet()`

```php
v1TcrCampaignsTcrCampaignIdGet($tcr_campaign_id): \OpenAPI\Client\Model\CampaignModel
```

Get a TCR Campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TcrCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tcr_campaign_id = 'tcr_campaign_id_example'; // string | TCR Campaign ID.

try {
    $result = $apiInstance->v1TcrCampaignsTcrCampaignIdGet($tcr_campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TcrCampaignsApi->v1TcrCampaignsTcrCampaignIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tcr_campaign_id** | **string**| TCR Campaign ID. | |

### Return type

[**\OpenAPI\Client\Model\CampaignModel**](../Model/CampaignModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TcrCampaignsTcrCampaignIdPatch()`

```php
v1TcrCampaignsTcrCampaignIdPatch($tcr_campaign_id, $v1_tcr_campaigns_tcr_campaign_id_patch_request): \OpenAPI\Client\Model\CampaignModel
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


$apiInstance = new OpenAPI\Client\Api\TcrCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tcr_campaign_id = 'tcr_campaign_id_example'; // string | TCR Campaign ID.
$v1_tcr_campaigns_tcr_campaign_id_patch_request = new \OpenAPI\Client\Model\V1TcrCampaignsTcrCampaignIdPatchRequest(); // \OpenAPI\Client\Model\V1TcrCampaignsTcrCampaignIdPatchRequest | 

try {
    $result = $apiInstance->v1TcrCampaignsTcrCampaignIdPatch($tcr_campaign_id, $v1_tcr_campaigns_tcr_campaign_id_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TcrCampaignsApi->v1TcrCampaignsTcrCampaignIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tcr_campaign_id** | **string**| TCR Campaign ID. | |
| **v1_tcr_campaigns_tcr_campaign_id_patch_request** | [**\OpenAPI\Client\Model\V1TcrCampaignsTcrCampaignIdPatchRequest**](../Model/V1TcrCampaignsTcrCampaignIdPatchRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CampaignModel**](../Model/CampaignModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TcrCampaignsTcrCampaignIdPut()`

```php
v1TcrCampaignsTcrCampaignIdPut($tcr_campaign_id, $v1_tcr_campaigns_tcr_campaign_id_put_request): \OpenAPI\Client\Model\CampaignModel
```

Update all values in the TCR Campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TcrCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tcr_campaign_id = 'tcr_campaign_id_example'; // string | TCR Campaign ID
$v1_tcr_campaigns_tcr_campaign_id_put_request = new \OpenAPI\Client\Model\V1TcrCampaignsTcrCampaignIdPutRequest(); // \OpenAPI\Client\Model\V1TcrCampaignsTcrCampaignIdPutRequest | 

try {
    $result = $apiInstance->v1TcrCampaignsTcrCampaignIdPut($tcr_campaign_id, $v1_tcr_campaigns_tcr_campaign_id_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TcrCampaignsApi->v1TcrCampaignsTcrCampaignIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tcr_campaign_id** | **string**| TCR Campaign ID | |
| **v1_tcr_campaigns_tcr_campaign_id_put_request** | [**\OpenAPI\Client\Model\V1TcrCampaignsTcrCampaignIdPutRequest**](../Model/V1TcrCampaignsTcrCampaignIdPutRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CampaignModel**](../Model/CampaignModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
