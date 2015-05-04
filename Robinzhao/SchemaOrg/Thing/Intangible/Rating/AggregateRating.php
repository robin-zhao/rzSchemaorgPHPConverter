<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
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
    protected $itemReviewed;

    /**
     * The count of total number of ratings.
     *
     * @var Float
     */
    protected $ratingCount;

    /**
     * The count of total number of reviews.
     *
     * @var Float
     */
    protected $reviewCount;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/AggregateRating";

    /**
     * @return Robinzhao\SchemaOrg\Thing
     */
    public function getItemReviewed()
    {
        return $this->itemReviewed;
    }

    /**
     * @param $itemReviewed Robinzhao\SchemaOrg\Thing
     */
    public function setItemReviewed($itemReviewed)
    {
        $this->itemReviewed = $itemReviewed;
        return $this;
    }

    /**
     * @return Float
     */
    public function getRatingCount()
    {
        return $this->ratingCount;
    }

    /**
     * @param $ratingCount Float
     */
    public function setRatingCount($ratingCount)
    {
        $this->ratingCount = $ratingCount;
        return $this;
    }

    /**
     * @return Float
     */
    public function getReviewCount()
    {
        return $this->reviewCount;
    }

    /**
     * @param $reviewCount Float
     */
    public function setReviewCount($reviewCount)
    {
        $this->reviewCount = $reviewCount;
        return $this;
    }

}
