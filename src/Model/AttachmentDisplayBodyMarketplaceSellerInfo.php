<?php
/**
 * AttachmentDisplayBodyMarketplaceSellerInfo
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Klarna\Payments
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Klarna Payments API V1
 *
 * API spec
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
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
 * AttachmentDisplayBodyMarketplaceSellerInfo Class Doc Comment
 *
 * @category Class
 * @package  Klarna\Payments
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AttachmentDisplayBodyMarketplaceSellerInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'attachment_display_body_marketplace_seller_info';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'unique_account_identifier_seller' => '\Klarna\Payments\Model\AttachmentDisplayBodyUniqueAccountIdentifierSeller',
        'sub_merchant_id' => 'string',
        'product_category' => 'string',
        'product_name' => 'string',
        'account_registration_date' => '\DateTime',
        'account_last_modified' => '\Klarna\Payments\Model\AttachmentDisplayBodyAccountLastModified',
        'seller_rating' => 'float',
        'number_of_trades' => 'int',
        'volume_of_trades' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'unique_account_identifier_seller' => null,
        'sub_merchant_id' => null,
        'product_category' => null,
        'product_name' => null,
        'account_registration_date' => 'date-time',
        'account_last_modified' => null,
        'seller_rating' => null,
        'number_of_trades' => null,
        'volume_of_trades' => null
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
        'unique_account_identifier_seller' => 'unique_account_identifier_seller',
        'sub_merchant_id' => 'sub_merchant_id',
        'product_category' => 'product_category',
        'product_name' => 'product_name',
        'account_registration_date' => 'account_registration_date',
        'account_last_modified' => 'account_last_modified',
        'seller_rating' => 'seller_rating',
        'number_of_trades' => 'number_of_trades',
        'volume_of_trades' => 'volume_of_trades'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unique_account_identifier_seller' => 'setUniqueAccountIdentifierSeller',
        'sub_merchant_id' => 'setSubMerchantId',
        'product_category' => 'setProductCategory',
        'product_name' => 'setProductName',
        'account_registration_date' => 'setAccountRegistrationDate',
        'account_last_modified' => 'setAccountLastModified',
        'seller_rating' => 'setSellerRating',
        'number_of_trades' => 'setNumberOfTrades',
        'volume_of_trades' => 'setVolumeOfTrades'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unique_account_identifier_seller' => 'getUniqueAccountIdentifierSeller',
        'sub_merchant_id' => 'getSubMerchantId',
        'product_category' => 'getProductCategory',
        'product_name' => 'getProductName',
        'account_registration_date' => 'getAccountRegistrationDate',
        'account_last_modified' => 'getAccountLastModified',
        'seller_rating' => 'getSellerRating',
        'number_of_trades' => 'getNumberOfTrades',
        'volume_of_trades' => 'getVolumeOfTrades'
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
        $this->container['unique_account_identifier_seller'] = $data['unique_account_identifier_seller'] ?? null;
        $this->container['sub_merchant_id'] = $data['sub_merchant_id'] ?? null;
        $this->container['product_category'] = $data['product_category'] ?? null;
        $this->container['product_name'] = $data['product_name'] ?? null;
        $this->container['account_registration_date'] = $data['account_registration_date'] ?? null;
        $this->container['account_last_modified'] = $data['account_last_modified'] ?? null;
        $this->container['seller_rating'] = $data['seller_rating'] ?? null;
        $this->container['number_of_trades'] = $data['number_of_trades'] ?? null;
        $this->container['volume_of_trades'] = $data['volume_of_trades'] ?? null;
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
     * Gets unique_account_identifier_seller
     *
     * @return \Klarna\Payments\Model\AttachmentDisplayBodyUniqueAccountIdentifierSeller|null
     */
    public function getUniqueAccountIdentifierSeller()
    {
        return $this->container['unique_account_identifier_seller'];
    }

    /**
     * Sets unique_account_identifier_seller
     *
     * @param \Klarna\Payments\Model\AttachmentDisplayBodyUniqueAccountIdentifierSeller|null $unique_account_identifier_seller unique_account_identifier_seller
     *
     * @return self
     */
    public function setUniqueAccountIdentifierSeller($unique_account_identifier_seller)
    {
        $this->container['unique_account_identifier_seller'] = $unique_account_identifier_seller;

        return $this;
    }

    /**
     * Gets sub_merchant_id
     *
     * @return string|null
     */
    public function getSubMerchantId()
    {
        return $this->container['sub_merchant_id'];
    }

    /**
     * Sets sub_merchant_id
     *
     * @param string|null $sub_merchant_id Name or unique number of the selling / delivering merchant, e.g. \"Marketbrick Ltd.\"
     *
     * @return self
     */
    public function setSubMerchantId($sub_merchant_id)
    {
        $this->container['sub_merchant_id'] = $sub_merchant_id;

        return $this;
    }

    /**
     * Gets product_category
     *
     * @return string|null
     */
    public function getProductCategory()
    {
        return $this->container['product_category'];
    }

    /**
     * Sets product_category
     *
     * @param string|null $product_category Name of the overall category to which the specific good(s) belong to, according to the selling merchants categorization. E.g. \"Computers\"
     *
     * @return self
     */
    public function setProductCategory($product_category)
    {
        $this->container['product_category'] = $product_category;

        return $this;
    }

    /**
     * Gets product_name
     *
     * @return string|null
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     *
     * @param string|null $product_name Name of the specific good purchased, e.g. \"Acer 5400\"
     *
     * @return self
     */
    public function setProductName($product_name)
    {
        $this->container['product_name'] = $product_name;

        return $this;
    }

    /**
     * Gets account_registration_date
     *
     * @return \DateTime|null
     */
    public function getAccountRegistrationDate()
    {
        return $this->container['account_registration_date'];
    }

    /**
     * Sets account_registration_date
     *
     * @param \DateTime|null $account_registration_date ISO 8601 e.g. 2012-11-24T15:00
     *
     * @return self
     */
    public function setAccountRegistrationDate($account_registration_date)
    {
        $this->container['account_registration_date'] = $account_registration_date;

        return $this;
    }

    /**
     * Gets account_last_modified
     *
     * @return \Klarna\Payments\Model\AttachmentDisplayBodyAccountLastModified|null
     */
    public function getAccountLastModified()
    {
        return $this->container['account_last_modified'];
    }

    /**
     * Sets account_last_modified
     *
     * @param \Klarna\Payments\Model\AttachmentDisplayBodyAccountLastModified|null $account_last_modified account_last_modified
     *
     * @return self
     */
    public function setAccountLastModified($account_last_modified)
    {
        $this->container['account_last_modified'] = $account_last_modified;

        return $this;
    }

    /**
     * Gets seller_rating
     *
     * @return float|null
     */
    public function getSellerRating()
    {
        return $this->container['seller_rating'];
    }

    /**
     * Sets seller_rating
     *
     * @param float|null $seller_rating Current rating. Partner should provide upfront their rating scale, e.g. 65
     *
     * @return self
     */
    public function setSellerRating($seller_rating)
    {
        $this->container['seller_rating'] = $seller_rating;

        return $this;
    }

    /**
     * Gets number_of_trades
     *
     * @return int|null
     */
    public function getNumberOfTrades()
    {
        return $this->container['number_of_trades'];
    }

    /**
     * Sets number_of_trades
     *
     * @param int|null $number_of_trades Number of trades the sub-merchant did since 12 months back, e.g. 23
     *
     * @return self
     */
    public function setNumberOfTrades($number_of_trades)
    {
        $this->container['number_of_trades'] = $number_of_trades;

        return $this;
    }

    /**
     * Gets volume_of_trades
     *
     * @return int|null
     */
    public function getVolumeOfTrades()
    {
        return $this->container['volume_of_trades'];
    }

    /**
     * Sets volume_of_trades
     *
     * @param int|null $volume_of_trades Volumes of trades the sub-merchant did since 12 months back, e.g. 230.5
     *
     * @return self
     */
    public function setVolumeOfTrades($volume_of_trades)
    {
        $this->container['volume_of_trades'] = $volume_of_trades;

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


