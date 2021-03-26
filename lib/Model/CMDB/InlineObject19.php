<?php
/**
 * InlineObject19
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
 * InlineObject19 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject19 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_19';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'method' => 'string',
        'negotiate_ntlm' => 'string',
        'kerberos_keytab' => 'string',
        'domain_controller' => 'string',
        'fsso_agent_for_ntlm' => 'string',
        'require_tfa' => 'string',
        'fsso_guest' => 'string',
        'user_database' => '\Fortigate\FortiOS\Model\CMDB\AuthenticationSchemeNameUserDatabase[]',
        'ssh_ca' => 'string'
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
        'method' => null,
        'negotiate_ntlm' => null,
        'kerberos_keytab' => null,
        'domain_controller' => null,
        'fsso_agent_for_ntlm' => null,
        'require_tfa' => null,
        'fsso_guest' => null,
        'user_database' => null,
        'ssh_ca' => null
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
        'method' => 'method',
        'negotiate_ntlm' => 'negotiate-ntlm',
        'kerberos_keytab' => 'kerberos-keytab',
        'domain_controller' => 'domain-controller',
        'fsso_agent_for_ntlm' => 'fsso-agent-for-ntlm',
        'require_tfa' => 'require-tfa',
        'fsso_guest' => 'fsso-guest',
        'user_database' => 'user-database',
        'ssh_ca' => 'ssh-ca'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'method' => 'setMethod',
        'negotiate_ntlm' => 'setNegotiateNtlm',
        'kerberos_keytab' => 'setKerberosKeytab',
        'domain_controller' => 'setDomainController',
        'fsso_agent_for_ntlm' => 'setFssoAgentForNtlm',
        'require_tfa' => 'setRequireTfa',
        'fsso_guest' => 'setFssoGuest',
        'user_database' => 'setUserDatabase',
        'ssh_ca' => 'setSshCa'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'method' => 'getMethod',
        'negotiate_ntlm' => 'getNegotiateNtlm',
        'kerberos_keytab' => 'getKerberosKeytab',
        'domain_controller' => 'getDomainController',
        'fsso_agent_for_ntlm' => 'getFssoAgentForNtlm',
        'require_tfa' => 'getRequireTfa',
        'fsso_guest' => 'getFssoGuest',
        'user_database' => 'getUserDatabase',
        'ssh_ca' => 'getSshCa'
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

    const METHOD_NTLM = 'ntlm';
    const METHOD_BASIC = 'basic';
    const METHOD_DIGEST = 'digest';
    const METHOD_FORM = 'form';
    const METHOD_NEGOTIATE = 'negotiate';
    const METHOD_FSSO = 'fsso';
    const METHOD_RSSO = 'rsso';
    const METHOD_SSH_PUBLICKEY = 'ssh-publickey';
    const NEGOTIATE_NTLM_ENABLE = 'enable';
    const NEGOTIATE_NTLM_DISABLE = 'disable';
    const REQUIRE_TFA_ENABLE = 'enable';
    const REQUIRE_TFA_DISABLE = 'disable';
    const FSSO_GUEST_ENABLE = 'enable';
    const FSSO_GUEST_DISABLE = 'disable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMethodAllowableValues()
    {
        return [
            self::METHOD_NTLM,
            self::METHOD_BASIC,
            self::METHOD_DIGEST,
            self::METHOD_FORM,
            self::METHOD_NEGOTIATE,
            self::METHOD_FSSO,
            self::METHOD_RSSO,
            self::METHOD_SSH_PUBLICKEY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNegotiateNtlmAllowableValues()
    {
        return [
            self::NEGOTIATE_NTLM_ENABLE,
            self::NEGOTIATE_NTLM_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequireTfaAllowableValues()
    {
        return [
            self::REQUIRE_TFA_ENABLE,
            self::REQUIRE_TFA_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFssoGuestAllowableValues()
    {
        return [
            self::FSSO_GUEST_ENABLE,
            self::FSSO_GUEST_DISABLE,
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
        $this->container['method'] = $data['method'] ?? null;
        $this->container['negotiate_ntlm'] = $data['negotiate_ntlm'] ?? null;
        $this->container['kerberos_keytab'] = $data['kerberos_keytab'] ?? null;
        $this->container['domain_controller'] = $data['domain_controller'] ?? null;
        $this->container['fsso_agent_for_ntlm'] = $data['fsso_agent_for_ntlm'] ?? null;
        $this->container['require_tfa'] = $data['require_tfa'] ?? null;
        $this->container['fsso_guest'] = $data['fsso_guest'] ?? null;
        $this->container['user_database'] = $data['user_database'] ?? null;
        $this->container['ssh_ca'] = $data['ssh_ca'] ?? null;
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

        $allowedValues = $this->getMethodAllowableValues();
        if (!is_null($this->container['method']) && !in_array($this->container['method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'method', must be one of '%s'",
                $this->container['method'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getNegotiateNtlmAllowableValues();
        if (!is_null($this->container['negotiate_ntlm']) && !in_array($this->container['negotiate_ntlm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'negotiate_ntlm', must be one of '%s'",
                $this->container['negotiate_ntlm'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['kerberos_keytab']) && (mb_strlen($this->container['kerberos_keytab']) > 35)) {
            $invalidProperties[] = "invalid value for 'kerberos_keytab', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['domain_controller']) && (mb_strlen($this->container['domain_controller']) > 35)) {
            $invalidProperties[] = "invalid value for 'domain_controller', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['fsso_agent_for_ntlm']) && (mb_strlen($this->container['fsso_agent_for_ntlm']) > 35)) {
            $invalidProperties[] = "invalid value for 'fsso_agent_for_ntlm', the character length must be smaller than or equal to 35.";
        }

        $allowedValues = $this->getRequireTfaAllowableValues();
        if (!is_null($this->container['require_tfa']) && !in_array($this->container['require_tfa'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'require_tfa', must be one of '%s'",
                $this->container['require_tfa'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFssoGuestAllowableValues();
        if (!is_null($this->container['fsso_guest']) && !in_array($this->container['fsso_guest'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fsso_guest', must be one of '%s'",
                $this->container['fsso_guest'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['user_database']) && (count($this->container['user_database']) > 0)) {
            $invalidProperties[] = "invalid value for 'user_database', number of items must be less than or equal to 0.";
        }

        if (!is_null($this->container['ssh_ca']) && (mb_strlen($this->container['ssh_ca']) > 35)) {
            $invalidProperties[] = "invalid value for 'ssh_ca', the character length must be smaller than or equal to 35.";
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
     * @param string|null $name Authentication scheme name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InlineObject19., must be smaller than or equal to 35.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string|null $method Authentication methods (default = basic).    ntlm:NTLM authentication.    basic:Basic HTTP authentication.    digest:Digest HTTP authentication.    form:Form-based HTTP authentication.    negotiate:Negotiate authentication.    fsso:Fortinet Single Sign-On (FSSO) authentication.    rsso:RADIUS Single Sign-On (RSSO) authentication.    ssh-publickey:Public key based SSH authentication.
     *
     * @return self
     */
    public function setMethod($method)
    {
        $allowedValues = $this->getMethodAllowableValues();
        if (!is_null($method) && !in_array($method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'method', must be one of '%s'",
                    $method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets negotiate_ntlm
     *
     * @return string|null
     */
    public function getNegotiateNtlm()
    {
        return $this->container['negotiate_ntlm'];
    }

    /**
     * Sets negotiate_ntlm
     *
     * @param string|null $negotiate_ntlm Enable/disable negotiate authentication for NTLM (default = disable).    enable:Enable negotiate authentication for NTLM.    disable:Disable negotiate authentication for NTLM.
     *
     * @return self
     */
    public function setNegotiateNtlm($negotiate_ntlm)
    {
        $allowedValues = $this->getNegotiateNtlmAllowableValues();
        if (!is_null($negotiate_ntlm) && !in_array($negotiate_ntlm, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'negotiate_ntlm', must be one of '%s'",
                    $negotiate_ntlm,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['negotiate_ntlm'] = $negotiate_ntlm;

        return $this;
    }

    /**
     * Gets kerberos_keytab
     *
     * @return string|null
     */
    public function getKerberosKeytab()
    {
        return $this->container['kerberos_keytab'];
    }

    /**
     * Sets kerberos_keytab
     *
     * @param string|null $kerberos_keytab Kerberos keytab setting.
     *
     * @return self
     */
    public function setKerberosKeytab($kerberos_keytab)
    {
        if (!is_null($kerberos_keytab) && (mb_strlen($kerberos_keytab) > 35)) {
            throw new \InvalidArgumentException('invalid length for $kerberos_keytab when calling InlineObject19., must be smaller than or equal to 35.');
        }

        $this->container['kerberos_keytab'] = $kerberos_keytab;

        return $this;
    }

    /**
     * Gets domain_controller
     *
     * @return string|null
     */
    public function getDomainController()
    {
        return $this->container['domain_controller'];
    }

    /**
     * Sets domain_controller
     *
     * @param string|null $domain_controller Domain controller setting.
     *
     * @return self
     */
    public function setDomainController($domain_controller)
    {
        if (!is_null($domain_controller) && (mb_strlen($domain_controller) > 35)) {
            throw new \InvalidArgumentException('invalid length for $domain_controller when calling InlineObject19., must be smaller than or equal to 35.');
        }

        $this->container['domain_controller'] = $domain_controller;

        return $this;
    }

    /**
     * Gets fsso_agent_for_ntlm
     *
     * @return string|null
     */
    public function getFssoAgentForNtlm()
    {
        return $this->container['fsso_agent_for_ntlm'];
    }

    /**
     * Sets fsso_agent_for_ntlm
     *
     * @param string|null $fsso_agent_for_ntlm FSSO agent to use for NTLM authentication.
     *
     * @return self
     */
    public function setFssoAgentForNtlm($fsso_agent_for_ntlm)
    {
        if (!is_null($fsso_agent_for_ntlm) && (mb_strlen($fsso_agent_for_ntlm) > 35)) {
            throw new \InvalidArgumentException('invalid length for $fsso_agent_for_ntlm when calling InlineObject19., must be smaller than or equal to 35.');
        }

        $this->container['fsso_agent_for_ntlm'] = $fsso_agent_for_ntlm;

        return $this;
    }

    /**
     * Gets require_tfa
     *
     * @return string|null
     */
    public function getRequireTfa()
    {
        return $this->container['require_tfa'];
    }

    /**
     * Sets require_tfa
     *
     * @param string|null $require_tfa Enable/disable two-factor authentication (default = disable).    enable:Enable two-factor authentication.    disable:Disable two-factor authentication.
     *
     * @return self
     */
    public function setRequireTfa($require_tfa)
    {
        $allowedValues = $this->getRequireTfaAllowableValues();
        if (!is_null($require_tfa) && !in_array($require_tfa, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'require_tfa', must be one of '%s'",
                    $require_tfa,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['require_tfa'] = $require_tfa;

        return $this;
    }

    /**
     * Gets fsso_guest
     *
     * @return string|null
     */
    public function getFssoGuest()
    {
        return $this->container['fsso_guest'];
    }

    /**
     * Sets fsso_guest
     *
     * @param string|null $fsso_guest Enable/disable user fsso-guest authentication (default = disable).    enable:Enable user fsso-guest authentication.    disable:Disable user fsso-guest authentication.
     *
     * @return self
     */
    public function setFssoGuest($fsso_guest)
    {
        $allowedValues = $this->getFssoGuestAllowableValues();
        if (!is_null($fsso_guest) && !in_array($fsso_guest, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fsso_guest', must be one of '%s'",
                    $fsso_guest,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fsso_guest'] = $fsso_guest;

        return $this;
    }

    /**
     * Gets user_database
     *
     * @return \Fortigate\FortiOS\Model\CMDB\AuthenticationSchemeNameUserDatabase[]|null
     */
    public function getUserDatabase()
    {
        return $this->container['user_database'];
    }

    /**
     * Sets user_database
     *
     * @param \Fortigate\FortiOS\Model\CMDB\AuthenticationSchemeNameUserDatabase[]|null $user_database Authentication server to contain user information; \"local\" (default) or \"123\" (for LDAP).
     *
     * @return self
     */
    public function setUserDatabase($user_database)
    {

        if (!is_null($user_database) && (count($user_database) > 0)) {
            throw new \InvalidArgumentException('invalid value for $user_database when calling InlineObject19., number of items must be less than or equal to 0.');
        }
        $this->container['user_database'] = $user_database;

        return $this;
    }

    /**
     * Gets ssh_ca
     *
     * @return string|null
     */
    public function getSshCa()
    {
        return $this->container['ssh_ca'];
    }

    /**
     * Sets ssh_ca
     *
     * @param string|null $ssh_ca SSH CA name.
     *
     * @return self
     */
    public function setSshCa($ssh_ca)
    {
        if (!is_null($ssh_ca) && (mb_strlen($ssh_ca) > 35)) {
            throw new \InvalidArgumentException('invalid length for $ssh_ca when calling InlineObject19., must be smaller than or equal to 35.');
        }

        $this->container['ssh_ca'] = $ssh_ca;

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


