<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Google/Ads/GoogleAds/Util/Testing/tester.proto

namespace Google\Ads\GoogleAds\Util\Testing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.ads.googleads.util.testing.TestSuite</code>
 */
class TestSuite extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .google.ads.googleads.util.testing.TestCase test_cases = 1;</code>
     */
    private $test_cases;

    public function __construct() {
        \GPBMetadata\Google\Ads\GoogleAds\Util\Testing\Tester::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .google.ads.googleads.util.testing.TestCase test_cases = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTestCases()
    {
        return $this->test_cases;
    }

    /**
     * Generated from protobuf field <code>repeated .google.ads.googleads.util.testing.TestCase test_cases = 1;</code>
     * @param \Google\Ads\GoogleAds\Util\Testing\TestCase[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTestCases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\Util\Testing\TestCase::class);
        $this->test_cases = $arr;

        return $this;
    }

}

