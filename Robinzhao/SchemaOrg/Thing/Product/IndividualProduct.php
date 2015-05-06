<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Product;

use Robinzhao\SchemaOrg\Thing\Product;

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
    public $serialNumber;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/IndividualProduct";

    /**
     * @param $serialNumber String
     */
    public function addSerialNumber($serialNumber)
    {
        $this->serialNumber []= $serialNumber;
        return $this;
    }


}