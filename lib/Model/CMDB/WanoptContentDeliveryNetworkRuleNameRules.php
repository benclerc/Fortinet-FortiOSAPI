<?php
/**
 * WanoptContentDeliveryNetworkRuleNameRules
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
 * WanoptContentDeliveryNetworkRuleNameRules Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class WanoptContentDeliveryNetworkRuleNameRules implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_wanopt_content_delivery_network_rule__name__rules';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'match_mode' => 'string',
        'skip_rule_mode' => 'string',
        'match_entries' => '\Fortigate\FortiOS\Model\CMDB\WanoptContentDeliveryNetworkRuleNameMatchEntries[]',
        'skip_entries' => '\Fortigate\FortiOS\Model\CMDB\WanoptContentDeliveryNetworkRuleNameMatchEntries[]',
        'content_id' => '\Fortigate\FortiOS\Model\CMDB\WanoptContentDeliveryNetworkRuleNameContentId[]'
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
        'match_mode' => null,
        'skip_rule_mode' => null,
        'match_entries' => null,
        'skip_entries' => null,
        'content_id' => null
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
        'match_mode' => 'match-mode',
        'skip_rule_mode' => 'skip-rule-mode',
        'match_entries' => 'match-entries',
        'skip_entries' => 'skip-entries',
        'content_id' => 'content-id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'match_mode' => 'setMatchMode',
        'skip_rule_mode' => 'setSkipRuleMode',
        'match_entries' => 'setMatchEntries',
        'skip_entries' => 'setSkipEntries',
        'content_id' => 'setContentId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'match_mode' => 'getMatchMode',
        'skip_rule_mode' => 'getSkipRuleMode',
        'match_entries' => 'getMatchEntries',
        'skip_entries' => 'getSkipEntries',
        'content_id' => 'getContentId'
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

    const MATCH_MODE_ALL = 'all';
    const MATCH_MODE_ANY = 'any';
    const SKIP_RULE_MODE_ALL = 'all';
    const SKIP_RULE_MODE_ANY = 'any';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMatchModeAllowableValues()
    {
        return [
            self::MATCH_MODE_ALL,
            self::MATCH_MODE_ANY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSkipRuleModeAllowableValues()
    {
        return [
            self::SKIP_RULE_MODE_ALL,
            self::SKIP_RULE_MODE_ANY,
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
        $this->container['match_mode'] = $data['match_mode'] ?? null;
        $this->container['skip_rule_mode'] = $data['skip_rule_mode'] ?? null;
        $this->container['match_entries'] = $data['match_entries'] ?? null;
        $this->container['skip_entries'] = $data['skip_entries'] ?? null;
        $this->container['content_id'] = $data['content_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 35)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 35.";
        }

        $allowedValues = $this->getMatchModeAllowableValues();
        if (!is_null($this->container['match_mode']) && !in_array($this->container['match_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'match_mode', must be one of '%s'",
                $this->container['match_mode'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSkipRuleModeAllowableValues();
        if (!is_null($this->container['skip_rule_mode']) && !in_array($this->container['skip_rule_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'skip_rule_mode', must be one of '%s'",
                $this->container['skip_rule_mode'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['match_entries']) && (count($this->container['match_entries']) > 0)) {
            $invalidProperties[] = "invalid value for 'match_entries', number of items must be less than or equal to 0.";
        }

        if (!is_null($this->container['skip_entries']) && (count($this->container['skip_entries']) > 0)) {
            $invalidProperties[] = "invalid value for 'skip_entries', number of items must be less than or equal to 0.";
        }

        if (!is_null($this->container['content_id']) && (count($this->container['content_id']) > 0)) {
            $invalidProperties[] = "invalid value for 'content_id', number of items must be less than or equal to 0.";
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
     * @param string|null $name WAN optimization content delivery network rule name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $name when calling WanoptContentDeliveryNetworkRuleNameRules., must be smaller than or equal to 35.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets match_mode
     *
     * @return string|null
     */
    public function getMatchMode()
    {
        return $this->container['match_mode'];
    }

    /**
     * Sets match_mode
     *
     * @param string|null $match_mode Match criteria for collecting content ID.    all:Must match all of the match entries.    any:Must match any of the match entries.
     *
     * @return self
     */
    public function setMatchMode($match_mode)
    {
        $allowedValues = $this->getMatchModeAllowableValues();
        if (!is_null($match_mode) && !in_array($match_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'match_mode', must be one of '%s'",
                    $match_mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['match_mode'] = $match_mode;

        return $this;
    }

    /**
     * Gets skip_rule_mode
     *
     * @return string|null
     */
    public function getSkipRuleMode()
    {
        return $this->container['skip_rule_mode'];
    }

    /**
     * Sets skip_rule_mode
     *
     * @param string|null $skip_rule_mode Skip mode when evaluating skip-rules.    all:Must match all skip entries.    any:Must match any skip entries.
     *
     * @return self
     */
    public function setSkipRuleMode($skip_rule_mode)
    {
        $allowedValues = $this->getSkipRuleModeAllowableValues();
        if (!is_null($skip_rule_mode) && !in_array($skip_rule_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'skip_rule_mode', must be one of '%s'",
                    $skip_rule_mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['skip_rule_mode'] = $skip_rule_mode;

        return $this;
    }

    /**
     * Gets match_entries
     *
     * @return \Fortigate\FortiOS\Model\CMDB\WanoptContentDeliveryNetworkRuleNameMatchEntries[]|null
     */
    public function getMatchEntries()
    {
        return $this->container['match_entries'];
    }

    /**
     * Sets match_entries
     *
     * @param \Fortigate\FortiOS\Model\CMDB\WanoptContentDeliveryNetworkRuleNameMatchEntries[]|null $match_entries List of entries to match.
     *
     * @return self
     */
    public function setMatchEntries($match_entries)
    {

        if (!is_null($match_entries) && (count($match_entries) > 0)) {
            throw new \InvalidArgumentException('invalid value for $match_entries when calling WanoptContentDeliveryNetworkRuleNameRules., number of items must be less than or equal to 0.');
        }
        $this->container['match_entries'] = $match_entries;

        return $this;
    }

    /**
     * Gets skip_entries
     *
     * @return \Fortigate\FortiOS\Model\CMDB\WanoptContentDeliveryNetworkRuleNameMatchEntries[]|null
     */
    public function getSkipEntries()
    {
        return $this->container['skip_entries'];
    }

    /**
     * Sets skip_entries
     *
     * @param \Fortigate\FortiOS\Model\CMDB\WanoptContentDeliveryNetworkRuleNameMatchEntries[]|null $skip_entries List of entries to skip.
     *
     * @return self
     */
    public function setSkipEntries($skip_entries)
    {

        if (!is_null($skip_entries) && (count($skip_entries) > 0)) {
            throw new \InvalidArgumentException('invalid value for $skip_entries when calling WanoptContentDeliveryNetworkRuleNameRules., number of items must be less than or equal to 0.');
        }
        $this->container['skip_entries'] = $skip_entries;

        return $this;
    }

    /**
     * Gets content_id
     *
     * @return \Fortigate\FortiOS\Model\CMDB\WanoptContentDeliveryNetworkRuleNameContentId[]|null
     */
    public function getContentId()
    {
        return $this->container['content_id'];
    }

    /**
     * Sets content_id
     *
     * @param \Fortigate\FortiOS\Model\CMDB\WanoptContentDeliveryNetworkRuleNameContentId[]|null $content_id Content ID settings.
     *
     * @return self
     */
    public function setContentId($content_id)
    {

        if (!is_null($content_id) && (count($content_id) > 0)) {
            throw new \InvalidArgumentException('invalid value for $content_id when calling WanoptContentDeliveryNetworkRuleNameRules., number of items must be less than or equal to 0.');
        }
        $this->container['content_id'] = $content_id;

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


