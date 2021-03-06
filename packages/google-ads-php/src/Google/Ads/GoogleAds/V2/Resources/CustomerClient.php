<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/customer_client.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A link between the given customer and a client customer. CustomerClients only
 * exist for manager customers. All direct and indirect client customers are
 * included, as well as the manager itself.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.CustomerClient</code>
 */
final class CustomerClient extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the customer client.
     * CustomerClient resource names have the form:
     * `customers/{customer_id}/customerClients/{client_customer_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The resource name of the client-customer which is linked to
     * the given customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue client_customer = 3;</code>
     */
    private $client_customer = null;
    /**
     * Specifies whether this is a
     * [hidden account](https://support.google.com/google-ads/answer/7519830).
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue hidden = 4;</code>
     */
    private $hidden = null;
    /**
     * Distance between given customer and client. For self link, the level value
     * will be 0. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value level = 5;</code>
     */
    private $level = null;
    /**
     * Common Locale Data Repository (CLDR) string representation of the
     * time zone of the client, e.g. America/Los_Angeles. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue time_zone = 6;</code>
     */
    private $time_zone = null;
    /**
     * Identifies if the client is a test account. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue test_account = 7;</code>
     */
    private $test_account = null;
    /**
     * Identifies if the client is a manager. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue manager = 8;</code>
     */
    private $manager = null;
    /**
     * Descriptive name for the client. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue descriptive_name = 9;</code>
     */
    private $descriptive_name = null;
    /**
     * Currency code (e.g. 'USD', 'EUR') for the client. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 10;</code>
     */
    private $currency_code = null;
    /**
     * The ID of the client customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 11;</code>
     */
    private $id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the customer client.
     *           CustomerClient resource names have the form:
     *           `customers/{customer_id}/customerClients/{client_customer_id}`
     *     @type \Google\Protobuf\StringValue $client_customer
     *           The resource name of the client-customer which is linked to
     *           the given customer. Read only.
     *     @type \Google\Protobuf\BoolValue $hidden
     *           Specifies whether this is a
     *           [hidden account](https://support.google.com/google-ads/answer/7519830).
     *           Read only.
     *     @type \Google\Protobuf\Int64Value $level
     *           Distance between given customer and client. For self link, the level value
     *           will be 0. Read only.
     *     @type \Google\Protobuf\StringValue $time_zone
     *           Common Locale Data Repository (CLDR) string representation of the
     *           time zone of the client, e.g. America/Los_Angeles. Read only.
     *     @type \Google\Protobuf\BoolValue $test_account
     *           Identifies if the client is a test account. Read only.
     *     @type \Google\Protobuf\BoolValue $manager
     *           Identifies if the client is a manager. Read only.
     *     @type \Google\Protobuf\StringValue $descriptive_name
     *           Descriptive name for the client. Read only.
     *     @type \Google\Protobuf\StringValue $currency_code
     *           Currency code (e.g. 'USD', 'EUR') for the client. Read only.
     *     @type \Google\Protobuf\Int64Value $id
     *           The ID of the client customer. Read only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\CustomerClient::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the customer client.
     * CustomerClient resource names have the form:
     * `customers/{customer_id}/customerClients/{client_customer_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the customer client.
     * CustomerClient resource names have the form:
     * `customers/{customer_id}/customerClients/{client_customer_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The resource name of the client-customer which is linked to
     * the given customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue client_customer = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getClientCustomer()
    {
        return $this->client_customer;
    }

    /**
     * Returns the unboxed value from <code>getClientCustomer()</code>

     * The resource name of the client-customer which is linked to
     * the given customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue client_customer = 3;</code>
     * @return string|null
     */
    public function getClientCustomerUnwrapped()
    {
        $wrapper = $this->getClientCustomer();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The resource name of the client-customer which is linked to
     * the given customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue client_customer = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setClientCustomer($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->client_customer = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The resource name of the client-customer which is linked to
     * the given customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue client_customer = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setClientCustomerUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setClientCustomer($wrappedVar);
    }

    /**
     * Specifies whether this is a
     * [hidden account](https://support.google.com/google-ads/answer/7519830).
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue hidden = 4;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Returns the unboxed value from <code>getHidden()</code>

     * Specifies whether this is a
     * [hidden account](https://support.google.com/google-ads/answer/7519830).
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue hidden = 4;</code>
     * @return bool|null
     */
    public function getHiddenUnwrapped()
    {
        $wrapper = $this->getHidden();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Specifies whether this is a
     * [hidden account](https://support.google.com/google-ads/answer/7519830).
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue hidden = 4;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setHidden($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->hidden = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Specifies whether this is a
     * [hidden account](https://support.google.com/google-ads/answer/7519830).
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue hidden = 4;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setHiddenUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\BoolValue(['value' => $var]);
        return $this->setHidden($wrappedVar);
    }

    /**
     * Distance between given customer and client. For self link, the level value
     * will be 0. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value level = 5;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Returns the unboxed value from <code>getLevel()</code>

     * Distance between given customer and client. For self link, the level value
     * will be 0. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value level = 5;</code>
     * @return int|string|null
     */
    public function getLevelUnwrapped()
    {
        $wrapper = $this->getLevel();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Distance between given customer and client. For self link, the level value
     * will be 0. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value level = 5;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->level = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Distance between given customer and client. For self link, the level value
     * will be 0. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value level = 5;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setLevelUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setLevel($wrappedVar);
    }

    /**
     * Common Locale Data Repository (CLDR) string representation of the
     * time zone of the client, e.g. America/Los_Angeles. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue time_zone = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTimeZone()
    {
        return $this->time_zone;
    }

    /**
     * Returns the unboxed value from <code>getTimeZone()</code>

     * Common Locale Data Repository (CLDR) string representation of the
     * time zone of the client, e.g. America/Los_Angeles. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue time_zone = 6;</code>
     * @return string|null
     */
    public function getTimeZoneUnwrapped()
    {
        $wrapper = $this->getTimeZone();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Common Locale Data Repository (CLDR) string representation of the
     * time zone of the client, e.g. America/Los_Angeles. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue time_zone = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->time_zone = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Common Locale Data Repository (CLDR) string representation of the
     * time zone of the client, e.g. America/Los_Angeles. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue time_zone = 6;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTimeZoneUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setTimeZone($wrappedVar);
    }

    /**
     * Identifies if the client is a test account. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue test_account = 7;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getTestAccount()
    {
        return $this->test_account;
    }

    /**
     * Returns the unboxed value from <code>getTestAccount()</code>

     * Identifies if the client is a test account. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue test_account = 7;</code>
     * @return bool|null
     */
    public function getTestAccountUnwrapped()
    {
        $wrapper = $this->getTestAccount();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Identifies if the client is a test account. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue test_account = 7;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setTestAccount($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->test_account = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Identifies if the client is a test account. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue test_account = 7;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setTestAccountUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\BoolValue(['value' => $var]);
        return $this->setTestAccount($wrappedVar);
    }

    /**
     * Identifies if the client is a manager. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue manager = 8;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Returns the unboxed value from <code>getManager()</code>

     * Identifies if the client is a manager. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue manager = 8;</code>
     * @return bool|null
     */
    public function getManagerUnwrapped()
    {
        $wrapper = $this->getManager();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Identifies if the client is a manager. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue manager = 8;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setManager($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->manager = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Identifies if the client is a manager. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue manager = 8;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setManagerUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\BoolValue(['value' => $var]);
        return $this->setManager($wrappedVar);
    }

    /**
     * Descriptive name for the client. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue descriptive_name = 9;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescriptiveName()
    {
        return $this->descriptive_name;
    }

    /**
     * Returns the unboxed value from <code>getDescriptiveName()</code>

     * Descriptive name for the client. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue descriptive_name = 9;</code>
     * @return string|null
     */
    public function getDescriptiveNameUnwrapped()
    {
        $wrapper = $this->getDescriptiveName();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Descriptive name for the client. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue descriptive_name = 9;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescriptiveName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->descriptive_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Descriptive name for the client. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue descriptive_name = 9;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDescriptiveNameUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setDescriptiveName($wrappedVar);
    }

    /**
     * Currency code (e.g. 'USD', 'EUR') for the client. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 10;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * Returns the unboxed value from <code>getCurrencyCode()</code>

     * Currency code (e.g. 'USD', 'EUR') for the client. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 10;</code>
     * @return string|null
     */
    public function getCurrencyCodeUnwrapped()
    {
        $wrapper = $this->getCurrencyCode();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Currency code (e.g. 'USD', 'EUR') for the client. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 10;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Currency code (e.g. 'USD', 'EUR') for the client. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 10;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCurrencyCodeUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setCurrencyCode($wrappedVar);
    }

    /**
     * The ID of the client customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 11;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * The ID of the client customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 11;</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        $wrapper = $this->getId();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The ID of the client customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 11;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The ID of the client customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 11;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setId($wrappedVar);
    }

}

