<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible;

use Robinzhao\SchemaOrg\Thing\Intangible;

/**
 * Rating
 * http://schema.org/Rating
 */
class Rating extends Intangible
{

    /**
     * The highest value allowed in this rating system. If bestRating is omitted, 5 is assumed.
     *
     * @var Float|String
     */
    public $bestRating;

    /**
     * The rating for the content.
     *
     * @var String
     */
    public $ratingValue;

    /**
     * The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.
     *
     * @var Float|String
     */
    public $worstRating;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Rating";

    /**
     * @param $bestRating Float|String
     */
    public function addBestRating($bestRating)
    {
        $this->bestRating []= $bestRating;
        return $this;
    }

    /**
     * @param $ratingValue String
     */
    public function addRatingValue($ratingValue)
    {
        $this->ratingValue []= $ratingValue;
        return $this;
    }

    /**
     * @param $worstRating Float|String
     */
    public function addWorstRating($worstRating)
    {
        $this->worstRating []= $worstRating;
        return $this;
    }


}