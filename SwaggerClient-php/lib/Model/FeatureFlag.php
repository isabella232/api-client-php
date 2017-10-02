<?php
/**
 * FeatureFlag
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * LaunchDarkly REST API
 *
 * Build custom integrations with the LaunchDarkly REST API
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@launchdarkly.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * FeatureFlag Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FeatureFlag implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'FeatureFlag';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'key' => 'string',
        'name' => 'string',
        'kind' => 'string',
        'creation_date' => 'float',
        'include_in_snippet' => 'bool',
        'temporary' => 'bool',
        'maintainer_id' => 'string',
        'tags' => 'string[]',
        'variations' => '\Swagger\Client\Model\Variation[]',
        '_links' => '\Swagger\Client\Model\Links',
        '_maintainer' => '\Swagger\Client\Model\Member',
        'environments' => 'map[string,\Swagger\Client\Model\FeatureFlagConfig]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'key' => null,
        'name' => null,
        'kind' => null,
        'creation_date' => null,
        'include_in_snippet' => null,
        'temporary' => null,
        'maintainer_id' => null,
        'tags' => null,
        'variations' => null,
        '_links' => null,
        '_maintainer' => null,
        'environments' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'key' => 'key',
        'name' => 'name',
        'kind' => 'kind',
        'creation_date' => 'creationDate',
        'include_in_snippet' => 'includeInSnippet',
        'temporary' => 'temporary',
        'maintainer_id' => 'maintainerId',
        'tags' => 'tags',
        'variations' => 'variations',
        '_links' => '_links',
        '_maintainer' => '_maintainer',
        'environments' => 'environments'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'key' => 'setKey',
        'name' => 'setName',
        'kind' => 'setKind',
        'creation_date' => 'setCreationDate',
        'include_in_snippet' => 'setIncludeInSnippet',
        'temporary' => 'setTemporary',
        'maintainer_id' => 'setMaintainerId',
        'tags' => 'setTags',
        'variations' => 'setVariations',
        '_links' => 'setLinks',
        '_maintainer' => 'setMaintainer',
        'environments' => 'setEnvironments'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'key' => 'getKey',
        'name' => 'getName',
        'kind' => 'getKind',
        'creation_date' => 'getCreationDate',
        'include_in_snippet' => 'getIncludeInSnippet',
        'temporary' => 'getTemporary',
        'maintainer_id' => 'getMaintainerId',
        'tags' => 'getTags',
        'variations' => 'getVariations',
        '_links' => 'getLinks',
        '_maintainer' => 'getMaintainer',
        'environments' => 'getEnvironments'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['include_in_snippet'] = isset($data['include_in_snippet']) ? $data['include_in_snippet'] : null;
        $this->container['temporary'] = isset($data['temporary']) ? $data['temporary'] : null;
        $this->container['maintainer_id'] = isset($data['maintainer_id']) ? $data['maintainer_id'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['variations'] = isset($data['variations']) ? $data['variations'] : null;
        $this->container['_links'] = isset($data['_links']) ? $data['_links'] : null;
        $this->container['_maintainer'] = isset($data['_maintainer']) ? $data['_maintainer'] : null;
        $this->container['environments'] = isset($data['environments']) ? $data['environments'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets key
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     * @param string $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets kind
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     * @param string $kind
     * @return $this
     */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets creation_date
     * @return float
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     * @param float $creation_date
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets include_in_snippet
     * @return bool
     */
    public function getIncludeInSnippet()
    {
        return $this->container['include_in_snippet'];
    }

    /**
     * Sets include_in_snippet
     * @param bool $include_in_snippet
     * @return $this
     */
    public function setIncludeInSnippet($include_in_snippet)
    {
        $this->container['include_in_snippet'] = $include_in_snippet;

        return $this;
    }

    /**
     * Gets temporary
     * @return bool
     */
    public function getTemporary()
    {
        return $this->container['temporary'];
    }

    /**
     * Sets temporary
     * @param bool $temporary
     * @return $this
     */
    public function setTemporary($temporary)
    {
        $this->container['temporary'] = $temporary;

        return $this;
    }

    /**
     * Gets maintainer_id
     * @return string
     */
    public function getMaintainerId()
    {
        return $this->container['maintainer_id'];
    }

    /**
     * Sets maintainer_id
     * @param string $maintainer_id
     * @return $this
     */
    public function setMaintainerId($maintainer_id)
    {
        $this->container['maintainer_id'] = $maintainer_id;

        return $this;
    }

    /**
     * Gets tags
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param string[] $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets variations
     * @return \Swagger\Client\Model\Variation[]
     */
    public function getVariations()
    {
        return $this->container['variations'];
    }

    /**
     * Sets variations
     * @param \Swagger\Client\Model\Variation[] $variations
     * @return $this
     */
    public function setVariations($variations)
    {
        $this->container['variations'] = $variations;

        return $this;
    }

    /**
     * Gets _links
     * @return \Swagger\Client\Model\Links
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     * @param \Swagger\Client\Model\Links $_links
     * @return $this
     */
    public function setLinks($_links)
    {
        $this->container['_links'] = $_links;

        return $this;
    }

    /**
     * Gets _maintainer
     * @return \Swagger\Client\Model\Member
     */
    public function getMaintainer()
    {
        return $this->container['_maintainer'];
    }

    /**
     * Sets _maintainer
     * @param \Swagger\Client\Model\Member $_maintainer
     * @return $this
     */
    public function setMaintainer($_maintainer)
    {
        $this->container['_maintainer'] = $_maintainer;

        return $this;
    }

    /**
     * Gets environments
     * @return map[string,\Swagger\Client\Model\FeatureFlagConfig]
     */
    public function getEnvironments()
    {
        return $this->container['environments'];
    }

    /**
     * Sets environments
     * @param map[string,\Swagger\Client\Model\FeatureFlagConfig] $environments
     * @return $this
     */
    public function setEnvironments($environments)
    {
        $this->container['environments'] = $environments;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


