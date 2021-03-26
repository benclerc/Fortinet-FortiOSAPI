<?php
/**
 * SystemAlarmGroups
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
 * SystemAlarmGroups Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SystemAlarmGroups implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_system_alarm_groups';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'period' => 'int',
        'admin_auth_failure_threshold' => 'int',
        'admin_auth_lockout_threshold' => 'int',
        'user_auth_failure_threshold' => 'int',
        'user_auth_lockout_threshold' => 'int',
        'replay_attempt_threshold' => 'int',
        'self_test_failure_threshold' => 'int',
        'log_full_warning_threshold' => 'int',
        'encryption_failure_threshold' => 'int',
        'decryption_failure_threshold' => 'int',
        'fw_policy_violations' => '\Fortigate\FortiOS\Model\CMDB\SystemAlarmFwPolicyViolations[]',
        'fw_policy_id' => 'int',
        'fw_policy_id_threshold' => 'int'
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
        'period' => null,
        'admin_auth_failure_threshold' => null,
        'admin_auth_lockout_threshold' => null,
        'user_auth_failure_threshold' => null,
        'user_auth_lockout_threshold' => null,
        'replay_attempt_threshold' => null,
        'self_test_failure_threshold' => null,
        'log_full_warning_threshold' => null,
        'encryption_failure_threshold' => null,
        'decryption_failure_threshold' => null,
        'fw_policy_violations' => null,
        'fw_policy_id' => null,
        'fw_policy_id_threshold' => null
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
        'period' => 'period',
        'admin_auth_failure_threshold' => 'admin-auth-failure-threshold',
        'admin_auth_lockout_threshold' => 'admin-auth-lockout-threshold',
        'user_auth_failure_threshold' => 'user-auth-failure-threshold',
        'user_auth_lockout_threshold' => 'user-auth-lockout-threshold',
        'replay_attempt_threshold' => 'replay-attempt-threshold',
        'self_test_failure_threshold' => 'self-test-failure-threshold',
        'log_full_warning_threshold' => 'log-full-warning-threshold',
        'encryption_failure_threshold' => 'encryption-failure-threshold',
        'decryption_failure_threshold' => 'decryption-failure-threshold',
        'fw_policy_violations' => 'fw-policy-violations',
        'fw_policy_id' => 'fw-policy-id',
        'fw_policy_id_threshold' => 'fw-policy-id-threshold'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'period' => 'setPeriod',
        'admin_auth_failure_threshold' => 'setAdminAuthFailureThreshold',
        'admin_auth_lockout_threshold' => 'setAdminAuthLockoutThreshold',
        'user_auth_failure_threshold' => 'setUserAuthFailureThreshold',
        'user_auth_lockout_threshold' => 'setUserAuthLockoutThreshold',
        'replay_attempt_threshold' => 'setReplayAttemptThreshold',
        'self_test_failure_threshold' => 'setSelfTestFailureThreshold',
        'log_full_warning_threshold' => 'setLogFullWarningThreshold',
        'encryption_failure_threshold' => 'setEncryptionFailureThreshold',
        'decryption_failure_threshold' => 'setDecryptionFailureThreshold',
        'fw_policy_violations' => 'setFwPolicyViolations',
        'fw_policy_id' => 'setFwPolicyId',
        'fw_policy_id_threshold' => 'setFwPolicyIdThreshold'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'period' => 'getPeriod',
        'admin_auth_failure_threshold' => 'getAdminAuthFailureThreshold',
        'admin_auth_lockout_threshold' => 'getAdminAuthLockoutThreshold',
        'user_auth_failure_threshold' => 'getUserAuthFailureThreshold',
        'user_auth_lockout_threshold' => 'getUserAuthLockoutThreshold',
        'replay_attempt_threshold' => 'getReplayAttemptThreshold',
        'self_test_failure_threshold' => 'getSelfTestFailureThreshold',
        'log_full_warning_threshold' => 'getLogFullWarningThreshold',
        'encryption_failure_threshold' => 'getEncryptionFailureThreshold',
        'decryption_failure_threshold' => 'getDecryptionFailureThreshold',
        'fw_policy_violations' => 'getFwPolicyViolations',
        'fw_policy_id' => 'getFwPolicyId',
        'fw_policy_id_threshold' => 'getFwPolicyIdThreshold'
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
        $this->container['period'] = $data['period'] ?? null;
        $this->container['admin_auth_failure_threshold'] = $data['admin_auth_failure_threshold'] ?? null;
        $this->container['admin_auth_lockout_threshold'] = $data['admin_auth_lockout_threshold'] ?? null;
        $this->container['user_auth_failure_threshold'] = $data['user_auth_failure_threshold'] ?? null;
        $this->container['user_auth_lockout_threshold'] = $data['user_auth_lockout_threshold'] ?? null;
        $this->container['replay_attempt_threshold'] = $data['replay_attempt_threshold'] ?? null;
        $this->container['self_test_failure_threshold'] = $data['self_test_failure_threshold'] ?? null;
        $this->container['log_full_warning_threshold'] = $data['log_full_warning_threshold'] ?? null;
        $this->container['encryption_failure_threshold'] = $data['encryption_failure_threshold'] ?? null;
        $this->container['decryption_failure_threshold'] = $data['decryption_failure_threshold'] ?? null;
        $this->container['fw_policy_violations'] = $data['fw_policy_violations'] ?? null;
        $this->container['fw_policy_id'] = $data['fw_policy_id'] ?? null;
        $this->container['fw_policy_id_threshold'] = $data['fw_policy_id_threshold'] ?? null;
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

        if (!is_null($this->container['period']) && ($this->container['period'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'period', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['period']) && ($this->container['period'] < 0)) {
            $invalidProperties[] = "invalid value for 'period', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['admin_auth_failure_threshold']) && ($this->container['admin_auth_failure_threshold'] > 1024)) {
            $invalidProperties[] = "invalid value for 'admin_auth_failure_threshold', must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['admin_auth_failure_threshold']) && ($this->container['admin_auth_failure_threshold'] < 0)) {
            $invalidProperties[] = "invalid value for 'admin_auth_failure_threshold', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['admin_auth_lockout_threshold']) && ($this->container['admin_auth_lockout_threshold'] > 1024)) {
            $invalidProperties[] = "invalid value for 'admin_auth_lockout_threshold', must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['admin_auth_lockout_threshold']) && ($this->container['admin_auth_lockout_threshold'] < 0)) {
            $invalidProperties[] = "invalid value for 'admin_auth_lockout_threshold', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['user_auth_failure_threshold']) && ($this->container['user_auth_failure_threshold'] > 1024)) {
            $invalidProperties[] = "invalid value for 'user_auth_failure_threshold', must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['user_auth_failure_threshold']) && ($this->container['user_auth_failure_threshold'] < 0)) {
            $invalidProperties[] = "invalid value for 'user_auth_failure_threshold', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['user_auth_lockout_threshold']) && ($this->container['user_auth_lockout_threshold'] > 1024)) {
            $invalidProperties[] = "invalid value for 'user_auth_lockout_threshold', must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['user_auth_lockout_threshold']) && ($this->container['user_auth_lockout_threshold'] < 0)) {
            $invalidProperties[] = "invalid value for 'user_auth_lockout_threshold', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['replay_attempt_threshold']) && ($this->container['replay_attempt_threshold'] > 1024)) {
            $invalidProperties[] = "invalid value for 'replay_attempt_threshold', must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['replay_attempt_threshold']) && ($this->container['replay_attempt_threshold'] < 0)) {
            $invalidProperties[] = "invalid value for 'replay_attempt_threshold', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['self_test_failure_threshold']) && ($this->container['self_test_failure_threshold'] > 1)) {
            $invalidProperties[] = "invalid value for 'self_test_failure_threshold', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['self_test_failure_threshold']) && ($this->container['self_test_failure_threshold'] < 0)) {
            $invalidProperties[] = "invalid value for 'self_test_failure_threshold', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['log_full_warning_threshold']) && ($this->container['log_full_warning_threshold'] > 1024)) {
            $invalidProperties[] = "invalid value for 'log_full_warning_threshold', must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['log_full_warning_threshold']) && ($this->container['log_full_warning_threshold'] < 0)) {
            $invalidProperties[] = "invalid value for 'log_full_warning_threshold', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['encryption_failure_threshold']) && ($this->container['encryption_failure_threshold'] > 1024)) {
            $invalidProperties[] = "invalid value for 'encryption_failure_threshold', must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['encryption_failure_threshold']) && ($this->container['encryption_failure_threshold'] < 0)) {
            $invalidProperties[] = "invalid value for 'encryption_failure_threshold', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['decryption_failure_threshold']) && ($this->container['decryption_failure_threshold'] > 1024)) {
            $invalidProperties[] = "invalid value for 'decryption_failure_threshold', must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['decryption_failure_threshold']) && ($this->container['decryption_failure_threshold'] < 0)) {
            $invalidProperties[] = "invalid value for 'decryption_failure_threshold', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fw_policy_violations']) && (count($this->container['fw_policy_violations']) > 0)) {
            $invalidProperties[] = "invalid value for 'fw_policy_violations', number of items must be less than or equal to 0.";
        }

        if (!is_null($this->container['fw_policy_id']) && ($this->container['fw_policy_id'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'fw_policy_id', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['fw_policy_id']) && ($this->container['fw_policy_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'fw_policy_id', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fw_policy_id_threshold']) && ($this->container['fw_policy_id_threshold'] > 1024)) {
            $invalidProperties[] = "invalid value for 'fw_policy_id_threshold', must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['fw_policy_id_threshold']) && ($this->container['fw_policy_id_threshold'] < 0)) {
            $invalidProperties[] = "invalid value for 'fw_policy_id_threshold', must be bigger than or equal to 0.";
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
     * @param int|null $id Group ID.
     *
     * @return self
     */
    public function setId($id)
    {

        if (!is_null($id) && ($id > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $id when calling SystemAlarmGroups., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($id) && ($id < 0)) {
            throw new \InvalidArgumentException('invalid value for $id when calling SystemAlarmGroups., must be bigger than or equal to 0.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets period
     *
     * @return int|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param int|null $period Time period in seconds (0 = from start up).
     *
     * @return self
     */
    public function setPeriod($period)
    {

        if (!is_null($period) && ($period > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $period when calling SystemAlarmGroups., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($period) && ($period < 0)) {
            throw new \InvalidArgumentException('invalid value for $period when calling SystemAlarmGroups., must be bigger than or equal to 0.');
        }

        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets admin_auth_failure_threshold
     *
     * @return int|null
     */
    public function getAdminAuthFailureThreshold()
    {
        return $this->container['admin_auth_failure_threshold'];
    }

    /**
     * Sets admin_auth_failure_threshold
     *
     * @param int|null $admin_auth_failure_threshold Admin authentication failure threshold.
     *
     * @return self
     */
    public function setAdminAuthFailureThreshold($admin_auth_failure_threshold)
    {

        if (!is_null($admin_auth_failure_threshold) && ($admin_auth_failure_threshold > 1024)) {
            throw new \InvalidArgumentException('invalid value for $admin_auth_failure_threshold when calling SystemAlarmGroups., must be smaller than or equal to 1024.');
        }
        if (!is_null($admin_auth_failure_threshold) && ($admin_auth_failure_threshold < 0)) {
            throw new \InvalidArgumentException('invalid value for $admin_auth_failure_threshold when calling SystemAlarmGroups., must be bigger than or equal to 0.');
        }

        $this->container['admin_auth_failure_threshold'] = $admin_auth_failure_threshold;

        return $this;
    }

    /**
     * Gets admin_auth_lockout_threshold
     *
     * @return int|null
     */
    public function getAdminAuthLockoutThreshold()
    {
        return $this->container['admin_auth_lockout_threshold'];
    }

    /**
     * Sets admin_auth_lockout_threshold
     *
     * @param int|null $admin_auth_lockout_threshold Admin authentication lockout threshold.
     *
     * @return self
     */
    public function setAdminAuthLockoutThreshold($admin_auth_lockout_threshold)
    {

        if (!is_null($admin_auth_lockout_threshold) && ($admin_auth_lockout_threshold > 1024)) {
            throw new \InvalidArgumentException('invalid value for $admin_auth_lockout_threshold when calling SystemAlarmGroups., must be smaller than or equal to 1024.');
        }
        if (!is_null($admin_auth_lockout_threshold) && ($admin_auth_lockout_threshold < 0)) {
            throw new \InvalidArgumentException('invalid value for $admin_auth_lockout_threshold when calling SystemAlarmGroups., must be bigger than or equal to 0.');
        }

        $this->container['admin_auth_lockout_threshold'] = $admin_auth_lockout_threshold;

        return $this;
    }

    /**
     * Gets user_auth_failure_threshold
     *
     * @return int|null
     */
    public function getUserAuthFailureThreshold()
    {
        return $this->container['user_auth_failure_threshold'];
    }

    /**
     * Sets user_auth_failure_threshold
     *
     * @param int|null $user_auth_failure_threshold User authentication failure threshold.
     *
     * @return self
     */
    public function setUserAuthFailureThreshold($user_auth_failure_threshold)
    {

        if (!is_null($user_auth_failure_threshold) && ($user_auth_failure_threshold > 1024)) {
            throw new \InvalidArgumentException('invalid value for $user_auth_failure_threshold when calling SystemAlarmGroups., must be smaller than or equal to 1024.');
        }
        if (!is_null($user_auth_failure_threshold) && ($user_auth_failure_threshold < 0)) {
            throw new \InvalidArgumentException('invalid value for $user_auth_failure_threshold when calling SystemAlarmGroups., must be bigger than or equal to 0.');
        }

        $this->container['user_auth_failure_threshold'] = $user_auth_failure_threshold;

        return $this;
    }

    /**
     * Gets user_auth_lockout_threshold
     *
     * @return int|null
     */
    public function getUserAuthLockoutThreshold()
    {
        return $this->container['user_auth_lockout_threshold'];
    }

    /**
     * Sets user_auth_lockout_threshold
     *
     * @param int|null $user_auth_lockout_threshold User authentication lockout threshold.
     *
     * @return self
     */
    public function setUserAuthLockoutThreshold($user_auth_lockout_threshold)
    {

        if (!is_null($user_auth_lockout_threshold) && ($user_auth_lockout_threshold > 1024)) {
            throw new \InvalidArgumentException('invalid value for $user_auth_lockout_threshold when calling SystemAlarmGroups., must be smaller than or equal to 1024.');
        }
        if (!is_null($user_auth_lockout_threshold) && ($user_auth_lockout_threshold < 0)) {
            throw new \InvalidArgumentException('invalid value for $user_auth_lockout_threshold when calling SystemAlarmGroups., must be bigger than or equal to 0.');
        }

        $this->container['user_auth_lockout_threshold'] = $user_auth_lockout_threshold;

        return $this;
    }

    /**
     * Gets replay_attempt_threshold
     *
     * @return int|null
     */
    public function getReplayAttemptThreshold()
    {
        return $this->container['replay_attempt_threshold'];
    }

    /**
     * Sets replay_attempt_threshold
     *
     * @param int|null $replay_attempt_threshold Replay attempt threshold.
     *
     * @return self
     */
    public function setReplayAttemptThreshold($replay_attempt_threshold)
    {

        if (!is_null($replay_attempt_threshold) && ($replay_attempt_threshold > 1024)) {
            throw new \InvalidArgumentException('invalid value for $replay_attempt_threshold when calling SystemAlarmGroups., must be smaller than or equal to 1024.');
        }
        if (!is_null($replay_attempt_threshold) && ($replay_attempt_threshold < 0)) {
            throw new \InvalidArgumentException('invalid value for $replay_attempt_threshold when calling SystemAlarmGroups., must be bigger than or equal to 0.');
        }

        $this->container['replay_attempt_threshold'] = $replay_attempt_threshold;

        return $this;
    }

    /**
     * Gets self_test_failure_threshold
     *
     * @return int|null
     */
    public function getSelfTestFailureThreshold()
    {
        return $this->container['self_test_failure_threshold'];
    }

    /**
     * Sets self_test_failure_threshold
     *
     * @param int|null $self_test_failure_threshold Self-test failure threshold.
     *
     * @return self
     */
    public function setSelfTestFailureThreshold($self_test_failure_threshold)
    {

        if (!is_null($self_test_failure_threshold) && ($self_test_failure_threshold > 1)) {
            throw new \InvalidArgumentException('invalid value for $self_test_failure_threshold when calling SystemAlarmGroups., must be smaller than or equal to 1.');
        }
        if (!is_null($self_test_failure_threshold) && ($self_test_failure_threshold < 0)) {
            throw new \InvalidArgumentException('invalid value for $self_test_failure_threshold when calling SystemAlarmGroups., must be bigger than or equal to 0.');
        }

        $this->container['self_test_failure_threshold'] = $self_test_failure_threshold;

        return $this;
    }

    /**
     * Gets log_full_warning_threshold
     *
     * @return int|null
     */
    public function getLogFullWarningThreshold()
    {
        return $this->container['log_full_warning_threshold'];
    }

    /**
     * Sets log_full_warning_threshold
     *
     * @param int|null $log_full_warning_threshold Log full warning threshold.
     *
     * @return self
     */
    public function setLogFullWarningThreshold($log_full_warning_threshold)
    {

        if (!is_null($log_full_warning_threshold) && ($log_full_warning_threshold > 1024)) {
            throw new \InvalidArgumentException('invalid value for $log_full_warning_threshold when calling SystemAlarmGroups., must be smaller than or equal to 1024.');
        }
        if (!is_null($log_full_warning_threshold) && ($log_full_warning_threshold < 0)) {
            throw new \InvalidArgumentException('invalid value for $log_full_warning_threshold when calling SystemAlarmGroups., must be bigger than or equal to 0.');
        }

        $this->container['log_full_warning_threshold'] = $log_full_warning_threshold;

        return $this;
    }

    /**
     * Gets encryption_failure_threshold
     *
     * @return int|null
     */
    public function getEncryptionFailureThreshold()
    {
        return $this->container['encryption_failure_threshold'];
    }

    /**
     * Sets encryption_failure_threshold
     *
     * @param int|null $encryption_failure_threshold Encryption failure threshold.
     *
     * @return self
     */
    public function setEncryptionFailureThreshold($encryption_failure_threshold)
    {

        if (!is_null($encryption_failure_threshold) && ($encryption_failure_threshold > 1024)) {
            throw new \InvalidArgumentException('invalid value for $encryption_failure_threshold when calling SystemAlarmGroups., must be smaller than or equal to 1024.');
        }
        if (!is_null($encryption_failure_threshold) && ($encryption_failure_threshold < 0)) {
            throw new \InvalidArgumentException('invalid value for $encryption_failure_threshold when calling SystemAlarmGroups., must be bigger than or equal to 0.');
        }

        $this->container['encryption_failure_threshold'] = $encryption_failure_threshold;

        return $this;
    }

    /**
     * Gets decryption_failure_threshold
     *
     * @return int|null
     */
    public function getDecryptionFailureThreshold()
    {
        return $this->container['decryption_failure_threshold'];
    }

    /**
     * Sets decryption_failure_threshold
     *
     * @param int|null $decryption_failure_threshold Decryption failure threshold.
     *
     * @return self
     */
    public function setDecryptionFailureThreshold($decryption_failure_threshold)
    {

        if (!is_null($decryption_failure_threshold) && ($decryption_failure_threshold > 1024)) {
            throw new \InvalidArgumentException('invalid value for $decryption_failure_threshold when calling SystemAlarmGroups., must be smaller than or equal to 1024.');
        }
        if (!is_null($decryption_failure_threshold) && ($decryption_failure_threshold < 0)) {
            throw new \InvalidArgumentException('invalid value for $decryption_failure_threshold when calling SystemAlarmGroups., must be bigger than or equal to 0.');
        }

        $this->container['decryption_failure_threshold'] = $decryption_failure_threshold;

        return $this;
    }

    /**
     * Gets fw_policy_violations
     *
     * @return \Fortigate\FortiOS\Model\CMDB\SystemAlarmFwPolicyViolations[]|null
     */
    public function getFwPolicyViolations()
    {
        return $this->container['fw_policy_violations'];
    }

    /**
     * Sets fw_policy_violations
     *
     * @param \Fortigate\FortiOS\Model\CMDB\SystemAlarmFwPolicyViolations[]|null $fw_policy_violations Firewall policy violations.
     *
     * @return self
     */
    public function setFwPolicyViolations($fw_policy_violations)
    {

        if (!is_null($fw_policy_violations) && (count($fw_policy_violations) > 0)) {
            throw new \InvalidArgumentException('invalid value for $fw_policy_violations when calling SystemAlarmGroups., number of items must be less than or equal to 0.');
        }
        $this->container['fw_policy_violations'] = $fw_policy_violations;

        return $this;
    }

    /**
     * Gets fw_policy_id
     *
     * @return int|null
     */
    public function getFwPolicyId()
    {
        return $this->container['fw_policy_id'];
    }

    /**
     * Sets fw_policy_id
     *
     * @param int|null $fw_policy_id Firewall policy ID.
     *
     * @return self
     */
    public function setFwPolicyId($fw_policy_id)
    {

        if (!is_null($fw_policy_id) && ($fw_policy_id > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $fw_policy_id when calling SystemAlarmGroups., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($fw_policy_id) && ($fw_policy_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $fw_policy_id when calling SystemAlarmGroups., must be bigger than or equal to 0.');
        }

        $this->container['fw_policy_id'] = $fw_policy_id;

        return $this;
    }

    /**
     * Gets fw_policy_id_threshold
     *
     * @return int|null
     */
    public function getFwPolicyIdThreshold()
    {
        return $this->container['fw_policy_id_threshold'];
    }

    /**
     * Sets fw_policy_id_threshold
     *
     * @param int|null $fw_policy_id_threshold Firewall policy ID threshold.
     *
     * @return self
     */
    public function setFwPolicyIdThreshold($fw_policy_id_threshold)
    {

        if (!is_null($fw_policy_id_threshold) && ($fw_policy_id_threshold > 1024)) {
            throw new \InvalidArgumentException('invalid value for $fw_policy_id_threshold when calling SystemAlarmGroups., must be smaller than or equal to 1024.');
        }
        if (!is_null($fw_policy_id_threshold) && ($fw_policy_id_threshold < 0)) {
            throw new \InvalidArgumentException('invalid value for $fw_policy_id_threshold when calling SystemAlarmGroups., must be bigger than or equal to 0.');
        }

        $this->container['fw_policy_id_threshold'] = $fw_policy_id_threshold;

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


