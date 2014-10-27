<?php

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

    public function gethighPrice()
    {
        return $this->highPrice;
    }

    public function sethighPrice($highPrice)
    {
        $this->highPrice = $highPrice;
        return $this;
    }

    public function getlowPrice()
    {
        return $this->lowPrice;
    }

    public function setlowPrice($lowPrice)
    {
        $this->lowPrice = $lowPrice;
        return $this;
    }

    public function getofferCount()
    {
        return $this->offerCount;
    }

    public function setofferCount($offerCount)
    {
        $this->offerCount = $offerCount;
        return $this;
    }

}
