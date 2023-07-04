# # CallLegModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**leg_sid** | **string** | Leg sid. | [optional]
**call_sid** | **string** | Call sid. This value is shared for all legs belonging to the same call. | [optional]
**from** | **string** | Originating phone number. | [optional]
**to** | **string** | Terminating phone number. | [optional]
**status** | [**\OpenAPI\Client\Model\CallStatus**](CallStatus.md) |  | [optional]
**call_direction** | [**\OpenAPI\Client\Model\CallDirection**](CallDirection.md) |  | [optional]
**leg_direction** | [**\OpenAPI\Client\Model\CallDirection**](CallDirection.md) |  | [optional]
**duration** | **string** | Leg duration. This value is provided only if Status is Completed. | [optional]
**created_on** | **\DateTime** | Creation timestamp. | [optional]
**started_on** | **\DateTime** | Started event timestamp. | [optional]
**rang_on** | **\DateTime** | Ringing event timestamp. | [optional]
**answered_on** | **\DateTime** | Answered event timestamp. | [optional]
**completed_on** | **\DateTime** | Completed event timestamp. | [optional]
**fees** | [**\OpenAPI\Client\Model\FeeGroupModel[]**](FeeGroupModel.md) | Fees for this leg. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
