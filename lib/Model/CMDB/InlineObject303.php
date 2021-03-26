<?php
/**
 * InlineObject303
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
 * InlineObject303 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject303 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_303';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'status' => 'string',
        'type' => 'string',
        'category' => 'int',
        'username' => 'string',
        'password' => 'string',
        'comments' => 'string',
        'resource' => 'string',
        'user_agent' => 'string',
        'refresh_rate' => 'int',
        'source_ip' => 'string',
        'interface_select_method' => 'string',
        'interface' => 'string'
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
        'status' => null,
        'type' => null,
        'category' => null,
        'username' => null,
        'password' => 'password',
        'comments' => null,
        'resource' => null,
        'user_agent' => null,
        'refresh_rate' => null,
        'source_ip' => 'ipv4',
        'interface_select_method' => null,
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
        'status' => 'status',
        'type' => 'type',
        'category' => 'category',
        'username' => 'username',
        'password' => 'password',
        'comments' => 'comments',
        'resource' => 'resource',
        'user_agent' => 'user-agent',
        'refresh_rate' => 'refresh-rate',
        'source_ip' => 'source-ip',
        'interface_select_method' => 'interface-select-method',
        'interface' => 'interface'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'status' => 'setStatus',
        'type' => 'setType',
        'category' => 'setCategory',
        'username' => 'setUsername',
        'password' => 'setPassword',
        'comments' => 'setComments',
        'resource' => 'setResource',
        'user_agent' => 'setUserAgent',
        'refresh_rate' => 'setRefreshRate',
        'source_ip' => 'setSourceIp',
        'interface_select_method' => 'setInterfaceSelectMethod',
        'interface' => 'setInterface'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'status' => 'getStatus',
        'type' => 'getType',
        'category' => 'getCategory',
        'username' => 'getUsername',
        'password' => 'getPassword',
        'comments' => 'getComments',
        'resource' => 'getResource',
        'user_agent' => 'getUserAgent',
        'refresh_rate' => 'getRefreshRate',
        'source_ip' => 'getSourceIp',
        'interface_select_method' => 'getInterfaceSelectMethod',
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

    const STATUS_ENABLE = 'enable';
    const STATUS_DISABLE = 'disable';
    const TYPE_CATEGORY = 'category';
    const TYPE_ADDRESS = 'address';
    const TYPE_DOMAIN = 'domain';
    const TYPE_MALWARE = 'malware';
    const INTERFACE_SELECT_METHOD_AUTO = 'auto';
    const INTERFACE_SELECT_METHOD_SDWAN = 'sdwan';
    const INTERFACE_SELECT_METHOD_SPECIFY = 'specify';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLE,
            self::STATUS_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CATEGORY,
            self::TYPE_ADDRESS,
            self::TYPE_DOMAIN,
            self::TYPE_MALWARE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInterfaceSelectMethodAllowableValues()
    {
        return [
            self::INTERFACE_SELECT_METHOD_AUTO,
            self::INTERFACE_SELECT_METHOD_SDWAN,
            self::INTERFACE_SELECT_METHOD_SPECIFY,
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['username'] = $data['username'] ?? null;
        $this->container['password'] = $data['password'] ?? null;
        $this->container['comments'] = $data['comments'] ?? null;
        $this->container['resource'] = $data['resource'] ?? null;
        $this->container['user_agent'] = $data['user_agent'] ?? null;
        $this->container['refresh_rate'] = $data['refresh_rate'] ?? null;
        $this->container['source_ip'] = $data['source_ip'] ?? null;
        $this->container['interface_select_method'] = $data['interface_select_method'] ?? null;
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['category']) && ($this->container['category'] > 221)) {
            $invalidProperties[] = "invalid value for 'category', must be smaller than or equal to 221.";
        }

        if (!is_null($this->container['category']) && ($this->container['category'] < 192)) {
            $invalidProperties[] = "invalid value for 'category', must be bigger than or equal to 192.";
        }

        if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) > 64)) {
            $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['comments']) && (mb_strlen($this->container['comments']) > 255)) {
            $invalidProperties[] = "invalid value for 'comments', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['resource']) && (mb_strlen($this->container['resource']) > 511)) {
            $invalidProperties[] = "invalid value for 'resource', the character length must be smaller than or equal to 511.";
        }

        if (!is_null($this->container['user_agent']) && (mb_strlen($this->container['user_agent']) > 127)) {
            $invalidProperties[] = "invalid value for 'user_agent', the character length must be smaller than or equal to 127.";
        }

        if (!is_null($this->container['refresh_rate']) && ($this->container['refresh_rate'] > 43200)) {
            $invalidProperties[] = "invalid value for 'refresh_rate', must be smaller than or equal to 43200.";
        }

        if (!is_null($this->container['refresh_rate']) && ($this->container['refresh_rate'] < 1)) {
            $invalidProperties[] = "invalid value for 'refresh_rate', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getInterfaceSelectMethodAllowableValues();
        if (!is_null($this->container['interface_select_method']) && !in_array($this->container['interface_select_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'interface_select_method', must be one of '%s'",
                $this->container['interface_select_method'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['interface']) && (mb_strlen($this->container['interface']) > 15)) {
            $invalidProperties[] = "invalid value for 'interface', the character length must be smaller than or equal to 15.";
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
     * @param string|null $name External resource name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InlineObject303., must be smaller than or equal to 35.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Enable/disable user resource.    enable:Enable user resource.    disable:Disable user resource.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type User resource type.    category:FortiGuard category.    address:Firewall IP address.    domain:Domain Name.    malware:Malware hash.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets category
     *
     * @return int|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param int|null $category User resource category.
     *
     * @return self
     */
    public function setCategory($category)
    {

        if (!is_null($category) && ($category > 221)) {
            throw new \InvalidArgumentException('invalid value for $category when calling InlineObject303., must be smaller than or equal to 221.');
        }
        if (!is_null($category) && ($category < 192)) {
            throw new \InvalidArgumentException('invalid value for $category when calling InlineObject303., must be bigger than or equal to 192.');
        }

        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username HTTP basic authentication user name.
     *
     * @return self
     */
    public function setUsername($username)
    {
        if (!is_null($username) && (mb_strlen($username) > 64)) {
            throw new \InvalidArgumentException('invalid length for $username when calling InlineObject303., must be smaller than or equal to 64.');
        }

        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password HTTP basic authentication password.
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

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
            throw new \InvalidArgumentException('invalid length for $comments when calling InlineObject303., must be smaller than or equal to 255.');
        }

        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets resource
     *
     * @return string|null
     */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
     * Sets resource
     *
     * @param string|null $resource URI of external resource.
     *
     * @return self
     */
    public function setResource($resource)
    {
        if (!is_null($resource) && (mb_strlen($resource) > 511)) {
            throw new \InvalidArgumentException('invalid length for $resource when calling InlineObject303., must be smaller than or equal to 511.');
        }

        $this->container['resource'] = $resource;

        return $this;
    }

    /**
     * Gets user_agent
     *
     * @return string|null
     */
    public function getUserAgent()
    {
        return $this->container['user_agent'];
    }

    /**
     * Sets user_agent
     *
     * @param string|null $user_agent Override HTTP User-Agent header used when retrieving this external resource.
     *
     * @return self
     */
    public function setUserAgent($user_agent)
    {
        if (!is_null($user_agent) && (mb_strlen($user_agent) > 127)) {
            throw new \InvalidArgumentException('invalid length for $user_agent when calling InlineObject303., must be smaller than or equal to 127.');
        }

        $this->container['user_agent'] = $user_agent;

        return $this;
    }

    /**
     * Gets refresh_rate
     *
     * @return int|null
     */
    public function getRefreshRate()
    {
        return $this->container['refresh_rate'];
    }

    /**
     * Sets refresh_rate
     *
     * @param int|null $refresh_rate Time interval to refresh external resource (1 - 43200 min, default = 5 min).
     *
     * @return self
     */
    public function setRefreshRate($refresh_rate)
    {

        if (!is_null($refresh_rate) && ($refresh_rate > 43200)) {
            throw new \InvalidArgumentException('invalid value for $refresh_rate when calling InlineObject303., must be smaller than or equal to 43200.');
        }
        if (!is_null($refresh_rate) && ($refresh_rate < 1)) {
            throw new \InvalidArgumentException('invalid value for $refresh_rate when calling InlineObject303., must be bigger than or equal to 1.');
        }

        $this->container['refresh_rate'] = $refresh_rate;

        return $this;
    }

    /**
     * Gets source_ip
     *
     * @return string|null
     */
    public function getSourceIp()
    {
        return $this->container['source_ip'];
    }

    /**
     * Sets source_ip
     *
     * @param string|null $source_ip Source IPv4 address used to communicate with server.
     *
     * @return self
     */
    public function setSourceIp($source_ip)
    {
        $this->container['source_ip'] = $source_ip;

        return $this;
    }

    /**
     * Gets interface_select_method
     *
     * @return string|null
     */
    public function getInterfaceSelectMethod()
    {
        return $this->container['interface_select_method'];
    }

    /**
     * Sets interface_select_method
     *
     * @param string|null $interface_select_method Specify how to select outgoing interface to reach server.    auto:Set outgoing interface automatically.    sdwan:Set outgoing interface by SD-WAN or policy routing rules.    specify:Set outgoing interface manually.
     *
     * @return self
     */
    public function setInterfaceSelectMethod($interface_select_method)
    {
        $allowedValues = $this->getInterfaceSelectMethodAllowableValues();
        if (!is_null($interface_select_method) && !in_array($interface_select_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'interface_select_method', must be one of '%s'",
                    $interface_select_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['interface_select_method'] = $interface_select_method;

        return $this;
    }

    /**
     * Gets interface
     *
     * @return string|null
     */
    public function getInterface()
    {
        return $this->container['interface'];
    }

    /**
     * Sets interface
     *
     * @param string|null $interface Specify outgoing interface to reach server.
     *
     * @return self
     */
    public function setInterface($interface)
    {
        if (!is_null($interface) && (mb_strlen($interface) > 15)) {
            throw new \InvalidArgumentException('invalid length for $interface when calling InlineObject303., must be smaller than or equal to 15.');
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


