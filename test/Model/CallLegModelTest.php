<?php
/**
 * CallLegModelTest
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
 * CallLegModelTest Class Doc Comment
 *
 * @category    Class
 * @description CallLegModel
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class CallLegModelTest extends TestCase
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
     * Test "CallLegModel"
     */
    public function testCallLegModel()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "leg_sid"
     */
    public function testPropertyLegSid()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "call_sid"
     */
    public function testPropertyCallSid()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "from"
     */
    public function testPropertyFrom()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "to"
     */
    public function testPropertyTo()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "call_direction"
     */
    public function testPropertyCallDirection()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "leg_direction"
     */
    public function testPropertyLegDirection()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "duration"
     */
    public function testPropertyDuration()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "created_on"
     */
    public function testPropertyCreatedOn()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "started_on"
     */
    public function testPropertyStartedOn()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "rang_on"
     */
    public function testPropertyRangOn()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "answered_on"
     */
    public function testPropertyAnsweredOn()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "completed_on"
     */
    public function testPropertyCompletedOn()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "fees"
     */
    public function testPropertyFees()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
