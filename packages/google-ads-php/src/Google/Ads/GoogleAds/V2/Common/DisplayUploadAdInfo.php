<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A generic type of display ad. The exact ad format is controlled by the
 * display_upload_product_type field, which determines what kinds of data
 * need to be included with the ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.DisplayUploadAdInfo</code>
 */
final class DisplayUploadAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The product type of this ad. See comments on the enum for details.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.DisplayUploadProductTypeEnum.DisplayUploadProductType display_upload_product_type = 1;</code>
     */
    private $display_upload_product_type = 0;
    protected $media_asset;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $display_upload_product_type
     *           The product type of this ad. See comments on the enum for details.
     *     @type \Google\Ads\GoogleAds\V2\Common\AdMediaBundleAsset $media_bundle
     *           A media bundle asset to be used in the ad. For information about the
     *           media bundle for HTML5_UPLOAD_AD see
     *           https://support.google.com/google-ads/answer/1722096
     *           Media bundles that are part of dynamic product types use a special format
     *           that needs to be created through the Google Web Designer. See
     *           https://support.google.com/webdesigner/answer/7543898 for more
     *           information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * The product type of this ad. See comments on the enum for details.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.DisplayUploadProductTypeEnum.DisplayUploadProductType display_upload_product_type = 1;</code>
     * @return int
     */
    public function getDisplayUploadProductType()
    {
        return $this->display_upload_product_type;
    }

    /**
     * The product type of this ad. See comments on the enum for details.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.DisplayUploadProductTypeEnum.DisplayUploadProductType display_upload_product_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDisplayUploadProductType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\DisplayUploadProductTypeEnum_DisplayUploadProductType::class);
        $this->display_upload_product_type = $var;

        return $this;
    }

    /**
     * A media bundle asset to be used in the ad. For information about the
     * media bundle for HTML5_UPLOAD_AD see
     * https://support.google.com/google-ads/answer/1722096
     * Media bundles that are part of dynamic product types use a special format
     * that needs to be created through the Google Web Designer. See
     * https://support.google.com/webdesigner/answer/7543898 for more
     * information.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.AdMediaBundleAsset media_bundle = 2;</code>
     * @return \Google\Ads\GoogleAds\V2\Common\AdMediaBundleAsset
     */
    public function getMediaBundle()
    {
        return $this->readOneof(2);
    }

    /**
     * A media bundle asset to be used in the ad. For information about the
     * media bundle for HTML5_UPLOAD_AD see
     * https://support.google.com/google-ads/answer/1722096
     * Media bundles that are part of dynamic product types use a special format
     * that needs to be created through the Google Web Designer. See
     * https://support.google.com/webdesigner/answer/7543898 for more
     * information.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.AdMediaBundleAsset media_bundle = 2;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\AdMediaBundleAsset $var
     * @return $this
     */
    public function setMediaBundle($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Common\AdMediaBundleAsset::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMediaAsset()
    {
        return $this->whichOneof("media_asset");
    }

}

