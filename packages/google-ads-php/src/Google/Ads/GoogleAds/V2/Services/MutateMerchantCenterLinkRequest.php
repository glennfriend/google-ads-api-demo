<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/merchant_center_link_service.proto

namespace Google\Ads\GoogleAds\V2\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [MerchantCenterLinkService.MutateMerchantCenterLink][google.ads.googleads.v2.services.MerchantCenterLinkService.MutateMerchantCenterLink].
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.services.MutateMerchantCenterLinkRequest</code>
 */
final class MutateMerchantCenterLinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the customer being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     */
    private $customer_id = '';
    /**
     * The operation to perform on the link
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.services.MerchantCenterLinkOperation operation = 2;</code>
     */
    private $operation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           The ID of the customer being modified.
     *     @type \Google\Ads\GoogleAds\V2\Services\MerchantCenterLinkOperation $operation
     *           The operation to perform on the link
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Services\MerchantCenterLinkService::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the customer being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * The ID of the customer being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * The operation to perform on the link
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.services.MerchantCenterLinkOperation operation = 2;</code>
     * @return \Google\Ads\GoogleAds\V2\Services\MerchantCenterLinkOperation
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * The operation to perform on the link
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.services.MerchantCenterLinkOperation operation = 2;</code>
     * @param \Google\Ads\GoogleAds\V2\Services\MerchantCenterLinkOperation $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Services\MerchantCenterLinkOperation::class);
        $this->operation = $var;

        return $this;
    }

}

