<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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

    /**
     * @return String
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * @param $serialNumber String
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

}
