<?php
/**
 * ProductIdentifiers
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
 * ProductIdentifiers Class Doc Comment
 *
 * @category Class
 * @package  Klarna\Payments
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProductIdentifiers implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'product_identifiers';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'brand' => 'string',
        'category_path' => 'string',
        'global_trade_item_number' => 'string',
        'manufacturer_part_number' => 'string',
        'color' => 'string',
        'size' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'brand' => null,
        'category_path' => null,
        'global_trade_item_number' => null,
        'manufacturer_part_number' => null,
        'color' => null,
        'size' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'brand' => false,
		'category_path' => false,
		'global_trade_item_number' => false,
		'manufacturer_part_number' => false,
		'color' => false,
		'size' => false
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
        'brand' => 'brand',
        'category_path' => 'category_path',
        'global_trade_item_number' => 'global_trade_item_number',
        'manufacturer_part_number' => 'manufacturer_part_number',
        'color' => 'color',
        'size' => 'size'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brand' => 'setBrand',
        'category_path' => 'setCategoryPath',
        'global_trade_item_number' => 'setGlobalTradeItemNumber',
        'manufacturer_part_number' => 'setManufacturerPartNumber',
        'color' => 'setColor',
        'size' => 'setSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brand' => 'getBrand',
        'category_path' => 'getCategoryPath',
        'global_trade_item_number' => 'getGlobalTradeItemNumber',
        'manufacturer_part_number' => 'getManufacturerPartNumber',
        'color' => 'getColor',
        'size' => 'getSize'
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
        $this->setIfExists('brand', $data ?? [], null);
        $this->setIfExists('category_path', $data ?? [], null);
        $this->setIfExists('global_trade_item_number', $data ?? [], null);
        $this->setIfExists('manufacturer_part_number', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
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

        if (!is_null($this->container['brand']) && (mb_strlen($this->container['brand']) > 70)) {
            $invalidProperties[] = "invalid value for 'brand', the character length must be smaller than or equal to 70.";
        }

        if (!is_null($this->container['brand']) && (mb_strlen($this->container['brand']) < 0)) {
            $invalidProperties[] = "invalid value for 'brand', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['category_path']) && (mb_strlen($this->container['category_path']) > 750)) {
            $invalidProperties[] = "invalid value for 'category_path', the character length must be smaller than or equal to 750.";
        }

        if (!is_null($this->container['category_path']) && (mb_strlen($this->container['category_path']) < 0)) {
            $invalidProperties[] = "invalid value for 'category_path', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['global_trade_item_number']) && (mb_strlen($this->container['global_trade_item_number']) > 50)) {
            $invalidProperties[] = "invalid value for 'global_trade_item_number', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['global_trade_item_number']) && (mb_strlen($this->container['global_trade_item_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'global_trade_item_number', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['manufacturer_part_number']) && (mb_strlen($this->container['manufacturer_part_number']) > 70)) {
            $invalidProperties[] = "invalid value for 'manufacturer_part_number', the character length must be smaller than or equal to 70.";
        }

        if (!is_null($this->container['manufacturer_part_number']) && (mb_strlen($this->container['manufacturer_part_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'manufacturer_part_number', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['color']) && (mb_strlen($this->container['color']) > 64)) {
            $invalidProperties[] = "invalid value for 'color', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['color']) && (mb_strlen($this->container['color']) < 0)) {
            $invalidProperties[] = "invalid value for 'color', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['size']) && (mb_strlen($this->container['size']) > 64)) {
            $invalidProperties[] = "invalid value for 'size', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['size']) && (mb_strlen($this->container['size']) < 0)) {
            $invalidProperties[] = "invalid value for 'size', the character length must be bigger than or equal to 0.";
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
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand The product's brand name as generally recognized by consumers. If no brand is available for a product, do not supply any value.
     *
     * @return self
     */
    public function setBrand($brand)
    {
        if (is_null($brand)) {
            throw new \InvalidArgumentException('non-nullable brand cannot be null');
        }
        if ((mb_strlen($brand) > 70)) {
            throw new \InvalidArgumentException('invalid length for $brand when calling ProductIdentifiers., must be smaller than or equal to 70.');
        }
        if ((mb_strlen($brand) < 0)) {
            throw new \InvalidArgumentException('invalid length for $brand when calling ProductIdentifiers., must be bigger than or equal to 0.');
        }

        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets category_path
     *
     * @return string|null
     */
    public function getCategoryPath()
    {
        return $this->container['category_path'];
    }

    /**
     * Sets category_path
     *
     * @param string|null $category_path The product's category path as used in the merchant's webshop. Include the full and most detailed category and separate the segments with ' > '
     *
     * @return self
     */
    public function setCategoryPath($category_path)
    {
        if (is_null($category_path)) {
            throw new \InvalidArgumentException('non-nullable category_path cannot be null');
        }
        if ((mb_strlen($category_path) > 750)) {
            throw new \InvalidArgumentException('invalid length for $category_path when calling ProductIdentifiers., must be smaller than or equal to 750.');
        }
        if ((mb_strlen($category_path) < 0)) {
            throw new \InvalidArgumentException('invalid length for $category_path when calling ProductIdentifiers., must be bigger than or equal to 0.');
        }

        $this->container['category_path'] = $category_path;

        return $this;
    }

    /**
     * Gets global_trade_item_number
     *
     * @return string|null
     */
    public function getGlobalTradeItemNumber()
    {
        return $this->container['global_trade_item_number'];
    }

    /**
     * Sets global_trade_item_number
     *
     * @param string|null $global_trade_item_number The product's Global Trade Item Number (GTIN). Common types of GTIN are EAN, ISBN or UPC. Exclude dashes and spaces, where possible
     *
     * @return self
     */
    public function setGlobalTradeItemNumber($global_trade_item_number)
    {
        if (is_null($global_trade_item_number)) {
            throw new \InvalidArgumentException('non-nullable global_trade_item_number cannot be null');
        }
        if ((mb_strlen($global_trade_item_number) > 50)) {
            throw new \InvalidArgumentException('invalid length for $global_trade_item_number when calling ProductIdentifiers., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($global_trade_item_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $global_trade_item_number when calling ProductIdentifiers., must be bigger than or equal to 0.');
        }

        $this->container['global_trade_item_number'] = $global_trade_item_number;

        return $this;
    }

    /**
     * Gets manufacturer_part_number
     *
     * @return string|null
     */
    public function getManufacturerPartNumber()
    {
        return $this->container['manufacturer_part_number'];
    }

    /**
     * Sets manufacturer_part_number
     *
     * @param string|null $manufacturer_part_number The product's Manufacturer Part Number (MPN), which - together with the brand - uniquely identifies a product. Only submit MPNs assigned by a manufacturer and use the most specific MPN possible
     *
     * @return self
     */
    public function setManufacturerPartNumber($manufacturer_part_number)
    {
        if (is_null($manufacturer_part_number)) {
            throw new \InvalidArgumentException('non-nullable manufacturer_part_number cannot be null');
        }
        if ((mb_strlen($manufacturer_part_number) > 70)) {
            throw new \InvalidArgumentException('invalid length for $manufacturer_part_number when calling ProductIdentifiers., must be smaller than or equal to 70.');
        }
        if ((mb_strlen($manufacturer_part_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $manufacturer_part_number when calling ProductIdentifiers., must be bigger than or equal to 0.');
        }

        $this->container['manufacturer_part_number'] = $manufacturer_part_number;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color Color to be shown to the end customer (max 64 characters).
     *
     * @return self
     */
    public function setColor($color)
    {
        if (is_null($color)) {
            throw new \InvalidArgumentException('non-nullable color cannot be null');
        }
        if ((mb_strlen($color) > 64)) {
            throw new \InvalidArgumentException('invalid length for $color when calling ProductIdentifiers., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($color) < 0)) {
            throw new \InvalidArgumentException('invalid length for $color when calling ProductIdentifiers., must be bigger than or equal to 0.');
        }

        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string|null $size Size to be shown to the end customer (max 64 characters).
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }
        if ((mb_strlen($size) > 64)) {
            throw new \InvalidArgumentException('invalid length for $size when calling ProductIdentifiers., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($size) < 0)) {
            throw new \InvalidArgumentException('invalid length for $size when calling ProductIdentifiers., must be bigger than or equal to 0.');
        }

        $this->container['size'] = $size;

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


