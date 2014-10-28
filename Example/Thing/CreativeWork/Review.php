<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing
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
     * @var Example\Thing\Intangible\Rating
     */
    private $reviewRating;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Review";

    public function getItemReviewed()
    {
        return $this->itemReviewed;
    }

    public function setItemReviewed($itemReviewed)
    {
        $this->itemReviewed = $itemReviewed;
        return $this;
    }

    public function getReviewBody()
    {
        return $this->reviewBody;
    }

    public function setReviewBody($reviewBody)
    {
        $this->reviewBody = $reviewBody;
        return $this;
    }

    public function getReviewRating()
    {
        return $this->reviewRating;
    }

    public function setReviewRating($reviewRating)
    {
        $this->reviewRating = $reviewRating;
        return $this;
    }

}
