<?php
/**
 * Session
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
 * Session Class Doc Comment
 *
 * @category Class
 * @package  Klarna\Payments
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Session implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'session';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'acquiring_channel' => 'string',
        'attachment' => '\Klarna\Payments\Model\Attachment',
        'authorization_token' => 'string',
        'billing_address' => '\Klarna\Payments\Model\Address',
        'client_token' => 'string',
        'custom_payment_method_ids' => 'string[]',
        'customer' => '\Klarna\Payments\Model\Customer',
        'design' => 'string',
        'expires_at' => '\DateTime',
        'locale' => 'string',
        'merchant_data' => 'string',
        'merchant_reference1' => 'string',
        'merchant_reference2' => 'string',
        'merchant_urls' => '\Klarna\Payments\Model\MerchantUrls',
        'options' => '\Klarna\Payments\Model\Options',
        'order_amount' => 'int',
        'order_lines' => '\Klarna\Payments\Model\OrderLine[]',
        'order_tax_amount' => 'int',
        'payment_method_categories' => '\Klarna\Payments\Model\PaymentMethodCategory[]',
        'purchase_country' => 'string',
        'purchase_currency' => 'string',
        'shipping_address' => '\Klarna\Payments\Model\Address',
        'status' => 'string',
        'intent' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'acquiring_channel' => null,
        'attachment' => null,
        'authorization_token' => null,
        'billing_address' => null,
        'client_token' => null,
        'custom_payment_method_ids' => null,
        'customer' => null,
        'design' => null,
        'expires_at' => 'date-time',
        'locale' => null,
        'merchant_data' => null,
        'merchant_reference1' => null,
        'merchant_reference2' => null,
        'merchant_urls' => null,
        'options' => null,
        'order_amount' => 'int64',
        'order_lines' => null,
        'order_tax_amount' => 'int64',
        'payment_method_categories' => null,
        'purchase_country' => null,
        'purchase_currency' => null,
        'shipping_address' => null,
        'status' => null,
        'intent' => null
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
        'acquiring_channel' => 'acquiring_channel',
        'attachment' => 'attachment',
        'authorization_token' => 'authorization_token',
        'billing_address' => 'billing_address',
        'client_token' => 'client_token',
        'custom_payment_method_ids' => 'custom_payment_method_ids',
        'customer' => 'customer',
        'design' => 'design',
        'expires_at' => 'expires_at',
        'locale' => 'locale',
        'merchant_data' => 'merchant_data',
        'merchant_reference1' => 'merchant_reference1',
        'merchant_reference2' => 'merchant_reference2',
        'merchant_urls' => 'merchant_urls',
        'options' => 'options',
        'order_amount' => 'order_amount',
        'order_lines' => 'order_lines',
        'order_tax_amount' => 'order_tax_amount',
        'payment_method_categories' => 'payment_method_categories',
        'purchase_country' => 'purchase_country',
        'purchase_currency' => 'purchase_currency',
        'shipping_address' => 'shipping_address',
        'status' => 'status',
        'intent' => 'intent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acquiring_channel' => 'setAcquiringChannel',
        'attachment' => 'setAttachment',
        'authorization_token' => 'setAuthorizationToken',
        'billing_address' => 'setBillingAddress',
        'client_token' => 'setClientToken',
        'custom_payment_method_ids' => 'setCustomPaymentMethodIds',
        'customer' => 'setCustomer',
        'design' => 'setDesign',
        'expires_at' => 'setExpiresAt',
        'locale' => 'setLocale',
        'merchant_data' => 'setMerchantData',
        'merchant_reference1' => 'setMerchantReference1',
        'merchant_reference2' => 'setMerchantReference2',
        'merchant_urls' => 'setMerchantUrls',
        'options' => 'setOptions',
        'order_amount' => 'setOrderAmount',
        'order_lines' => 'setOrderLines',
        'order_tax_amount' => 'setOrderTaxAmount',
        'payment_method_categories' => 'setPaymentMethodCategories',
        'purchase_country' => 'setPurchaseCountry',
        'purchase_currency' => 'setPurchaseCurrency',
        'shipping_address' => 'setShippingAddress',
        'status' => 'setStatus',
        'intent' => 'setIntent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acquiring_channel' => 'getAcquiringChannel',
        'attachment' => 'getAttachment',
        'authorization_token' => 'getAuthorizationToken',
        'billing_address' => 'getBillingAddress',
        'client_token' => 'getClientToken',
        'custom_payment_method_ids' => 'getCustomPaymentMethodIds',
        'customer' => 'getCustomer',
        'design' => 'getDesign',
        'expires_at' => 'getExpiresAt',
        'locale' => 'getLocale',
        'merchant_data' => 'getMerchantData',
        'merchant_reference1' => 'getMerchantReference1',
        'merchant_reference2' => 'getMerchantReference2',
        'merchant_urls' => 'getMerchantUrls',
        'options' => 'getOptions',
        'order_amount' => 'getOrderAmount',
        'order_lines' => 'getOrderLines',
        'order_tax_amount' => 'getOrderTaxAmount',
        'payment_method_categories' => 'getPaymentMethodCategories',
        'purchase_country' => 'getPurchaseCountry',
        'purchase_currency' => 'getPurchaseCurrency',
        'shipping_address' => 'getShippingAddress',
        'status' => 'getStatus',
        'intent' => 'getIntent'
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

    public const ACQUIRING_CHANNEL_ECOMMERCE = 'ECOMMERCE';
    public const ACQUIRING_CHANNEL_IN_STORE = 'IN_STORE';
    public const ACQUIRING_CHANNEL_TELESALES = 'TELESALES';
    public const STATUS_COMPLETE = 'complete';
    public const STATUS_INCOMPLETE = 'incomplete';
    public const INTENT_BUY = 'buy';
    public const INTENT_TOKENIZE = 'tokenize';
    public const INTENT_BUY_AND_TOKENIZE = 'buy_and_tokenize';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAcquiringChannelAllowableValues()
    {
        return [
            self::ACQUIRING_CHANNEL_ECOMMERCE,
            self::ACQUIRING_CHANNEL_IN_STORE,
            self::ACQUIRING_CHANNEL_TELESALES,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_COMPLETE,
            self::STATUS_INCOMPLETE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIntentAllowableValues()
    {
        return [
            self::INTENT_BUY,
            self::INTENT_TOKENIZE,
            self::INTENT_BUY_AND_TOKENIZE,
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
        $this->container['acquiring_channel'] = $data['acquiring_channel'] ?? null;
        $this->container['attachment'] = $data['attachment'] ?? null;
        $this->container['authorization_token'] = $data['authorization_token'] ?? null;
        $this->container['billing_address'] = $data['billing_address'] ?? null;
        $this->container['client_token'] = $data['client_token'] ?? null;
        $this->container['custom_payment_method_ids'] = $data['custom_payment_method_ids'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['design'] = $data['design'] ?? null;
        $this->container['expires_at'] = $data['expires_at'] ?? null;
        $this->container['locale'] = $data['locale'] ?? null;
        $this->container['merchant_data'] = $data['merchant_data'] ?? null;
        $this->container['merchant_reference1'] = $data['merchant_reference1'] ?? null;
        $this->container['merchant_reference2'] = $data['merchant_reference2'] ?? null;
        $this->container['merchant_urls'] = $data['merchant_urls'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
        $this->container['order_amount'] = $data['order_amount'] ?? null;
        $this->container['order_lines'] = $data['order_lines'] ?? null;
        $this->container['order_tax_amount'] = $data['order_tax_amount'] ?? null;
        $this->container['payment_method_categories'] = $data['payment_method_categories'] ?? null;
        $this->container['purchase_country'] = $data['purchase_country'] ?? null;
        $this->container['purchase_currency'] = $data['purchase_currency'] ?? null;
        $this->container['shipping_address'] = $data['shipping_address'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['intent'] = $data['intent'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAcquiringChannelAllowableValues();
        if (!is_null($this->container['acquiring_channel']) && !in_array($this->container['acquiring_channel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'acquiring_channel', must be one of '%s'",
                $this->container['acquiring_channel'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['client_token']) && (mb_strlen($this->container['client_token']) > 4096)) {
            $invalidProperties[] = "invalid value for 'client_token', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['client_token']) && (mb_strlen($this->container['client_token']) < 0)) {
            $invalidProperties[] = "invalid value for 'client_token', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['locale']) && !preg_match("/^[A-Za-z]{2,2}(?:-[A-Za-z]{2,2})*$/", $this->container['locale'])) {
            $invalidProperties[] = "invalid value for 'locale', must be conform to the pattern /^[A-Za-z]{2,2}(?:-[A-Za-z]{2,2})*$/.";
        }

        if (!is_null($this->container['merchant_data']) && (mb_strlen($this->container['merchant_data']) > 6000)) {
            $invalidProperties[] = "invalid value for 'merchant_data', the character length must be smaller than or equal to 6000.";
        }

        if (!is_null($this->container['merchant_data']) && (mb_strlen($this->container['merchant_data']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchant_data', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['merchant_reference1']) && (mb_strlen($this->container['merchant_reference1']) > 255)) {
            $invalidProperties[] = "invalid value for 'merchant_reference1', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['merchant_reference1']) && (mb_strlen($this->container['merchant_reference1']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchant_reference1', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['merchant_reference2']) && (mb_strlen($this->container['merchant_reference2']) > 255)) {
            $invalidProperties[] = "invalid value for 'merchant_reference2', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['merchant_reference2']) && (mb_strlen($this->container['merchant_reference2']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchant_reference2', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['order_amount']) && ($this->container['order_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'order_amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['order_lines']) && (count($this->container['order_lines']) > 1000)) {
            $invalidProperties[] = "invalid value for 'order_lines', number of items must be less than or equal to 1000.";
        }

        if (!is_null($this->container['order_lines']) && (count($this->container['order_lines']) < 1)) {
            $invalidProperties[] = "invalid value for 'order_lines', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['order_tax_amount']) && ($this->container['order_tax_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'order_tax_amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['purchase_country']) && !preg_match("/^[A-Za-z]{2,2}$/", $this->container['purchase_country'])) {
            $invalidProperties[] = "invalid value for 'purchase_country', must be conform to the pattern /^[A-Za-z]{2,2}$/.";
        }

        if (!is_null($this->container['purchase_currency']) && !preg_match("/^[A-Za-z]{3,3}$/", $this->container['purchase_currency'])) {
            $invalidProperties[] = "invalid value for 'purchase_currency', must be conform to the pattern /^[A-Za-z]{3,3}$/.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIntentAllowableValues();
        if (!is_null($this->container['intent']) && !in_array($this->container['intent'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'intent', must be one of '%s'",
                $this->container['intent'],
                implode("', '", $allowedValues)
            );
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
     * Gets acquiring_channel
     *
     * @return string|null
     */
    public function getAcquiringChannel()
    {
        return $this->container['acquiring_channel'];
    }

    /**
     * Sets acquiring_channel
     *
     * @param string|null $acquiring_channel The acquiring channel in which the session takes place. Ecommerce is default unless specified. Any other values should be defined in the agreement.
     *
     * @return self
     */
    public function setAcquiringChannel($acquiring_channel)
    {
        $allowedValues = $this->getAcquiringChannelAllowableValues();
        if (!is_null($acquiring_channel) && !in_array($acquiring_channel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'acquiring_channel', must be one of '%s'",
                    $acquiring_channel,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['acquiring_channel'] = $acquiring_channel;

        return $this;
    }

    /**
     * Gets attachment
     *
     * @return \Klarna\Payments\Model\Attachment|null
     */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
     * Sets attachment
     *
     * @param \Klarna\Payments\Model\Attachment|null $attachment attachment
     *
     * @return self
     */
    public function setAttachment($attachment)
    {
        $this->container['attachment'] = $attachment;

        return $this;
    }

    /**
     * Gets authorization_token
     *
     * @return string|null
     */
    public function getAuthorizationToken()
    {
        return $this->container['authorization_token'];
    }

    /**
     * Sets authorization_token
     *
     * @param string|null $authorization_token Authorization token.
     *
     * @return self
     */
    public function setAuthorizationToken($authorization_token)
    {
        $this->container['authorization_token'] = $authorization_token;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \Klarna\Payments\Model\Address|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Klarna\Payments\Model\Address|null $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets client_token
     *
     * @return string|null
     */
    public function getClientToken()
    {
        return $this->container['client_token'];
    }

    /**
     * Sets client_token
     *
     * @param string|null $client_token Token to be passed to the JS client
     *
     * @return self
     */
    public function setClientToken($client_token)
    {
        if (!is_null($client_token) && (mb_strlen($client_token) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $client_token when calling Session., must be smaller than or equal to 4096.');
        }
        if (!is_null($client_token) && (mb_strlen($client_token) < 0)) {
            throw new \InvalidArgumentException('invalid length for $client_token when calling Session., must be bigger than or equal to 0.');
        }

        $this->container['client_token'] = $client_token;

        return $this;
    }

    /**
     * Gets custom_payment_method_ids
     *
     * @return string[]|null
     */
    public function getCustomPaymentMethodIds()
    {
        return $this->container['custom_payment_method_ids'];
    }

    /**
     * Sets custom_payment_method_ids
     *
     * @param string[]|null $custom_payment_method_ids Promo codes - The array could be used to define which of the configured payment options within a payment category (pay_later, pay_over_time, etc.) should be shown for this purchase. Discuss with the delivery manager to know about the promo codes that will be configured for your account. The feature could also be used to provide promotional offers to specific customers (eg: 0% financing). Please be informed that the usage of this feature can have commercial implications.
     *
     * @return self
     */
    public function setCustomPaymentMethodIds($custom_payment_method_ids)
    {
        $this->container['custom_payment_method_ids'] = $custom_payment_method_ids;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Klarna\Payments\Model\Customer|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Klarna\Payments\Model\Customer|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets design
     *
     * @return string|null
     */
    public function getDesign()
    {
        return $this->container['design'];
    }

    /**
     * Sets design
     *
     * @param string|null $design Design package to use in the session. This can only by used if a custom design has been implemented for Klarna Payments and agreed upon in the agreement. It might have a financial impact. Delivery manager will provide the value for the parameter.
     *
     * @return self
     */
    public function setDesign($design)
    {
        $this->container['design'] = $design;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return \DateTime|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param \DateTime|null $expires_at Session expiration date
     *
     * @return self
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale Used to define the language and region of the customer. The locale follows the format of (RFC 1766)[https://datatracker.ietf.org/doc/rfc1766/], meaning its value consists of language-country. The following values are applicable:  AT: \"de-AT\", \"de-DE\", \"en-DE\" BE: \"be-BE\", \"nl-BE\", \"fr-BE\", \"en-BE\" CH: \"it-CH\", \"de-CH\", \"fr-CH\", \"en-CH\" DE: \"de-DE\", \"de-AT\", \"en-DE\" DK: \"da-DK\", \"en-DK\" ES: \"es-ES\", \"ca-ES\", \"en-ES\" FI: \"fi-FI\", \"sv-FI\", \"en-FI\" GB: \"en-GB\" IT: \"it-IT\", \"en-IT\" NL: \"nl-NL\", \"en-NL\" NO: \"nb-NO\", \"en-NO\" PL: \"pl-PL\", \"en-PL\" SE: \"sv-SE\", \"en-SE\" US: \"en-US\".
     *
     * @return self
     */
    public function setLocale($locale)
    {

        if (!is_null($locale) && (!preg_match("/^[A-Za-z]{2,2}(?:-[A-Za-z]{2,2})*$/", $locale))) {
            throw new \InvalidArgumentException("invalid value for $locale when calling Session., must conform to the pattern /^[A-Za-z]{2,2}(?:-[A-Za-z]{2,2})*$/.");
        }

        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets merchant_data
     *
     * @return string|null
     */
    public function getMerchantData()
    {
        return $this->container['merchant_data'];
    }

    /**
     * Sets merchant_data
     *
     * @param string|null $merchant_data Pass through field to send any information about the order to be used later for reference while retrieving the order details (max 6000 characters)
     *
     * @return self
     */
    public function setMerchantData($merchant_data)
    {
        if (!is_null($merchant_data) && (mb_strlen($merchant_data) > 6000)) {
            throw new \InvalidArgumentException('invalid length for $merchant_data when calling Session., must be smaller than or equal to 6000.');
        }
        if (!is_null($merchant_data) && (mb_strlen($merchant_data) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchant_data when calling Session., must be bigger than or equal to 0.');
        }

        $this->container['merchant_data'] = $merchant_data;

        return $this;
    }

    /**
     * Gets merchant_reference1
     *
     * @return string|null
     */
    public function getMerchantReference1()
    {
        return $this->container['merchant_reference1'];
    }

    /**
     * Sets merchant_reference1
     *
     * @param string|null $merchant_reference1 Used for storing merchant's internal order number or other reference.
     *
     * @return self
     */
    public function setMerchantReference1($merchant_reference1)
    {
        if (!is_null($merchant_reference1) && (mb_strlen($merchant_reference1) > 255)) {
            throw new \InvalidArgumentException('invalid length for $merchant_reference1 when calling Session., must be smaller than or equal to 255.');
        }
        if (!is_null($merchant_reference1) && (mb_strlen($merchant_reference1) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchant_reference1 when calling Session., must be bigger than or equal to 0.');
        }

        $this->container['merchant_reference1'] = $merchant_reference1;

        return $this;
    }

    /**
     * Gets merchant_reference2
     *
     * @return string|null
     */
    public function getMerchantReference2()
    {
        return $this->container['merchant_reference2'];
    }

    /**
     * Sets merchant_reference2
     *
     * @param string|null $merchant_reference2 Used for storing merchant's internal order number or other reference. The value is available in the settlement files. (max 255 characters).
     *
     * @return self
     */
    public function setMerchantReference2($merchant_reference2)
    {
        if (!is_null($merchant_reference2) && (mb_strlen($merchant_reference2) > 255)) {
            throw new \InvalidArgumentException('invalid length for $merchant_reference2 when calling Session., must be smaller than or equal to 255.');
        }
        if (!is_null($merchant_reference2) && (mb_strlen($merchant_reference2) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchant_reference2 when calling Session., must be bigger than or equal to 0.');
        }

        $this->container['merchant_reference2'] = $merchant_reference2;

        return $this;
    }

    /**
     * Gets merchant_urls
     *
     * @return \Klarna\Payments\Model\MerchantUrls|null
     */
    public function getMerchantUrls()
    {
        return $this->container['merchant_urls'];
    }

    /**
     * Sets merchant_urls
     *
     * @param \Klarna\Payments\Model\MerchantUrls|null $merchant_urls merchant_urls
     *
     * @return self
     */
    public function setMerchantUrls($merchant_urls)
    {
        $this->container['merchant_urls'] = $merchant_urls;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \Klarna\Payments\Model\Options|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Klarna\Payments\Model\Options|null $options options
     *
     * @return self
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets order_amount
     *
     * @return int|null
     */
    public function getOrderAmount()
    {
        return $this->container['order_amount'];
    }

    /**
     * Sets order_amount
     *
     * @param int|null $order_amount Total amount of the order including tax and any available discounts. The value should be in non-negative minor units. Eg: 25 Euros should be 2500.
     *
     * @return self
     */
    public function setOrderAmount($order_amount)
    {

        if (!is_null($order_amount) && ($order_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $order_amount when calling Session., must be bigger than or equal to 0.');
        }

        $this->container['order_amount'] = $order_amount;

        return $this;
    }

    /**
     * Gets order_lines
     *
     * @return \Klarna\Payments\Model\OrderLine[]|null
     */
    public function getOrderLines()
    {
        return $this->container['order_lines'];
    }

    /**
     * Sets order_lines
     *
     * @param \Klarna\Payments\Model\OrderLine[]|null $order_lines The array containing list of line items that are part of this order. Maximum of 1000 line items could be processed in a single order.
     *
     * @return self
     */
    public function setOrderLines($order_lines)
    {

        if (!is_null($order_lines) && (count($order_lines) > 1000)) {
            throw new \InvalidArgumentException('invalid value for $order_lines when calling Session., number of items must be less than or equal to 1000.');
        }
        if (!is_null($order_lines) && (count($order_lines) < 1)) {
            throw new \InvalidArgumentException('invalid length for $order_lines when calling Session., number of items must be greater than or equal to 1.');
        }
        $this->container['order_lines'] = $order_lines;

        return $this;
    }

    /**
     * Gets order_tax_amount
     *
     * @return int|null
     */
    public function getOrderTaxAmount()
    {
        return $this->container['order_tax_amount'];
    }

    /**
     * Sets order_tax_amount
     *
     * @param int|null $order_tax_amount Total tax amount of the order. The value should be in non-negative minor units. Eg: 25 Euros should be 2500.
     *
     * @return self
     */
    public function setOrderTaxAmount($order_tax_amount)
    {

        if (!is_null($order_tax_amount) && ($order_tax_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $order_tax_amount when calling Session., must be bigger than or equal to 0.');
        }

        $this->container['order_tax_amount'] = $order_tax_amount;

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
     * @param \Klarna\Payments\Model\PaymentMethodCategory[]|null $payment_method_categories Available payment method categories
     *
     * @return self
     */
    public function setPaymentMethodCategories($payment_method_categories)
    {


        $this->container['payment_method_categories'] = $payment_method_categories;

        return $this;
    }

    /**
     * Gets purchase_country
     *
     * @return string|null
     */
    public function getPurchaseCountry()
    {
        return $this->container['purchase_country'];
    }

    /**
     * Sets purchase_country
     *
     * @param string|null $purchase_country The purchase country of the customer. The billing country always overrides purchase country if the values are different. Formatted according to ISO 3166 alpha-2 standard, e.g. GB, SE, DE, US, etc.
     *
     * @return self
     */
    public function setPurchaseCountry($purchase_country)
    {

        if (!is_null($purchase_country) && (!preg_match("/^[A-Za-z]{2,2}$/", $purchase_country))) {
            throw new \InvalidArgumentException("invalid value for $purchase_country when calling Session., must conform to the pattern /^[A-Za-z]{2,2}$/.");
        }

        $this->container['purchase_country'] = $purchase_country;

        return $this;
    }

    /**
     * Gets purchase_currency
     *
     * @return string|null
     */
    public function getPurchaseCurrency()
    {
        return $this->container['purchase_currency'];
    }

    /**
     * Sets purchase_currency
     *
     * @param string|null $purchase_currency The purchase currency of the order. Formatted according to ISO 4217 standard, e.g. USD, EUR, SEK, GBP, etc.
     *
     * @return self
     */
    public function setPurchaseCurrency($purchase_currency)
    {

        if (!is_null($purchase_currency) && (!preg_match("/^[A-Za-z]{3,3}$/", $purchase_currency))) {
            throw new \InvalidArgumentException("invalid value for $purchase_currency when calling Session., must conform to the pattern /^[A-Za-z]{3,3}$/.");
        }

        $this->container['purchase_currency'] = $purchase_currency;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return \Klarna\Payments\Model\Address|null
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \Klarna\Payments\Model\Address|null $shipping_address shipping_address
     *
     * @return self
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The current status of the session. Possible values: 'complete', 'incomplete' where 'complete' is set when the order has been placed.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets intent
     *
     * @return string|null
     */
    public function getIntent()
    {
        return $this->container['intent'];
    }

    /**
     * Sets intent
     *
     * @param string|null $intent Intent for the session. The field is designed to let partners inform Klarna of the purpose of the customer’s session.
     *
     * @return self
     */
    public function setIntent($intent)
    {
        $allowedValues = $this->getIntentAllowableValues();
        if (!is_null($intent) && !in_array($intent, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'intent', must be one of '%s'",
                    $intent,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['intent'] = $intent;

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


