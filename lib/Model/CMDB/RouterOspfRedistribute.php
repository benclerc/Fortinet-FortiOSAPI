<?php
/**
 * RouterOspfRedistribute
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
 * RouterOspfRedistribute Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RouterOspfRedistribute implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_router_ospf_redistribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'status' => 'string',
        'metric' => 'int',
        'routemap' => 'string',
        'metric_type' => 'string',
        'tag' => 'int'
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
        'metric' => null,
        'routemap' => null,
        'metric_type' => null,
        'tag' => null
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
        'metric' => 'metric',
        'routemap' => 'routemap',
        'metric_type' => 'metric-type',
        'tag' => 'tag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'status' => 'setStatus',
        'metric' => 'setMetric',
        'routemap' => 'setRoutemap',
        'metric_type' => 'setMetricType',
        'tag' => 'setTag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'status' => 'getStatus',
        'metric' => 'getMetric',
        'routemap' => 'getRoutemap',
        'metric_type' => 'getMetricType',
        'tag' => 'getTag'
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
    const METRIC_TYPE__1 = '1';
    const METRIC_TYPE__2 = '2';
    

    
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
    public function getMetricTypeAllowableValues()
    {
        return [
            self::METRIC_TYPE__1,
            self::METRIC_TYPE__2,
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
        $this->container['metric'] = $data['metric'] ?? null;
        $this->container['routemap'] = $data['routemap'] ?? null;
        $this->container['metric_type'] = $data['metric_type'] ?? null;
        $this->container['tag'] = $data['tag'] ?? null;
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

        if (!is_null($this->container['metric']) && ($this->container['metric'] > 16777214)) {
            $invalidProperties[] = "invalid value for 'metric', must be smaller than or equal to 16777214.";
        }

        if (!is_null($this->container['metric']) && ($this->container['metric'] < 0)) {
            $invalidProperties[] = "invalid value for 'metric', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['routemap']) && (mb_strlen($this->container['routemap']) > 35)) {
            $invalidProperties[] = "invalid value for 'routemap', the character length must be smaller than or equal to 35.";
        }

        $allowedValues = $this->getMetricTypeAllowableValues();
        if (!is_null($this->container['metric_type']) && !in_array($this->container['metric_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'metric_type', must be one of '%s'",
                $this->container['metric_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['tag']) && ($this->container['tag'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'tag', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['tag']) && ($this->container['tag'] < 0)) {
            $invalidProperties[] = "invalid value for 'tag', must be bigger than or equal to 0.";
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
     * @param string|null $name Redistribute name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $name when calling RouterOspfRedistribute., must be smaller than or equal to 35.');
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
     * @param string|null $status status    enable:Enable setting.    disable:Disable setting.
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
     * Gets metric
     *
     * @return int|null
     */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
     * Sets metric
     *
     * @param int|null $metric Redistribute metric setting.
     *
     * @return self
     */
    public function setMetric($metric)
    {

        if (!is_null($metric) && ($metric > 16777214)) {
            throw new \InvalidArgumentException('invalid value for $metric when calling RouterOspfRedistribute., must be smaller than or equal to 16777214.');
        }
        if (!is_null($metric) && ($metric < 0)) {
            throw new \InvalidArgumentException('invalid value for $metric when calling RouterOspfRedistribute., must be bigger than or equal to 0.');
        }

        $this->container['metric'] = $metric;

        return $this;
    }

    /**
     * Gets routemap
     *
     * @return string|null
     */
    public function getRoutemap()
    {
        return $this->container['routemap'];
    }

    /**
     * Sets routemap
     *
     * @param string|null $routemap Route map name.
     *
     * @return self
     */
    public function setRoutemap($routemap)
    {
        if (!is_null($routemap) && (mb_strlen($routemap) > 35)) {
            throw new \InvalidArgumentException('invalid length for $routemap when calling RouterOspfRedistribute., must be smaller than or equal to 35.');
        }

        $this->container['routemap'] = $routemap;

        return $this;
    }

    /**
     * Gets metric_type
     *
     * @return string|null
     */
    public function getMetricType()
    {
        return $this->container['metric_type'];
    }

    /**
     * Sets metric_type
     *
     * @param string|null $metric_type Metric type.    1:Type 1.    2:Type 2.
     *
     * @return self
     */
    public function setMetricType($metric_type)
    {
        $allowedValues = $this->getMetricTypeAllowableValues();
        if (!is_null($metric_type) && !in_array($metric_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'metric_type', must be one of '%s'",
                    $metric_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['metric_type'] = $metric_type;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return int|null
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param int|null $tag Tag value.
     *
     * @return self
     */
    public function setTag($tag)
    {

        if (!is_null($tag) && ($tag > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $tag when calling RouterOspfRedistribute., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($tag) && ($tag < 0)) {
            throw new \InvalidArgumentException('invalid value for $tag when calling RouterOspfRedistribute., must be bigger than or equal to 0.');
        }

        $this->container['tag'] = $tag;

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


