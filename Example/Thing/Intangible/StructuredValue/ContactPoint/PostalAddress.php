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
    protected $addressCountry;

    /**
     * The locality. For example, Mountain View.
     *
     * @var String
     */
    protected $addressLocality;

    /**
     * The region. For example, CA.
     *
     * @var String
     */
    protected $addressRegion;

    /**
     * The postal code. For example, 94043.
     *
     * @var String
     */
    protected $postalCode;

    /**
     * The post offce box number for PO box addresses.
     *
     * @var String
     */
    protected $postOfficeBoxNumber;

    /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     *
     * @var String
     */
    protected $streetAddress;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/PostalAddress";

    /**
     * @return Example\Thing\Place\AdministrativeArea\Country
     */
    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    /**
     * @param $addressCountry Example\Thing\Place\AdministrativeArea\Country
     */
    public function setAddressCountry($addressCountry)
    {
        $this->addressCountry = $addressCountry;
        return $this;
    }

    /**
     * @return String
     */
    public function getAddressLocality()
    {
        return $this->addressLocality;
    }

    /**
     * @param $addressLocality String
     */
    public function setAddressLocality($addressLocality)
    {
        $this->addressLocality = $addressLocality;
        return $this;
    }

    /**
     * @return String
     */
    public function getAddressRegion()
    {
        return $this->addressRegion;
    }

    /**
     * @param $addressRegion String
     */
    public function setAddressRegion($addressRegion)
    {
        $this->addressRegion = $addressRegion;
        return $this;
    }

    /**
     * @return String
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param $postalCode String
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return String
     */
    public function getPostOfficeBoxNumber()
    {
        return $this->postOfficeBoxNumber;
    }

    /**
     * @param $postOfficeBoxNumber String
     */
    public function setPostOfficeBoxNumber($postOfficeBoxNumber)
    {
        $this->postOfficeBoxNumber = $postOfficeBoxNumber;
        return $this;
    }

    /**
     * @return String
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    /**
     * @param $streetAddress String
     */
    public function setStreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;
        return $this;
    }

}
