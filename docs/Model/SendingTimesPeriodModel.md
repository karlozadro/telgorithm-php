# # SendingTimesPeriodModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | Defines time of day in a format &#x60;hh:mm:ss&#x60;, inclusive min boundary of the period.  Must be in range from zero inclusive to 1 day exclusive.  The extent of the period cannot be less than 15 minutes or greater than  1 day. | [optional]
**to** | **string** | Defines time of day in a format &#x60;hh:mm:ss&#x60;, inclusive max boundary of the period.  Must be greater than &#x60;from&#x60; except the last period in a day - for it &#x60;to&#x60; may be less than &#x60;from&#x60;  and is interpreted as the time period crossing the midnight.  The extent of the period cannot be less than 15 minutes or greater than  1 day. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
