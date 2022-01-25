<?php

/**
 * PHP SDK for Unlimint API v3. All rights reserved.
 */

namespace Cardpay\model;

use \ArrayAccess;
use \Cardpay\ObjectSerializer;

class InstallmentData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InstallmentData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'float',
        'currency' => 'string',
        'dynamic_descriptor' => 'string',
        'generate_token' => 'bool',
        'initiator' => 'string',
        'installment_amount' => 'float',
        'installment_type' => 'string',
        'interval' => 'int',
        'note' => 'string',
        'payments' => 'int',
        'period' => 'string',
        'preauth' => 'bool',
        'retries' => 'int',
        'subscription_start' => '\DateTime',
        'trans_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
        'currency' => null,
        'dynamic_descriptor' => null,
        'generate_token' => null,
        'initiator' => null,
        'installment_amount' => null,
        'installment_type' => null,
        'interval' => 'int32',
        'note' => null,
        'payments' => 'int32',
        'period' => null,
        'preauth' => null,
        'retries' => 'int32',
        'subscription_start' => 'date-time',
        'trans_type' => null
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
        'amount' => 'amount',
        'currency' => 'currency',
        'dynamic_descriptor' => 'dynamic_descriptor',
        'generate_token' => 'generate_token',
        'initiator' => 'initiator',
        'installment_amount' => 'installment_amount',
        'installment_type' => 'installment_type',
        'interval' => 'interval',
        'note' => 'note',
        'payments' => 'payments',
        'period' => 'period',
        'preauth' => 'preauth',
        'retries' => 'retries',
        'subscription_start' => 'subscription_start',
        'trans_type' => 'trans_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'dynamic_descriptor' => 'setDynamicDescriptor',
        'generate_token' => 'setGenerateToken',
        'initiator' => 'setInitiator',
        'installment_amount' => 'setInstallmentAmount',
        'installment_type' => 'setInstallmentType',
        'interval' => 'setInterval',
        'note' => 'setNote',
        'payments' => 'setPayments',
        'period' => 'setPeriod',
        'preauth' => 'setPreauth',
        'retries' => 'setRetries',
        'subscription_start' => 'setSubscriptionStart',
        'trans_type' => 'setTransType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'dynamic_descriptor' => 'getDynamicDescriptor',
        'generate_token' => 'getGenerateToken',
        'initiator' => 'getInitiator',
        'installment_amount' => 'getInstallmentAmount',
        'installment_type' => 'getInstallmentType',
        'interval' => 'getInterval',
        'note' => 'getNote',
        'payments' => 'getPayments',
        'period' => 'getPeriod',
        'preauth' => 'getPreauth',
        'retries' => 'getRetries',
        'subscription_start' => 'getSubscriptionStart',
        'trans_type' => 'getTransType'
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

    const PERIOD_MINUTE = 'minute';
    const PERIOD_DAY = 'day';
    const PERIOD_WEEK = 'week';
    const PERIOD_MONTH = 'month';
    const PERIOD_YEAR = 'year';
    const TRANS_TYPE__01 = '01';
    const TRANS_TYPE__03 = '03';
    const TRANS_TYPE__10 = '10';
    const TRANS_TYPE__11 = '11';
    const TRANS_TYPE__28 = '28';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPeriodAllowableValues()
    {
        return [
            self::PERIOD_MINUTE,
            self::PERIOD_DAY,
            self::PERIOD_WEEK,
            self::PERIOD_MONTH,
            self::PERIOD_YEAR,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransTypeAllowableValues()
    {
        return [
            self::TRANS_TYPE__01,
            self::TRANS_TYPE__03,
            self::TRANS_TYPE__10,
            self::TRANS_TYPE__11,
            self::TRANS_TYPE__28,
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['dynamic_descriptor'] = isset($data['dynamic_descriptor']) ? $data['dynamic_descriptor'] : null;
        $this->container['generate_token'] = isset($data['generate_token']) ? $data['generate_token'] : null;
        $this->container['initiator'] = isset($data['initiator']) ? $data['initiator'] : null;
        $this->container['installment_amount'] = isset($data['installment_amount']) ? $data['installment_amount'] : null;
        $this->container['installment_type'] = isset($data['installment_type']) ? $data['installment_type'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['payments'] = isset($data['payments']) ? $data['payments'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['preauth'] = isset($data['preauth']) ? $data['preauth'] : null;
        $this->container['retries'] = isset($data['retries']) ? $data['retries'] : null;
        $this->container['subscription_start'] = isset($data['subscription_start']) ? $data['subscription_start'] : null;
        $this->container['trans_type'] = isset($data['trans_type']) ? $data['trans_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if (!is_null($this->container['dynamic_descriptor']) && (mb_strlen($this->container['dynamic_descriptor']) > 25)) {
            $invalidProperties[] = "invalid value for 'dynamic_descriptor', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['dynamic_descriptor']) && (mb_strlen($this->container['dynamic_descriptor']) < 0)) {
            $invalidProperties[] = "invalid value for 'dynamic_descriptor', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['initiator'] === null) {
            $invalidProperties[] = "'initiator' can't be null";
        }
        if (!preg_match("/mit|cit/", (string) $this->container['initiator'])) {
            $invalidProperties[] = "invalid value for 'initiator', must be conform to the pattern /mit|cit/.";
        }

        if (!is_null($this->container['installment_type']) && !preg_match("/IF|MF_HOLD|MF_HOLD_SPLIT|MF_WITHOUT_HOLD/", (string) $this->container['installment_type'])) {
            $invalidProperties[] = "invalid value for 'installment_type', must be conform to the pattern /IF|MF_HOLD|MF_HOLD_SPLIT|MF_WITHOUT_HOLD/.";
        }

        if (!is_null($this->container['interval']) && ($this->container['interval'] < 1)) {
            $invalidProperties[] = "invalid value for 'interval', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) > 100)) {
            $invalidProperties[] = "invalid value for 'note', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) < 0)) {
            $invalidProperties[] = "invalid value for 'note', the character length must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getPeriodAllowableValues();
        if (!is_null($this->container['period']) && !in_array($this->container['period'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'period', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTransTypeAllowableValues();
        if (!is_null($this->container['trans_type']) && !in_array($this->container['trans_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'trans_type', must be one of '%s'",
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
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The total transaction amount in selected currency with dot as a decimal separator, must be less than 100 millions
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) currency code
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets dynamic_descriptor
     *
     * @return string
     */
    public function getDynamicDescriptor()
    {
        return $this->container['dynamic_descriptor'];
    }

    /**
     * Sets dynamic_descriptor
     *
     * @param string $dynamic_descriptor Short description of the service or product, must be enabled by CardPay manager to be used.
     *
     * @return $this
     */
    public function setDynamicDescriptor($dynamic_descriptor)
    {
        if (!is_null($dynamic_descriptor) && (mb_strlen($dynamic_descriptor) > 25)) {
            throw new \InvalidArgumentException('invalid length for $dynamic_descriptor when calling InstallmentData., must be smaller than or equal to 25.');
        }
        if (!is_null($dynamic_descriptor) && (mb_strlen($dynamic_descriptor) < 0)) {
            throw new \InvalidArgumentException('invalid length for $dynamic_descriptor when calling InstallmentData., must be bigger than or equal to 0.');
        }

        $this->container['dynamic_descriptor'] = $dynamic_descriptor;

        return $this;
    }

    /**
     * Gets generate_token
     *
     * @return bool
     */
    public function getGenerateToken()
    {
        return $this->container['generate_token'];
    }

    /**
     * Sets generate_token
     *
     * @param bool $generate_token This attribute can be received only in first recurring request. In all requests with recurring_id card.token can't be generated. If set to 'true', Card token will be generated and returned in GET response. Will be generated only for successful transactions (not for declined).
     *
     * @return $this
     */
    public function setGenerateToken($generate_token)
    {
        $this->container['generate_token'] = $generate_token;

        return $this;
    }

    /**
     * Gets initiator
     *
     * @return string
     */
    public function getInitiator()
    {
        return $this->container['initiator'];
    }

    /**
     * Sets initiator
     *
     * @param string $initiator Use `cit` for initiator attribute (cardholder initiated transaction).
     *
     * @return $this
     */
    public function setInitiator($initiator)
    {

        if ((!preg_match("/mit|cit/", $initiator))) {
            throw new \InvalidArgumentException("invalid value for $initiator when calling InstallmentData., must conform to the pattern /mit|cit/.");
        }

        $this->container['initiator'] = $initiator;

        return $this;
    }

    /**
     * Gets installment_amount
     *
     * @return float
     */
    public function getInstallmentAmount()
    {
        return $this->container['installment_amount'];
    }

    /**
     * Sets installment_amount
     *
     * @param float $installment_amount Amount of 1 installment payment, should be less or equal to total amount of subscription, can have dot as a decimal separator. Mandatory for Payment Page Mode only.
     *
     * @return $this
     */
    public function setInstallmentAmount($installment_amount)
    {
        $this->container['installment_amount'] = $installment_amount;

        return $this;
    }

    /**
     * Gets installment_type
     *
     * @return string
     */
    public function getInstallmentType()
    {
        return $this->container['installment_type'];
    }

    /**
     * Sets installment_type
     *
     * @param string $installment_type Installment type, 4 possible values: `IF` - issuer financed `MF_HOLD' - merchant financed hold `MF_HOLD_SPLIT' - merchant financed split `MF_WITHOUT_HOLD' - merchant financed without hold
     *
     * @return $this
     */
    public function setInstallmentType($installment_type)
    {

        if (!is_null($installment_type) && (!preg_match("/IF|MF_HOLD|MF_HOLD_SPLIT|MF_WITHOUT_HOLD/", $installment_type))) {
            throw new \InvalidArgumentException("invalid value for $installment_type when calling InstallmentData., must conform to the pattern /IF|MF_HOLD|MF_HOLD_SPLIT|MF_WITHOUT_HOLD/.");
        }

        $this->container['installment_type'] = $installment_type;

        return $this;
    }

    /**
     * Gets interval
     *
     * @return int
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param int $interval Frequency interval of period, can be 1-365 depending on selected period value. Minimum value of period + interval can be 7 days / 1 week. Maximum value of period + interval plan can be 365 days / 52 weeks / 12 months / 1 year. 1-60 minutes - for **sandbox environment** and testing purpose only.
     *
     * @return $this
     */
    public function setInterval($interval)
    {

        if (!is_null($interval) && ($interval < 1)) {
            throw new \InvalidArgumentException('invalid value for $interval when calling InstallmentData., must be bigger than or equal to 1.');
        }

        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note Note about the recurring that will not be displayed to customer.
     *
     * @return $this
     */
    public function setNote($note)
    {
        if (!is_null($note) && (mb_strlen($note) > 100)) {
            throw new \InvalidArgumentException('invalid length for $note when calling InstallmentData., must be smaller than or equal to 100.');
        }
        if (!is_null($note) && (mb_strlen($note) < 0)) {
            throw new \InvalidArgumentException('invalid length for $note when calling InstallmentData., must be bigger than or equal to 0.');
        }

        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return int
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param int $payments Number of total payments to be charged per defined interval, can be 2-200. For Mexican installment subscription (installment_type = `IF`) should be 1-99.
     *
     * @return $this
     */
    public function setPayments($payments)
    {
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets period
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string $period Initial period of recurring, can be `day`, `week`, `month`, `year`
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $allowedValues = $this->getPeriodAllowableValues();
        if (!is_null($period) && !in_array($period, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'period', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets preauth
     *
     * @return bool
     */
    public function getPreauth()
    {
        return $this->container['preauth'];
    }

    /**
     * Sets preauth
     *
     * @param bool $preauth If set to `true`, the amount will not be captured but only blocked. Installment with `preauth` attribute will be voided automatically in 5 days from the time of creating the preauth transaction.
     *
     * @return $this
     */
    public function setPreauth($preauth)
    {
        $this->container['preauth'] = $preauth;

        return $this;
    }

    /**
     * Gets retries
     *
     * @return int
     */
    public function getRetries()
    {
        return $this->container['retries'];
    }

    /**
     * Sets retries
     *
     * @param int $retries Number of daily basis retry attempts in case of payment has not been captured successfully, from 1 to 15 attempts can be specified.
     *
     * @return $this
     */
    public function setRetries($retries)
    {
        $this->container['retries'] = $retries;

        return $this;
    }

    /**
     * Gets subscription_start
     *
     * @return \DateTime
     */
    public function getSubscriptionStart()
    {
        return $this->container['subscription_start'];
    }

    /**
     * Sets subscription_start
     *
     * @param \DateTime $subscription_start The date in yyyy-MM-dd format when subscription will actually become activated (grace period). Auth request will be created but Customer will be charged only when subscription start date comes. Leave it empty or specify the current date to activate subscription at once without any grace period applied.
     *
     * @return $this
     */
    public function setSubscriptionStart($subscription_start)
    {
        $this->container['subscription_start'] = $subscription_start;

        return $this;
    }

    /**
     * Gets trans_type
     *
     * @return string
     */
    public function getTransType()
    {
        return $this->container['trans_type'];
    }

    /**
     * Sets trans_type
     *
     * @param string $trans_type trans_type
     *
     * @return $this
     */
    public function setTransType($trans_type)
    {
        $allowedValues = $this->getTransTypeAllowableValues();
        if (!is_null($trans_type) && !in_array($trans_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'trans_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['trans_type'] = $trans_type;

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

