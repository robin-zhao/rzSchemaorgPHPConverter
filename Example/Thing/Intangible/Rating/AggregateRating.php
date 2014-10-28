<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible\Rating;

use Example\Thing\Intangible\Rating;

/**
 * Aggregate Rating
 * http://schema.org/AggregateRating
 */
class AggregateRating extends Rating
{

    /**
     * The item that is being reviewed/rated.
     *
     * @var Example\Thing
     */
    private $itemReviewed;

    /**
     * The count of total number of ratings.
     *
     * @var Float
     */
    private $ratingCount;

    /**
     * The count of total number of reviews.
     *
     * @var Float
     */
    private $reviewCount;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/AggregateRating";

    /**
     * @return Example\Thing
     */
    public function getItemReviewed()
    {
        return $this->itemReviewed;
    }

    /**
     * @param $itemReviewed Example\Thing
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
