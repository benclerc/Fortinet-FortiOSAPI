<?php
/**
 * InlineObject223
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
 * InlineObject223 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject223 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_223';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => 'string',
        'frequency' => 'string',
        'time' => 'string',
        'day' => 'string'
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
        'frequency' => null,
        'time' => null,
        'day' => null
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
        'frequency' => 'frequency',
        'time' => 'time',
        'day' => 'day'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'frequency' => 'setFrequency',
        'time' => 'setTime',
        'day' => 'setDay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'frequency' => 'getFrequency',
        'time' => 'getTime',
        'day' => 'getDay'
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
    const FREQUENCY_EVERY = 'every';
    const FREQUENCY_DAILY = 'daily';
    const FREQUENCY_WEEKLY = 'weekly';
    const DAY_SUNDAY = 'Sunday';
    const DAY_MONDAY = 'Monday';
    const DAY_TUESDAY = 'Tuesday';
    const DAY_WEDNESDAY = 'Wednesday';
    const DAY_THURSDAY = 'Thursday';
    const DAY_FRIDAY = 'Friday';
    const DAY_SATURDAY = 'Saturday';
    

    
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
    public function getFrequencyAllowableValues()
    {
        return [
            self::FREQUENCY_EVERY,
            self::FREQUENCY_DAILY,
            self::FREQUENCY_WEEKLY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDayAllowableValues()
    {
        return [
            self::DAY_SUNDAY,
            self::DAY_MONDAY,
            self::DAY_TUESDAY,
            self::DAY_WEDNESDAY,
            self::DAY_THURSDAY,
            self::DAY_FRIDAY,
            self::DAY_SATURDAY,
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
        $this->container['frequency'] = $data['frequency'] ?? null;
        $this->container['time'] = $data['time'] ?? null;
        $this->container['day'] = $data['day'] ?? null;
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

        $allowedValues = $this->getFrequencyAllowableValues();
        if (!is_null($this->container['frequency']) && !in_array($this->container['frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'frequency', must be one of '%s'",
                $this->container['frequency'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDayAllowableValues();
        if (!is_null($this->container['day']) && !in_array($this->container['day'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'day', must be one of '%s'",
                $this->container['day'],
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
     * @param string|null $status Enable/disable scheduled updates.    enable:Enable setting.    disable:Disable setting.
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
     * Gets frequency
     *
     * @return string|null
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param string|null $frequency Update frequency.    every:Time interval.    daily:Every day.    weekly:Every week.
     *
     * @return self
     */
    public function setFrequency($frequency)
    {
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!is_null($frequency) && !in_array($frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'frequency', must be one of '%s'",
                    $frequency,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets time
     *
     * @return string|null
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param string|null $time Update time.
     *
     * @return self
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets day
     *
     * @return string|null
     */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
     * Sets day
     *
     * @param string|null $day Update day.    Sunday:Update every Sunday.    Monday:Update every Monday.    Tuesday:Update every Tuesday.    Wednesday:Update every Wednesday.    Thursday:Update every Thursday.    Friday:Update every Friday.    Saturday:Update every Saturday.
     *
     * @return self
     */
    public function setDay($day)
    {
        $allowedValues = $this->getDayAllowableValues();
        if (!is_null($day) && !in_array($day, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'day', must be one of '%s'",
                    $day,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['day'] = $day;

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


