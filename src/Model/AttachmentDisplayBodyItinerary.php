<?php
/**
 * AttachmentDisplayBodyItinerary
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
 * OpenAPI Generator version: 5.2.0
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
 * AttachmentDisplayBodyItinerary Class Doc Comment
 *
 * @category Class
 * @package  Klarna\Payments
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AttachmentDisplayBodyItinerary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'attachment_display_body_itinerary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'departure' => 'string',
        'departure_city' => 'string',
        'arrival' => 'string',
        'arrival_city' => 'string',
        'carrier' => 'string',
        'segment_price' => 'float',
        'departure_date' => '\DateTime',
        'ticket_delivery_method' => 'object',
        'ticket_delivery_recipient' => 'string',
        'passenger_id' => 'int[]',
        'class' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'departure' => null,
        'departure_city' => null,
        'arrival' => null,
        'arrival_city' => null,
        'carrier' => null,
        'segment_price' => null,
        'departure_date' => 'date-time',
        'ticket_delivery_method' => null,
        'ticket_delivery_recipient' => null,
        'passenger_id' => null,
        'class' => null
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
        'departure' => 'departure',
        'departure_city' => 'departure_city',
        'arrival' => 'arrival',
        'arrival_city' => 'arrival_city',
        'carrier' => 'carrier',
        'segment_price' => 'segment_price',
        'departure_date' => 'departure_date',
        'ticket_delivery_method' => 'ticket_delivery_method',
        'ticket_delivery_recipient' => 'ticket_delivery_recipient',
        'passenger_id' => 'passenger_id',
        'class' => 'class'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'departure' => 'setDeparture',
        'departure_city' => 'setDepartureCity',
        'arrival' => 'setArrival',
        'arrival_city' => 'setArrivalCity',
        'carrier' => 'setCarrier',
        'segment_price' => 'setSegmentPrice',
        'departure_date' => 'setDepartureDate',
        'ticket_delivery_method' => 'setTicketDeliveryMethod',
        'ticket_delivery_recipient' => 'setTicketDeliveryRecipient',
        'passenger_id' => 'setPassengerId',
        'class' => 'setClass'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'departure' => 'getDeparture',
        'departure_city' => 'getDepartureCity',
        'arrival' => 'getArrival',
        'arrival_city' => 'getArrivalCity',
        'carrier' => 'getCarrier',
        'segment_price' => 'getSegmentPrice',
        'departure_date' => 'getDepartureDate',
        'ticket_delivery_method' => 'getTicketDeliveryMethod',
        'ticket_delivery_recipient' => 'getTicketDeliveryRecipient',
        'passenger_id' => 'getPassengerId',
        'class' => 'getClass'
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
        $this->container['departure'] = $data['departure'] ?? null;
        $this->container['departure_city'] = $data['departure_city'] ?? null;
        $this->container['arrival'] = $data['arrival'] ?? null;
        $this->container['arrival_city'] = $data['arrival_city'] ?? null;
        $this->container['carrier'] = $data['carrier'] ?? null;
        $this->container['segment_price'] = $data['segment_price'] ?? null;
        $this->container['departure_date'] = $data['departure_date'] ?? null;
        $this->container['ticket_delivery_method'] = $data['ticket_delivery_method'] ?? null;
        $this->container['ticket_delivery_recipient'] = $data['ticket_delivery_recipient'] ?? null;
        $this->container['passenger_id'] = $data['passenger_id'] ?? null;
        $this->container['class'] = $data['class'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['departure']) && (mb_strlen($this->container['departure']) > 3)) {
            $invalidProperties[] = "invalid value for 'departure', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['departure']) && (mb_strlen($this->container['departure']) < 3)) {
            $invalidProperties[] = "invalid value for 'departure', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['arrival']) && (mb_strlen($this->container['arrival']) > 3)) {
            $invalidProperties[] = "invalid value for 'arrival', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['arrival']) && (mb_strlen($this->container['arrival']) < 3)) {
            $invalidProperties[] = "invalid value for 'arrival', the character length must be bigger than or equal to 3.";
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
     * Gets departure
     *
     * @return string|null
     */
    public function getDeparture()
    {
        return $this->container['departure'];
    }

    /**
     * Sets departure
     *
     * @param string|null $departure IATA Airport Code (three letters)
     *
     * @return self
     */
    public function setDeparture($departure)
    {
        if (!is_null($departure) && (mb_strlen($departure) > 3)) {
            throw new \InvalidArgumentException('invalid length for $departure when calling AttachmentDisplayBodyItinerary., must be smaller than or equal to 3.');
        }
        if (!is_null($departure) && (mb_strlen($departure) < 3)) {
            throw new \InvalidArgumentException('invalid length for $departure when calling AttachmentDisplayBodyItinerary., must be bigger than or equal to 3.');
        }

        $this->container['departure'] = $departure;

        return $this;
    }

    /**
     * Gets departure_city
     *
     * @return string|null
     */
    public function getDepartureCity()
    {
        return $this->container['departure_city'];
    }

    /**
     * Sets departure_city
     *
     * @param string|null $departure_city departure_city
     *
     * @return self
     */
    public function setDepartureCity($departure_city)
    {
        $this->container['departure_city'] = $departure_city;

        return $this;
    }

    /**
     * Gets arrival
     *
     * @return string|null
     */
    public function getArrival()
    {
        return $this->container['arrival'];
    }

    /**
     * Sets arrival
     *
     * @param string|null $arrival IATA Airport Code (three letters)
     *
     * @return self
     */
    public function setArrival($arrival)
    {
        if (!is_null($arrival) && (mb_strlen($arrival) > 3)) {
            throw new \InvalidArgumentException('invalid length for $arrival when calling AttachmentDisplayBodyItinerary., must be smaller than or equal to 3.');
        }
        if (!is_null($arrival) && (mb_strlen($arrival) < 3)) {
            throw new \InvalidArgumentException('invalid length for $arrival when calling AttachmentDisplayBodyItinerary., must be bigger than or equal to 3.');
        }

        $this->container['arrival'] = $arrival;

        return $this;
    }

    /**
     * Gets arrival_city
     *
     * @return string|null
     */
    public function getArrivalCity()
    {
        return $this->container['arrival_city'];
    }

    /**
     * Sets arrival_city
     *
     * @param string|null $arrival_city arrival_city
     *
     * @return self
     */
    public function setArrivalCity($arrival_city)
    {
        $this->container['arrival_city'] = $arrival_city;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string|null $carrier IATA Airline standard (two letters or digits)
     *
     * @return self
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets segment_price
     *
     * @return float|null
     */
    public function getSegmentPrice()
    {
        return $this->container['segment_price'];
    }

    /**
     * Sets segment_price
     *
     * @param float|null $segment_price Local currency
     *
     * @return self
     */
    public function setSegmentPrice($segment_price)
    {
        $this->container['segment_price'] = $segment_price;

        return $this;
    }

    /**
     * Gets departure_date
     *
     * @return \DateTime|null
     */
    public function getDepartureDate()
    {
        return $this->container['departure_date'];
    }

    /**
     * Sets departure_date
     *
     * @param \DateTime|null $departure_date ISO 8601 e.g. 2012-11-24T15:00
     *
     * @return self
     */
    public function setDepartureDate($departure_date)
    {
        $this->container['departure_date'] = $departure_date;

        return $this;
    }

    /**
     * Gets ticket_delivery_method
     *
     * @return object|null
     */
    public function getTicketDeliveryMethod()
    {
        return $this->container['ticket_delivery_method'];
    }

    /**
     * Sets ticket_delivery_method
     *
     * @param object|null $ticket_delivery_method ticket_delivery_method
     *
     * @return self
     */
    public function setTicketDeliveryMethod($ticket_delivery_method)
    {
        $this->container['ticket_delivery_method'] = $ticket_delivery_method;

        return $this;
    }

    /**
     * Gets ticket_delivery_recipient
     *
     * @return string|null
     */
    public function getTicketDeliveryRecipient()
    {
        return $this->container['ticket_delivery_recipient'];
    }

    /**
     * Sets ticket_delivery_recipient
     *
     * @param string|null $ticket_delivery_recipient The name of the recipient the ticket is delivered to. If email or phone, then use either the email address or the phone number.
     *
     * @return self
     */
    public function setTicketDeliveryRecipient($ticket_delivery_recipient)
    {
        $this->container['ticket_delivery_recipient'] = $ticket_delivery_recipient;

        return $this;
    }

    /**
     * Gets passenger_id
     *
     * @return int[]|null
     */
    public function getPassengerId()
    {
        return $this->container['passenger_id'];
    }

    /**
     * Sets passenger_id
     *
     * @param int[]|null $passenger_id passenger_id
     *
     * @return self
     */
    public function setPassengerId($passenger_id)
    {
        $this->container['passenger_id'] = $passenger_id;

        return $this;
    }

    /**
     * Gets class
     *
     * @return string|null
     */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
     * Sets class
     *
     * @param string|null $class class
     *
     * @return self
     */
    public function setClass($class)
    {
        $this->container['class'] = $class;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


