<?php
/**
 * InlineObject544
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
 * InlineObject544 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject544 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_544';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'status' => 'string',
        'scope' => 'string',
        'ip' => 'string',
        'user' => 'string',
        'user_group' => 'string',
        'old_profile' => 'string',
        'new_profile' => 'string',
        'ip6' => 'string',
        'expires' => 'string',
        'initiator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'scope' => null,
        'ip' => 'ipv4',
        'user' => null,
        'user_group' => null,
        'old_profile' => null,
        'new_profile' => null,
        'ip6' => 'ipv6',
        'expires' => null,
        'initiator' => null
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
        'id' => 'id',
        'status' => 'status',
        'scope' => 'scope',
        'ip' => 'ip',
        'user' => 'user',
        'user_group' => 'user-group',
        'old_profile' => 'old-profile',
        'new_profile' => 'new-profile',
        'ip6' => 'ip6',
        'expires' => 'expires',
        'initiator' => 'initiator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'scope' => 'setScope',
        'ip' => 'setIp',
        'user' => 'setUser',
        'user_group' => 'setUserGroup',
        'old_profile' => 'setOldProfile',
        'new_profile' => 'setNewProfile',
        'ip6' => 'setIp6',
        'expires' => 'setExpires',
        'initiator' => 'setInitiator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'scope' => 'getScope',
        'ip' => 'getIp',
        'user' => 'getUser',
        'user_group' => 'getUserGroup',
        'old_profile' => 'getOldProfile',
        'new_profile' => 'getNewProfile',
        'ip6' => 'getIp6',
        'expires' => 'getExpires',
        'initiator' => 'getInitiator'
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
    const SCOPE_USER = 'user';
    const SCOPE_USER_GROUP = 'user-group';
    const SCOPE_IP = 'ip';
    const SCOPE_IP6 = 'ip6';
    

    
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
    public function getScopeAllowableValues()
    {
        return [
            self::SCOPE_USER,
            self::SCOPE_USER_GROUP,
            self::SCOPE_IP,
            self::SCOPE_IP6,
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['scope'] = $data['scope'] ?? null;
        $this->container['ip'] = $data['ip'] ?? null;
        $this->container['user'] = $data['user'] ?? null;
        $this->container['user_group'] = $data['user_group'] ?? null;
        $this->container['old_profile'] = $data['old_profile'] ?? null;
        $this->container['new_profile'] = $data['new_profile'] ?? null;
        $this->container['ip6'] = $data['ip6'] ?? null;
        $this->container['expires'] = $data['expires'] ?? null;
        $this->container['initiator'] = $data['initiator'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['id']) && ($this->container['id'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getScopeAllowableValues();
        if (!is_null($this->container['scope']) && !in_array($this->container['scope'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'scope', must be one of '%s'",
                $this->container['scope'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['user']) && (mb_strlen($this->container['user']) > 64)) {
            $invalidProperties[] = "invalid value for 'user', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['user_group']) && (mb_strlen($this->container['user_group']) > 63)) {
            $invalidProperties[] = "invalid value for 'user_group', the character length must be smaller than or equal to 63.";
        }

        if (!is_null($this->container['old_profile']) && (mb_strlen($this->container['old_profile']) > 35)) {
            $invalidProperties[] = "invalid value for 'old_profile', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['new_profile']) && (mb_strlen($this->container['new_profile']) > 35)) {
            $invalidProperties[] = "invalid value for 'new_profile', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['initiator']) && (mb_strlen($this->container['initiator']) > 64)) {
            $invalidProperties[] = "invalid value for 'initiator', the character length must be smaller than or equal to 64.";
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Override rule ID.
     *
     * @return self
     */
    public function setId($id)
    {

        if (!is_null($id) && ($id > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $id when calling InlineObject544., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($id) && ($id < 0)) {
            throw new \InvalidArgumentException('invalid value for $id when calling InlineObject544., must be bigger than or equal to 0.');
        }

        $this->container['id'] = $id;

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
     * @param string|null $status Enable/disable override rule.    enable:Enable override rule.    disable:Disable override rule.
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
     * Gets scope
     *
     * @return string|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string|null $scope Override either the specific user, user group, IPv4 address, or IPv6 address.    user:Override the specified user.    user-group:Override the specified user group.    ip:Override the specified IP address.    ip6:Override the specified IPv6 address.
     *
     * @return self
     */
    public function setScope($scope)
    {
        $allowedValues = $this->getScopeAllowableValues();
        if (!is_null($scope) && !in_array($scope, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'scope', must be one of '%s'",
                    $scope,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string|null
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string|null $ip IPv4 address which the override applies.
     *
     * @return self
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string|null $user Name of the user which the override applies.
     *
     * @return self
     */
    public function setUser($user)
    {
        if (!is_null($user) && (mb_strlen($user) > 64)) {
            throw new \InvalidArgumentException('invalid length for $user when calling InlineObject544., must be smaller than or equal to 64.');
        }

        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets user_group
     *
     * @return string|null
     */
    public function getUserGroup()
    {
        return $this->container['user_group'];
    }

    /**
     * Sets user_group
     *
     * @param string|null $user_group Specify the user group for which the override applies.
     *
     * @return self
     */
    public function setUserGroup($user_group)
    {
        if (!is_null($user_group) && (mb_strlen($user_group) > 63)) {
            throw new \InvalidArgumentException('invalid length for $user_group when calling InlineObject544., must be smaller than or equal to 63.');
        }

        $this->container['user_group'] = $user_group;

        return $this;
    }

    /**
     * Gets old_profile
     *
     * @return string|null
     */
    public function getOldProfile()
    {
        return $this->container['old_profile'];
    }

    /**
     * Sets old_profile
     *
     * @param string|null $old_profile Name of the web filter profile which the override applies.
     *
     * @return self
     */
    public function setOldProfile($old_profile)
    {
        if (!is_null($old_profile) && (mb_strlen($old_profile) > 35)) {
            throw new \InvalidArgumentException('invalid length for $old_profile when calling InlineObject544., must be smaller than or equal to 35.');
        }

        $this->container['old_profile'] = $old_profile;

        return $this;
    }

    /**
     * Gets new_profile
     *
     * @return string|null
     */
    public function getNewProfile()
    {
        return $this->container['new_profile'];
    }

    /**
     * Sets new_profile
     *
     * @param string|null $new_profile Name of the new web filter profile used by the override.
     *
     * @return self
     */
    public function setNewProfile($new_profile)
    {
        if (!is_null($new_profile) && (mb_strlen($new_profile) > 35)) {
            throw new \InvalidArgumentException('invalid length for $new_profile when calling InlineObject544., must be smaller than or equal to 35.');
        }

        $this->container['new_profile'] = $new_profile;

        return $this;
    }

    /**
     * Gets ip6
     *
     * @return string|null
     */
    public function getIp6()
    {
        return $this->container['ip6'];
    }

    /**
     * Sets ip6
     *
     * @param string|null $ip6 IPv6 address which the override applies.
     *
     * @return self
     */
    public function setIp6($ip6)
    {
        $this->container['ip6'] = $ip6;

        return $this;
    }

    /**
     * Gets expires
     *
     * @return string|null
     */
    public function getExpires()
    {
        return $this->container['expires'];
    }

    /**
     * Sets expires
     *
     * @param string|null $expires Override expiration date and time, from 5 minutes to 365 from now (format: yyyy/mm/dd hh:mm:ss).
     *
     * @return self
     */
    public function setExpires($expires)
    {
        $this->container['expires'] = $expires;

        return $this;
    }

    /**
     * Gets initiator
     *
     * @return string|null
     */
    public function getInitiator()
    {
        return $this->container['initiator'];
    }

    /**
     * Sets initiator
     *
     * @param string|null $initiator Initiating user of override (read-only setting).
     *
     * @return self
     */
    public function setInitiator($initiator)
    {
        if (!is_null($initiator) && (mb_strlen($initiator) > 64)) {
            throw new \InvalidArgumentException('invalid length for $initiator when calling InlineObject544., must be smaller than or equal to 64.');
        }

        $this->container['initiator'] = $initiator;

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


