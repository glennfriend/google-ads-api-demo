<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/enums/frequency_cap_event_type.proto

namespace Google\Ads\GoogleAds\V2\Enums\FrequencyCapEventTypeEnum;

use UnexpectedValueException;

/**
 * The type of event that the cap applies to (e.g. impression).
 *
 * Protobuf type <code>google.ads.googleads.v2.enums.FrequencyCapEventTypeEnum.FrequencyCapEventType</code>
 */
class FrequencyCapEventType
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
     * The cap applies on ad impressions.
     *
     * Generated from protobuf enum <code>IMPRESSION = 2;</code>
     */
    const IMPRESSION = 2;
    /**
     * The cap applies on video ad views.
     *
     * Generated from protobuf enum <code>VIDEO_VIEW = 3;</code>
     */
    const VIDEO_VIEW = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::IMPRESSION => 'IMPRESSION',
        self::VIDEO_VIEW => 'VIDEO_VIEW',
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
class_alias(FrequencyCapEventType::class, \Google\Ads\GoogleAds\V2\Enums\FrequencyCapEventTypeEnum_FrequencyCapEventType::class);

