<?php
/**
 * InlineObject13
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
 * InlineObject13 Class Doc Comment
 *
 * @category Class
 * @package  Fortigate\FortiOS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineObject13 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_13';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'id' => 'int',
        'category' => 'int',
        'popularity' => 'int',
        'risk' => 'int',
        'weight' => 'int',
        'protocol' => 'string',
        'technology' => 'string',
        'behavior' => 'string',
        'vendor' => 'string',
        'parameters' => '\Fortigate\FortiOS\Model\CMDB\ApplicationNameNameParameters[]',
        'metadata' => '\Fortigate\FortiOS\Model\CMDB\ApplicationNameNameMetadata[]'
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
        'id' => null,
        'category' => null,
        'popularity' => null,
        'risk' => null,
        'weight' => null,
        'protocol' => null,
        'technology' => null,
        'behavior' => null,
        'vendor' => null,
        'parameters' => null,
        'metadata' => null
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
        'id' => 'id',
        'category' => 'category',
        'popularity' => 'popularity',
        'risk' => 'risk',
        'weight' => 'weight',
        'protocol' => 'protocol',
        'technology' => 'technology',
        'behavior' => 'behavior',
        'vendor' => 'vendor',
        'parameters' => 'parameters',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'id' => 'setId',
        'category' => 'setCategory',
        'popularity' => 'setPopularity',
        'risk' => 'setRisk',
        'weight' => 'setWeight',
        'protocol' => 'setProtocol',
        'technology' => 'setTechnology',
        'behavior' => 'setBehavior',
        'vendor' => 'setVendor',
        'parameters' => 'setParameters',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'id' => 'getId',
        'category' => 'getCategory',
        'popularity' => 'getPopularity',
        'risk' => 'getRisk',
        'weight' => 'getWeight',
        'protocol' => 'getProtocol',
        'technology' => 'getTechnology',
        'behavior' => 'getBehavior',
        'vendor' => 'getVendor',
        'parameters' => 'getParameters',
        'metadata' => 'getMetadata'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['popularity'] = $data['popularity'] ?? null;
        $this->container['risk'] = $data['risk'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['protocol'] = $data['protocol'] ?? null;
        $this->container['technology'] = $data['technology'] ?? null;
        $this->container['behavior'] = $data['behavior'] ?? null;
        $this->container['vendor'] = $data['vendor'] ?? null;
        $this->container['parameters'] = $data['parameters'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 63)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 63.";
        }

        if (!is_null($this->container['id']) && ($this->container['id'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['category']) && ($this->container['category'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'category', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['category']) && ($this->container['category'] < 0)) {
            $invalidProperties[] = "invalid value for 'category', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['popularity']) && ($this->container['popularity'] > 255)) {
            $invalidProperties[] = "invalid value for 'popularity', must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['popularity']) && ($this->container['popularity'] < 0)) {
            $invalidProperties[] = "invalid value for 'popularity', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['risk']) && ($this->container['risk'] > 255)) {
            $invalidProperties[] = "invalid value for 'risk', must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['risk']) && ($this->container['risk'] < 0)) {
            $invalidProperties[] = "invalid value for 'risk', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['weight']) && ($this->container['weight'] > 255)) {
            $invalidProperties[] = "invalid value for 'weight', must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['weight']) && ($this->container['weight'] < 0)) {
            $invalidProperties[] = "invalid value for 'weight', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['parameters']) && (count($this->container['parameters']) > 0)) {
            $invalidProperties[] = "invalid value for 'parameters', number of items must be less than or equal to 0.";
        }

        if (!is_null($this->container['metadata']) && (count($this->container['metadata']) > 0)) {
            $invalidProperties[] = "invalid value for 'metadata', number of items must be less than or equal to 0.";
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
     * @param string|null $name Application name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 63)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InlineObject13., must be smaller than or equal to 63.');
        }

        $this->container['name'] = $name;

        return $this;
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
     * @param int|null $id Application ID.
     *
     * @return self
     */
    public function setId($id)
    {

        if (!is_null($id) && ($id > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $id when calling InlineObject13., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($id) && ($id < 0)) {
            throw new \InvalidArgumentException('invalid value for $id when calling InlineObject13., must be bigger than or equal to 0.');
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
     * @param int|null $category Application category ID.
     *
     * @return self
     */
    public function setCategory($category)
    {

        if (!is_null($category) && ($category > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $category when calling InlineObject13., must be smaller than or equal to 4294967295.');
        }
        if (!is_null($category) && ($category < 0)) {
            throw new \InvalidArgumentException('invalid value for $category when calling InlineObject13., must be bigger than or equal to 0.');
        }

        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets popularity
     *
     * @return int|null
     */
    public function getPopularity()
    {
        return $this->container['popularity'];
    }

    /**
     * Sets popularity
     *
     * @param int|null $popularity Application popularity.
     *
     * @return self
     */
    public function setPopularity($popularity)
    {

        if (!is_null($popularity) && ($popularity > 255)) {
            throw new \InvalidArgumentException('invalid value for $popularity when calling InlineObject13., must be smaller than or equal to 255.');
        }
        if (!is_null($popularity) && ($popularity < 0)) {
            throw new \InvalidArgumentException('invalid value for $popularity when calling InlineObject13., must be bigger than or equal to 0.');
        }

        $this->container['popularity'] = $popularity;

        return $this;
    }

    /**
     * Gets risk
     *
     * @return int|null
     */
    public function getRisk()
    {
        return $this->container['risk'];
    }

    /**
     * Sets risk
     *
     * @param int|null $risk Application risk.
     *
     * @return self
     */
    public function setRisk($risk)
    {

        if (!is_null($risk) && ($risk > 255)) {
            throw new \InvalidArgumentException('invalid value for $risk when calling InlineObject13., must be smaller than or equal to 255.');
        }
        if (!is_null($risk) && ($risk < 0)) {
            throw new \InvalidArgumentException('invalid value for $risk when calling InlineObject13., must be bigger than or equal to 0.');
        }

        $this->container['risk'] = $risk;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return int|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param int|null $weight Application weight.
     *
     * @return self
     */
    public function setWeight($weight)
    {

        if (!is_null($weight) && ($weight > 255)) {
            throw new \InvalidArgumentException('invalid value for $weight when calling InlineObject13., must be smaller than or equal to 255.');
        }
        if (!is_null($weight) && ($weight < 0)) {
            throw new \InvalidArgumentException('invalid value for $weight when calling InlineObject13., must be bigger than or equal to 0.');
        }

        $this->container['weight'] = $weight;

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
     * @param string|null $protocol Application protocol.
     *
     * @return self
     */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;

        return $this;
    }

    /**
     * Gets technology
     *
     * @return string|null
     */
    public function getTechnology()
    {
        return $this->container['technology'];
    }

    /**
     * Sets technology
     *
     * @param string|null $technology Application technology.
     *
     * @return self
     */
    public function setTechnology($technology)
    {
        $this->container['technology'] = $technology;

        return $this;
    }

    /**
     * Gets behavior
     *
     * @return string|null
     */
    public function getBehavior()
    {
        return $this->container['behavior'];
    }

    /**
     * Sets behavior
     *
     * @param string|null $behavior Application behavior.
     *
     * @return self
     */
    public function setBehavior($behavior)
    {
        $this->container['behavior'] = $behavior;

        return $this;
    }

    /**
     * Gets vendor
     *
     * @return string|null
     */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
     * Sets vendor
     *
     * @param string|null $vendor Application vendor.
     *
     * @return self
     */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \Fortigate\FortiOS\Model\CMDB\ApplicationNameNameParameters[]|null
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \Fortigate\FortiOS\Model\CMDB\ApplicationNameNameParameters[]|null $parameters Application parameters.
     *
     * @return self
     */
    public function setParameters($parameters)
    {

        if (!is_null($parameters) && (count($parameters) > 0)) {
            throw new \InvalidArgumentException('invalid value for $parameters when calling InlineObject13., number of items must be less than or equal to 0.');
        }
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \Fortigate\FortiOS\Model\CMDB\ApplicationNameNameMetadata[]|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \Fortigate\FortiOS\Model\CMDB\ApplicationNameNameMetadata[]|null $metadata Meta data.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {

        if (!is_null($metadata) && (count($metadata) > 0)) {
            throw new \InvalidArgumentException('invalid value for $metadata when calling InlineObject13., number of items must be less than or equal to 0.');
        }
        $this->container['metadata'] = $metadata;

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


