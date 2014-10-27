<?php

namespace Example\Thing\Product;

use Example\Thing\Product;

/**
 * Individual Product
 * http://schema.org/IndividualProduct
 */
class IndividualProduct extends Product
{

    /**
     * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
     *
     * @var String
     */
    private $serialNumber;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/IndividualProduct";

    public function getserialNumber()
    {
        return $this->serialNumber;
    }

    public function setserialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

}
