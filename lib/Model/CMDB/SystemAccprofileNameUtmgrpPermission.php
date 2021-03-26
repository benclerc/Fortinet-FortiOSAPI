<?php
/**
 * SystemAccprofileNameUtmgrpPermission
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
 * SystemAccprofileNameUtmgrpPermission Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SystemAccprofileNameUtmgrpPermission implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_system_accprofile__name__utmgrp_permission';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'antivirus' => 'string',
        'ips' => 'string',
        'webfilter' => 'string',
        'emailfilter' => 'string',
        'data_loss_prevention' => 'string',
        'file_filter' => 'string',
        'application_control' => 'string',
        'icap' => 'string',
        'voip' => 'string',
        'waf' => 'string',
        'dnsfilter' => 'string',
        'endpoint_control' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'antivirus' => null,
        'ips' => null,
        'webfilter' => null,
        'emailfilter' => null,
        'data_loss_prevention' => null,
        'file_filter' => null,
        'application_control' => null,
        'icap' => null,
        'voip' => null,
        'waf' => null,
        'dnsfilter' => null,
        'endpoint_control' => null
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
        'antivirus' => 'antivirus',
        'ips' => 'ips',
        'webfilter' => 'webfilter',
        'emailfilter' => 'emailfilter',
        'data_loss_prevention' => 'data-loss-prevention',
        'file_filter' => 'file-filter',
        'application_control' => 'application-control',
        'icap' => 'icap',
        'voip' => 'voip',
        'waf' => 'waf',
        'dnsfilter' => 'dnsfilter',
        'endpoint_control' => 'endpoint-control'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'antivirus' => 'setAntivirus',
        'ips' => 'setIps',
        'webfilter' => 'setWebfilter',
        'emailfilter' => 'setEmailfilter',
        'data_loss_prevention' => 'setDataLossPrevention',
        'file_filter' => 'setFileFilter',
        'application_control' => 'setApplicationControl',
        'icap' => 'setIcap',
        'voip' => 'setVoip',
        'waf' => 'setWaf',
        'dnsfilter' => 'setDnsfilter',
        'endpoint_control' => 'setEndpointControl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'antivirus' => 'getAntivirus',
        'ips' => 'getIps',
        'webfilter' => 'getWebfilter',
        'emailfilter' => 'getEmailfilter',
        'data_loss_prevention' => 'getDataLossPrevention',
        'file_filter' => 'getFileFilter',
        'application_control' => 'getApplicationControl',
        'icap' => 'getIcap',
        'voip' => 'getVoip',
        'waf' => 'getWaf',
        'dnsfilter' => 'getDnsfilter',
        'endpoint_control' => 'getEndpointControl'
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

    const ANTIVIRUS_NONE = 'none';
    const ANTIVIRUS_READ = 'read';
    const ANTIVIRUS_READ_WRITE = 'read-write';
    const IPS_NONE = 'none';
    const IPS_READ = 'read';
    const IPS_READ_WRITE = 'read-write';
    const WEBFILTER_NONE = 'none';
    const WEBFILTER_READ = 'read';
    const WEBFILTER_READ_WRITE = 'read-write';
    const EMAILFILTER_NONE = 'none';
    const EMAILFILTER_READ = 'read';
    const EMAILFILTER_READ_WRITE = 'read-write';
    const DATA_LOSS_PREVENTION_NONE = 'none';
    const DATA_LOSS_PREVENTION_READ = 'read';
    const DATA_LOSS_PREVENTION_READ_WRITE = 'read-write';
    const FILE_FILTER_NONE = 'none';
    const FILE_FILTER_READ = 'read';
    const FILE_FILTER_READ_WRITE = 'read-write';
    const APPLICATION_CONTROL_NONE = 'none';
    const APPLICATION_CONTROL_READ = 'read';
    const APPLICATION_CONTROL_READ_WRITE = 'read-write';
    const ICAP_NONE = 'none';
    const ICAP_READ = 'read';
    const ICAP_READ_WRITE = 'read-write';
    const VOIP_NONE = 'none';
    const VOIP_READ = 'read';
    const VOIP_READ_WRITE = 'read-write';
    const WAF_NONE = 'none';
    const WAF_READ = 'read';
    const WAF_READ_WRITE = 'read-write';
    const DNSFILTER_NONE = 'none';
    const DNSFILTER_READ = 'read';
    const DNSFILTER_READ_WRITE = 'read-write';
    const ENDPOINT_CONTROL_NONE = 'none';
    const ENDPOINT_CONTROL_READ = 'read';
    const ENDPOINT_CONTROL_READ_WRITE = 'read-write';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAntivirusAllowableValues()
    {
        return [
            self::ANTIVIRUS_NONE,
            self::ANTIVIRUS_READ,
            self::ANTIVIRUS_READ_WRITE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIpsAllowableValues()
    {
        return [
            self::IPS_NONE,
            self::IPS_READ,
            self::IPS_READ_WRITE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWebfilterAllowableValues()
    {
        return [
            self::WEBFILTER_NONE,
            self::WEBFILTER_READ,
            self::WEBFILTER_READ_WRITE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEmailfilterAllowableValues()
    {
        return [
            self::EMAILFILTER_NONE,
            self::EMAILFILTER_READ,
            self::EMAILFILTER_READ_WRITE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDataLossPreventionAllowableValues()
    {
        return [
            self::DATA_LOSS_PREVENTION_NONE,
            self::DATA_LOSS_PREVENTION_READ,
            self::DATA_LOSS_PREVENTION_READ_WRITE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFileFilterAllowableValues()
    {
        return [
            self::FILE_FILTER_NONE,
            self::FILE_FILTER_READ,
            self::FILE_FILTER_READ_WRITE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getApplicationControlAllowableValues()
    {
        return [
            self::APPLICATION_CONTROL_NONE,
            self::APPLICATION_CONTROL_READ,
            self::APPLICATION_CONTROL_READ_WRITE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIcapAllowableValues()
    {
        return [
            self::ICAP_NONE,
            self::ICAP_READ,
            self::ICAP_READ_WRITE,
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
            self::VOIP_NONE,
            self::VOIP_READ,
            self::VOIP_READ_WRITE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWafAllowableValues()
    {
        return [
            self::WAF_NONE,
            self::WAF_READ,
            self::WAF_READ_WRITE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDnsfilterAllowableValues()
    {
        return [
            self::DNSFILTER_NONE,
            self::DNSFILTER_READ,
            self::DNSFILTER_READ_WRITE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEndpointControlAllowableValues()
    {
        return [
            self::ENDPOINT_CONTROL_NONE,
            self::ENDPOINT_CONTROL_READ,
            self::ENDPOINT_CONTROL_READ_WRITE,
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
        $this->container['antivirus'] = $data['antivirus'] ?? null;
        $this->container['ips'] = $data['ips'] ?? null;
        $this->container['webfilter'] = $data['webfilter'] ?? null;
        $this->container['emailfilter'] = $data['emailfilter'] ?? null;
        $this->container['data_loss_prevention'] = $data['data_loss_prevention'] ?? null;
        $this->container['file_filter'] = $data['file_filter'] ?? null;
        $this->container['application_control'] = $data['application_control'] ?? null;
        $this->container['icap'] = $data['icap'] ?? null;
        $this->container['voip'] = $data['voip'] ?? null;
        $this->container['waf'] = $data['waf'] ?? null;
        $this->container['dnsfilter'] = $data['dnsfilter'] ?? null;
        $this->container['endpoint_control'] = $data['endpoint_control'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAntivirusAllowableValues();
        if (!is_null($this->container['antivirus']) && !in_array($this->container['antivirus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'antivirus', must be one of '%s'",
                $this->container['antivirus'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIpsAllowableValues();
        if (!is_null($this->container['ips']) && !in_array($this->container['ips'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ips', must be one of '%s'",
                $this->container['ips'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWebfilterAllowableValues();
        if (!is_null($this->container['webfilter']) && !in_array($this->container['webfilter'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'webfilter', must be one of '%s'",
                $this->container['webfilter'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEmailfilterAllowableValues();
        if (!is_null($this->container['emailfilter']) && !in_array($this->container['emailfilter'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'emailfilter', must be one of '%s'",
                $this->container['emailfilter'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDataLossPreventionAllowableValues();
        if (!is_null($this->container['data_loss_prevention']) && !in_array($this->container['data_loss_prevention'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'data_loss_prevention', must be one of '%s'",
                $this->container['data_loss_prevention'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFileFilterAllowableValues();
        if (!is_null($this->container['file_filter']) && !in_array($this->container['file_filter'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'file_filter', must be one of '%s'",
                $this->container['file_filter'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getApplicationControlAllowableValues();
        if (!is_null($this->container['application_control']) && !in_array($this->container['application_control'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'application_control', must be one of '%s'",
                $this->container['application_control'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIcapAllowableValues();
        if (!is_null($this->container['icap']) && !in_array($this->container['icap'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'icap', must be one of '%s'",
                $this->container['icap'],
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

        $allowedValues = $this->getWafAllowableValues();
        if (!is_null($this->container['waf']) && !in_array($this->container['waf'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'waf', must be one of '%s'",
                $this->container['waf'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDnsfilterAllowableValues();
        if (!is_null($this->container['dnsfilter']) && !in_array($this->container['dnsfilter'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dnsfilter', must be one of '%s'",
                $this->container['dnsfilter'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEndpointControlAllowableValues();
        if (!is_null($this->container['endpoint_control']) && !in_array($this->container['endpoint_control'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'endpoint_control', must be one of '%s'",
                $this->container['endpoint_control'],
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
     * Gets antivirus
     *
     * @return string|null
     */
    public function getAntivirus()
    {
        return $this->container['antivirus'];
    }

    /**
     * Sets antivirus
     *
     * @param string|null $antivirus Antivirus profiles and settings.    none:No access.    read:Read access.    read-write:Read/write access.
     *
     * @return self
     */
    public function setAntivirus($antivirus)
    {
        $allowedValues = $this->getAntivirusAllowableValues();
        if (!is_null($antivirus) && !in_array($antivirus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'antivirus', must be one of '%s'",
                    $antivirus,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['antivirus'] = $antivirus;

        return $this;
    }

    /**
     * Gets ips
     *
     * @return string|null
     */
    public function getIps()
    {
        return $this->container['ips'];
    }

    /**
     * Sets ips
     *
     * @param string|null $ips IPS profiles and settings.    none:No access.    read:Read access.    read-write:Read/write access.
     *
     * @return self
     */
    public function setIps($ips)
    {
        $allowedValues = $this->getIpsAllowableValues();
        if (!is_null($ips) && !in_array($ips, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ips', must be one of '%s'",
                    $ips,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ips'] = $ips;

        return $this;
    }

    /**
     * Gets webfilter
     *
     * @return string|null
     */
    public function getWebfilter()
    {
        return $this->container['webfilter'];
    }

    /**
     * Sets webfilter
     *
     * @param string|null $webfilter Web Filter profiles and settings.    none:No access.    read:Read access.    read-write:Read/write access.
     *
     * @return self
     */
    public function setWebfilter($webfilter)
    {
        $allowedValues = $this->getWebfilterAllowableValues();
        if (!is_null($webfilter) && !in_array($webfilter, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'webfilter', must be one of '%s'",
                    $webfilter,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['webfilter'] = $webfilter;

        return $this;
    }

    /**
     * Gets emailfilter
     *
     * @return string|null
     */
    public function getEmailfilter()
    {
        return $this->container['emailfilter'];
    }

    /**
     * Sets emailfilter
     *
     * @param string|null $emailfilter AntiSpam filter and settings.    none:No access.    read:Read access.    read-write:Read/write access.
     *
     * @return self
     */
    public function setEmailfilter($emailfilter)
    {
        $allowedValues = $this->getEmailfilterAllowableValues();
        if (!is_null($emailfilter) && !in_array($emailfilter, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'emailfilter', must be one of '%s'",
                    $emailfilter,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['emailfilter'] = $emailfilter;

        return $this;
    }

    /**
     * Gets data_loss_prevention
     *
     * @return string|null
     */
    public function getDataLossPrevention()
    {
        return $this->container['data_loss_prevention'];
    }

    /**
     * Sets data_loss_prevention
     *
     * @param string|null $data_loss_prevention DLP profiles and settings.    none:No access.    read:Read access.    read-write:Read/write access.
     *
     * @return self
     */
    public function setDataLossPrevention($data_loss_prevention)
    {
        $allowedValues = $this->getDataLossPreventionAllowableValues();
        if (!is_null($data_loss_prevention) && !in_array($data_loss_prevention, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'data_loss_prevention', must be one of '%s'",
                    $data_loss_prevention,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['data_loss_prevention'] = $data_loss_prevention;

        return $this;
    }

    /**
     * Gets file_filter
     *
     * @return string|null
     */
    public function getFileFilter()
    {
        return $this->container['file_filter'];
    }

    /**
     * Sets file_filter
     *
     * @param string|null $file_filter File-filter profiles and settings.    none:No access.    read:Read access.    read-write:Read/write access.
     *
     * @return self
     */
    public function setFileFilter($file_filter)
    {
        $allowedValues = $this->getFileFilterAllowableValues();
        if (!is_null($file_filter) && !in_array($file_filter, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'file_filter', must be one of '%s'",
                    $file_filter,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['file_filter'] = $file_filter;

        return $this;
    }

    /**
     * Gets application_control
     *
     * @return string|null
     */
    public function getApplicationControl()
    {
        return $this->container['application_control'];
    }

    /**
     * Sets application_control
     *
     * @param string|null $application_control Application Control profiles and settings.    none:No access.    read:Read access.    read-write:Read/write access.
     *
     * @return self
     */
    public function setApplicationControl($application_control)
    {
        $allowedValues = $this->getApplicationControlAllowableValues();
        if (!is_null($application_control) && !in_array($application_control, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'application_control', must be one of '%s'",
                    $application_control,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['application_control'] = $application_control;

        return $this;
    }

    /**
     * Gets icap
     *
     * @return string|null
     */
    public function getIcap()
    {
        return $this->container['icap'];
    }

    /**
     * Sets icap
     *
     * @param string|null $icap ICAP profiles and settings.    none:No access.    read:Read access.    read-write:Read/write access.
     *
     * @return self
     */
    public function setIcap($icap)
    {
        $allowedValues = $this->getIcapAllowableValues();
        if (!is_null($icap) && !in_array($icap, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'icap', must be one of '%s'",
                    $icap,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['icap'] = $icap;

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
     * @param string|null $voip VoIP profiles and settings.    none:No access.    read:Read access.    read-write:Read/write access.
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
     * Gets waf
     *
     * @return string|null
     */
    public function getWaf()
    {
        return $this->container['waf'];
    }

    /**
     * Sets waf
     *
     * @param string|null $waf Web Application Firewall profiles and settings.    none:No access.    read:Read access.    read-write:Read/write access.
     *
     * @return self
     */
    public function setWaf($waf)
    {
        $allowedValues = $this->getWafAllowableValues();
        if (!is_null($waf) && !in_array($waf, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'waf', must be one of '%s'",
                    $waf,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['waf'] = $waf;

        return $this;
    }

    /**
     * Gets dnsfilter
     *
     * @return string|null
     */
    public function getDnsfilter()
    {
        return $this->container['dnsfilter'];
    }

    /**
     * Sets dnsfilter
     *
     * @param string|null $dnsfilter DNS Filter profiles and settings.    none:No access.    read:Read access.    read-write:Read/write access.
     *
     * @return self
     */
    public function setDnsfilter($dnsfilter)
    {
        $allowedValues = $this->getDnsfilterAllowableValues();
        if (!is_null($dnsfilter) && !in_array($dnsfilter, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dnsfilter', must be one of '%s'",
                    $dnsfilter,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dnsfilter'] = $dnsfilter;

        return $this;
    }

    /**
     * Gets endpoint_control
     *
     * @return string|null
     */
    public function getEndpointControl()
    {
        return $this->container['endpoint_control'];
    }

    /**
     * Sets endpoint_control
     *
     * @param string|null $endpoint_control FortiClient Profiles.    none:No access.    read:Read access.    read-write:Read/write access.
     *
     * @return self
     */
    public function setEndpointControl($endpoint_control)
    {
        $allowedValues = $this->getEndpointControlAllowableValues();
        if (!is_null($endpoint_control) && !in_array($endpoint_control, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'endpoint_control', must be one of '%s'",
                    $endpoint_control,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['endpoint_control'] = $endpoint_control;

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


