<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible;

use Example\Thing\Intangible;

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
    private $bestRating;

    /**
     * The rating for the content.
     *
     * @var String
     */
    private $ratingValue;

    /**
     * The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.
     *
     * @var Float|String
     */
    private $worstRating;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Rating";

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
