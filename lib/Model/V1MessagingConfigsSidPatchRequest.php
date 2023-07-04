<?php
/**
 * V1MessagingConfigsSidPatchRequest
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
 * V1MessagingConfigsSidPatchRequest Class Doc Comment
 *
 * @category Class
 * @description Partially update Messaging Config Request.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1MessagingConfigsSidPatchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_v1_MessagingConfigs__sid__patch_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inbound_callback_url' => 'string',
        'inbound_backup_callback_url' => 'string',
        'outbound_callback_url' => 'string',
        'outbound_backup_callback_url' => 'string',
        'opt_in_out_callback_url' => 'string',
        'opt_in_out_backup_callback_url' => 'string',
        'tcr_campaign_id' => 'string',
        'name' => 'string',
        'authorization_bearer' => 'string',
        'sending_times' => '\OpenAPI\Client\Model\MessagingConfigModelSendingTimes'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'inbound_callback_url' => null,
        'inbound_backup_callback_url' => null,
        'outbound_callback_url' => null,
        'outbound_backup_callback_url' => null,
        'opt_in_out_callback_url' => null,
        'opt_in_out_backup_callback_url' => null,
        'tcr_campaign_id' => null,
        'name' => null,
        'authorization_bearer' => null,
        'sending_times' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'inbound_callback_url' => true,
		'inbound_backup_callback_url' => true,
		'outbound_callback_url' => true,
		'outbound_backup_callback_url' => true,
		'opt_in_out_callback_url' => true,
		'opt_in_out_backup_callback_url' => true,
		'tcr_campaign_id' => true,
		'name' => true,
		'authorization_bearer' => true,
		'sending_times' => true
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
        'inbound_callback_url' => 'inboundCallbackUrl',
        'inbound_backup_callback_url' => 'inboundBackupCallbackUrl',
        'outbound_callback_url' => 'outboundCallbackUrl',
        'outbound_backup_callback_url' => 'outboundBackupCallbackUrl',
        'opt_in_out_callback_url' => 'optInOutCallbackUrl',
        'opt_in_out_backup_callback_url' => 'optInOutBackupCallbackUrl',
        'tcr_campaign_id' => 'tcrCampaignId',
        'name' => 'name',
        'authorization_bearer' => 'authorizationBearer',
        'sending_times' => 'sendingTimes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inbound_callback_url' => 'setInboundCallbackUrl',
        'inbound_backup_callback_url' => 'setInboundBackupCallbackUrl',
        'outbound_callback_url' => 'setOutboundCallbackUrl',
        'outbound_backup_callback_url' => 'setOutboundBackupCallbackUrl',
        'opt_in_out_callback_url' => 'setOptInOutCallbackUrl',
        'opt_in_out_backup_callback_url' => 'setOptInOutBackupCallbackUrl',
        'tcr_campaign_id' => 'setTcrCampaignId',
        'name' => 'setName',
        'authorization_bearer' => 'setAuthorizationBearer',
        'sending_times' => 'setSendingTimes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inbound_callback_url' => 'getInboundCallbackUrl',
        'inbound_backup_callback_url' => 'getInboundBackupCallbackUrl',
        'outbound_callback_url' => 'getOutboundCallbackUrl',
        'outbound_backup_callback_url' => 'getOutboundBackupCallbackUrl',
        'opt_in_out_callback_url' => 'getOptInOutCallbackUrl',
        'opt_in_out_backup_callback_url' => 'getOptInOutBackupCallbackUrl',
        'tcr_campaign_id' => 'getTcrCampaignId',
        'name' => 'getName',
        'authorization_bearer' => 'getAuthorizationBearer',
        'sending_times' => 'getSendingTimes'
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
        $this->setIfExists('inbound_callback_url', $data ?? [], null);
        $this->setIfExists('inbound_backup_callback_url', $data ?? [], null);
        $this->setIfExists('outbound_callback_url', $data ?? [], null);
        $this->setIfExists('outbound_backup_callback_url', $data ?? [], null);
        $this->setIfExists('opt_in_out_callback_url', $data ?? [], null);
        $this->setIfExists('opt_in_out_backup_callback_url', $data ?? [], null);
        $this->setIfExists('tcr_campaign_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('authorization_bearer', $data ?? [], null);
        $this->setIfExists('sending_times', $data ?? [], null);
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

        if (!is_null($this->container['inbound_callback_url']) && (mb_strlen($this->container['inbound_callback_url']) > 512)) {
            $invalidProperties[] = "invalid value for 'inbound_callback_url', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['inbound_callback_url']) && (mb_strlen($this->container['inbound_callback_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'inbound_callback_url', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['inbound_backup_callback_url']) && (mb_strlen($this->container['inbound_backup_callback_url']) > 512)) {
            $invalidProperties[] = "invalid value for 'inbound_backup_callback_url', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['inbound_backup_callback_url']) && (mb_strlen($this->container['inbound_backup_callback_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'inbound_backup_callback_url', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['outbound_callback_url']) && (mb_strlen($this->container['outbound_callback_url']) > 512)) {
            $invalidProperties[] = "invalid value for 'outbound_callback_url', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['outbound_callback_url']) && (mb_strlen($this->container['outbound_callback_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'outbound_callback_url', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['outbound_backup_callback_url']) && (mb_strlen($this->container['outbound_backup_callback_url']) > 512)) {
            $invalidProperties[] = "invalid value for 'outbound_backup_callback_url', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['outbound_backup_callback_url']) && (mb_strlen($this->container['outbound_backup_callback_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'outbound_backup_callback_url', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['opt_in_out_callback_url']) && (mb_strlen($this->container['opt_in_out_callback_url']) > 512)) {
            $invalidProperties[] = "invalid value for 'opt_in_out_callback_url', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['opt_in_out_callback_url']) && (mb_strlen($this->container['opt_in_out_callback_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'opt_in_out_callback_url', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['opt_in_out_backup_callback_url']) && (mb_strlen($this->container['opt_in_out_backup_callback_url']) > 512)) {
            $invalidProperties[] = "invalid value for 'opt_in_out_backup_callback_url', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['opt_in_out_backup_callback_url']) && (mb_strlen($this->container['opt_in_out_backup_callback_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'opt_in_out_backup_callback_url', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['tcr_campaign_id']) && (mb_strlen($this->container['tcr_campaign_id']) > 128)) {
            $invalidProperties[] = "invalid value for 'tcr_campaign_id', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['tcr_campaign_id']) && (mb_strlen($this->container['tcr_campaign_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'tcr_campaign_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['authorization_bearer']) && (mb_strlen($this->container['authorization_bearer']) > 256)) {
            $invalidProperties[] = "invalid value for 'authorization_bearer', the character length must be smaller than or equal to 256.";
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
     * Gets inbound_callback_url
     *
     * @return string|null
     */
    public function getInboundCallbackUrl()
    {
        return $this->container['inbound_callback_url'];
    }

    /**
     * Sets inbound_callback_url
     *
     * @param string|null $inbound_callback_url Callback url for the inbound message events. You can find callback payload for InboundMessageEvent at <a href=\"/samples/swagger/index.html\">Sample Api Swagger</a>.
     *
     * @return self
     */
    public function setInboundCallbackUrl($inbound_callback_url)
    {
        if (is_null($inbound_callback_url)) {
            array_push($this->openAPINullablesSetToNull, 'inbound_callback_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inbound_callback_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($inbound_callback_url) && (mb_strlen($inbound_callback_url) > 512)) {
            throw new \InvalidArgumentException('invalid length for $inbound_callback_url when calling V1MessagingConfigsSidPatchRequest., must be smaller than or equal to 512.');
        }
        if (!is_null($inbound_callback_url) && (mb_strlen($inbound_callback_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $inbound_callback_url when calling V1MessagingConfigsSidPatchRequest., must be bigger than or equal to 1.');
        }

        $this->container['inbound_callback_url'] = $inbound_callback_url;

        return $this;
    }

    /**
     * Gets inbound_backup_callback_url
     *
     * @return string|null
     */
    public function getInboundBackupCallbackUrl()
    {
        return $this->container['inbound_backup_callback_url'];
    }

    /**
     * Sets inbound_backup_callback_url
     *
     * @param string|null $inbound_backup_callback_url Backup callback url for the inbound message events. When `InboundCallbackUrl` is unavailable we will send the same request to this url.
     *
     * @return self
     */
    public function setInboundBackupCallbackUrl($inbound_backup_callback_url)
    {
        if (is_null($inbound_backup_callback_url)) {
            array_push($this->openAPINullablesSetToNull, 'inbound_backup_callback_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inbound_backup_callback_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($inbound_backup_callback_url) && (mb_strlen($inbound_backup_callback_url) > 512)) {
            throw new \InvalidArgumentException('invalid length for $inbound_backup_callback_url when calling V1MessagingConfigsSidPatchRequest., must be smaller than or equal to 512.');
        }
        if (!is_null($inbound_backup_callback_url) && (mb_strlen($inbound_backup_callback_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $inbound_backup_callback_url when calling V1MessagingConfigsSidPatchRequest., must be bigger than or equal to 1.');
        }

        $this->container['inbound_backup_callback_url'] = $inbound_backup_callback_url;

        return $this;
    }

    /**
     * Gets outbound_callback_url
     *
     * @return string|null
     */
    public function getOutboundCallbackUrl()
    {
        return $this->container['outbound_callback_url'];
    }

    /**
     * Sets outbound_callback_url
     *
     * @param string|null $outbound_callback_url Callback url for the outbound message events. You can find callback payload for OutboundMessageEvent at <a href=\"/samples/swagger/index.html\">Sample Api Swagger</a>.
     *
     * @return self
     */
    public function setOutboundCallbackUrl($outbound_callback_url)
    {
        if (is_null($outbound_callback_url)) {
            array_push($this->openAPINullablesSetToNull, 'outbound_callback_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('outbound_callback_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($outbound_callback_url) && (mb_strlen($outbound_callback_url) > 512)) {
            throw new \InvalidArgumentException('invalid length for $outbound_callback_url when calling V1MessagingConfigsSidPatchRequest., must be smaller than or equal to 512.');
        }
        if (!is_null($outbound_callback_url) && (mb_strlen($outbound_callback_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $outbound_callback_url when calling V1MessagingConfigsSidPatchRequest., must be bigger than or equal to 1.');
        }

        $this->container['outbound_callback_url'] = $outbound_callback_url;

        return $this;
    }

    /**
     * Gets outbound_backup_callback_url
     *
     * @return string|null
     */
    public function getOutboundBackupCallbackUrl()
    {
        return $this->container['outbound_backup_callback_url'];
    }

    /**
     * Sets outbound_backup_callback_url
     *
     * @param string|null $outbound_backup_callback_url Backup callback url for the outbound message events. When `OutboundCallbackUrl` is unavailable we will send the same request to this url.
     *
     * @return self
     */
    public function setOutboundBackupCallbackUrl($outbound_backup_callback_url)
    {
        if (is_null($outbound_backup_callback_url)) {
            array_push($this->openAPINullablesSetToNull, 'outbound_backup_callback_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('outbound_backup_callback_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($outbound_backup_callback_url) && (mb_strlen($outbound_backup_callback_url) > 512)) {
            throw new \InvalidArgumentException('invalid length for $outbound_backup_callback_url when calling V1MessagingConfigsSidPatchRequest., must be smaller than or equal to 512.');
        }
        if (!is_null($outbound_backup_callback_url) && (mb_strlen($outbound_backup_callback_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $outbound_backup_callback_url when calling V1MessagingConfigsSidPatchRequest., must be bigger than or equal to 1.');
        }

        $this->container['outbound_backup_callback_url'] = $outbound_backup_callback_url;

        return $this;
    }

    /**
     * Gets opt_in_out_callback_url
     *
     * @return string|null
     */
    public function getOptInOutCallbackUrl()
    {
        return $this->container['opt_in_out_callback_url'];
    }

    /**
     * Sets opt_in_out_callback_url
     *
     * @param string|null $opt_in_out_callback_url Callback url for the Opt In/Out messages. You can find callback payload for OptInOutEvent at <a href=\"/samples/swagger/index.html\">Sample Api Swagger</a>.
     *
     * @return self
     */
    public function setOptInOutCallbackUrl($opt_in_out_callback_url)
    {
        if (is_null($opt_in_out_callback_url)) {
            array_push($this->openAPINullablesSetToNull, 'opt_in_out_callback_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('opt_in_out_callback_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($opt_in_out_callback_url) && (mb_strlen($opt_in_out_callback_url) > 512)) {
            throw new \InvalidArgumentException('invalid length for $opt_in_out_callback_url when calling V1MessagingConfigsSidPatchRequest., must be smaller than or equal to 512.');
        }
        if (!is_null($opt_in_out_callback_url) && (mb_strlen($opt_in_out_callback_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $opt_in_out_callback_url when calling V1MessagingConfigsSidPatchRequest., must be bigger than or equal to 1.');
        }

        $this->container['opt_in_out_callback_url'] = $opt_in_out_callback_url;

        return $this;
    }

    /**
     * Gets opt_in_out_backup_callback_url
     *
     * @return string|null
     */
    public function getOptInOutBackupCallbackUrl()
    {
        return $this->container['opt_in_out_backup_callback_url'];
    }

    /**
     * Sets opt_in_out_backup_callback_url
     *
     * @param string|null $opt_in_out_backup_callback_url Backup callback url for the Opt In/Out messages. When `OptInOutCallbackUrl` is unavailable we will send the same request to this url.
     *
     * @return self
     */
    public function setOptInOutBackupCallbackUrl($opt_in_out_backup_callback_url)
    {
        if (is_null($opt_in_out_backup_callback_url)) {
            array_push($this->openAPINullablesSetToNull, 'opt_in_out_backup_callback_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('opt_in_out_backup_callback_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($opt_in_out_backup_callback_url) && (mb_strlen($opt_in_out_backup_callback_url) > 512)) {
            throw new \InvalidArgumentException('invalid length for $opt_in_out_backup_callback_url when calling V1MessagingConfigsSidPatchRequest., must be smaller than or equal to 512.');
        }
        if (!is_null($opt_in_out_backup_callback_url) && (mb_strlen($opt_in_out_backup_callback_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $opt_in_out_backup_callback_url when calling V1MessagingConfigsSidPatchRequest., must be bigger than or equal to 1.');
        }

        $this->container['opt_in_out_backup_callback_url'] = $opt_in_out_backup_callback_url;

        return $this;
    }

    /**
     * Gets tcr_campaign_id
     *
     * @return string|null
     */
    public function getTcrCampaignId()
    {
        return $this->container['tcr_campaign_id'];
    }

    /**
     * Sets tcr_campaign_id
     *
     * @param string|null $tcr_campaign_id Linked TCR Campaign ID.
     *
     * @return self
     */
    public function setTcrCampaignId($tcr_campaign_id)
    {
        if (is_null($tcr_campaign_id)) {
            array_push($this->openAPINullablesSetToNull, 'tcr_campaign_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tcr_campaign_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($tcr_campaign_id) && (mb_strlen($tcr_campaign_id) > 128)) {
            throw new \InvalidArgumentException('invalid length for $tcr_campaign_id when calling V1MessagingConfigsSidPatchRequest., must be smaller than or equal to 128.');
        }
        if (!is_null($tcr_campaign_id) && (mb_strlen($tcr_campaign_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $tcr_campaign_id when calling V1MessagingConfigsSidPatchRequest., must be bigger than or equal to 1.');
        }

        $this->container['tcr_campaign_id'] = $tcr_campaign_id;

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
     * @param string|null $name Name.
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
        if (!is_null($name) && (mb_strlen($name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $name when calling V1MessagingConfigsSidPatchRequest., must be smaller than or equal to 64.');
        }
        if (!is_null($name) && (mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling V1MessagingConfigsSidPatchRequest., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets authorization_bearer
     *
     * @return string|null
     */
    public function getAuthorizationBearer()
    {
        return $this->container['authorization_bearer'];
    }

    /**
     * Sets authorization_bearer
     *
     * @param string|null $authorization_bearer Authorization bearer token for the callback requests.
     *
     * @return self
     */
    public function setAuthorizationBearer($authorization_bearer)
    {
        if (is_null($authorization_bearer)) {
            array_push($this->openAPINullablesSetToNull, 'authorization_bearer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('authorization_bearer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($authorization_bearer) && (mb_strlen($authorization_bearer) > 256)) {
            throw new \InvalidArgumentException('invalid length for $authorization_bearer when calling V1MessagingConfigsSidPatchRequest., must be smaller than or equal to 256.');
        }

        $this->container['authorization_bearer'] = $authorization_bearer;

        return $this;
    }

    /**
     * Gets sending_times
     *
     * @return \OpenAPI\Client\Model\MessagingConfigModelSendingTimes|null
     */
    public function getSendingTimes()
    {
        return $this->container['sending_times'];
    }

    /**
     * Sets sending_times
     *
     * @param \OpenAPI\Client\Model\MessagingConfigModelSendingTimes|null $sending_times sending_times
     *
     * @return self
     */
    public function setSendingTimes($sending_times)
    {
        if (is_null($sending_times)) {
            array_push($this->openAPINullablesSetToNull, 'sending_times');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sending_times', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sending_times'] = $sending_times;

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


