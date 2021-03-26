<?php
/**
 * InlineObject460
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
 * InlineObject460 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject460 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_460';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'crl' => 'string',
        'range' => 'string',
        'source' => 'string',
        'update_vdom' => 'string',
        'ldap_server' => 'string',
        'ldap_username' => 'string',
        'ldap_password' => 'string',
        'http_url' => 'string',
        'scep_url' => 'string',
        'scep_cert' => 'string',
        'update_interval' => 'int',
        'source_ip' => 'string'
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
        'crl' => null,
        'range' => null,
        'source' => null,
        'update_vdom' => null,
        'ldap_server' => null,
        'ldap_username' => null,
        'ldap_password' => 'password',
        'http_url' => null,
        'scep_url' => null,
        'scep_cert' => null,
        'update_interval' => null,
        'source_ip' => 'ipv4'
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
        'crl' => 'crl',
        'range' => 'range',
        'source' => 'source',
        'update_vdom' => 'update-vdom',
        'ldap_server' => 'ldap-server',
        'ldap_username' => 'ldap-username',
        'ldap_password' => 'ldap-password',
        'http_url' => 'http-url',
        'scep_url' => 'scep-url',
        'scep_cert' => 'scep-cert',
        'update_interval' => 'update-interval',
        'source_ip' => 'source-ip'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'crl' => 'setCrl',
        'range' => 'setRange',
        'source' => 'setSource',
        'update_vdom' => 'setUpdateVdom',
        'ldap_server' => 'setLdapServer',
        'ldap_username' => 'setLdapUsername',
        'ldap_password' => 'setLdapPassword',
        'http_url' => 'setHttpUrl',
        'scep_url' => 'setScepUrl',
        'scep_cert' => 'setScepCert',
        'update_interval' => 'setUpdateInterval',
        'source_ip' => 'setSourceIp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'crl' => 'getCrl',
        'range' => 'getRange',
        'source' => 'getSource',
        'update_vdom' => 'getUpdateVdom',
        'ldap_server' => 'getLdapServer',
        'ldap_username' => 'getLdapUsername',
        'ldap_password' => 'getLdapPassword',
        'http_url' => 'getHttpUrl',
        'scep_url' => 'getScepUrl',
        'scep_cert' => 'getScepCert',
        'update_interval' => 'getUpdateInterval',
        'source_ip' => 'getSourceIp'
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

    const RANGE__GLOBAL = 'global';
    const RANGE_VDOM = 'vdom';
    const SOURCE_FACTORY = 'factory';
    const SOURCE_USER = 'user';
    const SOURCE_BUNDLE = 'bundle';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRangeAllowableValues()
    {
        return [
            self::RANGE__GLOBAL,
            self::RANGE_VDOM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_FACTORY,
            self::SOURCE_USER,
            self::SOURCE_BUNDLE,
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
        $this->container['crl'] = $data['crl'] ?? null;
        $this->container['range'] = $data['range'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['update_vdom'] = $data['update_vdom'] ?? null;
        $this->container['ldap_server'] = $data['ldap_server'] ?? null;
        $this->container['ldap_username'] = $data['ldap_username'] ?? null;
        $this->container['ldap_password'] = $data['ldap_password'] ?? null;
        $this->container['http_url'] = $data['http_url'] ?? null;
        $this->container['scep_url'] = $data['scep_url'] ?? null;
        $this->container['scep_cert'] = $data['scep_cert'] ?? null;
        $this->container['update_interval'] = $data['update_interval'] ?? null;
        $this->container['source_ip'] = $data['source_ip'] ?? null;
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

        $allowedValues = $this->getRangeAllowableValues();
        if (!is_null($this->container['range']) && !in_array($this->container['range'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'range', must be one of '%s'",
                $this->container['range'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'source', must be one of '%s'",
                $this->container['source'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['update_vdom']) && (mb_strlen($this->container['update_vdom']) > 31)) {
            $invalidProperties[] = "invalid value for 'update_vdom', the character length must be smaller than or equal to 31.";
        }

        if (!is_null($this->container['ldap_server']) && (mb_strlen($this->container['ldap_server']) > 35)) {
            $invalidProperties[] = "invalid value for 'ldap_server', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['ldap_username']) && (mb_strlen($this->container['ldap_username']) > 63)) {
            $invalidProperties[] = "invalid value for 'ldap_username', the character length must be smaller than or equal to 63.";
        }

        if (!is_null($this->container['http_url']) && (mb_strlen($this->container['http_url']) > 255)) {
            $invalidProperties[] = "invalid value for 'http_url', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['scep_url']) && (mb_strlen($this->container['scep_url']) > 255)) {
            $invalidProperties[] = "invalid value for 'scep_url', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['scep_cert']) && (mb_strlen($this->container['scep_cert']) > 35)) {
            $invalidProperties[] = "invalid value for 'scep_cert', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['update_interval']) && ($this->container['update_interval'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'update_interval', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['update_interval']) && ($this->container['update_interval'] < 0)) {
            $invalidProperties[] = "invalid value for 'update_interval', must be bigger than or equal to 0.";
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
     * @param string|null $name Name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InlineObject460., must be smaller than or equal to 35.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets crl
     *
     * @return string|null
     */
    public function getCrl()
    {
        return $this->container['crl'];
    }

    /**
     * Sets crl
     *
     * @param string|null $crl Certificate Revocation List as a PEM file.
     *
     * @return self
     */
    public function setCrl($crl)
    {
        $this->container['crl'] = $crl;

        return $this;
    }

    /**
     * Gets range
     *
     * @return string|null
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range
     *
     * @param string|null $range Either global or VDOM IP address range for the certificate.    global:Global range.    vdom:VDOM IP address range.
     *
     * @return self
     */
    public function setRange($range)
    {
        $allowedValues = $this->getRangeAllowableValues();
        if (!is_null($range) && !in_array($range, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'range', must be one of '%s'",
                    $range,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['range'] = $range;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source Certificate source type.    factory:Factory installed certificate.    user:User generated certificate.    bundle:Bundle file certificate.
     *
     * @return self
     */
    public function setSource($source)
    {
        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($source) && !in_array($source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'source', must be one of '%s'",
                    $source,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets update_vdom
     *
     * @return string|null
     */
    public function getUpdateVdom()
    {
        return $this->container['update_vdom'];
    }

    /**
     * Sets update_vdom
     *
     * @param string|null $update_vdom VDOM for CRL update.
     *
     * @return self
     */
    public function setUpdateVdom($update_vdom)
    {
        if (!is_null($update_vdom) && (mb_strlen($update_vdom) > 31)) {
            throw new \InvalidArgumentException('invalid length for $update_vdom when calling InlineObject460., must be smaller than or equal to 31.');
        }

        $this->container['update_vdom'] = $update_vdom;

        return $this;
    }

    /**
     * Gets ldap_server
     *
     * @return string|null
     */
    public function getLdapServer()
    {
        return $this->container['ldap_server'];
    }

    /**
     * Sets ldap_server
     *
     * @param string|null $ldap_server LDAP server name for CRL auto-update.
     *
     * @return self
     */
    public function setLdapServer($ldap_server)
    {
        if (!is_null($ldap_server) && (mb_strlen($ldap_server) > 35)) {
            throw new \InvalidArgumentException('invalid length for $ldap_server when calling InlineObject460., must be smaller than or equal to 35.');
        }

        $this->container['ldap_server'] = $ldap_server;

        return $this;
    }

    /**
     * Gets ldap_username
     *
     * @return string|null
     */
    public function getLdapUsername()
    {
        return $this->container['ldap_username'];
    }

    /**
     * Sets ldap_username
     *
     * @param string|null $ldap_username LDAP server user name.
     *
     * @return self
     */
    public function setLdapUsername($ldap_username)
    {
        if (!is_null($ldap_username) && (mb_strlen($ldap_username) > 63)) {
            throw new \InvalidArgumentException('invalid length for $ldap_username when calling InlineObject460., must be smaller than or equal to 63.');
        }

        $this->container['ldap_username'] = $ldap_username;

        return $this;
    }

    /**
     * Gets ldap_password
     *
     * @return string|null
     */
    public function getLdapPassword()
    {
        return $this->container['ldap_password'];
    }

    /**
     * Sets ldap_password
     *
     * @param string|null $ldap_password LDAP server user password.
     *
     * @return self
     */
    public function setLdapPassword($ldap_password)
    {
        $this->container['ldap_password'] = $ldap_password;

        return $this;
    }

    /**
     * Gets http_url
     *
     * @return string|null
     */
    public function getHttpUrl()
    {
        return $this->container['http_url'];
    }

    /**
     * Sets http_url
     *
     * @param string|null $http_url HTTP server URL for CRL auto-update.
     *
     * @return self
     */
    public function setHttpUrl($http_url)
    {
        if (!is_null($http_url) && (mb_strlen($http_url) > 255)) {
            throw new \InvalidArgumentException('invalid length for $http_url when calling InlineObject460., must be smaller than or equal to 255.');
        }

        $this->container['http_url'] = $http_url;

        return $this;
    }

    /**
     * Gets scep_url
     *
     * @return string|null
     */
    public function getScepUrl()
    {
        return $this->container['scep_url'];
    }

    /**
     * Sets scep_url
     *
     * @param string|null $scep_url SCEP server URL for CRL auto-update.
     *
     * @return self
     */
    public function setScepUrl($scep_url)
    {
        if (!is_null($scep_url) && (mb_strlen($scep_url) > 255)) {
            throw new \InvalidArgumentException('invalid length for $scep_url when calling InlineObject460., must be smaller than or equal to 255.');
        }

        $this->container['scep_url'] = $scep_url;

        return $this;
    }

    /**
     * Gets scep_cert
     *
     * @return string|null
     */
    public function getScepCert()
    {
        return $this->container['scep_cert'];
    }

    /**
     * Sets scep_cert
     *
     * @param string|null $scep_cert Local certificate for SCEP communication for CRL auto-update.
     *
     * @return self
     */
    public function setScepCert($scep_cert)
    {
        if (!is_null($scep_cert) && (mb_strlen($scep_cert) > 35)) {
            throw new \InvalidArgumentException('invalid length for $scep_cert when calling InlineObject460., must be smaller than or equal to 35.');
        }

        $this->container['scep_cert'] = $scep_cert;

        return $this;
    }

    /**
     * Gets update_interval
     *
     * @return int|null
     */
    public function getUpdateInterval()
    {
        return $this->container['update_interval'];
    }

    /**
     * Sets update_interval
     *
     * @param int|null $update_interval Time in seconds before the FortiGate checks for an updated CRL. Set to 0 to update only when it expires.
     *
     * @return self
     */
    public function setUpdateInterval($update_interval)
    {

        if (!is_null($update_interval) && ($update_interval > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $update_interval when calling InlineObject460., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($update_interval) && ($update_interval < 0)) {
            throw new \InvalidArgumentException('invalid value for $update_interval when calling InlineObject460., must be bigger than or equal to 0.');
        }

        $this->container['update_interval'] = $update_interval;

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
     * @param string|null $source_ip Source IP address for communications to a HTTP or SCEP CA server.
     *
     * @return self
     */
    public function setSourceIp($source_ip)
    {
        $this->container['source_ip'] = $source_ip;

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


