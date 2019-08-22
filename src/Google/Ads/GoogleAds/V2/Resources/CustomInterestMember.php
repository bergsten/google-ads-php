<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/custom_interest.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A member of custom interest audience. A member can be a keyword or url.
 * It is immutable, that is, it can only be created or removed but not changed.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.CustomInterestMember</code>
 */
final class CustomInterestMember extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of custom interest member, KEYWORD or URL.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.CustomInterestMemberTypeEnum.CustomInterestMemberType member_type = 1;</code>
     */
    private $member_type = 0;
    /**
     * Keyword text when member_type is KEYWORD or URL string when
     * member_type is URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue parameter = 2;</code>
     */
    private $parameter = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $member_type
     *           The type of custom interest member, KEYWORD or URL.
     *     @type \Google\Protobuf\StringValue $parameter
     *           Keyword text when member_type is KEYWORD or URL string when
     *           member_type is URL.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\CustomInterest::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of custom interest member, KEYWORD or URL.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.CustomInterestMemberTypeEnum.CustomInterestMemberType member_type = 1;</code>
     * @return int
     */
    public function getMemberType()
    {
        return $this->member_type;
    }

    /**
     * The type of custom interest member, KEYWORD or URL.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.CustomInterestMemberTypeEnum.CustomInterestMemberType member_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMemberType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\CustomInterestMemberTypeEnum_CustomInterestMemberType::class);
        $this->member_type = $var;

        return $this;
    }

    /**
     * Keyword text when member_type is KEYWORD or URL string when
     * member_type is URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue parameter = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Returns the unboxed value from <code>getParameter()</code>

     * Keyword text when member_type is KEYWORD or URL string when
     * member_type is URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue parameter = 2;</code>
     * @return string|null
     */
    public function getParameterUnwrapped()
    {
        $wrapper = $this->getParameter();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Keyword text when member_type is KEYWORD or URL string when
     * member_type is URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue parameter = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setParameter($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->parameter = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Keyword text when member_type is KEYWORD or URL string when
     * member_type is URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue parameter = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setParameterUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setParameter($wrappedVar);
    }

}
