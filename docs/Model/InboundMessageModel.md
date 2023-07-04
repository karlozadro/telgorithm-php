# # InboundMessageModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sid** | **string** | Message unique identifier. |
**from** | **string** | Sender phone number. | [optional]
**to** | **string** | Recipient phone number. |
**text** | **string** | Message text. |
**media_urls** | **string[]** | Media urls. Used for MMS. | [optional]
**created_on** | **\DateTime** | Created date. |
**segment_count** | **int** | Message segment count. | [optional]
**fees** | [**\OpenAPI\Client\Model\InboundMessageModelFees**](InboundMessageModelFees.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
