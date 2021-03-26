<?php
/**
 * InlineObject72
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
 * InlineObject72 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject72 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_72';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tag' => 'string',
        'signature' => 'string',
        'rule_id' => 'int',
        'severity' => 'string',
        'location' => 'string',
        'os' => 'string',
        'application' => 'string',
        'protocol' => 'string',
        'status' => 'string',
        'log' => 'string',
        'log_packet' => 'string',
        'action' => 'string',
        'comment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tag' => null,
        'signature' => null,
        'rule_id' => null,
        'severity' => null,
        'location' => null,
        'os' => null,
        'application' => null,
        'protocol' => null,
        'status' => null,
        'log' => null,
        'log_packet' => null,
        'action' => null,
        'comment' => null
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
        'tag' => 'tag',
        'signature' => 'signature',
        'rule_id' => 'rule-id',
        'severity' => 'severity',
        'location' => 'location',
        'os' => 'os',
        'application' => 'application',
        'protocol' => 'protocol',
        'status' => 'status',
        'log' => 'log',
        'log_packet' => 'log-packet',
        'action' => 'action',
        'comment' => 'comment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tag' => 'setTag',
        'signature' => 'setSignature',
        'rule_id' => 'setRuleId',
        'severity' => 'setSeverity',
        'location' => 'setLocation',
        'os' => 'setOs',
        'application' => 'setApplication',
        'protocol' => 'setProtocol',
        'status' => 'setStatus',
        'log' => 'setLog',
        'log_packet' => 'setLogPacket',
        'action' => 'setAction',
        'comment' => 'setComment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tag' => 'getTag',
        'signature' => 'getSignature',
        'rule_id' => 'getRuleId',
        'severity' => 'getSeverity',
        'location' => 'getLocation',
        'os' => 'getOs',
        'application' => 'getApplication',
        'protocol' => 'getProtocol',
        'status' => 'getStatus',
        'log' => 'getLog',
        'log_packet' => 'getLogPacket',
        'action' => 'getAction',
        'comment' => 'getComment'
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

    const STATUS_DISABLE = 'disable';
    const STATUS_ENABLE = 'enable';
    const LOG_DISABLE = 'disable';
    const LOG_ENABLE = 'enable';
    const LOG_PACKET_DISABLE = 'disable';
    const LOG_PACKET_ENABLE = 'enable';
    const ACTION_PASS = 'pass';
    const ACTION_BLOCK = 'block';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DISABLE,
            self::STATUS_ENABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLogAllowableValues()
    {
        return [
            self::LOG_DISABLE,
            self::LOG_ENABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLogPacketAllowableValues()
    {
        return [
            self::LOG_PACKET_DISABLE,
            self::LOG_PACKET_ENABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_PASS,
            self::ACTION_BLOCK,
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
        $this->container['tag'] = $data['tag'] ?? null;
        $this->container['signature'] = $data['signature'] ?? null;
        $this->container['rule_id'] = $data['rule_id'] ?? null;
        $this->container['severity'] = $data['severity'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['os'] = $data['os'] ?? null;
        $this->container['application'] = $data['application'] ?? null;
        $this->container['protocol'] = $data['protocol'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['log'] = $data['log'] ?? null;
        $this->container['log_packet'] = $data['log_packet'] ?? null;
        $this->container['action'] = $data['action'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) > 63)) {
            $invalidProperties[] = "invalid value for 'tag', the character length must be smaller than or equal to 63.";
        }

        if (!is_null($this->container['signature']) && (mb_strlen($this->container['signature']) > 4095)) {
            $invalidProperties[] = "invalid value for 'signature', the character length must be smaller than or equal to 4095.";
        }

        if (!is_null($this->container['rule_id']) && ($this->container['rule_id'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'rule_id', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['rule_id']) && ($this->container['rule_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'rule_id', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLogAllowableValues();
        if (!is_null($this->container['log']) && !in_array($this->container['log'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'log', must be one of '%s'",
                $this->container['log'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLogPacketAllowableValues();
        if (!is_null($this->container['log_packet']) && !in_array($this->container['log_packet'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'log_packet', must be one of '%s'",
                $this->container['log_packet'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'action', must be one of '%s'",
                $this->container['action'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) > 63)) {
            $invalidProperties[] = "invalid value for 'comment', the character length must be smaller than or equal to 63.";
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
     * Gets tag
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string|null $tag Signature tag.
     *
     * @return self
     */
    public function setTag($tag)
    {
        if (!is_null($tag) && (mb_strlen($tag) > 63)) {
            throw new \InvalidArgumentException('invalid length for $tag when calling InlineObject72., must be smaller than or equal to 63.');
        }

        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return string|null
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param string|null $signature Custom signature enclosed in single quotes.
     *
     * @return self
     */
    public function setSignature($signature)
    {
        if (!is_null($signature) && (mb_strlen($signature) > 4095)) {
            throw new \InvalidArgumentException('invalid length for $signature when calling InlineObject72., must be smaller than or equal to 4095.');
        }

        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets rule_id
     *
     * @return int|null
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     *
     * @param int|null $rule_id Signature ID.
     *
     * @return self
     */
    public function setRuleId($rule_id)
    {

        if (!is_null($rule_id) && ($rule_id > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $rule_id when calling InlineObject72., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($rule_id) && ($rule_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $rule_id when calling InlineObject72., must be bigger than or equal to 0.');
        }

        $this->container['rule_id'] = $rule_id;

        return $this;
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
     * @param string|null $severity Relative severity of the signature, from info to critical. Log messages generated by the signature include the severity.
     *
     * @return self
     */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location Protect client or server traffic.
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets os
     *
     * @return string|null
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     *
     * @param string|null $os Operating system(s) that the signature protects. Blank for all operating systems.
     *
     * @return self
     */
    public function setOs($os)
    {
        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets application
     *
     * @return string|null
     */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
     * Sets application
     *
     * @param string|null $application Applications to be protected. Blank for all applications.
     *
     * @return self
     */
    public function setApplication($application)
    {
        $this->container['application'] = $application;

        return $this;
    }

    /**
     * Gets protocol
     *
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     *
     * @param string|null $protocol Protocol(s) that the signature scans. Blank for all protocols.
     *
     * @return self
     */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;

        return $this;
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
     * @param string|null $status Enable/disable this signature.    disable:Disable status.    enable:Enable status.
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
     * Gets log
     *
     * @return string|null
     */
    public function getLog()
    {
        return $this->container['log'];
    }

    /**
     * Sets log
     *
     * @param string|null $log Enable/disable logging.    disable:Disable logging.    enable:Enable logging.
     *
     * @return self
     */
    public function setLog($log)
    {
        $allowedValues = $this->getLogAllowableValues();
        if (!is_null($log) && !in_array($log, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'log', must be one of '%s'",
                    $log,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['log'] = $log;

        return $this;
    }

    /**
     * Gets log_packet
     *
     * @return string|null
     */
    public function getLogPacket()
    {
        return $this->container['log_packet'];
    }

    /**
     * Sets log_packet
     *
     * @param string|null $log_packet Enable/disable packet logging.    disable:Disable packet logging.    enable:Enable packet logging.
     *
     * @return self
     */
    public function setLogPacket($log_packet)
    {
        $allowedValues = $this->getLogPacketAllowableValues();
        if (!is_null($log_packet) && !in_array($log_packet, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'log_packet', must be one of '%s'",
                    $log_packet,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['log_packet'] = $log_packet;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string|null $action Default action (pass or block) for this signature.    pass:Pass or allow matching traffic.    block:Block or drop matching traffic.
     *
     * @return self
     */
    public function setAction($action)
    {
        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($action) && !in_array($action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'action', must be one of '%s'",
                    $action,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment Comment.
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (!is_null($comment) && (mb_strlen($comment) > 63)) {
            throw new \InvalidArgumentException('invalid length for $comment when calling InlineObject72., must be smaller than or equal to 63.');
        }

        $this->container['comment'] = $comment;

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


