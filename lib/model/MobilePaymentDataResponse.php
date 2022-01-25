<?php

/**
 * PHP SDK for Unlimint API v3. All rights reserved.
 */

namespace Cardpay\model;

use \ArrayAccess;
use \Cardpay\ObjectSerializer;

class MobilePaymentDataResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MobilePaymentDataResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'float',
        'arn' => 'string',
        'auth_code' => 'string',
        'created' => 'string',
        'currency' => 'string',
        'decline_code' => 'string',
        'decline_reason' => 'string',
        'id' => 'string',
        'invalid_data' => 'string[]',
        'is_3d' => 'bool',
        'note' => 'string',
        'rrn' => 'string',
        'status' => 'string',
        'trans_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
        'arn' => null,
        'auth_code' => null,
        'created' => null,
        'currency' => null,
        'decline_code' => null,
        'decline_reason' => null,
        'id' => null,
        'invalid_data' => null,
        'is_3d' => null,
        'note' => null,
        'rrn' => null,
        'status' => null,
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
        'arn' => 'arn',
        'auth_code' => 'authCode',
        'created' => 'created',
        'currency' => 'currency',
        'decline_code' => 'declineCode',
        'decline_reason' => 'declineReason',
        'id' => 'id',
        'invalid_data' => 'invalidData',
        'is_3d' => 'is_3d',
        'note' => 'note',
        'rrn' => 'rrn',
        'status' => 'status',
        'trans_type' => 'trans_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'arn' => 'setArn',
        'auth_code' => 'setAuthCode',
        'created' => 'setCreated',
        'currency' => 'setCurrency',
        'decline_code' => 'setDeclineCode',
        'decline_reason' => 'setDeclineReason',
        'id' => 'setId',
        'invalid_data' => 'setInvalidData',
        'is_3d' => 'setIs3d',
        'note' => 'setNote',
        'rrn' => 'setRrn',
        'status' => 'setStatus',
        'trans_type' => 'setTransType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'arn' => 'getArn',
        'auth_code' => 'getAuthCode',
        'created' => 'getCreated',
        'currency' => 'getCurrency',
        'decline_code' => 'getDeclineCode',
        'decline_reason' => 'getDeclineReason',
        'id' => 'getId',
        'invalid_data' => 'getInvalidData',
        'is_3d' => 'getIs3d',
        'note' => 'getNote',
        'rrn' => 'getRrn',
        'status' => 'getStatus',
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
        $this->container['arn'] = isset($data['arn']) ? $data['arn'] : null;
        $this->container['auth_code'] = isset($data['auth_code']) ? $data['auth_code'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['decline_code'] = isset($data['decline_code']) ? $data['decline_code'] : null;
        $this->container['decline_reason'] = isset($data['decline_reason']) ? $data['decline_reason'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['invalid_data'] = isset($data['invalid_data']) ? $data['invalid_data'] : null;
        $this->container['is_3d'] = isset($data['is_3d']) ? $data['is_3d'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['rrn'] = isset($data['rrn']) ? $data['rrn'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * @param float $amount Payment amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets arn
     *
     * @return string
     */
    public function getArn()
    {
        return $this->container['arn'];
    }

    /**
     * Sets arn
     *
     * @param string $arn ARN (Acquirer Reference Number), supplied by the acquiring financial institution, return only after receiving ARN from bank acquirer *(for BANKCARD payment method only)*
     *
     * @return $this
     */
    public function setArn($arn)
    {
        $this->container['arn'] = $arn;

        return $this;
    }

    /**
     * Gets auth_code
     *
     * @return string
     */
    public function getAuthCode()
    {
        return $this->container['auth_code'];
    }

    /**
     * Sets auth_code
     *
     * @param string $auth_code Authorization code, provided by bank *(for BANKCARD payment method only)*
     *
     * @return $this
     */
    public function setAuthCode($auth_code)
    {
        $this->container['auth_code'] = $auth_code;

        return $this;
    }

    /**
     * Gets created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string $created Time when this payment started in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format (yyyy-MM-dd'T'HH:mm:ss'Z')
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

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
     * @param string $currency Payment currency code ([ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) code)
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets decline_code
     *
     * @return string
     */
    public function getDeclineCode()
    {
        return $this->container['decline_code'];
    }

    /**
     * Sets decline_code
     *
     * @param string $decline_code Decline code (only in decline case)
     *
     * @return $this
     */
    public function setDeclineCode($decline_code)
    {
        $this->container['decline_code'] = $decline_code;

        return $this;
    }

    /**
     * Gets decline_reason
     *
     * @return string
     */
    public function getDeclineReason()
    {
        return $this->container['decline_reason'];
    }

    /**
     * Sets decline_reason
     *
     * @param string $decline_reason Bank's message about transaction decline reason (only in decline case)
     *
     * @return $this
     */
    public function setDeclineReason($decline_reason)
    {
        $this->container['decline_reason'] = $decline_reason;

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
     * @param string $id CardPay's payment id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets invalid_data
     *
     * @return string[]
     */
    public function getInvalidData()
    {
        return $this->container['invalid_data'];
    }

    /**
     * Sets invalid_data
     *
     * @param string[] $invalid_data Invalid card or billing data
     *
     * @return $this
     */
    public function setInvalidData($invalid_data)
    {
        $this->container['invalid_data'] = $invalid_data;

        return $this;
    }

    /**
     * Gets is_3d
     *
     * @return bool
     */
    public function getIs3d()
    {
        return $this->container['is_3d'];
    }

    /**
     * Sets is_3d
     *
     * @param bool $is_3d Was 3-D Secure authentication made or not *(for BANKCARD payment method only)*
     *
     * @return $this
     */
    public function setIs3d($is_3d)
    {
        $this->container['is_3d'] = $is_3d;

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
     * @param string $note Payment note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets rrn
     *
     * @return string
     */
    public function getRrn()
    {
        return $this->container['rrn'];
    }

    /**
     * Sets rrn
     *
     * @param string $rrn RRN (Retrieval Reference Number), supplied by the acquiring financial institution *(for BANKCARD payment method only)*
     *
     * @return $this
     */
    public function setRrn($rrn)
    {
        $this->container['rrn'] = $rrn;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Current payment status, *(mandatory for WEBMONEY and BITCOIN payment method only)*
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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

