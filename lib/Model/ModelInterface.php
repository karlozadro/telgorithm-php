<?php
/**
 * ModelInterface
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client\Model
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
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

/**
 * Interface abstracting model access.
 *
 * @package OpenAPI\Client\Model
 * @author  OpenAPI Generator team
 */
interface ModelInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName();

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes();

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats();

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array
     */
    public static function attributeMap();

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters();

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters();

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array
     */
    public function listInvalidProperties();

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool
     */
    public function valid();

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool;

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool;
}