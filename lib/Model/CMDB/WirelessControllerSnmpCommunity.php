<?php
/**
 * WirelessControllerSnmpCommunity
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
 * WirelessControllerSnmpCommunity Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class WirelessControllerSnmpCommunity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_wireless_controller_snmp_community';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'status' => 'string',
        'query_v1_status' => 'string',
        'query_v2c_status' => 'string',
        'trap_v1_status' => 'string',
        'trap_v2c_status' => 'string',
        'hosts' => '\Fortigate\FortiOS\Model\CMDB\SwitchControllerManagedSwitchSwitchIdHosts[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'query_v1_status' => null,
        'query_v2c_status' => null,
        'trap_v1_status' => null,
        'trap_v2c_status' => null,
        'hosts' => null
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
        'id' => 'id',
        'name' => 'name',
        'status' => 'status',
        'query_v1_status' => 'query-v1-status',
        'query_v2c_status' => 'query-v2c-status',
        'trap_v1_status' => 'trap-v1-status',
        'trap_v2c_status' => 'trap-v2c-status',
        'hosts' => 'hosts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'status' => 'setStatus',
        'query_v1_status' => 'setQueryV1Status',
        'query_v2c_status' => 'setQueryV2cStatus',
        'trap_v1_status' => 'setTrapV1Status',
        'trap_v2c_status' => 'setTrapV2cStatus',
        'hosts' => 'setHosts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'status' => 'getStatus',
        'query_v1_status' => 'getQueryV1Status',
        'query_v2c_status' => 'getQueryV2cStatus',
        'trap_v1_status' => 'getTrapV1Status',
        'trap_v2c_status' => 'getTrapV2cStatus',
        'hosts' => 'getHosts'
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
    const QUERY_V1_STATUS_ENABLE = 'enable';
    const QUERY_V1_STATUS_DISABLE = 'disable';
    const QUERY_V2C_STATUS_ENABLE = 'enable';
    const QUERY_V2C_STATUS_DISABLE = 'disable';
    const TRAP_V1_STATUS_ENABLE = 'enable';
    const TRAP_V1_STATUS_DISABLE = 'disable';
    const TRAP_V2C_STATUS_ENABLE = 'enable';
    const TRAP_V2C_STATUS_DISABLE = 'disable';
    

    
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
    public function getQueryV1StatusAllowableValues()
    {
        return [
            self::QUERY_V1_STATUS_ENABLE,
            self::QUERY_V1_STATUS_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getQueryV2cStatusAllowableValues()
    {
        return [
            self::QUERY_V2C_STATUS_ENABLE,
            self::QUERY_V2C_STATUS_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTrapV1StatusAllowableValues()
    {
        return [
            self::TRAP_V1_STATUS_ENABLE,
            self::TRAP_V1_STATUS_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTrapV2cStatusAllowableValues()
    {
        return [
            self::TRAP_V2C_STATUS_ENABLE,
            self::TRAP_V2C_STATUS_DISABLE,
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['query_v1_status'] = $data['query_v1_status'] ?? null;
        $this->container['query_v2c_status'] = $data['query_v2c_status'] ?? null;
        $this->container['trap_v1_status'] = $data['trap_v1_status'] ?? null;
        $this->container['trap_v2c_status'] = $data['trap_v2c_status'] ?? null;
        $this->container['hosts'] = $data['hosts'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['id']) && ($this->container['id'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 35)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 35.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getQueryV1StatusAllowableValues();
        if (!is_null($this->container['query_v1_status']) && !in_array($this->container['query_v1_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'query_v1_status', must be one of '%s'",
                $this->container['query_v1_status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getQueryV2cStatusAllowableValues();
        if (!is_null($this->container['query_v2c_status']) && !in_array($this->container['query_v2c_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'query_v2c_status', must be one of '%s'",
                $this->container['query_v2c_status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTrapV1StatusAllowableValues();
        if (!is_null($this->container['trap_v1_status']) && !in_array($this->container['trap_v1_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'trap_v1_status', must be one of '%s'",
                $this->container['trap_v1_status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTrapV2cStatusAllowableValues();
        if (!is_null($this->container['trap_v2c_status']) && !in_array($this->container['trap_v2c_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'trap_v2c_status', must be one of '%s'",
                $this->container['trap_v2c_status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['hosts']) && (count($this->container['hosts']) > 4)) {
            $invalidProperties[] = "invalid value for 'hosts', number of items must be less than or equal to 4.";
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
     * @param int|null $id Community ID.
     *
     * @return self
     */
    public function setId($id)
    {

        if (!is_null($id) && ($id > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $id when calling WirelessControllerSnmpCommunity., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($id) && ($id < 0)) {
            throw new \InvalidArgumentException('invalid value for $id when calling WirelessControllerSnmpCommunity., must be bigger than or equal to 0.');
        }

        $this->container['id'] = $id;

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
     * @param string|null $name Community name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $name when calling WirelessControllerSnmpCommunity., must be smaller than or equal to 35.');
        }

        $this->container['name'] = $name;

        return $this;
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
     * @param string|null $status Enable/disable this SNMP community.    enable:Enable setting.    disable:Disable setting.
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
     * Gets query_v1_status
     *
     * @return string|null
     */
    public function getQueryV1Status()
    {
        return $this->container['query_v1_status'];
    }

    /**
     * Sets query_v1_status
     *
     * @param string|null $query_v1_status Enable/disable SNMP v1 queries.    enable:Enable setting.    disable:Disable setting.
     *
     * @return self
     */
    public function setQueryV1Status($query_v1_status)
    {
        $allowedValues = $this->getQueryV1StatusAllowableValues();
        if (!is_null($query_v1_status) && !in_array($query_v1_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'query_v1_status', must be one of '%s'",
                    $query_v1_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['query_v1_status'] = $query_v1_status;

        return $this;
    }

    /**
     * Gets query_v2c_status
     *
     * @return string|null
     */
    public function getQueryV2cStatus()
    {
        return $this->container['query_v2c_status'];
    }

    /**
     * Sets query_v2c_status
     *
     * @param string|null $query_v2c_status Enable/disable SNMP v2c queries.    enable:Enable setting.    disable:Disable setting.
     *
     * @return self
     */
    public function setQueryV2cStatus($query_v2c_status)
    {
        $allowedValues = $this->getQueryV2cStatusAllowableValues();
        if (!is_null($query_v2c_status) && !in_array($query_v2c_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'query_v2c_status', must be one of '%s'",
                    $query_v2c_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['query_v2c_status'] = $query_v2c_status;

        return $this;
    }

    /**
     * Gets trap_v1_status
     *
     * @return string|null
     */
    public function getTrapV1Status()
    {
        return $this->container['trap_v1_status'];
    }

    /**
     * Sets trap_v1_status
     *
     * @param string|null $trap_v1_status Enable/disable SNMP v1 traps.    enable:Enable setting.    disable:Disable setting.
     *
     * @return self
     */
    public function setTrapV1Status($trap_v1_status)
    {
        $allowedValues = $this->getTrapV1StatusAllowableValues();
        if (!is_null($trap_v1_status) && !in_array($trap_v1_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'trap_v1_status', must be one of '%s'",
                    $trap_v1_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['trap_v1_status'] = $trap_v1_status;

        return $this;
    }

    /**
     * Gets trap_v2c_status
     *
     * @return string|null
     */
    public function getTrapV2cStatus()
    {
        return $this->container['trap_v2c_status'];
    }

    /**
     * Sets trap_v2c_status
     *
     * @param string|null $trap_v2c_status Enable/disable SNMP v2c traps.    enable:Enable setting.    disable:Disable setting.
     *
     * @return self
     */
    public function setTrapV2cStatus($trap_v2c_status)
    {
        $allowedValues = $this->getTrapV2cStatusAllowableValues();
        if (!is_null($trap_v2c_status) && !in_array($trap_v2c_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'trap_v2c_status', must be one of '%s'",
                    $trap_v2c_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['trap_v2c_status'] = $trap_v2c_status;

        return $this;
    }

    /**
     * Gets hosts
     *
     * @return \Fortigate\FortiOS\Model\CMDB\SwitchControllerManagedSwitchSwitchIdHosts[]|null
     */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
     * Sets hosts
     *
     * @param \Fortigate\FortiOS\Model\CMDB\SwitchControllerManagedSwitchSwitchIdHosts[]|null $hosts Configure IPv4 SNMP managers (hosts).
     *
     * @return self
     */
    public function setHosts($hosts)
    {

        if (!is_null($hosts) && (count($hosts) > 4)) {
            throw new \InvalidArgumentException('invalid value for $hosts when calling WirelessControllerSnmpCommunity., number of items must be less than or equal to 4.');
        }
        $this->container['hosts'] = $hosts;

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


