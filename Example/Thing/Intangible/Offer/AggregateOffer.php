<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible\Offer;

use Example\Thing\Intangible\Offer;

/**
 * Aggregate Offer
 * http://schema.org/AggregateOffer
 */
class AggregateOffer extends Offer
{

    /**
     * The highest price of all offers available.
     *
     * @var Float|String
     */
    private $highPrice;

    /**
     * The lowest price of all offers available.
     *
     * @var Float|String
     */
    private $lowPrice;

    /**
     * The number of offers for the product.
     *
     * @var Integer
     */
    private $offerCount;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/AggregateOffer";

    /**
     * @return Float|String
     */
    public function getHighPrice()
    {
        return $this->highPrice;
    }

    /**
     * @param $highPrice Float|String
     */
    public function setHighPrice($highPrice)
    {
        $this->highPrice = $highPrice;
        return $this;
    }

    /**
     * @return Float|String
     */
    public function getLowPrice()
    {
        return $this->lowPrice;
    }

    /**
     * @param $lowPrice Float|String
     */
    public function setLowPrice($lowPrice)
    {
        $this->lowPrice = $lowPrice;
        return $this;
    }

    /**
     * @return Integer
     */
    public function getOfferCount()
    {
        return $this->offerCount;
    }

    /**
     * @param $offerCount Integer
     */
    public function setOfferCount($offerCount)
    {
        $this->offerCount = $offerCount;
        return $this;
    }

}
