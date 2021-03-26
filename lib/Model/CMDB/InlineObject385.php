<?php
/**
 * InlineObject385
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
 * InlineObject385 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject385 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_385';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'status' => 'string',
        'media_status' => 'string',
        'order' => 'int',
        'partition' => 'string',
        'device' => 'string',
        'size' => 'int',
        'usage' => 'string',
        'wanopt_mode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'status' => null,
        'media_status' => null,
        'order' => null,
        'partition' => null,
        'device' => null,
        'size' => null,
        'usage' => null,
        'wanopt_mode' => null
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
        'name' => 'name',
        'status' => 'status',
        'media_status' => 'media-status',
        'order' => 'order',
        'partition' => 'partition',
        'device' => 'device',
        'size' => 'size',
        'usage' => 'usage',
        'wanopt_mode' => 'wanopt-mode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'status' => 'setStatus',
        'media_status' => 'setMediaStatus',
        'order' => 'setOrder',
        'partition' => 'setPartition',
        'device' => 'setDevice',
        'size' => 'setSize',
        'usage' => 'setUsage',
        'wanopt_mode' => 'setWanoptMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'status' => 'getStatus',
        'media_status' => 'getMediaStatus',
        'order' => 'getOrder',
        'partition' => 'getPartition',
        'device' => 'getDevice',
        'size' => 'getSize',
        'usage' => 'getUsage',
        'wanopt_mode' => 'getWanoptMode'
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
    const MEDIA_STATUS_ENABLE = 'enable';
    const MEDIA_STATUS_DISABLE = 'disable';
    const MEDIA_STATUS_FAIL = 'fail';
    const USAGE_LOG = 'log';
    const USAGE_WANOPT = 'wanopt';
    const WANOPT_MODE_MIX = 'mix';
    const WANOPT_MODE_WANOPT = 'wanopt';
    const WANOPT_MODE_WEBCACHE = 'webcache';
    

    
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
    public function getMediaStatusAllowableValues()
    {
        return [
            self::MEDIA_STATUS_ENABLE,
            self::MEDIA_STATUS_DISABLE,
            self::MEDIA_STATUS_FAIL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUsageAllowableValues()
    {
        return [
            self::USAGE_LOG,
            self::USAGE_WANOPT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWanoptModeAllowableValues()
    {
        return [
            self::WANOPT_MODE_MIX,
            self::WANOPT_MODE_WANOPT,
            self::WANOPT_MODE_WEBCACHE,
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['media_status'] = $data['media_status'] ?? null;
        $this->container['order'] = $data['order'] ?? null;
        $this->container['partition'] = $data['partition'] ?? null;
        $this->container['device'] = $data['device'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['usage'] = $data['usage'] ?? null;
        $this->container['wanopt_mode'] = $data['wanopt_mode'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        $allowedValues = $this->getMediaStatusAllowableValues();
        if (!is_null($this->container['media_status']) && !in_array($this->container['media_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'media_status', must be one of '%s'",
                $this->container['media_status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['order']) && ($this->container['order'] > 255)) {
            $invalidProperties[] = "invalid value for 'order', must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['order']) && ($this->container['order'] < 0)) {
            $invalidProperties[] = "invalid value for 'order', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['partition']) && (mb_strlen($this->container['partition']) > 16)) {
            $invalidProperties[] = "invalid value for 'partition', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['device']) && (mb_strlen($this->container['device']) > 19)) {
            $invalidProperties[] = "invalid value for 'device', the character length must be smaller than or equal to 19.";
        }

        if (!is_null($this->container['size']) && ($this->container['size'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['size']) && ($this->container['size'] < 0)) {
            $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getUsageAllowableValues();
        if (!is_null($this->container['usage']) && !in_array($this->container['usage'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'usage', must be one of '%s'",
                $this->container['usage'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWanoptModeAllowableValues();
        if (!is_null($this->container['wanopt_mode']) && !in_array($this->container['wanopt_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'wanopt_mode', must be one of '%s'",
                $this->container['wanopt_mode'],
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
     * @param string|null $name Storage name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InlineObject385., must be smaller than or equal to 35.');
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
     * @param string|null $status Enable/disable storage.    enable:Enable setting.    disable:Disable setting.
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
     * Gets media_status
     *
     * @return string|null
     */
    public function getMediaStatus()
    {
        return $this->container['media_status'];
    }

    /**
     * Sets media_status
     *
     * @param string|null $media_status The physical status of current media.    enable:Storage is enabled.    disable:Storage is disabled.    fail:Storage have some fail sector.
     *
     * @return self
     */
    public function setMediaStatus($media_status)
    {
        $allowedValues = $this->getMediaStatusAllowableValues();
        if (!is_null($media_status) && !in_array($media_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'media_status', must be one of '%s'",
                    $media_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['media_status'] = $media_status;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int|null $order Set storage order.
     *
     * @return self
     */
    public function setOrder($order)
    {

        if (!is_null($order) && ($order > 255)) {
            throw new \InvalidArgumentException('invalid value for $order when calling InlineObject385., must be smaller than or equal to 255.');
        }
        if (!is_null($order) && ($order < 0)) {
            throw new \InvalidArgumentException('invalid value for $order when calling InlineObject385., must be bigger than or equal to 0.');
        }

        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets partition
     *
     * @return string|null
     */
    public function getPartition()
    {
        return $this->container['partition'];
    }

    /**
     * Sets partition
     *
     * @param string|null $partition Label of underlying partition.
     *
     * @return self
     */
    public function setPartition($partition)
    {
        if (!is_null($partition) && (mb_strlen($partition) > 16)) {
            throw new \InvalidArgumentException('invalid length for $partition when calling InlineObject385., must be smaller than or equal to 16.');
        }

        $this->container['partition'] = $partition;

        return $this;
    }

    /**
     * Gets device
     *
     * @return string|null
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param string|null $device Partition device.
     *
     * @return self
     */
    public function setDevice($device)
    {
        if (!is_null($device) && (mb_strlen($device) > 19)) {
            throw new \InvalidArgumentException('invalid length for $device when calling InlineObject385., must be smaller than or equal to 19.');
        }

        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size Partition size.
     *
     * @return self
     */
    public function setSize($size)
    {

        if (!is_null($size) && ($size > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $size when calling InlineObject385., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($size) && ($size < 0)) {
            throw new \InvalidArgumentException('invalid value for $size when calling InlineObject385., must be bigger than or equal to 0.');
        }

        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets usage
     *
     * @return string|null
     */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     *
     * @param string|null $usage Use hard disk for logging or WAN Optimization (default = log).    log:Use hard disk for logging.    wanopt:Use hard disk for WAN Optimization.
     *
     * @return self
     */
    public function setUsage($usage)
    {
        $allowedValues = $this->getUsageAllowableValues();
        if (!is_null($usage) && !in_array($usage, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'usage', must be one of '%s'",
                    $usage,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['usage'] = $usage;

        return $this;
    }

    /**
     * Gets wanopt_mode
     *
     * @return string|null
     */
    public function getWanoptMode()
    {
        return $this->container['wanopt_mode'];
    }

    /**
     * Sets wanopt_mode
     *
     * @param string|null $wanopt_mode WAN Optimization mode (default = mix).    mix:Use hard disk for WAN Optimization mix mode.    wanopt:Use hard disk for WAN Optimization wanopt mode.    webcache:Use hard disk for WAN Optimization webcache mode.
     *
     * @return self
     */
    public function setWanoptMode($wanopt_mode)
    {
        $allowedValues = $this->getWanoptModeAllowableValues();
        if (!is_null($wanopt_mode) && !in_array($wanopt_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'wanopt_mode', must be one of '%s'",
                    $wanopt_mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['wanopt_mode'] = $wanopt_mode;

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


