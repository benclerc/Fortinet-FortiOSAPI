<?php
/**
 * InlineObject82
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
 * InlineObject82 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject82 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_82';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'packet_log_history' => 'int',
        'packet_log_post_attack' => 'int',
        'packet_log_memory' => 'int',
        'ips_packet_quota' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'packet_log_history' => null,
        'packet_log_post_attack' => null,
        'packet_log_memory' => null,
        'ips_packet_quota' => null
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
        'packet_log_history' => 'packet-log-history',
        'packet_log_post_attack' => 'packet-log-post-attack',
        'packet_log_memory' => 'packet-log-memory',
        'ips_packet_quota' => 'ips-packet-quota'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'packet_log_history' => 'setPacketLogHistory',
        'packet_log_post_attack' => 'setPacketLogPostAttack',
        'packet_log_memory' => 'setPacketLogMemory',
        'ips_packet_quota' => 'setIpsPacketQuota'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'packet_log_history' => 'getPacketLogHistory',
        'packet_log_post_attack' => 'getPacketLogPostAttack',
        'packet_log_memory' => 'getPacketLogMemory',
        'ips_packet_quota' => 'getIpsPacketQuota'
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
        $this->container['packet_log_history'] = $data['packet_log_history'] ?? null;
        $this->container['packet_log_post_attack'] = $data['packet_log_post_attack'] ?? null;
        $this->container['packet_log_memory'] = $data['packet_log_memory'] ?? null;
        $this->container['ips_packet_quota'] = $data['ips_packet_quota'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['packet_log_history']) && ($this->container['packet_log_history'] > 255)) {
            $invalidProperties[] = "invalid value for 'packet_log_history', must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['packet_log_history']) && ($this->container['packet_log_history'] < 1)) {
            $invalidProperties[] = "invalid value for 'packet_log_history', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['packet_log_post_attack']) && ($this->container['packet_log_post_attack'] > 255)) {
            $invalidProperties[] = "invalid value for 'packet_log_post_attack', must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['packet_log_post_attack']) && ($this->container['packet_log_post_attack'] < 0)) {
            $invalidProperties[] = "invalid value for 'packet_log_post_attack', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['packet_log_memory']) && ($this->container['packet_log_memory'] > 8192)) {
            $invalidProperties[] = "invalid value for 'packet_log_memory', must be smaller than or equal to 8192.";
        }

        if (!is_null($this->container['packet_log_memory']) && ($this->container['packet_log_memory'] < 64)) {
            $invalidProperties[] = "invalid value for 'packet_log_memory', must be bigger than or equal to 64.";
        }

        if (!is_null($this->container['ips_packet_quota']) && ($this->container['ips_packet_quota'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'ips_packet_quota', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['ips_packet_quota']) && ($this->container['ips_packet_quota'] < 0)) {
            $invalidProperties[] = "invalid value for 'ips_packet_quota', must be bigger than or equal to 0.";
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
     * Gets packet_log_history
     *
     * @return int|null
     */
    public function getPacketLogHistory()
    {
        return $this->container['packet_log_history'];
    }

    /**
     * Sets packet_log_history
     *
     * @param int|null $packet_log_history Number of packets to capture before and including the one in which the IPS signature is detected (1 - 255).
     *
     * @return self
     */
    public function setPacketLogHistory($packet_log_history)
    {

        if (!is_null($packet_log_history) && ($packet_log_history > 255)) {
            throw new \InvalidArgumentException('invalid value for $packet_log_history when calling InlineObject82., must be smaller than or equal to 255.');
        }
        if (!is_null($packet_log_history) && ($packet_log_history < 1)) {
            throw new \InvalidArgumentException('invalid value for $packet_log_history when calling InlineObject82., must be bigger than or equal to 1.');
        }

        $this->container['packet_log_history'] = $packet_log_history;

        return $this;
    }

    /**
     * Gets packet_log_post_attack
     *
     * @return int|null
     */
    public function getPacketLogPostAttack()
    {
        return $this->container['packet_log_post_attack'];
    }

    /**
     * Sets packet_log_post_attack
     *
     * @param int|null $packet_log_post_attack Number of packets to log after the IPS signature is detected (0 - 255).
     *
     * @return self
     */
    public function setPacketLogPostAttack($packet_log_post_attack)
    {

        if (!is_null($packet_log_post_attack) && ($packet_log_post_attack > 255)) {
            throw new \InvalidArgumentException('invalid value for $packet_log_post_attack when calling InlineObject82., must be smaller than or equal to 255.');
        }
        if (!is_null($packet_log_post_attack) && ($packet_log_post_attack < 0)) {
            throw new \InvalidArgumentException('invalid value for $packet_log_post_attack when calling InlineObject82., must be bigger than or equal to 0.');
        }

        $this->container['packet_log_post_attack'] = $packet_log_post_attack;

        return $this;
    }

    /**
     * Gets packet_log_memory
     *
     * @return int|null
     */
    public function getPacketLogMemory()
    {
        return $this->container['packet_log_memory'];
    }

    /**
     * Sets packet_log_memory
     *
     * @param int|null $packet_log_memory Maximum memory can be used by packet log (64 - 8192 kB).
     *
     * @return self
     */
    public function setPacketLogMemory($packet_log_memory)
    {

        if (!is_null($packet_log_memory) && ($packet_log_memory > 8192)) {
            throw new \InvalidArgumentException('invalid value for $packet_log_memory when calling InlineObject82., must be smaller than or equal to 8192.');
        }
        if (!is_null($packet_log_memory) && ($packet_log_memory < 64)) {
            throw new \InvalidArgumentException('invalid value for $packet_log_memory when calling InlineObject82., must be bigger than or equal to 64.');
        }

        $this->container['packet_log_memory'] = $packet_log_memory;

        return $this;
    }

    /**
     * Gets ips_packet_quota
     *
     * @return int|null
     */
    public function getIpsPacketQuota()
    {
        return $this->container['ips_packet_quota'];
    }

    /**
     * Sets ips_packet_quota
     *
     * @param int|null $ips_packet_quota Maximum amount of disk space in MB for logged packets when logging to disk. Range depends on disk size.
     *
     * @return self
     */
    public function setIpsPacketQuota($ips_packet_quota)
    {

        if (!is_null($ips_packet_quota) && ($ips_packet_quota > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $ips_packet_quota when calling InlineObject82., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($ips_packet_quota) && ($ips_packet_quota < 0)) {
            throw new \InvalidArgumentException('invalid value for $ips_packet_quota when calling InlineObject82., must be bigger than or equal to 0.');
        }

        $this->container['ips_packet_quota'] = $ips_packet_quota;

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


