# OpenAPI\Client\VoiceApi

All URIs are relative to https://api.telgorithm.com/messaging, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1VoiceEnableVoiceFeaturePost()**](VoiceApi.md#v1VoiceEnableVoiceFeaturePost) | **POST** /v1/Voice/enableVoiceFeature | Enables voice feature for the specified list of phones (temporary endpoint). |


## `v1VoiceEnableVoiceFeaturePost()`

```php
v1VoiceEnableVoiceFeaturePost($v1_voice_enable_voice_feature_post_request)
```

Enables voice feature for the specified list of phones (temporary endpoint).

Note, that this endpoint is a temporary solution and will be removed in future.  Please contact support to be able to use this endpoint.  <br />  Enables voice feature for the specified phones. Currently this operation cannot be reverted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_voice_enable_voice_feature_post_request = new \OpenAPI\Client\Model\V1VoiceEnableVoiceFeaturePostRequest(); // \OpenAPI\Client\Model\V1VoiceEnableVoiceFeaturePostRequest

try {
    $apiInstance->v1VoiceEnableVoiceFeaturePost($v1_voice_enable_voice_feature_post_request);
} catch (Exception $e) {
    echo 'Exception when calling VoiceApi->v1VoiceEnableVoiceFeaturePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_voice_enable_voice_feature_post_request** | [**\OpenAPI\Client\Model\V1VoiceEnableVoiceFeaturePostRequest**](../Model/V1VoiceEnableVoiceFeaturePostRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
