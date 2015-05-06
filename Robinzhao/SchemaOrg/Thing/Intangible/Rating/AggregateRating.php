<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\Rating;

use Robinzhao\SchemaOrg\Thing\Intangible\Rating;

/**
 * Aggregate Rating
 * http://schema.org/AggregateRating
 */
class AggregateRating extends Rating
{

    /**
     * The item that is being reviewed/rated.
     *
     * @var Robinzhao\SchemaOrg\Thing
     */
    public $itemReviewed;

    /**
     * The count of total number of ratings.
     *
     * @var Float
     */
    public $ratingCount;

    /**
     * The count of total number of reviews.
     *
     * @var Float
     */
    public $reviewCount;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/AggregateRating";

    /**
     * @param $itemReviewed Robinzhao\SchemaOrg\Thing
     */
    public function addItemReviewed($itemReviewed)
    {
        $this->itemReviewed []= $itemReviewed;
        return $this;
    }

    /**
     * @param $ratingCount Float
     */
    public function addRatingCount($ratingCount)
    {
        $this->ratingCount []= $ratingCount;
        return $this;
    }

    /**
     * @param $reviewCount Float
     */
    public function addReviewCount($reviewCount)
    {
        $this->reviewCount []= $reviewCount;
        return $this;
    }


}