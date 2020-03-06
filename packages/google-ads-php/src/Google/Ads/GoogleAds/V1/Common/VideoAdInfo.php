<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A video ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.VideoAdInfo</code>
 */
class VideoAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The MediaFile resource to use for the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue media_file = 1;</code>
     */
    private $media_file = null;
    protected $format;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $media_file
     *           The MediaFile resource to use for the video.
     *     @type \Google\Ads\GoogleAds\V1\Common\VideoTrueViewInStreamAdInfo $in_stream
     *           Video TrueView in-stream ad format.
     *     @type \Google\Ads\GoogleAds\V1\Common\VideoBumperInStreamAdInfo $bumper
     *           Video bumper in-stream ad format.
     *     @type \Google\Ads\GoogleAds\V1\Common\VideoOutstreamAdInfo $out_stream
     *           Video out-stream ad format.
     *     @type \Google\Ads\GoogleAds\V1\Common\VideoNonSkippableInStreamAdInfo $non_skippable
     *           Video non-skippable in-stream ad format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * The MediaFile resource to use for the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue media_file = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getMediaFile()
    {
        return $this->media_file;
    }

    /**
     * Returns the unboxed value from <code>getMediaFile()</code>

     * The MediaFile resource to use for the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue media_file = 1;</code>
     * @return string|null
     */
    public function getMediaFileValue()
    {
        $wrapper = $this->getMediaFile();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The MediaFile resource to use for the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue media_file = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setMediaFile($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->media_file = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The MediaFile resource to use for the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue media_file = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setMediaFileValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setMediaFile($wrappedVar);
    }

    /**
     * Video TrueView in-stream ad format.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.VideoTrueViewInStreamAdInfo in_stream = 2;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\VideoTrueViewInStreamAdInfo
     */
    public function getInStream()
    {
        return $this->readOneof(2);
    }

    /**
     * Video TrueView in-stream ad format.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.VideoTrueViewInStreamAdInfo in_stream = 2;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\VideoTrueViewInStreamAdInfo $var
     * @return $this
     */
    public function setInStream($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\VideoTrueViewInStreamAdInfo::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Video bumper in-stream ad format.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.VideoBumperInStreamAdInfo bumper = 3;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\VideoBumperInStreamAdInfo
     */
    public function getBumper()
    {
        return $this->readOneof(3);
    }

    /**
     * Video bumper in-stream ad format.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.VideoBumperInStreamAdInfo bumper = 3;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\VideoBumperInStreamAdInfo $var
     * @return $this
     */
    public function setBumper($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\VideoBumperInStreamAdInfo::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Video out-stream ad format.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.VideoOutstreamAdInfo out_stream = 4;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\VideoOutstreamAdInfo
     */
    public function getOutStream()
    {
        return $this->readOneof(4);
    }

    /**
     * Video out-stream ad format.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.VideoOutstreamAdInfo out_stream = 4;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\VideoOutstreamAdInfo $var
     * @return $this
     */
    public function setOutStream($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\VideoOutstreamAdInfo::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Video non-skippable in-stream ad format.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.VideoNonSkippableInStreamAdInfo non_skippable = 5;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\VideoNonSkippableInStreamAdInfo
     */
    public function getNonSkippable()
    {
        return $this->readOneof(5);
    }

    /**
     * Video non-skippable in-stream ad format.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.VideoNonSkippableInStreamAdInfo non_skippable = 5;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\VideoNonSkippableInStreamAdInfo $var
     * @return $this
     */
    public function setNonSkippable($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\VideoNonSkippableInStreamAdInfo::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->whichOneof("format");
    }

}

