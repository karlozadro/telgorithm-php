# OpenAPIClient-php

In our APIs we use a rate limit. The rate limit is the maximum number of calls you want to allow in a particular time interval.
Setting rate limits helps us to provide the best performance of integration between your software and Telgorithm by preventing other clients from affecting you.  

Despite the fact that there is no accepted standard for HTTP rate-limiting headers, we were guided by [**IETF draft: RateLimit Fields for HTTP**](https://www.ietf.org/archive/id/draft-ietf-httpapi-ratelimit-headers-05.html).  
  
We use these HTTP headers on APIs endpoints:  

```
RateLimit-Limit: containing the requests quota in the time window;
RateLimit-Remaining: containing a non-negative integer which represents the remaining requests quota in the current time window;
RateLimit-Reset: amount of seconds when the full quota will be available;
```

Default quotas:

| Endpoint                             | Default            |
| ------------------------------------ | ------------------ |
| POST `messaging/v1/OutboundMessages` | 100 per 10 seconds       |
| POST `messaging/v1/Phones`           | 120 per hour        |
| All REST GET endpoints               | 100 per 10 seconds |
| REST non-GET endpoints               | 100 per 10 seconds  |

When quota is exceeded, server do not serve the request replying instead with a 429 HTTP status code.  

If you need a bigger quota [contact us](mailto:support@telgorithm.com).



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$call_sid = 'call_sid_example'; // string | Call sid.
$status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\CallStatus(); // \OpenAPI\Client\Model\CallStatus | Call leg status.
$leg_direction = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\CallDirection(); // \OpenAPI\Client\Model\CallDirection | Call leg direction.
$from = 'from_example'; // string | Originating phone number.
$to = 'to_example'; // string | Terminating phone number.
$created_on_from = 'created_on_from_example'; // string | Date-time, that Outbound message creation should be greater or equal than.  <br><b>Must have ISO format (e.g. yyyy-MM-dd'T'HH:mm:ss)</b>
$created_on_to = 'created_on_to_example'; // string | Date-time, that Outbound message creation should be less than.  <br><b>Must have ISO format (e.g. yyyy-MM-dd'T'HH:mm:ss)</b>
$page_size = 56; // int
$order_by_direction = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderByDirections(); // \OpenAPI\Client\Model\OrderByDirections
$search_id = 'search_id_example'; // string
$include_fees = True; // bool | If true fees are included into result

try {
    $result = $apiInstance->v1CallsGet($call_sid, $status, $leg_direction, $from, $to, $created_on_from, $created_on_to, $page_size, $order_by_direction, $search_id, $include_fees);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->v1CallsGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.telgorithm.com/messaging*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CallsApi* | [**v1CallsGet**](docs/Api/CallsApi.md#v1callsget) | **GET** /v1/Calls | Gets all call legs.
*CallsApi* | [**v1CallsSidGet**](docs/Api/CallsApi.md#v1callssidget) | **GET** /v1/Calls/{sid} | Gets call leg by its id
*InboundMessagesApi* | [**v1InboundMessagesGet**](docs/Api/InboundMessagesApi.md#v1inboundmessagesget) | **GET** /v1/InboundMessages | Get all inbound messages.
*InboundMessagesApi* | [**v1InboundMessagesSidGet**](docs/Api/InboundMessagesApi.md#v1inboundmessagessidget) | **GET** /v1/InboundMessages/{sid} | Get an inbound message.
*MessagingConfigsApi* | [**v1MessagingConfigsGet**](docs/Api/MessagingConfigsApi.md#v1messagingconfigsget) | **GET** /v1/MessagingConfigs | Get all Messaging Configs.
*MessagingConfigsApi* | [**v1MessagingConfigsPost**](docs/Api/MessagingConfigsApi.md#v1messagingconfigspost) | **POST** /v1/MessagingConfigs | Add a Messaging Config.
*MessagingConfigsApi* | [**v1MessagingConfigsSidAddPhonesPatch**](docs/Api/MessagingConfigsApi.md#v1messagingconfigssidaddphonespatch) | **PATCH** /v1/MessagingConfigs/{sid}/addPhones | Add phone numbers to the Messaging Config.
*MessagingConfigsApi* | [**v1MessagingConfigsSidDelete**](docs/Api/MessagingConfigsApi.md#v1messagingconfigssiddelete) | **DELETE** /v1/MessagingConfigs/{sid} | Delete a Messaging Config.
*MessagingConfigsApi* | [**v1MessagingConfigsSidDeletePhonesPatch**](docs/Api/MessagingConfigsApi.md#v1messagingconfigssiddeletephonespatch) | **PATCH** /v1/MessagingConfigs/{sid}/deletePhones | Delete phone numbers from the Messaging Config.
*MessagingConfigsApi* | [**v1MessagingConfigsSidGet**](docs/Api/MessagingConfigsApi.md#v1messagingconfigssidget) | **GET** /v1/MessagingConfigs/{sid} | Get a Messaging Config.
*MessagingConfigsApi* | [**v1MessagingConfigsSidPatch**](docs/Api/MessagingConfigsApi.md#v1messagingconfigssidpatch) | **PATCH** /v1/MessagingConfigs/{sid} | Update only values that is passed in request and do not touch others.
*MessagingConfigsApi* | [**v1MessagingConfigsSidPhonesGet**](docs/Api/MessagingConfigsApi.md#v1messagingconfigssidphonesget) | **GET** /v1/MessagingConfigs/{sid}/phones | Get Messaging Config phone numbers.
*MessagingConfigsApi* | [**v1MessagingConfigsSidPut**](docs/Api/MessagingConfigsApi.md#v1messagingconfigssidput) | **PUT** /v1/MessagingConfigs/{sid} | Update all values in the Message Config.
*MyCompanyApi* | [**v1MyCompanyCspIdPut**](docs/Api/MyCompanyApi.md#v1mycompanycspidput) | **PUT** /v1/MyCompany/cspId | Sets company&#39;s CSP ID in TCR.
*MyCompanyApi* | [**v1MyCompanyGet**](docs/Api/MyCompanyApi.md#v1mycompanyget) | **GET** /v1/MyCompany | Get company information.
*OptOutsApi* | [**v1OptOutsGet**](docs/Api/OptOutsApi.md#v1optoutsget) | **GET** /v1/OptOuts | Get all company opt outs.
*OptOutsApi* | [**v1OptOutsPost**](docs/Api/OptOutsApi.md#v1optoutspost) | **POST** /v1/OptOuts | Create opt outs.
*OutboundMessagesApi* | [**v1OutboundMessagesGet**](docs/Api/OutboundMessagesApi.md#v1outboundmessagesget) | **GET** /v1/OutboundMessages | Get all outbound messages.
*OutboundMessagesApi* | [**v1OutboundMessagesPost**](docs/Api/OutboundMessagesApi.md#v1outboundmessagespost) | **POST** /v1/OutboundMessages | Send an outbound message.
*OutboundMessagesApi* | [**v1OutboundMessagesSidGet**](docs/Api/OutboundMessagesApi.md#v1outboundmessagessidget) | **GET** /v1/OutboundMessages/{sid} | Get an outbound message.
*PhonesApi* | [**v1PhonesAvailable10DLCGet**](docs/Api/PhonesApi.md#v1phonesavailable10dlcget) | **GET** /v1/Phones/Available10DLC | Get available 10DLC phone numbers.
*PhonesApi* | [**v1PhonesAvailableTollFreeGet**](docs/Api/PhonesApi.md#v1phonesavailabletollfreeget) | **GET** /v1/Phones/AvailableTollFree | Get available Toll-Free phone numbers.
*PhonesApi* | [**v1PhonesGet**](docs/Api/PhonesApi.md#v1phonesget) | **GET** /v1/Phones | Get company phones.
*PhonesApi* | [**v1PhonesPhoneDelete**](docs/Api/PhonesApi.md#v1phonesphonedelete) | **DELETE** /v1/Phones/{phone} | Delete phone number.
*PhonesApi* | [**v1PhonesPhoneGet**](docs/Api/PhonesApi.md#v1phonesphoneget) | **GET** /v1/Phones/{phone} | Get company phone by number.
*PhonesApi* | [**v1PhonesPhonePatch**](docs/Api/PhonesApi.md#v1phonesphonepatch) | **PATCH** /v1/Phones/{phone} | Update only values that are passed in the request and do not change other values.
*PhonesApi* | [**v1PhonesPhonePut**](docs/Api/PhonesApi.md#v1phonesphoneput) | **PUT** /v1/Phones/{phone} | Update all values in the phone.
*PhonesApi* | [**v1PhonesPhoneVoiceGet**](docs/Api/PhonesApi.md#v1phonesphonevoiceget) | **GET** /v1/Phones/{phone}/voice | Get voice related values for the company phone by its number.
*PhonesApi* | [**v1PhonesPhoneVoicePatch**](docs/Api/PhonesApi.md#v1phonesphonevoicepatch) | **PATCH** /v1/Phones/{phone}/voice | Update voice related values that are passed in the request and do not change other values.
*PhonesApi* | [**v1PhonesPhoneVoicePut**](docs/Api/PhonesApi.md#v1phonesphonevoiceput) | **PUT** /v1/Phones/{phone}/voice | Update all voice related values in the phone.
*PhonesApi* | [**v1PhonesPortInPost**](docs/Api/PhonesApi.md#v1phonesportinpost) | **POST** /v1/Phones/port-in | Start the process of porting phone numbers in to Telgorithm.
*PhonesApi* | [**v1PhonesPost**](docs/Api/PhonesApi.md#v1phonespost) | **POST** /v1/Phones | Order a phone.
*TcrBrandsApi* | [**v1TcrBrandsGet**](docs/Api/TcrBrandsApi.md#v1tcrbrandsget) | **GET** /v1/TcrBrands | Get all TCR Brands.
*TcrBrandsApi* | [**v1TcrBrandsPost**](docs/Api/TcrBrandsApi.md#v1tcrbrandspost) | **POST** /v1/TcrBrands | Import a TCR Brand.
*TcrBrandsApi* | [**v1TcrBrandsTcrBrandIdDelete**](docs/Api/TcrBrandsApi.md#v1tcrbrandstcrbrandiddelete) | **DELETE** /v1/TcrBrands/{tcrBrandId} | Delete Brand.
*TcrBrandsApi* | [**v1TcrBrandsTcrBrandIdGet**](docs/Api/TcrBrandsApi.md#v1tcrbrandstcrbrandidget) | **GET** /v1/TcrBrands/{tcrBrandId} | Get a TCR Brand.
*TcrBrandsApi* | [**v1TcrBrandsTcrBrandIdPut**](docs/Api/TcrBrandsApi.md#v1tcrbrandstcrbrandidput) | **PUT** /v1/TcrBrands/{tcrBrandId} | Update all values in the TCR Brand.
*TcrCampaignsApi* | [**v1TcrCampaignsGet**](docs/Api/TcrCampaignsApi.md#v1tcrcampaignsget) | **GET** /v1/TcrCampaigns | Get all TCR Campaigns.
*TcrCampaignsApi* | [**v1TcrCampaignsPost**](docs/Api/TcrCampaignsApi.md#v1tcrcampaignspost) | **POST** /v1/TcrCampaigns | Import a TCR Campaign.
*TcrCampaignsApi* | [**v1TcrCampaignsTcrCampaignIdDelete**](docs/Api/TcrCampaignsApi.md#v1tcrcampaignstcrcampaigniddelete) | **DELETE** /v1/TcrCampaigns/{tcrCampaignId} | Delete Campaign.
*TcrCampaignsApi* | [**v1TcrCampaignsTcrCampaignIdGet**](docs/Api/TcrCampaignsApi.md#v1tcrcampaignstcrcampaignidget) | **GET** /v1/TcrCampaigns/{tcrCampaignId} | Get a TCR Campaign.
*TcrCampaignsApi* | [**v1TcrCampaignsTcrCampaignIdPatch**](docs/Api/TcrCampaignsApi.md#v1tcrcampaignstcrcampaignidpatch) | **PATCH** /v1/TcrCampaigns/{tcrCampaignId} | Update only values that is passed in request and do not touch others.
*TcrCampaignsApi* | [**v1TcrCampaignsTcrCampaignIdPut**](docs/Api/TcrCampaignsApi.md#v1tcrcampaignstcrcampaignidput) | **PUT** /v1/TcrCampaigns/{tcrCampaignId} | Update all values in the TCR Campaign.
*TimeZonesApi* | [**v1TimeZonesGet**](docs/Api/TimeZonesApi.md#v1timezonesget) | **GET** /v1/TimeZones | Get the list of supported time zones for MessagingConfigs&#39; sending times.
*VoiceApi* | [**v1VoiceEnableVoiceFeaturePost**](docs/Api/VoiceApi.md#v1voiceenablevoicefeaturepost) | **POST** /v1/Voice/enableVoiceFeature | Enables voice feature for the specified list of phones (temporary endpoint).
*WebhooksApi* | [**v1WebhooksGet**](docs/Api/WebhooksApi.md#v1webhooksget) | **GET** /v1/Webhooks | Gets all webhook subscriptions.
*WebhooksApi* | [**v1WebhooksTypeDelete**](docs/Api/WebhooksApi.md#v1webhookstypedelete) | **DELETE** /v1/Webhooks/{Type} | Unsubscribes from webhooks of the specified type.
*WebhooksApi* | [**v1WebhooksTypeGet**](docs/Api/WebhooksApi.md#v1webhookstypeget) | **GET** /v1/Webhooks/{Type} | Gets webhook subscription with the specified type.
*WebhooksApi* | [**v1WebhooksTypePut**](docs/Api/WebhooksApi.md#v1webhookstypeput) | **PUT** /v1/Webhooks/{Type} | Subscribes webhooks of the specified type.
*WebhooksApi* | [**v1WebhooksTypesGet**](docs/Api/WebhooksApi.md#v1webhookstypesget) | **GET** /v1/Webhooks/types | Returns an array of valid webhook types.

## Models

- [AttMessageClass](docs/Model/AttMessageClass.md)
- [Available10DlcPhoneModel](docs/Model/Available10DlcPhoneModel.md)
- [Available10DlcResult](docs/Model/Available10DlcResult.md)
- [AvailableTollFreeModel](docs/Model/AvailableTollFreeModel.md)
- [AvailableTollFreeResult](docs/Model/AvailableTollFreeResult.md)
- [BrandModel](docs/Model/BrandModel.md)
- [BrandModelPaginatedResult](docs/Model/BrandModelPaginatedResult.md)
- [BrandRequest](docs/Model/BrandRequest.md)
- [CallDirection](docs/Model/CallDirection.md)
- [CallLegModel](docs/Model/CallLegModel.md)
- [CallLegModelPaginatedResult](docs/Model/CallLegModelPaginatedResult.md)
- [CallStatus](docs/Model/CallStatus.md)
- [CampaignModel](docs/Model/CampaignModel.md)
- [CampaignModelPaginatedResult](docs/Model/CampaignModelPaginatedResult.md)
- [CampaignPatchRequest](docs/Model/CampaignPatchRequest.md)
- [CampaignRequest](docs/Model/CampaignRequest.md)
- [CompanyModel](docs/Model/CompanyModel.md)
- [CreateOptOutRequest](docs/Model/CreateOptOutRequest.md)
- [CreateOutboundMessageRequest](docs/Model/CreateOutboundMessageRequest.md)
- [CreateOutboundMessageResult](docs/Model/CreateOutboundMessageResult.md)
- [CreatePhoneRequest](docs/Model/CreatePhoneRequest.md)
- [CreatedOptOutsModel](docs/Model/CreatedOptOutsModel.md)
- [DisplayPhoneStatus](docs/Model/DisplayPhoneStatus.md)
- [EnableVoiceFeatureRequest](docs/Model/EnableVoiceFeatureRequest.md)
- [FeeGroupModel](docs/Model/FeeGroupModel.md)
- [ImportBrandRequest](docs/Model/ImportBrandRequest.md)
- [ImportCampaignRequest](docs/Model/ImportCampaignRequest.md)
- [InboundMessageModel](docs/Model/InboundMessageModel.md)
- [InboundMessageModelFees](docs/Model/InboundMessageModelFees.md)
- [InboundMessageModelPaginatedResult](docs/Model/InboundMessageModelPaginatedResult.md)
- [MessageFeesModel](docs/Model/MessageFeesModel.md)
- [MessagingConfigModel](docs/Model/MessagingConfigModel.md)
- [MessagingConfigModelPaginatedResult](docs/Model/MessagingConfigModelPaginatedResult.md)
- [MessagingConfigModelSendingTimes](docs/Model/MessagingConfigModelSendingTimes.md)
- [MessagingConfigPatchRequest](docs/Model/MessagingConfigPatchRequest.md)
- [MessagingConfigPhonesResult](docs/Model/MessagingConfigPhonesResult.md)
- [MessagingConfigRequest](docs/Model/MessagingConfigRequest.md)
- [OptOutModel](docs/Model/OptOutModel.md)
- [OptOutModelPaginatedResult](docs/Model/OptOutModelPaginatedResult.md)
- [OptOutType](docs/Model/OptOutType.md)
- [OptOutsRequest](docs/Model/OptOutsRequest.md)
- [OrderByDirections](docs/Model/OrderByDirections.md)
- [OutboundMessageError](docs/Model/OutboundMessageError.md)
- [OutboundMessageErrorCode](docs/Model/OutboundMessageErrorCode.md)
- [OutboundMessageModel](docs/Model/OutboundMessageModel.md)
- [OutboundMessageModelPaginatedResult](docs/Model/OutboundMessageModelPaginatedResult.md)
- [OutboundMessagePriority](docs/Model/OutboundMessagePriority.md)
- [OutboundMessageStatus](docs/Model/OutboundMessageStatus.md)
- [PhoneCountry](docs/Model/PhoneCountry.md)
- [PhoneFeatures](docs/Model/PhoneFeatures.md)
- [PhoneListRequest](docs/Model/PhoneListRequest.md)
- [PhoneModel](docs/Model/PhoneModel.md)
- [PhoneModelPaginatedResult](docs/Model/PhoneModelPaginatedResult.md)
- [PhoneNumberBulkResult](docs/Model/PhoneNumberBulkResult.md)
- [PhoneRequest](docs/Model/PhoneRequest.md)
- [PhoneVoiceModel](docs/Model/PhoneVoiceModel.md)
- [PhoneVoiceRequest](docs/Model/PhoneVoiceRequest.md)
- [PortInData](docs/Model/PortInData.md)
- [PortInOrderModel](docs/Model/PortInOrderModel.md)
- [PortInRequest](docs/Model/PortInRequest.md)
- [PortInRequestData](docs/Model/PortInRequestData.md)
- [ProblemDetails](docs/Model/ProblemDetails.md)
- [SegmentsGroupModel](docs/Model/SegmentsGroupModel.md)
- [SendingTimesModel](docs/Model/SendingTimesModel.md)
- [SendingTimesPeriodModel](docs/Model/SendingTimesPeriodModel.md)
- [SetCompanyCspIdRequest](docs/Model/SetCompanyCspIdRequest.md)
- [TMobileBrandTier](docs/Model/TMobileBrandTier.md)
- [TimeZoneId](docs/Model/TimeZoneId.md)
- [TimeZoneModel](docs/Model/TimeZoneModel.md)
- [TimeZonesModel](docs/Model/TimeZonesModel.md)
- [V1MessagingConfigsPostRequest](docs/Model/V1MessagingConfigsPostRequest.md)
- [V1MessagingConfigsSidAddPhonesPatchRequest](docs/Model/V1MessagingConfigsSidAddPhonesPatchRequest.md)
- [V1MessagingConfigsSidPatchRequest](docs/Model/V1MessagingConfigsSidPatchRequest.md)
- [V1MyCompanyCspIdPutRequest](docs/Model/V1MyCompanyCspIdPutRequest.md)
- [V1OptOutsPostRequest](docs/Model/V1OptOutsPostRequest.md)
- [V1OutboundMessagesPostRequest](docs/Model/V1OutboundMessagesPostRequest.md)
- [V1PhonesPhonePutRequest](docs/Model/V1PhonesPhonePutRequest.md)
- [V1PhonesPhoneVoicePutRequest](docs/Model/V1PhonesPhoneVoicePutRequest.md)
- [V1PhonesPostRequest](docs/Model/V1PhonesPostRequest.md)
- [V1TcrBrandsPostRequest](docs/Model/V1TcrBrandsPostRequest.md)
- [V1TcrBrandsTcrBrandIdPutRequest](docs/Model/V1TcrBrandsTcrBrandIdPutRequest.md)
- [V1TcrCampaignsPostRequest](docs/Model/V1TcrCampaignsPostRequest.md)
- [V1TcrCampaignsTcrCampaignIdPatchRequest](docs/Model/V1TcrCampaignsTcrCampaignIdPatchRequest.md)
- [V1TcrCampaignsTcrCampaignIdPutRequest](docs/Model/V1TcrCampaignsTcrCampaignIdPutRequest.md)
- [V1VoiceEnableVoiceFeaturePostRequest](docs/Model/V1VoiceEnableVoiceFeaturePostRequest.md)
- [V1WebhooksTypePutRequest](docs/Model/V1WebhooksTypePutRequest.md)
- [ValidationProblemDetails](docs/Model/ValidationProblemDetails.md)
- [WebhookSubscriptionListModel](docs/Model/WebhookSubscriptionListModel.md)
- [WebhookSubscriptionModel](docs/Model/WebhookSubscriptionModel.md)
- [WebhookSubscriptionRequest](docs/Model/WebhookSubscriptionRequest.md)
- [WebhookType](docs/Model/WebhookType.md)
- [WebhookTypesResponseModel](docs/Model/WebhookTypesResponseModel.md)
- [WebhookUnsubscriptionResultModel](docs/Model/WebhookUnsubscriptionResultModel.md)

## Authorization

Authentication schemes defined for the API:
### basic

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
