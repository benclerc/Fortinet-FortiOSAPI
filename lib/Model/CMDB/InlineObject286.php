<?php
/**
 * InlineObject286
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
 * InlineObject286 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject286 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_286';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sync_id' => 'int',
        'peervd' => 'string',
        'peerip' => 'string',
        'syncvd' => '\Fortigate\FortiOS\Model\CMDB\SystemClusterSyncSyncIdSyncvd[]',
        'down_intfs_before_sess_sync' => '\Fortigate\FortiOS\Model\CMDB\RouterPolicySeqNumInputDevice[]',
        'hb_interval' => 'int',
        'hb_lost_threshold' => 'int',
        'ipsec_tunnel_sync' => 'string',
        'slave_add_ike_routes' => 'string',
        'session_sync_filter' => '\Fortigate\FortiOS\Model\CMDB\SystemClusterSyncSyncIdSessionSyncFilter[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sync_id' => null,
        'peervd' => null,
        'peerip' => 'ipv4',
        'syncvd' => null,
        'down_intfs_before_sess_sync' => null,
        'hb_interval' => null,
        'hb_lost_threshold' => null,
        'ipsec_tunnel_sync' => null,
        'slave_add_ike_routes' => null,
        'session_sync_filter' => null
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
        'sync_id' => 'sync-id',
        'peervd' => 'peervd',
        'peerip' => 'peerip',
        'syncvd' => 'syncvd',
        'down_intfs_before_sess_sync' => 'down-intfs-before-sess-sync',
        'hb_interval' => 'hb-interval',
        'hb_lost_threshold' => 'hb-lost-threshold',
        'ipsec_tunnel_sync' => 'ipsec-tunnel-sync',
        'slave_add_ike_routes' => 'slave-add-ike-routes',
        'session_sync_filter' => 'session-sync-filter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sync_id' => 'setSyncId',
        'peervd' => 'setPeervd',
        'peerip' => 'setPeerip',
        'syncvd' => 'setSyncvd',
        'down_intfs_before_sess_sync' => 'setDownIntfsBeforeSessSync',
        'hb_interval' => 'setHbInterval',
        'hb_lost_threshold' => 'setHbLostThreshold',
        'ipsec_tunnel_sync' => 'setIpsecTunnelSync',
        'slave_add_ike_routes' => 'setSlaveAddIkeRoutes',
        'session_sync_filter' => 'setSessionSyncFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sync_id' => 'getSyncId',
        'peervd' => 'getPeervd',
        'peerip' => 'getPeerip',
        'syncvd' => 'getSyncvd',
        'down_intfs_before_sess_sync' => 'getDownIntfsBeforeSessSync',
        'hb_interval' => 'getHbInterval',
        'hb_lost_threshold' => 'getHbLostThreshold',
        'ipsec_tunnel_sync' => 'getIpsecTunnelSync',
        'slave_add_ike_routes' => 'getSlaveAddIkeRoutes',
        'session_sync_filter' => 'getSessionSyncFilter'
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

    const IPSEC_TUNNEL_SYNC_ENABLE = 'enable';
    const IPSEC_TUNNEL_SYNC_DISABLE = 'disable';
    const SLAVE_ADD_IKE_ROUTES_ENABLE = 'enable';
    const SLAVE_ADD_IKE_ROUTES_DISABLE = 'disable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIpsecTunnelSyncAllowableValues()
    {
        return [
            self::IPSEC_TUNNEL_SYNC_ENABLE,
            self::IPSEC_TUNNEL_SYNC_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSlaveAddIkeRoutesAllowableValues()
    {
        return [
            self::SLAVE_ADD_IKE_ROUTES_ENABLE,
            self::SLAVE_ADD_IKE_ROUTES_DISABLE,
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
        $this->container['sync_id'] = $data['sync_id'] ?? null;
        $this->container['peervd'] = $data['peervd'] ?? null;
        $this->container['peerip'] = $data['peerip'] ?? null;
        $this->container['syncvd'] = $data['syncvd'] ?? null;
        $this->container['down_intfs_before_sess_sync'] = $data['down_intfs_before_sess_sync'] ?? null;
        $this->container['hb_interval'] = $data['hb_interval'] ?? null;
        $this->container['hb_lost_threshold'] = $data['hb_lost_threshold'] ?? null;
        $this->container['ipsec_tunnel_sync'] = $data['ipsec_tunnel_sync'] ?? null;
        $this->container['slave_add_ike_routes'] = $data['slave_add_ike_routes'] ?? null;
        $this->container['session_sync_filter'] = $data['session_sync_filter'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['sync_id']) && ($this->container['sync_id'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'sync_id', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['sync_id']) && ($this->container['sync_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'sync_id', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['peervd']) && (mb_strlen($this->container['peervd']) > 31)) {
            $invalidProperties[] = "invalid value for 'peervd', the character length must be smaller than or equal to 31.";
        }

        if (!is_null($this->container['syncvd']) && (count($this->container['syncvd']) > 0)) {
            $invalidProperties[] = "invalid value for 'syncvd', number of items must be less than or equal to 0.";
        }

        if (!is_null($this->container['down_intfs_before_sess_sync']) && (count($this->container['down_intfs_before_sess_sync']) > 0)) {
            $invalidProperties[] = "invalid value for 'down_intfs_before_sess_sync', number of items must be less than or equal to 0.";
        }

        if (!is_null($this->container['hb_interval']) && ($this->container['hb_interval'] > 10)) {
            $invalidProperties[] = "invalid value for 'hb_interval', must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['hb_interval']) && ($this->container['hb_interval'] < 1)) {
            $invalidProperties[] = "invalid value for 'hb_interval', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['hb_lost_threshold']) && ($this->container['hb_lost_threshold'] > 10)) {
            $invalidProperties[] = "invalid value for 'hb_lost_threshold', must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['hb_lost_threshold']) && ($this->container['hb_lost_threshold'] < 1)) {
            $invalidProperties[] = "invalid value for 'hb_lost_threshold', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getIpsecTunnelSyncAllowableValues();
        if (!is_null($this->container['ipsec_tunnel_sync']) && !in_array($this->container['ipsec_tunnel_sync'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ipsec_tunnel_sync', must be one of '%s'",
                $this->container['ipsec_tunnel_sync'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSlaveAddIkeRoutesAllowableValues();
        if (!is_null($this->container['slave_add_ike_routes']) && !in_array($this->container['slave_add_ike_routes'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'slave_add_ike_routes', must be one of '%s'",
                $this->container['slave_add_ike_routes'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['session_sync_filter']) && (count($this->container['session_sync_filter']) > 0)) {
            $invalidProperties[] = "invalid value for 'session_sync_filter', number of items must be less than or equal to 0.";
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
     * Gets sync_id
     *
     * @return int|null
     */
    public function getSyncId()
    {
        return $this->container['sync_id'];
    }

    /**
     * Sets sync_id
     *
     * @param int|null $sync_id Sync ID.
     *
     * @return self
     */
    public function setSyncId($sync_id)
    {

        if (!is_null($sync_id) && ($sync_id > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $sync_id when calling InlineObject286., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($sync_id) && ($sync_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $sync_id when calling InlineObject286., must be bigger than or equal to 0.');
        }

        $this->container['sync_id'] = $sync_id;

        return $this;
    }

    /**
     * Gets peervd
     *
     * @return string|null
     */
    public function getPeervd()
    {
        return $this->container['peervd'];
    }

    /**
     * Sets peervd
     *
     * @param string|null $peervd VDOM that contains the session synchronization link interface on the peer unit. Usually both peers would have the same peervd.
     *
     * @return self
     */
    public function setPeervd($peervd)
    {
        if (!is_null($peervd) && (mb_strlen($peervd) > 31)) {
            throw new \InvalidArgumentException('invalid length for $peervd when calling InlineObject286., must be smaller than or equal to 31.');
        }

        $this->container['peervd'] = $peervd;

        return $this;
    }

    /**
     * Gets peerip
     *
     * @return string|null
     */
    public function getPeerip()
    {
        return $this->container['peerip'];
    }

    /**
     * Sets peerip
     *
     * @param string|null $peerip IP address of the interface on the peer unit that is used for the session synchronization link.
     *
     * @return self
     */
    public function setPeerip($peerip)
    {
        $this->container['peerip'] = $peerip;

        return $this;
    }

    /**
     * Gets syncvd
     *
     * @return \Fortigate\FortiOS\Model\CMDB\SystemClusterSyncSyncIdSyncvd[]|null
     */
    public function getSyncvd()
    {
        return $this->container['syncvd'];
    }

    /**
     * Sets syncvd
     *
     * @param \Fortigate\FortiOS\Model\CMDB\SystemClusterSyncSyncIdSyncvd[]|null $syncvd Sessions from these VDOMs are synchronized using this session synchronization configuration.
     *
     * @return self
     */
    public function setSyncvd($syncvd)
    {

        if (!is_null($syncvd) && (count($syncvd) > 0)) {
            throw new \InvalidArgumentException('invalid value for $syncvd when calling InlineObject286., number of items must be less than or equal to 0.');
        }
        $this->container['syncvd'] = $syncvd;

        return $this;
    }

    /**
     * Gets down_intfs_before_sess_sync
     *
     * @return \Fortigate\FortiOS\Model\CMDB\RouterPolicySeqNumInputDevice[]|null
     */
    public function getDownIntfsBeforeSessSync()
    {
        return $this->container['down_intfs_before_sess_sync'];
    }

    /**
     * Sets down_intfs_before_sess_sync
     *
     * @param \Fortigate\FortiOS\Model\CMDB\RouterPolicySeqNumInputDevice[]|null $down_intfs_before_sess_sync List of interfaces to be turned down before session synchronization is complete.
     *
     * @return self
     */
    public function setDownIntfsBeforeSessSync($down_intfs_before_sess_sync)
    {

        if (!is_null($down_intfs_before_sess_sync) && (count($down_intfs_before_sess_sync) > 0)) {
            throw new \InvalidArgumentException('invalid value for $down_intfs_before_sess_sync when calling InlineObject286., number of items must be less than or equal to 0.');
        }
        $this->container['down_intfs_before_sess_sync'] = $down_intfs_before_sess_sync;

        return $this;
    }

    /**
     * Gets hb_interval
     *
     * @return int|null
     */
    public function getHbInterval()
    {
        return $this->container['hb_interval'];
    }

    /**
     * Sets hb_interval
     *
     * @param int|null $hb_interval Heartbeat interval (1 - 10 sec).
     *
     * @return self
     */
    public function setHbInterval($hb_interval)
    {

        if (!is_null($hb_interval) && ($hb_interval > 10)) {
            throw new \InvalidArgumentException('invalid value for $hb_interval when calling InlineObject286., must be smaller than or equal to 10.');
        }
        if (!is_null($hb_interval) && ($hb_interval < 1)) {
            throw new \InvalidArgumentException('invalid value for $hb_interval when calling InlineObject286., must be bigger than or equal to 1.');
        }

        $this->container['hb_interval'] = $hb_interval;

        return $this;
    }

    /**
     * Gets hb_lost_threshold
     *
     * @return int|null
     */
    public function getHbLostThreshold()
    {
        return $this->container['hb_lost_threshold'];
    }

    /**
     * Sets hb_lost_threshold
     *
     * @param int|null $hb_lost_threshold Lost heartbeat threshold (1 - 10).
     *
     * @return self
     */
    public function setHbLostThreshold($hb_lost_threshold)
    {

        if (!is_null($hb_lost_threshold) && ($hb_lost_threshold > 10)) {
            throw new \InvalidArgumentException('invalid value for $hb_lost_threshold when calling InlineObject286., must be smaller than or equal to 10.');
        }
        if (!is_null($hb_lost_threshold) && ($hb_lost_threshold < 1)) {
            throw new \InvalidArgumentException('invalid value for $hb_lost_threshold when calling InlineObject286., must be bigger than or equal to 1.');
        }

        $this->container['hb_lost_threshold'] = $hb_lost_threshold;

        return $this;
    }

    /**
     * Gets ipsec_tunnel_sync
     *
     * @return string|null
     */
    public function getIpsecTunnelSync()
    {
        return $this->container['ipsec_tunnel_sync'];
    }

    /**
     * Sets ipsec_tunnel_sync
     *
     * @param string|null $ipsec_tunnel_sync Enable/disable IPsec tunnel synchronization.    enable:Enable IPsec tunnel synchronization.    disable:Disable IPsec tunnel synchronization.
     *
     * @return self
     */
    public function setIpsecTunnelSync($ipsec_tunnel_sync)
    {
        $allowedValues = $this->getIpsecTunnelSyncAllowableValues();
        if (!is_null($ipsec_tunnel_sync) && !in_array($ipsec_tunnel_sync, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ipsec_tunnel_sync', must be one of '%s'",
                    $ipsec_tunnel_sync,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ipsec_tunnel_sync'] = $ipsec_tunnel_sync;

        return $this;
    }

    /**
     * Gets slave_add_ike_routes
     *
     * @return string|null
     */
    public function getSlaveAddIkeRoutes()
    {
        return $this->container['slave_add_ike_routes'];
    }

    /**
     * Sets slave_add_ike_routes
     *
     * @param string|null $slave_add_ike_routes Enable/disable IKE route announcement on the backup unit.    enable:Add IKE routes to the backup unit.    disable:Do not add IKE routes to the backup unit.
     *
     * @return self
     */
    public function setSlaveAddIkeRoutes($slave_add_ike_routes)
    {
        $allowedValues = $this->getSlaveAddIkeRoutesAllowableValues();
        if (!is_null($slave_add_ike_routes) && !in_array($slave_add_ike_routes, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'slave_add_ike_routes', must be one of '%s'",
                    $slave_add_ike_routes,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['slave_add_ike_routes'] = $slave_add_ike_routes;

        return $this;
    }

    /**
     * Gets session_sync_filter
     *
     * @return \Fortigate\FortiOS\Model\CMDB\SystemClusterSyncSyncIdSessionSyncFilter[]|null
     */
    public function getSessionSyncFilter()
    {
        return $this->container['session_sync_filter'];
    }

    /**
     * Sets session_sync_filter
     *
     * @param \Fortigate\FortiOS\Model\CMDB\SystemClusterSyncSyncIdSessionSyncFilter[]|null $session_sync_filter Add one or more filters if you only want to synchronize some sessions. Use the filter to configure the types of sessions to synchronize.
     *
     * @return self
     */
    public function setSessionSyncFilter($session_sync_filter)
    {

        if (!is_null($session_sync_filter) && (count($session_sync_filter) > 0)) {
            throw new \InvalidArgumentException('invalid value for $session_sync_filter when calling InlineObject286., number of items must be less than or equal to 0.');
        }
        $this->container['session_sync_filter'] = $session_sync_filter;

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


