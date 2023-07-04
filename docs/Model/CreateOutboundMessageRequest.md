# # CreateOutboundMessageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | Sender of the message. Must be owned by the company. |
**to** | **string** | Recipient of the message. |
**text** | **string** | Text of the message. Can be empty only when MediaUrls set. | [optional]
**priority** | **string** | Priority of the message. &#39;Normal&#39; if not specified.&lt;p&gt;Possible values:&lt;/p&gt; &lt;ul&gt; &lt;li&gt;&lt;b&gt;Urgent&lt;/b&gt;: Urgent&lt;/li&gt; &lt;li&gt;&lt;b&gt;High&lt;/b&gt;: High&lt;/li&gt; &lt;li&gt;&lt;b&gt;Normal&lt;/b&gt;: Normal&lt;/li&gt; &lt;li&gt;&lt;b&gt;Low&lt;/b&gt;: Low&lt;/li&gt; &lt;/ul&gt; | [optional]
**media_urls** | **string[]** | Media urls of the message. If null or empty - SMS, if any - MMS. | [optional]
**callback_url_override** | **string** | If specified - used for sending outbound messages events to this url.  If this url is empty then MessagingConfig urls are used for outbound messages events.  In case of failure we will send the same request to the &#x60;MessagingConfig.OutboundBackupCallbackUrl&#x60; url.  Adds &#39;https://&#39; if no HTTP schema is defined. | [optional]
**expires_on** | **string** | UTC timestamp when the message should expire.  If the message is not sent before this time, its status is set to &#x60;Expired&#x60; and the message is not going to  be sent anymore.  &lt;br /&gt;  If &#x60;null&#x60;, the messages never expires and persists in the &#x60;Queued&#x60; state until it is &#x60;Sent&#x60; or  &#x60;Failed&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
