<?php
/**
 * RelayProxyConfig
 *
 * PHP version 5
 *
 * @category Class
 * @package  LaunchDarklyApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * LaunchDarkly REST API
 *
 * Build custom integrations with the LaunchDarkly REST API
 *
 * OpenAPI spec version: 3.7.1
 * Contact: support@launchdarkly.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace LaunchDarklyApi\Model;

use \ArrayAccess;
use \LaunchDarklyApi\ObjectSerializer;

/**
 * RelayProxyConfig Class Doc Comment
 *
 * @category Class
 * @package  LaunchDarklyApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RelayProxyConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RelayProxyConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_id' => '\LaunchDarklyApi\Model\Id',
        '_creator' => '\LaunchDarklyApi\Model\Member',
        'name' => 'string',
        'policy' => '\LaunchDarklyApi\Model\Policy[]',
        'full_key' => 'string',
        'display_key' => 'string',
        'creation_date' => 'int',
        'last_modified' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_id' => null,
        '_creator' => null,
        'name' => null,
        'policy' => null,
        'full_key' => null,
        'display_key' => null,
        'creation_date' => 'int64',
        'last_modified' => 'int64'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        '_id' => '_id',
        '_creator' => '_creator',
        'name' => 'name',
        'policy' => 'policy',
        'full_key' => 'fullKey',
        'display_key' => 'displayKey',
        'creation_date' => 'creationDate',
        'last_modified' => 'lastModified'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        '_creator' => 'setCreator',
        'name' => 'setName',
        'policy' => 'setPolicy',
        'full_key' => 'setFullKey',
        'display_key' => 'setDisplayKey',
        'creation_date' => 'setCreationDate',
        'last_modified' => 'setLastModified'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        '_creator' => 'getCreator',
        'name' => 'getName',
        'policy' => 'getPolicy',
        'full_key' => 'getFullKey',
        'display_key' => 'getDisplayKey',
        'creation_date' => 'getCreationDate',
        'last_modified' => 'getLastModified'
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
        return self::$swaggerModelName;
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
        $this->container['_id'] = isset($data['_id']) ? $data['_id'] : null;
        $this->container['_creator'] = isset($data['_creator']) ? $data['_creator'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['full_key'] = isset($data['full_key']) ? $data['full_key'] : null;
        $this->container['display_key'] = isset($data['display_key']) ? $data['display_key'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['_id'] === null) {
            $invalidProperties[] = "'_id' can't be null";
        }
        if ($this->container['_creator'] === null) {
            $invalidProperties[] = "'_creator' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['policy'] === null) {
            $invalidProperties[] = "'policy' can't be null";
        }
        if ($this->container['display_key'] === null) {
            $invalidProperties[] = "'display_key' can't be null";
        }
        if ($this->container['creation_date'] === null) {
            $invalidProperties[] = "'creation_date' can't be null";
        }
        if ($this->container['last_modified'] === null) {
            $invalidProperties[] = "'last_modified' can't be null";
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
     * Gets _id
     *
     * @return \LaunchDarklyApi\Model\Id
     */
    public function getId()
    {
        return $this->container['_id'];
    }

    /**
     * Sets _id
     *
     * @param \LaunchDarklyApi\Model\Id $_id _id
     *
     * @return $this
     */
    public function setId($_id)
    {
        $this->container['_id'] = $_id;

        return $this;
    }

    /**
     * Gets _creator
     *
     * @return \LaunchDarklyApi\Model\Member
     */
    public function getCreator()
    {
        return $this->container['_creator'];
    }

    /**
     * Sets _creator
     *
     * @param \LaunchDarklyApi\Model\Member $_creator _creator
     *
     * @return $this
     */
    public function setCreator($_creator)
    {
        $this->container['_creator'] = $_creator;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name A human-friendly name for the relay proxy configuration
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets policy
     *
     * @return \LaunchDarklyApi\Model\Policy[]
     */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
     * Sets policy
     *
     * @param \LaunchDarklyApi\Model\Policy[] $policy policy
     *
     * @return $this
     */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;

        return $this;
    }

    /**
     * Gets full_key
     *
     * @return string
     */
    public function getFullKey()
    {
        return $this->container['full_key'];
    }

    /**
     * Sets full_key
     *
     * @param string $full_key Full secret key. Only included if creating or resetting the relay proxy configuration
     *
     * @return $this
     */
    public function setFullKey($full_key)
    {
        $this->container['full_key'] = $full_key;

        return $this;
    }

    /**
     * Gets display_key
     *
     * @return string
     */
    public function getDisplayKey()
    {
        return $this->container['display_key'];
    }

    /**
     * Sets display_key
     *
     * @param string $display_key The last 4 digits of the unique secret key for this relay proxy configuration
     *
     * @return $this
     */
    public function setDisplayKey($display_key)
    {
        $this->container['display_key'] = $display_key;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return int
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param int $creation_date A unix epoch time in milliseconds specifying the creation time of this relay proxy configuration
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return int
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param int $last_modified A unix epoch time in milliseconds specifying the last time this relay proxy configuration was modified
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


