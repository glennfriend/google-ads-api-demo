<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/mobile_device_constant.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A mobile device constant.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.MobileDeviceConstant</code>
 */
final class MobileDeviceConstant extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the mobile device constant.
     * Mobile device constant resource names have the form:
     * `mobileDeviceConstants/{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The ID of the mobile device constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     */
    private $id = null;
    /**
     * The name of the mobile device.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     */
    private $name = null;
    /**
     * The manufacturer of the mobile device.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue manufacturer_name = 4;</code>
     */
    private $manufacturer_name = null;
    /**
     * The operating system of the mobile device.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue operating_system_name = 5;</code>
     */
    private $operating_system_name = null;
    /**
     * The type of mobile device.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.MobileDeviceTypeEnum.MobileDeviceType type = 6;</code>
     */
    private $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the mobile device constant.
     *           Mobile device constant resource names have the form:
     *           `mobileDeviceConstants/{criterion_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           The ID of the mobile device constant.
     *     @type \Google\Protobuf\StringValue $name
     *           The name of the mobile device.
     *     @type \Google\Protobuf\StringValue $manufacturer_name
     *           The manufacturer of the mobile device.
     *     @type \Google\Protobuf\StringValue $operating_system_name
     *           The operating system of the mobile device.
     *     @type int $type
     *           The type of mobile device.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\MobileDeviceConstant::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the mobile device constant.
     * Mobile device constant resource names have the form:
     * `mobileDeviceConstants/{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the mobile device constant.
     * Mobile device constant resource names have the form:
     * `mobileDeviceConstants/{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The ID of the mobile device constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * The ID of the mobile device constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        $wrapper = $this->getId();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The ID of the mobile device constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The ID of the mobile device constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setId($wrappedVar);
    }

    /**
     * The name of the mobile device.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the unboxed value from <code>getName()</code>

     * The name of the mobile device.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        $wrapper = $this->getName();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The name of the mobile device.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The name of the mobile device.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setName($wrappedVar);
    }

    /**
     * The manufacturer of the mobile device.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue manufacturer_name = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getManufacturerName()
    {
        return $this->manufacturer_name;
    }

    /**
     * Returns the unboxed value from <code>getManufacturerName()</code>

     * The manufacturer of the mobile device.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue manufacturer_name = 4;</code>
     * @return string|null
     */
    public function getManufacturerNameUnwrapped()
    {
        $wrapper = $this->getManufacturerName();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The manufacturer of the mobile device.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue manufacturer_name = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setManufacturerName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->manufacturer_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The manufacturer of the mobile device.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue manufacturer_name = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setManufacturerNameUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setManufacturerName($wrappedVar);
    }

    /**
     * The operating system of the mobile device.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue operating_system_name = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getOperatingSystemName()
    {
        return $this->operating_system_name;
    }

    /**
     * Returns the unboxed value from <code>getOperatingSystemName()</code>

     * The operating system of the mobile device.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue operating_system_name = 5;</code>
     * @return string|null
     */
    public function getOperatingSystemNameUnwrapped()
    {
        $wrapper = $this->getOperatingSystemName();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The operating system of the mobile device.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue operating_system_name = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setOperatingSystemName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->operating_system_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The operating system of the mobile device.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue operating_system_name = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setOperatingSystemNameUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setOperatingSystemName($wrappedVar);
    }

    /**
     * The type of mobile device.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.MobileDeviceTypeEnum.MobileDeviceType type = 6;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of mobile device.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.MobileDeviceTypeEnum.MobileDeviceType type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\MobileDeviceTypeEnum_MobileDeviceType::class);
        $this->type = $var;

        return $this;
    }

}

