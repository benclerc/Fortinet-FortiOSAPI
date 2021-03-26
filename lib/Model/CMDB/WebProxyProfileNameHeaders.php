<?php
/**
 * WebProxyProfileNameHeaders
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
 * WebProxyProfileNameHeaders Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class WebProxyProfileNameHeaders implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_web_proxy_profile__name__headers';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'dstaddr' => '\Fortigate\FortiOS\Model\CMDB\AuthenticationRuleNameSrcaddr[]',
        'dstaddr6' => '\Fortigate\FortiOS\Model\CMDB\AuthenticationRuleNameSrcaddr[]',
        'action' => 'string',
        'content' => 'string',
        'base64_encoding' => 'string',
        'add_option' => 'string',
        'protocol' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'dstaddr' => null,
        'dstaddr6' => null,
        'action' => null,
        'content' => null,
        'base64_encoding' => null,
        'add_option' => null,
        'protocol' => null
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
        'id' => 'id',
        'name' => 'name',
        'dstaddr' => 'dstaddr',
        'dstaddr6' => 'dstaddr6',
        'action' => 'action',
        'content' => 'content',
        'base64_encoding' => 'base64-encoding',
        'add_option' => 'add-option',
        'protocol' => 'protocol'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'dstaddr' => 'setDstaddr',
        'dstaddr6' => 'setDstaddr6',
        'action' => 'setAction',
        'content' => 'setContent',
        'base64_encoding' => 'setBase64Encoding',
        'add_option' => 'setAddOption',
        'protocol' => 'setProtocol'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'dstaddr' => 'getDstaddr',
        'dstaddr6' => 'getDstaddr6',
        'action' => 'getAction',
        'content' => 'getContent',
        'base64_encoding' => 'getBase64Encoding',
        'add_option' => 'getAddOption',
        'protocol' => 'getProtocol'
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

    const ACTION_ADD_TO_REQUEST = 'add-to-request';
    const ACTION_ADD_TO_RESPONSE = 'add-to-response';
    const ACTION_REMOVE_FROM_REQUEST = 'remove-from-request';
    const ACTION_REMOVE_FROM_RESPONSE = 'remove-from-response';
    const BASE64_ENCODING_DISABLE = 'disable';
    const BASE64_ENCODING_ENABLE = 'enable';
    const ADD_OPTION_APPEND = 'append';
    const ADD_OPTION_NEW_ON_NOT_FOUND = 'new-on-not-found';
    const ADD_OPTION__NEW = 'new';
    const PROTOCOL_HTTPS = 'https';
    const PROTOCOL_HTTP = 'http';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_ADD_TO_REQUEST,
            self::ACTION_ADD_TO_RESPONSE,
            self::ACTION_REMOVE_FROM_REQUEST,
            self::ACTION_REMOVE_FROM_RESPONSE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBase64EncodingAllowableValues()
    {
        return [
            self::BASE64_ENCODING_DISABLE,
            self::BASE64_ENCODING_ENABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAddOptionAllowableValues()
    {
        return [
            self::ADD_OPTION_APPEND,
            self::ADD_OPTION_NEW_ON_NOT_FOUND,
            self::ADD_OPTION__NEW,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_HTTPS,
            self::PROTOCOL_HTTP,
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['dstaddr'] = $data['dstaddr'] ?? null;
        $this->container['dstaddr6'] = $data['dstaddr6'] ?? null;
        $this->container['action'] = $data['action'] ?? null;
        $this->container['content'] = $data['content'] ?? null;
        $this->container['base64_encoding'] = $data['base64_encoding'] ?? null;
        $this->container['add_option'] = $data['add_option'] ?? null;
        $this->container['protocol'] = $data['protocol'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['id']) && ($this->container['id'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 79)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 79.";
        }

        if (!is_null($this->container['dstaddr']) && (count($this->container['dstaddr']) > 0)) {
            $invalidProperties[] = "invalid value for 'dstaddr', number of items must be less than or equal to 0.";
        }

        if (!is_null($this->container['dstaddr6']) && (count($this->container['dstaddr6']) > 0)) {
            $invalidProperties[] = "invalid value for 'dstaddr6', number of items must be less than or equal to 0.";
        }

        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'action', must be one of '%s'",
                $this->container['action'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) > 255)) {
            $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 255.";
        }

        $allowedValues = $this->getBase64EncodingAllowableValues();
        if (!is_null($this->container['base64_encoding']) && !in_array($this->container['base64_encoding'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'base64_encoding', must be one of '%s'",
                $this->container['base64_encoding'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAddOptionAllowableValues();
        if (!is_null($this->container['add_option']) && !in_array($this->container['add_option'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'add_option', must be one of '%s'",
                $this->container['add_option'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProtocolAllowableValues();
        if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'protocol', must be one of '%s'",
                $this->container['protocol'],
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id HTTP forwarded header id.
     *
     * @return self
     */
    public function setId($id)
    {

        if (!is_null($id) && ($id > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $id when calling WebProxyProfileNameHeaders., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($id) && ($id < 0)) {
            throw new \InvalidArgumentException('invalid value for $id when calling WebProxyProfileNameHeaders., must be bigger than or equal to 0.');
        }

        $this->container['id'] = $id;

        return $this;
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
     * @param string|null $name HTTP forwarded header name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 79)) {
            throw new \InvalidArgumentException('invalid length for $name when calling WebProxyProfileNameHeaders., must be smaller than or equal to 79.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets dstaddr
     *
     * @return \Fortigate\FortiOS\Model\CMDB\AuthenticationRuleNameSrcaddr[]|null
     */
    public function getDstaddr()
    {
        return $this->container['dstaddr'];
    }

    /**
     * Sets dstaddr
     *
     * @param \Fortigate\FortiOS\Model\CMDB\AuthenticationRuleNameSrcaddr[]|null $dstaddr Destination address and address group names.
     *
     * @return self
     */
    public function setDstaddr($dstaddr)
    {

        if (!is_null($dstaddr) && (count($dstaddr) > 0)) {
            throw new \InvalidArgumentException('invalid value for $dstaddr when calling WebProxyProfileNameHeaders., number of items must be less than or equal to 0.');
        }
        $this->container['dstaddr'] = $dstaddr;

        return $this;
    }

    /**
     * Gets dstaddr6
     *
     * @return \Fortigate\FortiOS\Model\CMDB\AuthenticationRuleNameSrcaddr[]|null
     */
    public function getDstaddr6()
    {
        return $this->container['dstaddr6'];
    }

    /**
     * Sets dstaddr6
     *
     * @param \Fortigate\FortiOS\Model\CMDB\AuthenticationRuleNameSrcaddr[]|null $dstaddr6 Destination address and address group names (IPv6).
     *
     * @return self
     */
    public function setDstaddr6($dstaddr6)
    {

        if (!is_null($dstaddr6) && (count($dstaddr6) > 0)) {
            throw new \InvalidArgumentException('invalid value for $dstaddr6 when calling WebProxyProfileNameHeaders., number of items must be less than or equal to 0.');
        }
        $this->container['dstaddr6'] = $dstaddr6;

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
     * @param string|null $action Action when the HTTP header is forwarded.    add-to-request:Add the HTTP header to request.    add-to-response:Add the HTTP header to response.    remove-from-request:Remove the HTTP header from request.    remove-from-response:Remove the HTTP header from response.
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
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content HTTP header content.
     *
     * @return self
     */
    public function setContent($content)
    {
        if (!is_null($content) && (mb_strlen($content) > 255)) {
            throw new \InvalidArgumentException('invalid length for $content when calling WebProxyProfileNameHeaders., must be smaller than or equal to 255.');
        }

        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets base64_encoding
     *
     * @return string|null
     */
    public function getBase64Encoding()
    {
        return $this->container['base64_encoding'];
    }

    /**
     * Sets base64_encoding
     *
     * @param string|null $base64_encoding Enable/disable use of base64 encoding of HTTP content.    disable:Disable use of base64 encoding of HTTP content.    enable:Enable use of base64 encoding of HTTP content.
     *
     * @return self
     */
    public function setBase64Encoding($base64_encoding)
    {
        $allowedValues = $this->getBase64EncodingAllowableValues();
        if (!is_null($base64_encoding) && !in_array($base64_encoding, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'base64_encoding', must be one of '%s'",
                    $base64_encoding,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['base64_encoding'] = $base64_encoding;

        return $this;
    }

    /**
     * Gets add_option
     *
     * @return string|null
     */
    public function getAddOption()
    {
        return $this->container['add_option'];
    }

    /**
     * Sets add_option
     *
     * @param string|null $add_option Configure options to append content to existing HTTP header or add new HTTP header.    append:Append content to existing HTTP header or create new header if HTTP header is not found.    new-on-not-found:Create new header only if existing HTTP header is not found.    new:Create new header regardless if existing HTTP header is found or not.
     *
     * @return self
     */
    public function setAddOption($add_option)
    {
        $allowedValues = $this->getAddOptionAllowableValues();
        if (!is_null($add_option) && !in_array($add_option, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'add_option', must be one of '%s'",
                    $add_option,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['add_option'] = $add_option;

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
     * @param string|null $protocol Configure protocol(s) to take add-option action on (HTTP, HTTPS, or both).    https:Perform add-option action on HTTPS.    http:Perform add-option action on HTTP.
     *
     * @return self
     */
    public function setProtocol($protocol)
    {
        $allowedValues = $this->getProtocolAllowableValues();
        if (!is_null($protocol) && !in_array($protocol, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'protocol', must be one of '%s'",
                    $protocol,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['protocol'] = $protocol;

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


