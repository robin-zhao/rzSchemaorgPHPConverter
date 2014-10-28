<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible\StructuredValue\ContactPoint;

use Example\Thing\Intangible\StructuredValue\ContactPoint;

/**
 * Postal Address
 * http://schema.org/PostalAddress
 */
class PostalAddress extends ContactPoint
{

    /**
     * The country. For example, USA. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     *
     * @var Example\Thing\Place\AdministrativeArea\Country
     */
    private $addressCountry;

    /**
     * The locality. For example, Mountain View.
     *
     * @var String
     */
    private $addressLocality;

    /**
     * The region. For example, CA.
     *
     * @var String
     */
    private $addressRegion;

    /**
     * The postal code. For example, 94043.
     *
     * @var String
     */
    private $postalCode;

    /**
     * The post offce box number for PO box addresses.
     *
     * @var String
     */
    private $postOfficeBoxNumber;

    /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     *
     * @var String
     */
    private $streetAddress;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/PostalAddress";

    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    public function setAddressCountry($addressCountry)
    {
        $this->addressCountry = $addressCountry;
        return $this;
    }

    public function getAddressLocality()
    {
        return $this->addressLocality;
    }

    public function setAddressLocality($addressLocality)
    {
        $this->addressLocality = $addressLocality;
        return $this;
    }

    public function getAddressRegion()
    {
        return $this->addressRegion;
    }

    public function setAddressRegion($addressRegion)
    {
        $this->addressRegion = $addressRegion;
        return $this;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function getPostOfficeBoxNumber()
    {
        return $this->postOfficeBoxNumber;
    }

    public function setPostOfficeBoxNumber($postOfficeBoxNumber)
    {
        $this->postOfficeBoxNumber = $postOfficeBoxNumber;
        return $this;
    }

    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    public function setStreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;
        return $this;
    }

}
