# OpenAPI\Client\MyCompanyApi

All URIs are relative to https://api.telgorithm.com/messaging, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1MyCompanyCspIdPut()**](MyCompanyApi.md#v1MyCompanyCspIdPut) | **PUT** /v1/MyCompany/cspId | Sets company&#39;s CSP ID in TCR. |
| [**v1MyCompanyGet()**](MyCompanyApi.md#v1MyCompanyGet) | **GET** /v1/MyCompany | Get company information. |


## `v1MyCompanyCspIdPut()`

```php
v1MyCompanyCspIdPut($v1_my_company_csp_id_put_request): \OpenAPI\Client\Model\CompanyModel
```

Sets company's CSP ID in TCR.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MyCompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_my_company_csp_id_put_request = new \OpenAPI\Client\Model\V1MyCompanyCspIdPutRequest(); // \OpenAPI\Client\Model\V1MyCompanyCspIdPutRequest | A request to set company's CSP ID.

try {
    $result = $apiInstance->v1MyCompanyCspIdPut($v1_my_company_csp_id_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCompanyApi->v1MyCompanyCspIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_my_company_csp_id_put_request** | [**\OpenAPI\Client\Model\V1MyCompanyCspIdPutRequest**](../Model/V1MyCompanyCspIdPutRequest.md)| A request to set company&#39;s CSP ID. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CompanyModel**](../Model/CompanyModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MyCompanyGet()`

```php
v1MyCompanyGet(): \OpenAPI\Client\Model\CompanyModel
```

Get company information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MyCompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1MyCompanyGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCompanyApi->v1MyCompanyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CompanyModel**](../Model/CompanyModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
