<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing;

use Example\Thing;

/**
 * Organization
 * http://schema.org/Organization
 */
class Organization extends Thing
{

    /**
     * Physical address of the item.
     *
     * @var Example\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    private $address;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var Example\Thing\Intangible\Rating\AggregateRating
     */
    private $aggregateRating;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     *
     * @var Example\Thing\Organization|Example\Thing\Intangible\Brand
     */
    private $brand;

    /**
     * A contact point for a person or organization.
     *
     * @var Example\Thing\Intangible\StructuredValue\ContactPoint
     */
    private $contactPoint;

    /**
     * A contact point for a person or organization (legacy spelling; see singular form, contactPoint).
     *
     * @var Example\Thing\Intangible\StructuredValue\ContactPoint
     */
    private $contactPoints;

    /**
     * A relationship between an organization and a department of that organization, also described as an organization (allowing different urls, logos, opening hours). For example: a store with a pharmacy, or a bakery with a cafe.
     *
     * @var Example\Thing\Organization
     */
    private $department;

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business person.
     *
     * @var String
     */
    private $duns;

    /**
     * Email address.
     *
     * @var String
     */
    private $email;

    /**
     * Someone working for this organization.
     *
     * @var Example\Thing\Person
     */
    private $employee;

    /**
     * People working for this organization. (legacy spelling; see singular form, employee)
     *
     * @var Example\Thing\Person
     */
    private $employees;

    /**
     * Upcoming or past event associated with this place or organization.
     *
     * @var Example\Thing\Event
     */
    private $event;

    /**
     * Upcoming or past events associated with this place or organization (legacy spelling; see singular form, event).
     *
     * @var Example\Thing\Event
     */
    private $events;

    /**
     * The fax number.
     *
     * @var String
     */
    private $faxNumber;

    /**
     * A person who founded this organization.
     *
     * @var Example\Thing\Person
     */
    private $founder;

    /**
     * A person who founded this organization (legacy spelling; see singular form, founder).
     *
     * @var Example\Thing\Person
     */
    private $founders;

    /**
     * The date that this organization was founded.
     *
     * @var DateTime
     */
    private $foundingDate;

    /**
     * The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
     *
     * @var String
     */
    private $globalLocationNumber;

    /**
     * Points-of-Sales operated by the organization or person.
     *
     * @var Example\Thing\Place
     */
    private $hasPOS;

    /**
     * A count of a specific user interactions with this item—for example, 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user interaction type should be one of the sub types of UserInteraction.
     *
     * @var String
     */
    private $interactionCount;

    /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
     *
     * @var String
     */
    private $isicV4;

    /**
     * The official name of the organization, e.g. the registered company name.
     *
     * @var String
     */
    private $legalName;

    /**
     * The location of the event, organization or action.
     *
     * @var Example\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|Example\Thing\Place
     */
    private $location;

    /**
     * A logo associated with an organization.
     *
     * @var String|Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    private $logo;

    /**
     * A pointer to products or services offered by the organization or person.
     *
     * @var Example\Thing\Intangible\Offer
     */
    private $makesOffer;

    /**
     * A member of this organization.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $member;

    /**
     * A member of this organization (legacy spelling; see singular form, member).
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $members;

    /**
     * The North American Industry Classification System (NAICS) code for a particular organization or business person.
     *
     * @var String
     */
    private $naics;

    /**
     * Products owned by the organization or person.
     *
     * @var Example\Thing\Intangible\StructuredValue\OwnershipInfo|Example\Thing\Product
     */
    private $owns;

    /**
     * A review of the item.
     *
     * @var Example\Thing\CreativeWork\Review
     */
    private $review;

    /**
     * Review of the item (legacy spelling; see singular form, review).
     *
     * @var Example\Thing\CreativeWork\Review
     */
    private $reviews;

    /**
     * A pointer to products or services sought by the organization or person (demand).
     *
     * @var Example\Thing\Intangible\Demand
     */
    private $seeks;

    /**
     * A relationship between two organizations where the first includes the second, e.g., as a subsidiary. See also: the more specific 'department' property.
     *
     * @var Example\Thing\Organization
     */
    private $subOrganization;

    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
     *
     * @var String
     */
    private $taxID;

    /**
     * The telephone number.
     *
     * @var String
     */
    private $telephone;

