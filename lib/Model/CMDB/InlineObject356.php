<?php
/**
 * InlineObject356
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
 * InlineObject356 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject356 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_356';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'dial_on_demand' => 'string',
        'ipv6' => 'string',
        'device' => 'string',
        'username' => 'string',
        'password' => 'string',
        'auth_type' => 'string',
        'ipunnumbered' => 'string',
        'pppoe_unnumbered_negotiate' => 'string',
        'idle_timeout' => 'int',
        'disc_retry_timeout' => 'int',
        'padt_retry_timeout' => 'int',
        'service_name' => 'string',
        'ac_name' => 'string',
        'lcp_echo_interval' => 'int',
        'lcp_max_echo_fails' => 'int'
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
        'dial_on_demand' => null,
        'ipv6' => null,
        'device' => null,
        'username' => null,
        'password' => 'password',
        'auth_type' => null,
        'ipunnumbered' => 'ipv4',
        'pppoe_unnumbered_negotiate' => null,
        'idle_timeout' => null,
        'disc_retry_timeout' => null,
        'padt_retry_timeout' => null,
        'service_name' => null,
        'ac_name' => null,
        'lcp_echo_interval' => null,
        'lcp_max_echo_fails' => null
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
        'dial_on_demand' => 'dial-on-demand',
        'ipv6' => 'ipv6',
        'device' => 'device',
        'username' => 'username',
        'password' => 'password',
        'auth_type' => 'auth-type',
        'ipunnumbered' => 'ipunnumbered',
        'pppoe_unnumbered_negotiate' => 'pppoe-unnumbered-negotiate',
        'idle_timeout' => 'idle-timeout',
        'disc_retry_timeout' => 'disc-retry-timeout',
        'padt_retry_timeout' => 'padt-retry-timeout',
        'service_name' => 'service-name',
        'ac_name' => 'ac-name',
        'lcp_echo_interval' => 'lcp-echo-interval',
        'lcp_max_echo_fails' => 'lcp-max-echo-fails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'dial_on_demand' => 'setDialOnDemand',
        'ipv6' => 'setIpv6',
        'device' => 'setDevice',
        'username' => 'setUsername',
        'password' => 'setPassword',
        'auth_type' => 'setAuthType',
        'ipunnumbered' => 'setIpunnumbered',
        'pppoe_unnumbered_negotiate' => 'setPppoeUnnumberedNegotiate',
        'idle_timeout' => 'setIdleTimeout',
        'disc_retry_timeout' => 'setDiscRetryTimeout',
        'padt_retry_timeout' => 'setPadtRetryTimeout',
        'service_name' => 'setServiceName',
        'ac_name' => 'setAcName',
        'lcp_echo_interval' => 'setLcpEchoInterval',
        'lcp_max_echo_fails' => 'setLcpMaxEchoFails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'dial_on_demand' => 'getDialOnDemand',
        'ipv6' => 'getIpv6',
        'device' => 'getDevice',
        'username' => 'getUsername',
        'password' => 'getPassword',
        'auth_type' => 'getAuthType',
        'ipunnumbered' => 'getIpunnumbered',
        'pppoe_unnumbered_negotiate' => 'getPppoeUnnumberedNegotiate',
        'idle_timeout' => 'getIdleTimeout',
        'disc_retry_timeout' => 'getDiscRetryTimeout',
        'padt_retry_timeout' => 'getPadtRetryTimeout',
        'service_name' => 'getServiceName',
        'ac_name' => 'getAcName',
        'lcp_echo_interval' => 'getLcpEchoInterval',
        'lcp_max_echo_fails' => 'getLcpMaxEchoFails'
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

    const DIAL_ON_DEMAND_ENABLE = 'enable';
    const DIAL_ON_DEMAND_DISABLE = 'disable';
    const IPV6_ENABLE = 'enable';
    const IPV6_DISABLE = 'disable';
    const AUTH_TYPE_AUTO = 'auto';
    const AUTH_TYPE_PAP = 'pap';
    const AUTH_TYPE_CHAP = 'chap';
    const AUTH_TYPE_MSCHAPV1 = 'mschapv1';
    const AUTH_TYPE_MSCHAPV2 = 'mschapv2';
    const PPPOE_UNNUMBERED_NEGOTIATE_ENABLE = 'enable';
    const PPPOE_UNNUMBERED_NEGOTIATE_DISABLE = 'disable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDialOnDemandAllowableValues()
    {
        return [
            self::DIAL_ON_DEMAND_ENABLE,
            self::DIAL_ON_DEMAND_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIpv6AllowableValues()
    {
        return [
            self::IPV6_ENABLE,
            self::IPV6_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthTypeAllowableValues()
    {
        return [
            self::AUTH_TYPE_AUTO,
            self::AUTH_TYPE_PAP,
            self::AUTH_TYPE_CHAP,
            self::AUTH_TYPE_MSCHAPV1,
            self::AUTH_TYPE_MSCHAPV2,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPppoeUnnumberedNegotiateAllowableValues()
    {
        return [
            self::PPPOE_UNNUMBERED_NEGOTIATE_ENABLE,
            self::PPPOE_UNNUMBERED_NEGOTIATE_DISABLE,
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
        $this->container['dial_on_demand'] = $data['dial_on_demand'] ?? null;
        $this->container['ipv6'] = $data['ipv6'] ?? null;
        $this->container['device'] = $data['device'] ?? null;
        $this->container['username'] = $data['username'] ?? null;
        $this->container['password'] = $data['password'] ?? null;
        $this->container['auth_type'] = $data['auth_type'] ?? null;
        $this->container['ipunnumbered'] = $data['ipunnumbered'] ?? null;
        $this->container['pppoe_unnumbered_negotiate'] = $data['pppoe_unnumbered_negotiate'] ?? null;
        $this->container['idle_timeout'] = $data['idle_timeout'] ?? null;
        $this->container['disc_retry_timeout'] = $data['disc_retry_timeout'] ?? null;
        $this->container['padt_retry_timeout'] = $data['padt_retry_timeout'] ?? null;
        $this->container['service_name'] = $data['service_name'] ?? null;
        $this->container['ac_name'] = $data['ac_name'] ?? null;
        $this->container['lcp_echo_interval'] = $data['lcp_echo_interval'] ?? null;
        $this->container['lcp_max_echo_fails'] = $data['lcp_max_echo_fails'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 15)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 15.";
        }

        $allowedValues = $this->getDialOnDemandAllowableValues();
        if (!is_null($this->container['dial_on_demand']) && !in_array($this->container['dial_on_demand'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dial_on_demand', must be one of '%s'",
                $this->container['dial_on_demand'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIpv6AllowableValues();
        if (!is_null($this->container['ipv6']) && !in_array($this->container['ipv6'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ipv6', must be one of '%s'",
                $this->container['ipv6'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['device']) && (mb_strlen($this->container['device']) > 15)) {
            $invalidProperties[] = "invalid value for 'device', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) > 64)) {
            $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 64.";
        }

        $allowedValues = $this->getAuthTypeAllowableValues();
        if (!is_null($this->container['auth_type']) && !in_array($this->container['auth_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'auth_type', must be one of '%s'",
                $this->container['auth_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPppoeUnnumberedNegotiateAllowableValues();
        if (!is_null($this->container['pppoe_unnumbered_negotiate']) && !in_array($this->container['pppoe_unnumbered_negotiate'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'pppoe_unnumbered_negotiate', must be one of '%s'",
                $this->container['pppoe_unnumbered_negotiate'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['idle_timeout']) && ($this->container['idle_timeout'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'idle_timeout', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['idle_timeout']) && ($this->container['idle_timeout'] < 0)) {
            $invalidProperties[] = "invalid value for 'idle_timeout', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['disc_retry_timeout']) && ($this->container['disc_retry_timeout'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'disc_retry_timeout', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['disc_retry_timeout']) && ($this->container['disc_retry_timeout'] < 0)) {
            $invalidProperties[] = "invalid value for 'disc_retry_timeout', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['padt_retry_timeout']) && ($this->container['padt_retry_timeout'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'padt_retry_timeout', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['padt_retry_timeout']) && ($this->container['padt_retry_timeout'] < 0)) {
            $invalidProperties[] = "invalid value for 'padt_retry_timeout', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['service_name']) && (mb_strlen($this->container['service_name']) > 63)) {
            $invalidProperties[] = "invalid value for 'service_name', the character length must be smaller than or equal to 63.";
        }

        if (!is_null($this->container['ac_name']) && (mb_strlen($this->container['ac_name']) > 63)) {
            $invalidProperties[] = "invalid value for 'ac_name', the character length must be smaller than or equal to 63.";
        }

        if (!is_null($this->container['lcp_echo_interval']) && ($this->container['lcp_echo_interval'] > 32767)) {
            $invalidProperties[] = "invalid value for 'lcp_echo_interval', must be smaller than or equal to 32767.";
        }

        if (!is_null($this->container['lcp_echo_interval']) && ($this->container['lcp_echo_interval'] < 0)) {
            $invalidProperties[] = "invalid value for 'lcp_echo_interval', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['lcp_max_echo_fails']) && ($this->container['lcp_max_echo_fails'] > 32767)) {
            $invalidProperties[] = "invalid value for 'lcp_max_echo_fails', must be smaller than or equal to 32767.";
        }

        if (!is_null($this->container['lcp_max_echo_fails']) && ($this->container['lcp_max_echo_fails'] < 0)) {
            $invalidProperties[] = "invalid value for 'lcp_max_echo_fails', must be bigger than or equal to 0.";
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
     * @param string|null $name Name of the PPPoE interface.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 15)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InlineObject356., must be smaller than or equal to 15.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets dial_on_demand
     *
     * @return string|null
     */
    public function getDialOnDemand()
    {
        return $this->container['dial_on_demand'];
    }

    /**
     * Sets dial_on_demand
     *
     * @param string|null $dial_on_demand Enable/disable dial on demand to dial the PPPoE interface when packets are routed to the PPPoE interface.    enable:Enable dial on demand.    disable:Disable dial on demand.
     *
     * @return self
     */
    public function setDialOnDemand($dial_on_demand)
    {
        $allowedValues = $this->getDialOnDemandAllowableValues();
        if (!is_null($dial_on_demand) && !in_array($dial_on_demand, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dial_on_demand', must be one of '%s'",
                    $dial_on_demand,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dial_on_demand'] = $dial_on_demand;

        return $this;
    }

    /**
     * Gets ipv6
     *
     * @return string|null
     */
    public function getIpv6()
    {
        return $this->container['ipv6'];
    }

    /**
     * Sets ipv6
     *
     * @param string|null $ipv6 Enable/disable IPv6 Control Protocol (IPv6CP).    enable:Enable IPv6CP.    disable:Disable IPv6CP.
     *
     * @return self
     */
    public function setIpv6($ipv6)
    {
        $allowedValues = $this->getIpv6AllowableValues();
        if (!is_null($ipv6) && !in_array($ipv6, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ipv6', must be one of '%s'",
                    $ipv6,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ipv6'] = $ipv6;

        return $this;
    }

    /**
     * Gets device
     *
     * @return string|null
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param string|null $device Name for the physical interface.
     *
     * @return self
     */
    public function setDevice($device)
    {
        if (!is_null($device) && (mb_strlen($device) > 15)) {
            throw new \InvalidArgumentException('invalid length for $device when calling InlineObject356., must be smaller than or equal to 15.');
        }

        $this->container['device'] = $device;

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
     * @param string|null $username User name.
     *
     * @return self
     */
    public function setUsername($username)
    {
        if (!is_null($username) && (mb_strlen($username) > 64)) {
            throw new \InvalidArgumentException('invalid length for $username when calling InlineObject356., must be smaller than or equal to 64.');
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
     * @param string|null $password Enter the password.
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets auth_type
     *
     * @return string|null
     */
    public function getAuthType()
    {
        return $this->container['auth_type'];
    }

    /**
     * Sets auth_type
     *
     * @param string|null $auth_type PPP authentication type to use.    auto:Automatically choose the authentication method.    pap:PAP authentication.    chap:CHAP authentication.    mschapv1:MS-CHAPv1 authentication.    mschapv2:MS-CHAPv2 authentication.
     *
     * @return self
     */
    public function setAuthType($auth_type)
    {
        $allowedValues = $this->getAuthTypeAllowableValues();
        if (!is_null($auth_type) && !in_array($auth_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'auth_type', must be one of '%s'",
                    $auth_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auth_type'] = $auth_type;

        return $this;
    }

    /**
     * Gets ipunnumbered
     *
     * @return string|null
     */
    public function getIpunnumbered()
    {
        return $this->container['ipunnumbered'];
    }

    /**
     * Sets ipunnumbered
     *
     * @param string|null $ipunnumbered PPPoE unnumbered IP.
     *
     * @return self
     */
    public function setIpunnumbered($ipunnumbered)
    {
        $this->container['ipunnumbered'] = $ipunnumbered;

        return $this;
    }

    /**
     * Gets pppoe_unnumbered_negotiate
     *
     * @return string|null
     */
    public function getPppoeUnnumberedNegotiate()
    {
        return $this->container['pppoe_unnumbered_negotiate'];
    }

    /**
     * Sets pppoe_unnumbered_negotiate
     *
     * @param string|null $pppoe_unnumbered_negotiate Enable/disable PPPoE unnumbered negotiation.    enable:Enable PPPoE unnumbered negotiation.    disable:Disable PPPoE unnumbered negotiation.
     *
     * @return self
     */
    public function setPppoeUnnumberedNegotiate($pppoe_unnumbered_negotiate)
    {
        $allowedValues = $this->getPppoeUnnumberedNegotiateAllowableValues();
        if (!is_null($pppoe_unnumbered_negotiate) && !in_array($pppoe_unnumbered_negotiate, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'pppoe_unnumbered_negotiate', must be one of '%s'",
                    $pppoe_unnumbered_negotiate,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pppoe_unnumbered_negotiate'] = $pppoe_unnumbered_negotiate;

        return $this;
    }

    /**
     * Gets idle_timeout
     *
     * @return int|null
     */
    public function getIdleTimeout()
    {
        return $this->container['idle_timeout'];
    }

    /**
     * Sets idle_timeout
     *
     * @param int|null $idle_timeout PPPoE auto disconnect after idle timeout (0-4294967295 sec).
     *
     * @return self
     */
    public function setIdleTimeout($idle_timeout)
    {

        if (!is_null($idle_timeout) && ($idle_timeout > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $idle_timeout when calling InlineObject356., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($idle_timeout) && ($idle_timeout < 0)) {
            throw new \InvalidArgumentException('invalid value for $idle_timeout when calling InlineObject356., must be bigger than or equal to 0.');
        }

        $this->container['idle_timeout'] = $idle_timeout;

        return $this;
    }

    /**
     * Gets disc_retry_timeout
     *
     * @return int|null
     */
    public function getDiscRetryTimeout()
    {
        return $this->container['disc_retry_timeout'];
    }

    /**
     * Sets disc_retry_timeout
     *
     * @param int|null $disc_retry_timeout PPPoE discovery init timeout value in (0-4294967295 sec).
     *
     * @return self
     */
    public function setDiscRetryTimeout($disc_retry_timeout)
    {

        if (!is_null($disc_retry_timeout) && ($disc_retry_timeout > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $disc_retry_timeout when calling InlineObject356., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($disc_retry_timeout) && ($disc_retry_timeout < 0)) {
            throw new \InvalidArgumentException('invalid value for $disc_retry_timeout when calling InlineObject356., must be bigger than or equal to 0.');
        }

        $this->container['disc_retry_timeout'] = $disc_retry_timeout;

        return $this;
    }

    /**
     * Gets padt_retry_timeout
     *
     * @return int|null
     */
    public function getPadtRetryTimeout()
    {
        return $this->container['padt_retry_timeout'];
    }

    /**
     * Sets padt_retry_timeout
     *
     * @param int|null $padt_retry_timeout PPPoE terminate timeout value in (0-4294967295 sec).
     *
     * @return self
     */
    public function setPadtRetryTimeout($padt_retry_timeout)
    {

        if (!is_null($padt_retry_timeout) && ($padt_retry_timeout > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $padt_retry_timeout when calling InlineObject356., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($padt_retry_timeout) && ($padt_retry_timeout < 0)) {
            throw new \InvalidArgumentException('invalid value for $padt_retry_timeout when calling InlineObject356., must be bigger than or equal to 0.');
        }

        $this->container['padt_retry_timeout'] = $padt_retry_timeout;

        return $this;
    }

    /**
     * Gets service_name
     *
     * @return string|null
     */
    public function getServiceName()
    {
        return $this->container['service_name'];
    }

    /**
     * Sets service_name
     *
     * @param string|null $service_name PPPoE service name.
     *
     * @return self
     */
    public function setServiceName($service_name)
    {
        if (!is_null($service_name) && (mb_strlen($service_name) > 63)) {
            throw new \InvalidArgumentException('invalid length for $service_name when calling InlineObject356., must be smaller than or equal to 63.');
        }

        $this->container['service_name'] = $service_name;

        return $this;
    }

    /**
     * Gets ac_name
     *
     * @return string|null
     */
    public function getAcName()
    {
        return $this->container['ac_name'];
    }

    /**
     * Sets ac_name
     *
     * @param string|null $ac_name PPPoE AC name.
     *
     * @return self
     */
    public function setAcName($ac_name)
    {
        if (!is_null($ac_name) && (mb_strlen($ac_name) > 63)) {
            throw new \InvalidArgumentException('invalid length for $ac_name when calling InlineObject356., must be smaller than or equal to 63.');
        }

        $this->container['ac_name'] = $ac_name;

        return $this;
    }

    /**
     * Gets lcp_echo_interval
     *
     * @return int|null
     */
    public function getLcpEchoInterval()
    {
        return $this->container['lcp_echo_interval'];
    }

    /**
     * Sets lcp_echo_interval
     *
     * @param int|null $lcp_echo_interval Time in seconds between PPPoE Link Control Protocol (LCP) echo requests.
     *
     * @return self
     */
    public function setLcpEchoInterval($lcp_echo_interval)
    {

        if (!is_null($lcp_echo_interval) && ($lcp_echo_interval > 32767)) {
            throw new \InvalidArgumentException('invalid value for $lcp_echo_interval when calling InlineObject356., must be smaller than or equal to 32767.');
        }
        if (!is_null($lcp_echo_interval) && ($lcp_echo_interval < 0)) {
            throw new \InvalidArgumentException('invalid value for $lcp_echo_interval when calling InlineObject356., must be bigger than or equal to 0.');
        }

        $this->container['lcp_echo_interval'] = $lcp_echo_interval;

        return $this;
    }

    /**
     * Gets lcp_max_echo_fails
     *
     * @return int|null
     */
    public function getLcpMaxEchoFails()
    {
        return $this->container['lcp_max_echo_fails'];
    }

    /**
     * Sets lcp_max_echo_fails
     *
     * @param int|null $lcp_max_echo_fails Maximum missed LCP echo messages before disconnect.
     *
     * @return self
     */
    public function setLcpMaxEchoFails($lcp_max_echo_fails)
    {

        if (!is_null($lcp_max_echo_fails) && ($lcp_max_echo_fails > 32767)) {
            throw new \InvalidArgumentException('invalid value for $lcp_max_echo_fails when calling InlineObject356., must be smaller than or equal to 32767.');
        }
        if (!is_null($lcp_max_echo_fails) && ($lcp_max_echo_fails < 0)) {
            throw new \InvalidArgumentException('invalid value for $lcp_max_echo_fails when calling InlineObject356., must be bigger than or equal to 0.');
        }

        $this->container['lcp_max_echo_fails'] = $lcp_max_echo_fails;

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


