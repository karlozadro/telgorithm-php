# OpenAPI\Client\TcrBrandsApi

All URIs are relative to https://api.telgorithm.com/messaging, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1TcrBrandsGet()**](TcrBrandsApi.md#v1TcrBrandsGet) | **GET** /v1/TcrBrands | Get all TCR Brands. |
| [**v1TcrBrandsPost()**](TcrBrandsApi.md#v1TcrBrandsPost) | **POST** /v1/TcrBrands | Import a TCR Brand. |
| [**v1TcrBrandsTcrBrandIdDelete()**](TcrBrandsApi.md#v1TcrBrandsTcrBrandIdDelete) | **DELETE** /v1/TcrBrands/{tcrBrandId} | Delete Brand. |
| [**v1TcrBrandsTcrBrandIdGet()**](TcrBrandsApi.md#v1TcrBrandsTcrBrandIdGet) | **GET** /v1/TcrBrands/{tcrBrandId} | Get a TCR Brand. |
| [**v1TcrBrandsTcrBrandIdPut()**](TcrBrandsApi.md#v1TcrBrandsTcrBrandIdPut) | **PUT** /v1/TcrBrands/{tcrBrandId} | Update all values in the TCR Brand. |


## `v1TcrBrandsGet()`

```php
v1TcrBrandsGet($page_size, $order_by_direction, $search_id): \OpenAPI\Client\Model\BrandModelPaginatedResult
```

Get all TCR Brands.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TcrBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 56; // int
$order_by_direction = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderByDirections(); // \OpenAPI\Client\Model\OrderByDirections
$search_id = 'search_id_example'; // string

try {
    $result = $apiInstance->v1TcrBrandsGet($page_size, $order_by_direction, $search_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TcrBrandsApi->v1TcrBrandsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_size** | **int**|  | [optional] |
| **order_by_direction** | [**\OpenAPI\Client\Model\OrderByDirections**](../Model/.md)|  | [optional] |
| **search_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BrandModelPaginatedResult**](../Model/BrandModelPaginatedResult.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TcrBrandsPost()`

```php
v1TcrBrandsPost($v1_tcr_brands_post_request): \OpenAPI\Client\Model\BrandModel
```

Import a TCR Brand.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TcrBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_tcr_brands_post_request = new \OpenAPI\Client\Model\V1TcrBrandsPostRequest(); // \OpenAPI\Client\Model\V1TcrBrandsPostRequest

try {
    $result = $apiInstance->v1TcrBrandsPost($v1_tcr_brands_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TcrBrandsApi->v1TcrBrandsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_tcr_brands_post_request** | [**\OpenAPI\Client\Model\V1TcrBrandsPostRequest**](../Model/V1TcrBrandsPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BrandModel**](../Model/BrandModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TcrBrandsTcrBrandIdDelete()`

```php
v1TcrBrandsTcrBrandIdDelete($tcr_brand_id)
```

Delete Brand.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TcrBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tcr_brand_id = 'tcr_brand_id_example'; // string | TCR Brand ID.

try {
    $apiInstance->v1TcrBrandsTcrBrandIdDelete($tcr_brand_id);
} catch (Exception $e) {
    echo 'Exception when calling TcrBrandsApi->v1TcrBrandsTcrBrandIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tcr_brand_id** | **string**| TCR Brand ID. | |

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

## `v1TcrBrandsTcrBrandIdGet()`

```php
v1TcrBrandsTcrBrandIdGet($tcr_brand_id): \OpenAPI\Client\Model\BrandModel
```

Get a TCR Brand.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TcrBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tcr_brand_id = 'tcr_brand_id_example'; // string | TCR Brand ID.

try {
    $result = $apiInstance->v1TcrBrandsTcrBrandIdGet($tcr_brand_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TcrBrandsApi->v1TcrBrandsTcrBrandIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tcr_brand_id** | **string**| TCR Brand ID. | |

### Return type

[**\OpenAPI\Client\Model\BrandModel**](../Model/BrandModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TcrBrandsTcrBrandIdPut()`

```php
v1TcrBrandsTcrBrandIdPut($tcr_brand_id, $v1_tcr_brands_tcr_brand_id_put_request): \OpenAPI\Client\Model\BrandModel
```

Update all values in the TCR Brand.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TcrBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tcr_brand_id = 'tcr_brand_id_example'; // string | TCR Brand ID.
$v1_tcr_brands_tcr_brand_id_put_request = new \OpenAPI\Client\Model\V1TcrBrandsTcrBrandIdPutRequest(); // \OpenAPI\Client\Model\V1TcrBrandsTcrBrandIdPutRequest | 

try {
    $result = $apiInstance->v1TcrBrandsTcrBrandIdPut($tcr_brand_id, $v1_tcr_brands_tcr_brand_id_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TcrBrandsApi->v1TcrBrandsTcrBrandIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tcr_brand_id** | **string**| TCR Brand ID. | |
| **v1_tcr_brands_tcr_brand_id_put_request** | [**\OpenAPI\Client\Model\V1TcrBrandsTcrBrandIdPutRequest**](../Model/V1TcrBrandsTcrBrandIdPutRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BrandModel**](../Model/BrandModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
