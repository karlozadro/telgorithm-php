# # OptOutModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | End-user number that opted out. |
**scope** | **string** | Scope on that user is opting out.&lt;br /&gt;  If &#x60;scopeType&#x60; is &#x60;SenderPhoneNumber&#x60;, this field contains Toll Free or 10DLC phone number.&lt;br /&gt;  If &#x60;scopeType&#x60; is &#x60;TcrCampaign&#x60;, then it contains TCR Campaign Sid. |
**type** | **string** | Obsolete, please use &#x60;scopeType&#x60; instead. |
**scope_type** | [**\OpenAPI\Client\Model\OptOutType**](OptOutType.md) |  |
**created_on** | **\DateTime** | Created date. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
