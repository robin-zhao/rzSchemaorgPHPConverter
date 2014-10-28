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

    public function getHighPrice()
    {
        return $this->highPrice;
    }

    public function setHighPrice($highPrice)
    {
        $this->highPrice = $highPrice;
        return $this;
    }

    public function getLowPrice()
    {
        return $this->lowPrice;
    }

    public function setLowPrice($lowPrice)
    {
        $this->lowPrice = $lowPrice;
        return $this;
    }

    public function getOfferCount()
    {
        return $this->offerCount;
    }

    public function setOfferCount($offerCount)
    {
        $this->offerCount = $offerCount;
        return $this;
    }

}
