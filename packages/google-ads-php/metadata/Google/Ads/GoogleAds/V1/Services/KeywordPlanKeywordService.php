<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/keyword_plan_keyword_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Services;

class KeywordPlanKeywordService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\KeywordPlanKeyword::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa50d0a43676f6f676c652f6164732f676f6f676c656164732f76312f73" .
            "657276696365732f6b6579776f72645f706c616e5f6b6579776f72645f73" .
            "6572766963652e70726f746f1220676f6f676c652e6164732e676f6f676c" .
            "656164732e76312e73657276696365731a1c676f6f676c652f6170692f61" .
            "6e6e6f746174696f6e732e70726f746f1a20676f6f676c652f70726f746f" .
            "6275662f6669656c645f6d61736b2e70726f746f1a1e676f6f676c652f70" .
            "726f746f6275662f77726170706572732e70726f746f1a17676f6f676c65" .
            "2f7270632f7374617475732e70726f746f22350a1c4765744b6579776f72" .
            "64506c616e4b6579776f72645265717565737412150a0d7265736f757263" .
            "655f6e616d6518012001280922ba010a204d75746174654b6579776f7264" .
            "506c616e4b6579776f7264735265717565737412130a0b637573746f6d65" .
            "725f696418012001280912510a0a6f7065726174696f6e7318022003280b" .
            "323d2e676f6f676c652e6164732e676f6f676c656164732e76312e736572" .
            "76696365732e4b6579776f7264506c616e4b6579776f72644f7065726174" .
            "696f6e12170a0f7061727469616c5f6661696c7572651803200128081215" .
            "0a0d76616c69646174655f6f6e6c7918042001280822ff010a1b4b657977" .
            "6f7264506c616e4b6579776f72644f7065726174696f6e122f0a0b757064" .
            "6174655f6d61736b18042001280b321a2e676f6f676c652e70726f746f62" .
            "75662e4669656c644d61736b12470a0663726561746518012001280b3235" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e7265736f75" .
            "726365732e4b6579776f7264506c616e4b6579776f7264480012470a0675" .
            "706461746518022001280b32352e676f6f676c652e6164732e676f6f676c" .
            "656164732e76312e7265736f75726365732e4b6579776f7264506c616e4b" .
            "6579776f7264480012100a0672656d6f76651803200128094800420b0a09" .
            "6f7065726174696f6e22a9010a214d75746174654b6579776f7264506c61" .
            "6e4b6579776f726473526573706f6e736512310a157061727469616c5f66" .
            "61696c7572655f6572726f7218032001280b32122e676f6f676c652e7270" .
            "632e53746174757312510a07726573756c747318022003280b32402e676f" .
            "6f676c652e6164732e676f6f676c656164732e76312e7365727669636573" .
            "2e4d75746174654b6579776f7264506c616e4b6579776f7264526573756c" .
            "7422370a1e4d75746174654b6579776f7264506c616e4b6579776f726452" .
            "6573756c7412150a0d7265736f757263655f6e616d6518012001280932d7" .
            "030a194b6579776f7264506c616e4b6579776f72645365727669636512cd" .
            "010a154765744b6579776f7264506c616e4b6579776f7264123e2e676f6f" .
            "676c652e6164732e676f6f676c656164732e76312e73657276696365732e" .
            "4765744b6579776f7264506c616e4b6579776f7264526571756573741a35" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e7265736f75" .
            "726365732e4b6579776f7264506c616e4b6579776f7264223d82d3e49302" .
            "3712352f76312f7b7265736f757263655f6e616d653d637573746f6d6572" .
            "732f2a2f6b6579776f7264506c616e4b6579776f7264732f2a7d12e9010a" .
            "194d75746174654b6579776f7264506c616e4b6579776f72647312422e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76312e73657276696365" .
            "732e4d75746174654b6579776f7264506c616e4b6579776f726473526571" .
            "756573741a432e676f6f676c652e6164732e676f6f676c656164732e7631" .
            "2e73657276696365732e4d75746174654b6579776f7264506c616e4b6579" .
            "776f726473526573706f6e7365224382d3e493023d22382f76312f637573" .
            "746f6d6572732f7b637573746f6d65725f69643d2a7d2f6b6579776f7264" .
            "506c616e4b6579776f7264733a6d75746174653a012a4285020a24636f6d" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e7365727669" .
            "636573421e4b6579776f7264506c616e4b6579776f726453657276696365" .
            "50726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e" .
            "70726f746f2f676f6f676c65617069732f6164732f676f6f676c65616473" .
            "2f76312f73657276696365733b7365727669636573a20203474141aa0220" .
            "476f6f676c652e4164732e476f6f676c654164732e56312e536572766963" .
            "6573ca0220476f6f676c655c4164735c476f6f676c654164735c56315c53" .
            "65727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c6541" .
            "64733a3a56313a3a5365727669636573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

