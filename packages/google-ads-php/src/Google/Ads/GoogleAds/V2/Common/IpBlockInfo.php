<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/criteria.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An IpBlock criterion used for IP exclusions. We allow:
 *  - IPv4 and IPv6 addresses
 *  - individual addresses (192.168.0.1)
 *  - masks for individual addresses (192.168.0.1/32)
 *  - masks for Class C networks (192.168.0.1/24)
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.IpBlockInfo</code>
 */
final class IpBlockInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The IP address of this IP block.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ip_address = 1;</code>
     */
    private $ip_address = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $ip_address
     *           The IP address of this IP block.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The IP address of this IP block.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ip_address = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * Returns the unboxed value from <code>getIpAddress()</code>

     * The IP address of this IP block.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ip_address = 1;</code>
     * @return string|null
     */
    public function getIpAddressUnwrapped()
    {
        $wrapper = $this->getIpAddress();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The IP address of this IP block.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ip_address = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setIpAddress($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ip_address = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The IP address of this IP block.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ip_address = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setIpAddressUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setIpAddress($wrappedVar);
    }

}

