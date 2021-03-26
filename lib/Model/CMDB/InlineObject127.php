<?php
/**
 * InlineObject127
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
 * InlineObject127 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject127 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_127';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => 'string',
        'server' => 'string',
        'mode' => 'string',
        'port' => 'int',
        'facility' => 'string',
        'source_ip' => 'string',
        'format' => 'string',
        'priority' => 'string',
        'max_log_rate' => 'int',
        'enc_algorithm' => 'string',
        'ssl_min_proto_version' => 'string',
        'certificate' => 'string',
        'custom_field_name' => '\Fortigate\FortiOS\Model\CMDB\LogSyslogdOverrideSettingCustomFieldName[]',
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
        'status' => null,
        'server' => null,
        'mode' => null,
        'port' => null,
        'facility' => null,
        'source_ip' => null,
        'format' => null,
        'priority' => null,
        'max_log_rate' => null,
        'enc_algorithm' => null,
        'ssl_min_proto_version' => null,
        'certificate' => null,
        'custom_field_name' => null,
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
        'status' => 'status',
        'server' => 'server',
        'mode' => 'mode',
        'port' => 'port',
        'facility' => 'facility',
        'source_ip' => 'source-ip',
        'format' => 'format',
        'priority' => 'priority',
        'max_log_rate' => 'max-log-rate',
        'enc_algorithm' => 'enc-algorithm',
        'ssl_min_proto_version' => 'ssl-min-proto-version',
        'certificate' => 'certificate',
        'custom_field_name' => 'custom-field-name',
        'interface_select_method' => 'interface-select-method',
        'interface' => 'interface'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'server' => 'setServer',
        'mode' => 'setMode',
        'port' => 'setPort',
        'facility' => 'setFacility',
        'source_ip' => 'setSourceIp',
        'format' => 'setFormat',
        'priority' => 'setPriority',
        'max_log_rate' => 'setMaxLogRate',
        'enc_algorithm' => 'setEncAlgorithm',
        'ssl_min_proto_version' => 'setSslMinProtoVersion',
        'certificate' => 'setCertificate',
        'custom_field_name' => 'setCustomFieldName',
        'interface_select_method' => 'setInterfaceSelectMethod',
        'interface' => 'setInterface'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'server' => 'getServer',
        'mode' => 'getMode',
        'port' => 'getPort',
        'facility' => 'getFacility',
        'source_ip' => 'getSourceIp',
        'format' => 'getFormat',
        'priority' => 'getPriority',
        'max_log_rate' => 'getMaxLogRate',
        'enc_algorithm' => 'getEncAlgorithm',
        'ssl_min_proto_version' => 'getSslMinProtoVersion',
        'certificate' => 'getCertificate',
        'custom_field_name' => 'getCustomFieldName',
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
    const MODE_UDP = 'udp';
    const MODE_LEGACY_RELIABLE = 'legacy-reliable';
    const MODE_RELIABLE = 'reliable';
    const FACILITY_KERNEL = 'kernel';
    const FACILITY_USER = 'user';
    const FACILITY_MAIL = 'mail';
    const FACILITY_DAEMON = 'daemon';
    const FACILITY_AUTH = 'auth';
    const FACILITY_SYSLOG = 'syslog';
    const FACILITY_LPR = 'lpr';
    const FACILITY_NEWS = 'news';
    const FACILITY_UUCP = 'uucp';
    const FACILITY_CRON = 'cron';
    const FACILITY_AUTHPRIV = 'authpriv';
    const FACILITY_FTP = 'ftp';
    const FACILITY_NTP = 'ntp';
    const FACILITY_AUDIT = 'audit';
    const FACILITY_ALERT = 'alert';
    const FACILITY_CLOCK = 'clock';
    const FACILITY_LOCAL0 = 'local0';
    const FACILITY_LOCAL1 = 'local1';
    const FACILITY_LOCAL2 = 'local2';
    const FACILITY_LOCAL3 = 'local3';
    const FACILITY_LOCAL4 = 'local4';
    const FACILITY_LOCAL5 = 'local5';
    const FACILITY_LOCAL6 = 'local6';
    const FACILITY_LOCAL7 = 'local7';
    const FORMAT__DEFAULT = 'default';
    const FORMAT_CSV = 'csv';
    const FORMAT_CEF = 'cef';
    const PRIORITY__DEFAULT = 'default';
    const PRIORITY_LOW = 'low';
    const ENC_ALGORITHM_HIGH_MEDIUM = 'high-medium';
    const ENC_ALGORITHM_HIGH = 'high';
    const ENC_ALGORITHM_LOW = 'low';
    const ENC_ALGORITHM_DISABLE = 'disable';
    const SSL_MIN_PROTO_VERSION__DEFAULT = 'default';
    const SSL_MIN_PROTO_VERSION_SSLV3 = 'SSLv3';
    const SSL_MIN_PROTO_VERSION_TLSV1 = 'TLSv1';
    const SSL_MIN_PROTO_VERSION_TLSV1_1 = 'TLSv1-1';
    const SSL_MIN_PROTO_VERSION_TLSV1_2 = 'TLSv1-2';
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
    public function getModeAllowableValues()
    {
        return [
            self::MODE_UDP,
            self::MODE_LEGACY_RELIABLE,
            self::MODE_RELIABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFacilityAllowableValues()
    {
        return [
            self::FACILITY_KERNEL,
            self::FACILITY_USER,
            self::FACILITY_MAIL,
            self::FACILITY_DAEMON,
            self::FACILITY_AUTH,
            self::FACILITY_SYSLOG,
            self::FACILITY_LPR,
            self::FACILITY_NEWS,
            self::FACILITY_UUCP,
            self::FACILITY_CRON,
            self::FACILITY_AUTHPRIV,
            self::FACILITY_FTP,
            self::FACILITY_NTP,
            self::FACILITY_AUDIT,
            self::FACILITY_ALERT,
            self::FACILITY_CLOCK,
            self::FACILITY_LOCAL0,
            self::FACILITY_LOCAL1,
            self::FACILITY_LOCAL2,
            self::FACILITY_LOCAL3,
            self::FACILITY_LOCAL4,
            self::FACILITY_LOCAL5,
            self::FACILITY_LOCAL6,
            self::FACILITY_LOCAL7,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT__DEFAULT,
            self::FORMAT_CSV,
            self::FORMAT_CEF,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPriorityAllowableValues()
    {
        return [
            self::PRIORITY__DEFAULT,
            self::PRIORITY_LOW,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEncAlgorithmAllowableValues()
    {
        return [
            self::ENC_ALGORITHM_HIGH_MEDIUM,
            self::ENC_ALGORITHM_HIGH,
            self::ENC_ALGORITHM_LOW,
            self::ENC_ALGORITHM_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSslMinProtoVersionAllowableValues()
    {
        return [
            self::SSL_MIN_PROTO_VERSION__DEFAULT,
            self::SSL_MIN_PROTO_VERSION_SSLV3,
            self::SSL_MIN_PROTO_VERSION_TLSV1,
            self::SSL_MIN_PROTO_VERSION_TLSV1_1,
            self::SSL_MIN_PROTO_VERSION_TLSV1_2,
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['server'] = $data['server'] ?? null;
        $this->container['mode'] = $data['mode'] ?? null;
        $this->container['port'] = $data['port'] ?? null;
        $this->container['facility'] = $data['facility'] ?? null;
        $this->container['source_ip'] = $data['source_ip'] ?? null;
        $this->container['format'] = $data['format'] ?? null;
        $this->container['priority'] = $data['priority'] ?? null;
        $this->container['max_log_rate'] = $data['max_log_rate'] ?? null;
        $this->container['enc_algorithm'] = $data['enc_algorithm'] ?? null;
        $this->container['ssl_min_proto_version'] = $data['ssl_min_proto_version'] ?? null;
        $this->container['certificate'] = $data['certificate'] ?? null;
        $this->container['custom_field_name'] = $data['custom_field_name'] ?? null;
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['server']) && (mb_strlen($this->container['server']) > 127)) {
            $invalidProperties[] = "invalid value for 'server', the character length must be smaller than or equal to 127.";
        }

        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mode', must be one of '%s'",
                $this->container['mode'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['port']) && ($this->container['port'] > 65535)) {
            $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['port']) && ($this->container['port'] < 0)) {
            $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getFacilityAllowableValues();
        if (!is_null($this->container['facility']) && !in_array($this->container['facility'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'facility', must be one of '%s'",
                $this->container['facility'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['source_ip']) && (mb_strlen($this->container['source_ip']) > 63)) {
            $invalidProperties[] = "invalid value for 'source_ip', the character length must be smaller than or equal to 63.";
        }

        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'format', must be one of '%s'",
                $this->container['format'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPriorityAllowableValues();
        if (!is_null($this->container['priority']) && !in_array($this->container['priority'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'priority', must be one of '%s'",
                $this->container['priority'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['max_log_rate']) && ($this->container['max_log_rate'] > 100000)) {
            $invalidProperties[] = "invalid value for 'max_log_rate', must be smaller than or equal to 100000.";
        }

        if (!is_null($this->container['max_log_rate']) && ($this->container['max_log_rate'] < 0)) {
            $invalidProperties[] = "invalid value for 'max_log_rate', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getEncAlgorithmAllowableValues();
        if (!is_null($this->container['enc_algorithm']) && !in_array($this->container['enc_algorithm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'enc_algorithm', must be one of '%s'",
                $this->container['enc_algorithm'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSslMinProtoVersionAllowableValues();
        if (!is_null($this->container['ssl_min_proto_version']) && !in_array($this->container['ssl_min_proto_version'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ssl_min_proto_version', must be one of '%s'",
                $this->container['ssl_min_proto_version'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['certificate']) && (mb_strlen($this->container['certificate']) > 35)) {
            $invalidProperties[] = "invalid value for 'certificate', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['custom_field_name']) && (count($this->container['custom_field_name']) > 0)) {
            $invalidProperties[] = "invalid value for 'custom_field_name', number of items must be less than or equal to 0.";
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
     * @param string|null $status Enable/disable remote syslog logging.    enable:Log to remote syslog server.    disable:Do not log to remote syslog server.
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
     * Gets server
     *
     * @return string|null
     */
    public function getServer()
    {
        return $this->container['server'];
    }

    /**
     * Sets server
     *
     * @param string|null $server Address of remote syslog server.
     *
     * @return self
     */
    public function setServer($server)
    {
        if (!is_null($server) && (mb_strlen($server) > 127)) {
            throw new \InvalidArgumentException('invalid length for $server when calling InlineObject127., must be smaller than or equal to 127.');
        }

        $this->container['server'] = $server;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return string|null
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string|null $mode Remote syslog logging over UDP/Reliable TCP.    udp:Enable syslogging over UDP.    legacy-reliable:Enable legacy reliable syslogging by RFC3195 (Reliable Delivery for Syslog).    reliable:Enable reliable syslogging by RFC6587 (Transmission of Syslog Messages over TCP).
     *
     * @return self
     */
    public function setMode($mode)
    {
        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($mode) && !in_array($mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mode', must be one of '%s'",
                    $mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets port
     *
     * @return int|null
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param int|null $port Server listen port.
     *
     * @return self
     */
    public function setPort($port)
    {

        if (!is_null($port) && ($port > 65535)) {
            throw new \InvalidArgumentException('invalid value for $port when calling InlineObject127., must be smaller than or equal to 65535.');
        }
        if (!is_null($port) && ($port < 0)) {
            throw new \InvalidArgumentException('invalid value for $port when calling InlineObject127., must be bigger than or equal to 0.');
        }

        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets facility
     *
     * @return string|null
     */
    public function getFacility()
    {
        return $this->container['facility'];
    }

    /**
     * Sets facility
     *
     * @param string|null $facility Remote syslog facility.    kernel:Kernel messages.    user:Random user-level messages.    mail:Mail system.    daemon:System daemons.    auth:Security/authorization messages.    syslog:Messages generated internally by syslog.    lpr:Line printer subsystem.    news:Network news subsystem.    uucp:Network news subsystem.    cron:Clock daemon.    authpriv:Security/authorization messages (private).    ftp:FTP daemon.    ntp:NTP daemon.    audit:Log audit.    alert:Log alert.    clock:Clock daemon.    local0:Reserved for local use.    local1:Reserved for local use.    local2:Reserved for local use.    local3:Reserved for local use.    local4:Reserved for local use.    local5:Reserved for local use.    local6:Reserved for local use.    local7:Reserved for local use.
     *
     * @return self
     */
    public function setFacility($facility)
    {
        $allowedValues = $this->getFacilityAllowableValues();
        if (!is_null($facility) && !in_array($facility, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'facility', must be one of '%s'",
                    $facility,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['facility'] = $facility;

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
     * @param string|null $source_ip Source IP address of syslog.
     *
     * @return self
     */
    public function setSourceIp($source_ip)
    {
        if (!is_null($source_ip) && (mb_strlen($source_ip) > 63)) {
            throw new \InvalidArgumentException('invalid length for $source_ip when calling InlineObject127., must be smaller than or equal to 63.');
        }

        $this->container['source_ip'] = $source_ip;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string|null $format Log format.    default:Syslog format.    csv:CSV (Comma Separated Values) format.    cef:CEF (Common Event Format) format.
     *
     * @return self
     */
    public function setFormat($format)
    {
        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($format) && !in_array($format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'format', must be one of '%s'",
                    $format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return string|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string|null $priority Set log transmission priority.    default:Set Syslog transmission priority to default.    low:Set Syslog transmission priority to low.
     *
     * @return self
     */
    public function setPriority($priority)
    {
        $allowedValues = $this->getPriorityAllowableValues();
        if (!is_null($priority) && !in_array($priority, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'priority', must be one of '%s'",
                    $priority,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets max_log_rate
     *
     * @return int|null
     */
    public function getMaxLogRate()
    {
        return $this->container['max_log_rate'];
    }

    /**
     * Sets max_log_rate
     *
     * @param int|null $max_log_rate Syslog maximum log rate in MBps (0 = unlimited).
     *
     * @return self
     */
    public function setMaxLogRate($max_log_rate)
    {

        if (!is_null($max_log_rate) && ($max_log_rate > 100000)) {
            throw new \InvalidArgumentException('invalid value for $max_log_rate when calling InlineObject127., must be smaller than or equal to 100000.');
        }
        if (!is_null($max_log_rate) && ($max_log_rate < 0)) {
            throw new \InvalidArgumentException('invalid value for $max_log_rate when calling InlineObject127., must be bigger than or equal to 0.');
        }

        $this->container['max_log_rate'] = $max_log_rate;

        return $this;
    }

    /**
     * Gets enc_algorithm
     *
     * @return string|null
     */
    public function getEncAlgorithm()
    {
        return $this->container['enc_algorithm'];
    }

    /**
     * Sets enc_algorithm
     *
     * @param string|null $enc_algorithm Enable/disable reliable syslogging with TLS encryption.    high-medium:SSL communication with high and medium encryption algorithms.    high:SSL communication with high encryption algorithms.    low:SSL communication with low encryption algorithms.    disable:Disable SSL communication.
     *
     * @return self
     */
    public function setEncAlgorithm($enc_algorithm)
    {
        $allowedValues = $this->getEncAlgorithmAllowableValues();
        if (!is_null($enc_algorithm) && !in_array($enc_algorithm, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'enc_algorithm', must be one of '%s'",
                    $enc_algorithm,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['enc_algorithm'] = $enc_algorithm;

        return $this;
    }

    /**
     * Gets ssl_min_proto_version
     *
     * @return string|null
     */
    public function getSslMinProtoVersion()
    {
        return $this->container['ssl_min_proto_version'];
    }

    /**
     * Sets ssl_min_proto_version
     *
     * @param string|null $ssl_min_proto_version Minimum supported protocol version for SSL/TLS connections (default is to follow system global setting).    default:Follow system global setting.    SSLv3:SSLv3.    TLSv1:TLSv1.    TLSv1-1:TLSv1.1.    TLSv1-2:TLSv1.2.
     *
     * @return self
     */
    public function setSslMinProtoVersion($ssl_min_proto_version)
    {
        $allowedValues = $this->getSslMinProtoVersionAllowableValues();
        if (!is_null($ssl_min_proto_version) && !in_array($ssl_min_proto_version, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ssl_min_proto_version', must be one of '%s'",
                    $ssl_min_proto_version,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ssl_min_proto_version'] = $ssl_min_proto_version;

        return $this;
    }

    /**
     * Gets certificate
     *
     * @return string|null
     */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
     * Sets certificate
     *
     * @param string|null $certificate Certificate used to communicate with Syslog server.
     *
     * @return self
     */
    public function setCertificate($certificate)
    {
        if (!is_null($certificate) && (mb_strlen($certificate) > 35)) {
            throw new \InvalidArgumentException('invalid length for $certificate when calling InlineObject127., must be smaller than or equal to 35.');
        }

        $this->container['certificate'] = $certificate;

        return $this;
    }

    /**
     * Gets custom_field_name
     *
     * @return \Fortigate\FortiOS\Model\CMDB\LogSyslogdOverrideSettingCustomFieldName[]|null
     */
    public function getCustomFieldName()
    {
        return $this->container['custom_field_name'];
    }

    /**
     * Sets custom_field_name
     *
     * @param \Fortigate\FortiOS\Model\CMDB\LogSyslogdOverrideSettingCustomFieldName[]|null $custom_field_name Custom field name for CEF format logging.
     *
     * @return self
     */
    public function setCustomFieldName($custom_field_name)
    {

        if (!is_null($custom_field_name) && (count($custom_field_name) > 0)) {
            throw new \InvalidArgumentException('invalid value for $custom_field_name when calling InlineObject127., number of items must be less than or equal to 0.');
        }
        $this->container['custom_field_name'] = $custom_field_name;

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
            throw new \InvalidArgumentException('invalid length for $interface when calling InlineObject127., must be smaller than or equal to 15.');
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


