<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing;

use Robinzhao\SchemaOrg\Thing;

/**
 * Organization
 * http://schema.org/Organization
 */
class Organization extends Thing
{

    /**
     * Physical address of the item.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public $address;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Rating\AggregateRating
     */
    public $aggregateRating;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Brand
     */
    public $brand;

    /**
     * A contact point for a person or organization.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
     */
    public $contactPoint;

    /**
     * A contact point for a person or organization (legacy spelling; see singular form, contactPoint).
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
     */
    public $contactPoints;

    /**
     * A relationship between an organization and a department of that organization, also described as an organization (allowing different urls, logos, opening hours). For example: a store with a pharmacy, or a bakery with a cafe.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    public $department;

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business person.
     *
     * @var String
     */
    public $duns;

    /**
     * Email address.
     *
     * @var String
     */
    public $email;

    /**
     * Someone working for this organization.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $employee;

    /**
     * People working for this organization. (legacy spelling; see singular form, employee)
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $employees;

    /**
     * Upcoming or past event associated with this place or organization.
     *
     * @var Robinzhao\SchemaOrg\Thing\Event
     */
    public $event;

    /**
     * Upcoming or past events associated with this place or organization (legacy spelling; see singular form, event).
     *
     * @var Robinzhao\SchemaOrg\Thing\Event
     */
    public $events;

    /**
     * The fax number.
     *
     * @var String
     */
    public $faxNumber;

    /**
     * A person who founded this organization.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $founder;

    /**
     * A person who founded this organization (legacy spelling; see singular form, founder).
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $founders;

    /**
     * The date that this organization was founded.
     *
     * @var DateTime
     */
    public $foundingDate;

    /**
     * The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
     *
     * @var String
     */
    public $globalLocationNumber;

    /**
     * Points-of-Sales operated by the organization or person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place
     */
    public $hasPOS;

    /**
     * A count of a specific user interactions with this item—for example, 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user interaction type should be one of the sub types of UserInteraction.
     *
     * @var String
     */
    public $interactionCount;

    /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
     *
     * @var String
     */
    public $isicV4;

    /**
     * The official name of the organization, e.g. the registered company name.
     *
     * @var String
     */
    public $legalName;

    /**
     * The location of the event, organization or action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|Robinzhao\SchemaOrg\Thing\Place
     */
    public $location;

    /**
     * A logo associated with an organization.
     *
     * @var String|Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public $logo;

    /**
     * A pointer to products or services offered by the organization or person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    public $makesOffer;

    /**
     * A member of this organization.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $member;

    /**
     * A member of this organization (legacy spelling; see singular form, member).
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $members;

    /**
     * The North American Industry Classification System (NAICS) code for a particular organization or business person.
     *
     * @var String
     */
    public $naics;

    /**
     * Products owned by the organization or person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\OwnershipInfo|Robinzhao\SchemaOrg\Thing\Product
     */
    public $owns;

    /**
     * A review of the item.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    public $review;

    /**
     * Review of the item (legacy spelling; see singular form, review).
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    public $reviews;

    /**
     * A pointer to products or services sought by the organization or person (demand).
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Demand
     */
    public $seeks;

    /**
     * A relationship between two organizations where the first includes the second, e.g., as a subsidiary. See also: the more specific 'department' property.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    public $subOrganization;

    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
     *
     * @var String
     */
    public $taxID;

    /**
     * The telephone number.
     *
     * @var String
     */
    public $telephone;

    /**
     * The Value-added Tax ID of the organisation or person.
     *
     * @var String
     */
    public $vatID;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Organization";

    /**
     * @param $address Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function addAddress($address)
    {
        $this->address []= $address;
        return $this;
    }

    /**
     * @param $aggregateRating Robinzhao\SchemaOrg\Thing\Intangible\Rating\AggregateRating
     */
    public function addAggregateRating($aggregateRating)
    {
        $this->aggregateRating []= $aggregateRating;
        return $this;
    }

    /**
     * @param $brand Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Brand
     */
    public function addBrand($brand)
    {
        $this->brand []= $brand;
        return $this;
    }

    /**
     * @param $contactPoint Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
     */
    public function addContactPoint($contactPoint)
    {
        $this->contactPoint []= $contactPoint;
        return $this;
    }

    /**
     * @param $contactPoints Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
     */
    public function addContactPoints($contactPoints)
    {
        $this->contactPoints []= $contactPoints;
        return $this;
    }

