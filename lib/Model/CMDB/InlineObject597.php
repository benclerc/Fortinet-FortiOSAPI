<?php
/**
 * InlineObject597
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
 * InlineObject597 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject597 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_597';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'mpsk_concurrent_clients' => 'int',
        'mpsk_group' => '\Fortigate\FortiOS\Model\CMDB\WirelessControllerMpskProfileNameMpskGroup[]'
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
        'mpsk_concurrent_clients' => null,
        'mpsk_group' => null
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
        'mpsk_concurrent_clients' => 'mpsk-concurrent-clients',
        'mpsk_group' => 'mpsk-group'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'mpsk_concurrent_clients' => 'setMpskConcurrentClients',
        'mpsk_group' => 'setMpskGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'mpsk_concurrent_clients' => 'getMpskConcurrentClients',
        'mpsk_group' => 'getMpskGroup'
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
        $this->container['mpsk_concurrent_clients'] = $data['mpsk_concurrent_clients'] ?? null;
        $this->container['mpsk_group'] = $data['mpsk_group'] ?? null;
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

        if (!is_null($this->container['mpsk_concurrent_clients']) && ($this->container['mpsk_concurrent_clients'] > 65535)) {
            $invalidProperties[] = "invalid value for 'mpsk_concurrent_clients', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['mpsk_concurrent_clients']) && ($this->container['mpsk_concurrent_clients'] < 0)) {
            $invalidProperties[] = "invalid value for 'mpsk_concurrent_clients', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['mpsk_group']) && (count($this->container['mpsk_group']) > 0)) {
            $invalidProperties[] = "invalid value for 'mpsk_group', number of items must be less than or equal to 0.";
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
     * @param string|null $name MPSK profile name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InlineObject597., must be smaller than or equal to 35.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets mpsk_concurrent_clients
     *
     * @return int|null
     */
    public function getMpskConcurrentClients()
    {
        return $this->container['mpsk_concurrent_clients'];
    }

    /**
     * Sets mpsk_concurrent_clients
     *
     * @param int|null $mpsk_concurrent_clients Maximum number of concurrent clients that connect using the same passphrase in multiple PSK authentication (0 - 65535, default = 0, meaning no limitation).
     *
     * @return self
     */
    public function setMpskConcurrentClients($mpsk_concurrent_clients)
    {

        if (!is_null($mpsk_concurrent_clients) && ($mpsk_concurrent_clients > 65535)) {
            throw new \InvalidArgumentException('invalid value for $mpsk_concurrent_clients when calling InlineObject597., must be smaller than or equal to 65535.');
        }
        if (!is_null($mpsk_concurrent_clients) && ($mpsk_concurrent_clients < 0)) {
            throw new \InvalidArgumentException('invalid value for $mpsk_concurrent_clients when calling InlineObject597., must be bigger than or equal to 0.');
        }

        $this->container['mpsk_concurrent_clients'] = $mpsk_concurrent_clients;

        return $this;
    }

    /**
     * Gets mpsk_group
     *
     * @return \Fortigate\FortiOS\Model\CMDB\WirelessControllerMpskProfileNameMpskGroup[]|null
     */
    public function getMpskGroup()
    {
        return $this->container['mpsk_group'];
    }

    /**
     * Sets mpsk_group
     *
     * @param \Fortigate\FortiOS\Model\CMDB\WirelessControllerMpskProfileNameMpskGroup[]|null $mpsk_group List of multiple PSK groups.
     *
     * @return self
     */
    public function setMpskGroup($mpsk_group)
    {

        if (!is_null($mpsk_group) && (count($mpsk_group) > 0)) {
            throw new \InvalidArgumentException('invalid value for $mpsk_group when calling InlineObject597., number of items must be less than or equal to 0.');
        }
        $this->container['mpsk_group'] = $mpsk_group;

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


