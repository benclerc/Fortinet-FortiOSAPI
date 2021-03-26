<?php
/**
 * AntivirusProfileNameNntp
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
 * AntivirusProfileNameNntp Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AntivirusProfileNameNntp implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_antivirus_profile__name__nntp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'options' => 'string',
        'archive_block' => 'string',
        'archive_log' => 'string',
        'emulator' => 'string',
        'outbreak_prevention' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'options' => null,
        'archive_block' => null,
        'archive_log' => null,
        'emulator' => null,
        'outbreak_prevention' => null
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
        'options' => 'options',
        'archive_block' => 'archive-block',
        'archive_log' => 'archive-log',
        'emulator' => 'emulator',
        'outbreak_prevention' => 'outbreak-prevention'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'options' => 'setOptions',
        'archive_block' => 'setArchiveBlock',
        'archive_log' => 'setArchiveLog',
        'emulator' => 'setEmulator',
        'outbreak_prevention' => 'setOutbreakPrevention'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'options' => 'getOptions',
        'archive_block' => 'getArchiveBlock',
        'archive_log' => 'getArchiveLog',
        'emulator' => 'getEmulator',
        'outbreak_prevention' => 'getOutbreakPrevention'
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

    const OPTIONS_SCAN = 'scan';
    const OPTIONS_AVMONITOR = 'avmonitor';
    const OPTIONS_QUARANTINE = 'quarantine';
    const ARCHIVE_BLOCK_ENCRYPTED = 'encrypted';
    const ARCHIVE_BLOCK_CORRUPTED = 'corrupted';
    const ARCHIVE_BLOCK_PARTIALLYCORRUPTED = 'partiallycorrupted';
    const ARCHIVE_BLOCK_MULTIPART = 'multipart';
    const ARCHIVE_BLOCK_NESTED = 'nested';
    const ARCHIVE_BLOCK_MAILBOMB = 'mailbomb';
    const ARCHIVE_BLOCK_FILESLIMIT = 'fileslimit';
    const ARCHIVE_BLOCK_TIMEOUT = 'timeout';
    const ARCHIVE_BLOCK_UNHANDLED = 'unhandled';
    const ARCHIVE_LOG_ENCRYPTED = 'encrypted';
    const ARCHIVE_LOG_CORRUPTED = 'corrupted';
    const ARCHIVE_LOG_PARTIALLYCORRUPTED = 'partiallycorrupted';
    const ARCHIVE_LOG_MULTIPART = 'multipart';
    const ARCHIVE_LOG_NESTED = 'nested';
    const ARCHIVE_LOG_MAILBOMB = 'mailbomb';
    const ARCHIVE_LOG_FILESLIMIT = 'fileslimit';
    const ARCHIVE_LOG_TIMEOUT = 'timeout';
    const ARCHIVE_LOG_UNHANDLED = 'unhandled';
    const EMULATOR_ENABLE = 'enable';
    const EMULATOR_DISABLE = 'disable';
    const OUTBREAK_PREVENTION_DISABLED = 'disabled';
    const OUTBREAK_PREVENTION_FILES = 'files';
    const OUTBREAK_PREVENTION_FULL_ARCHIVE = 'full-archive';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOptionsAllowableValues()
    {
        return [
            self::OPTIONS_SCAN,
            self::OPTIONS_AVMONITOR,
            self::OPTIONS_QUARANTINE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getArchiveBlockAllowableValues()
    {
        return [
            self::ARCHIVE_BLOCK_ENCRYPTED,
            self::ARCHIVE_BLOCK_CORRUPTED,
            self::ARCHIVE_BLOCK_PARTIALLYCORRUPTED,
            self::ARCHIVE_BLOCK_MULTIPART,
            self::ARCHIVE_BLOCK_NESTED,
            self::ARCHIVE_BLOCK_MAILBOMB,
            self::ARCHIVE_BLOCK_FILESLIMIT,
            self::ARCHIVE_BLOCK_TIMEOUT,
            self::ARCHIVE_BLOCK_UNHANDLED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getArchiveLogAllowableValues()
    {
        return [
            self::ARCHIVE_LOG_ENCRYPTED,
            self::ARCHIVE_LOG_CORRUPTED,
            self::ARCHIVE_LOG_PARTIALLYCORRUPTED,
            self::ARCHIVE_LOG_MULTIPART,
            self::ARCHIVE_LOG_NESTED,
            self::ARCHIVE_LOG_MAILBOMB,
            self::ARCHIVE_LOG_FILESLIMIT,
            self::ARCHIVE_LOG_TIMEOUT,
            self::ARCHIVE_LOG_UNHANDLED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEmulatorAllowableValues()
    {
        return [
            self::EMULATOR_ENABLE,
            self::EMULATOR_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOutbreakPreventionAllowableValues()
    {
        return [
            self::OUTBREAK_PREVENTION_DISABLED,
            self::OUTBREAK_PREVENTION_FILES,
            self::OUTBREAK_PREVENTION_FULL_ARCHIVE,
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
        $this->container['options'] = $data['options'] ?? null;
        $this->container['archive_block'] = $data['archive_block'] ?? null;
        $this->container['archive_log'] = $data['archive_log'] ?? null;
        $this->container['emulator'] = $data['emulator'] ?? null;
        $this->container['outbreak_prevention'] = $data['outbreak_prevention'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOptionsAllowableValues();
        if (!is_null($this->container['options']) && !in_array($this->container['options'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'options', must be one of '%s'",
                $this->container['options'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getArchiveBlockAllowableValues();
        if (!is_null($this->container['archive_block']) && !in_array($this->container['archive_block'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'archive_block', must be one of '%s'",
                $this->container['archive_block'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getArchiveLogAllowableValues();
        if (!is_null($this->container['archive_log']) && !in_array($this->container['archive_log'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'archive_log', must be one of '%s'",
                $this->container['archive_log'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEmulatorAllowableValues();
        if (!is_null($this->container['emulator']) && !in_array($this->container['emulator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'emulator', must be one of '%s'",
                $this->container['emulator'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOutbreakPreventionAllowableValues();
        if (!is_null($this->container['outbreak_prevention']) && !in_array($this->container['outbreak_prevention'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'outbreak_prevention', must be one of '%s'",
                $this->container['outbreak_prevention'],
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
     * Gets options
     *
     * @return string|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param string|null $options Enable/disable NNTP AntiVirus scanning, monitoring, and quarantine.    scan:Enable NNTP antivirus scanning.    avmonitor:Enable NNTP antivirus logging.    quarantine:Enable NNTP antivirus quarantine. Files are quarantined depending on quarantine settings.
     *
     * @return self
     */
    public function setOptions($options)
    {
        $allowedValues = $this->getOptionsAllowableValues();
        if (!is_null($options) && !in_array($options, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'options', must be one of '%s'",
                    $options,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets archive_block
     *
     * @return string|null
     */
    public function getArchiveBlock()
    {
        return $this->container['archive_block'];
    }

    /**
     * Sets archive_block
     *
     * @param string|null $archive_block Select the archive types to block.    encrypted:Block encrypted archives.    corrupted:Block corrupted archives.    partiallycorrupted:Block partially corrupted archives.    multipart:Block multipart archives.    nested:Block nested archives.    mailbomb:Block mail bomb archives.    fileslimit:Block exceeded archive files limit.    timeout:Block scan timeout.    unhandled:Block archives that FortiOS cannot open.
     *
     * @return self
     */
    public function setArchiveBlock($archive_block)
    {
        $allowedValues = $this->getArchiveBlockAllowableValues();
        if (!is_null($archive_block) && !in_array($archive_block, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'archive_block', must be one of '%s'",
                    $archive_block,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['archive_block'] = $archive_block;

        return $this;
    }

    /**
     * Gets archive_log
     *
     * @return string|null
     */
    public function getArchiveLog()
    {
        return $this->container['archive_log'];
    }

    /**
     * Sets archive_log
     *
     * @param string|null $archive_log Select the archive types to log.    encrypted:Log encrypted archives.    corrupted:Log corrupted archives.    partiallycorrupted:Log partially corrupted archives.    multipart:Log multipart archives.    nested:Log nested archives.    mailbomb:Log mail bomb archives.    fileslimit:Log exceeded archive files limit.    timeout:Log scan timeout.    unhandled:Log archives that FortiOS cannot open.
     *
     * @return self
     */
    public function setArchiveLog($archive_log)
    {
        $allowedValues = $this->getArchiveLogAllowableValues();
        if (!is_null($archive_log) && !in_array($archive_log, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'archive_log', must be one of '%s'",
                    $archive_log,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['archive_log'] = $archive_log;

        return $this;
    }

    /**
     * Gets emulator
     *
     * @return string|null
     */
    public function getEmulator()
    {
        return $this->container['emulator'];
    }

    /**
     * Sets emulator
     *
     * @param string|null $emulator Enable/disable the virus emulator.    enable:Enable the virus emulator.    disable:Disable the virus emulator.
     *
     * @return self
     */
    public function setEmulator($emulator)
    {
        $allowedValues = $this->getEmulatorAllowableValues();
        if (!is_null($emulator) && !in_array($emulator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'emulator', must be one of '%s'",
                    $emulator,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['emulator'] = $emulator;

        return $this;
    }

    /**
     * Gets outbreak_prevention
     *
     * @return string|null
     */
    public function getOutbreakPrevention()
    {
        return $this->container['outbreak_prevention'];
    }

    /**
     * Sets outbreak_prevention
     *
     * @param string|null $outbreak_prevention Enable Virus Outbreak Prevention service.    disabled:Disabled.    files:Analyze files as sent, not the content of archives.    full-archive:Analyze files including the content of archives.
     *
     * @return self
     */
    public function setOutbreakPrevention($outbreak_prevention)
    {
        $allowedValues = $this->getOutbreakPreventionAllowableValues();
        if (!is_null($outbreak_prevention) && !in_array($outbreak_prevention, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'outbreak_prevention', must be one of '%s'",
                    $outbreak_prevention,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['outbreak_prevention'] = $outbreak_prevention;

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


