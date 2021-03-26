<?php
/**
 * WirelessControllerHotspot20H2qpOsuProviderNameServiceDescription
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
 * WirelessControllerHotspot20H2qpOsuProviderNameServiceDescription Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class WirelessControllerHotspot20H2qpOsuProviderNameServiceDescription implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_wireless_controller_hotspot20_h2qp_osu_provider__name__service_description';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'service_id' => 'int',
        'lang' => 'string',
        'service_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'service_id' => null,
        'lang' => null,
        'service_description' => null
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
        'service_id' => 'service-id',
        'lang' => 'lang',
        'service_description' => 'service-description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'service_id' => 'setServiceId',
        'lang' => 'setLang',
        'service_description' => 'setServiceDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'service_id' => 'getServiceId',
        'lang' => 'getLang',
        'service_description' => 'getServiceDescription'
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
        $this->container['service_id'] = $data['service_id'] ?? null;
        $this->container['lang'] = $data['lang'] ?? null;
        $this->container['service_description'] = $data['service_description'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['service_id']) && ($this->container['service_id'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'service_id', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['service_id']) && ($this->container['service_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'service_id', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['lang']) && (mb_strlen($this->container['lang']) > 3)) {
            $invalidProperties[] = "invalid value for 'lang', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['service_description']) && (mb_strlen($this->container['service_description']) > 252)) {
            $invalidProperties[] = "invalid value for 'service_description', the character length must be smaller than or equal to 252.";
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
     * Gets service_id
     *
     * @return int|null
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param int|null $service_id OSU service ID.
     *
     * @return self
     */
    public function setServiceId($service_id)
    {

        if (!is_null($service_id) && ($service_id > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $service_id when calling WirelessControllerHotspot20H2qpOsuProviderNameServiceDescription., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($service_id) && ($service_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $service_id when calling WirelessControllerHotspot20H2qpOsuProviderNameServiceDescription., must be bigger than or equal to 0.');
        }

        $this->container['service_id'] = $service_id;

        return $this;
    }

    /**
     * Gets lang
     *
     * @return string|null
     */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
     * Sets lang
     *
     * @param string|null $lang Language code.
     *
     * @return self
     */
    public function setLang($lang)
    {
        if (!is_null($lang) && (mb_strlen($lang) > 3)) {
            throw new \InvalidArgumentException('invalid length for $lang when calling WirelessControllerHotspot20H2qpOsuProviderNameServiceDescription., must be smaller than or equal to 3.');
        }

        $this->container['lang'] = $lang;

        return $this;
    }

    /**
     * Gets service_description
     *
     * @return string|null
     */
    public function getServiceDescription()
    {
        return $this->container['service_description'];
    }

    /**
     * Sets service_description
     *
     * @param string|null $service_description Service description.
     *
     * @return self
     */
    public function setServiceDescription($service_description)
    {
        if (!is_null($service_description) && (mb_strlen($service_description) > 252)) {
            throw new \InvalidArgumentException('invalid length for $service_description when calling WirelessControllerHotspot20H2qpOsuProviderNameServiceDescription., must be smaller than or equal to 252.');
        }

        $this->container['service_description'] = $service_description;

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