    /**
     * The Value-added Tax ID of the organisation or person.
     *
     * @var String
     */
    private $vatID;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Organization";

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    public function setAggregateRating($aggregateRating)
    {
        $this->aggregateRating = $aggregateRating;
        return $this;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    public function getContactPoint()
    {
        return $this->contactPoint;
    }

    public function setContactPoint($contactPoint)
    {
        $this->contactPoint = $contactPoint;
        return $this;
    }

    public function getContactPoints()
    {
        return $this->contactPoints;
    }

    public function setContactPoints($contactPoints)
    {
        $this->contactPoints = $contactPoints;
        return $this;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    public function setDepartment($department)
    {
        $this->department = $department;
        return $this;
    }

    public function getDuns()
    {
        return $this->duns;
    }

    public function setDuns($duns)
    {
        $this->duns = $duns;
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

    public function getEmployee()
    {
        return $this->employee;
    }

    public function setEmployee($employee)
    {
        $this->employee = $employee;
        return $this;
    }

    public function getEmployees()
    {
        return $this->employees;
    }

    public function setEmployees($employees)
    {
        $this->employees = $employees;
        return $this;
    }

    public function getEvent()
    {
        return $this->event;
    }

    public function setEvent($event)
    {
        $this->event = $event;
        return $this;
    }

    public function getEvents()
    {
        return $this->events;
    }

    public function setEvents($events)
    {
        $this->events = $events;
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

    public function getFounder()
    {
        return $this->founder;
    }

    public function setFounder($founder)
    {
        $this->founder = $founder;
        return $this;
    }

    public function getFounders()
    {
        return $this->founders;
    }

    public function setFounders($founders)
    {
        $this->founders = $founders;
        return $this;
    }

    public function getFoundingDate()
    {
        return $this->foundingDate;
    }

    public function setFoundingDate($foundingDate)
    {
        $this->foundingDate = $foundingDate;
        return $this;
    }

    public function getGlobalLocationNumber()
    {
        return $this->globalLocationNumber;
    }

    public function setGlobalLocationNumber($globalLocationNumber)
    {
        $this->globalLocationNumber = $globalLocationNumber;
        return $this;
    }

    public function getHasPOS()
    {
        return $this->hasPOS;
    }

    public function setHasPOS($hasPOS)
    {
        $this->hasPOS = $hasPOS;
        return $this;
    }

    public function getInteractionCount()
    {
        return $this->interactionCount;
    }

    public function setInteractionCount($interactionCount)
    {
        $this->interactionCount = $interactionCount;
        return $this;
    }

    public function getIsicV4()
    {
        return $this->isicV4;
    }

    public function setIsicV4($isicV4)
    {
        $this->isicV4 = $isicV4;
        return $this;
    }

    public function getLegalName()
    {
        return $this->legalName;
    }

    public function setLegalName($legalName)
    {
        $this->legalName = $legalName;
        return $this;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

    public function getMakesOffer()
    {
        return $this->makesOffer;
    }

    public function setMakesOffer($makesOffer)
    {
        $this->makesOffer = $makesOffer;
        return $this;
    }

    public function getMember()
    {
        return $this->member;
    }

    public function setMember($member)
    {
        $this->member = $member;
        return $this;
    }

    public function getMembers()
    {
        return $this->members;
    }

    public function setMembers($members)
    {
        $this->members = $members;
        return $this;
    }

    public function getNaics()
    {
        return $this->naics;
    }

    public function setNaics($naics)
    {
        $this->naics = $naics;
        return $this;
    }

    public function getOwns()
    {
        return $this->owns;
    }

    public function setOwns($owns)
    {
        $this->owns = $owns;
        return $this;
    }

    public function getReview()
    {
        return $this->review;
    }

    public function setReview($review)
    {
        $this->review = $review;
        return $this;
    }

    public function getReviews()
    {
        return $this->reviews;
    }

    public function setReviews($reviews)
    {
        $this->reviews = $reviews;
        return $this;
    }

    public function getSeeks()
    {
        return $this->seeks;
    }

    public function setSeeks($seeks)
    {
        $this->seeks = $seeks;
        return $this;
    }

    public function getSubOrganization()
    {
        return $this->subOrganization;
    }

    public function setSubOrganization($subOrganization)
    {
        $this->subOrganization = $subOrganization;
        return $this;
    }

    public function getTaxID()
    {
        return $this->taxID;
    }

    public function setTaxID($taxID)
    {
        $this->taxID = $taxID;
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

    public function getVatID()
    {
        return $this->vatID;
    }

    public function setVatID($vatID)
    {
        $this->vatID = $vatID;
        return $this;
    }

}
