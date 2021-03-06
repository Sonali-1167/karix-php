<?php
/**
 * Account
 *
 * PHP version 5
 *
 * @category Class
 * @package  Karix
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * karix api
 *
 * Karix API lets you interact with the Karix platform using an omnichannel messaging API. It also allows you to query your account, set up webhooks and buy phone numbers.
 *
 * OpenAPI spec version: 2.0
 * Contact: support@karix.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Karix\Model;

use \ArrayAccess;
use \Karix\ObjectSerializer;

/**
 * Account Class Doc Comment
 *
 * @category Class
 * @package  Karix
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Account implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'status' => 'string',
        'uid' => 'string',
        'token' => 'string',
        'is_parent' => 'bool',
        'created_time' => '\DateTime',
        'updated_time' => '\DateTime',
        'account_type' => 'string',
        'credit_balance' => 'BigDecimal',
        'auto_recharge' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'status' => null,
        'uid' => null,
        'token' => null,
        'is_parent' => null,
        'created_time' => 'date-time',
        'updated_time' => 'date-time',
        'account_type' => null,
        'credit_balance' => 'number',
        'auto_recharge' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     *
     * @codeCoverageIgnore
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     *
     * @codeCoverageIgnore
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
     *
     * @codeCoverageIgnore
     */
    protected static $attributeMap = [
        'name' => 'name',
        'status' => 'status',
        'uid' => 'uid',
        'token' => 'token',
        'is_parent' => 'is_parent',
        'created_time' => 'created_time',
        'updated_time' => 'updated_time',
        'account_type' => 'account_type',
        'credit_balance' => 'credit_balance',
        'auto_recharge' => 'auto_recharge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'status' => 'setStatus',
        'uid' => 'setUid',
        'token' => 'setToken',
        'is_parent' => 'setIsParent',
        'created_time' => 'setCreatedTime',
        'updated_time' => 'setUpdatedTime',
        'account_type' => 'setAccountType',
        'credit_balance' => 'setCreditBalance',
        'auto_recharge' => 'setAutoRecharge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'status' => 'getStatus',
        'uid' => 'getUid',
        'token' => 'getToken',
        'is_parent' => 'getIsParent',
        'created_time' => 'getCreatedTime',
        'updated_time' => 'getUpdatedTime',
        'account_type' => 'getAccountType',
        'credit_balance' => 'getCreditBalance',
        'auto_recharge' => 'getAutoRecharge'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     *
     * @codeCoverageIgnore
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     *
     * @codeCoverageIgnore
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     *
     * @codeCoverageIgnore
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     *
     * @codeCoverageIgnore
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const STATUS_ENABLED = 'enabled';
    const STATUS_SUSPENDED = 'suspended';
    const STATUS_DISABLED = 'disabled';
    const ACCOUNT_TYPE_PREPAID = 'prepaid';
    const ACCOUNT_TYPE_POSTPAID = 'postpaid';
    const ACCOUNT_TYPE_TRIAL = 'trial';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLED,
            self::STATUS_SUSPENDED,
            self::STATUS_DISABLED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountTypeAllowableValues()
    {
        return [
            self::ACCOUNT_TYPE_PREPAID,
            self::ACCOUNT_TYPE_POSTPAID,
            self::ACCOUNT_TYPE_TRIAL,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['is_parent'] = isset($data['is_parent']) ? $data['is_parent'] : null;
        $this->container['created_time'] = isset($data['created_time']) ? $data['created_time'] : null;
        $this->container['updated_time'] = isset($data['updated_time']) ? $data['updated_time'] : null;
        $this->container['account_type'] = isset($data['account_type']) ? $data['account_type'] : null;
        $this->container['credit_balance'] = isset($data['credit_balance']) ? $data['credit_balance'] : null;
        $this->container['auto_recharge'] = isset($data['auto_recharge']) ? $data['auto_recharge'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 200)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 200.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($this->container['account_type']) && !in_array($this->container['account_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'account_type', must be one of '%s'",
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the account. Must be unique within the parent account.
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 200)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Account., must be smaller than or equal to 200.');
        }

        $this->container['name'] = $name;

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
     * @param string $status Status of your account. Possible values are:   - enabled: Account is ready to be used   - suspended: Account has been temporarily suspended   - disabled: Account has been permanently disabled and             cannot be revived. All resources allocated             to the subaccount like phonenumbers are also             deleted.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string $uid Alphanumeric user identification. Used as username for Basic Authentication
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token Token password for this account. Used as password in Basic Authentication
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets is_parent
     *
     * @return bool
     */
    public function getIsParent()
    {
        return $this->container['is_parent'];
    }

    /**
     * Sets is_parent
     *
     * @param bool $is_parent There is generally only one parent account in list. Rest are child subaccounts. Possible values:   - `true`: If the account is a parent account   - `false`: If the account is a subaccount of the parent account
     *
     * @return $this
     */
    public function setIsParent($is_parent)
    {
        $this->container['is_parent'] = $is_parent;

        return $this;
    }

    /**
     * Gets created_time
     *
     * @return \DateTime
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param \DateTime $created_time Date when this account was created
     *
     * @return $this
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets updated_time
     *
     * @return \DateTime
     */
    public function getUpdatedTime()
    {
        return $this->container['updated_time'];
    }

    /**
     * Sets updated_time
     *
     * @param \DateTime $updated_time Date when this account was last updated
     *
     * @return $this
     */
    public function setUpdatedTime($updated_time)
    {
        $this->container['updated_time'] = $updated_time;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string $account_type Signifies whether the account is prepaid, postpaid or trial
     *
     * @return $this
     */
    public function setAccountType($account_type)
    {
        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($account_type) && !in_array($account_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'account_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets credit_balance
     *
     * @return BigDecimal
     */
    public function getCreditBalance()
    {
        return $this->container['credit_balance'];
    }

    /**
     * Sets credit_balance
     *
     * @param BigDecimal $credit_balance Account's credit balance in US dollars.   - For postpaid accounts this value will be `null`.   - For subaccounts this value will reflect balance of parent account
     *
     * @return $this
     */
    public function setCreditBalance($credit_balance)
    {
        $this->container['credit_balance'] = $credit_balance;

        return $this;
    }

    /**
     * Gets auto_recharge
     *
     * @return bool
     */
    public function getAutoRecharge()
    {
        return $this->container['auto_recharge'];
    }

    /**
     * Sets auto_recharge
     *
     * @param bool $auto_recharge Whether auto-recharge has been enabled.
     *
     * @return $this
     */
    public function setAutoRecharge($auto_recharge)
    {
        $this->container['auto_recharge'] = $auto_recharge;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     *
     * @codeCoverageIgnore
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
     * @return mixed
     *
     * @codeCoverageIgnore
     */
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
     *
     * @codeCoverageIgnore
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
     *
     * @codeCoverageIgnore
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     *
     * @codeCoverageIgnore
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


