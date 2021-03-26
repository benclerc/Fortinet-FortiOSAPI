<?php
/**
 * InlineObject595
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
 * InlineObject595 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject595 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_595';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => 'string',
        'addrgrp_log' => 'string',
        'ble_log' => 'string',
        'clb_log' => 'string',
        'dhcp_starv_log' => 'string',
        'led_sched_log' => 'string',
        'radio_event_log' => 'string',
        'rogue_event_log' => 'string',
        'sta_event_log' => 'string',
        'sta_locate_log' => 'string',
        'wids_log' => 'string',
        'wtp_event_log' => 'string'
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
        'addrgrp_log' => null,
        'ble_log' => null,
        'clb_log' => null,
        'dhcp_starv_log' => null,
        'led_sched_log' => null,
        'radio_event_log' => null,
        'rogue_event_log' => null,
        'sta_event_log' => null,
        'sta_locate_log' => null,
        'wids_log' => null,
        'wtp_event_log' => null
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
        'addrgrp_log' => 'addrgrp-log',
        'ble_log' => 'ble-log',
        'clb_log' => 'clb-log',
        'dhcp_starv_log' => 'dhcp-starv-log',
        'led_sched_log' => 'led-sched-log',
        'radio_event_log' => 'radio-event-log',
        'rogue_event_log' => 'rogue-event-log',
        'sta_event_log' => 'sta-event-log',
        'sta_locate_log' => 'sta-locate-log',
        'wids_log' => 'wids-log',
        'wtp_event_log' => 'wtp-event-log'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'addrgrp_log' => 'setAddrgrpLog',
        'ble_log' => 'setBleLog',
        'clb_log' => 'setClbLog',
        'dhcp_starv_log' => 'setDhcpStarvLog',
        'led_sched_log' => 'setLedSchedLog',
        'radio_event_log' => 'setRadioEventLog',
        'rogue_event_log' => 'setRogueEventLog',
        'sta_event_log' => 'setStaEventLog',
        'sta_locate_log' => 'setStaLocateLog',
        'wids_log' => 'setWidsLog',
        'wtp_event_log' => 'setWtpEventLog'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'addrgrp_log' => 'getAddrgrpLog',
        'ble_log' => 'getBleLog',
        'clb_log' => 'getClbLog',
        'dhcp_starv_log' => 'getDhcpStarvLog',
        'led_sched_log' => 'getLedSchedLog',
        'radio_event_log' => 'getRadioEventLog',
        'rogue_event_log' => 'getRogueEventLog',
        'sta_event_log' => 'getStaEventLog',
        'sta_locate_log' => 'getStaLocateLog',
        'wids_log' => 'getWidsLog',
        'wtp_event_log' => 'getWtpEventLog'
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
    const ADDRGRP_LOG_EMERGENCY = 'emergency';
    const ADDRGRP_LOG_ALERT = 'alert';
    const ADDRGRP_LOG_CRITICAL = 'critical';
    const ADDRGRP_LOG_ERROR = 'error';
    const ADDRGRP_LOG_WARNING = 'warning';
    const ADDRGRP_LOG_NOTIFICATION = 'notification';
    const ADDRGRP_LOG_INFORMATION = 'information';
    const ADDRGRP_LOG_DEBUG = 'debug';
    const BLE_LOG_EMERGENCY = 'emergency';
    const BLE_LOG_ALERT = 'alert';
    const BLE_LOG_CRITICAL = 'critical';
    const BLE_LOG_ERROR = 'error';
    const BLE_LOG_WARNING = 'warning';
    const BLE_LOG_NOTIFICATION = 'notification';
    const BLE_LOG_INFORMATION = 'information';
    const BLE_LOG_DEBUG = 'debug';
    const CLB_LOG_EMERGENCY = 'emergency';
    const CLB_LOG_ALERT = 'alert';
    const CLB_LOG_CRITICAL = 'critical';
    const CLB_LOG_ERROR = 'error';
    const CLB_LOG_WARNING = 'warning';
    const CLB_LOG_NOTIFICATION = 'notification';
    const CLB_LOG_INFORMATION = 'information';
    const CLB_LOG_DEBUG = 'debug';
    const DHCP_STARV_LOG_EMERGENCY = 'emergency';
    const DHCP_STARV_LOG_ALERT = 'alert';
    const DHCP_STARV_LOG_CRITICAL = 'critical';
    const DHCP_STARV_LOG_ERROR = 'error';
    const DHCP_STARV_LOG_WARNING = 'warning';
    const DHCP_STARV_LOG_NOTIFICATION = 'notification';
    const DHCP_STARV_LOG_INFORMATION = 'information';
    const DHCP_STARV_LOG_DEBUG = 'debug';
    const LED_SCHED_LOG_EMERGENCY = 'emergency';
    const LED_SCHED_LOG_ALERT = 'alert';
    const LED_SCHED_LOG_CRITICAL = 'critical';
    const LED_SCHED_LOG_ERROR = 'error';
    const LED_SCHED_LOG_WARNING = 'warning';
    const LED_SCHED_LOG_NOTIFICATION = 'notification';
    const LED_SCHED_LOG_INFORMATION = 'information';
    const LED_SCHED_LOG_DEBUG = 'debug';
    const RADIO_EVENT_LOG_EMERGENCY = 'emergency';
    const RADIO_EVENT_LOG_ALERT = 'alert';
    const RADIO_EVENT_LOG_CRITICAL = 'critical';
    const RADIO_EVENT_LOG_ERROR = 'error';
    const RADIO_EVENT_LOG_WARNING = 'warning';
    const RADIO_EVENT_LOG_NOTIFICATION = 'notification';
    const RADIO_EVENT_LOG_INFORMATION = 'information';
    const RADIO_EVENT_LOG_DEBUG = 'debug';
    const ROGUE_EVENT_LOG_EMERGENCY = 'emergency';
    const ROGUE_EVENT_LOG_ALERT = 'alert';
    const ROGUE_EVENT_LOG_CRITICAL = 'critical';
    const ROGUE_EVENT_LOG_ERROR = 'error';
    const ROGUE_EVENT_LOG_WARNING = 'warning';
    const ROGUE_EVENT_LOG_NOTIFICATION = 'notification';
    const ROGUE_EVENT_LOG_INFORMATION = 'information';
    const ROGUE_EVENT_LOG_DEBUG = 'debug';
    const STA_EVENT_LOG_EMERGENCY = 'emergency';
    const STA_EVENT_LOG_ALERT = 'alert';
    const STA_EVENT_LOG_CRITICAL = 'critical';
    const STA_EVENT_LOG_ERROR = 'error';
    const STA_EVENT_LOG_WARNING = 'warning';
    const STA_EVENT_LOG_NOTIFICATION = 'notification';
    const STA_EVENT_LOG_INFORMATION = 'information';
    const STA_EVENT_LOG_DEBUG = 'debug';
    const STA_LOCATE_LOG_EMERGENCY = 'emergency';
    const STA_LOCATE_LOG_ALERT = 'alert';
    const STA_LOCATE_LOG_CRITICAL = 'critical';
    const STA_LOCATE_LOG_ERROR = 'error';
    const STA_LOCATE_LOG_WARNING = 'warning';
    const STA_LOCATE_LOG_NOTIFICATION = 'notification';
    const STA_LOCATE_LOG_INFORMATION = 'information';
    const STA_LOCATE_LOG_DEBUG = 'debug';
    const WIDS_LOG_EMERGENCY = 'emergency';
    const WIDS_LOG_ALERT = 'alert';
    const WIDS_LOG_CRITICAL = 'critical';
    const WIDS_LOG_ERROR = 'error';
    const WIDS_LOG_WARNING = 'warning';
    const WIDS_LOG_NOTIFICATION = 'notification';
    const WIDS_LOG_INFORMATION = 'information';
    const WIDS_LOG_DEBUG = 'debug';
    const WTP_EVENT_LOG_EMERGENCY = 'emergency';
    const WTP_EVENT_LOG_ALERT = 'alert';
    const WTP_EVENT_LOG_CRITICAL = 'critical';
    const WTP_EVENT_LOG_ERROR = 'error';
    const WTP_EVENT_LOG_WARNING = 'warning';
    const WTP_EVENT_LOG_NOTIFICATION = 'notification';
    const WTP_EVENT_LOG_INFORMATION = 'information';
    const WTP_EVENT_LOG_DEBUG = 'debug';
    

    
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
    public function getAddrgrpLogAllowableValues()
    {
        return [
            self::ADDRGRP_LOG_EMERGENCY,
            self::ADDRGRP_LOG_ALERT,
            self::ADDRGRP_LOG_CRITICAL,
            self::ADDRGRP_LOG_ERROR,
            self::ADDRGRP_LOG_WARNING,
            self::ADDRGRP_LOG_NOTIFICATION,
            self::ADDRGRP_LOG_INFORMATION,
            self::ADDRGRP_LOG_DEBUG,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBleLogAllowableValues()
    {
        return [
            self::BLE_LOG_EMERGENCY,
            self::BLE_LOG_ALERT,
            self::BLE_LOG_CRITICAL,
            self::BLE_LOG_ERROR,
            self::BLE_LOG_WARNING,
            self::BLE_LOG_NOTIFICATION,
            self::BLE_LOG_INFORMATION,
            self::BLE_LOG_DEBUG,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClbLogAllowableValues()
    {
        return [
            self::CLB_LOG_EMERGENCY,
            self::CLB_LOG_ALERT,
            self::CLB_LOG_CRITICAL,
            self::CLB_LOG_ERROR,
            self::CLB_LOG_WARNING,
            self::CLB_LOG_NOTIFICATION,
            self::CLB_LOG_INFORMATION,
            self::CLB_LOG_DEBUG,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDhcpStarvLogAllowableValues()
    {
        return [
            self::DHCP_STARV_LOG_EMERGENCY,
            self::DHCP_STARV_LOG_ALERT,
            self::DHCP_STARV_LOG_CRITICAL,
            self::DHCP_STARV_LOG_ERROR,
            self::DHCP_STARV_LOG_WARNING,
            self::DHCP_STARV_LOG_NOTIFICATION,
            self::DHCP_STARV_LOG_INFORMATION,
            self::DHCP_STARV_LOG_DEBUG,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLedSchedLogAllowableValues()
    {
        return [
            self::LED_SCHED_LOG_EMERGENCY,
            self::LED_SCHED_LOG_ALERT,
            self::LED_SCHED_LOG_CRITICAL,
            self::LED_SCHED_LOG_ERROR,
            self::LED_SCHED_LOG_WARNING,
            self::LED_SCHED_LOG_NOTIFICATION,
            self::LED_SCHED_LOG_INFORMATION,
            self::LED_SCHED_LOG_DEBUG,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRadioEventLogAllowableValues()
    {
        return [
            self::RADIO_EVENT_LOG_EMERGENCY,
            self::RADIO_EVENT_LOG_ALERT,
            self::RADIO_EVENT_LOG_CRITICAL,
            self::RADIO_EVENT_LOG_ERROR,
            self::RADIO_EVENT_LOG_WARNING,
            self::RADIO_EVENT_LOG_NOTIFICATION,
            self::RADIO_EVENT_LOG_INFORMATION,
            self::RADIO_EVENT_LOG_DEBUG,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRogueEventLogAllowableValues()
    {
        return [
            self::ROGUE_EVENT_LOG_EMERGENCY,
            self::ROGUE_EVENT_LOG_ALERT,
            self::ROGUE_EVENT_LOG_CRITICAL,
            self::ROGUE_EVENT_LOG_ERROR,
            self::ROGUE_EVENT_LOG_WARNING,
            self::ROGUE_EVENT_LOG_NOTIFICATION,
            self::ROGUE_EVENT_LOG_INFORMATION,
            self::ROGUE_EVENT_LOG_DEBUG,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStaEventLogAllowableValues()
    {
        return [
            self::STA_EVENT_LOG_EMERGENCY,
            self::STA_EVENT_LOG_ALERT,
            self::STA_EVENT_LOG_CRITICAL,
            self::STA_EVENT_LOG_ERROR,
            self::STA_EVENT_LOG_WARNING,
            self::STA_EVENT_LOG_NOTIFICATION,
            self::STA_EVENT_LOG_INFORMATION,
            self::STA_EVENT_LOG_DEBUG,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStaLocateLogAllowableValues()
    {
        return [
            self::STA_LOCATE_LOG_EMERGENCY,
            self::STA_LOCATE_LOG_ALERT,
            self::STA_LOCATE_LOG_CRITICAL,
            self::STA_LOCATE_LOG_ERROR,
            self::STA_LOCATE_LOG_WARNING,
            self::STA_LOCATE_LOG_NOTIFICATION,
            self::STA_LOCATE_LOG_INFORMATION,
            self::STA_LOCATE_LOG_DEBUG,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWidsLogAllowableValues()
    {
        return [
            self::WIDS_LOG_EMERGENCY,
            self::WIDS_LOG_ALERT,
            self::WIDS_LOG_CRITICAL,
            self::WIDS_LOG_ERROR,
            self::WIDS_LOG_WARNING,
            self::WIDS_LOG_NOTIFICATION,
            self::WIDS_LOG_INFORMATION,
            self::WIDS_LOG_DEBUG,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWtpEventLogAllowableValues()
    {
        return [
            self::WTP_EVENT_LOG_EMERGENCY,
            self::WTP_EVENT_LOG_ALERT,
            self::WTP_EVENT_LOG_CRITICAL,
            self::WTP_EVENT_LOG_ERROR,
            self::WTP_EVENT_LOG_WARNING,
            self::WTP_EVENT_LOG_NOTIFICATION,
            self::WTP_EVENT_LOG_INFORMATION,
            self::WTP_EVENT_LOG_DEBUG,
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
        $this->container['addrgrp_log'] = $data['addrgrp_log'] ?? null;
        $this->container['ble_log'] = $data['ble_log'] ?? null;
        $this->container['clb_log'] = $data['clb_log'] ?? null;
        $this->container['dhcp_starv_log'] = $data['dhcp_starv_log'] ?? null;
        $this->container['led_sched_log'] = $data['led_sched_log'] ?? null;
        $this->container['radio_event_log'] = $data['radio_event_log'] ?? null;
        $this->container['rogue_event_log'] = $data['rogue_event_log'] ?? null;
        $this->container['sta_event_log'] = $data['sta_event_log'] ?? null;
        $this->container['sta_locate_log'] = $data['sta_locate_log'] ?? null;
        $this->container['wids_log'] = $data['wids_log'] ?? null;
        $this->container['wtp_event_log'] = $data['wtp_event_log'] ?? null;
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

        $allowedValues = $this->getAddrgrpLogAllowableValues();
        if (!is_null($this->container['addrgrp_log']) && !in_array($this->container['addrgrp_log'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'addrgrp_log', must be one of '%s'",
                $this->container['addrgrp_log'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBleLogAllowableValues();
        if (!is_null($this->container['ble_log']) && !in_array($this->container['ble_log'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ble_log', must be one of '%s'",
                $this->container['ble_log'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getClbLogAllowableValues();
        if (!is_null($this->container['clb_log']) && !in_array($this->container['clb_log'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'clb_log', must be one of '%s'",
                $this->container['clb_log'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDhcpStarvLogAllowableValues();
        if (!is_null($this->container['dhcp_starv_log']) && !in_array($this->container['dhcp_starv_log'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dhcp_starv_log', must be one of '%s'",
                $this->container['dhcp_starv_log'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLedSchedLogAllowableValues();
        if (!is_null($this->container['led_sched_log']) && !in_array($this->container['led_sched_log'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'led_sched_log', must be one of '%s'",
                $this->container['led_sched_log'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRadioEventLogAllowableValues();
        if (!is_null($this->container['radio_event_log']) && !in_array($this->container['radio_event_log'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'radio_event_log', must be one of '%s'",
                $this->container['radio_event_log'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRogueEventLogAllowableValues();
        if (!is_null($this->container['rogue_event_log']) && !in_array($this->container['rogue_event_log'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'rogue_event_log', must be one of '%s'",
                $this->container['rogue_event_log'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStaEventLogAllowableValues();
        if (!is_null($this->container['sta_event_log']) && !in_array($this->container['sta_event_log'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sta_event_log', must be one of '%s'",
                $this->container['sta_event_log'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStaLocateLogAllowableValues();
        if (!is_null($this->container['sta_locate_log']) && !in_array($this->container['sta_locate_log'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sta_locate_log', must be one of '%s'",
                $this->container['sta_locate_log'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWidsLogAllowableValues();
        if (!is_null($this->container['wids_log']) && !in_array($this->container['wids_log'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'wids_log', must be one of '%s'",
                $this->container['wids_log'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWtpEventLogAllowableValues();
        if (!is_null($this->container['wtp_event_log']) && !in_array($this->container['wtp_event_log'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'wtp_event_log', must be one of '%s'",
                $this->container['wtp_event_log'],
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
     * @param string|null $status Enable/disable wireless event logging.    enable:Enable wireless event logging.    disable:Disable wireless event logging.
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
     * Gets addrgrp_log
     *
     * @return string|null
     */
    public function getAddrgrpLog()
    {
        return $this->container['addrgrp_log'];
    }

    /**
     * Sets addrgrp_log
     *
     * @param string|null $addrgrp_log Lowest severity level to log address group message.    emergency:Emergency level.    alert:Alert level.    critical:Critical level.    error:Error level.    warning:Warning level.    notification:Notification level.    information:Information level.    debug:Debug level.
     *
     * @return self
     */
    public function setAddrgrpLog($addrgrp_log)
    {
        $allowedValues = $this->getAddrgrpLogAllowableValues();
        if (!is_null($addrgrp_log) && !in_array($addrgrp_log, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'addrgrp_log', must be one of '%s'",
                    $addrgrp_log,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['addrgrp_log'] = $addrgrp_log;

        return $this;
    }

    /**
     * Gets ble_log
     *
     * @return string|null
     */
    public function getBleLog()
    {
        return $this->container['ble_log'];
    }

    /**
     * Sets ble_log
     *
     * @param string|null $ble_log Lowest severity level to log BLE detection message.    emergency:Emergency level.    alert:Alert level.    critical:Critical level.    error:Error level.    warning:Warning level.    notification:Notification level.    information:Information level.    debug:Debug level.
     *
     * @return self
     */
    public function setBleLog($ble_log)
    {
        $allowedValues = $this->getBleLogAllowableValues();
        if (!is_null($ble_log) && !in_array($ble_log, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ble_log', must be one of '%s'",
                    $ble_log,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ble_log'] = $ble_log;

        return $this;
    }

    /**
     * Gets clb_log
     *
     * @return string|null
     */
    public function getClbLog()
    {
        return $this->container['clb_log'];
    }

    /**
     * Sets clb_log
     *
     * @param string|null $clb_log Lowest severity level to log client load balancing message.    emergency:Emergency level.    alert:Alert level.    critical:Critical level.    error:Error level.    warning:Warning level.    notification:Notification level.    information:Information level.    debug:Debug level.
     *
     * @return self
     */
    public function setClbLog($clb_log)
    {
        $allowedValues = $this->getClbLogAllowableValues();
        if (!is_null($clb_log) && !in_array($clb_log, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'clb_log', must be one of '%s'",
                    $clb_log,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['clb_log'] = $clb_log;

        return $this;
    }

    /**
     * Gets dhcp_starv_log
     *
     * @return string|null
     */
    public function getDhcpStarvLog()
    {
        return $this->container['dhcp_starv_log'];
    }

    /**
     * Sets dhcp_starv_log
     *
     * @param string|null $dhcp_starv_log Lowest severity level to log DHCP starvation event message.    emergency:Emergency level.    alert:Alert level.    critical:Critical level.    error:Error level.    warning:Warning level.    notification:Notification level.    information:Information level.    debug:Debug level.
     *
     * @return self
     */
    public function setDhcpStarvLog($dhcp_starv_log)
    {
        $allowedValues = $this->getDhcpStarvLogAllowableValues();
        if (!is_null($dhcp_starv_log) && !in_array($dhcp_starv_log, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dhcp_starv_log', must be one of '%s'",
                    $dhcp_starv_log,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dhcp_starv_log'] = $dhcp_starv_log;

        return $this;
    }

    /**
     * Gets led_sched_log
     *
     * @return string|null
     */
    public function getLedSchedLog()
    {
        return $this->container['led_sched_log'];
    }

    /**
     * Sets led_sched_log
     *
     * @param string|null $led_sched_log Lowest severity level to log LED schedule event message.    emergency:Emergency level.    alert:Alert level.    critical:Critical level.    error:Error level.    warning:Warning level.    notification:Notification level.    information:Information level.    debug:Debug level.
     *
     * @return self
     */
    public function setLedSchedLog($led_sched_log)
    {
        $allowedValues = $this->getLedSchedLogAllowableValues();
        if (!is_null($led_sched_log) && !in_array($led_sched_log, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'led_sched_log', must be one of '%s'",
                    $led_sched_log,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['led_sched_log'] = $led_sched_log;

        return $this;
    }

    /**
     * Gets radio_event_log
     *
     * @return string|null
     */
    public function getRadioEventLog()
    {
        return $this->container['radio_event_log'];
    }

    /**
     * Sets radio_event_log
     *
     * @param string|null $radio_event_log Lowest severity level to log radio event message.    emergency:Emergency level.    alert:Alert level.    critical:Critical level.    error:Error level.    warning:Warning level.    notification:Notification level.    information:Information level.    debug:Debug level.
     *
     * @return self
     */
    public function setRadioEventLog($radio_event_log)
    {
        $allowedValues = $this->getRadioEventLogAllowableValues();
        if (!is_null($radio_event_log) && !in_array($radio_event_log, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'radio_event_log', must be one of '%s'",
                    $radio_event_log,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['radio_event_log'] = $radio_event_log;

        return $this;
    }

    /**
     * Gets rogue_event_log
     *
     * @return string|null
     */
    public function getRogueEventLog()
    {
        return $this->container['rogue_event_log'];
    }

    /**
     * Sets rogue_event_log
     *
     * @param string|null $rogue_event_log Lowest severity level to log rogue AP event message.    emergency:Emergency level.    alert:Alert level.    critical:Critical level.    error:Error level.    warning:Warning level.    notification:Notification level.    information:Information level.    debug:Debug level.
     *
     * @return self
     */
    public function setRogueEventLog($rogue_event_log)
    {
        $allowedValues = $this->getRogueEventLogAllowableValues();
        if (!is_null($rogue_event_log) && !in_array($rogue_event_log, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'rogue_event_log', must be one of '%s'",
                    $rogue_event_log,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rogue_event_log'] = $rogue_event_log;

        return $this;
    }

    /**
     * Gets sta_event_log
     *
     * @return string|null
     */
    public function getStaEventLog()
    {
        return $this->container['sta_event_log'];
    }

    /**
     * Sets sta_event_log
     *
     * @param string|null $sta_event_log Lowest severity level to log station event message.    emergency:Emergency level.    alert:Alert level.    critical:Critical level.    error:Error level.    warning:Warning level.    notification:Notification level.    information:Information level.    debug:Debug level.
     *
     * @return self
     */
    public function setStaEventLog($sta_event_log)
    {
        $allowedValues = $this->getStaEventLogAllowableValues();
        if (!is_null($sta_event_log) && !in_array($sta_event_log, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sta_event_log', must be one of '%s'",
                    $sta_event_log,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sta_event_log'] = $sta_event_log;

        return $this;
    }

    /**
     * Gets sta_locate_log
     *
     * @return string|null
     */
    public function getStaLocateLog()
    {
        return $this->container['sta_locate_log'];
    }

    /**
     * Sets sta_locate_log
     *
     * @param string|null $sta_locate_log Lowest severity level to log station locate message.    emergency:Emergency level.    alert:Alert level.    critical:Critical level.    error:Error level.    warning:Warning level.    notification:Notification level.    information:Information level.    debug:Debug level.
     *
     * @return self
     */
    public function setStaLocateLog($sta_locate_log)
    {
        $allowedValues = $this->getStaLocateLogAllowableValues();
        if (!is_null($sta_locate_log) && !in_array($sta_locate_log, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sta_locate_log', must be one of '%s'",
                    $sta_locate_log,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sta_locate_log'] = $sta_locate_log;

        return $this;
    }

    /**
     * Gets wids_log
     *
     * @return string|null
     */
    public function getWidsLog()
    {
        return $this->container['wids_log'];
    }

    /**
     * Sets wids_log
     *
     * @param string|null $wids_log Lowest severity level to log WIDS message.    emergency:Emergency level.    alert:Alert level.    critical:Critical level.    error:Error level.    warning:Warning level.    notification:Notification level.    information:Information level.    debug:Debug level.
     *
     * @return self
     */
    public function setWidsLog($wids_log)
    {
        $allowedValues = $this->getWidsLogAllowableValues();
        if (!is_null($wids_log) && !in_array($wids_log, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'wids_log', must be one of '%s'",
                    $wids_log,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['wids_log'] = $wids_log;

        return $this;
    }

    /**
     * Gets wtp_event_log
     *
     * @return string|null
     */
    public function getWtpEventLog()
    {
        return $this->container['wtp_event_log'];
    }

    /**
     * Sets wtp_event_log
     *
     * @param string|null $wtp_event_log Lowest severity level to log WTP event message.    emergency:Emergency level.    alert:Alert level.    critical:Critical level.    error:Error level.    warning:Warning level.    notification:Notification level.    information:Information level.    debug:Debug level.
     *
     * @return self
     */
    public function setWtpEventLog($wtp_event_log)
    {
        $allowedValues = $this->getWtpEventLogAllowableValues();
        if (!is_null($wtp_event_log) && !in_array($wtp_event_log, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'wtp_event_log', must be one of '%s'",
                    $wtp_event_log,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['wtp_event_log'] = $wtp_event_log;

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


