<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/device.proto

namespace Google\Ads\GoogleAds\V1\Enums\DeviceEnum;

use UnexpectedValueException;

/**
 * Enumerates Google Ads devices available for targeting.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.DeviceEnum.Device</code>
 */
class Device
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
     * Mobile devices with full browsers.
     *
     * Generated from protobuf enum <code>MOBILE = 2;</code>
     */
    const MOBILE = 2;
    /**
     * Tablets with full browsers.
     *
     * Generated from protobuf enum <code>TABLET = 3;</code>
     */
    const TABLET = 3;
    /**
     * Computers.
     *
     * Generated from protobuf enum <code>DESKTOP = 4;</code>
     */
    const DESKTOP = 4;
    /**
     * Smart TVs and game consoles.
     *
     * Generated from protobuf enum <code>CONNECTED_TV = 6;</code>
     */
    const CONNECTED_TV = 6;
    /**
     * Other device types.
     *
     * Generated from protobuf enum <code>OTHER = 5;</code>
     */
    const OTHER = 5;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::MOBILE => 'MOBILE',
        self::TABLET => 'TABLET',
        self::DESKTOP => 'DESKTOP',
        self::CONNECTED_TV => 'CONNECTED_TV',
        self::OTHER => 'OTHER',
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
class_alias(Device::class, \Google\Ads\GoogleAds\V1\Enums\DeviceEnum_Device::class);

