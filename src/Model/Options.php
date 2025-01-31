<?php
/**
 * Options
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
 * The payments API is used to create a session to offer Klarna's payment methods as part of your checkout. As soon as the purchase is completed the order should be read and handled using the [`Order Management API`](https://docs.klarna.com/api/ordermanagement).  Read more on [Klarna payments](https://docs.klarna.com/klarna-payments/).
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
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
 * Options Class Doc Comment
 *
 * @category Class
 * @package  Klarna\Payments
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Options implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'options';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'color_border' => 'string',
        'color_border_selected' => 'string',
        'color_details' => 'string',
        'color_text' => 'string',
        'radius_border' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'color_border' => null,
        'color_border_selected' => null,
        'color_details' => null,
        'color_text' => null,
        'radius_border' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'color_border' => false,
		'color_border_selected' => false,
		'color_details' => false,
		'color_text' => false,
		'radius_border' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'color_border' => 'color_border',
        'color_border_selected' => 'color_border_selected',
        'color_details' => 'color_details',
        'color_text' => 'color_text',
        'radius_border' => 'radius_border'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'color_border' => 'setColorBorder',
        'color_border_selected' => 'setColorBorderSelected',
        'color_details' => 'setColorDetails',
        'color_text' => 'setColorText',
        'radius_border' => 'setRadiusBorder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'color_border' => 'getColorBorder',
        'color_border_selected' => 'getColorBorderSelected',
        'color_details' => 'getColorDetails',
        'color_text' => 'getColorText',
        'radius_border' => 'getRadiusBorder'
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
        $this->setIfExists('color_border', $data ?? [], null);
        $this->setIfExists('color_border_selected', $data ?? [], null);
        $this->setIfExists('color_details', $data ?? [], null);
        $this->setIfExists('color_text', $data ?? [], null);
        $this->setIfExists('radius_border', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['color_border']) && !preg_match("/^#[A-Fa-f0-9]{6}$/", $this->container['color_border'])) {
            $invalidProperties[] = "invalid value for 'color_border', must be conform to the pattern /^#[A-Fa-f0-9]{6}$/.";
        }

        if (!is_null($this->container['color_border_selected']) && !preg_match("/^#[A-Fa-f0-9]{6}$/", $this->container['color_border_selected'])) {
            $invalidProperties[] = "invalid value for 'color_border_selected', must be conform to the pattern /^#[A-Fa-f0-9]{6}$/.";
        }

        if (!is_null($this->container['color_details']) && !preg_match("/^#[A-Fa-f0-9]{6}$/", $this->container['color_details'])) {
            $invalidProperties[] = "invalid value for 'color_details', must be conform to the pattern /^#[A-Fa-f0-9]{6}$/.";
        }

        if (!is_null($this->container['color_text']) && !preg_match("/^#[A-Fa-f0-9]{6}$/", $this->container['color_text'])) {
            $invalidProperties[] = "invalid value for 'color_text', must be conform to the pattern /^#[A-Fa-f0-9]{6}$/.";
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
     * Gets color_border
     *
     * @return string|null
     */
    public function getColorBorder()
    {
        return $this->container['color_border'];
    }

    /**
     * Sets color_border
     *
     * @param string|null $color_border Color for the border of elements within the iFrame. Value should be a CSS hex color, e.g. \"#FF9900\"
     *
     * @return self
     */
    public function setColorBorder($color_border)
    {
        if (is_null($color_border)) {
            throw new \InvalidArgumentException('non-nullable color_border cannot be null');
        }

        if ((!preg_match("/^#[A-Fa-f0-9]{6}$/", $color_border))) {
            throw new \InvalidArgumentException("invalid value for \$color_border when calling Options., must conform to the pattern /^#[A-Fa-f0-9]{6}$/.");
        }

        $this->container['color_border'] = $color_border;

        return $this;
    }

    /**
     * Gets color_border_selected
     *
     * @return string|null
     */
    public function getColorBorderSelected()
    {
        return $this->container['color_border_selected'];
    }

    /**
     * Sets color_border_selected
     *
     * @param string|null $color_border_selected Color for the border of elements within the iFrame when selected by the customer. Value should be a CSS hex color, e.g. \"#FF9900\"
     *
     * @return self
     */
    public function setColorBorderSelected($color_border_selected)
    {
        if (is_null($color_border_selected)) {
            throw new \InvalidArgumentException('non-nullable color_border_selected cannot be null');
        }

        if ((!preg_match("/^#[A-Fa-f0-9]{6}$/", $color_border_selected))) {
            throw new \InvalidArgumentException("invalid value for \$color_border_selected when calling Options., must conform to the pattern /^#[A-Fa-f0-9]{6}$/.");
        }

        $this->container['color_border_selected'] = $color_border_selected;

        return $this;
    }

    /**
     * Gets color_details
     *
     * @return string|null
     */
    public function getColorDetails()
    {
        return $this->container['color_details'];
    }

    /**
     * Sets color_details
     *
     * @param string|null $color_details Color for the bullet points within the iFrame. Value should be a CSS hex color, e.g. \"#FF9900\"
     *
     * @return self
     */
    public function setColorDetails($color_details)
    {
        if (is_null($color_details)) {
            throw new \InvalidArgumentException('non-nullable color_details cannot be null');
        }

        if ((!preg_match("/^#[A-Fa-f0-9]{6}$/", $color_details))) {
            throw new \InvalidArgumentException("invalid value for \$color_details when calling Options., must conform to the pattern /^#[A-Fa-f0-9]{6}$/.");
        }

        $this->container['color_details'] = $color_details;

        return $this;
    }

    /**
     * Gets color_text
     *
     * @return string|null
     */
    public function getColorText()
    {
        return $this->container['color_text'];
    }

    /**
     * Sets color_text
     *
     * @param string|null $color_text Color for the texts within the iFrame. Value should be a CSS hex color, e.g. \"#FF9900\"
     *
     * @return self
     */
    public function setColorText($color_text)
    {
        if (is_null($color_text)) {
            throw new \InvalidArgumentException('non-nullable color_text cannot be null');
        }

        if ((!preg_match("/^#[A-Fa-f0-9]{6}$/", $color_text))) {
            throw new \InvalidArgumentException("invalid value for \$color_text when calling Options., must conform to the pattern /^#[A-Fa-f0-9]{6}$/.");
        }

        $this->container['color_text'] = $color_text;

        return $this;
    }

    /**
     * Gets radius_border
     *
     * @return string|null
     */
    public function getRadiusBorder()
    {
        return $this->container['radius_border'];
    }

    /**
     * Sets radius_border
     *
     * @param string|null $radius_border Radius for the border of elements within the iFrame.
     *
     * @return self
     */
    public function setRadiusBorder($radius_border)
    {
        if (is_null($radius_border)) {
            throw new \InvalidArgumentException('non-nullable radius_border cannot be null');
        }
        $this->container['radius_border'] = $radius_border;

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


