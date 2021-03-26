<?php
/**
 * InlineObject530
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
 * InlineObject530 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject530 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_530';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'comment' => 'string',
        'outgoing_ip' => 'string',
        'server_ip' => 'string',
        'server_port' => 'int',
        'max_connections' => 'int',
        'timeout' => 'int'
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
        'comment' => null,
        'outgoing_ip' => 'ipv4',
        'server_ip' => 'ipv4',
        'server_port' => null,
        'max_connections' => null,
        'timeout' => null
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
        'comment' => 'comment',
        'outgoing_ip' => 'outgoing-ip',
        'server_ip' => 'server-ip',
        'server_port' => 'server-port',
        'max_connections' => 'max-connections',
        'timeout' => 'timeout'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'comment' => 'setComment',
        'outgoing_ip' => 'setOutgoingIp',
        'server_ip' => 'setServerIp',
        'server_port' => 'setServerPort',
        'max_connections' => 'setMaxConnections',
        'timeout' => 'setTimeout'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'comment' => 'getComment',
        'outgoing_ip' => 'getOutgoingIp',
        'server_ip' => 'getServerIp',
        'server_port' => 'getServerPort',
        'max_connections' => 'getMaxConnections',
        'timeout' => 'getTimeout'
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
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['outgoing_ip'] = $data['outgoing_ip'] ?? null;
        $this->container['server_ip'] = $data['server_ip'] ?? null;
        $this->container['server_port'] = $data['server_port'] ?? null;
        $this->container['max_connections'] = $data['max_connections'] ?? null;
        $this->container['timeout'] = $data['timeout'] ?? null;
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

        if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) > 255)) {
            $invalidProperties[] = "invalid value for 'comment', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['server_port']) && ($this->container['server_port'] > 65535)) {
            $invalidProperties[] = "invalid value for 'server_port', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['server_port']) && ($this->container['server_port'] < 1)) {
            $invalidProperties[] = "invalid value for 'server_port', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['max_connections']) && ($this->container['max_connections'] > 4096)) {
            $invalidProperties[] = "invalid value for 'max_connections', must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['max_connections']) && ($this->container['max_connections'] < 4)) {
            $invalidProperties[] = "invalid value for 'max_connections', must be bigger than or equal to 4.";
        }

        if (!is_null($this->container['timeout']) && ($this->container['timeout'] > 15)) {
            $invalidProperties[] = "invalid value for 'timeout', must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['timeout']) && ($this->container['timeout'] < 1)) {
            $invalidProperties[] = "invalid value for 'timeout', must be bigger than or equal to 1.";
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
     * @param string|null $name Server name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InlineObject530., must be smaller than or equal to 35.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment Comment.
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (!is_null($comment) && (mb_strlen($comment) > 255)) {
            throw new \InvalidArgumentException('invalid length for $comment when calling InlineObject530., must be smaller than or equal to 255.');
        }

        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets outgoing_ip
     *
     * @return string|null
     */
    public function getOutgoingIp()
    {
        return $this->container['outgoing_ip'];
    }

    /**
     * Sets outgoing_ip
     *
     * @param string|null $outgoing_ip WISP outgoing IP address.
     *
     * @return self
     */
    public function setOutgoingIp($outgoing_ip)
    {
        $this->container['outgoing_ip'] = $outgoing_ip;

        return $this;
    }

    /**
     * Gets server_ip
     *
     * @return string|null
     */
    public function getServerIp()
    {
        return $this->container['server_ip'];
    }

    /**
     * Sets server_ip
     *
     * @param string|null $server_ip WISP server IP address.
     *
     * @return self
     */
    public function setServerIp($server_ip)
    {
        $this->container['server_ip'] = $server_ip;

        return $this;
    }

    /**
     * Gets server_port
     *
     * @return int|null
     */
    public function getServerPort()
    {
        return $this->container['server_port'];
    }

    /**
     * Sets server_port
     *
     * @param int|null $server_port WISP server port (1 - 65535, default = 15868).
     *
     * @return self
     */
    public function setServerPort($server_port)
    {

        if (!is_null($server_port) && ($server_port > 65535)) {
            throw new \InvalidArgumentException('invalid value for $server_port when calling InlineObject530., must be smaller than or equal to 65535.');
        }
        if (!is_null($server_port) && ($server_port < 1)) {
            throw new \InvalidArgumentException('invalid value for $server_port when calling InlineObject530., must be bigger than or equal to 1.');
        }

        $this->container['server_port'] = $server_port;

        return $this;
    }

    /**
     * Gets max_connections
     *
     * @return int|null
     */
    public function getMaxConnections()
    {
        return $this->container['max_connections'];
    }

    /**
     * Sets max_connections
     *
     * @param int|null $max_connections Maximum number of web proxy WISP connections (4 - 4096, default = 64).
     *
     * @return self
     */
    public function setMaxConnections($max_connections)
    {

        if (!is_null($max_connections) && ($max_connections > 4096)) {
            throw new \InvalidArgumentException('invalid value for $max_connections when calling InlineObject530., must be smaller than or equal to 4096.');
        }
        if (!is_null($max_connections) && ($max_connections < 4)) {
            throw new \InvalidArgumentException('invalid value for $max_connections when calling InlineObject530., must be bigger than or equal to 4.');
        }

        $this->container['max_connections'] = $max_connections;

        return $this;
    }

    /**
     * Gets timeout
     *
     * @return int|null
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     *
     * @param int|null $timeout Period of time before WISP requests time out (1 - 15 sec, default = 5).
     *
     * @return self
     */
    public function setTimeout($timeout)
    {

        if (!is_null($timeout) && ($timeout > 15)) {
            throw new \InvalidArgumentException('invalid value for $timeout when calling InlineObject530., must be smaller than or equal to 15.');
        }
        if (!is_null($timeout) && ($timeout < 1)) {
            throw new \InvalidArgumentException('invalid value for $timeout when calling InlineObject530., must be bigger than or equal to 1.');
        }

        $this->container['timeout'] = $timeout;

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


