<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/shared_set_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V2\Services;

class SharedSetService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\SharedSet::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a860c0a39676f6f676c652f6164732f676f6f676c656164732f76322f73" .
            "657276696365732f7368617265645f7365745f736572766963652e70726f" .
            "746f1220676f6f676c652e6164732e676f6f676c656164732e76322e7365" .
            "7276696365731a1c676f6f676c652f6170692f616e6e6f746174696f6e73" .
            "2e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f" .
            "6d61736b2e70726f746f1a17676f6f676c652f7270632f7374617475732e" .
            "70726f746f1a17676f6f676c652f6170692f636c69656e742e70726f746f" .
            "222c0a134765745368617265645365745265717565737412150a0d726573" .
            "6f757263655f6e616d6518012001280922a8010a174d7574617465536861" .
            "726564536574735265717565737412130a0b637573746f6d65725f696418" .
            "012001280912480a0a6f7065726174696f6e7318022003280b32342e676f" .
            "6f676c652e6164732e676f6f676c656164732e76322e7365727669636573" .
            "2e5368617265645365744f7065726174696f6e12170a0f7061727469616c" .
            "5f6661696c75726518032001280812150a0d76616c69646174655f6f6e6c" .
            "7918042001280822e4010a125368617265645365744f7065726174696f6e" .
            "122f0a0b7570646174655f6d61736b18042001280b321a2e676f6f676c65" .
            "2e70726f746f6275662e4669656c644d61736b123e0a0663726561746518" .
            "012001280b322c2e676f6f676c652e6164732e676f6f676c656164732e76" .
            "322e7265736f75726365732e5368617265645365744800123e0a06757064" .
            "61746518022001280b322c2e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76322e7265736f75726365732e536861726564536574480012100a" .
            "0672656d6f76651803200128094800420b0a096f7065726174696f6e2297" .
            "010a184d757461746553686172656453657473526573706f6e736512310a" .
            "157061727469616c5f6661696c7572655f6572726f7218032001280b3212" .
            "2e676f6f676c652e7270632e53746174757312480a07726573756c747318" .
            "022003280b32372e676f6f676c652e6164732e676f6f676c656164732e76" .
            "322e73657276696365732e4d757461746553686172656453657452657375" .
            "6c74222e0a154d7574617465536861726564536574526573756c7412150a" .
            "0d7265736f757263655f6e616d6518012001280932a3030a105368617265" .
            "645365745365727669636512a9010a0c4765745368617265645365741235" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76322e7365727669" .
            "6365732e476574536861726564536574526571756573741a2c2e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76322e7265736f75726365732e" .
            "536861726564536574223482d3e493022e122c2f76322f7b7265736f7572" .
            "63655f6e616d653d637573746f6d6572732f2a2f73686172656453657473" .
            "2f2a7d12c5010a104d75746174655368617265645365747312392e676f6f" .
            "676c652e6164732e676f6f676c656164732e76322e73657276696365732e" .
            "4d757461746553686172656453657473526571756573741a3a2e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76322e73657276696365732e4d" .
            "757461746553686172656453657473526573706f6e7365223a82d3e49302" .
            "34222f2f76322f637573746f6d6572732f7b637573746f6d65725f69643d" .
            "2a7d2f736861726564536574733a6d75746174653a012a1a1bca4118676f" .
            "6f676c656164732e676f6f676c65617069732e636f6d42fc010a24636f6d" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76322e7365727669" .
            "63657342155368617265645365745365727669636550726f746f50015a48" .
            "676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f" .
            "676c65617069732f6164732f676f6f676c656164732f76322f7365727669" .
            "6365733b7365727669636573a20203474141aa0220476f6f676c652e4164" .
            "732e476f6f676c654164732e56322e5365727669636573ca0220476f6f67" .
            "6c655c4164735c476f6f676c654164735c56325c5365727669636573ea02" .
            "24476f6f676c653a3a4164733a3a476f6f676c654164733a3a56323a3a53" .
            "65727669636573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

