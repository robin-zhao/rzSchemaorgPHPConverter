<?php

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

    public function getaddress()
    {
        return $this->address;
    }

    public function setaddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function getaggregateRating()
    {
        return $this->aggregateRating;
    }

    public function setaggregateRating($aggregateRating)
    {
        $this->aggregateRating = $aggregateRating;
        return $this;
    }

    public function getbrand()
    {
        return $this->brand;
    }

    public function setbrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    public function getcontactPoint()
    {
        return $this->contactPoint;
    }

    public function setcontactPoint($contactPoint)
    {
        $this->contactPoint = $contactPoint;
        return $this;
    }

    public function getcontactPoints()
    {
        return $this->contactPoints;
    }

    public function setcontactPoints($contactPoints)
    {
        $this->contactPoints = $contactPoints;
        return $this;
    }

    public function getdepartment()
    {
        return $this->department;
    }

    public function setdepartment($department)
    {
        $this->department = $department;
        return $this;
    }

    public function getduns()
    {
        return $this->duns;
    }

    public function setduns($duns)
    {
        $this->duns = $duns;
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

    public function getemployee()
    {
        return $this->employee;
    }

    public function setemployee($employee)
    {
        $this->employee = $employee;
        return $this;
    }

    public function getemployees()
    {
        return $this->employees;
    }

    public function setemployees($employees)
    {
        $this->employees = $employees;
        return $this;
    }

    public function getevent()
    {
        return $this->event;
    }

    public function setevent($event)
    {
        $this->event = $event;
        return $this;
    }

    public function getevents()
    {
        return $this->events;
    }

    public function setevents($events)
    {
        $this->events = $events;
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

    public function getfounder()
    {
        return $this->founder;
    }

    public function setfounder($founder)
    {
        $this->founder = $founder;
        return $this;
    }

    public function getfounders()
    {
        return $this->founders;
    }

    public function setfounders($founders)
    {
        $this->founders = $founders;
        return $this;
    }

    public function getfoundingDate()
    {
        return $this->foundingDate;
    }

    public function setfoundingDate($foundingDate)
    {
        $this->foundingDate = $foundingDate;
        return $this;
    }

    public function getglobalLocationNumber()
    {
        return $this->globalLocationNumber;
    }

    public function setglobalLocationNumber($globalLocationNumber)
    {
        $this->globalLocationNumber = $globalLocationNumber;
        return $this;
    }

    public function gethasPOS()
    {
        return $this->hasPOS;
    }

    public function sethasPOS($hasPOS)
    {
        $this->hasPOS = $hasPOS;
        return $this;
    }

    public function getinteractionCount()
    {
        return $this->interactionCount;
    }

    public function setinteractionCount($interactionCount)
    {
        $this->interactionCount = $interactionCount;
        return $this;
    }

    public function getisicV4()
    {
        return $this->isicV4;
    }

    public function setisicV4($isicV4)
    {
        $this->isicV4 = $isicV4;
        return $this;
    }

    public function getlegalName()
    {
        return $this->legalName;
    }

    public function setlegalName($legalName)
    {
        $this->legalName = $legalName;
        return $this;
    }

    public function getlocation()
    {
        return $this->location;
    }

    public function setlocation($location)
    {
        $this->location = $location;
        return $this;
    }

    public function getlogo()
    {
        return $this->logo;
    }

    public function setlogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

    public function getmakesOffer()
    {
        return $this->makesOffer;
    }

    public function setmakesOffer($makesOffer)
    {
        $this->makesOffer = $makesOffer;
        return $this;
    }

    public function getmember()
    {
        return $this->member;
    }

    public function setmember($member)
    {
        $this->member = $member;
        return $this;
    }

    public function getmembers()
    {
        return $this->members;
    }

    public function setmembers($members)
    {
        $this->members = $members;
        return $this;
    }

    public function getnaics()
    {
        return $this->naics;
    }

    public function setnaics($naics)
    {
        $this->naics = $naics;
        return $this;
    }

    public function getowns()
    {
        return $this->owns;
    }

    public function setowns($owns)
    {
        $this->owns = $owns;
        return $this;
    }

    public function getreview()
    {
        return $this->review;
    }

    public function setreview($review)
    {
        $this->review = $review;
        return $this;
    }

    public function getreviews()
    {
        return $this->reviews;
    }

    public function setreviews($reviews)
    {
        $this->reviews = $reviews;
        return $this;
    }

    public function getseeks()
    {
        return $this->seeks;
    }

    public function setseeks($seeks)
    {
        $this->seeks = $seeks;
        return $this;
    }

    public function getsubOrganization()
    {
        return $this->subOrganization;
    }

    public function setsubOrganization($subOrganization)
    {
        $this->subOrganization = $subOrganization;
        return $this;
    }

    public function gettaxID()
    {
        return $this->taxID;
    }

    public function settaxID($taxID)
    {
        $this->taxID = $taxID;
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

    public function getvatID()
    {
        return $this->vatID;
    }

    public function setvatID($vatID)
    {
        $this->vatID = $vatID;
        return $this;
    }

}
