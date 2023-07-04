# OpenAPI\Client\PhonesApi

All URIs are relative to https://api.telgorithm.com/messaging, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1PhonesAvailable10DLCGet()**](PhonesApi.md#v1PhonesAvailable10DLCGet) | **GET** /v1/Phones/Available10DLC | Get available 10DLC phone numbers. |
| [**v1PhonesAvailableTollFreeGet()**](PhonesApi.md#v1PhonesAvailableTollFreeGet) | **GET** /v1/Phones/AvailableTollFree | Get available Toll-Free phone numbers. |
| [**v1PhonesGet()**](PhonesApi.md#v1PhonesGet) | **GET** /v1/Phones | Get company phones. |
| [**v1PhonesPhoneDelete()**](PhonesApi.md#v1PhonesPhoneDelete) | **DELETE** /v1/Phones/{phone} | Delete phone number. |
| [**v1PhonesPhoneGet()**](PhonesApi.md#v1PhonesPhoneGet) | **GET** /v1/Phones/{phone} | Get company phone by number. |
| [**v1PhonesPhonePatch()**](PhonesApi.md#v1PhonesPhonePatch) | **PATCH** /v1/Phones/{phone} | Update only values that are passed in the request and do not change other values. |
| [**v1PhonesPhonePut()**](PhonesApi.md#v1PhonesPhonePut) | **PUT** /v1/Phones/{phone} | Update all values in the phone. |
| [**v1PhonesPhoneVoiceGet()**](PhonesApi.md#v1PhonesPhoneVoiceGet) | **GET** /v1/Phones/{phone}/voice | Get voice related values for the company phone by its number. |
| [**v1PhonesPhoneVoicePatch()**](PhonesApi.md#v1PhonesPhoneVoicePatch) | **PATCH** /v1/Phones/{phone}/voice | Update voice related values that are passed in the request and do not change other values. |
| [**v1PhonesPhoneVoicePut()**](PhonesApi.md#v1PhonesPhoneVoicePut) | **PUT** /v1/Phones/{phone}/voice | Update all voice related values in the phone. |
| [**v1PhonesPortInPost()**](PhonesApi.md#v1PhonesPortInPost) | **POST** /v1/Phones/port-in | Start the process of porting phone numbers in to Telgorithm. |
| [**v1PhonesPost()**](PhonesApi.md#v1PhonesPost) | **POST** /v1/Phones | Order a phone. |


## `v1PhonesAvailable10DLCGet()`

```php
v1PhonesAvailable10DLCGet($area_code, $region_country, $region_state, $region_city, $quantity): \OpenAPI\Client\Model\Available10DlcResult
```

Get available 10DLC phone numbers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$area_code = 'area_code_example'; // string | Filter by phone number area code. If specified, no other filters must be specified.
$region_country = US; // \OpenAPI\Client\Model\PhoneCountry | Specifies the country to search numbers (US or CA). If omitted, US is assumed.  Note that to search by State AND City in Canada, you must specify CA explicitly. To search by State only,  it is not necessary (but still preferable) since Canadian provinces abbreviations don't intersect with US  states abbreviations.
$region_state = CA; // string | Two-letter abbreviation of a state in USA or a province in Canada.
$region_city = Los Angeles; // string | City. Note that full city name should be specified here, otherwise the search will return nothing (i.e.  partial name search is not supported).
$quantity = 56; // int | Count of returned phone numbers, default is 10. Must be greater than 0 and less or equal to 100.

try {
    $result = $apiInstance->v1PhonesAvailable10DLCGet($area_code, $region_country, $region_state, $region_city, $quantity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->v1PhonesAvailable10DLCGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **area_code** | **string**| Filter by phone number area code. If specified, no other filters must be specified. | [optional] |
| **region_country** | [**\OpenAPI\Client\Model\PhoneCountry**](../Model/.md)| Specifies the country to search numbers (US or CA). If omitted, US is assumed.  Note that to search by State AND City in Canada, you must specify CA explicitly. To search by State only,  it is not necessary (but still preferable) since Canadian provinces abbreviations don&#39;t intersect with US  states abbreviations. | [optional] |
| **region_state** | **string**| Two-letter abbreviation of a state in USA or a province in Canada. | [optional] |
| **region_city** | **string**| City. Note that full city name should be specified here, otherwise the search will return nothing (i.e.  partial name search is not supported). | [optional] |
| **quantity** | **int**| Count of returned phone numbers, default is 10. Must be greater than 0 and less or equal to 100. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Available10DlcResult**](../Model/Available10DlcResult.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1PhonesAvailableTollFreeGet()`

```php
v1PhonesAvailableTollFreeGet($area_code, $quantity): \OpenAPI\Client\Model\AvailableTollFreeResult
```

Get available Toll-Free phone numbers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$area_code = 'area_code_example'; // string | Phone number area code; one of 800, 833, 844, 855, 866, 877, 888.
$quantity = 56; // int | Count of returned phone numbers, default is 10. Must be greater than 0 and less or equal to 100.

try {
    $result = $apiInstance->v1PhonesAvailableTollFreeGet($area_code, $quantity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->v1PhonesAvailableTollFreeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **area_code** | **string**| Phone number area code; one of 800, 833, 844, 855, 866, 877, 888. | |
| **quantity** | **int**| Count of returned phone numbers, default is 10. Must be greater than 0 and less or equal to 100. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AvailableTollFreeResult**](../Model/AvailableTollFreeResult.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1PhonesGet()`

```php
v1PhonesGet($page_size, $order_by_direction, $search_id): \OpenAPI\Client\Model\PhoneModelPaginatedResult
```

Get company phones.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 56; // int
$order_by_direction = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderByDirections(); // \OpenAPI\Client\Model\OrderByDirections
$search_id = 'search_id_example'; // string

try {
    $result = $apiInstance->v1PhonesGet($page_size, $order_by_direction, $search_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->v1PhonesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_size** | **int**|  | [optional] |
| **order_by_direction** | [**\OpenAPI\Client\Model\OrderByDirections**](../Model/.md)|  | [optional] |
| **search_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PhoneModelPaginatedResult**](../Model/PhoneModelPaginatedResult.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1PhonesPhoneDelete()`

```php
v1PhonesPhoneDelete($phone)
```

Delete phone number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 'phone_example'; // string | Phone number.

try {
    $apiInstance->v1PhonesPhoneDelete($phone);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->v1PhonesPhoneDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**| Phone number. | |

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

## `v1PhonesPhoneGet()`

```php
v1PhonesPhoneGet($phone): \OpenAPI\Client\Model\PhoneModel
```

Get company phone by number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 'phone_example'; // string | Phone number.

try {
    $result = $apiInstance->v1PhonesPhoneGet($phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->v1PhonesPhoneGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**| Phone number. | |

### Return type

[**\OpenAPI\Client\Model\PhoneModel**](../Model/PhoneModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1PhonesPhonePatch()`

```php
v1PhonesPhonePatch($phone, $v1_phones_phone_put_request): \OpenAPI\Client\Model\PhoneModel
```

Update only values that are passed in the request and do not change other values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 'phone_example'; // string | Phone number.
$v1_phones_phone_put_request = new \OpenAPI\Client\Model\V1PhonesPhonePutRequest(); // \OpenAPI\Client\Model\V1PhonesPhonePutRequest | 

try {
    $result = $apiInstance->v1PhonesPhonePatch($phone, $v1_phones_phone_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->v1PhonesPhonePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**| Phone number. | |
| **v1_phones_phone_put_request** | [**\OpenAPI\Client\Model\V1PhonesPhonePutRequest**](../Model/V1PhonesPhonePutRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PhoneModel**](../Model/PhoneModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1PhonesPhonePut()`

```php
v1PhonesPhonePut($phone, $v1_phones_phone_put_request): \OpenAPI\Client\Model\PhoneModel
```

Update all values in the phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 'phone_example'; // string | Phone number.
$v1_phones_phone_put_request = new \OpenAPI\Client\Model\V1PhonesPhonePutRequest(); // \OpenAPI\Client\Model\V1PhonesPhonePutRequest | 

try {
    $result = $apiInstance->v1PhonesPhonePut($phone, $v1_phones_phone_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->v1PhonesPhonePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**| Phone number. | |
| **v1_phones_phone_put_request** | [**\OpenAPI\Client\Model\V1PhonesPhonePutRequest**](../Model/V1PhonesPhonePutRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PhoneModel**](../Model/PhoneModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1PhonesPhoneVoiceGet()`

```php
v1PhonesPhoneVoiceGet($phone): \OpenAPI\Client\Model\PhoneVoiceModel
```

Get voice related values for the company phone by its number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 'phone_example'; // string | Phone number.

try {
    $result = $apiInstance->v1PhonesPhoneVoiceGet($phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->v1PhonesPhoneVoiceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**| Phone number. | |

### Return type

[**\OpenAPI\Client\Model\PhoneVoiceModel**](../Model/PhoneVoiceModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1PhonesPhoneVoicePatch()`

```php
v1PhonesPhoneVoicePatch($phone, $v1_phones_phone_voice_put_request): \OpenAPI\Client\Model\PhoneVoiceModel
```

Update voice related values that are passed in the request and do not change other values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 'phone_example'; // string | Phone number.
$v1_phones_phone_voice_put_request = new \OpenAPI\Client\Model\V1PhonesPhoneVoicePutRequest(); // \OpenAPI\Client\Model\V1PhonesPhoneVoicePutRequest | 

try {
    $result = $apiInstance->v1PhonesPhoneVoicePatch($phone, $v1_phones_phone_voice_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->v1PhonesPhoneVoicePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**| Phone number. | |
| **v1_phones_phone_voice_put_request** | [**\OpenAPI\Client\Model\V1PhonesPhoneVoicePutRequest**](../Model/V1PhonesPhoneVoicePutRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PhoneVoiceModel**](../Model/PhoneVoiceModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1PhonesPhoneVoicePut()`

```php
v1PhonesPhoneVoicePut($phone, $v1_phones_phone_voice_put_request): \OpenAPI\Client\Model\PhoneVoiceModel
```

Update all voice related values in the phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 'phone_example'; // string | Phone number.
$v1_phones_phone_voice_put_request = new \OpenAPI\Client\Model\V1PhonesPhoneVoicePutRequest(); // \OpenAPI\Client\Model\V1PhonesPhoneVoicePutRequest | 

try {
    $result = $apiInstance->v1PhonesPhoneVoicePut($phone, $v1_phones_phone_voice_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->v1PhonesPhoneVoicePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**| Phone number. | |
| **v1_phones_phone_voice_put_request** | [**\OpenAPI\Client\Model\V1PhonesPhoneVoicePutRequest**](../Model/V1PhonesPhoneVoicePutRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PhoneVoiceModel**](../Model/PhoneVoiceModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1PhonesPortInPost()`

```php
v1PhonesPortInPost($data, $files): \OpenAPI\Client\Model\PortInOrderModel
```

Start the process of porting phone numbers in to Telgorithm.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \OpenAPI\Client\Model\V1PhonesPortInPostRequestData(); // \OpenAPI\Client\Model\V1PhonesPortInPostRequestData
$files = array("/path/to/file.txt"); // \SplFileObject[] | LOA Files

try {
    $result = $apiInstance->v1PhonesPortInPost($data, $files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->v1PhonesPortInPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\OpenAPI\Client\Model\V1PhonesPortInPostRequestData**](../Model/V1PhonesPortInPostRequestData.md)|  | |
| **files** | **\SplFileObject[]**| LOA Files | |

### Return type

[**\OpenAPI\Client\Model\PortInOrderModel**](../Model/PortInOrderModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1PhonesPost()`

```php
v1PhonesPost($v1_phones_post_request): \OpenAPI\Client\Model\PhoneModel
```

Order a phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_phones_post_request = new \OpenAPI\Client\Model\V1PhonesPostRequest(); // \OpenAPI\Client\Model\V1PhonesPostRequest

try {
    $result = $apiInstance->v1PhonesPost($v1_phones_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->v1PhonesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_phones_post_request** | [**\OpenAPI\Client\Model\V1PhonesPostRequest**](../Model/V1PhonesPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PhoneModel**](../Model/PhoneModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
