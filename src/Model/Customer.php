<?php
/**
 * Customer
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
 * Customer Class Doc Comment
 *
 * @category Class
 * @package  Klarna\Payments
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Customer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date_of_birth' => 'string',
        'gender' => 'string',
        'last_four_ssn' => 'string',
        'national_identification_number' => 'string',
        'organization_entity_type' => 'string',
        'organization_registration_id' => 'string',
        'title' => 'string',
        'type' => 'string',
        'vat_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'date_of_birth' => null,
        'gender' => null,
        'last_four_ssn' => null,
        'national_identification_number' => null,
        'organization_entity_type' => null,
        'organization_registration_id' => null,
        'title' => null,
        'type' => null,
        'vat_id' => null
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
        'date_of_birth' => 'date_of_birth',
        'gender' => 'gender',
        'last_four_ssn' => 'last_four_ssn',
        'national_identification_number' => 'national_identification_number',
        'organization_entity_type' => 'organization_entity_type',
        'organization_registration_id' => 'organization_registration_id',
        'title' => 'title',
        'type' => 'type',
        'vat_id' => 'vat_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_of_birth' => 'setDateOfBirth',
        'gender' => 'setGender',
        'last_four_ssn' => 'setLastFourSsn',
        'national_identification_number' => 'setNationalIdentificationNumber',
        'organization_entity_type' => 'setOrganizationEntityType',
        'organization_registration_id' => 'setOrganizationRegistrationId',
        'title' => 'setTitle',
        'type' => 'setType',
        'vat_id' => 'setVatId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_of_birth' => 'getDateOfBirth',
        'gender' => 'getGender',
        'last_four_ssn' => 'getLastFourSsn',
        'national_identification_number' => 'getNationalIdentificationNumber',
        'organization_entity_type' => 'getOrganizationEntityType',
        'organization_registration_id' => 'getOrganizationRegistrationId',
        'title' => 'getTitle',
        'type' => 'getType',
        'vat_id' => 'getVatId'
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

    public const ORGANIZATION_ENTITY_TYPE_LIMITED_COMPANY = 'LIMITED_COMPANY';
    public const ORGANIZATION_ENTITY_TYPE_PUBLIC_LIMITED_COMPANY = 'PUBLIC_LIMITED_COMPANY';
    public const ORGANIZATION_ENTITY_TYPE_ENTREPRENEURIAL_COMPANY = 'ENTREPRENEURIAL_COMPANY';
    public const ORGANIZATION_ENTITY_TYPE_LIMITED_PARTNERSHIP_LIMITED_COMPANY = 'LIMITED_PARTNERSHIP_LIMITED_COMPANY';
    public const ORGANIZATION_ENTITY_TYPE_LIMITED_PARTNERSHIP = 'LIMITED_PARTNERSHIP';
    public const ORGANIZATION_ENTITY_TYPE_GENERAL_PARTNERSHIP = 'GENERAL_PARTNERSHIP';
    public const ORGANIZATION_ENTITY_TYPE_REGISTERED_SOLE_TRADER = 'REGISTERED_SOLE_TRADER';
    public const ORGANIZATION_ENTITY_TYPE_SOLE_TRADER = 'SOLE_TRADER';
    public const ORGANIZATION_ENTITY_TYPE_CIVIL_LAW_PARTNERSHIP = 'CIVIL_LAW_PARTNERSHIP';
    public const ORGANIZATION_ENTITY_TYPE_PUBLIC_INSTITUTION = 'PUBLIC_INSTITUTION';
    public const ORGANIZATION_ENTITY_TYPE_OTHER = 'OTHER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrganizationEntityTypeAllowableValues()
    {
        return [
            self::ORGANIZATION_ENTITY_TYPE_LIMITED_COMPANY,
            self::ORGANIZATION_ENTITY_TYPE_PUBLIC_LIMITED_COMPANY,
            self::ORGANIZATION_ENTITY_TYPE_ENTREPRENEURIAL_COMPANY,
            self::ORGANIZATION_ENTITY_TYPE_LIMITED_PARTNERSHIP_LIMITED_COMPANY,
            self::ORGANIZATION_ENTITY_TYPE_LIMITED_PARTNERSHIP,
            self::ORGANIZATION_ENTITY_TYPE_GENERAL_PARTNERSHIP,
            self::ORGANIZATION_ENTITY_TYPE_REGISTERED_SOLE_TRADER,
            self::ORGANIZATION_ENTITY_TYPE_SOLE_TRADER,
            self::ORGANIZATION_ENTITY_TYPE_CIVIL_LAW_PARTNERSHIP,
            self::ORGANIZATION_ENTITY_TYPE_PUBLIC_INSTITUTION,
            self::ORGANIZATION_ENTITY_TYPE_OTHER,
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
        $this->container['date_of_birth'] = $data['date_of_birth'] ?? null;
        $this->container['gender'] = $data['gender'] ?? null;
        $this->container['last_four_ssn'] = $data['last_four_ssn'] ?? null;
        $this->container['national_identification_number'] = $data['national_identification_number'] ?? null;
        $this->container['organization_entity_type'] = $data['organization_entity_type'] ?? null;
        $this->container['organization_registration_id'] = $data['organization_registration_id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['vat_id'] = $data['vat_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['last_four_ssn']) && !preg_match("/^([0-9]{4}|[0-9]{9})$/", $this->container['last_four_ssn'])) {
            $invalidProperties[] = "invalid value for 'last_four_ssn', must be conform to the pattern /^([0-9]{4}|[0-9]{9})$/.";
        }

        $allowedValues = $this->getOrganizationEntityTypeAllowableValues();
        if (!is_null($this->container['organization_entity_type']) && !in_array($this->container['organization_entity_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'organization_entity_type', must be one of '%s'",
                $this->container['organization_entity_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['type']) && !preg_match("/^(person|organization)$/", $this->container['type'])) {
            $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^(person|organization)$/.";
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
     * Gets date_of_birth
     *
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param string|null $date_of_birth Customer’s date of birth. The format is ‘yyyy-mm-dd’
     *
     * @return self
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender Customer’s gender - ‘male’ or ‘female’
     *
     * @return self
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets last_four_ssn
     *
     * @return string|null
     */
    public function getLastFourSsn()
    {
        return $this->container['last_four_ssn'];
    }

    /**
     * Sets last_four_ssn
     *
     * @param string|null $last_four_ssn Last four digits of the customer's social security number. This value is available for US customers.
     *
     * @return self
     */
    public function setLastFourSsn($last_four_ssn)
    {

        if (!is_null($last_four_ssn) && (!preg_match("/^([0-9]{4}|[0-9]{9})$/", $last_four_ssn))) {
            throw new \InvalidArgumentException("invalid value for $last_four_ssn when calling Customer., must conform to the pattern /^([0-9]{4}|[0-9]{9})$/.");
        }

        $this->container['last_four_ssn'] = $last_four_ssn;

        return $this;
    }

    /**
     * Gets national_identification_number
     *
     * @return string|null
     */
    public function getNationalIdentificationNumber()
    {
        return $this->container['national_identification_number'];
    }

    /**
     * Sets national_identification_number
     *
     * @param string|null $national_identification_number The customer's national identification number. This value is available for EU customers utilizing national identification numbers.
     *
     * @return self
     */
    public function setNationalIdentificationNumber($national_identification_number)
    {
        $this->container['national_identification_number'] = $national_identification_number;

        return $this;
    }

    /**
     * Gets organization_entity_type
     *
     * @return string|null
     */
    public function getOrganizationEntityType()
    {
        return $this->container['organization_entity_type'];
    }

    /**
     * Sets organization_entity_type
     *
     * @param string|null $organization_entity_type Organization entity type. Only applicable for B2B customers.
     *
     * @return self
     */
    public function setOrganizationEntityType($organization_entity_type)
    {
        $allowedValues = $this->getOrganizationEntityTypeAllowableValues();
        if (!is_null($organization_entity_type) && !in_array($organization_entity_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'organization_entity_type', must be one of '%s'",
                    $organization_entity_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['organization_entity_type'] = $organization_entity_type;

        return $this;
    }

    /**
     * Gets organization_registration_id
     *
     * @return string|null
     */
    public function getOrganizationRegistrationId()
    {
        return $this->container['organization_registration_id'];
    }

    /**
     * Sets organization_registration_id
     *
     * @param string|null $organization_registration_id Organization registration id. Only applicable for B2B customers.
     *
     * @return self
     */
    public function setOrganizationRegistrationId($organization_registration_id)
    {
        $this->container['organization_registration_id'] = $organization_registration_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Customer’s Title. Allowed values per country: UK - \"Mr\", \"Ms\" DE - \"Herr\", \"Frau\" AT: \"Herr, \"Frau\" CH: de-CH: \"Herr, \"Frau\" it-CH: \"Sig.\", \"Sig.ra\" fr-CH: \"M\", \"Mme\"  BE: \"Dhr.\", \"Mevr.\" NL: \"Dhr.\", \"Mevr.\"
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of customer in the session. If nothing is added, a B2C session will be the default. If it is a b2b-session, you should enter organization to trigger a B2B session.
     *
     * @return self
     */
    public function setType($type)
    {

        if (!is_null($type) && (!preg_match("/^(person|organization)$/", $type))) {
            throw new \InvalidArgumentException("invalid value for $type when calling Customer., must conform to the pattern /^(person|organization)$/.");
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets vat_id
     *
     * @return string|null
     */
    public function getVatId()
    {
        return $this->container['vat_id'];
    }

    /**
     * Sets vat_id
     *
     * @param string|null $vat_id VAT ID. Only applicable for B2B customers.
     *
     * @return self
     */
    public function setVatId($vat_id)
    {
        $this->container['vat_id'] = $vat_id;

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


