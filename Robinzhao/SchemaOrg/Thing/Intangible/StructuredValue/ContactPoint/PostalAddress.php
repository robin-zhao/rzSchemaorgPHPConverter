<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;

use Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;

/**
 * Postal Address
 * http://schema.org/PostalAddress
 */
class PostalAddress extends ContactPoint
{

    /**
     * The country. For example, USA. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea\Country
     */
    public $addressCountry;

    /**
     * The locality. For example, Mountain View.
     *
     * @var String
     */
    public $addressLocality;

    /**
     * The region. For example, CA.
     *
     * @var String
     */
    public $addressRegion;

    /**
     * The postal code. For example, 94043.
     *
     * @var String
     */
    public $postalCode;

    /**
     * The post offce box number for PO box addresses.
     *
     * @var String
     */
    public $postOfficeBoxNumber;

    /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     *
     * @var String
     */
    public $streetAddress;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/PostalAddress";

    /**
     * @param $addressCountry Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea\Country
     */
    public function addAddressCountry($addressCountry)
    {
        $this->addressCountry []= $addressCountry;
        return $this;
    }

    /**
     * @param $addressLocality String
     */
    public function addAddressLocality($addressLocality)
    {
        $this->addressLocality []= $addressLocality;
        return $this;
    }

    /**
     * @param $addressRegion String
     */
    public function addAddressRegion($addressRegion)
    {
        $this->addressRegion []= $addressRegion;
        return $this;
    }

    /**
     * @param $postalCode String
     */
    public function addPostalCode($postalCode)
    {
        $this->postalCode []= $postalCode;
        return $this;
    }

    /**
     * @param $postOfficeBoxNumber String
     */
    public function addPostOfficeBoxNumber($postOfficeBoxNumber)
    {
        $this->postOfficeBoxNumber []= $postOfficeBoxNumber;
        return $this;
    }

    /**
     * @param $streetAddress String
     */
    public function addStreetAddress($streetAddress)
    {
        $this->streetAddress []= $streetAddress;
        return $this;
    }

}
