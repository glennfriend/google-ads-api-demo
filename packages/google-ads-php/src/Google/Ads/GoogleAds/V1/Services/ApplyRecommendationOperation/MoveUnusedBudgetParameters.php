<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/recommendation_service.proto

namespace Google\Ads\GoogleAds\V1\Services\ApplyRecommendationOperation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters to use when applying move unused budget recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.services.ApplyRecommendationOperation.MoveUnusedBudgetParameters</code>
 */
class MoveUnusedBudgetParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * Budget amount to move from excess budget to constrained budget. This is
     * a required field.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value budget_micros_to_move = 1;</code>
     */
    private $budget_micros_to_move = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $budget_micros_to_move
     *           Budget amount to move from excess budget to constrained budget. This is
     *           a required field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Services\RecommendationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Budget amount to move from excess budget to constrained budget. This is
     * a required field.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value budget_micros_to_move = 1;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getBudgetMicrosToMove()
    {
        return $this->budget_micros_to_move;
    }

    /**
     * Returns the unboxed value from <code>getBudgetMicrosToMove()</code>

     * Budget amount to move from excess budget to constrained budget. This is
     * a required field.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value budget_micros_to_move = 1;</code>
     * @return int|string|null
     */
    public function getBudgetMicrosToMoveValue()
    {
        $wrapper = $this->getBudgetMicrosToMove();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Budget amount to move from excess budget to constrained budget. This is
     * a required field.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value budget_micros_to_move = 1;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setBudgetMicrosToMove($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->budget_micros_to_move = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Budget amount to move from excess budget to constrained budget. This is
     * a required field.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value budget_micros_to_move = 1;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setBudgetMicrosToMoveValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setBudgetMicrosToMove($wrappedVar);
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MoveUnusedBudgetParameters::class, \Google\Ads\GoogleAds\V1\Services\ApplyRecommendationOperation_MoveUnusedBudgetParameters::class);

