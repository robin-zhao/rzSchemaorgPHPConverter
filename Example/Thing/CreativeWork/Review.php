<?php

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

/**
 * Review
 * http://schema.org/Review
 */
class Review extends CreativeWork
{

    /**
     * The item that is being reviewed/rated.
     *
     * @var Thing
     */
    private $itemReviewed;

    /**
     * The actual body of the review
     *
     * @var String
     */
    private $reviewBody;

    /**
     * The rating given in this review. Note that reviews can themselves be rated. The reviewRating applies to rating given by the review. The aggregateRating property applies to the review itself, as a creative work.
     *
     * @var Rating
     */
    private $reviewRating;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Review";

    public function getitemReviewed()
    {
        return $this->itemReviewed;
    }

    public function setitemReviewed($itemReviewed)
    {
        $this->itemReviewed = $itemReviewed;
        return $this;
    }

    public function getreviewBody()
    {
        return $this->reviewBody;
    }

    public function setreviewBody($reviewBody)
    {
        $this->reviewBody = $reviewBody;
        return $this;
    }

    public function getreviewRating()
    {
        return $this->reviewRating;
    }

    public function setreviewRating($reviewRating)
    {
        $this->reviewRating = $reviewRating;
        return $this;
    }

}
