<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
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
    protected $bestRating;

    /**
     * The rating for the content.
     *
     * @var String
     */
    protected $ratingValue;

    /**
     * The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.
     *
     * @var Float|String
     */
    protected $worstRating;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Rating";

    /**
     * @return Float|String
     */
    public function getBestRating()
    {
        return $this->bestRating;
    }

    /**
     * @param $bestRating Float|String
     */
    public function setBestRating($bestRating)
    {
        $this->bestRating = $bestRating;
        return $this;
    }

    /**
     * @return String
     */
    public function getRatingValue()
    {
        return $this->ratingValue;
    }

    /**
     * @param $ratingValue String
     */
    public function setRatingValue($ratingValue)
    {
        $this->ratingValue = $ratingValue;
        return $this;
    }

    /**
     * @return Float|String
     */
    public function getWorstRating()
    {
        return $this->worstRating;
    }

    /**
     * @param $worstRating Float|String
     */
    public function setWorstRating($worstRating)
    {
        $this->worstRating = $worstRating;
        return $this;
    }

}
