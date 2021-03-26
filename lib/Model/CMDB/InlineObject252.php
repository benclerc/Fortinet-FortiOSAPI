<?php
/**
 * InlineObject252
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
 * InlineObject252 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject252 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_252';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'msg_type' => 'string',
        'buffer' => 'string',
        'header' => 'string',
        'format' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'msg_type' => null,
        'buffer' => null,
        'header' => null,
        'format' => null
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
        'msg_type' => 'msg-type',
        'buffer' => 'buffer',
        'header' => 'header',
        'format' => 'format'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'msg_type' => 'setMsgType',
        'buffer' => 'setBuffer',
        'header' => 'setHeader',
        'format' => 'setFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'msg_type' => 'getMsgType',
        'buffer' => 'getBuffer',
        'header' => 'getHeader',
        'format' => 'getFormat'
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

    const HEADER_NONE = 'none';
    const HEADER_HTTP = 'http';
    const HEADER__8BIT = '8bit';
    const FORMAT_NONE = 'none';
    const FORMAT_TEXT = 'text';
    const FORMAT_HTML = 'html';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHeaderAllowableValues()
    {
        return [
            self::HEADER_NONE,
            self::HEADER_HTTP,
            self::HEADER__8BIT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_NONE,
            self::FORMAT_TEXT,
            self::FORMAT_HTML,
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
        $this->container['msg_type'] = $data['msg_type'] ?? null;
        $this->container['buffer'] = $data['buffer'] ?? null;
        $this->container['header'] = $data['header'] ?? null;
        $this->container['format'] = $data['format'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['msg_type']) && (mb_strlen($this->container['msg_type']) > 28)) {
            $invalidProperties[] = "invalid value for 'msg_type', the character length must be smaller than or equal to 28.";
        }

        if (!is_null($this->container['buffer']) && (mb_strlen($this->container['buffer']) > 32768)) {
            $invalidProperties[] = "invalid value for 'buffer', the character length must be smaller than or equal to 32768.";
        }

        $allowedValues = $this->getHeaderAllowableValues();
        if (!is_null($this->container['header']) && !in_array($this->container['header'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'header', must be one of '%s'",
                $this->container['header'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'format', must be one of '%s'",
                $this->container['format'],
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
     * Gets msg_type
     *
     * @return string|null
     */
    public function getMsgType()
    {
        return $this->container['msg_type'];
    }

    /**
     * Sets msg_type
     *
     * @param string|null $msg_type Message type.
     *
     * @return self
     */
    public function setMsgType($msg_type)
    {
        if (!is_null($msg_type) && (mb_strlen($msg_type) > 28)) {
            throw new \InvalidArgumentException('invalid length for $msg_type when calling InlineObject252., must be smaller than or equal to 28.');
        }

        $this->container['msg_type'] = $msg_type;

        return $this;
    }

    /**
     * Gets buffer
     *
     * @return string|null
     */
    public function getBuffer()
    {
        return $this->container['buffer'];
    }

    /**
     * Sets buffer
     *
     * @param string|null $buffer Message string.
     *
     * @return self
     */
    public function setBuffer($buffer)
    {
        if (!is_null($buffer) && (mb_strlen($buffer) > 32768)) {
            throw new \InvalidArgumentException('invalid length for $buffer when calling InlineObject252., must be smaller than or equal to 32768.');
        }

        $this->container['buffer'] = $buffer;

        return $this;
    }

    /**
     * Gets header
     *
     * @return string|null
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     *
     * @param string|null $header Header flag.    none:No header type.    http:HTTP    8bit:8 bit.
     *
     * @return self
     */
    public function setHeader($header)
    {
        $allowedValues = $this->getHeaderAllowableValues();
        if (!is_null($header) && !in_array($header, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'header', must be one of '%s'",
                    $header,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['header'] = $header;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string|null $format Format flag.    none:No format type.    text:Text format.    html:HTML format.
     *
     * @return self
     */
    public function setFormat($format)
    {
        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($format) && !in_array($format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'format', must be one of '%s'",
                    $format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['format'] = $format;

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


