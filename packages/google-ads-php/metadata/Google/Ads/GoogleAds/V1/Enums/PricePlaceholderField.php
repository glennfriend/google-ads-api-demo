<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/price_placeholder_field.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Enums;

class PricePlaceholderField
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac80c0a3b676f6f676c652f6164732f676f6f676c656164732f76312f65" .
            "6e756d732f70726963655f706c616365686f6c6465725f6669656c642e70" .
            "726f746f121d676f6f676c652e6164732e676f6f676c656164732e76312e" .
            "656e756d7322ef090a195072696365506c616365686f6c6465724669656c" .
            "64456e756d22d1090a155072696365506c616365686f6c6465724669656c" .
            "64120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e10" .
            "0112080a0454595045100212130a0f50524943455f5155414c4946494552" .
            "100312150a11545241434b494e475f54454d504c4154451004120c0a084c" .
            "414e4755414745100512140a1046494e414c5f55524c5f53554646495810" .
            "0612110a0d4954454d5f315f484541444552106412160a124954454d5f31" .
            "5f4445534352495054494f4e106512100a0c4954454d5f315f5052494345" .
            "1066120f0a0b4954454d5f315f554e4954106712150a114954454d5f315f" .
            "46494e414c5f55524c531068121c0a184954454d5f315f46494e414c5f4d" .
            "4f42494c455f55524c53106912120a0d4954454d5f325f48454144455210" .
            "c80112170a124954454d5f325f4445534352495054494f4e10c90112110a" .
            "0c4954454d5f325f505249434510ca0112100a0b4954454d5f325f554e49" .
            "5410cb0112160a114954454d5f325f46494e414c5f55524c5310cc01121d" .
            "0a184954454d5f325f46494e414c5f4d4f42494c455f55524c5310cd0112" .
            "120a0d4954454d5f335f48454144455210ac0212170a124954454d5f335f" .
            "4445534352495054494f4e10ad0212110a0c4954454d5f335f5052494345" .
            "10ae0212100a0b4954454d5f335f554e495410af0212160a114954454d5f" .
            "335f46494e414c5f55524c5310b002121d0a184954454d5f335f46494e41" .
            "4c5f4d4f42494c455f55524c5310b10212120a0d4954454d5f345f484541" .
            "44455210900312170a124954454d5f345f4445534352495054494f4e1091" .
            "0312110a0c4954454d5f345f505249434510920312100a0b4954454d5f34" .
            "5f554e495410930312160a114954454d5f345f46494e414c5f55524c5310" .
            "9403121d0a184954454d5f345f46494e414c5f4d4f42494c455f55524c53" .
            "10950312120a0d4954454d5f355f48454144455210f40312170a12495445" .
            "4d5f355f4445534352495054494f4e10f50312110a0c4954454d5f355f50" .
            "5249434510f60312100a0b4954454d5f355f554e495410f70312160a1149" .
            "54454d5f355f46494e414c5f55524c5310f803121d0a184954454d5f355f" .
            "46494e414c5f4d4f42494c455f55524c5310f90312120a0d4954454d5f36" .
            "5f48454144455210d80412170a124954454d5f365f444553435249505449" .
            "4f4e10d90412110a0c4954454d5f365f505249434510da0412100a0b4954" .
            "454d5f365f554e495410db0412160a114954454d5f365f46494e414c5f55" .
            "524c5310dc04121d0a184954454d5f365f46494e414c5f4d4f42494c455f" .
            "55524c5310dd0412120a0d4954454d5f375f48454144455210bc0512170a" .
            "124954454d5f375f4445534352495054494f4e10bd0512110a0c4954454d" .
            "5f375f505249434510be0512100a0b4954454d5f375f554e495410bf0512" .
            "160a114954454d5f375f46494e414c5f55524c5310c005121d0a18495445" .
            "4d5f375f46494e414c5f4d4f42494c455f55524c5310c10512120a0d4954" .
            "454d5f385f48454144455210a00612170a124954454d5f385f4445534352" .
            "495054494f4e10a10612110a0c4954454d5f385f505249434510a2061210" .
            "0a0b4954454d5f385f554e495410a30612160a114954454d5f385f46494e" .
            "414c5f55524c5310a406121d0a184954454d5f385f46494e414c5f4d4f42" .
            "494c455f55524c5310a50642ef010a21636f6d2e676f6f676c652e616473" .
            "2e676f6f676c656164732e76312e656e756d73421a5072696365506c6163" .
            "65686f6c6465724669656c6450726f746f50015a42676f6f676c652e676f" .
            "6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f61" .
            "64732f676f6f676c656164732f76312f656e756d733b656e756d73a20203" .
            "474141aa021d476f6f676c652e4164732e476f6f676c654164732e56312e" .
            "456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56" .
            "315c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c6541" .
            "64733a3a56313a3a456e756d73620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

