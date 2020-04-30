<?php
/**
 * FeatureFlagConfig
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
 * OpenAPI spec version: 3.1.0
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
 * FeatureFlagConfig Class Doc Comment
 *
 * @category Class
 * @package  LaunchDarklyApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FeatureFlagConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FeatureFlagConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'on' => 'bool',
        'archived' => 'bool',
        'salt' => 'string',
        'sel' => 'string',
        'last_modified' => 'int',
        'version' => 'int',
        'targets' => '\LaunchDarklyApi\Model\Target[]',
        'rules' => '\LaunchDarklyApi\Model\Rule[]',
        'fallthrough' => '\LaunchDarklyApi\Model\Fallthrough',
        'off_variation' => 'int',
        'prerequisites' => '\LaunchDarklyApi\Model\Prerequisite[]',
        'track_events' => 'bool',
        'track_events_fallthrough' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'on' => null,
        'archived' => null,
        'salt' => null,
        'sel' => null,
        'last_modified' => 'int64',
        'version' => null,
        'targets' => null,
        'rules' => null,
        'fallthrough' => null,
        'off_variation' => null,
        'prerequisites' => null,
        'track_events' => null,
        'track_events_fallthrough' => null
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
        'on' => 'on',
        'archived' => 'archived',
        'salt' => 'salt',
        'sel' => 'sel',
        'last_modified' => 'lastModified',
        'version' => 'version',
        'targets' => 'targets',
        'rules' => 'rules',
        'fallthrough' => 'fallthrough',
        'off_variation' => 'offVariation',
        'prerequisites' => 'prerequisites',
        'track_events' => 'trackEvents',
        'track_events_fallthrough' => 'trackEventsFallthrough'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'on' => 'setOn',
        'archived' => 'setArchived',
        'salt' => 'setSalt',
        'sel' => 'setSel',
        'last_modified' => 'setLastModified',
        'version' => 'setVersion',
        'targets' => 'setTargets',
        'rules' => 'setRules',
        'fallthrough' => 'setFallthrough',
        'off_variation' => 'setOffVariation',
        'prerequisites' => 'setPrerequisites',
        'track_events' => 'setTrackEvents',
        'track_events_fallthrough' => 'setTrackEventsFallthrough'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'on' => 'getOn',
        'archived' => 'getArchived',
        'salt' => 'getSalt',
        'sel' => 'getSel',
        'last_modified' => 'getLastModified',
        'version' => 'getVersion',
        'targets' => 'getTargets',
        'rules' => 'getRules',
        'fallthrough' => 'getFallthrough',
        'off_variation' => 'getOffVariation',
        'prerequisites' => 'getPrerequisites',
        'track_events' => 'getTrackEvents',
        'track_events_fallthrough' => 'getTrackEventsFallthrough'
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
        $this->container['on'] = isset($data['on']) ? $data['on'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['salt'] = isset($data['salt']) ? $data['salt'] : null;
        $this->container['sel'] = isset($data['sel']) ? $data['sel'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['targets'] = isset($data['targets']) ? $data['targets'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
        $this->container['fallthrough'] = isset($data['fallthrough']) ? $data['fallthrough'] : null;
        $this->container['off_variation'] = isset($data['off_variation']) ? $data['off_variation'] : null;
        $this->container['prerequisites'] = isset($data['prerequisites']) ? $data['prerequisites'] : null;
        $this->container['track_events'] = isset($data['track_events']) ? $data['track_events'] : null;
        $this->container['track_events_fallthrough'] = isset($data['track_events_fallthrough']) ? $data['track_events_fallthrough'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets on
     *
     * @return bool
     */
    public function getOn()
    {
        return $this->container['on'];
    }

    /**
     * Sets on
     *
     * @param bool $on on
     *
     * @return $this
     */
    public function setOn($on)
    {
        $this->container['on'] = $on;

        return $this;
    }

    /**
     * Gets archived
     *
     * @return bool
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool $archived archived
     *
     * @return $this
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->container['salt'];
    }

    /**
     * Sets salt
     *
     * @param string $salt salt
     *
     * @return $this
     */
    public function setSalt($salt)
    {
        $this->container['salt'] = $salt;

        return $this;
    }

    /**
     * Gets sel
     *
     * @return string
     */
    public function getSel()
    {
        return $this->container['sel'];
    }

    /**
     * Sets sel
     *
     * @param string $sel sel
     *
     * @return $this
     */
    public function setSel($sel)
    {
        $this->container['sel'] = $sel;

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
     * @param int $last_modified last_modified
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets targets
     *
     * @return \LaunchDarklyApi\Model\Target[]
     */
    public function getTargets()
    {
        return $this->container['targets'];
    }

    /**
     * Sets targets
     *
     * @param \LaunchDarklyApi\Model\Target[] $targets targets
     *
     * @return $this
     */
    public function setTargets($targets)
    {
        $this->container['targets'] = $targets;

        return $this;
    }

    /**
     * Gets rules
     *
     * @return \LaunchDarklyApi\Model\Rule[]
     */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
     * Sets rules
     *
     * @param \LaunchDarklyApi\Model\Rule[] $rules rules
     *
     * @return $this
     */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;

        return $this;
    }

    /**
     * Gets fallthrough
     *
     * @return \LaunchDarklyApi\Model\Fallthrough
     */
    public function getFallthrough()
    {
        return $this->container['fallthrough'];
    }

    /**
     * Sets fallthrough
     *
     * @param \LaunchDarklyApi\Model\Fallthrough $fallthrough fallthrough
     *
     * @return $this
     */
    public function setFallthrough($fallthrough)
    {
        $this->container['fallthrough'] = $fallthrough;

        return $this;
    }

    /**
     * Gets off_variation
     *
     * @return int
     */
    public function getOffVariation()
    {
        return $this->container['off_variation'];
    }

    /**
     * Sets off_variation
     *
     * @param int $off_variation off_variation
     *
     * @return $this
     */
    public function setOffVariation($off_variation)
    {
        $this->container['off_variation'] = $off_variation;

        return $this;
    }

    /**
     * Gets prerequisites
     *
     * @return \LaunchDarklyApi\Model\Prerequisite[]
     */
    public function getPrerequisites()
    {
        return $this->container['prerequisites'];
    }

    /**
     * Sets prerequisites
     *
     * @param \LaunchDarklyApi\Model\Prerequisite[] $prerequisites prerequisites
     *
     * @return $this
     */
    public function setPrerequisites($prerequisites)
    {
        $this->container['prerequisites'] = $prerequisites;

        return $this;
    }

    /**
     * Gets track_events
     *
     * @return bool
     */
    public function getTrackEvents()
    {
        return $this->container['track_events'];
    }

    /**
     * Sets track_events
     *
     * @param bool $track_events Set to true to send detailed event information for this flag.
     *
     * @return $this
     */
    public function setTrackEvents($track_events)
    {
        $this->container['track_events'] = $track_events;

        return $this;
    }

    /**
     * Gets track_events_fallthrough
     *
     * @return bool
     */
    public function getTrackEventsFallthrough()
    {
        return $this->container['track_events_fallthrough'];
    }

    /**
     * Sets track_events_fallthrough
     *
     * @param bool $track_events_fallthrough Set to true to send detailed event information when targeting is enabled but no individual targeting rule is matched.
     *
     * @return $this
     */
    public function setTrackEventsFallthrough($track_events_fallthrough)
    {
        $this->container['track_events_fallthrough'] = $track_events_fallthrough;

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


