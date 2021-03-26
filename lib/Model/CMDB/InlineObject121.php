<?php
/**
 * InlineObject121
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
 * InlineObject121 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject121 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_121';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'severity' => 'string',
        'forward_traffic' => 'string',
        'local_traffic' => 'string',
        'multicast_traffic' => 'string',
        'sniffer_traffic' => 'string',
        'anomaly' => 'string',
        'voip' => 'string',
        'filter' => 'string',
        'filter_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'severity' => null,
        'forward_traffic' => null,
        'local_traffic' => null,
        'multicast_traffic' => null,
        'sniffer_traffic' => null,
        'anomaly' => null,
        'voip' => null,
        'filter' => null,
        'filter_type' => null
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
        'severity' => 'severity',
        'forward_traffic' => 'forward-traffic',
        'local_traffic' => 'local-traffic',
        'multicast_traffic' => 'multicast-traffic',
        'sniffer_traffic' => 'sniffer-traffic',
        'anomaly' => 'anomaly',
        'voip' => 'voip',
        'filter' => 'filter',
        'filter_type' => 'filter-type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'severity' => 'setSeverity',
        'forward_traffic' => 'setForwardTraffic',
        'local_traffic' => 'setLocalTraffic',
        'multicast_traffic' => 'setMulticastTraffic',
        'sniffer_traffic' => 'setSnifferTraffic',
        'anomaly' => 'setAnomaly',
        'voip' => 'setVoip',
        'filter' => 'setFilter',
        'filter_type' => 'setFilterType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'severity' => 'getSeverity',
        'forward_traffic' => 'getForwardTraffic',
        'local_traffic' => 'getLocalTraffic',
        'multicast_traffic' => 'getMulticastTraffic',
        'sniffer_traffic' => 'getSnifferTraffic',
        'anomaly' => 'getAnomaly',
        'voip' => 'getVoip',
        'filter' => 'getFilter',
        'filter_type' => 'getFilterType'
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

    const SEVERITY_EMERGENCY = 'emergency';
    const SEVERITY_ALERT = 'alert';
    const SEVERITY_CRITICAL = 'critical';
    const SEVERITY_ERROR = 'error';
    const SEVERITY_WARNING = 'warning';
    const SEVERITY_NOTIFICATION = 'notification';
    const SEVERITY_INFORMATION = 'information';
    const SEVERITY_DEBUG = 'debug';
    const FORWARD_TRAFFIC_ENABLE = 'enable';
    const FORWARD_TRAFFIC_DISABLE = 'disable';
    const LOCAL_TRAFFIC_ENABLE = 'enable';
    const LOCAL_TRAFFIC_DISABLE = 'disable';
    const MULTICAST_TRAFFIC_ENABLE = 'enable';
    const MULTICAST_TRAFFIC_DISABLE = 'disable';
    const SNIFFER_TRAFFIC_ENABLE = 'enable';
    const SNIFFER_TRAFFIC_DISABLE = 'disable';
    const ANOMALY_ENABLE = 'enable';
    const ANOMALY_DISABLE = 'disable';
    const VOIP_ENABLE = 'enable';
    const VOIP_DISABLE = 'disable';
    const FILTER_TYPE__INCLUDE = 'include';
    const FILTER_TYPE_EXCLUDE = 'exclude';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSeverityAllowableValues()
    {
        return [
            self::SEVERITY_EMERGENCY,
            self::SEVERITY_ALERT,
            self::SEVERITY_CRITICAL,
            self::SEVERITY_ERROR,
            self::SEVERITY_WARNING,
            self::SEVERITY_NOTIFICATION,
            self::SEVERITY_INFORMATION,
            self::SEVERITY_DEBUG,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getForwardTrafficAllowableValues()
    {
        return [
            self::FORWARD_TRAFFIC_ENABLE,
            self::FORWARD_TRAFFIC_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLocalTrafficAllowableValues()
    {
        return [
            self::LOCAL_TRAFFIC_ENABLE,
            self::LOCAL_TRAFFIC_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMulticastTrafficAllowableValues()
    {
        return [
            self::MULTICAST_TRAFFIC_ENABLE,
            self::MULTICAST_TRAFFIC_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSnifferTrafficAllowableValues()
    {
        return [
            self::SNIFFER_TRAFFIC_ENABLE,
            self::SNIFFER_TRAFFIC_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAnomalyAllowableValues()
    {
        return [
            self::ANOMALY_ENABLE,
            self::ANOMALY_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVoipAllowableValues()
    {
        return [
            self::VOIP_ENABLE,
            self::VOIP_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFilterTypeAllowableValues()
    {
        return [
            self::FILTER_TYPE__INCLUDE,
            self::FILTER_TYPE_EXCLUDE,
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
        $this->container['severity'] = $data['severity'] ?? null;
        $this->container['forward_traffic'] = $data['forward_traffic'] ?? null;
        $this->container['local_traffic'] = $data['local_traffic'] ?? null;
        $this->container['multicast_traffic'] = $data['multicast_traffic'] ?? null;
        $this->container['sniffer_traffic'] = $data['sniffer_traffic'] ?? null;
        $this->container['anomaly'] = $data['anomaly'] ?? null;
        $this->container['voip'] = $data['voip'] ?? null;
        $this->container['filter'] = $data['filter'] ?? null;
        $this->container['filter_type'] = $data['filter_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSeverityAllowableValues();
        if (!is_null($this->container['severity']) && !in_array($this->container['severity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'severity', must be one of '%s'",
                $this->container['severity'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getForwardTrafficAllowableValues();
        if (!is_null($this->container['forward_traffic']) && !in_array($this->container['forward_traffic'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'forward_traffic', must be one of '%s'",
                $this->container['forward_traffic'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLocalTrafficAllowableValues();
        if (!is_null($this->container['local_traffic']) && !in_array($this->container['local_traffic'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'local_traffic', must be one of '%s'",
                $this->container['local_traffic'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMulticastTrafficAllowableValues();
        if (!is_null($this->container['multicast_traffic']) && !in_array($this->container['multicast_traffic'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'multicast_traffic', must be one of '%s'",
                $this->container['multicast_traffic'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSnifferTrafficAllowableValues();
        if (!is_null($this->container['sniffer_traffic']) && !in_array($this->container['sniffer_traffic'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sniffer_traffic', must be one of '%s'",
                $this->container['sniffer_traffic'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAnomalyAllowableValues();
        if (!is_null($this->container['anomaly']) && !in_array($this->container['anomaly'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'anomaly', must be one of '%s'",
                $this->container['anomaly'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVoipAllowableValues();
        if (!is_null($this->container['voip']) && !in_array($this->container['voip'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'voip', must be one of '%s'",
                $this->container['voip'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['filter']) && (mb_strlen($this->container['filter']) > 1023)) {
            $invalidProperties[] = "invalid value for 'filter', the character length must be smaller than or equal to 1023.";
        }

        $allowedValues = $this->getFilterTypeAllowableValues();
        if (!is_null($this->container['filter_type']) && !in_array($this->container['filter_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'filter_type', must be one of '%s'",
                $this->container['filter_type'],
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
     * Gets severity
     *
     * @return string|null
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param string|null $severity Lowest severity level to log.    emergency:Emergency level.    alert:Alert level.    critical:Critical level.    error:Error level.    warning:Warning level.    notification:Notification level.    information:Information level.    debug:Debug level.
     *
     * @return self
     */
    public function setSeverity($severity)
    {
        $allowedValues = $this->getSeverityAllowableValues();
        if (!is_null($severity) && !in_array($severity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'severity', must be one of '%s'",
                    $severity,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['severity'] = $severity;

        return $this;
    }

    /**
     * Gets forward_traffic
     *
     * @return string|null
     */
    public function getForwardTraffic()
    {
        return $this->container['forward_traffic'];
    }

    /**
     * Sets forward_traffic
     *
     * @param string|null $forward_traffic Enable/disable forward traffic logging.    enable:Enable forward traffic logging.    disable:Disable forward traffic logging.
     *
     * @return self
     */
    public function setForwardTraffic($forward_traffic)
    {
        $allowedValues = $this->getForwardTrafficAllowableValues();
        if (!is_null($forward_traffic) && !in_array($forward_traffic, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'forward_traffic', must be one of '%s'",
                    $forward_traffic,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['forward_traffic'] = $forward_traffic;

        return $this;
    }

    /**
     * Gets local_traffic
     *
     * @return string|null
     */
    public function getLocalTraffic()
    {
        return $this->container['local_traffic'];
    }

    /**
     * Sets local_traffic
     *
     * @param string|null $local_traffic Enable/disable local in or out traffic logging.    enable:Enable local in or out traffic logging.    disable:Disable local in or out traffic logging.
     *
     * @return self
     */
    public function setLocalTraffic($local_traffic)
    {
        $allowedValues = $this->getLocalTrafficAllowableValues();
        if (!is_null($local_traffic) && !in_array($local_traffic, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'local_traffic', must be one of '%s'",
                    $local_traffic,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['local_traffic'] = $local_traffic;

        return $this;
    }

    /**
     * Gets multicast_traffic
     *
     * @return string|null
     */
    public function getMulticastTraffic()
    {
        return $this->container['multicast_traffic'];
    }

    /**
     * Sets multicast_traffic
     *
     * @param string|null $multicast_traffic Enable/disable multicast traffic logging.    enable:Enable multicast traffic logging.    disable:Disable multicast traffic logging.
     *
     * @return self
     */
    public function setMulticastTraffic($multicast_traffic)
    {
        $allowedValues = $this->getMulticastTrafficAllowableValues();
        if (!is_null($multicast_traffic) && !in_array($multicast_traffic, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'multicast_traffic', must be one of '%s'",
                    $multicast_traffic,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['multicast_traffic'] = $multicast_traffic;

        return $this;
    }

    /**
     * Gets sniffer_traffic
     *
     * @return string|null
     */
    public function getSnifferTraffic()
    {
        return $this->container['sniffer_traffic'];
    }

    /**
     * Sets sniffer_traffic
     *
     * @param string|null $sniffer_traffic Enable/disable sniffer traffic logging.    enable:Enable sniffer traffic logging.    disable:Disable sniffer traffic logging.
     *
     * @return self
     */
    public function setSnifferTraffic($sniffer_traffic)
    {
        $allowedValues = $this->getSnifferTrafficAllowableValues();
        if (!is_null($sniffer_traffic) && !in_array($sniffer_traffic, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sniffer_traffic', must be one of '%s'",
                    $sniffer_traffic,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sniffer_traffic'] = $sniffer_traffic;

        return $this;
    }

    /**
     * Gets anomaly
     *
     * @return string|null
     */
    public function getAnomaly()
    {
        return $this->container['anomaly'];
    }

    /**
     * Sets anomaly
     *
     * @param string|null $anomaly Enable/disable anomaly logging.    enable:Enable anomaly logging.    disable:Disable anomaly logging.
     *
     * @return self
     */
    public function setAnomaly($anomaly)
    {
        $allowedValues = $this->getAnomalyAllowableValues();
        if (!is_null($anomaly) && !in_array($anomaly, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'anomaly', must be one of '%s'",
                    $anomaly,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['anomaly'] = $anomaly;

        return $this;
    }

    /**
     * Gets voip
     *
     * @return string|null
     */
    public function getVoip()
    {
        return $this->container['voip'];
    }

    /**
     * Sets voip
     *
     * @param string|null $voip Enable/disable VoIP logging.    enable:Enable VoIP logging.    disable:Disable VoIP logging.
     *
     * @return self
     */
    public function setVoip($voip)
    {
        $allowedValues = $this->getVoipAllowableValues();
        if (!is_null($voip) && !in_array($voip, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'voip', must be one of '%s'",
                    $voip,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['voip'] = $voip;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return string|null
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param string|null $filter Syslog 3 filter.
     *
     * @return self
     */
    public function setFilter($filter)
    {
        if (!is_null($filter) && (mb_strlen($filter) > 1023)) {
            throw new \InvalidArgumentException('invalid length for $filter when calling InlineObject121., must be smaller than or equal to 1023.');
        }

        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets filter_type
     *
     * @return string|null
     */
    public function getFilterType()
    {
        return $this->container['filter_type'];
    }

    /**
     * Sets filter_type
     *
     * @param string|null $filter_type Include/exclude logs that match the filter.    include:Include logs that match the filter.    exclude:Exclude logs that match the filter.
     *
     * @return self
     */
    public function setFilterType($filter_type)
    {
        $allowedValues = $this->getFilterTypeAllowableValues();
        if (!is_null($filter_type) && !in_array($filter_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'filter_type', must be one of '%s'",
                    $filter_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['filter_type'] = $filter_type;

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


