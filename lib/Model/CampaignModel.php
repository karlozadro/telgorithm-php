<?php
/**
 * CampaignModel
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
 * CampaignModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CampaignModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tcr_campaign_id' => 'string',
        'tcr_brand_id' => 'string',
        'creation_date' => 'string',
        'name' => 'string',
        'att_message_class' => '\OpenAPI\Client\Model\AttMessageClass',
        't_mobile_brand_tier' => '\OpenAPI\Client\Model\TMobileBrandTier',
        'verizon_wireless_message_class' => 'string',
        'us_cellular_message_class' => 'string',
        'messaging_config_sid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tcr_campaign_id' => null,
        'tcr_brand_id' => null,
        'creation_date' => null,
        'name' => null,
        'att_message_class' => null,
        't_mobile_brand_tier' => null,
        'verizon_wireless_message_class' => null,
        'us_cellular_message_class' => null,
        'messaging_config_sid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tcr_campaign_id' => false,
		'tcr_brand_id' => false,
		'creation_date' => false,
		'name' => true,
		'att_message_class' => false,
		't_mobile_brand_tier' => false,
		'verizon_wireless_message_class' => true,
		'us_cellular_message_class' => true,
		'messaging_config_sid' => true
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
        'tcr_campaign_id' => 'tcrCampaignId',
        'tcr_brand_id' => 'tcrBrandId',
        'creation_date' => 'creationDate',
        'name' => 'name',
        'att_message_class' => 'attMessageClass',
        't_mobile_brand_tier' => 'tMobileBrandTier',
        'verizon_wireless_message_class' => 'verizonWirelessMessageClass',
        'us_cellular_message_class' => 'usCellularMessageClass',
        'messaging_config_sid' => 'messagingConfigSid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tcr_campaign_id' => 'setTcrCampaignId',
        'tcr_brand_id' => 'setTcrBrandId',
        'creation_date' => 'setCreationDate',
        'name' => 'setName',
        'att_message_class' => 'setAttMessageClass',
        't_mobile_brand_tier' => 'setTMobileBrandTier',
        'verizon_wireless_message_class' => 'setVerizonWirelessMessageClass',
        'us_cellular_message_class' => 'setUsCellularMessageClass',
        'messaging_config_sid' => 'setMessagingConfigSid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tcr_campaign_id' => 'getTcrCampaignId',
        'tcr_brand_id' => 'getTcrBrandId',
        'creation_date' => 'getCreationDate',
        'name' => 'getName',
        'att_message_class' => 'getAttMessageClass',
        't_mobile_brand_tier' => 'getTMobileBrandTier',
        'verizon_wireless_message_class' => 'getVerizonWirelessMessageClass',
        'us_cellular_message_class' => 'getUsCellularMessageClass',
        'messaging_config_sid' => 'getMessagingConfigSid'
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
        $this->setIfExists('tcr_campaign_id', $data ?? [], null);
        $this->setIfExists('tcr_brand_id', $data ?? [], null);
        $this->setIfExists('creation_date', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('att_message_class', $data ?? [], null);
        $this->setIfExists('t_mobile_brand_tier', $data ?? [], null);
        $this->setIfExists('verizon_wireless_message_class', $data ?? [], null);
        $this->setIfExists('us_cellular_message_class', $data ?? [], null);
        $this->setIfExists('messaging_config_sid', $data ?? [], null);
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

        if ($this->container['tcr_campaign_id'] === null) {
            $invalidProperties[] = "'tcr_campaign_id' can't be null";
        }
        if ((mb_strlen($this->container['tcr_campaign_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'tcr_campaign_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['tcr_brand_id'] === null) {
            $invalidProperties[] = "'tcr_brand_id' can't be null";
        }
        if ((mb_strlen($this->container['tcr_brand_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'tcr_brand_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['creation_date'] === null) {
            $invalidProperties[] = "'creation_date' can't be null";
        }
        if ((mb_strlen($this->container['creation_date']) > 10)) {
            $invalidProperties[] = "invalid value for 'creation_date', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['creation_date']) < 1)) {
            $invalidProperties[] = "invalid value for 'creation_date', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['att_message_class'] === null) {
            $invalidProperties[] = "'att_message_class' can't be null";
        }
        if ($this->container['t_mobile_brand_tier'] === null) {
            $invalidProperties[] = "'t_mobile_brand_tier' can't be null";
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
     * Gets tcr_campaign_id
     *
     * @return string
     */
    public function getTcrCampaignId()
    {
        return $this->container['tcr_campaign_id'];
    }

    /**
     * Sets tcr_campaign_id
     *
     * @param string $tcr_campaign_id TCR Campaign ID.
     *
     * @return self
     */
    public function setTcrCampaignId($tcr_campaign_id)
    {
        if (is_null($tcr_campaign_id)) {
            throw new \InvalidArgumentException('non-nullable tcr_campaign_id cannot be null');
        }

        if ((mb_strlen($tcr_campaign_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $tcr_campaign_id when calling CampaignModel., must be bigger than or equal to 1.');
        }

        $this->container['tcr_campaign_id'] = $tcr_campaign_id;

        return $this;
    }

    /**
     * Gets tcr_brand_id
     *
     * @return string
     */
    public function getTcrBrandId()
    {
        return $this->container['tcr_brand_id'];
    }

    /**
     * Sets tcr_brand_id
     *
     * @param string $tcr_brand_id Linked TCR Brand ID.
     *
     * @return self
     */
    public function setTcrBrandId($tcr_brand_id)
    {
        if (is_null($tcr_brand_id)) {
            throw new \InvalidArgumentException('non-nullable tcr_brand_id cannot be null');
        }

        if ((mb_strlen($tcr_brand_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $tcr_brand_id when calling CampaignModel., must be bigger than or equal to 1.');
        }

        $this->container['tcr_brand_id'] = $tcr_brand_id;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return string
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param string $creation_date TCR Creation Date. yyyy-MM-dd format.
     *
     * @return self
     */
    public function setCreationDate($creation_date)
    {
        if (is_null($creation_date)) {
            throw new \InvalidArgumentException('non-nullable creation_date cannot be null');
        }
        if ((mb_strlen($creation_date) > 10)) {
            throw new \InvalidArgumentException('invalid length for $creation_date when calling CampaignModel., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($creation_date) < 1)) {
            throw new \InvalidArgumentException('invalid length for $creation_date when calling CampaignModel., must be bigger than or equal to 1.');
        }

        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name TCR Campaign Name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets att_message_class
     *
     * @return \OpenAPI\Client\Model\AttMessageClass
     */
    public function getAttMessageClass()
    {
        return $this->container['att_message_class'];
    }

    /**
     * Sets att_message_class
     *
     * @param \OpenAPI\Client\Model\AttMessageClass $att_message_class att_message_class
     *
     * @return self
     */
    public function setAttMessageClass($att_message_class)
    {
        if (is_null($att_message_class)) {
            throw new \InvalidArgumentException('non-nullable att_message_class cannot be null');
        }
        $this->container['att_message_class'] = $att_message_class;

        return $this;
    }

    /**
     * Gets t_mobile_brand_tier
     *
     * @return \OpenAPI\Client\Model\TMobileBrandTier
     */
    public function getTMobileBrandTier()
    {
        return $this->container['t_mobile_brand_tier'];
    }

    /**
     * Sets t_mobile_brand_tier
     *
     * @param \OpenAPI\Client\Model\TMobileBrandTier $t_mobile_brand_tier t_mobile_brand_tier
     *
     * @return self
     */
    public function setTMobileBrandTier($t_mobile_brand_tier)
    {
        if (is_null($t_mobile_brand_tier)) {
            throw new \InvalidArgumentException('non-nullable t_mobile_brand_tier cannot be null');
        }
        $this->container['t_mobile_brand_tier'] = $t_mobile_brand_tier;

        return $this;
    }

    /**
     * Gets verizon_wireless_message_class
     *
     * @return string|null
     */
    public function getVerizonWirelessMessageClass()
    {
        return $this->container['verizon_wireless_message_class'];
    }

    /**
     * Sets verizon_wireless_message_class
     *
     * @param string|null $verizon_wireless_message_class Verizon Wireless Message Class.
     *
     * @return self
     */
    public function setVerizonWirelessMessageClass($verizon_wireless_message_class)
    {
        if (is_null($verizon_wireless_message_class)) {
            array_push($this->openAPINullablesSetToNull, 'verizon_wireless_message_class');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('verizon_wireless_message_class', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['verizon_wireless_message_class'] = $verizon_wireless_message_class;

        return $this;
    }

    /**
     * Gets us_cellular_message_class
     *
     * @return string|null
     */
    public function getUsCellularMessageClass()
    {
        return $this->container['us_cellular_message_class'];
    }

    /**
     * Sets us_cellular_message_class
     *
     * @param string|null $us_cellular_message_class US Cellular Message Class.
     *
     * @return self
     */
    public function setUsCellularMessageClass($us_cellular_message_class)
    {
        if (is_null($us_cellular_message_class)) {
            array_push($this->openAPINullablesSetToNull, 'us_cellular_message_class');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('us_cellular_message_class', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['us_cellular_message_class'] = $us_cellular_message_class;

        return $this;
    }

    /**
     * Gets messaging_config_sid
     *
     * @return string|null
     */
    public function getMessagingConfigSid()
    {
        return $this->container['messaging_config_sid'];
    }

    /**
     * Sets messaging_config_sid
     *
     * @param string|null $messaging_config_sid Linked Messaging Config Sid.
     *
     * @return self
     */
    public function setMessagingConfigSid($messaging_config_sid)
    {
        if (is_null($messaging_config_sid)) {
            array_push($this->openAPINullablesSetToNull, 'messaging_config_sid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('messaging_config_sid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['messaging_config_sid'] = $messaging_config_sid;

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


