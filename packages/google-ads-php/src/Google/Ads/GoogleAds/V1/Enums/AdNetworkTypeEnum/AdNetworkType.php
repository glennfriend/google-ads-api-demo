<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/ad_network_type.proto

namespace Google\Ads\GoogleAds\V1\Enums\AdNetworkTypeEnum;

use UnexpectedValueException;

/**
 * Enumerates Google Ads network types.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.AdNetworkTypeEnum.AdNetworkType</code>
 */
class AdNetworkType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The value is unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Google search.
     *
     * Generated from protobuf enum <code>SEARCH = 2;</code>
     */
    const SEARCH = 2;
    /**
     * Search partners.
     *
     * Generated from protobuf enum <code>SEARCH_PARTNERS = 3;</code>
     */
    const SEARCH_PARTNERS = 3;
    /**
     * Display Network.
     *
     * Generated from protobuf enum <code>CONTENT = 4;</code>
     */
    const CONTENT = 4;
    /**
     * YouTube Search.
     *
     * Generated from protobuf enum <code>YOUTUBE_SEARCH = 5;</code>
     */
    const YOUTUBE_SEARCH = 5;
    /**
     * YouTube Videos
     *
     * Generated from protobuf enum <code>YOUTUBE_WATCH = 6;</code>
     */
    const YOUTUBE_WATCH = 6;
    /**
     * Cross-network.
     *
     * Generated from protobuf enum <code>MIXED = 7;</code>
     */
    const MIXED = 7;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::SEARCH => 'SEARCH',
        self::SEARCH_PARTNERS => 'SEARCH_PARTNERS',
        self::CONTENT => 'CONTENT',
        self::YOUTUBE_SEARCH => 'YOUTUBE_SEARCH',
        self::YOUTUBE_WATCH => 'YOUTUBE_WATCH',
        self::MIXED => 'MIXED',
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
class_alias(AdNetworkType::class, \Google\Ads\GoogleAds\V1\Enums\AdNetworkTypeEnum_AdNetworkType::class);

