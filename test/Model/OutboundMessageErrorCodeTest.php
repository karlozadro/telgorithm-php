<?php
/**
 * OutboundMessageErrorCodeTest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Telgorithm Messaging API
 *
 * In our APIs we use a rate limit. The rate limit is the maximum number of calls you want to allow in a particular time interval. Setting rate limits helps us to provide the best performance of integration between your software and Telgorithm by preventing other clients from affecting you.    Despite the fact that there is no accepted standard for HTTP rate-limiting headers, we were guided by [**IETF draft: RateLimit Fields for HTTP**](https://www.ietf.org/archive/id/draft-ietf-httpapi-ratelimit-headers-05.html).      We use these HTTP headers on APIs endpoints:    ``` RateLimit-Limit: containing the requests quota in the time window; RateLimit-Remaining: containing a non-negative integer which represents the remaining requests quota in the current time window; RateLimit-Reset: amount of seconds when the full quota will be available; ```  Default quotas:  | Endpoint                             | Default            | | ------------------------------------ | ------------------ | | POST `messaging/v1/OutboundMessages` | 100 per 10 seconds       | | POST `messaging/v1/Phones`           | 120 per hour        | | All REST GET endpoints               | 100 per 10 seconds | | REST non-GET endpoints               | 100 per 10 seconds  |  When quota is exceeded, server do not serve the request replying instead with a 429 HTTP status code.    If you need a bigger quota [contact us](mailto:support@telgorithm.com).
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Client\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * OutboundMessageErrorCodeTest Class Doc Comment
 *
 * @category    Class
 * @description Outbound message error code.&lt;p&gt;Possible values:&lt;/p&gt; &lt;ul&gt; &lt;li&gt;&lt;b&gt;NoError&lt;/b&gt;: No error&lt;/li&gt; &lt;li&gt;&lt;b&gt;SenderIsInvalid&lt;/b&gt;: Sender phone number is invalid&lt;/li&gt; &lt;li&gt;&lt;b&gt;SenderNotInTheCompany&lt;/b&gt;: Sender phone number doesn&#39;t belong your company&lt;/li&gt; &lt;li&gt;&lt;b&gt;SenderNotInTcrCampaign&lt;/b&gt;: Sender phone number doesn&#39;t belong any TCR campaign&lt;/li&gt; &lt;li&gt;&lt;b&gt;SenderPhoneNotActiveYet&lt;/b&gt;: Sender phone number is not active yet&lt;/li&gt; &lt;li&gt;&lt;b&gt;SenderPhonePendingTcrCampaignChange&lt;/b&gt;: Sender phone number is in process of changing TCR Campaign&lt;/li&gt; &lt;li&gt;&lt;b&gt;SenderAllMNOsUnapproved&lt;/b&gt;: Not all MNO&#39;s were selected on currently attached TCR campaign, please re-create TCR campaign with all MNO&#39;s selected&lt;/li&gt; &lt;li&gt;&lt;b&gt;RecipientIsInvalid&lt;/b&gt;: Recipient phone number is invalid&lt;/li&gt; &lt;li&gt;&lt;b&gt;RecipientOptedOut&lt;/b&gt;: Message cannot be sent to the recipient because recipient has opted out&lt;/li&gt; &lt;li&gt;&lt;b&gt;DestinationError&lt;/b&gt;: Destination number is currently unable to receive text messages (possibly no reception or handset is turned off). Check with end user&lt;/li&gt; &lt;li&gt;&lt;b&gt;DestinationTxtInactive&lt;/b&gt;: Destination address does not have text messaging services active&lt;/li&gt; &lt;li&gt;&lt;b&gt;TextIsEmpty&lt;/b&gt;: Text cannot be empty&lt;/li&gt; &lt;li&gt;&lt;b&gt;TextIsTooLong&lt;/b&gt;: Text cannot be longer than 8000 characters&lt;/li&gt; &lt;li&gt;&lt;b&gt;CallbackUrlIsTooLong&lt;/b&gt;: Callback url cannot be longer than 512 characters&lt;/li&gt; &lt;li&gt;&lt;b&gt;PastExpirationTime&lt;/b&gt;: Expiration time which was provided with the request is in the past&lt;/li&gt; &lt;li&gt;&lt;b&gt;InvalidDateFormat&lt;/b&gt;: UTC date-time field in the request body was provided in invalid format&lt;/li&gt; &lt;li&gt;&lt;b&gt;TcrLimitIsNotEnough&lt;/b&gt;: Message exceeds your Campaign Registry MNO approved throughput limits. The limit specified in TCR Campaign is too low to accomodate a single message&lt;/li&gt; &lt;li&gt;&lt;b&gt;BlockedAsSpam&lt;/b&gt;: SPAM blocking: volume/velocity policies reached and content filtering&lt;/li&gt; &lt;li&gt;&lt;b&gt;Rejected&lt;/b&gt;: Equivalent to not authorized. Usually because the number may not have SMS enabled for example&lt;/li&gt; &lt;li&gt;&lt;b&gt;DeliveryFailure&lt;/b&gt;: Temporarily unable to deliver. Retry&lt;/li&gt; &lt;li&gt;&lt;b&gt;MessageQueueIsFull&lt;/b&gt;: Message queue full&lt;/li&gt; &lt;li&gt;&lt;b&gt;MessageSubmittingFailed&lt;/b&gt;: Message submitting failed&lt;/li&gt; &lt;li&gt;&lt;b&gt;UnknownPriority&lt;/b&gt;: Priority is wrong&lt;/li&gt; &lt;li&gt;&lt;b&gt;TollFreeMsgNotSupported&lt;/b&gt;: Destination address does not accept messages from Toll Free Numbers&lt;/li&gt; &lt;li&gt;&lt;b&gt;MsgTooLongDestProvider&lt;/b&gt;: Message is too long for receiving provider&lt;/li&gt; &lt;li&gt;&lt;b&gt;SourceTnError&lt;/b&gt;: Source phone number may not be configured correctly (also possible there may be an upstream carrier outage)&lt;/li&gt; &lt;li&gt;&lt;b&gt;ExternalAggregatorNetworkError&lt;/b&gt;: Network error between aggregator &amp; MNO, please contact support for further details&lt;/li&gt; &lt;li&gt;&lt;b&gt;DestinationBillingError&lt;/b&gt;: Destination number out of carrier funds for texting at the time (Possibly prepaid user). Check with end user&lt;/li&gt; &lt;li&gt;&lt;b&gt;NonCompliantUrl&lt;/b&gt;: Message flagged due to non-compliant URL&lt;/li&gt; &lt;li&gt;&lt;b&gt;TemporaryFailure&lt;/b&gt;: Temp TF failure likely due to maintenance update. Please retry sending again in a bit&lt;/li&gt; &lt;li&gt;&lt;b&gt;TcrCampaignIsSuspended&lt;/b&gt;: TCR campaign, which the sender number belongs to, is suspended by MNO&lt;/li&gt; &lt;li&gt;&lt;b&gt;TcrCampaignNotApprovedYet&lt;/b&gt;: TCR campaign, which the sender number belongs to, is not approved by DCA yet&lt;/li&gt; &lt;li&gt;&lt;b&gt;TcrCampaignIsExpired&lt;/b&gt;: TCR campaign, which the sender number belongs to, expired&lt;/li&gt; &lt;li&gt;&lt;b&gt;TcrCampaignError&lt;/b&gt;: TCR campaign, which the sender number belongs to, is in erroneous state. Please contact support if the problem persists&lt;/li&gt; &lt;li&gt;&lt;b&gt;AccountIsSuspended&lt;/b&gt;: Your Telgorithm account has insufficient funds. It has been suspended&lt;/li&gt; &lt;li&gt;&lt;b&gt;UnregisteredTrafficThroughputLimitReached&lt;/b&gt;: You&#39;ve reached a throughput allowance likely because of unregistered traffics, please resend or await full Campaign Approval&lt;/li&gt; &lt;li&gt;&lt;b&gt;UnknownError&lt;/b&gt;: Unknown error&lt;/li&gt; &lt;/ul&gt;
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class OutboundMessageErrorCodeTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "OutboundMessageErrorCode"
     */
    public function testOutboundMessageErrorCode()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
