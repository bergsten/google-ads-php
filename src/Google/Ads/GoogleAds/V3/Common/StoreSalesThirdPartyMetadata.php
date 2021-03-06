<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/common/offline_user_data.proto

namespace Google\Ads\GoogleAds\V3\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for a third party Store Sales.
 * This is a whitelisted only product. Please contact your Google business
 * development representative for details on the upload configuration.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.common.StoreSalesThirdPartyMetadata</code>
 */
class StoreSalesThirdPartyMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Time the advertiser uploaded the data to the partner. Required.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue advertiser_upload_date_time = 1;</code>
     */
    protected $advertiser_upload_date_time = null;
    /**
     * The fraction of transactions that are valid. Invalid transactions may
     * include invalid formats or values.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue valid_transaction_fraction = 2;</code>
     */
    protected $valid_transaction_fraction = null;
    /**
     * The fraction of valid transactions that are matched to a third party
     * assigned user ID on the partner side.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue partner_match_fraction = 3;</code>
     */
    protected $partner_match_fraction = null;
    /**
     * The fraction of valid transactions that are uploaded by the partner to
     * Google.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue partner_upload_fraction = 4;</code>
     */
    protected $partner_upload_fraction = null;
    /**
     * Version of partner IDs to be used for uploads. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue bridge_map_version_id = 5;</code>
     */
    protected $bridge_map_version_id = null;
    /**
     * ID of the third party partner updating the transaction feed.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value partner_id = 6;</code>
     */
    protected $partner_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $advertiser_upload_date_time
     *           Time the advertiser uploaded the data to the partner. Required.
     *           The format is "YYYY-MM-DD HH:MM:SS".
     *           Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *     @type \Google\Protobuf\DoubleValue $valid_transaction_fraction
     *           The fraction of transactions that are valid. Invalid transactions may
     *           include invalid formats or values.
     *           Required.
     *           The fraction needs to be between 0 and 1 (excluding 0).
     *     @type \Google\Protobuf\DoubleValue $partner_match_fraction
     *           The fraction of valid transactions that are matched to a third party
     *           assigned user ID on the partner side.
     *           Required.
     *           The fraction needs to be between 0 and 1 (excluding 0).
     *     @type \Google\Protobuf\DoubleValue $partner_upload_fraction
     *           The fraction of valid transactions that are uploaded by the partner to
     *           Google.
     *           Required.
     *           The fraction needs to be between 0 and 1 (excluding 0).
     *     @type \Google\Protobuf\StringValue $bridge_map_version_id
     *           Version of partner IDs to be used for uploads. Required.
     *     @type \Google\Protobuf\Int64Value $partner_id
     *           ID of the third party partner updating the transaction feed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Common\OfflineUserData::initOnce();
        parent::__construct($data);
    }

    /**
     * Time the advertiser uploaded the data to the partner. Required.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue advertiser_upload_date_time = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdvertiserUploadDateTime()
    {
        return $this->advertiser_upload_date_time;
    }

    /**
     * Returns the unboxed value from <code>getAdvertiserUploadDateTime()</code>

     * Time the advertiser uploaded the data to the partner. Required.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue advertiser_upload_date_time = 1;</code>
     * @return string|null
     */
    public function getAdvertiserUploadDateTimeUnwrapped()
    {
        return $this->readWrapperValue("advertiser_upload_date_time");
    }

    /**
     * Time the advertiser uploaded the data to the partner. Required.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue advertiser_upload_date_time = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdvertiserUploadDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->advertiser_upload_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Time the advertiser uploaded the data to the partner. Required.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue advertiser_upload_date_time = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdvertiserUploadDateTimeUnwrapped($var)
    {
        $this->writeWrapperValue("advertiser_upload_date_time", $var);
        return $this;}

    /**
     * The fraction of transactions that are valid. Invalid transactions may
     * include invalid formats or values.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue valid_transaction_fraction = 2;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getValidTransactionFraction()
    {
        return $this->valid_transaction_fraction;
    }

    /**
     * Returns the unboxed value from <code>getValidTransactionFraction()</code>

     * The fraction of transactions that are valid. Invalid transactions may
     * include invalid formats or values.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue valid_transaction_fraction = 2;</code>
     * @return float|null
     */
    public function getValidTransactionFractionUnwrapped()
    {
        return $this->readWrapperValue("valid_transaction_fraction");
    }

    /**
     * The fraction of transactions that are valid. Invalid transactions may
     * include invalid formats or values.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue valid_transaction_fraction = 2;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setValidTransactionFraction($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->valid_transaction_fraction = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * The fraction of transactions that are valid. Invalid transactions may
     * include invalid formats or values.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue valid_transaction_fraction = 2;</code>
     * @param float|null $var
     * @return $this
     */
    public function setValidTransactionFractionUnwrapped($var)
    {
        $this->writeWrapperValue("valid_transaction_fraction", $var);
        return $this;}

    /**
     * The fraction of valid transactions that are matched to a third party
     * assigned user ID on the partner side.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue partner_match_fraction = 3;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getPartnerMatchFraction()
    {
        return $this->partner_match_fraction;
    }

    /**
     * Returns the unboxed value from <code>getPartnerMatchFraction()</code>

     * The fraction of valid transactions that are matched to a third party
     * assigned user ID on the partner side.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue partner_match_fraction = 3;</code>
     * @return float|null
     */
    public function getPartnerMatchFractionUnwrapped()
    {
        return $this->readWrapperValue("partner_match_fraction");
    }

    /**
     * The fraction of valid transactions that are matched to a third party
     * assigned user ID on the partner side.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue partner_match_fraction = 3;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setPartnerMatchFraction($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->partner_match_fraction = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * The fraction of valid transactions that are matched to a third party
     * assigned user ID on the partner side.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue partner_match_fraction = 3;</code>
     * @param float|null $var
     * @return $this
     */
    public function setPartnerMatchFractionUnwrapped($var)
    {
        $this->writeWrapperValue("partner_match_fraction", $var);
        return $this;}

    /**
     * The fraction of valid transactions that are uploaded by the partner to
     * Google.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue partner_upload_fraction = 4;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getPartnerUploadFraction()
    {
        return $this->partner_upload_fraction;
    }

    /**
     * Returns the unboxed value from <code>getPartnerUploadFraction()</code>

     * The fraction of valid transactions that are uploaded by the partner to
     * Google.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue partner_upload_fraction = 4;</code>
     * @return float|null
     */
    public function getPartnerUploadFractionUnwrapped()
    {
        return $this->readWrapperValue("partner_upload_fraction");
    }

    /**
     * The fraction of valid transactions that are uploaded by the partner to
     * Google.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue partner_upload_fraction = 4;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setPartnerUploadFraction($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->partner_upload_fraction = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * The fraction of valid transactions that are uploaded by the partner to
     * Google.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue partner_upload_fraction = 4;</code>
     * @param float|null $var
     * @return $this
     */
    public function setPartnerUploadFractionUnwrapped($var)
    {
        $this->writeWrapperValue("partner_upload_fraction", $var);
        return $this;}

    /**
     * Version of partner IDs to be used for uploads. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue bridge_map_version_id = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getBridgeMapVersionId()
    {
        return $this->bridge_map_version_id;
    }

    /**
     * Returns the unboxed value from <code>getBridgeMapVersionId()</code>

     * Version of partner IDs to be used for uploads. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue bridge_map_version_id = 5;</code>
     * @return string|null
     */
    public function getBridgeMapVersionIdUnwrapped()
    {
        return $this->readWrapperValue("bridge_map_version_id");
    }

    /**
     * Version of partner IDs to be used for uploads. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue bridge_map_version_id = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setBridgeMapVersionId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->bridge_map_version_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Version of partner IDs to be used for uploads. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue bridge_map_version_id = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setBridgeMapVersionIdUnwrapped($var)
    {
        $this->writeWrapperValue("bridge_map_version_id", $var);
        return $this;}

    /**
     * ID of the third party partner updating the transaction feed.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value partner_id = 6;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getPartnerId()
    {
        return $this->partner_id;
    }

    /**
     * Returns the unboxed value from <code>getPartnerId()</code>

     * ID of the third party partner updating the transaction feed.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value partner_id = 6;</code>
     * @return int|string|null
     */
    public function getPartnerIdUnwrapped()
    {
        return $this->readWrapperValue("partner_id");
    }

    /**
     * ID of the third party partner updating the transaction feed.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value partner_id = 6;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setPartnerId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->partner_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * ID of the third party partner updating the transaction feed.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value partner_id = 6;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setPartnerIdUnwrapped($var)
    {
        $this->writeWrapperValue("partner_id", $var);
        return $this;}

}

