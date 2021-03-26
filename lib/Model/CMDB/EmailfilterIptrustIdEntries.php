<?php
/**
 * EmailfilterIptrustIdEntries
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
 * EmailfilterIptrustIdEntries Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class EmailfilterIptrustIdEntries implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_emailfilter_iptrust__id__entries';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => 'string',
        'id' => 'int',
        'addr_type' => 'string',
        'ip4_subnet' => 'string',
        'ip6_subnet' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status' => null,
        'id' => null,
        'addr_type' => null,
        'ip4_subnet' => 'ipv4',
        'ip6_subnet' => null
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
        'status' => 'status',
        'id' => 'id',
        'addr_type' => 'addr-type',
        'ip4_subnet' => 'ip4-subnet',
        'ip6_subnet' => 'ip6-subnet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'id' => 'setId',
        'addr_type' => 'setAddrType',
        'ip4_subnet' => 'setIp4Subnet',
        'ip6_subnet' => 'setIp6Subnet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'id' => 'getId',
        'addr_type' => 'getAddrType',
        'ip4_subnet' => 'getIp4Subnet',
        'ip6_subnet' => 'getIp6Subnet'
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

    const STATUS_ENABLE = 'enable';
    const STATUS_DISABLE = 'disable';
    const ADDR_TYPE_IPV4 = 'ipv4';
    const ADDR_TYPE_IPV6 = 'ipv6';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLE,
            self::STATUS_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAddrTypeAllowableValues()
    {
        return [
            self::ADDR_TYPE_IPV4,
            self::ADDR_TYPE_IPV6,
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['addr_type'] = $data['addr_type'] ?? null;
        $this->container['ip4_subnet'] = $data['ip4_subnet'] ?? null;
        $this->container['ip6_subnet'] = $data['ip6_subnet'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['id']) && ($this->container['id'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getAddrTypeAllowableValues();
        if (!is_null($this->container['addr_type']) && !in_array($this->container['addr_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'addr_type', must be one of '%s'",
                $this->container['addr_type'],
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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Enable/disable status.    enable:Enable status.    disable:Disable status.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Trusted IP entry ID.
     *
     * @return self
     */
    public function setId($id)
    {

        if (!is_null($id) && ($id > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $id when calling EmailfilterIptrustIdEntries., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($id) && ($id < 0)) {
            throw new \InvalidArgumentException('invalid value for $id when calling EmailfilterIptrustIdEntries., must be bigger than or equal to 0.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets addr_type
     *
     * @return string|null
     */
    public function getAddrType()
    {
        return $this->container['addr_type'];
    }

    /**
     * Sets addr_type
     *
     * @param string|null $addr_type Type of address.    ipv4:IPv4 Address type.    ipv6:IPv6 Address type.
     *
     * @return self
     */
    public function setAddrType($addr_type)
    {
        $allowedValues = $this->getAddrTypeAllowableValues();
        if (!is_null($addr_type) && !in_array($addr_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'addr_type', must be one of '%s'",
                    $addr_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['addr_type'] = $addr_type;

        return $this;
    }

    /**
     * Gets ip4_subnet
     *
     * @return string|null
     */
    public function getIp4Subnet()
    {
        return $this->container['ip4_subnet'];
    }

    /**
     * Sets ip4_subnet
     *
     * @param string|null $ip4_subnet IPv4 network address or network address/subnet mask bits.
     *
     * @return self
     */
    public function setIp4Subnet($ip4_subnet)
    {
        $this->container['ip4_subnet'] = $ip4_subnet;

        return $this;
    }

    /**
     * Gets ip6_subnet
     *
     * @return string|null
     */
    public function getIp6Subnet()
    {
        return $this->container['ip6_subnet'];
    }

    /**
     * Sets ip6_subnet
     *
     * @param string|null $ip6_subnet IPv6 network address/subnet mask bits.
     *
     * @return self
     */
    public function setIp6Subnet($ip6_subnet)
    {
        $this->container['ip6_subnet'] = $ip6_subnet;

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


