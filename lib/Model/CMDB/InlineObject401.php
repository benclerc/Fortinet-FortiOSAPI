<?php
/**
 * InlineObject401
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
 * InlineObject401 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject401 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_401';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'description' => 'string',
        'snmp_index' => 'int',
        'session' => 'string',
        'ipsec_phase1' => 'string',
        'ipsec_phase2' => 'string',
        'ipsec_phase1_interface' => 'string',
        'ipsec_phase2_interface' => 'string',
        'dialup_tunnel' => 'string',
        'firewall_policy' => 'string',
        'firewall_address' => 'string',
        'firewall_addrgrp' => 'string',
        'custom_service' => 'string',
        'service_group' => 'string',
        'onetime_schedule' => 'string',
        'recurring_schedule' => 'string',
        'user' => 'string',
        'user_group' => 'string',
        'sslvpn' => 'string',
        'proxy' => 'string',
        'log_disk_quota' => 'string'
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
        'snmp_index' => null,
        'session' => null,
        'ipsec_phase1' => null,
        'ipsec_phase2' => null,
        'ipsec_phase1_interface' => null,
        'ipsec_phase2_interface' => null,
        'dialup_tunnel' => null,
        'firewall_policy' => null,
        'firewall_address' => null,
        'firewall_addrgrp' => null,
        'custom_service' => null,
        'service_group' => null,
        'onetime_schedule' => null,
        'recurring_schedule' => null,
        'user' => null,
        'user_group' => null,
        'sslvpn' => null,
        'proxy' => null,
        'log_disk_quota' => null
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
        'snmp_index' => 'snmp-index',
        'session' => 'session',
        'ipsec_phase1' => 'ipsec-phase1',
        'ipsec_phase2' => 'ipsec-phase2',
        'ipsec_phase1_interface' => 'ipsec-phase1-interface',
        'ipsec_phase2_interface' => 'ipsec-phase2-interface',
        'dialup_tunnel' => 'dialup-tunnel',
        'firewall_policy' => 'firewall-policy',
        'firewall_address' => 'firewall-address',
        'firewall_addrgrp' => 'firewall-addrgrp',
        'custom_service' => 'custom-service',
        'service_group' => 'service-group',
        'onetime_schedule' => 'onetime-schedule',
        'recurring_schedule' => 'recurring-schedule',
        'user' => 'user',
        'user_group' => 'user-group',
        'sslvpn' => 'sslvpn',
        'proxy' => 'proxy',
        'log_disk_quota' => 'log-disk-quota'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'snmp_index' => 'setSnmpIndex',
        'session' => 'setSession',
        'ipsec_phase1' => 'setIpsecPhase1',
        'ipsec_phase2' => 'setIpsecPhase2',
        'ipsec_phase1_interface' => 'setIpsecPhase1Interface',
        'ipsec_phase2_interface' => 'setIpsecPhase2Interface',
        'dialup_tunnel' => 'setDialupTunnel',
        'firewall_policy' => 'setFirewallPolicy',
        'firewall_address' => 'setFirewallAddress',
        'firewall_addrgrp' => 'setFirewallAddrgrp',
        'custom_service' => 'setCustomService',
        'service_group' => 'setServiceGroup',
        'onetime_schedule' => 'setOnetimeSchedule',
        'recurring_schedule' => 'setRecurringSchedule',
        'user' => 'setUser',
        'user_group' => 'setUserGroup',
        'sslvpn' => 'setSslvpn',
        'proxy' => 'setProxy',
        'log_disk_quota' => 'setLogDiskQuota'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'snmp_index' => 'getSnmpIndex',
        'session' => 'getSession',
        'ipsec_phase1' => 'getIpsecPhase1',
        'ipsec_phase2' => 'getIpsecPhase2',
        'ipsec_phase1_interface' => 'getIpsecPhase1Interface',
        'ipsec_phase2_interface' => 'getIpsecPhase2Interface',
        'dialup_tunnel' => 'getDialupTunnel',
        'firewall_policy' => 'getFirewallPolicy',
        'firewall_address' => 'getFirewallAddress',
        'firewall_addrgrp' => 'getFirewallAddrgrp',
        'custom_service' => 'getCustomService',
        'service_group' => 'getServiceGroup',
        'onetime_schedule' => 'getOnetimeSchedule',
        'recurring_schedule' => 'getRecurringSchedule',
        'user' => 'getUser',
        'user_group' => 'getUserGroup',
        'sslvpn' => 'getSslvpn',
        'proxy' => 'getProxy',
        'log_disk_quota' => 'getLogDiskQuota'
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
        $this->container['description'] = $data['description'] ?? null;
        $this->container['snmp_index'] = $data['snmp_index'] ?? null;
        $this->container['session'] = $data['session'] ?? null;
        $this->container['ipsec_phase1'] = $data['ipsec_phase1'] ?? null;
        $this->container['ipsec_phase2'] = $data['ipsec_phase2'] ?? null;
        $this->container['ipsec_phase1_interface'] = $data['ipsec_phase1_interface'] ?? null;
        $this->container['ipsec_phase2_interface'] = $data['ipsec_phase2_interface'] ?? null;
        $this->container['dialup_tunnel'] = $data['dialup_tunnel'] ?? null;
        $this->container['firewall_policy'] = $data['firewall_policy'] ?? null;
        $this->container['firewall_address'] = $data['firewall_address'] ?? null;
        $this->container['firewall_addrgrp'] = $data['firewall_addrgrp'] ?? null;
        $this->container['custom_service'] = $data['custom_service'] ?? null;
        $this->container['service_group'] = $data['service_group'] ?? null;
        $this->container['onetime_schedule'] = $data['onetime_schedule'] ?? null;
        $this->container['recurring_schedule'] = $data['recurring_schedule'] ?? null;
        $this->container['user'] = $data['user'] ?? null;
        $this->container['user_group'] = $data['user_group'] ?? null;
        $this->container['sslvpn'] = $data['sslvpn'] ?? null;
        $this->container['proxy'] = $data['proxy'] ?? null;
        $this->container['log_disk_quota'] = $data['log_disk_quota'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 31)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 31.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 127)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 127.";
        }

        if (!is_null($this->container['snmp_index']) && ($this->container['snmp_index'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'snmp_index', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['snmp_index']) && ($this->container['snmp_index'] < 1)) {
            $invalidProperties[] = "invalid value for 'snmp_index', must be bigger than or equal to 1.";
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
     * @param string|null $name VDOM name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 31)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InlineObject401., must be smaller than or equal to 31.');
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
     * @param string|null $description Description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 127)) {
            throw new \InvalidArgumentException('invalid length for $description when calling InlineObject401., must be smaller than or equal to 127.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets snmp_index
     *
     * @return int|null
     */
    public function getSnmpIndex()
    {
        return $this->container['snmp_index'];
    }

    /**
     * Sets snmp_index
     *
     * @param int|null $snmp_index Permanent SNMP Index of the virtual domain (1 - 2147483647).
     *
     * @return self
     */
    public function setSnmpIndex($snmp_index)
    {

        if (!is_null($snmp_index) && ($snmp_index > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $snmp_index when calling InlineObject401., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($snmp_index) && ($snmp_index < 1)) {
            throw new \InvalidArgumentException('invalid value for $snmp_index when calling InlineObject401., must be bigger than or equal to 1.');
        }

        $this->container['snmp_index'] = $snmp_index;

        return $this;
    }

    /**
     * Gets session
     *
     * @return string|null
     */
    public function getSession()
    {
        return $this->container['session'];
    }

    /**
     * Sets session
     *
     * @param string|null $session Maximum guaranteed number of sessions.
     *
     * @return self
     */
    public function setSession($session)
    {
        $this->container['session'] = $session;

        return $this;
    }

    /**
     * Gets ipsec_phase1
     *
     * @return string|null
     */
    public function getIpsecPhase1()
    {
        return $this->container['ipsec_phase1'];
    }

    /**
     * Sets ipsec_phase1
     *
     * @param string|null $ipsec_phase1 Maximum guaranteed number of VPN IPsec phase 1 tunnels.
     *
     * @return self
     */
    public function setIpsecPhase1($ipsec_phase1)
    {
        $this->container['ipsec_phase1'] = $ipsec_phase1;

        return $this;
    }

    /**
     * Gets ipsec_phase2
     *
     * @return string|null
     */
    public function getIpsecPhase2()
    {
        return $this->container['ipsec_phase2'];
    }

    /**
     * Sets ipsec_phase2
     *
     * @param string|null $ipsec_phase2 Maximum guaranteed number of VPN IPsec phase 2 tunnels.
     *
     * @return self
     */
    public function setIpsecPhase2($ipsec_phase2)
    {
        $this->container['ipsec_phase2'] = $ipsec_phase2;

        return $this;
    }

    /**
     * Gets ipsec_phase1_interface
     *
     * @return string|null
     */
    public function getIpsecPhase1Interface()
    {
        return $this->container['ipsec_phase1_interface'];
    }

    /**
     * Sets ipsec_phase1_interface
     *
     * @param string|null $ipsec_phase1_interface Maximum guaranteed number of VPN IPsec phase1 interface tunnels.
     *
     * @return self
     */
    public function setIpsecPhase1Interface($ipsec_phase1_interface)
    {
        $this->container['ipsec_phase1_interface'] = $ipsec_phase1_interface;

        return $this;
    }

    /**
     * Gets ipsec_phase2_interface
     *
     * @return string|null
     */
    public function getIpsecPhase2Interface()
    {
        return $this->container['ipsec_phase2_interface'];
    }

    /**
     * Sets ipsec_phase2_interface
     *
     * @param string|null $ipsec_phase2_interface Maximum guaranteed number of VPN IPsec phase2 interface tunnels.
     *
     * @return self
     */
    public function setIpsecPhase2Interface($ipsec_phase2_interface)
    {
        $this->container['ipsec_phase2_interface'] = $ipsec_phase2_interface;

        return $this;
    }

    /**
     * Gets dialup_tunnel
     *
     * @return string|null
     */
    public function getDialupTunnel()
    {
        return $this->container['dialup_tunnel'];
    }

    /**
     * Sets dialup_tunnel
     *
     * @param string|null $dialup_tunnel Maximum guaranteed number of dial-up tunnels.
     *
     * @return self
     */
    public function setDialupTunnel($dialup_tunnel)
    {
        $this->container['dialup_tunnel'] = $dialup_tunnel;

        return $this;
    }

    /**
     * Gets firewall_policy
     *
     * @return string|null
     */
    public function getFirewallPolicy()
    {
        return $this->container['firewall_policy'];
    }

    /**
     * Sets firewall_policy
     *
     * @param string|null $firewall_policy Maximum guaranteed number of firewall policies (policy, policy46, policy64, DoS-policy4, DoS-policy6, multicast).
     *
     * @return self
     */
    public function setFirewallPolicy($firewall_policy)
    {
        $this->container['firewall_policy'] = $firewall_policy;

        return $this;
    }

    /**
     * Gets firewall_address
     *
     * @return string|null
     */
    public function getFirewallAddress()
    {
        return $this->container['firewall_address'];
    }

    /**
     * Sets firewall_address
     *
     * @param string|null $firewall_address Maximum guaranteed number of firewall addresses (IPv4, IPv6, multicast).
     *
     * @return self
     */
    public function setFirewallAddress($firewall_address)
    {
        $this->container['firewall_address'] = $firewall_address;

        return $this;
    }

    /**
     * Gets firewall_addrgrp
     *
     * @return string|null
     */
    public function getFirewallAddrgrp()
    {
        return $this->container['firewall_addrgrp'];
    }

    /**
     * Sets firewall_addrgrp
     *
     * @param string|null $firewall_addrgrp Maximum guaranteed number of firewall address groups (IPv4, IPv6).
     *
     * @return self
     */
    public function setFirewallAddrgrp($firewall_addrgrp)
    {
        $this->container['firewall_addrgrp'] = $firewall_addrgrp;

        return $this;
    }

    /**
     * Gets custom_service
     *
     * @return string|null
     */
    public function getCustomService()
    {
        return $this->container['custom_service'];
    }

    /**
     * Sets custom_service
     *
     * @param string|null $custom_service Maximum guaranteed number of firewall custom services.
     *
     * @return self
     */
    public function setCustomService($custom_service)
    {
        $this->container['custom_service'] = $custom_service;

        return $this;
    }

    /**
     * Gets service_group
     *
     * @return string|null
     */
    public function getServiceGroup()
    {
        return $this->container['service_group'];
    }

    /**
     * Sets service_group
     *
     * @param string|null $service_group Maximum guaranteed number of firewall service groups.
     *
     * @return self
     */
    public function setServiceGroup($service_group)
    {
        $this->container['service_group'] = $service_group;

        return $this;
    }

    /**
     * Gets onetime_schedule
     *
     * @return string|null
     */
    public function getOnetimeSchedule()
    {
        return $this->container['onetime_schedule'];
    }

    /**
     * Sets onetime_schedule
     *
     * @param string|null $onetime_schedule Maximum guaranteed number of firewall one-time schedules.
     *
     * @return self
     */
    public function setOnetimeSchedule($onetime_schedule)
    {
        $this->container['onetime_schedule'] = $onetime_schedule;

        return $this;
    }

    /**
     * Gets recurring_schedule
     *
     * @return string|null
     */
    public function getRecurringSchedule()
    {
        return $this->container['recurring_schedule'];
    }

    /**
     * Sets recurring_schedule
     *
     * @param string|null $recurring_schedule Maximum guaranteed number of firewall recurring schedules.
     *
     * @return self
     */
    public function setRecurringSchedule($recurring_schedule)
    {
        $this->container['recurring_schedule'] = $recurring_schedule;

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
     * @param string|null $user Maximum guaranteed number of local users.
     *
     * @return self
     */
    public function setUser($user)
    {
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
     * @param string|null $user_group Maximum guaranteed number of user groups.
     *
     * @return self
     */
    public function setUserGroup($user_group)
    {
        $this->container['user_group'] = $user_group;

        return $this;
    }

    /**
     * Gets sslvpn
     *
     * @return string|null
     */
    public function getSslvpn()
    {
        return $this->container['sslvpn'];
    }

    /**
     * Sets sslvpn
     *
     * @param string|null $sslvpn Maximum guaranteed number of SSL-VPNs.
     *
     * @return self
     */
    public function setSslvpn($sslvpn)
    {
        $this->container['sslvpn'] = $sslvpn;

        return $this;
    }

    /**
     * Gets proxy
     *
     * @return string|null
     */
    public function getProxy()
    {
        return $this->container['proxy'];
    }

    /**
     * Sets proxy
     *
     * @param string|null $proxy Maximum guaranteed number of concurrent proxy users.
     *
     * @return self
     */
    public function setProxy($proxy)
    {
        $this->container['proxy'] = $proxy;

        return $this;
    }

    /**
     * Gets log_disk_quota
     *
     * @return string|null
     */
    public function getLogDiskQuota()
    {
        return $this->container['log_disk_quota'];
    }

    /**
     * Sets log_disk_quota
     *
     * @param string|null $log_disk_quota Log disk quota in MB (range depends on how much disk space is available).
     *
     * @return self
     */
    public function setLogDiskQuota($log_disk_quota)
    {
        $this->container['log_disk_quota'] = $log_disk_quota;

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


