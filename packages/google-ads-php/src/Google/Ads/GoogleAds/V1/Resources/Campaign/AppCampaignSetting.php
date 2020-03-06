<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/campaign.proto

namespace Google\Ads\GoogleAds\V1\Resources\Campaign;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Campaign level settings for App Campaigns.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.Campaign.AppCampaignSetting</code>
 */
class AppCampaignSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * Represents the goal which the bidding strategy of this app campaign
     * should optimize towards.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.AppCampaignBiddingStrategyGoalTypeEnum.AppCampaignBiddingStrategyGoalType bidding_strategy_goal_type = 1;</code>
     */
    private $bidding_strategy_goal_type = 0;
    /**
     * A string that uniquely identifies a mobile application.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2;</code>
     */
    private $app_id = null;
    /**
     * The application store that distributes this specific app.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.AppCampaignAppStoreEnum.AppCampaignAppStore app_store = 3;</code>
     */
    private $app_store = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $bidding_strategy_goal_type
     *           Represents the goal which the bidding strategy of this app campaign
     *           should optimize towards.
     *     @type \Google\Protobuf\StringValue $app_id
     *           A string that uniquely identifies a mobile application.
     *     @type int $app_store
     *           The application store that distributes this specific app.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\Campaign::initOnce();
        parent::__construct($data);
    }

    /**
     * Represents the goal which the bidding strategy of this app campaign
     * should optimize towards.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.AppCampaignBiddingStrategyGoalTypeEnum.AppCampaignBiddingStrategyGoalType bidding_strategy_goal_type = 1;</code>
     * @return int
     */
    public function getBiddingStrategyGoalType()
    {
        return $this->bidding_strategy_goal_type;
    }

    /**
     * Represents the goal which the bidding strategy of this app campaign
     * should optimize towards.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.AppCampaignBiddingStrategyGoalTypeEnum.AppCampaignBiddingStrategyGoalType bidding_strategy_goal_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setBiddingStrategyGoalType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\AppCampaignBiddingStrategyGoalTypeEnum_AppCampaignBiddingStrategyGoalType::class);
        $this->bidding_strategy_goal_type = $var;

        return $this;
    }

    /**
     * A string that uniquely identifies a mobile application.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Returns the unboxed value from <code>getAppId()</code>

     * A string that uniquely identifies a mobile application.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2;</code>
     * @return string|null
     */
    public function getAppIdValue()
    {
        $wrapper = $this->getAppId();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * A string that uniquely identifies a mobile application.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->app_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * A string that uniquely identifies a mobile application.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAppIdValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setAppId($wrappedVar);
    }

    /**
     * The application store that distributes this specific app.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.AppCampaignAppStoreEnum.AppCampaignAppStore app_store = 3;</code>
     * @return int
     */
    public function getAppStore()
    {
        return $this->app_store;
    }

    /**
     * The application store that distributes this specific app.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.AppCampaignAppStoreEnum.AppCampaignAppStore app_store = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAppStore($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\AppCampaignAppStoreEnum_AppCampaignAppStore::class);
        $this->app_store = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppCampaignSetting::class, \Google\Ads\GoogleAds\V1\Resources\Campaign_AppCampaignSetting::class);

