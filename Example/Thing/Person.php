<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing;

use Example\Thing;

/**
 * Person
 * http://schema.org/Person
 */
class Person extends Thing
{

    /**
     * An additional name for a Person, can be used for a middle name.
     *
     * @var String
     */
    private $additionalName;

    /**
     * Physical address of the item.
     *
     * @var Example\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    private $address;

    /**
     * An organization that this person is affiliated with. For example, a school/university, a club, or a team.
     *
     * @var Example\Thing\Organization
     */
    private $affiliation;

    /**
     * An educational organizations that the person is an alumni of.
     *
     * @var Example\Thing\Organization\EducationalOrganization
     */
    private $alumniOf;

    /**
     * An award won by this person or for this creative work.
     *
     * @var String
     */
    private $award;

    /**
     * Awards won by this person or for this creative work. (legacy spelling; see singular form, award)
     *
     * @var String
     */
    private $awards;

    /**
     * Date of birth.
     *
     * @var DateTime
     */
    private $birthDate;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     *
     * @var Example\Thing\Organization|Example\Thing\Intangible\Brand
     */
    private $brand;

    /**
     * A child of the person.
     *
     * @var Example\Thing\Person
     */
    private $children;

    /**
     * A colleague of the person.
     *
     * @var Example\Thing\Person
     */
    private $colleague;

    /**
     * A colleague of the person (legacy spelling; see singular form, colleague).
     *
     * @var Example\Thing\Person
     */
    private $colleagues;

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
     * Date of death.
     *
     * @var DateTime
     */
    private $deathDate;

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
     * Family name. In the U.S., the last name of an Person. This can be used along with givenName instead of the Name property.
     *
     * @var String
     */
    private $familyName;

    /**
     * The fax number.
     *
     * @var String
     */
    private $faxNumber;

    /**
     * The most generic uni-directional social relation.
     *
     * @var Example\Thing\Person
     */
    private $follows;

    /**
     * Gender of the person.
     *
     * @var String
     */
    private $gender;

    /**
     * Given name. In the U.S., the first name of a Person. This can be used along with familyName instead of the Name property.
     *
     * @var String
     */
    private $givenName;

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
     * A contact location for a person's residence.
     *
     * @var Example\Thing\Intangible\StructuredValue\ContactPoint|Example\Thing\Place
     */
    private $homeLocation;

    /**
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
     *
     * @var String
     */
    private $honorificPrefix;

    /**
     * An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
     *
     * @var String
     */
    private $honorificSuffix;

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
     * The job title of the person (for example, Financial Manager).
     *
     * @var String
     */
    private $jobTitle;

    /**
     * The most generic bi-directional social/work relation.
     *
     * @var Example\Thing\Person
     */
    private $knows;

    /**
     * A pointer to products or services offered by the organization or person.
     *
     * @var Example\Thing\Intangible\Offer
     */
    private $makesOffer;

    /**
     * An organization to which the person belongs.
     *
     * @var Example\Thing\Organization
     */
    private $memberOf;

    /**
     * The North American Industry Classification System (NAICS) code for a particular organization or business person.
     *
     * @var String
     */
    private $naics;

    /**
     * Nationality of the person.
     *
     * @var Example\Thing\Place\AdministrativeArea\Country
     */
    private $nationality;

    /**
     * Products owned by the organization or person.
     *
     * @var Example\Thing\Intangible\StructuredValue\OwnershipInfo|Example\Thing\Product
     */
    private $owns;

    /**
     * A parent of this person.
     *
     * @var Example\Thing\Person
     */
    private $parent;

    /**
     * A parents of the person (legacy spelling; see singular form, parent).
     *
     * @var Example\Thing\Person
     */
    private $parents;

    /**
     * Event that this person is a performer or participant in.
     *
     * @var Example\Thing\Event
     */
    private $performerIn;

    /**
     * The most generic familial relation.
     *
     * @var Example\Thing\Person
     */
    private $relatedTo;

    /**
     * A pointer to products or services sought by the organization or person (demand).
     *
     * @var Example\Thing\Intangible\Demand
     */
    private $seeks;

    /**
     * A sibling of the person.
     *
     * @var Example\Thing\Person
     */
    private $sibling;

    /**
     * A sibling of the person (legacy spelling; see singular form, sibling).
     *
     * @var Example\Thing\Person
     */
    private $siblings;

    /**
     * The person's spouse.
     *
     * @var Example\Thing\Person
     */
    private $spouse;

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
     * A contact location for a person's place of work.
     *
     * @var Example\Thing\Intangible\StructuredValue\ContactPoint|Example\Thing\Place
     */
    private $workLocation;

