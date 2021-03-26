<?php
/**
 * InlineObject293
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
 * InlineObject293 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject293 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_293';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => 'string',
        'interface' => 'string',
        'default_gateway' => 'string',
        'dhcp_server' => 'string',
        'dhcp_netmask' => 'string',
        'dhcp_start_ip' => 'string',
        'dhcp_end_ip' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status' => null,
        'interface' => null,
        'default_gateway' => 'ipv4',
        'dhcp_server' => null,
        'dhcp_netmask' => null,
        'dhcp_start_ip' => 'ipv4',
        'dhcp_end_ip' => 'ipv4'
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
        'status' => 'status',
        'interface' => 'interface',
        'default_gateway' => 'default-gateway',
        'dhcp_server' => 'dhcp-server',
        'dhcp_netmask' => 'dhcp-netmask',
        'dhcp_start_ip' => 'dhcp-start-ip',
        'dhcp_end_ip' => 'dhcp-end-ip'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'interface' => 'setInterface',
        'default_gateway' => 'setDefaultGateway',
        'dhcp_server' => 'setDhcpServer',
        'dhcp_netmask' => 'setDhcpNetmask',
        'dhcp_start_ip' => 'setDhcpStartIp',
        'dhcp_end_ip' => 'setDhcpEndIp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'interface' => 'getInterface',
        'default_gateway' => 'getDefaultGateway',
        'dhcp_server' => 'getDhcpServer',
        'dhcp_netmask' => 'getDhcpNetmask',
        'dhcp_start_ip' => 'getDhcpStartIp',
        'dhcp_end_ip' => 'getDhcpEndIp'
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
    const DHCP_SERVER_ENABLE = 'enable';
    const DHCP_SERVER_DISABLE = 'disable';
    

    
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
    public function getDhcpServerAllowableValues()
    {
        return [
            self::DHCP_SERVER_ENABLE,
            self::DHCP_SERVER_DISABLE,
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['interface'] = $data['interface'] ?? null;
        $this->container['default_gateway'] = $data['default_gateway'] ?? null;
        $this->container['dhcp_server'] = $data['dhcp_server'] ?? null;
        $this->container['dhcp_netmask'] = $data['dhcp_netmask'] ?? null;
        $this->container['dhcp_start_ip'] = $data['dhcp_start_ip'] ?? null;
        $this->container['dhcp_end_ip'] = $data['dhcp_end_ip'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['interface']) && (mb_strlen($this->container['interface']) > 15)) {
            $invalidProperties[] = "invalid value for 'interface', the character length must be smaller than or equal to 15.";
        }

        $allowedValues = $this->getDhcpServerAllowableValues();
        if (!is_null($this->container['dhcp_server']) && !in_array($this->container['dhcp_server'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dhcp_server', must be one of '%s'",
                $this->container['dhcp_server'],
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
     * @param string|null $status Enable/disable dedicated management.    enable:Enable setting.    disable:Disable setting.
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
     * @param string|null $interface Dedicated management interface.
     *
     * @return self
     */
    public function setInterface($interface)
    {
        if (!is_null($interface) && (mb_strlen($interface) > 15)) {
            throw new \InvalidArgumentException('invalid length for $interface when calling InlineObject293., must be smaller than or equal to 15.');
        }

        $this->container['interface'] = $interface;

        return $this;
    }

    /**
     * Gets default_gateway
     *
     * @return string|null
     */
    public function getDefaultGateway()
    {
        return $this->container['default_gateway'];
    }

    /**
     * Sets default_gateway
     *
     * @param string|null $default_gateway Default gateway for dedicated management interface.
     *
     * @return self
     */
    public function setDefaultGateway($default_gateway)
    {
        $this->container['default_gateway'] = $default_gateway;

        return $this;
    }

    /**
     * Gets dhcp_server
     *
     * @return string|null
     */
    public function getDhcpServer()
    {
        return $this->container['dhcp_server'];
    }

    /**
     * Sets dhcp_server
     *
     * @param string|null $dhcp_server Enable/disable DHCP server on management interface.    enable:Enable DHCP server on management port.    disable:Disable DHCP server on management port.
     *
     * @return self
     */
    public function setDhcpServer($dhcp_server)
    {
        $allowedValues = $this->getDhcpServerAllowableValues();
        if (!is_null($dhcp_server) && !in_array($dhcp_server, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dhcp_server', must be one of '%s'",
                    $dhcp_server,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dhcp_server'] = $dhcp_server;

        return $this;
    }

    /**
     * Gets dhcp_netmask
     *
     * @return string|null
     */
    public function getDhcpNetmask()
    {
        return $this->container['dhcp_netmask'];
    }

    /**
     * Sets dhcp_netmask
     *
     * @param string|null $dhcp_netmask DHCP netmask.
     *
     * @return self
     */
    public function setDhcpNetmask($dhcp_netmask)
    {
        $this->container['dhcp_netmask'] = $dhcp_netmask;

        return $this;
    }

    /**
     * Gets dhcp_start_ip
     *
     * @return string|null
     */
    public function getDhcpStartIp()
    {
        return $this->container['dhcp_start_ip'];
    }

    /**
     * Sets dhcp_start_ip
     *
     * @param string|null $dhcp_start_ip DHCP start IP for dedicated management.
     *
     * @return self
     */
    public function setDhcpStartIp($dhcp_start_ip)
    {
        $this->container['dhcp_start_ip'] = $dhcp_start_ip;

        return $this;
    }

    /**
     * Gets dhcp_end_ip
     *
     * @return string|null
     */
    public function getDhcpEndIp()
    {
        return $this->container['dhcp_end_ip'];
    }

    /**
     * Sets dhcp_end_ip
     *
     * @param string|null $dhcp_end_ip DHCP end IP for dedicated management.
     *
     * @return self
     */
    public function setDhcpEndIp($dhcp_end_ip)
    {
        $this->container['dhcp_end_ip'] = $dhcp_end_ip;

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


