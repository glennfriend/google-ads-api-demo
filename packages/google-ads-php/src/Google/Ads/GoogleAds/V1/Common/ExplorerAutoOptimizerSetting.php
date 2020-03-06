<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/explorer_auto_optimizer_setting.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for the
 * <a href="https://support.google.com/google-ads/answer/190596">
 * Display Campaign Optimizer</a>, initially termed "Explorer".
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.ExplorerAutoOptimizerSetting</code>
 */
class ExplorerAutoOptimizerSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * Indicates whether the optimizer is turned on.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue opt_in = 1;</code>
     */
    private $opt_in = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\BoolValue $opt_in
     *           Indicates whether the optimizer is turned on.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\ExplorerAutoOptimizerSetting::initOnce();
        parent::__construct($data);
    }

    /**
     * Indicates whether the optimizer is turned on.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue opt_in = 1;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getOptIn()
    {
        return $this->opt_in;
    }

    /**
     * Returns the unboxed value from <code>getOptIn()</code>

     * Indicates whether the optimizer is turned on.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue opt_in = 1;</code>
     * @return bool|null
     */
    public function getOptInValue()
    {
        $wrapper = $this->getOptIn();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Indicates whether the optimizer is turned on.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue opt_in = 1;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setOptIn($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->opt_in = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Indicates whether the optimizer is turned on.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue opt_in = 1;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setOptInValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\BoolValue(['value' => $var]);
        return $this->setOptIn($wrappedVar);
    }

}

