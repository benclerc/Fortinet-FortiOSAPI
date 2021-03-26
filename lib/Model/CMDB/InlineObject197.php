<?php
/**
 * InlineObject197
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
 * InlineObject197 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject197 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_197';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tx_hold' => 'int',
        'tx_interval' => 'int',
        'fast_start_interval' => 'int',
        'management_interface' => 'string',
        'device_detection' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tx_hold' => null,
        'tx_interval' => null,
        'fast_start_interval' => null,
        'management_interface' => null,
        'device_detection' => null
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
        'tx_hold' => 'tx-hold',
        'tx_interval' => 'tx-interval',
        'fast_start_interval' => 'fast-start-interval',
        'management_interface' => 'management-interface',
        'device_detection' => 'device-detection'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tx_hold' => 'setTxHold',
        'tx_interval' => 'setTxInterval',
        'fast_start_interval' => 'setFastStartInterval',
        'management_interface' => 'setManagementInterface',
        'device_detection' => 'setDeviceDetection'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tx_hold' => 'getTxHold',
        'tx_interval' => 'getTxInterval',
        'fast_start_interval' => 'getFastStartInterval',
        'management_interface' => 'getManagementInterface',
        'device_detection' => 'getDeviceDetection'
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

    const MANAGEMENT_INTERFACE_INTERNAL = 'internal';
    const MANAGEMENT_INTERFACE_MGMT = 'mgmt';
    const DEVICE_DETECTION_DISABLE = 'disable';
    const DEVICE_DETECTION_ENABLE = 'enable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getManagementInterfaceAllowableValues()
    {
        return [
            self::MANAGEMENT_INTERFACE_INTERNAL,
            self::MANAGEMENT_INTERFACE_MGMT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeviceDetectionAllowableValues()
    {
        return [
            self::DEVICE_DETECTION_DISABLE,
            self::DEVICE_DETECTION_ENABLE,
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
        $this->container['tx_hold'] = $data['tx_hold'] ?? null;
        $this->container['tx_interval'] = $data['tx_interval'] ?? null;
        $this->container['fast_start_interval'] = $data['fast_start_interval'] ?? null;
        $this->container['management_interface'] = $data['management_interface'] ?? null;
        $this->container['device_detection'] = $data['device_detection'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['tx_hold']) && ($this->container['tx_hold'] > 16)) {
            $invalidProperties[] = "invalid value for 'tx_hold', must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['tx_hold']) && ($this->container['tx_hold'] < 1)) {
            $invalidProperties[] = "invalid value for 'tx_hold', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['tx_interval']) && ($this->container['tx_interval'] > 4095)) {
            $invalidProperties[] = "invalid value for 'tx_interval', must be smaller than or equal to 4095.";
        }

        if (!is_null($this->container['tx_interval']) && ($this->container['tx_interval'] < 5)) {
            $invalidProperties[] = "invalid value for 'tx_interval', must be bigger than or equal to 5.";
        }

        if (!is_null($this->container['fast_start_interval']) && ($this->container['fast_start_interval'] > 255)) {
            $invalidProperties[] = "invalid value for 'fast_start_interval', must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['fast_start_interval']) && ($this->container['fast_start_interval'] < 0)) {
            $invalidProperties[] = "invalid value for 'fast_start_interval', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getManagementInterfaceAllowableValues();
        if (!is_null($this->container['management_interface']) && !in_array($this->container['management_interface'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'management_interface', must be one of '%s'",
                $this->container['management_interface'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDeviceDetectionAllowableValues();
        if (!is_null($this->container['device_detection']) && !in_array($this->container['device_detection'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'device_detection', must be one of '%s'",
                $this->container['device_detection'],
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
     * Gets tx_hold
     *
     * @return int|null
     */
    public function getTxHold()
    {
        return $this->container['tx_hold'];
    }

    /**
     * Sets tx_hold
     *
     * @param int|null $tx_hold Number of tx-intervals before local LLDP data expires (1 - 16, default = 4). Packet TTL is tx-hold * tx-interval.
     *
     * @return self
     */
    public function setTxHold($tx_hold)
    {

        if (!is_null($tx_hold) && ($tx_hold > 16)) {
            throw new \InvalidArgumentException('invalid value for $tx_hold when calling InlineObject197., must be smaller than or equal to 16.');
        }
        if (!is_null($tx_hold) && ($tx_hold < 1)) {
            throw new \InvalidArgumentException('invalid value for $tx_hold when calling InlineObject197., must be bigger than or equal to 1.');
        }

        $this->container['tx_hold'] = $tx_hold;

        return $this;
    }

    /**
     * Gets tx_interval
     *
     * @return int|null
     */
    public function getTxInterval()
    {
        return $this->container['tx_interval'];
    }

    /**
     * Sets tx_interval
     *
     * @param int|null $tx_interval Frequency of LLDP PDU transmission from FortiSwitch (5 - 4095 sec, default = 30). Packet TTL is tx-hold * tx-interval.
     *
     * @return self
     */
    public function setTxInterval($tx_interval)
    {

        if (!is_null($tx_interval) && ($tx_interval > 4095)) {
            throw new \InvalidArgumentException('invalid value for $tx_interval when calling InlineObject197., must be smaller than or equal to 4095.');
        }
        if (!is_null($tx_interval) && ($tx_interval < 5)) {
            throw new \InvalidArgumentException('invalid value for $tx_interval when calling InlineObject197., must be bigger than or equal to 5.');
        }

        $this->container['tx_interval'] = $tx_interval;

        return $this;
    }

    /**
     * Gets fast_start_interval
     *
     * @return int|null
     */
    public function getFastStartInterval()
    {
        return $this->container['fast_start_interval'];
    }

    /**
     * Sets fast_start_interval
     *
     * @param int|null $fast_start_interval Frequency of LLDP PDU transmission from FortiSwitch for the first 4 packets when the link is up (2 - 5 sec, default = 2, 0 = disable fast start).
     *
     * @return self
     */
    public function setFastStartInterval($fast_start_interval)
    {

        if (!is_null($fast_start_interval) && ($fast_start_interval > 255)) {
            throw new \InvalidArgumentException('invalid value for $fast_start_interval when calling InlineObject197., must be smaller than or equal to 255.');
        }
        if (!is_null($fast_start_interval) && ($fast_start_interval < 0)) {
            throw new \InvalidArgumentException('invalid value for $fast_start_interval when calling InlineObject197., must be bigger than or equal to 0.');
        }

        $this->container['fast_start_interval'] = $fast_start_interval;

        return $this;
    }

    /**
     * Gets management_interface
     *
     * @return string|null
     */
    public function getManagementInterface()
    {
        return $this->container['management_interface'];
    }

    /**
     * Sets management_interface
     *
     * @param string|null $management_interface Primary management interface to be advertised in LLDP and CDP PDUs.    internal:Use internal interface.    mgmt:Use management interface.
     *
     * @return self
     */
    public function setManagementInterface($management_interface)
    {
        $allowedValues = $this->getManagementInterfaceAllowableValues();
        if (!is_null($management_interface) && !in_array($management_interface, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'management_interface', must be one of '%s'",
                    $management_interface,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['management_interface'] = $management_interface;

        return $this;
    }

    /**
     * Gets device_detection
     *
     * @return string|null
     */
    public function getDeviceDetection()
    {
        return $this->container['device_detection'];
    }

    /**
     * Sets device_detection
     *
     * @param string|null $device_detection Enable/disable dynamic detection of LLDP neighbor devices for VLAN assignment.    disable:Disable dynamic detection of LLDP neighbor devices.    enable:Enable dynamic detection of LLDP neighbor devices.
     *
     * @return self
     */
    public function setDeviceDetection($device_detection)
    {
        $allowedValues = $this->getDeviceDetectionAllowableValues();
        if (!is_null($device_detection) && !in_array($device_detection, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'device_detection', must be one of '%s'",
                    $device_detection,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['device_detection'] = $device_detection;

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


