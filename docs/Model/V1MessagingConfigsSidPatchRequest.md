# # V1MessagingConfigsSidPatchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**inbound_callback_url** | **string** | Callback url for the inbound message events. You can find callback payload for InboundMessageEvent at &lt;a href&#x3D;\&quot;/samples/swagger/index.html\&quot;&gt;Sample Api Swagger&lt;/a&gt;. | [optional]
**inbound_backup_callback_url** | **string** | Backup callback url for the inbound message events. When &#x60;InboundCallbackUrl&#x60; is unavailable we will send the same request to this url. | [optional]
**outbound_callback_url** | **string** | Callback url for the outbound message events. You can find callback payload for OutboundMessageEvent at &lt;a href&#x3D;\&quot;/samples/swagger/index.html\&quot;&gt;Sample Api Swagger&lt;/a&gt;. | [optional]
**outbound_backup_callback_url** | **string** | Backup callback url for the outbound message events. When &#x60;OutboundCallbackUrl&#x60; is unavailable we will send the same request to this url. | [optional]
**opt_in_out_callback_url** | **string** | Callback url for the Opt In/Out messages. You can find callback payload for OptInOutEvent at &lt;a href&#x3D;\&quot;/samples/swagger/index.html\&quot;&gt;Sample Api Swagger&lt;/a&gt;. | [optional]
**opt_in_out_backup_callback_url** | **string** | Backup callback url for the Opt In/Out messages. When &#x60;OptInOutCallbackUrl&#x60; is unavailable we will send the same request to this url. | [optional]
**tcr_campaign_id** | **string** | Linked TCR Campaign ID. | [optional]
**name** | **string** | Name. | [optional]
**authorization_bearer** | **string** | Authorization bearer token for the callback requests. | [optional]
**sending_times** | [**\OpenAPI\Client\Model\MessagingConfigModelSendingTimes**](MessagingConfigModelSendingTimes.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
