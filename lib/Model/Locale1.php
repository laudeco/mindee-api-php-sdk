<?php
/**
 * Locale1
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Financial Document
 *
 * Financial Document endpoints
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use ArrayAccess;
use OpenAPI\Client\ObjectSerializer;

/**
 * Locale1 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Locale1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Locale_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'confidence' => 'float',
        'currency' => 'string',
        'language' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'confidence' => 'float',
        'currency' => null,
        'language' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'confidence' => false,
        'currency' => false,
        'language' => false
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
        'confidence' => 'confidence',
        'currency' => 'currency',
        'language' => 'language'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'confidence' => 'setConfidence',
        'currency' => 'setCurrency',
        'language' => 'setLanguage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'confidence' => 'getConfidence',
        'currency' => 'getCurrency',
        'language' => 'getLanguage'
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

    public const CURRENCY_AED = 'AED';
    public const CURRENCY_ARS = 'ARS';
    public const CURRENCY_AUD = 'AUD';
    public const CURRENCY_BRL = 'BRL';
    public const CURRENCY_CAD = 'CAD';
    public const CURRENCY_CHF = 'CHF';
    public const CURRENCY_CLP = 'CLP';
    public const CURRENCY_CNY = 'CNY';
    public const CURRENCY_COP = 'COP';
    public const CURRENCY_CZK = 'CZK';
    public const CURRENCY_DKK = 'DKK';
    public const CURRENCY_DZD = 'DZD';
    public const CURRENCY_EUR = 'EUR';
    public const CURRENCY_GBP = 'GBP';
    public const CURRENCY_HKD = 'HKD';
    public const CURRENCY_HUF = 'HUF';
    public const CURRENCY_IDR = 'IDR';
    public const CURRENCY_ILS = 'ILS';
    public const CURRENCY_INR = 'INR';
    public const CURRENCY_JPY = 'JPY';
    public const CURRENCY_KRW = 'KRW';
    public const CURRENCY_MAD = 'MAD';
    public const CURRENCY_MXN = 'MXN';
    public const CURRENCY_MYR = 'MYR';
    public const CURRENCY_NOK = 'NOK';
    public const CURRENCY_OMR = 'OMR';
    public const CURRENCY_PHP = 'PHP';
    public const CURRENCY_PLN = 'PLN';
    public const CURRENCY_QAR = 'QAR';
    public const CURRENCY_RON = 'RON';
    public const CURRENCY_RUB = 'RUB';
    public const CURRENCY_SAR = 'SAR';
    public const CURRENCY_SEK = 'SEK';
    public const CURRENCY_SGD = 'SGD';
    public const CURRENCY_THB = 'THB';
    public const CURRENCY_TND = 'TND';
    public const CURRENCY__TRY = 'TRY';
    public const CURRENCY_TWD = 'TWD';
    public const CURRENCY_USD = 'USD';
    public const CURRENCY_VND = 'VND';
    public const CURRENCY_XAF = 'XAF';
    public const CURRENCY_XOF = 'XOF';
    public const CURRENCY_XPF = 'XPF';
    public const CURRENCY_ZAR = 'ZAR';
    public const CURRENCY_NULL = 'null';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrencyAllowableValues()
    {
        return [
            self::CURRENCY_AED,
            self::CURRENCY_ARS,
            self::CURRENCY_AUD,
            self::CURRENCY_BRL,
            self::CURRENCY_CAD,
            self::CURRENCY_CHF,
            self::CURRENCY_CLP,
            self::CURRENCY_CNY,
            self::CURRENCY_COP,
            self::CURRENCY_CZK,
            self::CURRENCY_DKK,
            self::CURRENCY_DZD,
            self::CURRENCY_EUR,
            self::CURRENCY_GBP,
            self::CURRENCY_HKD,
            self::CURRENCY_HUF,
            self::CURRENCY_IDR,
            self::CURRENCY_ILS,
            self::CURRENCY_INR,
            self::CURRENCY_JPY,
            self::CURRENCY_KRW,
            self::CURRENCY_MAD,
            self::CURRENCY_MXN,
            self::CURRENCY_MYR,
            self::CURRENCY_NOK,
            self::CURRENCY_OMR,
            self::CURRENCY_PHP,
            self::CURRENCY_PLN,
            self::CURRENCY_QAR,
            self::CURRENCY_RON,
            self::CURRENCY_RUB,
            self::CURRENCY_SAR,
            self::CURRENCY_SEK,
            self::CURRENCY_SGD,
            self::CURRENCY_THB,
            self::CURRENCY_TND,
            self::CURRENCY__TRY,
            self::CURRENCY_TWD,
            self::CURRENCY_USD,
            self::CURRENCY_VND,
            self::CURRENCY_XAF,
            self::CURRENCY_XOF,
            self::CURRENCY_XPF,
            self::CURRENCY_ZAR,
            self::CURRENCY_NULL,
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
        $this->setIfExists('confidence', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
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

        if (!is_null($this->container['confidence']) && ($this->container['confidence'] > 1)) {
            $invalidProperties[] = "invalid value for 'confidence', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['confidence']) && ($this->container['confidence'] < 0)) {
            $invalidProperties[] = "invalid value for 'confidence', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($this->container['currency']) && !in_array($this->container['currency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'currency', must be one of '%s'",
                $this->container['currency'],
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
     * Gets confidence
     *
     * @return float|null
     */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
     * Sets confidence
     *
     * @param float|null $confidence Confidence score
     *
     * @return self
     */
    public function setConfidence($confidence)
    {
        if (is_null($confidence)) {
            throw new \InvalidArgumentException('non-nullable confidence cannot be null');
        }

        if (($confidence > 1)) {
            throw new \InvalidArgumentException('invalid value for $confidence when calling Locale1., must be smaller than or equal to 1.');
        }
        if (($confidence < 0)) {
            throw new \InvalidArgumentException('invalid value for $confidence when calling Locale1., must be bigger than or equal to 0.');
        }

        $this->container['confidence'] = $confidence;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency ISO 4217 code among 44 predefined currencies.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!in_array($currency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'currency', must be one of '%s'",
                    $currency,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language ISO 639-1 code, works best with ca, de, en, es, fr, it, nl and pt.
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

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
