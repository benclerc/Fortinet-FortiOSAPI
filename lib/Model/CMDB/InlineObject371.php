<?php
/**
 * InlineObject371
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
 * InlineObject371 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject371 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_371';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'protocol' => 'int',
        'port' => 'int'
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
        'protocol' => null,
        'port' => null
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
        'protocol' => 'protocol',
        'port' => 'port'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'protocol' => 'setProtocol',
        'port' => 'setPort'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'protocol' => 'getProtocol',
        'port' => 'getPort'
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

    const NAME_FTP = 'ftp';
    const NAME_TFTP = 'tftp';
    const NAME_RAS = 'ras';
    const NAME_H323 = 'h323';
    const NAME_TNS = 'tns';
    const NAME_MMS = 'mms';
    const NAME_SIP = 'sip';
    const NAME_PPTP = 'pptp';
    const NAME_RTSP = 'rtsp';
    const NAME_DNS_UDP = 'dns-udp';
    const NAME_DNS_TCP = 'dns-tcp';
    const NAME_PMAP = 'pmap';
    const NAME_RSH = 'rsh';
    const NAME_DCERPC = 'dcerpc';
    const NAME_MGCP = 'mgcp';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNameAllowableValues()
    {
        return [
            self::NAME_FTP,
            self::NAME_TFTP,
            self::NAME_RAS,
            self::NAME_H323,
            self::NAME_TNS,
            self::NAME_MMS,
            self::NAME_SIP,
            self::NAME_PPTP,
            self::NAME_RTSP,
            self::NAME_DNS_UDP,
            self::NAME_DNS_TCP,
            self::NAME_PMAP,
            self::NAME_RSH,
            self::NAME_DCERPC,
            self::NAME_MGCP,
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
        $this->container['protocol'] = $data['protocol'] ?? null;
        $this->container['port'] = $data['port'] ?? null;
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

        $allowedValues = $this->getNameAllowableValues();
        if (!is_null($this->container['name']) && !in_array($this->container['name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'name', must be one of '%s'",
                $this->container['name'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['protocol']) && ($this->container['protocol'] > 255)) {
            $invalidProperties[] = "invalid value for 'protocol', must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['protocol']) && ($this->container['protocol'] < 0)) {
            $invalidProperties[] = "invalid value for 'protocol', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['port']) && ($this->container['port'] > 65535)) {
            $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['port']) && ($this->container['port'] < 1)) {
            $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 1.";
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
     * @param int|null $id Session helper ID.
     *
     * @return self
     */
    public function setId($id)
    {

        if (!is_null($id) && ($id > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $id when calling InlineObject371., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($id) && ($id < 0)) {
            throw new \InvalidArgumentException('invalid value for $id when calling InlineObject371., must be bigger than or equal to 0.');
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
     * @param string|null $name Helper name.    ftp:FTP.    tftp:TFTP.    ras:RAS.    h323:H323.    tns:TNS.    mms:MMS.    sip:SIP.    pptp:PPTP.    rtsp:RTSP.    dns-udp:DNS UDP.    dns-tcp:DNS TCP.    pmap:PMAP.    rsh:RSH.    dcerpc:DCERPC.    mgcp:MGCP.
     *
     * @return self
     */
    public function setName($name)
    {
        $allowedValues = $this->getNameAllowableValues();
        if (!is_null($name) && !in_array($name, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'name', must be one of '%s'",
                    $name,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets protocol
     *
     * @return int|null
     */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     *
     * @param int|null $protocol Protocol number.
     *
     * @return self
     */
    public function setProtocol($protocol)
    {

        if (!is_null($protocol) && ($protocol > 255)) {
            throw new \InvalidArgumentException('invalid value for $protocol when calling InlineObject371., must be smaller than or equal to 255.');
        }
        if (!is_null($protocol) && ($protocol < 0)) {
            throw new \InvalidArgumentException('invalid value for $protocol when calling InlineObject371., must be bigger than or equal to 0.');
        }

        $this->container['protocol'] = $protocol;

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
     * @param int|null $port Protocol port.
     *
     * @return self
     */
    public function setPort($port)
    {

        if (!is_null($port) && ($port > 65535)) {
            throw new \InvalidArgumentException('invalid value for $port when calling InlineObject371., must be smaller than or equal to 65535.');
        }
        if (!is_null($port) && ($port < 1)) {
            throw new \InvalidArgumentException('invalid value for $port when calling InlineObject371., must be bigger than or equal to 1.');
        }

        $this->container['port'] = $port;

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


