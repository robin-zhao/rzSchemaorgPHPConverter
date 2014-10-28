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

    public function getItemReviewed()
    {
        return $this->itemReviewed;
    }

    public function setItemReviewed($itemReviewed)
    {
        $this->itemReviewed = $itemReviewed;
        return $this;
    }

    public function getRatingCount()
    {
        return $this->ratingCount;
    }

    public function setRatingCount($ratingCount)
    {
        $this->ratingCount = $ratingCount;
        return $this;
    }

    public function getReviewCount()
    {
        return $this->reviewCount;
    }

    public function setReviewCount($reviewCount)
    {
        $this->reviewCount = $reviewCount;
        return $this;
    }

}
