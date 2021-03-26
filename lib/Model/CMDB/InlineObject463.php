<?php
/**
 * InlineObject463
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
 * InlineObject463 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject463 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_463';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'password' => 'string',
        'comments' => 'string',
        'private_key' => 'string',
        'certificate' => 'string',
        'csr' => 'string',
        'state' => 'string',
        'scep_url' => 'string',
        'range' => 'string',
        'source' => 'string',
        'auto_regenerate_days' => 'int',
        'auto_regenerate_days_warning' => 'int',
        'scep_password' => 'string',
        'ca_identifier' => 'string',
        'name_encoding' => 'string',
        'source_ip' => 'string',
        'ike_localid' => 'string',
        'ike_localid_type' => 'string',
        'enroll_protocol' => 'string',
        'cmp_server' => 'string',
        'cmp_path' => 'string',
        'cmp_server_cert' => 'string',
        'cmp_regeneration_method' => 'string'
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
        'password' => 'password',
        'comments' => null,
        'private_key' => null,
        'certificate' => null,
        'csr' => null,
        'state' => null,
        'scep_url' => null,
        'range' => null,
        'source' => null,
        'auto_regenerate_days' => null,
        'auto_regenerate_days_warning' => null,
        'scep_password' => 'password',
        'ca_identifier' => null,
        'name_encoding' => null,
        'source_ip' => 'ipv4',
        'ike_localid' => null,
        'ike_localid_type' => null,
        'enroll_protocol' => null,
        'cmp_server' => null,
        'cmp_path' => null,
        'cmp_server_cert' => null,
        'cmp_regeneration_method' => null
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
        'password' => 'password',
        'comments' => 'comments',
        'private_key' => 'private-key',
        'certificate' => 'certificate',
        'csr' => 'csr',
        'state' => 'state',
        'scep_url' => 'scep-url',
        'range' => 'range',
        'source' => 'source',
        'auto_regenerate_days' => 'auto-regenerate-days',
        'auto_regenerate_days_warning' => 'auto-regenerate-days-warning',
        'scep_password' => 'scep-password',
        'ca_identifier' => 'ca-identifier',
        'name_encoding' => 'name-encoding',
        'source_ip' => 'source-ip',
        'ike_localid' => 'ike-localid',
        'ike_localid_type' => 'ike-localid-type',
        'enroll_protocol' => 'enroll-protocol',
        'cmp_server' => 'cmp-server',
        'cmp_path' => 'cmp-path',
        'cmp_server_cert' => 'cmp-server-cert',
        'cmp_regeneration_method' => 'cmp-regeneration-method'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'password' => 'setPassword',
        'comments' => 'setComments',
        'private_key' => 'setPrivateKey',
        'certificate' => 'setCertificate',
        'csr' => 'setCsr',
        'state' => 'setState',
        'scep_url' => 'setScepUrl',
        'range' => 'setRange',
        'source' => 'setSource',
        'auto_regenerate_days' => 'setAutoRegenerateDays',
        'auto_regenerate_days_warning' => 'setAutoRegenerateDaysWarning',
        'scep_password' => 'setScepPassword',
        'ca_identifier' => 'setCaIdentifier',
        'name_encoding' => 'setNameEncoding',
        'source_ip' => 'setSourceIp',
        'ike_localid' => 'setIkeLocalid',
        'ike_localid_type' => 'setIkeLocalidType',
        'enroll_protocol' => 'setEnrollProtocol',
        'cmp_server' => 'setCmpServer',
        'cmp_path' => 'setCmpPath',
        'cmp_server_cert' => 'setCmpServerCert',
        'cmp_regeneration_method' => 'setCmpRegenerationMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'password' => 'getPassword',
        'comments' => 'getComments',
        'private_key' => 'getPrivateKey',
        'certificate' => 'getCertificate',
        'csr' => 'getCsr',
        'state' => 'getState',
        'scep_url' => 'getScepUrl',
        'range' => 'getRange',
        'source' => 'getSource',
        'auto_regenerate_days' => 'getAutoRegenerateDays',
        'auto_regenerate_days_warning' => 'getAutoRegenerateDaysWarning',
        'scep_password' => 'getScepPassword',
        'ca_identifier' => 'getCaIdentifier',
        'name_encoding' => 'getNameEncoding',
        'source_ip' => 'getSourceIp',
        'ike_localid' => 'getIkeLocalid',
        'ike_localid_type' => 'getIkeLocalidType',
        'enroll_protocol' => 'getEnrollProtocol',
        'cmp_server' => 'getCmpServer',
        'cmp_path' => 'getCmpPath',
        'cmp_server_cert' => 'getCmpServerCert',
        'cmp_regeneration_method' => 'getCmpRegenerationMethod'
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
    const NAME_ENCODING_PRINTABLE = 'printable';
    const NAME_ENCODING_UTF8 = 'utf8';
    const IKE_LOCALID_TYPE_ASN1DN = 'asn1dn';
    const IKE_LOCALID_TYPE_FQDN = 'fqdn';
    const ENROLL_PROTOCOL_NONE = 'none';
    const ENROLL_PROTOCOL_SCEP = 'scep';
    const ENROLL_PROTOCOL_CMPV2 = 'cmpv2';
    const CMP_REGENERATION_METHOD_KEYUPATE = 'keyupate';
    const CMP_REGENERATION_METHOD_RENEWAL = 'renewal';
    

    
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNameEncodingAllowableValues()
    {
        return [
            self::NAME_ENCODING_PRINTABLE,
            self::NAME_ENCODING_UTF8,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIkeLocalidTypeAllowableValues()
    {
        return [
            self::IKE_LOCALID_TYPE_ASN1DN,
            self::IKE_LOCALID_TYPE_FQDN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEnrollProtocolAllowableValues()
    {
        return [
            self::ENROLL_PROTOCOL_NONE,
            self::ENROLL_PROTOCOL_SCEP,
            self::ENROLL_PROTOCOL_CMPV2,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCmpRegenerationMethodAllowableValues()
    {
        return [
            self::CMP_REGENERATION_METHOD_KEYUPATE,
            self::CMP_REGENERATION_METHOD_RENEWAL,
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
        $this->container['password'] = $data['password'] ?? null;
        $this->container['comments'] = $data['comments'] ?? null;
        $this->container['private_key'] = $data['private_key'] ?? null;
        $this->container['certificate'] = $data['certificate'] ?? null;
        $this->container['csr'] = $data['csr'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['scep_url'] = $data['scep_url'] ?? null;
        $this->container['range'] = $data['range'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['auto_regenerate_days'] = $data['auto_regenerate_days'] ?? null;
        $this->container['auto_regenerate_days_warning'] = $data['auto_regenerate_days_warning'] ?? null;
        $this->container['scep_password'] = $data['scep_password'] ?? null;
        $this->container['ca_identifier'] = $data['ca_identifier'] ?? null;
        $this->container['name_encoding'] = $data['name_encoding'] ?? null;
        $this->container['source_ip'] = $data['source_ip'] ?? null;
        $this->container['ike_localid'] = $data['ike_localid'] ?? null;
        $this->container['ike_localid_type'] = $data['ike_localid_type'] ?? null;
        $this->container['enroll_protocol'] = $data['enroll_protocol'] ?? null;
        $this->container['cmp_server'] = $data['cmp_server'] ?? null;
        $this->container['cmp_path'] = $data['cmp_path'] ?? null;
        $this->container['cmp_server_cert'] = $data['cmp_server_cert'] ?? null;
        $this->container['cmp_regeneration_method'] = $data['cmp_regeneration_method'] ?? null;
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

        if (!is_null($this->container['comments']) && (mb_strlen($this->container['comments']) > 511)) {
            $invalidProperties[] = "invalid value for 'comments', the character length must be smaller than or equal to 511.";
        }

        if (!is_null($this->container['scep_url']) && (mb_strlen($this->container['scep_url']) > 255)) {
            $invalidProperties[] = "invalid value for 'scep_url', the character length must be smaller than or equal to 255.";
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

        if (!is_null($this->container['auto_regenerate_days']) && ($this->container['auto_regenerate_days'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'auto_regenerate_days', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['auto_regenerate_days']) && ($this->container['auto_regenerate_days'] < 0)) {
            $invalidProperties[] = "invalid value for 'auto_regenerate_days', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['auto_regenerate_days_warning']) && ($this->container['auto_regenerate_days_warning'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'auto_regenerate_days_warning', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['auto_regenerate_days_warning']) && ($this->container['auto_regenerate_days_warning'] < 0)) {
            $invalidProperties[] = "invalid value for 'auto_regenerate_days_warning', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['ca_identifier']) && (mb_strlen($this->container['ca_identifier']) > 255)) {
            $invalidProperties[] = "invalid value for 'ca_identifier', the character length must be smaller than or equal to 255.";
        }

        $allowedValues = $this->getNameEncodingAllowableValues();
        if (!is_null($this->container['name_encoding']) && !in_array($this->container['name_encoding'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'name_encoding', must be one of '%s'",
                $this->container['name_encoding'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['ike_localid']) && (mb_strlen($this->container['ike_localid']) > 63)) {
            $invalidProperties[] = "invalid value for 'ike_localid', the character length must be smaller than or equal to 63.";
        }

        $allowedValues = $this->getIkeLocalidTypeAllowableValues();
        if (!is_null($this->container['ike_localid_type']) && !in_array($this->container['ike_localid_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ike_localid_type', must be one of '%s'",
                $this->container['ike_localid_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEnrollProtocolAllowableValues();
        if (!is_null($this->container['enroll_protocol']) && !in_array($this->container['enroll_protocol'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'enroll_protocol', must be one of '%s'",
                $this->container['enroll_protocol'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['cmp_server']) && (mb_strlen($this->container['cmp_server']) > 63)) {
            $invalidProperties[] = "invalid value for 'cmp_server', the character length must be smaller than or equal to 63.";
        }

        if (!is_null($this->container['cmp_path']) && (mb_strlen($this->container['cmp_path']) > 255)) {
            $invalidProperties[] = "invalid value for 'cmp_path', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['cmp_server_cert']) && (mb_strlen($this->container['cmp_server_cert']) > 79)) {
            $invalidProperties[] = "invalid value for 'cmp_server_cert', the character length must be smaller than or equal to 79.";
        }

        $allowedValues = $this->getCmpRegenerationMethodAllowableValues();
        if (!is_null($this->container['cmp_regeneration_method']) && !in_array($this->container['cmp_regeneration_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cmp_regeneration_method', must be one of '%s'",
                $this->container['cmp_regeneration_method'],
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
            throw new \InvalidArgumentException('invalid length for $name when calling InlineObject463., must be smaller than or equal to 35.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password Password as a PEM file.
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

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
        if (!is_null($comments) && (mb_strlen($comments) > 511)) {
            throw new \InvalidArgumentException('invalid length for $comments when calling InlineObject463., must be smaller than or equal to 511.');
        }

        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets private_key
     *
     * @return string|null
     */
    public function getPrivateKey()
    {
        return $this->container['private_key'];
    }

    /**
     * Sets private_key
     *
     * @param string|null $private_key PEM format key, encrypted with a password.
     *
     * @return self
     */
    public function setPrivateKey($private_key)
    {
        $this->container['private_key'] = $private_key;

        return $this;
    }

    /**
     * Gets certificate
     *
     * @return string|null
     */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
     * Sets certificate
     *
     * @param string|null $certificate PEM format certificate.
     *
     * @return self
     */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;

        return $this;
    }

    /**
     * Gets csr
     *
     * @return string|null
     */
    public function getCsr()
    {
        return $this->container['csr'];
    }

    /**
     * Sets csr
     *
     * @param string|null $csr Certificate Signing Request.
     *
     * @return self
     */
    public function setCsr($csr)
    {
        $this->container['csr'] = $csr;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state Certificate Signing Request State.
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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
     * @param string|null $scep_url SCEP server URL.
     *
     * @return self
     */
    public function setScepUrl($scep_url)
    {
        if (!is_null($scep_url) && (mb_strlen($scep_url) > 255)) {
            throw new \InvalidArgumentException('invalid length for $scep_url when calling InlineObject463., must be smaller than or equal to 255.');
        }

        $this->container['scep_url'] = $scep_url;

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
     * @param string|null $range Either a global or VDOM IP address range for the certificate.    global:Global range.    vdom:VDOM IP address range.
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
     * Gets auto_regenerate_days
     *
     * @return int|null
     */
    public function getAutoRegenerateDays()
    {
        return $this->container['auto_regenerate_days'];
    }

    /**
     * Sets auto_regenerate_days
     *
     * @param int|null $auto_regenerate_days Number of days to wait before expiry of an updated local certificate is requested (0 = disabled).
     *
     * @return self
     */
    public function setAutoRegenerateDays($auto_regenerate_days)
    {

        if (!is_null($auto_regenerate_days) && ($auto_regenerate_days > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $auto_regenerate_days when calling InlineObject463., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($auto_regenerate_days) && ($auto_regenerate_days < 0)) {
            throw new \InvalidArgumentException('invalid value for $auto_regenerate_days when calling InlineObject463., must be bigger than or equal to 0.');
        }

        $this->container['auto_regenerate_days'] = $auto_regenerate_days;

        return $this;
    }

    /**
     * Gets auto_regenerate_days_warning
     *
     * @return int|null
     */
    public function getAutoRegenerateDaysWarning()
    {
        return $this->container['auto_regenerate_days_warning'];
    }

    /**
     * Sets auto_regenerate_days_warning
     *
     * @param int|null $auto_regenerate_days_warning Number of days to wait before an expiry warning message is generated (0 = disabled).
     *
     * @return self
     */
    public function setAutoRegenerateDaysWarning($auto_regenerate_days_warning)
    {

        if (!is_null($auto_regenerate_days_warning) && ($auto_regenerate_days_warning > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $auto_regenerate_days_warning when calling InlineObject463., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($auto_regenerate_days_warning) && ($auto_regenerate_days_warning < 0)) {
            throw new \InvalidArgumentException('invalid value for $auto_regenerate_days_warning when calling InlineObject463., must be bigger than or equal to 0.');
        }

        $this->container['auto_regenerate_days_warning'] = $auto_regenerate_days_warning;

        return $this;
    }

    /**
     * Gets scep_password
     *
     * @return string|null
     */
    public function getScepPassword()
    {
        return $this->container['scep_password'];
    }

    /**
     * Sets scep_password
     *
     * @param string|null $scep_password SCEP server challenge password for auto-regeneration.
     *
     * @return self
     */
    public function setScepPassword($scep_password)
    {
        $this->container['scep_password'] = $scep_password;

        return $this;
    }

    /**
     * Gets ca_identifier
     *
     * @return string|null
     */
    public function getCaIdentifier()
    {
        return $this->container['ca_identifier'];
    }

    /**
     * Sets ca_identifier
     *
     * @param string|null $ca_identifier CA identifier of the CA server for signing via SCEP.
     *
     * @return self
     */
    public function setCaIdentifier($ca_identifier)
    {
        if (!is_null($ca_identifier) && (mb_strlen($ca_identifier) > 255)) {
            throw new \InvalidArgumentException('invalid length for $ca_identifier when calling InlineObject463., must be smaller than or equal to 255.');
        }

        $this->container['ca_identifier'] = $ca_identifier;

        return $this;
    }

    /**
     * Gets name_encoding
     *
     * @return string|null
     */
    public function getNameEncoding()
    {
        return $this->container['name_encoding'];
    }

    /**
     * Sets name_encoding
     *
     * @param string|null $name_encoding Name encoding method for auto-regeneration.    printable:Printable encoding (default).    utf8:UTF-8 encoding.
     *
     * @return self
     */
    public function setNameEncoding($name_encoding)
    {
        $allowedValues = $this->getNameEncodingAllowableValues();
        if (!is_null($name_encoding) && !in_array($name_encoding, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'name_encoding', must be one of '%s'",
                    $name_encoding,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['name_encoding'] = $name_encoding;

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
     * @param string|null $source_ip Source IP address for communications to the SCEP server.
     *
     * @return self
     */
    public function setSourceIp($source_ip)
    {
        $this->container['source_ip'] = $source_ip;

        return $this;
    }

    /**
     * Gets ike_localid
     *
     * @return string|null
     */
    public function getIkeLocalid()
    {
        return $this->container['ike_localid'];
    }

    /**
     * Sets ike_localid
     *
     * @param string|null $ike_localid Local ID the FortiGate uses for authentication as a VPN client.
     *
     * @return self
     */
    public function setIkeLocalid($ike_localid)
    {
        if (!is_null($ike_localid) && (mb_strlen($ike_localid) > 63)) {
            throw new \InvalidArgumentException('invalid length for $ike_localid when calling InlineObject463., must be smaller than or equal to 63.');
        }

        $this->container['ike_localid'] = $ike_localid;

        return $this;
    }

    /**
     * Gets ike_localid_type
     *
     * @return string|null
     */
    public function getIkeLocalidType()
    {
        return $this->container['ike_localid_type'];
    }

    /**
     * Sets ike_localid_type
     *
     * @param string|null $ike_localid_type IKE local ID type.    asn1dn:ASN.1 distinguished name.    fqdn:Fully qualified domain name.
     *
     * @return self
     */
    public function setIkeLocalidType($ike_localid_type)
    {
        $allowedValues = $this->getIkeLocalidTypeAllowableValues();
        if (!is_null($ike_localid_type) && !in_array($ike_localid_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ike_localid_type', must be one of '%s'",
                    $ike_localid_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ike_localid_type'] = $ike_localid_type;

        return $this;
    }

    /**
     * Gets enroll_protocol
     *
     * @return string|null
     */
    public function getEnrollProtocol()
    {
        return $this->container['enroll_protocol'];
    }

    /**
     * Sets enroll_protocol
     *
     * @param string|null $enroll_protocol Certificate enrollment protocol.    none:None (default).    scep:Simple Certificate Enrollment Protocol.    cmpv2:Certificate Management Protocol Version 2.
     *
     * @return self
     */
    public function setEnrollProtocol($enroll_protocol)
    {
        $allowedValues = $this->getEnrollProtocolAllowableValues();
        if (!is_null($enroll_protocol) && !in_array($enroll_protocol, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'enroll_protocol', must be one of '%s'",
                    $enroll_protocol,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['enroll_protocol'] = $enroll_protocol;

        return $this;
    }

    /**
     * Gets cmp_server
     *
     * @return string|null
     */
    public function getCmpServer()
    {
        return $this->container['cmp_server'];
    }

    /**
     * Sets cmp_server
     *
     * @param string|null $cmp_server 'ADDRESS:PORT' for CMP server.
     *
     * @return self
     */
    public function setCmpServer($cmp_server)
    {
        if (!is_null($cmp_server) && (mb_strlen($cmp_server) > 63)) {
            throw new \InvalidArgumentException('invalid length for $cmp_server when calling InlineObject463., must be smaller than or equal to 63.');
        }

        $this->container['cmp_server'] = $cmp_server;

        return $this;
    }

    /**
     * Gets cmp_path
     *
     * @return string|null
     */
    public function getCmpPath()
    {
        return $this->container['cmp_path'];
    }

    /**
     * Sets cmp_path
     *
     * @param string|null $cmp_path Path location inside CMP server.
     *
     * @return self
     */
    public function setCmpPath($cmp_path)
    {
        if (!is_null($cmp_path) && (mb_strlen($cmp_path) > 255)) {
            throw new \InvalidArgumentException('invalid length for $cmp_path when calling InlineObject463., must be smaller than or equal to 255.');
        }

        $this->container['cmp_path'] = $cmp_path;

        return $this;
    }

    /**
     * Gets cmp_server_cert
     *
     * @return string|null
     */
    public function getCmpServerCert()
    {
        return $this->container['cmp_server_cert'];
    }

    /**
     * Sets cmp_server_cert
     *
     * @param string|null $cmp_server_cert CMP server certificate.
     *
     * @return self
     */
    public function setCmpServerCert($cmp_server_cert)
    {
        if (!is_null($cmp_server_cert) && (mb_strlen($cmp_server_cert) > 79)) {
            throw new \InvalidArgumentException('invalid length for $cmp_server_cert when calling InlineObject463., must be smaller than or equal to 79.');
        }

        $this->container['cmp_server_cert'] = $cmp_server_cert;

        return $this;
    }

    /**
     * Gets cmp_regeneration_method
     *
     * @return string|null
     */
    public function getCmpRegenerationMethod()
    {
        return $this->container['cmp_regeneration_method'];
    }

    /**
     * Sets cmp_regeneration_method
     *
     * @param string|null $cmp_regeneration_method CMP auto-regeneration method.    keyupate:Key Update.    renewal:Renewal.
     *
     * @return self
     */
    public function setCmpRegenerationMethod($cmp_regeneration_method)
    {
        $allowedValues = $this->getCmpRegenerationMethodAllowableValues();
        if (!is_null($cmp_regeneration_method) && !in_array($cmp_regeneration_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cmp_regeneration_method', must be one of '%s'",
                    $cmp_regeneration_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cmp_regeneration_method'] = $cmp_regeneration_method;

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


