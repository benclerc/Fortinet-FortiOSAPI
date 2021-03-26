<?php
/**
 * InlineObject208
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
 * InlineObject208 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject208 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_208';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'description' => 'string',
        'fortilink' => 'string',
        'lldp_profile' => 'string',
        'qos_policy' => 'string',
        '_802_1x' => 'string',
        'vlan_policy' => 'string',
        'bounce_port_link' => 'string'
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
        'lldp_profile' => null,
        'qos_policy' => null,
        '_802_1x' => null,
        'vlan_policy' => null,
        'bounce_port_link' => null
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
        'lldp_profile' => 'lldp-profile',
        'qos_policy' => 'qos-policy',
        '_802_1x' => '802-1x',
        'vlan_policy' => 'vlan-policy',
        'bounce_port_link' => 'bounce-port-link'
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
        'lldp_profile' => 'setLldpProfile',
        'qos_policy' => 'setQosPolicy',
        '_802_1x' => 'set8021x',
        'vlan_policy' => 'setVlanPolicy',
        'bounce_port_link' => 'setBouncePortLink'
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
        'lldp_profile' => 'getLldpProfile',
        'qos_policy' => 'getQosPolicy',
        '_802_1x' => 'get8021x',
        'vlan_policy' => 'getVlanPolicy',
        'bounce_port_link' => 'getBouncePortLink'
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

    const BOUNCE_PORT_LINK_DISABLE = 'disable';
    const BOUNCE_PORT_LINK_ENABLE = 'enable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBouncePortLinkAllowableValues()
    {
        return [
            self::BOUNCE_PORT_LINK_DISABLE,
            self::BOUNCE_PORT_LINK_ENABLE,
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
        $this->container['lldp_profile'] = $data['lldp_profile'] ?? null;
        $this->container['qos_policy'] = $data['qos_policy'] ?? null;
        $this->container['_802_1x'] = $data['_802_1x'] ?? null;
        $this->container['vlan_policy'] = $data['vlan_policy'] ?? null;
        $this->container['bounce_port_link'] = $data['bounce_port_link'] ?? null;
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

        if (!is_null($this->container['lldp_profile']) && (mb_strlen($this->container['lldp_profile']) > 63)) {
            $invalidProperties[] = "invalid value for 'lldp_profile', the character length must be smaller than or equal to 63.";
        }

        if (!is_null($this->container['qos_policy']) && (mb_strlen($this->container['qos_policy']) > 63)) {
            $invalidProperties[] = "invalid value for 'qos_policy', the character length must be smaller than or equal to 63.";
        }

        if (!is_null($this->container['_802_1x']) && (mb_strlen($this->container['_802_1x']) > 31)) {
            $invalidProperties[] = "invalid value for '_802_1x', the character length must be smaller than or equal to 31.";
        }

        if (!is_null($this->container['vlan_policy']) && (mb_strlen($this->container['vlan_policy']) > 63)) {
            $invalidProperties[] = "invalid value for 'vlan_policy', the character length must be smaller than or equal to 63.";
        }

        $allowedValues = $this->getBouncePortLinkAllowableValues();
        if (!is_null($this->container['bounce_port_link']) && !in_array($this->container['bounce_port_link'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'bounce_port_link', must be one of '%s'",
                $this->container['bounce_port_link'],
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
     * @param string|null $name Port policy name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 63)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InlineObject208., must be smaller than or equal to 63.');
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
     * @param string|null $description Description for the port policy.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 63)) {
            throw new \InvalidArgumentException('invalid length for $description when calling InlineObject208., must be smaller than or equal to 63.');
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
     * @param string|null $fortilink FortiLink interface for which this port policy belongs to.
     *
     * @return self
     */
    public function setFortilink($fortilink)
    {
        if (!is_null($fortilink) && (mb_strlen($fortilink) > 15)) {
            throw new \InvalidArgumentException('invalid length for $fortilink when calling InlineObject208., must be smaller than or equal to 15.');
        }

        $this->container['fortilink'] = $fortilink;

        return $this;
    }

    /**
     * Gets lldp_profile
     *
     * @return string|null
     */
    public function getLldpProfile()
    {
        return $this->container['lldp_profile'];
    }

    /**
     * Sets lldp_profile
     *
     * @param string|null $lldp_profile LLDP profile to be applied when using this port-policy.
     *
     * @return self
     */
    public function setLldpProfile($lldp_profile)
    {
        if (!is_null($lldp_profile) && (mb_strlen($lldp_profile) > 63)) {
            throw new \InvalidArgumentException('invalid length for $lldp_profile when calling InlineObject208., must be smaller than or equal to 63.');
        }

        $this->container['lldp_profile'] = $lldp_profile;

        return $this;
    }

    /**
     * Gets qos_policy
     *
     * @return string|null
     */
    public function getQosPolicy()
    {
        return $this->container['qos_policy'];
    }

    /**
     * Sets qos_policy
     *
     * @param string|null $qos_policy QoS policy to be applied when using this port-policy.
     *
     * @return self
     */
    public function setQosPolicy($qos_policy)
    {
        if (!is_null($qos_policy) && (mb_strlen($qos_policy) > 63)) {
            throw new \InvalidArgumentException('invalid length for $qos_policy when calling InlineObject208., must be smaller than or equal to 63.');
        }

        $this->container['qos_policy'] = $qos_policy;

        return $this;
    }

    /**
     * Gets _802_1x
     *
     * @return string|null
     */
    public function get8021x()
    {
        return $this->container['_802_1x'];
    }

    /**
     * Sets _802_1x
     *
     * @param string|null $_802_1x 802.1x security policy to be applied when using this port-policy.
     *
     * @return self
     */
    public function set8021x($_802_1x)
    {
        if (!is_null($_802_1x) && (mb_strlen($_802_1x) > 31)) {
            throw new \InvalidArgumentException('invalid length for $_802_1x when calling InlineObject208., must be smaller than or equal to 31.');
        }

        $this->container['_802_1x'] = $_802_1x;

        return $this;
    }

    /**
     * Gets vlan_policy
     *
     * @return string|null
     */
    public function getVlanPolicy()
    {
        return $this->container['vlan_policy'];
    }

    /**
     * Sets vlan_policy
     *
     * @param string|null $vlan_policy VLAN policy to be applied when using this port-policy.
     *
     * @return self
     */
    public function setVlanPolicy($vlan_policy)
    {
        if (!is_null($vlan_policy) && (mb_strlen($vlan_policy) > 63)) {
            throw new \InvalidArgumentException('invalid length for $vlan_policy when calling InlineObject208., must be smaller than or equal to 63.');
        }

        $this->container['vlan_policy'] = $vlan_policy;

        return $this;
    }

    /**
     * Gets bounce_port_link
     *
     * @return string|null
     */
    public function getBouncePortLink()
    {
        return $this->container['bounce_port_link'];
    }

    /**
     * Sets bounce_port_link
     *
     * @param string|null $bounce_port_link Enable/disable bouncing (administratively bring the link down, up) of a switch port where this port policy is applied. Helps to clear and reassign VLAN from lldp-profile.    disable:Disable bouncing (administratively bring the link down, up) of a switch port where this port policy is applied.    enable:Enable bouncing (administratively bring the link down, up) of a switch port where this port policy is applied.
     *
     * @return self
     */
    public function setBouncePortLink($bounce_port_link)
    {
        $allowedValues = $this->getBouncePortLinkAllowableValues();
        if (!is_null($bounce_port_link) && !in_array($bounce_port_link, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'bounce_port_link', must be one of '%s'",
                    $bounce_port_link,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['bounce_port_link'] = $bounce_port_link;

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


