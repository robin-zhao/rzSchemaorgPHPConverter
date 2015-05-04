<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
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
    protected $itemReviewed;

    /**
     * The actual body of the review
     *
     * @var String
     */
    protected $reviewBody;

    /**
     * The rating given in this review. Note that reviews can themselves be rated. The reviewRating applies to rating given by the review. The aggregateRating property applies to the review itself, as a creative work.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Rating
     */
    protected $reviewRating;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Review";

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
     * @return String
     */
    public function getReviewBody()
    {
        return $this->reviewBody;
    }

    /**
     * @param $reviewBody String
     */
    public function setReviewBody($reviewBody)
    {
        $this->reviewBody = $reviewBody;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Rating
     */
    public function getReviewRating()
    {
        return $this->reviewRating;
    }

    /**
     * @param $reviewRating Robinzhao\SchemaOrg\Thing\Intangible\Rating
     */
    public function setReviewRating($reviewRating)
    {
        $this->reviewRating = $reviewRating;
        return $this;
    }

}
