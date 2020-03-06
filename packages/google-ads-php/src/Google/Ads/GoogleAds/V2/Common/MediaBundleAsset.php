<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/asset_types.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A MediaBundle asset.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.MediaBundleAsset</code>
 */
final class MediaBundleAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * Media bundle (ZIP file) asset data. The format of the uploaded ZIP file
     * depends on the ad field where it will be used. For more information on the
     * format, see the documentation of the ad field where you plan on using the
     * MediaBundleAsset. This field is mutate only.
     *
     * Generated from protobuf field <code>.google.protobuf.BytesValue data = 1;</code>
     */
    private $data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\BytesValue $data
     *           Media bundle (ZIP file) asset data. The format of the uploaded ZIP file
     *           depends on the ad field where it will be used. For more information on the
     *           format, see the documentation of the ad field where you plan on using the
     *           MediaBundleAsset. This field is mutate only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Media bundle (ZIP file) asset data. The format of the uploaded ZIP file
     * depends on the ad field where it will be used. For more information on the
     * format, see the documentation of the ad field where you plan on using the
     * MediaBundleAsset. This field is mutate only.
     *
     * Generated from protobuf field <code>.google.protobuf.BytesValue data = 1;</code>
     * @return \Google\Protobuf\BytesValue
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Returns the unboxed value from <code>getData()</code>

     * Media bundle (ZIP file) asset data. The format of the uploaded ZIP file
     * depends on the ad field where it will be used. For more information on the
     * format, see the documentation of the ad field where you plan on using the
     * MediaBundleAsset. This field is mutate only.
     *
     * Generated from protobuf field <code>.google.protobuf.BytesValue data = 1;</code>
     * @return string|null
     */
    public function getDataUnwrapped()
    {
        $wrapper = $this->getData();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Media bundle (ZIP file) asset data. The format of the uploaded ZIP file
     * depends on the ad field where it will be used. For more information on the
     * format, see the documentation of the ad field where you plan on using the
     * MediaBundleAsset. This field is mutate only.
     *
     * Generated from protobuf field <code>.google.protobuf.BytesValue data = 1;</code>
     * @param \Google\Protobuf\BytesValue $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BytesValue::class);
        $this->data = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BytesValue object.

     * Media bundle (ZIP file) asset data. The format of the uploaded ZIP file
     * depends on the ad field where it will be used. For more information on the
     * format, see the documentation of the ad field where you plan on using the
     * MediaBundleAsset. This field is mutate only.
     *
     * Generated from protobuf field <code>.google.protobuf.BytesValue data = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDataUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\BytesValue(['value' => $var]);
        return $this->setData($wrappedVar);
    }

}

