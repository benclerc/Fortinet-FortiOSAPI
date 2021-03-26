<?php
/**
 * SystemAccprofileNameLoggrpPermission
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
 * SystemAccprofileNameLoggrpPermission Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SystemAccprofileNameLoggrpPermission implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_system_accprofile__name__loggrp_permission';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'config' => 'string',
        'data_access' => 'string',
        'report_access' => 'string',
        'threat_weight' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'config' => null,
        'data_access' => null,
        'report_access' => null,
        'threat_weight' => null
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
        'config' => 'config',
        'data_access' => 'data-access',
        'report_access' => 'report-access',
        'threat_weight' => 'threat-weight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'config' => 'setConfig',
        'data_access' => 'setDataAccess',
        'report_access' => 'setReportAccess',
        'threat_weight' => 'setThreatWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'config' => 'getConfig',
        'data_access' => 'getDataAccess',
        'report_access' => 'getReportAccess',
        'threat_weight' => 'getThreatWeight'
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

    const CONFIG_NONE = 'none';
    const CONFIG_READ = 'read';
    const CONFIG_READ_WRITE = 'read-write';
    const DATA_ACCESS_NONE = 'none';
    const DATA_ACCESS_READ = 'read';
    const DATA_ACCESS_READ_WRITE = 'read-write';
    const REPORT_ACCESS_NONE = 'none';
    const REPORT_ACCESS_READ = 'read';
    const REPORT_ACCESS_READ_WRITE = 'read-write';
    const THREAT_WEIGHT_NONE = 'none';
    const THREAT_WEIGHT_READ = 'read';
    const THREAT_WEIGHT_READ_WRITE = 'read-write';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConfigAllowableValues()
    {
        return [
            self::CONFIG_NONE,
            self::CONFIG_READ,
            self::CONFIG_READ_WRITE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDataAccessAllowableValues()
    {
        return [
            self::DATA_ACCESS_NONE,
            self::DATA_ACCESS_READ,
            self::DATA_ACCESS_READ_WRITE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReportAccessAllowableValues()
    {
        return [
            self::REPORT_ACCESS_NONE,
            self::REPORT_ACCESS_READ,
            self::REPORT_ACCESS_READ_WRITE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getThreatWeightAllowableValues()
    {
        return [
            self::THREAT_WEIGHT_NONE,
            self::THREAT_WEIGHT_READ,
            self::THREAT_WEIGHT_READ_WRITE,
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
        $this->container['config'] = $data['config'] ?? null;
        $this->container['data_access'] = $data['data_access'] ?? null;
        $this->container['report_access'] = $data['report_access'] ?? null;
        $this->container['threat_weight'] = $data['threat_weight'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getConfigAllowableValues();
        if (!is_null($this->container['config']) && !in_array($this->container['config'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'config', must be one of '%s'",
                $this->container['config'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDataAccessAllowableValues();
        if (!is_null($this->container['data_access']) && !in_array($this->container['data_access'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'data_access', must be one of '%s'",
                $this->container['data_access'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getReportAccessAllowableValues();
        if (!is_null($this->container['report_access']) && !in_array($this->container['report_access'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'report_access', must be one of '%s'",
                $this->container['report_access'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getThreatWeightAllowableValues();
        if (!is_null($this->container['threat_weight']) && !in_array($this->container['threat_weight'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'threat_weight', must be one of '%s'",
                $this->container['threat_weight'],
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
     * Gets config
     *
     * @return string|null
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param string|null $config Log & Report configuration.    none:No access.    read:Read access.    read-write:Read/write access.
     *
     * @return self
     */
    public function setConfig($config)
    {
        $allowedValues = $this->getConfigAllowableValues();
        if (!is_null($config) && !in_array($config, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'config', must be one of '%s'",
                    $config,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets data_access
     *
     * @return string|null
     */
    public function getDataAccess()
    {
        return $this->container['data_access'];
    }

    /**
     * Sets data_access
     *
     * @param string|null $data_access Log & Report Data Access.    none:No access.    read:Read access.    read-write:Read/write access.
     *
     * @return self
     */
    public function setDataAccess($data_access)
    {
        $allowedValues = $this->getDataAccessAllowableValues();
        if (!is_null($data_access) && !in_array($data_access, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'data_access', must be one of '%s'",
                    $data_access,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['data_access'] = $data_access;

        return $this;
    }

    /**
     * Gets report_access
     *
     * @return string|null
     */
    public function getReportAccess()
    {
        return $this->container['report_access'];
    }

    /**
     * Sets report_access
     *
     * @param string|null $report_access Log & Report Report Access.    none:No access.    read:Read access.    read-write:Read/write access.
     *
     * @return self
     */
    public function setReportAccess($report_access)
    {
        $allowedValues = $this->getReportAccessAllowableValues();
        if (!is_null($report_access) && !in_array($report_access, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'report_access', must be one of '%s'",
                    $report_access,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['report_access'] = $report_access;

        return $this;
    }

    /**
     * Gets threat_weight
     *
     * @return string|null
     */
    public function getThreatWeight()
    {
        return $this->container['threat_weight'];
    }

    /**
     * Sets threat_weight
     *
     * @param string|null $threat_weight Log & Report Threat Weight.    none:No access.    read:Read access.    read-write:Read/write access.
     *
     * @return self
     */
    public function setThreatWeight($threat_weight)
    {
        $allowedValues = $this->getThreatWeightAllowableValues();
        if (!is_null($threat_weight) && !in_array($threat_weight, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'threat_weight', must be one of '%s'",
                    $threat_weight,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['threat_weight'] = $threat_weight;

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


