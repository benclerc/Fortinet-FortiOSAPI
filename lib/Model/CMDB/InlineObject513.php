<?php
/**
 * InlineObject513
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
 * InlineObject513 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject513 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_513';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'transparent' => 'string',
        'comments' => 'string',
        'auth_group' => 'string',
        'http' => '\Fortigate\FortiOS\Model\CMDB\WanoptProfileNameHttp[]',
        'cifs' => '\Fortigate\FortiOS\Model\CMDB\WanoptProfileNameCifs[]',
        'mapi' => '\Fortigate\FortiOS\Model\CMDB\WanoptProfileNameMapi[]',
        'ftp' => '\Fortigate\FortiOS\Model\CMDB\WanoptProfileNameHttp[]',
        'tcp' => '\Fortigate\FortiOS\Model\CMDB\WanoptProfileNameTcp[]'
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
        'transparent' => null,
        'comments' => null,
        'auth_group' => null,
        'http' => null,
        'cifs' => null,
        'mapi' => null,
        'ftp' => null,
        'tcp' => null
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
        'transparent' => 'transparent',
        'comments' => 'comments',
        'auth_group' => 'auth-group',
        'http' => 'http',
        'cifs' => 'cifs',
        'mapi' => 'mapi',
        'ftp' => 'ftp',
        'tcp' => 'tcp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'transparent' => 'setTransparent',
        'comments' => 'setComments',
        'auth_group' => 'setAuthGroup',
        'http' => 'setHttp',
        'cifs' => 'setCifs',
        'mapi' => 'setMapi',
        'ftp' => 'setFtp',
        'tcp' => 'setTcp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'transparent' => 'getTransparent',
        'comments' => 'getComments',
        'auth_group' => 'getAuthGroup',
        'http' => 'getHttp',
        'cifs' => 'getCifs',
        'mapi' => 'getMapi',
        'ftp' => 'getFtp',
        'tcp' => 'getTcp'
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

    const TRANSPARENT_ENABLE = 'enable';
    const TRANSPARENT_DISABLE = 'disable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransparentAllowableValues()
    {
        return [
            self::TRANSPARENT_ENABLE,
            self::TRANSPARENT_DISABLE,
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
        $this->container['transparent'] = $data['transparent'] ?? null;
        $this->container['comments'] = $data['comments'] ?? null;
        $this->container['auth_group'] = $data['auth_group'] ?? null;
        $this->container['http'] = $data['http'] ?? null;
        $this->container['cifs'] = $data['cifs'] ?? null;
        $this->container['mapi'] = $data['mapi'] ?? null;
        $this->container['ftp'] = $data['ftp'] ?? null;
        $this->container['tcp'] = $data['tcp'] ?? null;
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

        $allowedValues = $this->getTransparentAllowableValues();
        if (!is_null($this->container['transparent']) && !in_array($this->container['transparent'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transparent', must be one of '%s'",
                $this->container['transparent'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['comments']) && (mb_strlen($this->container['comments']) > 255)) {
            $invalidProperties[] = "invalid value for 'comments', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['auth_group']) && (mb_strlen($this->container['auth_group']) > 35)) {
            $invalidProperties[] = "invalid value for 'auth_group', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['http']) && (count($this->container['http']) > 0)) {
            $invalidProperties[] = "invalid value for 'http', number of items must be less than or equal to 0.";
        }

        if (!is_null($this->container['cifs']) && (count($this->container['cifs']) > 0)) {
            $invalidProperties[] = "invalid value for 'cifs', number of items must be less than or equal to 0.";
        }

        if (!is_null($this->container['mapi']) && (count($this->container['mapi']) > 0)) {
            $invalidProperties[] = "invalid value for 'mapi', number of items must be less than or equal to 0.";
        }

        if (!is_null($this->container['ftp']) && (count($this->container['ftp']) > 0)) {
            $invalidProperties[] = "invalid value for 'ftp', number of items must be less than or equal to 0.";
        }

        if (!is_null($this->container['tcp']) && (count($this->container['tcp']) > 0)) {
            $invalidProperties[] = "invalid value for 'tcp', number of items must be less than or equal to 0.";
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
     * @param string|null $name Profile name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InlineObject513., must be smaller than or equal to 35.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets transparent
     *
     * @return string|null
     */
    public function getTransparent()
    {
        return $this->container['transparent'];
    }

    /**
     * Sets transparent
     *
     * @param string|null $transparent Enable/disable transparent mode.    enable:Determine if WAN Optimization changes client packet source addresses. Affects the routing configuration on the server network.    disable:Disable transparent mode. Client packets source addresses are changed to the source address of the FortiGate internal interface. Similar to source NAT.
     *
     * @return self
     */
    public function setTransparent($transparent)
    {
        $allowedValues = $this->getTransparentAllowableValues();
        if (!is_null($transparent) && !in_array($transparent, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transparent', must be one of '%s'",
                    $transparent,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transparent'] = $transparent;

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
     * @param string|null $comments Comment.
     *
     * @return self
     */
    public function setComments($comments)
    {
        if (!is_null($comments) && (mb_strlen($comments) > 255)) {
            throw new \InvalidArgumentException('invalid length for $comments when calling InlineObject513., must be smaller than or equal to 255.');
        }

        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets auth_group
     *
     * @return string|null
     */
    public function getAuthGroup()
    {
        return $this->container['auth_group'];
    }

    /**
     * Sets auth_group
     *
     * @param string|null $auth_group Optionally add an authentication group to restrict access to the WAN Optimization tunnel to peers in the authentication group.
     *
     * @return self
     */
    public function setAuthGroup($auth_group)
    {
        if (!is_null($auth_group) && (mb_strlen($auth_group) > 35)) {
            throw new \InvalidArgumentException('invalid length for $auth_group when calling InlineObject513., must be smaller than or equal to 35.');
        }

        $this->container['auth_group'] = $auth_group;

        return $this;
    }

    /**
     * Gets http
     *
     * @return \Fortigate\FortiOS\Model\CMDB\WanoptProfileNameHttp[]|null
     */
    public function getHttp()
    {
        return $this->container['http'];
    }

    /**
     * Sets http
     *
     * @param \Fortigate\FortiOS\Model\CMDB\WanoptProfileNameHttp[]|null $http Enable/disable HTTP WAN Optimization and configure HTTP WAN Optimization features.
     *
     * @return self
     */
    public function setHttp($http)
    {

        if (!is_null($http) && (count($http) > 0)) {
            throw new \InvalidArgumentException('invalid value for $http when calling InlineObject513., number of items must be less than or equal to 0.');
        }
        $this->container['http'] = $http;

        return $this;
    }

    /**
     * Gets cifs
     *
     * @return \Fortigate\FortiOS\Model\CMDB\WanoptProfileNameCifs[]|null
     */
    public function getCifs()
    {
        return $this->container['cifs'];
    }

    /**
     * Sets cifs
     *
     * @param \Fortigate\FortiOS\Model\CMDB\WanoptProfileNameCifs[]|null $cifs Enable/disable CIFS (Windows sharing) WAN Optimization and configure CIFS WAN Optimization features.
     *
     * @return self
     */
    public function setCifs($cifs)
    {

        if (!is_null($cifs) && (count($cifs) > 0)) {
            throw new \InvalidArgumentException('invalid value for $cifs when calling InlineObject513., number of items must be less than or equal to 0.');
        }
        $this->container['cifs'] = $cifs;

        return $this;
    }

    /**
     * Gets mapi
     *
     * @return \Fortigate\FortiOS\Model\CMDB\WanoptProfileNameMapi[]|null
     */
    public function getMapi()
    {
        return $this->container['mapi'];
    }

    /**
     * Sets mapi
     *
     * @param \Fortigate\FortiOS\Model\CMDB\WanoptProfileNameMapi[]|null $mapi Enable/disable MAPI email WAN Optimization and configure MAPI WAN Optimization features.
     *
     * @return self
     */
    public function setMapi($mapi)
    {

        if (!is_null($mapi) && (count($mapi) > 0)) {
            throw new \InvalidArgumentException('invalid value for $mapi when calling InlineObject513., number of items must be less than or equal to 0.');
        }
        $this->container['mapi'] = $mapi;

        return $this;
    }

    /**
     * Gets ftp
     *
     * @return \Fortigate\FortiOS\Model\CMDB\WanoptProfileNameHttp[]|null
     */
    public function getFtp()
    {
        return $this->container['ftp'];
    }

    /**
     * Sets ftp
     *
     * @param \Fortigate\FortiOS\Model\CMDB\WanoptProfileNameHttp[]|null $ftp Enable/disable FTP WAN Optimization and configure FTP WAN Optimization features.
     *
     * @return self
     */
    public function setFtp($ftp)
    {

        if (!is_null($ftp) && (count($ftp) > 0)) {
            throw new \InvalidArgumentException('invalid value for $ftp when calling InlineObject513., number of items must be less than or equal to 0.');
        }
        $this->container['ftp'] = $ftp;

        return $this;
    }

    /**
     * Gets tcp
     *
     * @return \Fortigate\FortiOS\Model\CMDB\WanoptProfileNameTcp[]|null
     */
    public function getTcp()
    {
        return $this->container['tcp'];
    }

    /**
     * Sets tcp
     *
     * @param \Fortigate\FortiOS\Model\CMDB\WanoptProfileNameTcp[]|null $tcp Enable/disable TCP WAN Optimization and configure TCP WAN Optimization features.
     *
     * @return self
     */
    public function setTcp($tcp)
    {

        if (!is_null($tcp) && (count($tcp) > 0)) {
            throw new \InvalidArgumentException('invalid value for $tcp when calling InlineObject513., number of items must be less than or equal to 0.');
        }
        $this->container['tcp'] = $tcp;

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


