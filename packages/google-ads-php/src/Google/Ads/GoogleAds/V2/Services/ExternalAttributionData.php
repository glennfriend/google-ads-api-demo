<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/conversion_upload_service.proto

namespace Google\Ads\GoogleAds\V2\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains additional information about externally attributed conversions.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.services.ExternalAttributionData</code>
 */
final class ExternalAttributionData extends \Google\Protobuf\Internal\Message
{
    /**
     * Represents the fraction of the conversion that is attributed to the
     * Google Ads click.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue external_attribution_credit = 1;</code>
     */
    private $external_attribution_credit = null;
    /**
     * Specifies the attribution model name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue external_attribution_model = 2;</code>
     */
    private $external_attribution_model = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\DoubleValue $external_attribution_credit
     *           Represents the fraction of the conversion that is attributed to the
     *           Google Ads click.
     *     @type \Google\Protobuf\StringValue $external_attribution_model
     *           Specifies the attribution model name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Services\ConversionUploadService::initOnce();
        parent::__construct($data);
    }

    /**
     * Represents the fraction of the conversion that is attributed to the
     * Google Ads click.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue external_attribution_credit = 1;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getExternalAttributionCredit()
    {
        return $this->external_attribution_credit;
    }

    /**
     * Returns the unboxed value from <code>getExternalAttributionCredit()</code>

     * Represents the fraction of the conversion that is attributed to the
     * Google Ads click.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue external_attribution_credit = 1;</code>
     * @return float|null
     */
    public function getExternalAttributionCreditUnwrapped()
    {
        $wrapper = $this->getExternalAttributionCredit();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Represents the fraction of the conversion that is attributed to the
     * Google Ads click.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue external_attribution_credit = 1;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setExternalAttributionCredit($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->external_attribution_credit = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * Represents the fraction of the conversion that is attributed to the
     * Google Ads click.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue external_attribution_credit = 1;</code>
     * @param float|null $var
     * @return $this
     */
    public function setExternalAttributionCreditUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\DoubleValue(['value' => $var]);
        return $this->setExternalAttributionCredit($wrappedVar);
    }

    /**
     * Specifies the attribution model name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue external_attribution_model = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getExternalAttributionModel()
    {
        return $this->external_attribution_model;
    }

    /**
     * Returns the unboxed value from <code>getExternalAttributionModel()</code>

     * Specifies the attribution model name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue external_attribution_model = 2;</code>
     * @return string|null
     */
    public function getExternalAttributionModelUnwrapped()
    {
        $wrapper = $this->getExternalAttributionModel();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Specifies the attribution model name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue external_attribution_model = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setExternalAttributionModel($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->external_attribution_model = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Specifies the attribution model name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue external_attribution_model = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setExternalAttributionModelUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setExternalAttributionModel($wrappedVar);
    }

}

