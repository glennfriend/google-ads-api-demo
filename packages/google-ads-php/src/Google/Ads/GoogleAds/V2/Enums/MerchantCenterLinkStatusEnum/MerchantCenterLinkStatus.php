<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/enums/merchant_center_link_status.proto

namespace Google\Ads\GoogleAds\V2\Enums\MerchantCenterLinkStatusEnum;

use UnexpectedValueException;

/**
 * Describes the possible statuses for a link between a Google Ads customer
 * and a Google Merchant Center account.
 *
 * Protobuf type <code>google.ads.googleads.v2.enums.MerchantCenterLinkStatusEnum.MerchantCenterLinkStatus</code>
 */
class MerchantCenterLinkStatus
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The link is enabled.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    const ENABLED = 2;
    /**
     * The link has no effect. It was proposed by the Merchant Center Account
     * owner and hasn't been confirmed by the customer.
     *
     * Generated from protobuf enum <code>PENDING = 3;</code>
     */
    const PENDING = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ENABLED => 'ENABLED',
        self::PENDING => 'PENDING',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MerchantCenterLinkStatus::class, \Google\Ads\GoogleAds\V2\Enums\MerchantCenterLinkStatusEnum_MerchantCenterLinkStatus::class);

