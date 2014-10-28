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
    protected $areaServed;

    /**
     * A language someone may use with the item.
     *
     * @var Example\Thing\Intangible\Language
     */
    protected $availableLanguage;

    /**
     * An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers.)
     *
     * @var Example\Thing\Intangible\Enumeration\ContactPointOption
     */
    protected $contactOption;

    /**
     * A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact point and so on. This property is used to specify the kind of contact point.
     *
     * @var String
     */
    protected $contactType;

    /**
     * Email address.
     *
     * @var String
     */
    protected $email;

    /**
     * The fax number.
     *
     * @var String
     */
    protected $faxNumber;

    /**
     * The hours during which this contact point is available.
     *
     * @var Example\Thing\Intangible\StructuredValue\OpeningHoursSpecification
     */
    protected $hoursAvailable;

    /**
     * The product or service this support contact point is related to (such as product support for a particular product line). This can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").
     *
     * @var Example\Thing\Product|String
     */
    protected $productSupported;

    /**
     * The telephone number.
     *
     * @var String
     */
    protected $telephone;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/ContactPoint";

    /**
     * @return Example\Thing\Place\AdministrativeArea
     */
    public function getAreaServed()
    {
        return $this->areaServed;
    }

    /**
     * @param $areaServed Example\Thing\Place\AdministrativeArea
     */
    public function setAreaServed($areaServed)
    {
        $this->areaServed = $areaServed;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Language
     */
    public function getAvailableLanguage()
    {
        return $this->availableLanguage;
    }

    /**
     * @param $availableLanguage Example\Thing\Intangible\Language
     */
    public function setAvailableLanguage($availableLanguage)
    {
        $this->availableLanguage = $availableLanguage;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Enumeration\ContactPointOption
     */
    public function getContactOption()
    {
        return $this->contactOption;
    }

    /**
     * @param $contactOption Example\Thing\Intangible\Enumeration\ContactPointOption
     */
    public function setContactOption($contactOption)
    {
        $this->contactOption = $contactOption;
        return $this;
    }

    /**
     * @return String
     */
    public function getContactType()
    {
        return $this->contactType;
    }

    /**
     * @param $contactType String
     */
    public function setContactType($contactType)
    {
        $this->contactType = $contactType;
        return $this;
    }

    /**
     * @return String
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $email String
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return String
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * @param $faxNumber String
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\StructuredValue\OpeningHoursSpecification
     */
    public function getHoursAvailable()
    {
        return $this->hoursAvailable;
    }

    /**
     * @param $hoursAvailable Example\Thing\Intangible\StructuredValue\OpeningHoursSpecification
     */
    public function setHoursAvailable($hoursAvailable)
    {
        $this->hoursAvailable = $hoursAvailable;
        return $this;
    }

    /**
     * @return Example\Thing\Product|String
     */
    public function getProductSupported()
    {
        return $this->productSupported;
    }

    /**
     * @param $productSupported Example\Thing\Product|String
     */
    public function setProductSupported($productSupported)
    {
        $this->productSupported = $productSupported;
        return $this;
    }

    /**
     * @return String
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param $telephone String
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

}
