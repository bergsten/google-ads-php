<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/dynamic_search_ads_search_term_view_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Services;

class DynamicSearchAdsSearchTermViewService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a97090a4b676f6f676c652f6164732f676f6f676c656164732f76362f7265736f75726365732f64796e616d69635f7365617263685f6164735f7365617263685f7465726d5f766965772e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365731a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22d0050a1e44796e616d69635365617263684164735365617263685465726d5669657712560a0d7265736f757263655f6e616d65180120012809423fe04103fa41390a37676f6f676c656164732e676f6f676c65617069732e636f6d2f44796e616d69635365617263684164735365617263685465726d56696577121d0a0b7365617263685f7465726d1809200128094203e041034800880101121a0a08686561646c696e65180a200128094203e041034801880101121e0a0c6c616e64696e675f70616765180b200128094203e041034802880101121a0a08706167655f75726c180c200128094203e04103480388010112260a146861735f6e656761746976655f6b6579776f7264180d200128084203e04103480488010112260a146861735f6d61746368696e675f6b6579776f7264180e200128084203e04103480588010112220a106861735f6e656761746976655f75726c180f200128084203e0410348068801013ae801ea41e4010a37676f6f676c656164732e676f6f676c65617069732e636f6d2f44796e616d69635365617263684164735365617263685465726d5669657712a801637573746f6d6572732f7b637573746f6d65725f69647d2f64796e616d69635365617263684164735365617263685465726d56696577732f7b61645f67726f75705f69647d7e7b7365617263685f7465726d5f66696e6765727072696e747d7e7b686561646c696e655f66696e6765727072696e747d7e7b6c616e64696e675f706167655f66696e6765727072696e747d7e7b706167655f75726c5f66696e6765727072696e747d420e0a0c5f7365617263685f7465726d420b0a095f686561646c696e65420f0a0d5f6c616e64696e675f70616765420b0a095f706167655f75726c42170a155f6861735f6e656761746976655f6b6579776f726442170a155f6861735f6d61746368696e675f6b6579776f726442130a115f6861735f6e656761746976655f75726c4290020a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e7265736f7572636573422344796e616d69635365617263684164735365617263685465726d5669657750726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56362e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56365c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a5265736f7572636573620670726f746f330ae1070a52676f6f676c652f6164732f676f6f676c656164732f76362f73657276696365732f64796e616d69635f7365617263685f6164735f7365617263685f7465726d5f766965775f736572766963652e70726f746f1220676f6f676c652e6164732e676f6f676c656164732e76362e73657276696365731a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f2282010a2847657444796e616d69635365617263684164735365617263685465726d566965775265717565737412560a0d7265736f757263655f6e616d65180120012809423fe04102fa41390a37676f6f676c656164732e676f6f676c65617069732e636f6d2f44796e616d69635365617263684164735365617263685465726d5669657732d4020a2544796e616d69635365617263684164735365617263685465726d5669657753657276696365128d020a2147657444796e616d69635365617263684164735365617263685465726d56696577124a2e676f6f676c652e6164732e676f6f676c656164732e76362e73657276696365732e47657444796e616d69635365617263684164735365617263685465726d56696577526571756573741a412e676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365732e44796e616d69635365617263684164735365617263685465726d56696577225982d3e493024312412f76362f7b7265736f757263655f6e616d653d637573746f6d6572732f2a2f64796e616d69635365617263684164735365617263685465726d56696577732f2a7dda410d7265736f757263655f6e616d651a1bca4118676f6f676c656164732e676f6f676c65617069732e636f6d4291020a24636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e7365727669636573422a44796e616d69635365617263684164735365617263685465726d566965775365727669636550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f73657276696365733b7365727669636573a20203474141aa0220476f6f676c652e4164732e476f6f676c654164732e56362e5365727669636573ca0220476f6f676c655c4164735c476f6f676c654164735c56365c5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a5365727669636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}
