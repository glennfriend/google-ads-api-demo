<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/bidding.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An automated bidding strategy which sets CPC bids to target impressions on
 * page one, or page one promoted slots on google.com.
 * This strategy is deprecated.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.PageOnePromoted</code>
 */
final class PageOnePromoted extends \Google\Protobuf\Internal\Message
{
    /**
     * The strategy goal of where impressions are desired to be shown on
     * search result pages.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.PageOnePromotedStrategyGoalEnum.PageOnePromotedStrategyGoal strategy_goal = 1;</code>
     */
    private $strategy_goal = 0;
    /**
     * Maximum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 2;</code>
     */
    private $cpc_bid_ceiling_micros = null;
    /**
     * Bid multiplier to be applied to the relevant bid estimate (depending on
     * the `strategy_goal`) in determining a keyword's new CPC bid.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue bid_modifier = 3;</code>
     */
    private $bid_modifier = null;
    /**
     * Whether the strategy should always follow bid estimate changes, or only
     * increase.
     * If false, always sets a keyword's new bid to the current bid estimate.
     * If true, only updates a keyword's bid if the current bid estimate is
     * greater than the current bid.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue only_raise_cpc_bids = 4;</code>
     */
    private $only_raise_cpc_bids = null;
    /**
     * Whether the strategy is allowed to raise bids when the throttling
     * rate of the budget it is serving out of rises above a threshold.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue raise_cpc_bid_when_budget_constrained = 5;</code>
     */
    private $raise_cpc_bid_when_budget_constrained = null;
    /**
     * Whether the strategy is allowed to raise bids on keywords with
     * lower-range quality scores.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue raise_cpc_bid_when_quality_score_is_low = 6;</code>
     */
    private $raise_cpc_bid_when_quality_score_is_low = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $strategy_goal
     *           The strategy goal of where impressions are desired to be shown on
     *           search result pages.
     *     @type \Google\Protobuf\Int64Value $cpc_bid_ceiling_micros
     *           Maximum bid limit that can be set by the bid strategy.
     *           The limit applies to all keywords managed by the strategy.
     *     @type \Google\Protobuf\DoubleValue $bid_modifier
     *           Bid multiplier to be applied to the relevant bid estimate (depending on
     *           the `strategy_goal`) in determining a keyword's new CPC bid.
     *     @type \Google\Protobuf\BoolValue $only_raise_cpc_bids
     *           Whether the strategy should always follow bid estimate changes, or only
     *           increase.
     *           If false, always sets a keyword's new bid to the current bid estimate.
     *           If true, only updates a keyword's bid if the current bid estimate is
     *           greater than the current bid.
     *     @type \Google\Protobuf\BoolValue $raise_cpc_bid_when_budget_constrained
     *           Whether the strategy is allowed to raise bids when the throttling
     *           rate of the budget it is serving out of rises above a threshold.
     *     @type \Google\Protobuf\BoolValue $raise_cpc_bid_when_quality_score_is_low
     *           Whether the strategy is allowed to raise bids on keywords with
     *           lower-range quality scores.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\Bidding::initOnce();
        parent::__construct($data);
    }

    /**
     * The strategy goal of where impressions are desired to be shown on
     * search result pages.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.PageOnePromotedStrategyGoalEnum.PageOnePromotedStrategyGoal strategy_goal = 1;</code>
     * @return int
     */
    public function getStrategyGoal()
    {
        return $this->strategy_goal;
    }

    /**
     * The strategy goal of where impressions are desired to be shown on
     * search result pages.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.PageOnePromotedStrategyGoalEnum.PageOnePromotedStrategyGoal strategy_goal = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStrategyGoal($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\PageOnePromotedStrategyGoalEnum_PageOnePromotedStrategyGoal::class);
        $this->strategy_goal = $var;

        return $this;
    }

    /**
     * Maximum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCpcBidCeilingMicros()
    {
        return $this->cpc_bid_ceiling_micros;
    }

    /**
     * Returns the unboxed value from <code>getCpcBidCeilingMicros()</code>

     * Maximum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 2;</code>
     * @return int|string|null
     */
    public function getCpcBidCeilingMicrosUnwrapped()
    {
        $wrapper = $this->getCpcBidCeilingMicros();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Maximum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCpcBidCeilingMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->cpc_bid_ceiling_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Maximum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setCpcBidCeilingMicrosUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setCpcBidCeilingMicros($wrappedVar);
    }

    /**
     * Bid multiplier to be applied to the relevant bid estimate (depending on
     * the `strategy_goal`) in determining a keyword's new CPC bid.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue bid_modifier = 3;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getBidModifier()
    {
        return $this->bid_modifier;
    }

    /**
     * Returns the unboxed value from <code>getBidModifier()</code>

     * Bid multiplier to be applied to the relevant bid estimate (depending on
     * the `strategy_goal`) in determining a keyword's new CPC bid.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue bid_modifier = 3;</code>
     * @return float|null
     */
    public function getBidModifierUnwrapped()
    {
        $wrapper = $this->getBidModifier();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Bid multiplier to be applied to the relevant bid estimate (depending on
     * the `strategy_goal`) in determining a keyword's new CPC bid.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue bid_modifier = 3;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setBidModifier($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->bid_modifier = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * Bid multiplier to be applied to the relevant bid estimate (depending on
     * the `strategy_goal`) in determining a keyword's new CPC bid.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue bid_modifier = 3;</code>
     * @param float|null $var
     * @return $this
     */
    public function setBidModifierUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\DoubleValue(['value' => $var]);
        return $this->setBidModifier($wrappedVar);
    }

    /**
     * Whether the strategy should always follow bid estimate changes, or only
     * increase.
     * If false, always sets a keyword's new bid to the current bid estimate.
     * If true, only updates a keyword's bid if the current bid estimate is
     * greater than the current bid.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue only_raise_cpc_bids = 4;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getOnlyRaiseCpcBids()
    {
        return $this->only_raise_cpc_bids;
    }

    /**
     * Returns the unboxed value from <code>getOnlyRaiseCpcBids()</code>

     * Whether the strategy should always follow bid estimate changes, or only
     * increase.
     * If false, always sets a keyword's new bid to the current bid estimate.
     * If true, only updates a keyword's bid if the current bid estimate is
     * greater than the current bid.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue only_raise_cpc_bids = 4;</code>
     * @return bool|null
     */
    public function getOnlyRaiseCpcBidsUnwrapped()
    {
        $wrapper = $this->getOnlyRaiseCpcBids();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Whether the strategy should always follow bid estimate changes, or only
     * increase.
     * If false, always sets a keyword's new bid to the current bid estimate.
     * If true, only updates a keyword's bid if the current bid estimate is
     * greater than the current bid.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue only_raise_cpc_bids = 4;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setOnlyRaiseCpcBids($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->only_raise_cpc_bids = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether the strategy should always follow bid estimate changes, or only
     * increase.
     * If false, always sets a keyword's new bid to the current bid estimate.
     * If true, only updates a keyword's bid if the current bid estimate is
     * greater than the current bid.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue only_raise_cpc_bids = 4;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setOnlyRaiseCpcBidsUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\BoolValue(['value' => $var]);
        return $this->setOnlyRaiseCpcBids($wrappedVar);
    }

    /**
     * Whether the strategy is allowed to raise bids when the throttling
     * rate of the budget it is serving out of rises above a threshold.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue raise_cpc_bid_when_budget_constrained = 5;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getRaiseCpcBidWhenBudgetConstrained()
    {
        return $this->raise_cpc_bid_when_budget_constrained;
    }

    /**
     * Returns the unboxed value from <code>getRaiseCpcBidWhenBudgetConstrained()</code>

     * Whether the strategy is allowed to raise bids when the throttling
     * rate of the budget it is serving out of rises above a threshold.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue raise_cpc_bid_when_budget_constrained = 5;</code>
     * @return bool|null
     */
    public function getRaiseCpcBidWhenBudgetConstrainedUnwrapped()
    {
        $wrapper = $this->getRaiseCpcBidWhenBudgetConstrained();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Whether the strategy is allowed to raise bids when the throttling
     * rate of the budget it is serving out of rises above a threshold.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue raise_cpc_bid_when_budget_constrained = 5;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setRaiseCpcBidWhenBudgetConstrained($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->raise_cpc_bid_when_budget_constrained = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether the strategy is allowed to raise bids when the throttling
     * rate of the budget it is serving out of rises above a threshold.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue raise_cpc_bid_when_budget_constrained = 5;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setRaiseCpcBidWhenBudgetConstrainedUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\BoolValue(['value' => $var]);
        return $this->setRaiseCpcBidWhenBudgetConstrained($wrappedVar);
    }

    /**
     * Whether the strategy is allowed to raise bids on keywords with
     * lower-range quality scores.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue raise_cpc_bid_when_quality_score_is_low = 6;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getRaiseCpcBidWhenQualityScoreIsLow()
    {
        return $this->raise_cpc_bid_when_quality_score_is_low;
    }

    /**
     * Returns the unboxed value from <code>getRaiseCpcBidWhenQualityScoreIsLow()</code>

     * Whether the strategy is allowed to raise bids on keywords with
     * lower-range quality scores.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue raise_cpc_bid_when_quality_score_is_low = 6;</code>
     * @return bool|null
     */
    public function getRaiseCpcBidWhenQualityScoreIsLowUnwrapped()
    {
        $wrapper = $this->getRaiseCpcBidWhenQualityScoreIsLow();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Whether the strategy is allowed to raise bids on keywords with
     * lower-range quality scores.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue raise_cpc_bid_when_quality_score_is_low = 6;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setRaiseCpcBidWhenQualityScoreIsLow($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->raise_cpc_bid_when_quality_score_is_low = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether the strategy is allowed to raise bids on keywords with
     * lower-range quality scores.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue raise_cpc_bid_when_quality_score_is_low = 6;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setRaiseCpcBidWhenQualityScoreIsLowUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\BoolValue(['value' => $var]);
        return $this->setRaiseCpcBidWhenQualityScoreIsLow($wrappedVar);
    }

}

