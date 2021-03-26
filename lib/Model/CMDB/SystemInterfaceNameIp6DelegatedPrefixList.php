<?php
/**
 * SystemInterfaceNameIp6DelegatedPrefixList
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FortiOS CMDB
 *
 * REST API for configuring FortiOS objects and settings
 *
 * The version of the OpenAPI document: v2
 * Contact: fosguiqateam@fortinet.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Fortigate\FortiOS\Model\CMDB;

use \ArrayAccess;
use \Fortigate\FortiOS\ObjectSerializer;

/**
 * SystemInterfaceNameIp6DelegatedPrefixList Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SystemInterfaceNameIp6DelegatedPrefixList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_system_interface__name__ip6_delegated_prefix_list';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'prefix_id' => 'int',
        'upstream_interface' => 'string',
        'autonomous_flag' => 'string',
        'onlink_flag' => 'string',
        'subnet' => 'string',
        'rdnss_service' => 'string',
        'rdnss' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'prefix_id' => null,
        'upstream_interface' => null,
        'autonomous_flag' => null,
        'onlink_flag' => null,
        'subnet' => null,
        'rdnss_service' => null,
        'rdnss' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'prefix_id' => 'prefix-id',
        'upstream_interface' => 'upstream-interface',
        'autonomous_flag' => 'autonomous-flag',
        'onlink_flag' => 'onlink-flag',
        'subnet' => 'subnet',
        'rdnss_service' => 'rdnss-service',
        'rdnss' => 'rdnss'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'prefix_id' => 'setPrefixId',
        'upstream_interface' => 'setUpstreamInterface',
        'autonomous_flag' => 'setAutonomousFlag',
        'onlink_flag' => 'setOnlinkFlag',
        'subnet' => 'setSubnet',
        'rdnss_service' => 'setRdnssService',
        'rdnss' => 'setRdnss'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'prefix_id' => 'getPrefixId',
        'upstream_interface' => 'getUpstreamInterface',
        'autonomous_flag' => 'getAutonomousFlag',
        'onlink_flag' => 'getOnlinkFlag',
        'subnet' => 'getSubnet',
        'rdnss_service' => 'getRdnssService',
        'rdnss' => 'getRdnss'
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

    const AUTONOMOUS_FLAG_ENABLE = 'enable';
    const AUTONOMOUS_FLAG_DISABLE = 'disable';
    const ONLINK_FLAG_ENABLE = 'enable';
    const ONLINK_FLAG_DISABLE = 'disable';
    const RDNSS_SERVICE_DELEGATED = 'delegated';
    const RDNSS_SERVICE__DEFAULT = 'default';
    const RDNSS_SERVICE_SPECIFY = 'specify';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAutonomousFlagAllowableValues()
    {
        return [
            self::AUTONOMOUS_FLAG_ENABLE,
            self::AUTONOMOUS_FLAG_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOnlinkFlagAllowableValues()
    {
        return [
            self::ONLINK_FLAG_ENABLE,
            self::ONLINK_FLAG_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRdnssServiceAllowableValues()
    {
        return [
            self::RDNSS_SERVICE_DELEGATED,
            self::RDNSS_SERVICE__DEFAULT,
            self::RDNSS_SERVICE_SPECIFY,
        ];
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
        $this->container['prefix_id'] = $data['prefix_id'] ?? null;
        $this->container['upstream_interface'] = $data['upstream_interface'] ?? null;
        $this->container['autonomous_flag'] = $data['autonomous_flag'] ?? null;
        $this->container['onlink_flag'] = $data['onlink_flag'] ?? null;
        $this->container['subnet'] = $data['subnet'] ?? null;
        $this->container['rdnss_service'] = $data['rdnss_service'] ?? null;
        $this->container['rdnss'] = $data['rdnss'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['prefix_id']) && ($this->container['prefix_id'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'prefix_id', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['prefix_id']) && ($this->container['prefix_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'prefix_id', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['upstream_interface']) && (mb_strlen($this->container['upstream_interface']) > 15)) {
            $invalidProperties[] = "invalid value for 'upstream_interface', the character length must be smaller than or equal to 15.";
        }

        $allowedValues = $this->getAutonomousFlagAllowableValues();
        if (!is_null($this->container['autonomous_flag']) && !in_array($this->container['autonomous_flag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'autonomous_flag', must be one of '%s'",
                $this->container['autonomous_flag'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOnlinkFlagAllowableValues();
        if (!is_null($this->container['onlink_flag']) && !in_array($this->container['onlink_flag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'onlink_flag', must be one of '%s'",
                $this->container['onlink_flag'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRdnssServiceAllowableValues();
        if (!is_null($this->container['rdnss_service']) && !in_array($this->container['rdnss_service'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'rdnss_service', must be one of '%s'",
                $this->container['rdnss_service'],
                implode("', '", $allowedValues)
            );
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
     * Gets prefix_id
     *
     * @return int|null
     */
    public function getPrefixId()
    {
        return $this->container['prefix_id'];
    }

    /**
     * Sets prefix_id
     *
     * @param int|null $prefix_id Prefix ID.
     *
     * @return self
     */
    public function setPrefixId($prefix_id)
    {

        if (!is_null($prefix_id) && ($prefix_id > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $prefix_id when calling SystemInterfaceNameIp6DelegatedPrefixList., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($prefix_id) && ($prefix_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $prefix_id when calling SystemInterfaceNameIp6DelegatedPrefixList., must be bigger than or equal to 0.');
        }

        $this->container['prefix_id'] = $prefix_id;

        return $this;
    }

    /**
     * Gets upstream_interface
     *
     * @return string|null
     */
    public function getUpstreamInterface()
    {
        return $this->container['upstream_interface'];
    }

    /**
     * Sets upstream_interface
     *
     * @param string|null $upstream_interface Name of the interface that provides delegated information.
     *
     * @return self
     */
    public function setUpstreamInterface($upstream_interface)
    {
        if (!is_null($upstream_interface) && (mb_strlen($upstream_interface) > 15)) {
            throw new \InvalidArgumentException('invalid length for $upstream_interface when calling SystemInterfaceNameIp6DelegatedPrefixList., must be smaller than or equal to 15.');
        }

        $this->container['upstream_interface'] = $upstream_interface;

        return $this;
    }

    /**
     * Gets autonomous_flag
     *
     * @return string|null
     */
    public function getAutonomousFlag()
    {
        return $this->container['autonomous_flag'];
    }

    /**
     * Sets autonomous_flag
     *
     * @param string|null $autonomous_flag Enable/disable the autonomous flag.    enable:Enable the autonomous flag.    disable:Disable the autonomous flag.
     *
     * @return self
     */
    public function setAutonomousFlag($autonomous_flag)
    {
        $allowedValues = $this->getAutonomousFlagAllowableValues();
        if (!is_null($autonomous_flag) && !in_array($autonomous_flag, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'autonomous_flag', must be one of '%s'",
                    $autonomous_flag,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['autonomous_flag'] = $autonomous_flag;

        return $this;
    }

    /**
     * Gets onlink_flag
     *
     * @return string|null
     */
    public function getOnlinkFlag()
    {
        return $this->container['onlink_flag'];
    }

    /**
     * Sets onlink_flag
     *
     * @param string|null $onlink_flag Enable/disable the onlink flag.    enable:Enable the onlink flag.    disable:Disable the onlink flag.
     *
     * @return self
     */
    public function setOnlinkFlag($onlink_flag)
    {
        $allowedValues = $this->getOnlinkFlagAllowableValues();
        if (!is_null($onlink_flag) && !in_array($onlink_flag, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'onlink_flag', must be one of '%s'",
                    $onlink_flag,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['onlink_flag'] = $onlink_flag;

        return $this;
    }

    /**
     * Gets subnet
     *
     * @return string|null
     */
    public function getSubnet()
    {
        return $this->container['subnet'];
    }

    /**
     * Sets subnet
     *
     * @param string|null $subnet Add subnet ID to routing prefix.
     *
     * @return self
     */
    public function setSubnet($subnet)
    {
        $this->container['subnet'] = $subnet;

        return $this;
    }

    /**
     * Gets rdnss_service
     *
     * @return string|null
     */
    public function getRdnssService()
    {
        return $this->container['rdnss_service'];
    }

    /**
     * Sets rdnss_service
     *
     * @param string|null $rdnss_service Recursive DNS service option.    delegated:Delegated RDNSS settings.    default:System RDNSS settings.    specify:Specify recursive DNS servers.
     *
     * @return self
     */
    public function setRdnssService($rdnss_service)
    {
        $allowedValues = $this->getRdnssServiceAllowableValues();
        if (!is_null($rdnss_service) && !in_array($rdnss_service, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'rdnss_service', must be one of '%s'",
                    $rdnss_service,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rdnss_service'] = $rdnss_service;

        return $this;
    }

    /**
     * Gets rdnss
     *
     * @return string|null
     */
    public function getRdnss()
    {
        return $this->container['rdnss'];
    }

    /**
     * Sets rdnss
     *
     * @param string|null $rdnss Recursive DNS server option.
     *
     * @return self
     */
    public function setRdnss($rdnss)
    {
        $this->container['rdnss'] = $rdnss;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


