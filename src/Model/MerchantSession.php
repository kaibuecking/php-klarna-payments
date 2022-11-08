<?php
/**
 * MerchantSession
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Klarna\Payments
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Klarna Payments API V1
 *
 * The payments API is used to create a session to offer Klarna's payment methods as part of your checkout. As soon as the purchase is completed the order should be read and handled using the [`Order Management API`](https://docs.klarna.com/api/ordermanagement).  Read more on [Klarna payments](https://docs.klarna.com/klarna-payments/).
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Klarna\Payments\Model;

use \ArrayAccess;
use \Klarna\ObjectSerializer;

/**
 * MerchantSession Class Doc Comment
 *
 * @category Class
 * @package  Klarna\Payments
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MerchantSession implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'merchant_session';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'client_token' => 'string',
        'payment_method_categories' => '\Klarna\Payments\Model\PaymentMethodCategory[]',
        'session_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'client_token' => null,
        'payment_method_categories' => null,
        'session_id' => null
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
        'client_token' => 'client_token',
        'payment_method_categories' => 'payment_method_categories',
        'session_id' => 'session_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_token' => 'setClientToken',
        'payment_method_categories' => 'setPaymentMethodCategories',
        'session_id' => 'setSessionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_token' => 'getClientToken',
        'payment_method_categories' => 'getPaymentMethodCategories',
        'session_id' => 'getSessionId'
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
        $this->container['client_token'] = $data['client_token'] ?? null;
        $this->container['payment_method_categories'] = $data['payment_method_categories'] ?? null;
        $this->container['session_id'] = $data['session_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['client_token'] === null) {
            $invalidProperties[] = "'client_token' can't be null";
        }
        if ((mb_strlen($this->container['client_token']) > 4096)) {
            $invalidProperties[] = "invalid value for 'client_token', the character length must be smaller than or equal to 4096.";
        }

        if ((mb_strlen($this->container['client_token']) < 0)) {
            $invalidProperties[] = "invalid value for 'client_token', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['session_id'] === null) {
            $invalidProperties[] = "'session_id' can't be null";
        }
        if ((mb_strlen($this->container['session_id']) > 255)) {
            $invalidProperties[] = "invalid value for 'session_id', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['session_id']) < 0)) {
            $invalidProperties[] = "invalid value for 'session_id', the character length must be bigger than or equal to 0.";
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
     * Gets client_token
     *
     * @return string
     */
    public function getClientToken()
    {
        return $this->container['client_token'];
    }

    /**
     * Sets client_token
     *
     * @param string $client_token Client token to be passed to the JS client while initializing the JS SDK in the next step.
     *
     * @return self
     */
    public function setClientToken($client_token)
    {
        if ((mb_strlen($client_token) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $client_token when calling MerchantSession., must be smaller than or equal to 4096.');
        }
        if ((mb_strlen($client_token) < 0)) {
            throw new \InvalidArgumentException('invalid length for $client_token when calling MerchantSession., must be bigger than or equal to 0.');
        }

        $this->container['client_token'] = $client_token;

        return $this;
    }

    /**
     * Gets payment_method_categories
     *
     * @return \Klarna\Payments\Model\PaymentMethodCategory[]|null
     */
    public function getPaymentMethodCategories()
    {
        return $this->container['payment_method_categories'];
    }

    /**
     * Sets payment_method_categories
     *
     * @param \Klarna\Payments\Model\PaymentMethodCategory[]|null $payment_method_categories Available payment method categories for this particular session
     *
     * @return self
     */
    public function setPaymentMethodCategories($payment_method_categories)
    {


        $this->container['payment_method_categories'] = $payment_method_categories;

        return $this;
    }

    /**
     * Gets session_id
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     *
     * @param string $session_id ID of the created session. Please use this ID to share with Klarna for identifying any issues during integration.
     *
     * @return self
     */
    public function setSessionId($session_id)
    {
        if ((mb_strlen($session_id) > 255)) {
            throw new \InvalidArgumentException('invalid length for $session_id when calling MerchantSession., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($session_id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $session_id when calling MerchantSession., must be bigger than or equal to 0.');
        }

        $this->container['session_id'] = $session_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


