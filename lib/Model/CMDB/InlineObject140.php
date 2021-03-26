<?php
/**
 * InlineObject140
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
 * InlineObject140 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject140 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_140';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'title' => 'string',
        'subtitle' => 'string',
        'description' => 'string',
        'style_theme' => 'string',
        'options' => 'string',
        'format' => 'string',
        'schedule_type' => 'string',
        'day' => 'string',
        'time' => 'string',
        'cutoff_option' => 'string',
        'cutoff_time' => 'string',
        'email_send' => 'string',
        'email_recipients' => 'string',
        'max_pdf_report' => 'int',
        'page' => '\Fortigate\FortiOS\Model\CMDB\ReportLayoutNamePage[]',
        'body_item' => '\Fortigate\FortiOS\Model\CMDB\ReportLayoutNameBodyItem[]'
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
        'title' => null,
        'subtitle' => null,
        'description' => null,
        'style_theme' => null,
        'options' => null,
        'format' => null,
        'schedule_type' => null,
        'day' => null,
        'time' => null,
        'cutoff_option' => null,
        'cutoff_time' => null,
        'email_send' => null,
        'email_recipients' => null,
        'max_pdf_report' => null,
        'page' => null,
        'body_item' => null
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
        'title' => 'title',
        'subtitle' => 'subtitle',
        'description' => 'description',
        'style_theme' => 'style-theme',
        'options' => 'options',
        'format' => 'format',
        'schedule_type' => 'schedule-type',
        'day' => 'day',
        'time' => 'time',
        'cutoff_option' => 'cutoff-option',
        'cutoff_time' => 'cutoff-time',
        'email_send' => 'email-send',
        'email_recipients' => 'email-recipients',
        'max_pdf_report' => 'max-pdf-report',
        'page' => 'page',
        'body_item' => 'body-item'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'title' => 'setTitle',
        'subtitle' => 'setSubtitle',
        'description' => 'setDescription',
        'style_theme' => 'setStyleTheme',
        'options' => 'setOptions',
        'format' => 'setFormat',
        'schedule_type' => 'setScheduleType',
        'day' => 'setDay',
        'time' => 'setTime',
        'cutoff_option' => 'setCutoffOption',
        'cutoff_time' => 'setCutoffTime',
        'email_send' => 'setEmailSend',
        'email_recipients' => 'setEmailRecipients',
        'max_pdf_report' => 'setMaxPdfReport',
        'page' => 'setPage',
        'body_item' => 'setBodyItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'title' => 'getTitle',
        'subtitle' => 'getSubtitle',
        'description' => 'getDescription',
        'style_theme' => 'getStyleTheme',
        'options' => 'getOptions',
        'format' => 'getFormat',
        'schedule_type' => 'getScheduleType',
        'day' => 'getDay',
        'time' => 'getTime',
        'cutoff_option' => 'getCutoffOption',
        'cutoff_time' => 'getCutoffTime',
        'email_send' => 'getEmailSend',
        'email_recipients' => 'getEmailRecipients',
        'max_pdf_report' => 'getMaxPdfReport',
        'page' => 'getPage',
        'body_item' => 'getBodyItem'
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

    const OPTIONS_INCLUDE_TABLE_OF_CONTENT = 'include-table-of-content';
    const OPTIONS_AUTO_NUMBERING_HEADING = 'auto-numbering-heading';
    const OPTIONS_VIEW_CHART_AS_HEADING = 'view-chart-as-heading';
    const OPTIONS_SHOW_HTML_NAVBAR_BEFORE_HEADING = 'show-html-navbar-before-heading';
    const OPTIONS_DUMMY_OPTION = 'dummy-option';
    const FORMAT_PDF = 'pdf';
    const SCHEDULE_TYPE_DEMAND = 'demand';
    const SCHEDULE_TYPE_DAILY = 'daily';
    const SCHEDULE_TYPE_WEEKLY = 'weekly';
    const DAY_SUNDAY = 'sunday';
    const DAY_MONDAY = 'monday';
    const DAY_TUESDAY = 'tuesday';
    const DAY_WEDNESDAY = 'wednesday';
    const DAY_THURSDAY = 'thursday';
    const DAY_FRIDAY = 'friday';
    const DAY_SATURDAY = 'saturday';
    const CUTOFF_OPTION_RUN_TIME = 'run-time';
    const CUTOFF_OPTION_CUSTOM = 'custom';
    const EMAIL_SEND_ENABLE = 'enable';
    const EMAIL_SEND_DISABLE = 'disable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOptionsAllowableValues()
    {
        return [
            self::OPTIONS_INCLUDE_TABLE_OF_CONTENT,
            self::OPTIONS_AUTO_NUMBERING_HEADING,
            self::OPTIONS_VIEW_CHART_AS_HEADING,
            self::OPTIONS_SHOW_HTML_NAVBAR_BEFORE_HEADING,
            self::OPTIONS_DUMMY_OPTION,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_PDF,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getScheduleTypeAllowableValues()
    {
        return [
            self::SCHEDULE_TYPE_DEMAND,
            self::SCHEDULE_TYPE_DAILY,
            self::SCHEDULE_TYPE_WEEKLY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDayAllowableValues()
    {
        return [
            self::DAY_SUNDAY,
            self::DAY_MONDAY,
            self::DAY_TUESDAY,
            self::DAY_WEDNESDAY,
            self::DAY_THURSDAY,
            self::DAY_FRIDAY,
            self::DAY_SATURDAY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCutoffOptionAllowableValues()
    {
        return [
            self::CUTOFF_OPTION_RUN_TIME,
            self::CUTOFF_OPTION_CUSTOM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEmailSendAllowableValues()
    {
        return [
            self::EMAIL_SEND_ENABLE,
            self::EMAIL_SEND_DISABLE,
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['subtitle'] = $data['subtitle'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['style_theme'] = $data['style_theme'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
        $this->container['format'] = $data['format'] ?? null;
        $this->container['schedule_type'] = $data['schedule_type'] ?? null;
        $this->container['day'] = $data['day'] ?? null;
        $this->container['time'] = $data['time'] ?? null;
        $this->container['cutoff_option'] = $data['cutoff_option'] ?? null;
        $this->container['cutoff_time'] = $data['cutoff_time'] ?? null;
        $this->container['email_send'] = $data['email_send'] ?? null;
        $this->container['email_recipients'] = $data['email_recipients'] ?? null;
        $this->container['max_pdf_report'] = $data['max_pdf_report'] ?? null;
        $this->container['page'] = $data['page'] ?? null;
        $this->container['body_item'] = $data['body_item'] ?? null;
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

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 127)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 127.";
        }

        if (!is_null($this->container['subtitle']) && (mb_strlen($this->container['subtitle']) > 127)) {
            $invalidProperties[] = "invalid value for 'subtitle', the character length must be smaller than or equal to 127.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 127)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 127.";
        }

        if (!is_null($this->container['style_theme']) && (mb_strlen($this->container['style_theme']) > 35)) {
            $invalidProperties[] = "invalid value for 'style_theme', the character length must be smaller than or equal to 35.";
        }

        $allowedValues = $this->getOptionsAllowableValues();
        if (!is_null($this->container['options']) && !in_array($this->container['options'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'options', must be one of '%s'",
                $this->container['options'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'format', must be one of '%s'",
                $this->container['format'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getScheduleTypeAllowableValues();
        if (!is_null($this->container['schedule_type']) && !in_array($this->container['schedule_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'schedule_type', must be one of '%s'",
                $this->container['schedule_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDayAllowableValues();
        if (!is_null($this->container['day']) && !in_array($this->container['day'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'day', must be one of '%s'",
                $this->container['day'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCutoffOptionAllowableValues();
        if (!is_null($this->container['cutoff_option']) && !in_array($this->container['cutoff_option'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cutoff_option', must be one of '%s'",
                $this->container['cutoff_option'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEmailSendAllowableValues();
        if (!is_null($this->container['email_send']) && !in_array($this->container['email_send'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'email_send', must be one of '%s'",
                $this->container['email_send'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['email_recipients']) && (mb_strlen($this->container['email_recipients']) > 511)) {
            $invalidProperties[] = "invalid value for 'email_recipients', the character length must be smaller than or equal to 511.";
        }

        if (!is_null($this->container['max_pdf_report']) && ($this->container['max_pdf_report'] > 365)) {
            $invalidProperties[] = "invalid value for 'max_pdf_report', must be smaller than or equal to 365.";
        }

        if (!is_null($this->container['max_pdf_report']) && ($this->container['max_pdf_report'] < 1)) {
            $invalidProperties[] = "invalid value for 'max_pdf_report', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['page']) && (count($this->container['page']) > 0)) {
            $invalidProperties[] = "invalid value for 'page', number of items must be less than or equal to 0.";
        }

        if (!is_null($this->container['body_item']) && (count($this->container['body_item']) > 256)) {
            $invalidProperties[] = "invalid value for 'body_item', number of items must be less than or equal to 256.";
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
     * @param string|null $name Report layout name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InlineObject140., must be smaller than or equal to 35.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Report title.
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (!is_null($title) && (mb_strlen($title) > 127)) {
            throw new \InvalidArgumentException('invalid length for $title when calling InlineObject140., must be smaller than or equal to 127.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets subtitle
     *
     * @return string|null
     */
    public function getSubtitle()
    {
        return $this->container['subtitle'];
    }

    /**
     * Sets subtitle
     *
     * @param string|null $subtitle Report subtitle.
     *
     * @return self
     */
    public function setSubtitle($subtitle)
    {
        if (!is_null($subtitle) && (mb_strlen($subtitle) > 127)) {
            throw new \InvalidArgumentException('invalid length for $subtitle when calling InlineObject140., must be smaller than or equal to 127.');
        }

        $this->container['subtitle'] = $subtitle;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 127)) {
            throw new \InvalidArgumentException('invalid length for $description when calling InlineObject140., must be smaller than or equal to 127.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets style_theme
     *
     * @return string|null
     */
    public function getStyleTheme()
    {
        return $this->container['style_theme'];
    }

    /**
     * Sets style_theme
     *
     * @param string|null $style_theme Report style theme.
     *
     * @return self
     */
    public function setStyleTheme($style_theme)
    {
        if (!is_null($style_theme) && (mb_strlen($style_theme) > 35)) {
            throw new \InvalidArgumentException('invalid length for $style_theme when calling InlineObject140., must be smaller than or equal to 35.');
        }

        $this->container['style_theme'] = $style_theme;

        return $this;
    }

    /**
     * Gets options
     *
     * @return string|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param string|null $options Report layout options.    include-table-of-content:Include table of content in the report.    auto-numbering-heading:Prepend heading with auto numbering.    view-chart-as-heading:Auto add heading for each chart.    show-html-navbar-before-heading:Show HTML navigation bar before each heading.    dummy-option:Use this option if you need none of the above options.
     *
     * @return self
     */
    public function setOptions($options)
    {
        $allowedValues = $this->getOptionsAllowableValues();
        if (!is_null($options) && !in_array($options, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'options', must be one of '%s'",
                    $options,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string|null $format Report format.    pdf:PDF.
     *
     * @return self
     */
    public function setFormat($format)
    {
        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($format) && !in_array($format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'format', must be one of '%s'",
                    $format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets schedule_type
     *
     * @return string|null
     */
    public function getScheduleType()
    {
        return $this->container['schedule_type'];
    }

    /**
     * Sets schedule_type
     *
     * @param string|null $schedule_type Report schedule type.    demand:Run on demand.    daily:Schedule daily.    weekly:Schedule weekly.
     *
     * @return self
     */
    public function setScheduleType($schedule_type)
    {
        $allowedValues = $this->getScheduleTypeAllowableValues();
        if (!is_null($schedule_type) && !in_array($schedule_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'schedule_type', must be one of '%s'",
                    $schedule_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['schedule_type'] = $schedule_type;

        return $this;
    }

    /**
     * Gets day
     *
     * @return string|null
     */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
     * Sets day
     *
     * @param string|null $day Schedule days of week to generate report.    sunday:Sunday.    monday:Monday.    tuesday:Tuesday.    wednesday:Wednesday.    thursday:Thursday.    friday:Friday.    saturday:Saturday.
     *
     * @return self
     */
    public function setDay($day)
    {
        $allowedValues = $this->getDayAllowableValues();
        if (!is_null($day) && !in_array($day, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'day', must be one of '%s'",
                    $day,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['day'] = $day;

        return $this;
    }

    /**
     * Gets time
     *
     * @return string|null
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param string|null $time Schedule time to generate report [hh:mm].
     *
     * @return self
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets cutoff_option
     *
     * @return string|null
     */
    public function getCutoffOption()
    {
        return $this->container['cutoff_option'];
    }

    /**
     * Sets cutoff_option
     *
     * @param string|null $cutoff_option Cutoff-option is either run-time or custom.    run-time:Run time.    custom:Custom.
     *
     * @return self
     */
    public function setCutoffOption($cutoff_option)
    {
        $allowedValues = $this->getCutoffOptionAllowableValues();
        if (!is_null($cutoff_option) && !in_array($cutoff_option, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cutoff_option', must be one of '%s'",
                    $cutoff_option,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cutoff_option'] = $cutoff_option;

        return $this;
    }

    /**
     * Gets cutoff_time
     *
     * @return string|null
     */
    public function getCutoffTime()
    {
        return $this->container['cutoff_time'];
    }

    /**
     * Sets cutoff_time
     *
     * @param string|null $cutoff_time Custom cutoff time to generate report [hh:mm].
     *
     * @return self
     */
    public function setCutoffTime($cutoff_time)
    {
        $this->container['cutoff_time'] = $cutoff_time;

        return $this;
    }

    /**
     * Gets email_send
     *
     * @return string|null
     */
    public function getEmailSend()
    {
        return $this->container['email_send'];
    }

    /**
     * Sets email_send
     *
     * @param string|null $email_send Enable/disable sending emails after reports are generated.    enable:Enable sending emails after generating reports.    disable:Disable sending emails after generating reports.
     *
     * @return self
     */
    public function setEmailSend($email_send)
    {
        $allowedValues = $this->getEmailSendAllowableValues();
        if (!is_null($email_send) && !in_array($email_send, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'email_send', must be one of '%s'",
                    $email_send,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['email_send'] = $email_send;

        return $this;
    }

    /**
     * Gets email_recipients
     *
     * @return string|null
     */
    public function getEmailRecipients()
    {
        return $this->container['email_recipients'];
    }

    /**
     * Sets email_recipients
     *
     * @param string|null $email_recipients Email recipients for generated reports.
     *
     * @return self
     */
    public function setEmailRecipients($email_recipients)
    {
        if (!is_null($email_recipients) && (mb_strlen($email_recipients) > 511)) {
            throw new \InvalidArgumentException('invalid length for $email_recipients when calling InlineObject140., must be smaller than or equal to 511.');
        }

        $this->container['email_recipients'] = $email_recipients;

        return $this;
    }

    /**
     * Gets max_pdf_report
     *
     * @return int|null
     */
    public function getMaxPdfReport()
    {
        return $this->container['max_pdf_report'];
    }

    /**
     * Sets max_pdf_report
     *
     * @param int|null $max_pdf_report Maximum number of PDF reports to keep at one time (oldest report is overwritten).
     *
     * @return self
     */
    public function setMaxPdfReport($max_pdf_report)
    {

        if (!is_null($max_pdf_report) && ($max_pdf_report > 365)) {
            throw new \InvalidArgumentException('invalid value for $max_pdf_report when calling InlineObject140., must be smaller than or equal to 365.');
        }
        if (!is_null($max_pdf_report) && ($max_pdf_report < 1)) {
            throw new \InvalidArgumentException('invalid value for $max_pdf_report when calling InlineObject140., must be bigger than or equal to 1.');
        }

        $this->container['max_pdf_report'] = $max_pdf_report;

        return $this;
    }

    /**
     * Gets page
     *
     * @return \Fortigate\FortiOS\Model\CMDB\ReportLayoutNamePage[]|null
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param \Fortigate\FortiOS\Model\CMDB\ReportLayoutNamePage[]|null $page Configure report page.
     *
     * @return self
     */
    public function setPage($page)
    {

        if (!is_null($page) && (count($page) > 0)) {
            throw new \InvalidArgumentException('invalid value for $page when calling InlineObject140., number of items must be less than or equal to 0.');
        }
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets body_item
     *
     * @return \Fortigate\FortiOS\Model\CMDB\ReportLayoutNameBodyItem[]|null
     */
    public function getBodyItem()
    {
        return $this->container['body_item'];
    }

    /**
     * Sets body_item
     *
     * @param \Fortigate\FortiOS\Model\CMDB\ReportLayoutNameBodyItem[]|null $body_item Configure report body item.
     *
     * @return self
     */
    public function setBodyItem($body_item)
    {

        if (!is_null($body_item) && (count($body_item) > 256)) {
            throw new \InvalidArgumentException('invalid value for $body_item when calling InlineObject140., number of items must be less than or equal to 256.');
        }
        $this->container['body_item'] = $body_item;

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


