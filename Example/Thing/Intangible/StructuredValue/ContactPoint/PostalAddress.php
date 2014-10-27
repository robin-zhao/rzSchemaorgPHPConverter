<?php

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
     * @var Country
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

    public function getaddressCountry()
    {
        return $this->addressCountry;
    }

    public function setaddressCountry($addressCountry)
    {
        $this->addressCountry = $addressCountry;
        return $this;
    }

    public function getaddressLocality()
    {
        return $this->addressLocality;
    }

    public function setaddressLocality($addressLocality)
    {
        $this->addressLocality = $addressLocality;
        return $this;
    }

    public function getaddressRegion()
    {
        return $this->addressRegion;
    }

    public function setaddressRegion($addressRegion)
    {
        $this->addressRegion = $addressRegion;
        return $this;
    }

    public function getpostalCode()
    {
        return $this->postalCode;
    }

    public function setpostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function getpostOfficeBoxNumber()
    {
        return $this->postOfficeBoxNumber;
    }

    public function setpostOfficeBoxNumber($postOfficeBoxNumber)
    {
        $this->postOfficeBoxNumber = $postOfficeBoxNumber;
        return $this;
    }

    public function getstreetAddress()
    {
        return $this->streetAddress;
    }

    public function setstreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;
        return $this;
    }

}
