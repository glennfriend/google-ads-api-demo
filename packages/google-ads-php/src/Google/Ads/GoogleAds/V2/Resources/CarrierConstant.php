<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/carrier_constant.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A carrier criterion that can be used in campaign targeting.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.CarrierConstant</code>
 */
final class CarrierConstant extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the carrier criterion.
     * Carrier criterion resource names have the form:
     * `carrierConstants/{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The ID of the carrier criterion.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     */
    private $id = null;
    /**
     * The full name of the carrier in English.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     */
    private $name = null;
    /**
     * The country code of the country where the carrier is located, e.g., "AR",
     * "FR", etc.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 4;</code>
     */
    private $country_code = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the carrier criterion.
     *           Carrier criterion resource names have the form:
     *           `carrierConstants/{criterion_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           The ID of the carrier criterion.
     *     @type \Google\Protobuf\StringValue $name
     *           The full name of the carrier in English.
     *     @type \Google\Protobuf\StringValue $country_code
     *           The country code of the country where the carrier is located, e.g., "AR",
     *           "FR", etc.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\CarrierConstant::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the carrier criterion.
     * Carrier criterion resource names have the form:
     * `carrierConstants/{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the carrier criterion.
     * Carrier criterion resource names have the form:
     * `carrierConstants/{criterion_id}`
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
     * The ID of the carrier criterion.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * The ID of the carrier criterion.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        $wrapper = $this->getId();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The ID of the carrier criterion.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
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

     * The ID of the carrier criterion.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setId($wrappedVar);
    }

    /**
     * The full name of the carrier in English.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the unboxed value from <code>getName()</code>

     * The full name of the carrier in English.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        $wrapper = $this->getName();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The full name of the carrier in English.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The full name of the carrier in English.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setName($wrappedVar);
    }

    /**
     * The country code of the country where the carrier is located, e.g., "AR",
     * "FR", etc.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * Returns the unboxed value from <code>getCountryCode()</code>

     * The country code of the country where the carrier is located, e.g., "AR",
     * "FR", etc.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 4;</code>
     * @return string|null
     */
    public function getCountryCodeUnwrapped()
    {
        $wrapper = $this->getCountryCode();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The country code of the country where the carrier is located, e.g., "AR",
     * "FR", etc.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->country_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The country code of the country where the carrier is located, e.g., "AR",
     * "FR", etc.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCountryCodeUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setCountryCode($wrappedVar);
    }

}

