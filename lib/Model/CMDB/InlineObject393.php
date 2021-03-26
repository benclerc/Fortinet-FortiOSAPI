<?php
/**
 * InlineObject393
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
 * InlineObject393 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject393 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_393';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'short_name' => 'string',
        'vcluster_id' => 'int',
        'flag' => 'int'
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
        'short_name' => null,
        'vcluster_id' => null,
        'flag' => null
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
        'short_name' => 'short-name',
        'vcluster_id' => 'vcluster-id',
        'flag' => 'flag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'short_name' => 'setShortName',
        'vcluster_id' => 'setVclusterId',
        'flag' => 'setFlag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'short_name' => 'getShortName',
        'vcluster_id' => 'getVclusterId',
        'flag' => 'getFlag'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['short_name'] = $data['short_name'] ?? null;
        $this->container['vcluster_id'] = $data['vcluster_id'] ?? null;
        $this->container['flag'] = $data['flag'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 31)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 31.";
        }

        if (!is_null($this->container['short_name']) && (mb_strlen($this->container['short_name']) > 11)) {
            $invalidProperties[] = "invalid value for 'short_name', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['vcluster_id']) && ($this->container['vcluster_id'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'vcluster_id', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['vcluster_id']) && ($this->container['vcluster_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'vcluster_id', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['flag']) && ($this->container['flag'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'flag', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['flag']) && ($this->container['flag'] < 0)) {
            $invalidProperties[] = "invalid value for 'flag', must be bigger than or equal to 0.";
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
     * @param string|null $name VDOM name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 31)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InlineObject393., must be smaller than or equal to 31.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets short_name
     *
     * @return string|null
     */
    public function getShortName()
    {
        return $this->container['short_name'];
    }

    /**
     * Sets short_name
     *
     * @param string|null $short_name VDOM short name.
     *
     * @return self
     */
    public function setShortName($short_name)
    {
        if (!is_null($short_name) && (mb_strlen($short_name) > 11)) {
            throw new \InvalidArgumentException('invalid length for $short_name when calling InlineObject393., must be smaller than or equal to 11.');
        }

        $this->container['short_name'] = $short_name;

        return $this;
    }

    /**
     * Gets vcluster_id
     *
     * @return int|null
     */
    public function getVclusterId()
    {
        return $this->container['vcluster_id'];
    }

    /**
     * Sets vcluster_id
     *
     * @param int|null $vcluster_id Virtual cluster ID (0 - 4294967295).
     *
     * @return self
     */
    public function setVclusterId($vcluster_id)
    {

        if (!is_null($vcluster_id) && ($vcluster_id > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $vcluster_id when calling InlineObject393., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($vcluster_id) && ($vcluster_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $vcluster_id when calling InlineObject393., must be bigger than or equal to 0.');
        }

        $this->container['vcluster_id'] = $vcluster_id;

        return $this;
    }

    /**
     * Gets flag
     *
     * @return int|null
     */
    public function getFlag()
    {
        return $this->container['flag'];
    }

    /**
     * Sets flag
     *
     * @param int|null $flag Flag.
     *
     * @return self
     */
    public function setFlag($flag)
    {

        if (!is_null($flag) && ($flag > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $flag when calling InlineObject393., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($flag) && ($flag < 0)) {
            throw new \InvalidArgumentException('invalid value for $flag when calling InlineObject393., must be bigger than or equal to 0.');
        }

        $this->container['flag'] = $flag;

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


