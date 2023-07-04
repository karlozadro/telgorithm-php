<?php
/**
 * MessagingConfigModelSendingTimes
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
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * MessagingConfigModelSendingTimes Class Doc Comment
 *
 * @category Class
 * @description Specifies the time zone and time periods in a day when the messaging should be active.  SMS and MMS won&#39;t be sent outside of these intervals.  If &#x60;null&#x60;, the messaging is active for the whole day.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MessagingConfigModelSendingTimes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MessagingConfigModel_sendingTimes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'time_zone_id' => 'string',
        'periods' => '\OpenAPI\Client\Model\SendingTimesPeriodModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'time_zone_id' => null,
        'periods' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'time_zone_id' => false,
		'periods' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'time_zone_id' => 'timeZoneId',
        'periods' => 'periods'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'time_zone_id' => 'setTimeZoneId',
        'periods' => 'setPeriods'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'time_zone_id' => 'getTimeZoneId',
        'periods' => 'getPeriods'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('time_zone_id', $data ?? [], null);
        $this->setIfExists('periods', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['time_zone_id'] === null) {
            $invalidProperties[] = "'time_zone_id' can't be null";
        }
        if ((mb_strlen($this->container['time_zone_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'time_zone_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['periods'] === null) {
            $invalidProperties[] = "'periods' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets time_zone_id
     *
     * @return string
     */
    public function getTimeZoneId()
    {
        return $this->container['time_zone_id'];
    }

    /**
     * Sets time_zone_id
     *
     * @param string $time_zone_id Specifies the ID of the time zone which is used for time values defined in `periods`.<p>Possible values:</p> <ul> <li><b>America/Juneau</b></li> <li><b>America/Los_Angeles</b></li> <li><b>America/Denver</b></li> <li><b>America/Chicago</b></li> <li><b>America/New_York</b></li> <li><b>UTC-12:00</b></li> <li><b>UTC-11:00</b></li> <li><b>UTC-10:00</b></li> <li><b>UTC-09:00</b></li> <li><b>UTC-08:00</b></li> <li><b>UTC-07:00</b></li> <li><b>UTC-06:00</b></li> <li><b>UTC-05:00</b></li> <li><b>UTC-04:00</b></li> <li><b>UTC-03:00</b></li> <li><b>UTC-02:00</b></li> <li><b>UTC-01:00</b></li> <li><b>UTC+00:00</b></li> <li><b>UTC+01:00</b></li> <li><b>UTC+02:00</b></li> <li><b>UTC+03:00</b></li> <li><b>UTC+04:00</b></li> <li><b>UTC+05:00</b></li> <li><b>UTC+06:00</b></li> <li><b>UTC+07:00</b></li> <li><b>UTC+08:00</b></li> <li><b>UTC+09:00</b></li> <li><b>UTC+10:00</b></li> <li><b>UTC+11:00</b></li> <li><b>UTC+12:00</b></li> <li><b>UTC+13:00</b></li> <li><b>UTC+14:00</b></li> </ul>
     *
     * @return self
     */
    public function setTimeZoneId($time_zone_id)
    {
        if (is_null($time_zone_id)) {
            throw new \InvalidArgumentException('non-nullable time_zone_id cannot be null');
        }

        if ((mb_strlen($time_zone_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $time_zone_id when calling MessagingConfigModelSendingTimes., must be bigger than or equal to 1.');
        }

        $this->container['time_zone_id'] = $time_zone_id;

        return $this;
    }

    /**
     * Gets periods
     *
     * @return \OpenAPI\Client\Model\SendingTimesPeriodModel[]
     */
    public function getPeriods()
    {
        return $this->container['periods'];
    }

    /**
     * Sets periods
     *
     * @param \OpenAPI\Client\Model\SendingTimesPeriodModel[] $periods Specifies the set of time periods in the specified time zone when the messaging should be active.  Periods must not intersect or touch. The last period may have `to` less than `from` indicating  that the period crosses the midnight.
     *
     * @return self
     */
    public function setPeriods($periods)
    {
        if (is_null($periods)) {
            throw new \InvalidArgumentException('non-nullable periods cannot be null');
        }
        $this->container['periods'] = $periods;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


