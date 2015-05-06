<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

/**
 * Review
 * http://schema.org/Review
 */
class Review extends CreativeWork
{

    /**
     * The item that is being reviewed/rated.
     *
     * @var Robinzhao\SchemaOrg\Thing
     */
    public $itemReviewed;

    /**
     * The actual body of the review
     *
     * @var String
     */
    public $reviewBody;

    /**
     * The rating given in this review. Note that reviews can themselves be rated. The reviewRating applies to rating given by the review. The aggregateRating property applies to the review itself, as a creative work.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Rating
     */
    public $reviewRating;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Review";

    /**
     * @param $itemReviewed Robinzhao\SchemaOrg\Thing
     */
    public function addItemReviewed($itemReviewed)
    {
        $this->itemReviewed []= $itemReviewed;
        return $this;
    }

    /**
     * @param $reviewBody String
     */
    public function addReviewBody($reviewBody)
    {
        $this->reviewBody []= $reviewBody;
        return $this;
    }

    /**
     * @param $reviewRating Robinzhao\SchemaOrg\Thing\Intangible\Rating
     */
    public function addReviewRating($reviewRating)
    {
        $this->reviewRating []= $reviewRating;
        return $this;
    }


}