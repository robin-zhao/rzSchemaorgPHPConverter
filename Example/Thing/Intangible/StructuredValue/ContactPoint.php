<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing\Place\AdministrativeArea
     */
    private $areaServed;

    /**
     * A language someone may use with the item.
     *
     * @var Example\Thing\Intangible\Language
     */
    private $availableLanguage;

    /**
     * An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers.)
     *
     * @var Example\Thing\Intangible\Enumeration\ContactPointOption
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
     * @var Example\Thing\Intangible\StructuredValue\OpeningHoursSpecification
     */
    private $hoursAvailable;

    /**
     * The product or service this support contact point is related to (such as product support for a particular product line). This can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").
     *
     * @var Example\Thing\Product|String
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

    public function getAreaServed()
    {
        return $this->areaServed;
    }

    public function setAreaServed($areaServed)
    {
        $this->areaServed = $areaServed;
        return $this;
    }

    public function getAvailableLanguage()
    {
        return $this->availableLanguage;
    }

    public function setAvailableLanguage($availableLanguage)
    {
        $this->availableLanguage = $availableLanguage;
        return $this;
    }

    public function getContactOption()
    {
        return $this->contactOption;
    }

    public function setContactOption($contactOption)
    {
        $this->contactOption = $contactOption;
        return $this;
    }

    public function getContactType()
    {
        return $this->contactType;
    }

    public function setContactType($contactType)
    {
        $this->contactType = $contactType;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    public function getHoursAvailable()
    {
        return $this->hoursAvailable;
    }

    public function setHoursAvailable($hoursAvailable)
    {
        $this->hoursAvailable = $hoursAvailable;
        return $this;
    }

    public function getProductSupported()
    {
        return $this->productSupported;
    }

    public function setProductSupported($productSupported)
    {
        $this->productSupported = $productSupported;
        return $this;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

}