    /**
     * Organizations that the person works for.
     *
     * @var Example\Thing\Organization
     */
    private $worksFor;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Person";

    public function getAdditionalName()
    {
        return $this->additionalName;
    }

    public function setAdditionalName($additionalName)
    {
        $this->additionalName = $additionalName;
        return $this;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function getAffiliation()
    {
        return $this->affiliation;
    }

    public function setAffiliation($affiliation)
    {
        $this->affiliation = $affiliation;
        return $this;
    }

    public function getAlumniOf()
    {
        return $this->alumniOf;
    }

    public function setAlumniOf($alumniOf)
    {
        $this->alumniOf = $alumniOf;
        return $this;
    }

    public function getAward()
    {
        return $this->award;
    }

    public function setAward($award)
    {
        $this->award = $award;
        return $this;
    }

    public function getAwards()
    {
        return $this->awards;
    }

    public function setAwards($awards)
    {
        $this->awards = $awards;
        return $this;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
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

    public function getChildren()
    {
        return $this->children;
    }

    public function setChildren($children)
    {
        $this->children = $children;
        return $this;
    }

    public function getColleague()
    {
        return $this->colleague;
    }

    public function setColleague($colleague)
    {
        $this->colleague = $colleague;
        return $this;
    }

    public function getColleagues()
    {
        return $this->colleagues;
    }

    public function setColleagues($colleagues)
    {
        $this->colleagues = $colleagues;
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

    public function getDeathDate()
    {
        return $this->deathDate;
    }

    public function setDeathDate($deathDate)
    {
        $this->deathDate = $deathDate;
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

    public function getFamilyName()
    {
        return $this->familyName;
    }

    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
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

    public function getFollows()
    {
        return $this->follows;
    }

    public function setFollows($follows)
    {
        $this->follows = $follows;
        return $this;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    public function getGivenName()
    {
        return $this->givenName;
    }

    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
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

    public function getHomeLocation()
    {
        return $this->homeLocation;
    }

    public function setHomeLocation($homeLocation)
    {
        $this->homeLocation = $homeLocation;
        return $this;
    }

    public function getHonorificPrefix()
    {
        return $this->honorificPrefix;
    }

    public function setHonorificPrefix($honorificPrefix)
    {
        $this->honorificPrefix = $honorificPrefix;
        return $this;
    }

    public function getHonorificSuffix()
    {
        return $this->honorificSuffix;
    }

    public function setHonorificSuffix($honorificSuffix)
    {
        $this->honorificSuffix = $honorificSuffix;
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

    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    public function getKnows()
    {
        return $this->knows;
    }

    public function setKnows($knows)
    {
        $this->knows = $knows;
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

    public function getMemberOf()
    {
        return $this->memberOf;
    }

    public function setMemberOf($memberOf)
    {
        $this->memberOf = $memberOf;
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

    public function getNationality()
    {
        return $this->nationality;
    }

    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
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

    public function getParent()
    {
        return $this->parent;
    }

    public function setParent($parent)
    {
        $this->parent = $parent;
        return $this;
    }

    public function getParents()
    {
        return $this->parents;
    }

    public function setParents($parents)
    {
        $this->parents = $parents;
        return $this;
    }

    public function getPerformerIn()
    {
        return $this->performerIn;
    }

    public function setPerformerIn($performerIn)
    {
        $this->performerIn = $performerIn;
        return $this;
    }

    public function getRelatedTo()
    {
        return $this->relatedTo;
    }

    public function setRelatedTo($relatedTo)
    {
        $this->relatedTo = $relatedTo;
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

    public function getSibling()
    {
        return $this->sibling;
    }

    public function setSibling($sibling)
    {
        $this->sibling = $sibling;
        return $this;
    }

    public function getSiblings()
    {
        return $this->siblings;
    }

    public function setSiblings($siblings)
    {
        $this->siblings = $siblings;
        return $this;
    }

    public function getSpouse()
    {
        return $this->spouse;
    }

    public function setSpouse($spouse)
    {
        $this->spouse = $spouse;
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

    public function getWorkLocation()
    {
        return $this->workLocation;
    }

    public function setWorkLocation($workLocation)
    {
        $this->workLocation = $workLocation;
        return $this;
    }

    public function getWorksFor()
    {
        return $this->worksFor;
    }

    public function setWorksFor($worksFor)
    {
        $this->worksFor = $worksFor;
        return $this;
    }

}
