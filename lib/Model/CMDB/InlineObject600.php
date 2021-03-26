<?php
/**
 * InlineObject600
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
 * InlineObject600 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject600 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_600';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'comments' => 'string',
        'grayscale' => 'string',
        'opacity' => 'int'
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
        'comments' => null,
        'grayscale' => null,
        'opacity' => null
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
        'comments' => 'comments',
        'grayscale' => 'grayscale',
        'opacity' => 'opacity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'comments' => 'setComments',
        'grayscale' => 'setGrayscale',
        'opacity' => 'setOpacity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'comments' => 'getComments',
        'grayscale' => 'getGrayscale',
        'opacity' => 'getOpacity'
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

    const GRAYSCALE_ENABLE = 'enable';
    const GRAYSCALE_DISABLE = 'disable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGrayscaleAllowableValues()
    {
        return [
            self::GRAYSCALE_ENABLE,
            self::GRAYSCALE_DISABLE,
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
        $this->container['comments'] = $data['comments'] ?? null;
        $this->container['grayscale'] = $data['grayscale'] ?? null;
        $this->container['opacity'] = $data['opacity'] ?? null;
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

        if (!is_null($this->container['comments']) && (mb_strlen($this->container['comments']) > 1027)) {
            $invalidProperties[] = "invalid value for 'comments', the character length must be smaller than or equal to 1027.";
        }

        $allowedValues = $this->getGrayscaleAllowableValues();
        if (!is_null($this->container['grayscale']) && !in_array($this->container['grayscale'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'grayscale', must be one of '%s'",
                $this->container['grayscale'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['opacity']) && ($this->container['opacity'] > 100)) {
            $invalidProperties[] = "invalid value for 'opacity', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['opacity']) && ($this->container['opacity'] < 0)) {
            $invalidProperties[] = "invalid value for 'opacity', must be bigger than or equal to 0.";
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
     * @param string|null $name FortiAP region name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InlineObject600., must be smaller than or equal to 35.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments Comments.
     *
     * @return self
     */
    public function setComments($comments)
    {
        if (!is_null($comments) && (mb_strlen($comments) > 1027)) {
            throw new \InvalidArgumentException('invalid length for $comments when calling InlineObject600., must be smaller than or equal to 1027.');
        }

        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets grayscale
     *
     * @return string|null
     */
    public function getGrayscale()
    {
        return $this->container['grayscale'];
    }

    /**
     * Sets grayscale
     *
     * @param string|null $grayscale Region image grayscale.    enable:Enable region image grayscale.    disable:Disable region image grayscale.
     *
     * @return self
     */
    public function setGrayscale($grayscale)
    {
        $allowedValues = $this->getGrayscaleAllowableValues();
        if (!is_null($grayscale) && !in_array($grayscale, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'grayscale', must be one of '%s'",
                    $grayscale,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['grayscale'] = $grayscale;

        return $this;
    }

    /**
     * Gets opacity
     *
     * @return int|null
     */
    public function getOpacity()
    {
        return $this->container['opacity'];
    }

    /**
     * Sets opacity
     *
     * @param int|null $opacity Region image opacity (0 - 100).
     *
     * @return self
     */
    public function setOpacity($opacity)
    {

        if (!is_null($opacity) && ($opacity > 100)) {
            throw new \InvalidArgumentException('invalid value for $opacity when calling InlineObject600., must be smaller than or equal to 100.');
        }
        if (!is_null($opacity) && ($opacity < 0)) {
            throw new \InvalidArgumentException('invalid value for $opacity when calling InlineObject600., must be bigger than or equal to 0.');
        }

        $this->container['opacity'] = $opacity;

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


