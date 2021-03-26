<?php
/**
 * InlineObject50
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
 * InlineObject50 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject50 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_50';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'spam_submit_srv' => 'string',
        'spam_submit_force' => 'string',
        'spam_submit_txt2htm' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'spam_submit_srv' => null,
        'spam_submit_force' => null,
        'spam_submit_txt2htm' => null
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
        'spam_submit_srv' => 'spam-submit-srv',
        'spam_submit_force' => 'spam-submit-force',
        'spam_submit_txt2htm' => 'spam-submit-txt2htm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'spam_submit_srv' => 'setSpamSubmitSrv',
        'spam_submit_force' => 'setSpamSubmitForce',
        'spam_submit_txt2htm' => 'setSpamSubmitTxt2htm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'spam_submit_srv' => 'getSpamSubmitSrv',
        'spam_submit_force' => 'getSpamSubmitForce',
        'spam_submit_txt2htm' => 'getSpamSubmitTxt2htm'
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

    const SPAM_SUBMIT_FORCE_ENABLE = 'enable';
    const SPAM_SUBMIT_FORCE_DISABLE = 'disable';
    const SPAM_SUBMIT_TXT2HTM_ENABLE = 'enable';
    const SPAM_SUBMIT_TXT2HTM_DISABLE = 'disable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSpamSubmitForceAllowableValues()
    {
        return [
            self::SPAM_SUBMIT_FORCE_ENABLE,
            self::SPAM_SUBMIT_FORCE_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSpamSubmitTxt2htmAllowableValues()
    {
        return [
            self::SPAM_SUBMIT_TXT2HTM_ENABLE,
            self::SPAM_SUBMIT_TXT2HTM_DISABLE,
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
        $this->container['spam_submit_srv'] = $data['spam_submit_srv'] ?? null;
        $this->container['spam_submit_force'] = $data['spam_submit_force'] ?? null;
        $this->container['spam_submit_txt2htm'] = $data['spam_submit_txt2htm'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['spam_submit_srv']) && (mb_strlen($this->container['spam_submit_srv']) > 63)) {
            $invalidProperties[] = "invalid value for 'spam_submit_srv', the character length must be smaller than or equal to 63.";
        }

        $allowedValues = $this->getSpamSubmitForceAllowableValues();
        if (!is_null($this->container['spam_submit_force']) && !in_array($this->container['spam_submit_force'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'spam_submit_force', must be one of '%s'",
                $this->container['spam_submit_force'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSpamSubmitTxt2htmAllowableValues();
        if (!is_null($this->container['spam_submit_txt2htm']) && !in_array($this->container['spam_submit_txt2htm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'spam_submit_txt2htm', must be one of '%s'",
                $this->container['spam_submit_txt2htm'],
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
     * Gets spam_submit_srv
     *
     * @return string|null
     */
    public function getSpamSubmitSrv()
    {
        return $this->container['spam_submit_srv'];
    }

    /**
     * Sets spam_submit_srv
     *
     * @param string|null $spam_submit_srv Hostname of the spam submission server.
     *
     * @return self
     */
    public function setSpamSubmitSrv($spam_submit_srv)
    {
        if (!is_null($spam_submit_srv) && (mb_strlen($spam_submit_srv) > 63)) {
            throw new \InvalidArgumentException('invalid length for $spam_submit_srv when calling InlineObject50., must be smaller than or equal to 63.');
        }

        $this->container['spam_submit_srv'] = $spam_submit_srv;

        return $this;
    }

    /**
     * Gets spam_submit_force
     *
     * @return string|null
     */
    public function getSpamSubmitForce()
    {
        return $this->container['spam_submit_force'];
    }

    /**
     * Sets spam_submit_force
     *
     * @param string|null $spam_submit_force Enable/disable force insertion of a new mime entity for the submission text.    enable:Enable setting.    disable:Disable setting.
     *
     * @return self
     */
    public function setSpamSubmitForce($spam_submit_force)
    {
        $allowedValues = $this->getSpamSubmitForceAllowableValues();
        if (!is_null($spam_submit_force) && !in_array($spam_submit_force, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'spam_submit_force', must be one of '%s'",
                    $spam_submit_force,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['spam_submit_force'] = $spam_submit_force;

        return $this;
    }

    /**
     * Gets spam_submit_txt2htm
     *
     * @return string|null
     */
    public function getSpamSubmitTxt2htm()
    {
        return $this->container['spam_submit_txt2htm'];
    }

    /**
     * Sets spam_submit_txt2htm
     *
     * @param string|null $spam_submit_txt2htm Enable/disable conversion of text email to HTML email.    enable:Enable setting.    disable:Disable setting.
     *
     * @return self
     */
    public function setSpamSubmitTxt2htm($spam_submit_txt2htm)
    {
        $allowedValues = $this->getSpamSubmitTxt2htmAllowableValues();
        if (!is_null($spam_submit_txt2htm) && !in_array($spam_submit_txt2htm, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'spam_submit_txt2htm', must be one of '%s'",
                    $spam_submit_txt2htm,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['spam_submit_txt2htm'] = $spam_submit_txt2htm;

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


