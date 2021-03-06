<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/policy.proto

namespace Google\Ads\GoogleAds\V2\Common\PolicyTopicConstraint;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Indicates that a resource's ability to serve in a particular country is
 * constrained.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.PolicyTopicConstraint.CountryConstraint</code>
 */
final class CountryConstraint extends \Google\Protobuf\Internal\Message
{
    /**
     * Geo target constant resource name of the country in which serving is
     * constrained.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_criterion = 1;</code>
     */
    private $country_criterion = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $country_criterion
     *           Geo target constant resource name of the country in which serving is
     *           constrained.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Geo target constant resource name of the country in which serving is
     * constrained.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_criterion = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCountryCriterion()
    {
        return $this->country_criterion;
    }

    /**
     * Returns the unboxed value from <code>getCountryCriterion()</code>

     * Geo target constant resource name of the country in which serving is
     * constrained.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_criterion = 1;</code>
     * @return string|null
     */
    public function getCountryCriterionUnwrapped()
    {
        $wrapper = $this->getCountryCriterion();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Geo target constant resource name of the country in which serving is
     * constrained.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_criterion = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCountryCriterion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->country_criterion = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Geo target constant resource name of the country in which serving is
     * constrained.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_criterion = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCountryCriterionUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setCountryCriterion($wrappedVar);
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CountryConstraint::class, \Google\Ads\GoogleAds\V2\Common\PolicyTopicConstraint_CountryConstraint::class);

