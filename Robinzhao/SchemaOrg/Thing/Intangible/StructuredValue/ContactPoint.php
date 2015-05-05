<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue;

use Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue;

/**
 * Contact Point
 * http://schema.org/ContactPoint
 */
class ContactPoint extends StructuredValue
{

    /**
     * The location served by this contact point (e.g., a phone number intended for Europeans vs. North Americans or only within the United States.)
     *
     * @var Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    public $areaServed;

    /**
     * A language someone may use with the item.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Language
     */
    public $availableLanguage;

    /**
     * An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers.)
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\ContactPointOption
     */
    public $contactOption;

    /**
     * A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact point and so on. This property is used to specify the kind of contact point.
     *
     * @var String
     */
    public $contactType;

    /**
     * Email address.
     *
     * @var String
     */
    public $email;

    /**
     * The fax number.
     *
     * @var String
     */
    public $faxNumber;

    /**
     * The hours during which this contact point is available.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification
     */
    public $hoursAvailable;

    /**
     * The product or service this support contact point is related to (such as product support for a particular product line). This can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").
     *
     * @var Robinzhao\SchemaOrg\Thing\Product|String
     */
    public $productSupported;

    /**
     * The telephone number.
     *
     * @var String
     */
    public $telephone;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/ContactPoint";

    /**
     * @param $areaServed Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    public function addAreaServed($areaServed)
    {
        $this->areaServed []= $areaServed;
        return $this;
    }

    /**
     * @param $availableLanguage Robinzhao\SchemaOrg\Thing\Intangible\Language
     */
    public function addAvailableLanguage($availableLanguage)
    {
        $this->availableLanguage []= $availableLanguage;
        return $this;
    }

    /**
     * @param $contactOption Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\ContactPointOption
     */
    public function addContactOption($contactOption)
    {
        $this->contactOption []= $contactOption;
        return $this;
    }

    /**
     * @param $contactType String
     */
    public function addContactType($contactType)
    {
        $this->contactType []= $contactType;
        return $this;
    }

    /**
     * @param $email String
     */
    public function addEmail($email)
    {
        $this->email []= $email;
        return $this;
    }

    /**
     * @param $faxNumber String
     */
    public function addFaxNumber($faxNumber)
    {
        $this->faxNumber []= $faxNumber;
        return $this;
    }

    /**
     * @param $hoursAvailable Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification
     */
    public function addHoursAvailable($hoursAvailable)
    {
        $this->hoursAvailable []= $hoursAvailable;
        return $this;
    }

    /**
     * @param $productSupported Robinzhao\SchemaOrg\Thing\Product|String
     */
    public function addProductSupported($productSupported)
    {
        $this->productSupported []= $productSupported;
        return $this;
    }

    /**
     * @param $telephone String
     */
    public function addTelephone($telephone)
    {
        $this->telephone []= $telephone;
        return $this;
    }

}
