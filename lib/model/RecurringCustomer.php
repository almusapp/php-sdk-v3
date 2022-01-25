<?php

/**
 * PHP SDK for Unlimint API v3. All rights reserved.
 */

namespace Cardpay\model;

use \ArrayAccess;
use \Cardpay\ObjectSerializer;

class RecurringCustomer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RecurringCustomer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contract_number' => 'string',
        'email' => 'string',
        'home_phone' => 'string',
        'id' => 'string',
        'identity' => 'string',
        'ip' => 'string',
        'locale' => 'string',
        'phone' => 'string',
        'work_phone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contract_number' => null,
        'email' => null,
        'home_phone' => null,
        'id' => null,
        'identity' => null,
        'ip' => null,
        'locale' => null,
        'phone' => null,
        'work_phone' => null
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
        'contract_number' => 'contract_number',
        'email' => 'email',
        'home_phone' => 'home_phone',
        'id' => 'id',
        'identity' => 'identity',
        'ip' => 'ip',
        'locale' => 'locale',
        'phone' => 'phone',
        'work_phone' => 'work_phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contract_number' => 'setContractNumber',
        'email' => 'setEmail',
        'home_phone' => 'setHomePhone',
        'id' => 'setId',
        'identity' => 'setIdentity',
        'ip' => 'setIp',
        'locale' => 'setLocale',
        'phone' => 'setPhone',
        'work_phone' => 'setWorkPhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contract_number' => 'getContractNumber',
        'email' => 'getEmail',
        'home_phone' => 'getHomePhone',
        'id' => 'getId',
        'identity' => 'getIdentity',
        'ip' => 'getIp',
        'locale' => 'getLocale',
        'phone' => 'getPhone',
        'work_phone' => 'getWorkPhone'
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

    const LOCALE_RU = 'ru';
    const LOCALE_EN = 'en';
    const LOCALE_ZH = 'zh';
    const LOCALE_JA = 'ja';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLocaleAllowableValues()
    {
        return [
            self::LOCALE_RU,
            self::LOCALE_EN,
            self::LOCALE_ZH,
            self::LOCALE_JA,
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
        $this->container['contract_number'] = isset($data['contract_number']) ? $data['contract_number'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['home_phone'] = isset($data['home_phone']) ? $data['home_phone'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['identity'] = isset($data['identity']) ? $data['identity'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['work_phone'] = isset($data['work_phone']) ? $data['work_phone'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ((mb_strlen($this->container['email']) > 256)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 256.";
        }

        if ((mb_strlen($this->container['email']) < 1)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['home_phone']) && (mb_strlen($this->container['home_phone']) > 18)) {
            $invalidProperties[] = "invalid value for 'home_phone', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['home_phone']) && (mb_strlen($this->container['home_phone']) < 8)) {
            $invalidProperties[] = "invalid value for 'home_phone', the character length must be bigger than or equal to 8.";
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) > 256)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 256.";
        }

        if ((mb_strlen($this->container['id']) < 0)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['identity']) && (mb_strlen($this->container['identity']) > 256)) {
            $invalidProperties[] = "invalid value for 'identity', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['identity']) && (mb_strlen($this->container['identity']) < 0)) {
            $invalidProperties[] = "invalid value for 'identity', the character length must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getLocaleAllowableValues();
        if (!is_null($this->container['locale']) && !in_array($this->container['locale'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'locale', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 18)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) < 8)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 8.";
        }

        if (!is_null($this->container['work_phone']) && (mb_strlen($this->container['work_phone']) > 18)) {
            $invalidProperties[] = "invalid value for 'work_phone', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['work_phone']) && (mb_strlen($this->container['work_phone']) < 8)) {
            $invalidProperties[] = "invalid value for 'work_phone', the character length must be bigger than or equal to 8.";
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
     * Gets contract_number
     *
     * @return string
     */
    public function getContractNumber()
    {
        return $this->container['contract_number'];
    }

    /**
     * Sets contract_number
     *
     * @param string $contract_number Contract number between customer and merchant. Required for Mexican merchants for scheduled payments.
     *
     * @return $this
     */
    public function setContractNumber($contract_number)
    {
        $this->container['contract_number'] = $contract_number;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Customer's e-mail address. Mandatory by default, can be defined as optional by CardPay manager.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if ((mb_strlen($email) > 256)) {
            throw new \InvalidArgumentException('invalid length for $email when calling RecurringCustomer., must be smaller than or equal to 256.');
        }
        if ((mb_strlen($email) < 1)) {
            throw new \InvalidArgumentException('invalid length for $email when calling RecurringCustomer., must be bigger than or equal to 1.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets home_phone
     *
     * @return string
     */
    public function getHomePhone()
    {
        return $this->container['home_phone'];
    }

    /**
     * Sets home_phone
     *
     * @param string $home_phone The work phone number provided by the Cardholder. Required (if available), unless market or regional mandate restricts sending this information. Characters Format: string (10-18 symbols) country code + Subscriber number. Refer to ITU-E.164 for additional information on format and length.
     *
     * @return $this
     */
    public function setHomePhone($home_phone)
    {
        if (!is_null($home_phone) && (mb_strlen($home_phone) > 18)) {
            throw new \InvalidArgumentException('invalid length for $home_phone when calling RecurringCustomer., must be smaller than or equal to 18.');
        }
        if (!is_null($home_phone) && (mb_strlen($home_phone) < 8)) {
            throw new \InvalidArgumentException('invalid length for $home_phone when calling RecurringCustomer., must be bigger than or equal to 8.');
        }

        $this->container['home_phone'] = $home_phone;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Customer's ID in Merchant's system
     *
     * @return $this
     */
    public function setId($id)
    {
        if ((mb_strlen($id) > 256)) {
            throw new \InvalidArgumentException('invalid length for $id when calling RecurringCustomer., must be smaller than or equal to 256.');
        }
        if ((mb_strlen($id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $id when calling RecurringCustomer., must be bigger than or equal to 0.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets identity
     *
     * @return string
     */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
     * Sets identity
     *
     * @param string $identity Customer's identity in Merchant's system required for Brazil Installments
     *
     * @return $this
     */
    public function setIdentity($identity)
    {
        if (!is_null($identity) && (mb_strlen($identity) > 256)) {
            throw new \InvalidArgumentException('invalid length for $identity when calling RecurringCustomer., must be smaller than or equal to 256.');
        }
        if (!is_null($identity) && (mb_strlen($identity) < 0)) {
            throw new \InvalidArgumentException('invalid length for $identity when calling RecurringCustomer., must be bigger than or equal to 0.');
        }

        $this->container['identity'] = $identity;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string $ip Customer IPv4
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale Preferred locale for the payment page ([ISO 639-1](https://en.wikipedia.org/wiki/ISO_639-1) language code). The default locale will be applied if the selected locale is not supported. Supported locales are: `ru`, `en`, `zh`, `ja`
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $allowedValues = $this->getLocaleAllowableValues();
        if (!is_null($locale) && !in_array($locale, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'locale', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Customer phone number. Optional by default, can be defined as mandatory by CardPay manager.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        if (!is_null($phone) && (mb_strlen($phone) > 18)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling RecurringCustomer., must be smaller than or equal to 18.');
        }
        if (!is_null($phone) && (mb_strlen($phone) < 8)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling RecurringCustomer., must be bigger than or equal to 8.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets work_phone
     *
     * @return string
     */
    public function getWorkPhone()
    {
        return $this->container['work_phone'];
    }

    /**
     * Sets work_phone
     *
     * @param string $work_phone The home phone number provided by the Cardholder. Required (if available) unless market or regional mandate restricts sending this information. Characters Format: string (10-18 symbols) country code + Subscriber number. Refer to ITU-E.164 for additional information on format and length.
     *
     * @return $this
     */
    public function setWorkPhone($work_phone)
    {
        if (!is_null($work_phone) && (mb_strlen($work_phone) > 18)) {
            throw new \InvalidArgumentException('invalid length for $work_phone when calling RecurringCustomer., must be smaller than or equal to 18.');
        }
        if (!is_null($work_phone) && (mb_strlen($work_phone) < 8)) {
            throw new \InvalidArgumentException('invalid length for $work_phone when calling RecurringCustomer., must be bigger than or equal to 8.');
        }

        $this->container['work_phone'] = $work_phone;

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
     * @return mixed
     */
    #[\ReturnTypeWillChange]
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

