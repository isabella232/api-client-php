<?php
/**
 * WebhookBody
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
 * OpenAPI spec version: 2.0.26
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
 * WebhookBody Class Doc Comment
 *
 * @category Class
 * @package  LaunchDarklyApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebhookBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'webhookBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
        'secret' => 'string',
        'sign' => 'bool',
        'on' => 'bool',
        'name' => 'string',
        'statements' => '\LaunchDarklyApi\Model\Statements',
        'tags' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => null,
        'secret' => null,
        'sign' => null,
        'on' => null,
        'name' => null,
        'statements' => null,
        'tags' => null
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
        'url' => 'url',
        'secret' => 'secret',
        'sign' => 'sign',
        'on' => 'on',
        'name' => 'name',
        'statements' => 'statements',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'secret' => 'setSecret',
        'sign' => 'setSign',
        'on' => 'setOn',
        'name' => 'setName',
        'statements' => 'setStatements',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'secret' => 'getSecret',
        'sign' => 'getSign',
        'on' => 'getOn',
        'name' => 'getName',
        'statements' => 'getStatements',
        'tags' => 'getTags'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['secret'] = isset($data['secret']) ? $data['secret'] : null;
        $this->container['sign'] = isset($data['sign']) ? $data['sign'] : null;
        $this->container['on'] = isset($data['on']) ? $data['on'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['statements'] = isset($data['statements']) ? $data['statements'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['sign'] === null) {
            $invalidProperties[] = "'sign' can't be null";
        }
        if ($this->container['on'] === null) {
            $invalidProperties[] = "'on' can't be null";
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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url The URL of the remote webhook.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets secret
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->container['secret'];
    }

    /**
     * Sets secret
     *
     * @param string $secret If sign is true, and the secret attribute is omitted, LaunchDarkly will automatically generate a secret for you.
     *
     * @return $this
     */
    public function setSecret($secret)
    {
        $this->container['secret'] = $secret;

        return $this;
    }

    /**
     * Gets sign
     *
     * @return bool
     */
    public function getSign()
    {
        return $this->container['sign'];
    }

    /**
     * Sets sign
     *
     * @param bool $sign If sign is false, the webhook will not include a signature header, and the secret can be omitted.
     *
     * @return $this
     */
    public function setSign($sign)
    {
        $this->container['sign'] = $sign;

        return $this;
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
     * @param bool $on Whether this webhook is enabled or not.
     *
     * @return $this
     */
    public function setOn($on)
    {
        $this->container['on'] = $on;

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
     * @param string $name The name of the webhook.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets statements
     *
     * @return \LaunchDarklyApi\Model\Statements
     */
    public function getStatements()
    {
        return $this->container['statements'];
    }

    /**
     * Sets statements
     *
     * @param \LaunchDarklyApi\Model\Statements $statements statements
     *
     * @return $this
     */
    public function setStatements($statements)
    {
        $this->container['statements'] = $statements;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[] $tags Tags for the webhook.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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


