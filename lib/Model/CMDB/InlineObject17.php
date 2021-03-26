<?php
/**
 * InlineObject17
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
 * InlineObject17 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject17 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_17';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'status' => 'string',
        'protocol' => 'string',
        'srcaddr' => '\Fortigate\FortiOS\Model\CMDB\AuthenticationRuleNameSrcaddr[]',
        'srcaddr6' => '\Fortigate\FortiOS\Model\CMDB\AuthenticationRuleNameSrcaddr[]',
        'ip_based' => 'string',
        'active_auth_method' => 'string',
        'sso_auth_method' => 'string',
        'web_auth_cookie' => 'string',
        'transaction_based' => 'string',
        'web_portal' => 'string',
        'comments' => 'string'
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
        'status' => null,
        'protocol' => null,
        'srcaddr' => null,
        'srcaddr6' => null,
        'ip_based' => null,
        'active_auth_method' => null,
        'sso_auth_method' => null,
        'web_auth_cookie' => null,
        'transaction_based' => null,
        'web_portal' => null,
        'comments' => null
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
        'status' => 'status',
        'protocol' => 'protocol',
        'srcaddr' => 'srcaddr',
        'srcaddr6' => 'srcaddr6',
        'ip_based' => 'ip-based',
        'active_auth_method' => 'active-auth-method',
        'sso_auth_method' => 'sso-auth-method',
        'web_auth_cookie' => 'web-auth-cookie',
        'transaction_based' => 'transaction-based',
        'web_portal' => 'web-portal',
        'comments' => 'comments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'status' => 'setStatus',
        'protocol' => 'setProtocol',
        'srcaddr' => 'setSrcaddr',
        'srcaddr6' => 'setSrcaddr6',
        'ip_based' => 'setIpBased',
        'active_auth_method' => 'setActiveAuthMethod',
        'sso_auth_method' => 'setSsoAuthMethod',
        'web_auth_cookie' => 'setWebAuthCookie',
        'transaction_based' => 'setTransactionBased',
        'web_portal' => 'setWebPortal',
        'comments' => 'setComments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'status' => 'getStatus',
        'protocol' => 'getProtocol',
        'srcaddr' => 'getSrcaddr',
        'srcaddr6' => 'getSrcaddr6',
        'ip_based' => 'getIpBased',
        'active_auth_method' => 'getActiveAuthMethod',
        'sso_auth_method' => 'getSsoAuthMethod',
        'web_auth_cookie' => 'getWebAuthCookie',
        'transaction_based' => 'getTransactionBased',
        'web_portal' => 'getWebPortal',
        'comments' => 'getComments'
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
    const PROTOCOL_HTTP = 'http';
    const PROTOCOL_FTP = 'ftp';
    const PROTOCOL_SOCKS = 'socks';
    const PROTOCOL_SSH = 'ssh';
    const IP_BASED_ENABLE = 'enable';
    const IP_BASED_DISABLE = 'disable';
    const WEB_AUTH_COOKIE_ENABLE = 'enable';
    const WEB_AUTH_COOKIE_DISABLE = 'disable';
    const TRANSACTION_BASED_ENABLE = 'enable';
    const TRANSACTION_BASED_DISABLE = 'disable';
    const WEB_PORTAL_ENABLE = 'enable';
    const WEB_PORTAL_DISABLE = 'disable';
    

    
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
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_HTTP,
            self::PROTOCOL_FTP,
            self::PROTOCOL_SOCKS,
            self::PROTOCOL_SSH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIpBasedAllowableValues()
    {
        return [
            self::IP_BASED_ENABLE,
            self::IP_BASED_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWebAuthCookieAllowableValues()
    {
        return [
            self::WEB_AUTH_COOKIE_ENABLE,
            self::WEB_AUTH_COOKIE_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionBasedAllowableValues()
    {
        return [
            self::TRANSACTION_BASED_ENABLE,
            self::TRANSACTION_BASED_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWebPortalAllowableValues()
    {
        return [
            self::WEB_PORTAL_ENABLE,
            self::WEB_PORTAL_DISABLE,
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['protocol'] = $data['protocol'] ?? null;
        $this->container['srcaddr'] = $data['srcaddr'] ?? null;
        $this->container['srcaddr6'] = $data['srcaddr6'] ?? null;
        $this->container['ip_based'] = $data['ip_based'] ?? null;
        $this->container['active_auth_method'] = $data['active_auth_method'] ?? null;
        $this->container['sso_auth_method'] = $data['sso_auth_method'] ?? null;
        $this->container['web_auth_cookie'] = $data['web_auth_cookie'] ?? null;
        $this->container['transaction_based'] = $data['transaction_based'] ?? null;
        $this->container['web_portal'] = $data['web_portal'] ?? null;
        $this->container['comments'] = $data['comments'] ?? null;
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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

        if (!is_null($this->container['srcaddr']) && (count($this->container['srcaddr']) > 0)) {
            $invalidProperties[] = "invalid value for 'srcaddr', number of items must be less than or equal to 0.";
        }

        if (!is_null($this->container['srcaddr6']) && (count($this->container['srcaddr6']) > 0)) {
            $invalidProperties[] = "invalid value for 'srcaddr6', number of items must be less than or equal to 0.";
        }

        $allowedValues = $this->getIpBasedAllowableValues();
        if (!is_null($this->container['ip_based']) && !in_array($this->container['ip_based'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ip_based', must be one of '%s'",
                $this->container['ip_based'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['active_auth_method']) && (mb_strlen($this->container['active_auth_method']) > 35)) {
            $invalidProperties[] = "invalid value for 'active_auth_method', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['sso_auth_method']) && (mb_strlen($this->container['sso_auth_method']) > 35)) {
            $invalidProperties[] = "invalid value for 'sso_auth_method', the character length must be smaller than or equal to 35.";
        }

        $allowedValues = $this->getWebAuthCookieAllowableValues();
        if (!is_null($this->container['web_auth_cookie']) && !in_array($this->container['web_auth_cookie'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'web_auth_cookie', must be one of '%s'",
                $this->container['web_auth_cookie'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTransactionBasedAllowableValues();
        if (!is_null($this->container['transaction_based']) && !in_array($this->container['transaction_based'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transaction_based', must be one of '%s'",
                $this->container['transaction_based'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWebPortalAllowableValues();
        if (!is_null($this->container['web_portal']) && !in_array($this->container['web_portal'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'web_portal', must be one of '%s'",
                $this->container['web_portal'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['comments']) && (mb_strlen($this->container['comments']) > 1023)) {
            $invalidProperties[] = "invalid value for 'comments', the character length must be smaller than or equal to 1023.";
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
     * @param string|null $name Authentication rule name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InlineObject17., must be smaller than or equal to 35.');
        }

        $this->container['name'] = $name;

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
     * @param string|null $status Enable/disable this authentication rule.    enable:Enable this authentication rule.    disable:Disable this authentication rule.
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
     * @param string|null $protocol Authentication is required for the selected protocol (default = HTTP).    http:HTTP traffic is matched and authentication is required.    ftp:FTP traffic is matched and authentication is required.    socks:SOCKS traffic is matched and authentication is required.    ssh:SSH traffic is matched and authentication is required.
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
     * Gets srcaddr
     *
     * @return \Fortigate\FortiOS\Model\CMDB\AuthenticationRuleNameSrcaddr[]|null
     */
    public function getSrcaddr()
    {
        return $this->container['srcaddr'];
    }

    /**
     * Sets srcaddr
     *
     * @param \Fortigate\FortiOS\Model\CMDB\AuthenticationRuleNameSrcaddr[]|null $srcaddr Authentication is required for the selected IPv4 source address.
     *
     * @return self
     */
    public function setSrcaddr($srcaddr)
    {

        if (!is_null($srcaddr) && (count($srcaddr) > 0)) {
            throw new \InvalidArgumentException('invalid value for $srcaddr when calling InlineObject17., number of items must be less than or equal to 0.');
        }
        $this->container['srcaddr'] = $srcaddr;

        return $this;
    }

    /**
     * Gets srcaddr6
     *
     * @return \Fortigate\FortiOS\Model\CMDB\AuthenticationRuleNameSrcaddr[]|null
     */
    public function getSrcaddr6()
    {
        return $this->container['srcaddr6'];
    }

    /**
     * Sets srcaddr6
     *
     * @param \Fortigate\FortiOS\Model\CMDB\AuthenticationRuleNameSrcaddr[]|null $srcaddr6 Authentication is required for the selected IPv6 source address.
     *
     * @return self
     */
    public function setSrcaddr6($srcaddr6)
    {

        if (!is_null($srcaddr6) && (count($srcaddr6) > 0)) {
            throw new \InvalidArgumentException('invalid value for $srcaddr6 when calling InlineObject17., number of items must be less than or equal to 0.');
        }
        $this->container['srcaddr6'] = $srcaddr6;

        return $this;
    }

    /**
     * Gets ip_based
     *
     * @return string|null
     */
    public function getIpBased()
    {
        return $this->container['ip_based'];
    }

    /**
     * Sets ip_based
     *
     * @param string|null $ip_based Enable/disable IP-based authentication. When enabled, previously authenticated users from the same IP address will be exempted.    enable:Enable IP-based authentication.    disable:Disable IP-based authentication.
     *
     * @return self
     */
    public function setIpBased($ip_based)
    {
        $allowedValues = $this->getIpBasedAllowableValues();
        if (!is_null($ip_based) && !in_array($ip_based, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ip_based', must be one of '%s'",
                    $ip_based,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ip_based'] = $ip_based;

        return $this;
    }

    /**
     * Gets active_auth_method
     *
     * @return string|null
     */
    public function getActiveAuthMethod()
    {
        return $this->container['active_auth_method'];
    }

    /**
     * Sets active_auth_method
     *
     * @param string|null $active_auth_method Select an active authentication method.
     *
     * @return self
     */
    public function setActiveAuthMethod($active_auth_method)
    {
        if (!is_null($active_auth_method) && (mb_strlen($active_auth_method) > 35)) {
            throw new \InvalidArgumentException('invalid length for $active_auth_method when calling InlineObject17., must be smaller than or equal to 35.');
        }

        $this->container['active_auth_method'] = $active_auth_method;

        return $this;
    }

    /**
     * Gets sso_auth_method
     *
     * @return string|null
     */
    public function getSsoAuthMethod()
    {
        return $this->container['sso_auth_method'];
    }

    /**
     * Sets sso_auth_method
     *
     * @param string|null $sso_auth_method Select a single-sign on (SSO) authentication method.
     *
     * @return self
     */
    public function setSsoAuthMethod($sso_auth_method)
    {
        if (!is_null($sso_auth_method) && (mb_strlen($sso_auth_method) > 35)) {
            throw new \InvalidArgumentException('invalid length for $sso_auth_method when calling InlineObject17., must be smaller than or equal to 35.');
        }

        $this->container['sso_auth_method'] = $sso_auth_method;

        return $this;
    }

    /**
     * Gets web_auth_cookie
     *
     * @return string|null
     */
    public function getWebAuthCookie()
    {
        return $this->container['web_auth_cookie'];
    }

    /**
     * Sets web_auth_cookie
     *
     * @param string|null $web_auth_cookie Enable/disable Web authentication cookies (default = disable).    enable:Enable Web authentication cookie.    disable:Disable Web authentication cookie.
     *
     * @return self
     */
    public function setWebAuthCookie($web_auth_cookie)
    {
        $allowedValues = $this->getWebAuthCookieAllowableValues();
        if (!is_null($web_auth_cookie) && !in_array($web_auth_cookie, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'web_auth_cookie', must be one of '%s'",
                    $web_auth_cookie,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['web_auth_cookie'] = $web_auth_cookie;

        return $this;
    }

    /**
     * Gets transaction_based
     *
     * @return string|null
     */
    public function getTransactionBased()
    {
        return $this->container['transaction_based'];
    }

    /**
     * Sets transaction_based
     *
     * @param string|null $transaction_based Enable/disable transaction based authentication (default = disable).    enable:Enable transaction based authentication.    disable:Disable transaction based authentication.
     *
     * @return self
     */
    public function setTransactionBased($transaction_based)
    {
        $allowedValues = $this->getTransactionBasedAllowableValues();
        if (!is_null($transaction_based) && !in_array($transaction_based, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transaction_based', must be one of '%s'",
                    $transaction_based,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transaction_based'] = $transaction_based;

        return $this;
    }

    /**
     * Gets web_portal
     *
     * @return string|null
     */
    public function getWebPortal()
    {
        return $this->container['web_portal'];
    }

    /**
     * Sets web_portal
     *
     * @param string|null $web_portal Enable/disable web portal for proxy transparent policy (default = enable).    enable:Enable web-portal.    disable:Disable web-portal.
     *
     * @return self
     */
    public function setWebPortal($web_portal)
    {
        $allowedValues = $this->getWebPortalAllowableValues();
        if (!is_null($web_portal) && !in_array($web_portal, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'web_portal', must be one of '%s'",
                    $web_portal,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['web_portal'] = $web_portal;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments Comment.
     *
     * @return self
     */
    public function setComments($comments)
    {
        if (!is_null($comments) && (mb_strlen($comments) > 1023)) {
            throw new \InvalidArgumentException('invalid length for $comments when calling InlineObject17., must be smaller than or equal to 1023.');
        }

        $this->container['comments'] = $comments;

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


