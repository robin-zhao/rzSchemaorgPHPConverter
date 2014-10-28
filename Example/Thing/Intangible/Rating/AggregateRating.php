<?php

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

    public function getitemReviewed()
    {
        return $this->itemReviewed;
    }

    public function setitemReviewed($itemReviewed)
    {
        $this->itemReviewed = $itemReviewed;
        return $this;
    }

    public function getratingCount()
    {
        return $this->ratingCount;
    }

    public function setratingCount($ratingCount)
    {
        $this->ratingCount = $ratingCount;
        return $this;
    }

    public function getreviewCount()
    {
        return $this->reviewCount;
    }

    public function setreviewCount($reviewCount)
    {
        $this->reviewCount = $reviewCount;
        return $this;
    }

}
