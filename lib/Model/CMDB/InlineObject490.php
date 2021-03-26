<?php
/**
 * InlineObject490
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
 * InlineObject490 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject490 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_490';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'url_path' => 'string',
        'max_concurrent_user' => 'int',
        'login_page' => 'string',
        'virtual_host' => 'string',
        'virtual_host_only' => 'string',
        'radius_server' => 'string',
        'nas_ip' => 'string',
        'radius_port' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'url_path' => null,
        'max_concurrent_user' => null,
        'login_page' => null,
        'virtual_host' => null,
        'virtual_host_only' => null,
        'radius_server' => null,
        'nas_ip' => 'ipv4',
        'radius_port' => null
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
        'url_path' => 'url-path',
        'max_concurrent_user' => 'max-concurrent-user',
        'login_page' => 'login-page',
        'virtual_host' => 'virtual-host',
        'virtual_host_only' => 'virtual-host-only',
        'radius_server' => 'radius-server',
        'nas_ip' => 'nas-ip',
        'radius_port' => 'radius-port'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url_path' => 'setUrlPath',
        'max_concurrent_user' => 'setMaxConcurrentUser',
        'login_page' => 'setLoginPage',
        'virtual_host' => 'setVirtualHost',
        'virtual_host_only' => 'setVirtualHostOnly',
        'radius_server' => 'setRadiusServer',
        'nas_ip' => 'setNasIp',
        'radius_port' => 'setRadiusPort'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url_path' => 'getUrlPath',
        'max_concurrent_user' => 'getMaxConcurrentUser',
        'login_page' => 'getLoginPage',
        'virtual_host' => 'getVirtualHost',
        'virtual_host_only' => 'getVirtualHostOnly',
        'radius_server' => 'getRadiusServer',
        'nas_ip' => 'getNasIp',
        'radius_port' => 'getRadiusPort'
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

    const VIRTUAL_HOST_ONLY_ENABLE = 'enable';
    const VIRTUAL_HOST_ONLY_DISABLE = 'disable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVirtualHostOnlyAllowableValues()
    {
        return [
            self::VIRTUAL_HOST_ONLY_ENABLE,
            self::VIRTUAL_HOST_ONLY_DISABLE,
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
        $this->container['url_path'] = $data['url_path'] ?? null;
        $this->container['max_concurrent_user'] = $data['max_concurrent_user'] ?? null;
        $this->container['login_page'] = $data['login_page'] ?? null;
        $this->container['virtual_host'] = $data['virtual_host'] ?? null;
        $this->container['virtual_host_only'] = $data['virtual_host_only'] ?? null;
        $this->container['radius_server'] = $data['radius_server'] ?? null;
        $this->container['nas_ip'] = $data['nas_ip'] ?? null;
        $this->container['radius_port'] = $data['radius_port'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['url_path']) && (mb_strlen($this->container['url_path']) > 35)) {
            $invalidProperties[] = "invalid value for 'url_path', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['max_concurrent_user']) && ($this->container['max_concurrent_user'] > 65535)) {
            $invalidProperties[] = "invalid value for 'max_concurrent_user', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['max_concurrent_user']) && ($this->container['max_concurrent_user'] < 0)) {
            $invalidProperties[] = "invalid value for 'max_concurrent_user', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['login_page']) && (mb_strlen($this->container['login_page']) > 32768)) {
            $invalidProperties[] = "invalid value for 'login_page', the character length must be smaller than or equal to 32768.";
        }

        if (!is_null($this->container['virtual_host']) && (mb_strlen($this->container['virtual_host']) > 255)) {
            $invalidProperties[] = "invalid value for 'virtual_host', the character length must be smaller than or equal to 255.";
        }

        $allowedValues = $this->getVirtualHostOnlyAllowableValues();
        if (!is_null($this->container['virtual_host_only']) && !in_array($this->container['virtual_host_only'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'virtual_host_only', must be one of '%s'",
                $this->container['virtual_host_only'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['radius_server']) && (mb_strlen($this->container['radius_server']) > 35)) {
            $invalidProperties[] = "invalid value for 'radius_server', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['radius_port']) && ($this->container['radius_port'] > 65535)) {
            $invalidProperties[] = "invalid value for 'radius_port', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['radius_port']) && ($this->container['radius_port'] < 0)) {
            $invalidProperties[] = "invalid value for 'radius_port', must be bigger than or equal to 0.";
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
     * Gets url_path
     *
     * @return string|null
     */
    public function getUrlPath()
    {
        return $this->container['url_path'];
    }

    /**
     * Sets url_path
     *
     * @param string|null $url_path URL path to access SSL-VPN login page.
     *
     * @return self
     */
    public function setUrlPath($url_path)
    {
        if (!is_null($url_path) && (mb_strlen($url_path) > 35)) {
            throw new \InvalidArgumentException('invalid length for $url_path when calling InlineObject490., must be smaller than or equal to 35.');
        }

        $this->container['url_path'] = $url_path;

        return $this;
    }

    /**
     * Gets max_concurrent_user
     *
     * @return int|null
     */
    public function getMaxConcurrentUser()
    {
        return $this->container['max_concurrent_user'];
    }

    /**
     * Sets max_concurrent_user
     *
     * @param int|null $max_concurrent_user Maximum concurrent users (0 - 65535, 0 means unlimited).
     *
     * @return self
     */
    public function setMaxConcurrentUser($max_concurrent_user)
    {

        if (!is_null($max_concurrent_user) && ($max_concurrent_user > 65535)) {
            throw new \InvalidArgumentException('invalid value for $max_concurrent_user when calling InlineObject490., must be smaller than or equal to 65535.');
        }
        if (!is_null($max_concurrent_user) && ($max_concurrent_user < 0)) {
            throw new \InvalidArgumentException('invalid value for $max_concurrent_user when calling InlineObject490., must be bigger than or equal to 0.');
        }

        $this->container['max_concurrent_user'] = $max_concurrent_user;

        return $this;
    }

    /**
     * Gets login_page
     *
     * @return string|null
     */
    public function getLoginPage()
    {
        return $this->container['login_page'];
    }

    /**
     * Sets login_page
     *
     * @param string|null $login_page Replacement HTML for SSL-VPN login page.
     *
     * @return self
     */
    public function setLoginPage($login_page)
    {
        if (!is_null($login_page) && (mb_strlen($login_page) > 32768)) {
            throw new \InvalidArgumentException('invalid length for $login_page when calling InlineObject490., must be smaller than or equal to 32768.');
        }

        $this->container['login_page'] = $login_page;

        return $this;
    }

    /**
     * Gets virtual_host
     *
     * @return string|null
     */
    public function getVirtualHost()
    {
        return $this->container['virtual_host'];
    }

    /**
     * Sets virtual_host
     *
     * @param string|null $virtual_host Virtual host name for realm.
     *
     * @return self
     */
    public function setVirtualHost($virtual_host)
    {
        if (!is_null($virtual_host) && (mb_strlen($virtual_host) > 255)) {
            throw new \InvalidArgumentException('invalid length for $virtual_host when calling InlineObject490., must be smaller than or equal to 255.');
        }

        $this->container['virtual_host'] = $virtual_host;

        return $this;
    }

    /**
     * Gets virtual_host_only
     *
     * @return string|null
     */
    public function getVirtualHostOnly()
    {
        return $this->container['virtual_host_only'];
    }

    /**
     * Sets virtual_host_only
     *
     * @param string|null $virtual_host_only Enable/disable enforcement of virtual host method for SSL-VPN client access.    enable:Enable setting.    disable:Disable setting.
     *
     * @return self
     */
    public function setVirtualHostOnly($virtual_host_only)
    {
        $allowedValues = $this->getVirtualHostOnlyAllowableValues();
        if (!is_null($virtual_host_only) && !in_array($virtual_host_only, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'virtual_host_only', must be one of '%s'",
                    $virtual_host_only,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['virtual_host_only'] = $virtual_host_only;

        return $this;
    }

    /**
     * Gets radius_server
     *
     * @return string|null
     */
    public function getRadiusServer()
    {
        return $this->container['radius_server'];
    }

    /**
     * Sets radius_server
     *
     * @param string|null $radius_server RADIUS server associated with realm.
     *
     * @return self
     */
    public function setRadiusServer($radius_server)
    {
        if (!is_null($radius_server) && (mb_strlen($radius_server) > 35)) {
            throw new \InvalidArgumentException('invalid length for $radius_server when calling InlineObject490., must be smaller than or equal to 35.');
        }

        $this->container['radius_server'] = $radius_server;

        return $this;
    }

    /**
     * Gets nas_ip
     *
     * @return string|null
     */
    public function getNasIp()
    {
        return $this->container['nas_ip'];
    }

    /**
     * Sets nas_ip
     *
     * @param string|null $nas_ip IP address used as a NAS-IP to communicate with the RADIUS server.
     *
     * @return self
     */
    public function setNasIp($nas_ip)
    {
        $this->container['nas_ip'] = $nas_ip;

        return $this;
    }

    /**
     * Gets radius_port
     *
     * @return int|null
     */
    public function getRadiusPort()
    {
        return $this->container['radius_port'];
    }

    /**
     * Sets radius_port
     *
     * @param int|null $radius_port RADIUS service port number (0 - 65535, 0 means user.radius.radius-port).
     *
     * @return self
     */
    public function setRadiusPort($radius_port)
    {

        if (!is_null($radius_port) && ($radius_port > 65535)) {
            throw new \InvalidArgumentException('invalid value for $radius_port when calling InlineObject490., must be smaller than or equal to 65535.');
        }
        if (!is_null($radius_port) && ($radius_port < 0)) {
            throw new \InvalidArgumentException('invalid value for $radius_port when calling InlineObject490., must be bigger than or equal to 0.');
        }

        $this->container['radius_port'] = $radius_port;

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


