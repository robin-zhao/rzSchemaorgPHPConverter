<?php

namespace Example\Thing\Intangible\StructuredValue;

use Example\Thing\Intangible\StructuredValue;

/**
 * Contact Point
 * http://schema.org/ContactPoint
 */
class ContactPoint extends StructuredValue
{

    /**
     * The location served by this contact point (e.g., a phone number intended for Europeans vs. North Americans or only within the United States.)
     *
     * @var AdministrativeArea
     */
    private $areaServed;

    /**
     * A language someone may use with the item.
     *
     * @var Language
     */
    private $availableLanguage;

    /**
     * An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers.)
     *
     * @var ContactPointOption
     */
    private $contactOption;

    /**
     * A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact point and so on. This property is used to specify the kind of contact point.
     *
     * @var String
     */
    private $contactType;

    /**
     * Email address.
     *
     * @var String
     */
    private $email;

    /**
     * The fax number.
     *
     * @var String
     */
    private $faxNumber;

    /**
     * The hours during which this contact point is available.
     *
     * @var OpeningHoursSpecification
     */
    private $hoursAvailable;

    /**
     * The product or service this support contact point is related to (such as product support for a particular product line). This can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").
     *
     * @var Product|String
     */
    private $productSupported;

    /**
     * The telephone number.
     *
     * @var String
     */
    private $telephone;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/ContactPoint";

    public function getareaServed()
    {
        return $this->areaServed;
    }

    public function setareaServed($areaServed)
    {
        $this->areaServed = $areaServed;
        return $this;
    }

    public function getavailableLanguage()
    {
        return $this->availableLanguage;
    }

    public function setavailableLanguage($availableLanguage)
    {
        $this->availableLanguage = $availableLanguage;
        return $this;
    }

    public function getcontactOption()
    {
        return $this->contactOption;
    }

    public function setcontactOption($contactOption)
    {
        $this->contactOption = $contactOption;
        return $this;
    }

    public function getcontactType()
    {
        return $this->contactType;
    }

    public function setcontactType($contactType)
    {
        $this->contactType = $contactType;
        return $this;
    }

    public function getemail()
    {
        return $this->email;
    }

    public function setemail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getfaxNumber()
    {
        return $this->faxNumber;
    }

    public function setfaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    public function gethoursAvailable()
    {
        return $this->hoursAvailable;
    }

    public function sethoursAvailable($hoursAvailable)
    {
        $this->hoursAvailable = $hoursAvailable;
        return $this;
    }

    public function getproductSupported()
    {
        return $this->productSupported;
    }

    public function setproductSupported($productSupported)
    {
        $this->productSupported = $productSupported;
        return $this;
    }

    public function gettelephone()
    {
        return $this->telephone;
    }

    public function settelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

}
