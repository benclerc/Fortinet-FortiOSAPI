<?php
/**
 * RouterOspf6SummaryAddress
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
 * RouterOspf6SummaryAddress Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RouterOspf6SummaryAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_router_ospf6_summary_address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'prefix6' => 'string',
        'advertise' => 'string',
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
        'id' => null,
        'prefix6' => null,
        'advertise' => null,
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
        'id' => 'id',
        'prefix6' => 'prefix6',
        'advertise' => 'advertise',
        'tag' => 'tag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'prefix6' => 'setPrefix6',
        'advertise' => 'setAdvertise',
        'tag' => 'setTag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'prefix6' => 'getPrefix6',
        'advertise' => 'getAdvertise',
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

    const ADVERTISE_DISABLE = 'disable';
    const ADVERTISE_ENABLE = 'enable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAdvertiseAllowableValues()
    {
        return [
            self::ADVERTISE_DISABLE,
            self::ADVERTISE_ENABLE,
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
        $this->container['prefix6'] = $data['prefix6'] ?? null;
        $this->container['advertise'] = $data['advertise'] ?? null;
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

        if (!is_null($this->container['id']) && ($this->container['id'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getAdvertiseAllowableValues();
        if (!is_null($this->container['advertise']) && !in_array($this->container['advertise'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'advertise', must be one of '%s'",
                $this->container['advertise'],
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
     * @param int|null $id Summary address entry ID.
     *
     * @return self
     */
    public function setId($id)
    {

        if (!is_null($id) && ($id > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $id when calling RouterOspf6SummaryAddress., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($id) && ($id < 0)) {
            throw new \InvalidArgumentException('invalid value for $id when calling RouterOspf6SummaryAddress., must be bigger than or equal to 0.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets prefix6
     *
     * @return string|null
     */
    public function getPrefix6()
    {
        return $this->container['prefix6'];
    }

    /**
     * Sets prefix6
     *
     * @param string|null $prefix6 IPv6 prefix.
     *
     * @return self
     */
    public function setPrefix6($prefix6)
    {
        $this->container['prefix6'] = $prefix6;

        return $this;
    }

    /**
     * Gets advertise
     *
     * @return string|null
     */
    public function getAdvertise()
    {
        return $this->container['advertise'];
    }

    /**
     * Sets advertise
     *
     * @param string|null $advertise Enable/disable advertise status.    disable:disable    enable:enable
     *
     * @return self
     */
    public function setAdvertise($advertise)
    {
        $allowedValues = $this->getAdvertiseAllowableValues();
        if (!is_null($advertise) && !in_array($advertise, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'advertise', must be one of '%s'",
                    $advertise,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['advertise'] = $advertise;

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
            throw new \InvalidArgumentException('invalid value for $tag when calling RouterOspf6SummaryAddress., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($tag) && ($tag < 0)) {
            throw new \InvalidArgumentException('invalid value for $tag when calling RouterOspf6SummaryAddress., must be bigger than or equal to 0.');
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


