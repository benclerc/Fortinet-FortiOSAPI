<?php
/**
 * InlineObject201
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
 * InlineObject201 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject201 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_201';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'description' => 'string',
        'fortilink' => 'string',
        'vlan' => 'string',
        'traffic_policy' => 'string',
        'count' => 'string'
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
        'description' => null,
        'fortilink' => null,
        'vlan' => null,
        'traffic_policy' => null,
        'count' => null
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
        'description' => 'description',
        'fortilink' => 'fortilink',
        'vlan' => 'vlan',
        'traffic_policy' => 'traffic-policy',
        'count' => 'count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'fortilink' => 'setFortilink',
        'vlan' => 'setVlan',
        'traffic_policy' => 'setTrafficPolicy',
        'count' => 'setCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'fortilink' => 'getFortilink',
        'vlan' => 'getVlan',
        'traffic_policy' => 'getTrafficPolicy',
        'count' => 'getCount'
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

    const COUNT_DISABLE = 'disable';
    const COUNT_ENABLE = 'enable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCountAllowableValues()
    {
        return [
            self::COUNT_DISABLE,
            self::COUNT_ENABLE,
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
        $this->container['description'] = $data['description'] ?? null;
        $this->container['fortilink'] = $data['fortilink'] ?? null;
        $this->container['vlan'] = $data['vlan'] ?? null;
        $this->container['traffic_policy'] = $data['traffic_policy'] ?? null;
        $this->container['count'] = $data['count'] ?? null;
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

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 63)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 63.";
        }

        if (!is_null($this->container['fortilink']) && (mb_strlen($this->container['fortilink']) > 15)) {
            $invalidProperties[] = "invalid value for 'fortilink', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['vlan']) && (mb_strlen($this->container['vlan']) > 15)) {
            $invalidProperties[] = "invalid value for 'vlan', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['traffic_policy']) && (mb_strlen($this->container['traffic_policy']) > 63)) {
            $invalidProperties[] = "invalid value for 'traffic_policy', the character length must be smaller than or equal to 63.";
        }

        $allowedValues = $this->getCountAllowableValues();
        if (!is_null($this->container['count']) && !in_array($this->container['count'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'count', must be one of '%s'",
                $this->container['count'],
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
     * @param string|null $name MAC policy name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 63)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InlineObject201., must be smaller than or equal to 63.');
        }

        $this->container['name'] = $name;

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
     * @param string|null $description Description for the MAC policy.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 63)) {
            throw new \InvalidArgumentException('invalid length for $description when calling InlineObject201., must be smaller than or equal to 63.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets fortilink
     *
     * @return string|null
     */
    public function getFortilink()
    {
        return $this->container['fortilink'];
    }

    /**
     * Sets fortilink
     *
     * @param string|null $fortilink FortiLink interface for which this MAC policy belongs to.
     *
     * @return self
     */
    public function setFortilink($fortilink)
    {
        if (!is_null($fortilink) && (mb_strlen($fortilink) > 15)) {
            throw new \InvalidArgumentException('invalid length for $fortilink when calling InlineObject201., must be smaller than or equal to 15.');
        }

        $this->container['fortilink'] = $fortilink;

        return $this;
    }

    /**
     * Gets vlan
     *
     * @return string|null
     */
    public function getVlan()
    {
        return $this->container['vlan'];
    }

    /**
     * Sets vlan
     *
     * @param string|null $vlan Ingress traffic VLAN assignment for the MAC address matching this MAC policy.
     *
     * @return self
     */
    public function setVlan($vlan)
    {
        if (!is_null($vlan) && (mb_strlen($vlan) > 15)) {
            throw new \InvalidArgumentException('invalid length for $vlan when calling InlineObject201., must be smaller than or equal to 15.');
        }

        $this->container['vlan'] = $vlan;

        return $this;
    }

    /**
     * Gets traffic_policy
     *
     * @return string|null
     */
    public function getTrafficPolicy()
    {
        return $this->container['traffic_policy'];
    }

    /**
     * Sets traffic_policy
     *
     * @param string|null $traffic_policy Traffic policy to be applied when using this MAC policy.
     *
     * @return self
     */
    public function setTrafficPolicy($traffic_policy)
    {
        if (!is_null($traffic_policy) && (mb_strlen($traffic_policy) > 63)) {
            throw new \InvalidArgumentException('invalid length for $traffic_policy when calling InlineObject201., must be smaller than or equal to 63.');
        }

        $this->container['traffic_policy'] = $traffic_policy;

        return $this;
    }

    /**
     * Gets count
     *
     * @return string|null
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param string|null $count Enable/Disable packet count on the NAC device.    disable:Enable packet count on the NAC device.    enable:Disable packet count on the NAC device.
     *
     * @return self
     */
    public function setCount($count)
    {
        $allowedValues = $this->getCountAllowableValues();
        if (!is_null($count) && !in_array($count, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'count', must be one of '%s'",
                    $count,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['count'] = $count;

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


