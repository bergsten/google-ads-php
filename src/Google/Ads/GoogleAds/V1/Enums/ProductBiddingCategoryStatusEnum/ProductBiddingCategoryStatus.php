<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/product_bidding_category_status.proto

namespace Google\Ads\GoogleAds\V1\Enums\ProductBiddingCategoryStatusEnum;

/**
 * Enum describing the status of the product bidding category.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.ProductBiddingCategoryStatusEnum.ProductBiddingCategoryStatus</code>
 */
class ProductBiddingCategoryStatus
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
     * The category is active and can be used for bidding.
     *
     * Generated from protobuf enum <code>ACTIVE = 2;</code>
     */
    const ACTIVE = 2;
    /**
     * The category is obsolete. Used only for reporting purposes.
     *
     * Generated from protobuf enum <code>OBSOLETE = 3;</code>
     */
    const OBSOLETE = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProductBiddingCategoryStatus::class, \Google\Ads\GoogleAds\V1\Enums\ProductBiddingCategoryStatusEnum_ProductBiddingCategoryStatus::class);
