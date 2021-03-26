<?php
/**
 * InlineObject414
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
 * InlineObject414 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject414 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_414';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'tagging' => '\Fortigate\FortiOS\Model\CMDB\SystemInterfaceNameTagging[]',
        'description' => 'string',
        'intrazone' => 'string',
        'interface' => '\Fortigate\FortiOS\Model\CMDB\SystemZoneNameInterface[]'
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
        'tagging' => null,
        'description' => null,
        'intrazone' => null,
        'interface' => null
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
        'tagging' => 'tagging',
        'description' => 'description',
        'intrazone' => 'intrazone',
        'interface' => 'interface'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'tagging' => 'setTagging',
        'description' => 'setDescription',
        'intrazone' => 'setIntrazone',
        'interface' => 'setInterface'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'tagging' => 'getTagging',
        'description' => 'getDescription',
        'intrazone' => 'getIntrazone',
        'interface' => 'getInterface'
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

    const INTRAZONE_ALLOW = 'allow';
    const INTRAZONE_DENY = 'deny';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIntrazoneAllowableValues()
    {
        return [
            self::INTRAZONE_ALLOW,
            self::INTRAZONE_DENY,
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
        $this->container['tagging'] = $data['tagging'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['intrazone'] = $data['intrazone'] ?? null;
        $this->container['interface'] = $data['interface'] ?? null;
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

        if (!is_null($this->container['tagging']) && (count($this->container['tagging']) > 0)) {
            $invalidProperties[] = "invalid value for 'tagging', number of items must be less than or equal to 0.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 127)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 127.";
        }

        $allowedValues = $this->getIntrazoneAllowableValues();
        if (!is_null($this->container['intrazone']) && !in_array($this->container['intrazone'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'intrazone', must be one of '%s'",
                $this->container['intrazone'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['interface']) && (count($this->container['interface']) > 0)) {
            $invalidProperties[] = "invalid value for 'interface', number of items must be less than or equal to 0.";
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
     * @param string|null $name Zone name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InlineObject414., must be smaller than or equal to 35.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets tagging
     *
     * @return \Fortigate\FortiOS\Model\CMDB\SystemInterfaceNameTagging[]|null
     */
    public function getTagging()
    {
        return $this->container['tagging'];
    }

    /**
     * Sets tagging
     *
     * @param \Fortigate\FortiOS\Model\CMDB\SystemInterfaceNameTagging[]|null $tagging Config object tagging.
     *
     * @return self
     */
    public function setTagging($tagging)
    {

        if (!is_null($tagging) && (count($tagging) > 0)) {
            throw new \InvalidArgumentException('invalid value for $tagging when calling InlineObject414., number of items must be less than or equal to 0.');
        }
        $this->container['tagging'] = $tagging;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 127)) {
            throw new \InvalidArgumentException('invalid length for $description when calling InlineObject414., must be smaller than or equal to 127.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets intrazone
     *
     * @return string|null
     */
    public function getIntrazone()
    {
        return $this->container['intrazone'];
    }

    /**
     * Sets intrazone
     *
     * @param string|null $intrazone Allow or deny traffic routing between different interfaces in the same zone (default = deny).    allow:Allow traffic between interfaces in the zone.    deny:Deny traffic between interfaces in the zone.
     *
     * @return self
     */
    public function setIntrazone($intrazone)
    {
        $allowedValues = $this->getIntrazoneAllowableValues();
        if (!is_null($intrazone) && !in_array($intrazone, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'intrazone', must be one of '%s'",
                    $intrazone,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['intrazone'] = $intrazone;

        return $this;
    }

    /**
     * Gets interface
     *
     * @return \Fortigate\FortiOS\Model\CMDB\SystemZoneNameInterface[]|null
     */
    public function getInterface()
    {
        return $this->container['interface'];
    }

    /**
     * Sets interface
     *
     * @param \Fortigate\FortiOS\Model\CMDB\SystemZoneNameInterface[]|null $interface Add interfaces to this zone. Interfaces must not be assigned to another zone or have firewall policies defined.
     *
     * @return self
     */
    public function setInterface($interface)
    {

        if (!is_null($interface) && (count($interface) > 0)) {
            throw new \InvalidArgumentException('invalid value for $interface when calling InlineObject414., number of items must be less than or equal to 0.');
        }
        $this->container['interface'] = $interface;

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


