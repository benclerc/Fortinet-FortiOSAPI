<?php
/**
 * InlineObject198
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
 * InlineObject198 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject198 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_198';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'address_civic' => '\Fortigate\FortiOS\Model\CMDB\SwitchControllerLocationNameAddressCivic[]',
        'coordinates' => '\Fortigate\FortiOS\Model\CMDB\SwitchControllerLocationNameCoordinates[]',
        'elin_number' => '\Fortigate\FortiOS\Model\CMDB\SwitchControllerLocationNameElinNumber[]'
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
        'address_civic' => null,
        'coordinates' => null,
        'elin_number' => null
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
        'address_civic' => 'address-civic',
        'coordinates' => 'coordinates',
        'elin_number' => 'elin-number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'address_civic' => 'setAddressCivic',
        'coordinates' => 'setCoordinates',
        'elin_number' => 'setElinNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'address_civic' => 'getAddressCivic',
        'coordinates' => 'getCoordinates',
        'elin_number' => 'getElinNumber'
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
        $this->container['address_civic'] = $data['address_civic'] ?? null;
        $this->container['coordinates'] = $data['coordinates'] ?? null;
        $this->container['elin_number'] = $data['elin_number'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 63)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 63.";
        }

        if (!is_null($this->container['address_civic']) && (count($this->container['address_civic']) > 0)) {
            $invalidProperties[] = "invalid value for 'address_civic', number of items must be less than or equal to 0.";
        }

        if (!is_null($this->container['coordinates']) && (count($this->container['coordinates']) > 0)) {
            $invalidProperties[] = "invalid value for 'coordinates', number of items must be less than or equal to 0.";
        }

        if (!is_null($this->container['elin_number']) && (count($this->container['elin_number']) > 0)) {
            $invalidProperties[] = "invalid value for 'elin_number', number of items must be less than or equal to 0.";
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
     * @param string|null $name Unique location item name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 63)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InlineObject198., must be smaller than or equal to 63.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address_civic
     *
     * @return \Fortigate\FortiOS\Model\CMDB\SwitchControllerLocationNameAddressCivic[]|null
     */
    public function getAddressCivic()
    {
        return $this->container['address_civic'];
    }

    /**
     * Sets address_civic
     *
     * @param \Fortigate\FortiOS\Model\CMDB\SwitchControllerLocationNameAddressCivic[]|null $address_civic Configure location civic address.
     *
     * @return self
     */
    public function setAddressCivic($address_civic)
    {

        if (!is_null($address_civic) && (count($address_civic) > 0)) {
            throw new \InvalidArgumentException('invalid value for $address_civic when calling InlineObject198., number of items must be less than or equal to 0.');
        }
        $this->container['address_civic'] = $address_civic;

        return $this;
    }

    /**
     * Gets coordinates
     *
     * @return \Fortigate\FortiOS\Model\CMDB\SwitchControllerLocationNameCoordinates[]|null
     */
    public function getCoordinates()
    {
        return $this->container['coordinates'];
    }

    /**
     * Sets coordinates
     *
     * @param \Fortigate\FortiOS\Model\CMDB\SwitchControllerLocationNameCoordinates[]|null $coordinates Configure location GPS coordinates.
     *
     * @return self
     */
    public function setCoordinates($coordinates)
    {

        if (!is_null($coordinates) && (count($coordinates) > 0)) {
            throw new \InvalidArgumentException('invalid value for $coordinates when calling InlineObject198., number of items must be less than or equal to 0.');
        }
        $this->container['coordinates'] = $coordinates;

        return $this;
    }

    /**
     * Gets elin_number
     *
     * @return \Fortigate\FortiOS\Model\CMDB\SwitchControllerLocationNameElinNumber[]|null
     */
    public function getElinNumber()
    {
        return $this->container['elin_number'];
    }

    /**
     * Sets elin_number
     *
     * @param \Fortigate\FortiOS\Model\CMDB\SwitchControllerLocationNameElinNumber[]|null $elin_number Configure location ELIN number.
     *
     * @return self
     */
    public function setElinNumber($elin_number)
    {

        if (!is_null($elin_number) && (count($elin_number) > 0)) {
            throw new \InvalidArgumentException('invalid value for $elin_number when calling InlineObject198., number of items must be less than or equal to 0.');
        }
        $this->container['elin_number'] = $elin_number;

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