    /**
     * @param $department Robinzhao\SchemaOrg\Thing\Organization
     */
    public function addDepartment($department)
    {
        $this->department []= $department;
        return $this;
    }

    /**
     * @param $duns String
     */
    public function addDuns($duns)
    {
        $this->duns []= $duns;
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
     * @param $employee Robinzhao\SchemaOrg\Thing\Person
     */
    public function addEmployee($employee)
    {
        $this->employee []= $employee;
        return $this;
    }

    /**
     * @param $employees Robinzhao\SchemaOrg\Thing\Person
     */
    public function addEmployees($employees)
    {
        $this->employees []= $employees;
        return $this;
    }

    /**
     * @param $event Robinzhao\SchemaOrg\Thing\Event
     */
    public function addEvent($event)
    {
        $this->event []= $event;
        return $this;
    }

    /**
     * @param $events Robinzhao\SchemaOrg\Thing\Event
     */
    public function addEvents($events)
    {
        $this->events []= $events;
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
     * @param $founder Robinzhao\SchemaOrg\Thing\Person
     */
    public function addFounder($founder)
    {
        $this->founder []= $founder;
        return $this;
    }

    /**
     * @param $founders Robinzhao\SchemaOrg\Thing\Person
     */
    public function addFounders($founders)
    {
        $this->founders []= $founders;
        return $this;
    }

    /**
     * @param $foundingDate DateTime
     */
    public function addFoundingDate($foundingDate)
    {
        $this->foundingDate []= $foundingDate;
        return $this;
    }

    /**
     * @param $globalLocationNumber String
     */
    public function addGlobalLocationNumber($globalLocationNumber)
    {
        $this->globalLocationNumber []= $globalLocationNumber;
        return $this;
    }

    /**
     * @param $hasPOS Robinzhao\SchemaOrg\Thing\Place
     */
    public function addHasPOS($hasPOS)
    {
        $this->hasPOS []= $hasPOS;
        return $this;
    }

    /**
     * @param $interactionCount String
     */
    public function addInteractionCount($interactionCount)
    {
        $this->interactionCount []= $interactionCount;
        return $this;
    }

    /**
     * @param $isicV4 String
     */
    public function addIsicV4($isicV4)
    {
        $this->isicV4 []= $isicV4;
        return $this;
    }

    /**
     * @param $legalName String
     */
    public function addLegalName($legalName)
    {
        $this->legalName []= $legalName;
        return $this;
    }

    /**
     * @param $location Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|Robinzhao\SchemaOrg\Thing\Place
     */
    public function addLocation($location)
    {
        $this->location []= $location;
        return $this;
    }

    /**
     * @param $logo String|Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function addLogo($logo)
    {
        $this->logo []= $logo;
        return $this;
    }

    /**
     * @param $makesOffer Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    public function addMakesOffer($makesOffer)
    {
        $this->makesOffer []= $makesOffer;
        return $this;
    }

    /**
     * @param $member Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addMember($member)
    {
        $this->member []= $member;
        return $this;
    }

    /**
     * @param $members Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addMembers($members)
    {
        $this->members []= $members;
        return $this;
    }

    /**
     * @param $naics String
     */
    public function addNaics($naics)
    {
        $this->naics []= $naics;
        return $this;
    }

    /**
     * @param $owns Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\OwnershipInfo|Robinzhao\SchemaOrg\Thing\Product
     */
    public function addOwns($owns)
    {
        $this->owns []= $owns;
        return $this;
    }

    /**
     * @param $review Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    public function addReview($review)
    {
        $this->review []= $review;
        return $this;
    }

    /**
     * @param $reviews Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    public function addReviews($reviews)
    {
        $this->reviews []= $reviews;
        return $this;
    }

    /**
     * @param $seeks Robinzhao\SchemaOrg\Thing\Intangible\Demand
     */
    public function addSeeks($seeks)
    {
        $this->seeks []= $seeks;
        return $this;
    }

    /**
     * @param $subOrganization Robinzhao\SchemaOrg\Thing\Organization
     */
    public function addSubOrganization($subOrganization)
    {
        $this->subOrganization []= $subOrganization;
        return $this;
    }

    /**
     * @param $taxID String
     */
    public function addTaxID($taxID)
    {
        $this->taxID []= $taxID;
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

    /**
     * @param $vatID String
     */
    public function addVatID($vatID)
    {
        $this->vatID []= $vatID;
        return $this;
    }


}