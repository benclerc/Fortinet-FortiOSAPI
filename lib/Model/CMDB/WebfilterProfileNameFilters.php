<?php
/**
 * WebfilterProfileNameFilters
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
 * WebfilterProfileNameFilters Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class WebfilterProfileNameFilters implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_webfilter_profile__name__filters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'category' => 'int',
        'action' => 'string',
        'warn_duration' => 'string',
        'auth_usr_grp' => '\Fortigate\FortiOS\Model\CMDB\WebfilterProfileNameOvrdUserGroup[]',
        'log' => 'string',
        'override_replacemsg' => 'string',
        'warning_prompt' => 'string',
        'warning_duration_type' => 'string'
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
        'category' => null,
        'action' => null,
        'warn_duration' => null,
        'auth_usr_grp' => null,
        'log' => null,
        'override_replacemsg' => null,
        'warning_prompt' => null,
        'warning_duration_type' => null
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
        'category' => 'category',
        'action' => 'action',
        'warn_duration' => 'warn-duration',
        'auth_usr_grp' => 'auth-usr-grp',
        'log' => 'log',
        'override_replacemsg' => 'override-replacemsg',
        'warning_prompt' => 'warning-prompt',
        'warning_duration_type' => 'warning-duration-type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'category' => 'setCategory',
        'action' => 'setAction',
        'warn_duration' => 'setWarnDuration',
        'auth_usr_grp' => 'setAuthUsrGrp',
        'log' => 'setLog',
        'override_replacemsg' => 'setOverrideReplacemsg',
        'warning_prompt' => 'setWarningPrompt',
        'warning_duration_type' => 'setWarningDurationType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'category' => 'getCategory',
        'action' => 'getAction',
        'warn_duration' => 'getWarnDuration',
        'auth_usr_grp' => 'getAuthUsrGrp',
        'log' => 'getLog',
        'override_replacemsg' => 'getOverrideReplacemsg',
        'warning_prompt' => 'getWarningPrompt',
        'warning_duration_type' => 'getWarningDurationType'
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

    const ACTION_BLOCK = 'block';
    const ACTION_AUTHENTICATE = 'authenticate';
    const ACTION_MONITOR = 'monitor';
    const ACTION_WARNING = 'warning';
    const LOG_ENABLE = 'enable';
    const LOG_DISABLE = 'disable';
    const WARNING_PROMPT_DOMAIN = 'per-domain';
    const WARNING_PROMPT_CATEGORY = 'per-category';
    const WARNING_DURATION_TYPE_SESSION = 'session';
    const WARNING_DURATION_TYPE_TIMEOUT = 'timeout';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_BLOCK,
            self::ACTION_AUTHENTICATE,
            self::ACTION_MONITOR,
            self::ACTION_WARNING,
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
            self::LOG_ENABLE,
            self::LOG_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWarningPromptAllowableValues()
    {
        return [
            self::WARNING_PROMPT_DOMAIN,
            self::WARNING_PROMPT_CATEGORY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWarningDurationTypeAllowableValues()
    {
        return [
            self::WARNING_DURATION_TYPE_SESSION,
            self::WARNING_DURATION_TYPE_TIMEOUT,
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
        $this->container['category'] = $data['category'] ?? null;
        $this->container['action'] = $data['action'] ?? null;
        $this->container['warn_duration'] = $data['warn_duration'] ?? null;
        $this->container['auth_usr_grp'] = $data['auth_usr_grp'] ?? null;
        $this->container['log'] = $data['log'] ?? null;
        $this->container['override_replacemsg'] = $data['override_replacemsg'] ?? null;
        $this->container['warning_prompt'] = $data['warning_prompt'] ?? null;
        $this->container['warning_duration_type'] = $data['warning_duration_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['id']) && ($this->container['id'] > 255)) {
            $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['category']) && ($this->container['category'] > 255)) {
            $invalidProperties[] = "invalid value for 'category', must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['category']) && ($this->container['category'] < 0)) {
            $invalidProperties[] = "invalid value for 'category', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'action', must be one of '%s'",
                $this->container['action'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['auth_usr_grp']) && (count($this->container['auth_usr_grp']) > 0)) {
            $invalidProperties[] = "invalid value for 'auth_usr_grp', number of items must be less than or equal to 0.";
        }

        $allowedValues = $this->getLogAllowableValues();
        if (!is_null($this->container['log']) && !in_array($this->container['log'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'log', must be one of '%s'",
                $this->container['log'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['override_replacemsg']) && (mb_strlen($this->container['override_replacemsg']) > 28)) {
            $invalidProperties[] = "invalid value for 'override_replacemsg', the character length must be smaller than or equal to 28.";
        }

        $allowedValues = $this->getWarningPromptAllowableValues();
        if (!is_null($this->container['warning_prompt']) && !in_array($this->container['warning_prompt'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'warning_prompt', must be one of '%s'",
                $this->container['warning_prompt'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWarningDurationTypeAllowableValues();
        if (!is_null($this->container['warning_duration_type']) && !in_array($this->container['warning_duration_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'warning_duration_type', must be one of '%s'",
                $this->container['warning_duration_type'],
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
     * @param int|null $id ID number.
     *
     * @return self
     */
    public function setId($id)
    {

        if (!is_null($id) && ($id > 255)) {
            throw new \InvalidArgumentException('invalid value for $id when calling WebfilterProfileNameFilters., must be smaller than or equal to 255.');
        }
        if (!is_null($id) && ($id < 0)) {
            throw new \InvalidArgumentException('invalid value for $id when calling WebfilterProfileNameFilters., must be bigger than or equal to 0.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets category
     *
     * @return int|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param int|null $category Categories and groups the filter examines.
     *
     * @return self
     */
    public function setCategory($category)
    {

        if (!is_null($category) && ($category > 255)) {
            throw new \InvalidArgumentException('invalid value for $category when calling WebfilterProfileNameFilters., must be smaller than or equal to 255.');
        }
        if (!is_null($category) && ($category < 0)) {
            throw new \InvalidArgumentException('invalid value for $category when calling WebfilterProfileNameFilters., must be bigger than or equal to 0.');
        }

        $this->container['category'] = $category;

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
     * @param string|null $action Action to take for matches.    block:Block access.    authenticate:Authenticate user before allowing access.    monitor:Allow access while logging the action.    warning:Allow access after warning the user.
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
     * Gets warn_duration
     *
     * @return string|null
     */
    public function getWarnDuration()
    {
        return $this->container['warn_duration'];
    }

    /**
     * Sets warn_duration
     *
     * @param string|null $warn_duration Duration of warnings.
     *
     * @return self
     */
    public function setWarnDuration($warn_duration)
    {
        $this->container['warn_duration'] = $warn_duration;

        return $this;
    }

    /**
     * Gets auth_usr_grp
     *
     * @return \Fortigate\FortiOS\Model\CMDB\WebfilterProfileNameOvrdUserGroup[]|null
     */
    public function getAuthUsrGrp()
    {
        return $this->container['auth_usr_grp'];
    }

    /**
     * Sets auth_usr_grp
     *
     * @param \Fortigate\FortiOS\Model\CMDB\WebfilterProfileNameOvrdUserGroup[]|null $auth_usr_grp Groups with permission to authenticate.
     *
     * @return self
     */
    public function setAuthUsrGrp($auth_usr_grp)
    {

        if (!is_null($auth_usr_grp) && (count($auth_usr_grp) > 0)) {
            throw new \InvalidArgumentException('invalid value for $auth_usr_grp when calling WebfilterProfileNameFilters., number of items must be less than or equal to 0.');
        }
        $this->container['auth_usr_grp'] = $auth_usr_grp;

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
     * @param string|null $log Enable/disable logging.    enable:Enable setting.    disable:Disable setting.
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
     * Gets override_replacemsg
     *
     * @return string|null
     */
    public function getOverrideReplacemsg()
    {
        return $this->container['override_replacemsg'];
    }

    /**
     * Sets override_replacemsg
     *
     * @param string|null $override_replacemsg Override replacement message.
     *
     * @return self
     */
    public function setOverrideReplacemsg($override_replacemsg)
    {
        if (!is_null($override_replacemsg) && (mb_strlen($override_replacemsg) > 28)) {
            throw new \InvalidArgumentException('invalid length for $override_replacemsg when calling WebfilterProfileNameFilters., must be smaller than or equal to 28.');
        }

        $this->container['override_replacemsg'] = $override_replacemsg;

        return $this;
    }

    /**
     * Gets warning_prompt
     *
     * @return string|null
     */
    public function getWarningPrompt()
    {
        return $this->container['warning_prompt'];
    }

    /**
     * Sets warning_prompt
     *
     * @param string|null $warning_prompt Warning prompts in each category or each domain.    per-domain:Per-domain warnings.    per-category:Per-category warnings.
     *
     * @return self
     */
    public function setWarningPrompt($warning_prompt)
    {
        $allowedValues = $this->getWarningPromptAllowableValues();
        if (!is_null($warning_prompt) && !in_array($warning_prompt, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'warning_prompt', must be one of '%s'",
                    $warning_prompt,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['warning_prompt'] = $warning_prompt;

        return $this;
    }

    /**
     * Gets warning_duration_type
     *
     * @return string|null
     */
    public function getWarningDurationType()
    {
        return $this->container['warning_duration_type'];
    }

    /**
     * Sets warning_duration_type
     *
     * @param string|null $warning_duration_type Re-display warning after closing browser or after a timeout.    session:After session ends.    timeout:After timeout occurs.
     *
     * @return self
     */
    public function setWarningDurationType($warning_duration_type)
    {
        $allowedValues = $this->getWarningDurationTypeAllowableValues();
        if (!is_null($warning_duration_type) && !in_array($warning_duration_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'warning_duration_type', must be one of '%s'",
                    $warning_duration_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['warning_duration_type'] = $warning_duration_type;

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


