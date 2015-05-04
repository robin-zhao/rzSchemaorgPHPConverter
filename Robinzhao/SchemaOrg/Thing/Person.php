<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing;

use Robinzhao\SchemaOrg\Thing;

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
    protected $additionalName;

    /**
     * Physical address of the item.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    protected $address;

    /**
     * An organization that this person is affiliated with. For example, a school/university, a club, or a team.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    protected $affiliation;

    /**
     * An educational organizations that the person is an alumni of.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization\EducationalOrganization
     */
    protected $alumniOf;

    /**
     * An award won by this person or for this creative work.
     *
     * @var String
     */
    protected $award;

    /**
     * Awards won by this person or for this creative work. (legacy spelling; see singular form, award)
     *
     * @var String
     */
    protected $awards;

    /**
     * Date of birth.
     *
     * @var DateTime
     */
    protected $birthDate;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Brand
     */
    protected $brand;

    /**
     * A child of the person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $children;

    /**
     * A colleague of the person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $colleague;

    /**
     * A colleague of the person (legacy spelling; see singular form, colleague).
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $colleagues;

    /**
     * A contact point for a person or organization.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
     */
    protected $contactPoint;

    /**
     * A contact point for a person or organization (legacy spelling; see singular form, contactPoint).
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
     */
    protected $contactPoints;

    /**
     * Date of death.
     *
     * @var DateTime
     */
    protected $deathDate;

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business person.
     *
     * @var String
     */
    protected $duns;

    /**
     * Email address.
     *
     * @var String
     */
    protected $email;

    /**
     * Family name. In the U.S., the last name of an Person. This can be used along with givenName instead of the Name property.
     *
     * @var String
     */
    protected $familyName;

    /**
     * The fax number.
     *
     * @var String
     */
    protected $faxNumber;

    /**
     * The most generic uni-directional social relation.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $follows;

    /**
     * Gender of the person.
     *
     * @var String
     */
    protected $gender;

    /**
     * Given name. In the U.S., the first name of a Person. This can be used along with familyName instead of the Name property.
     *
     * @var String
     */
    protected $givenName;

    /**
     * The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
     *
     * @var String
     */
    protected $globalLocationNumber;

    /**
     * Points-of-Sales operated by the organization or person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place
     */
    protected $hasPOS;

    /**
     * A contact location for a person's residence.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint|Robinzhao\SchemaOrg\Thing\Place
     */
    protected $homeLocation;

    /**
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
     *
     * @var String
     */
    protected $honorificPrefix;

    /**
     * An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
     *
     * @var String
     */
    protected $honorificSuffix;

    /**
     * A count of a specific user interactions with this item—for example, 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user interaction type should be one of the sub types of UserInteraction.
     *
     * @var String
     */
    protected $interactionCount;

    /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
     *
     * @var String
     */
    protected $isicV4;

    /**
     * The job title of the person (for example, Financial Manager).
     *
     * @var String
     */
    protected $jobTitle;

    /**
     * The most generic bi-directional social/work relation.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $knows;

    /**
     * A pointer to products or services offered by the organization or person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    protected $makesOffer;

    /**
     * An organization to which the person belongs.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    protected $memberOf;

    /**
     * The North American Industry Classification System (NAICS) code for a particular organization or business person.
     *
     * @var String
     */
    protected $naics;

    /**
     * Nationality of the person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea\Country
     */
    protected $nationality;

    /**
     * Products owned by the organization or person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\OwnershipInfo|Robinzhao\SchemaOrg\Thing\Product
     */
    protected $owns;

    /**
     * A parent of this person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $parent;

    /**
     * A parents of the person (legacy spelling; see singular form, parent).
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $parents;

    /**
     * Event that this person is a performer or participant in.
     *
     * @var Robinzhao\SchemaOrg\Thing\Event
     */
    protected $performerIn;

    /**
     * The most generic familial relation.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $relatedTo;

    /**
     * A pointer to products or services sought by the organization or person (demand).
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Demand
     */
    protected $seeks;

    /**
     * A sibling of the person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $sibling;

    /**
     * A sibling of the person (legacy spelling; see singular form, sibling).
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $siblings;

    /**
     * The person's spouse.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $spouse;

    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
     *
     * @var String
     */
    protected $taxID;

    /**
     * The telephone number.
     *
     * @var String
     */
    protected $telephone;

    /**
     * The Value-added Tax ID of the organisation or person.
     *
     * @var String
     */
    protected $vatID;

    /**
     * A contact location for a person's place of work.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint|Robinzhao\SchemaOrg\Thing\Place
     */
    protected $workLocation;

    /**
     * Organizations that the person works for.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    protected $worksFor;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Person";

    /**
     * @return String
     */
    public function getAdditionalName()
    {
        return $this->additionalName;
    }

    /**
     * @param $additionalName String
     */
    public function setAdditionalName($additionalName)
    {
        $this->additionalName = $additionalName;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param $address Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization
     */
    public function getAffiliation()
    {
        return $this->affiliation;
    }

    /**
     * @param $affiliation Robinzhao\SchemaOrg\Thing\Organization
     */
    public function setAffiliation($affiliation)
    {
        $this->affiliation = $affiliation;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization\EducationalOrganization
     */
    public function getAlumniOf()
    {
        return $this->alumniOf;
    }

    /**
     * @param $alumniOf Robinzhao\SchemaOrg\Thing\Organization\EducationalOrganization
     */
    public function setAlumniOf($alumniOf)
    {
        $this->alumniOf = $alumniOf;
        return $this;
    }

    /**
     * @return String
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * @param $award String
     */
    public function setAward($award)
    {
        $this->award = $award;
        return $this;
    }

    /**
     * @return String
     */
    public function getAwards()
    {
        return $this->awards;
    }

    /**
     * @param $awards String
     */
    public function setAwards($awards)
    {
        $this->awards = $awards;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param $birthDate DateTime
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param $brand Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param $children Robinzhao\SchemaOrg\Thing\Person
     */
    public function setChildren($children)
    {
        $this->children = $children;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getColleague()
    {
        return $this->colleague;
    }

    /**
     * @param $colleague Robinzhao\SchemaOrg\Thing\Person
     */
    public function setColleague($colleague)
    {
        $this->colleague = $colleague;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getColleagues()
    {
        return $this->colleagues;
    }

    /**
     * @param $colleagues Robinzhao\SchemaOrg\Thing\Person
     */
    public function setColleagues($colleagues)
    {
        $this->colleagues = $colleagues;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
     */
    public function getContactPoint()
    {
        return $this->contactPoint;
    }

    /**
     * @param $contactPoint Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
     */
    public function setContactPoint($contactPoint)
    {
        $this->contactPoint = $contactPoint;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
     */
    public function getContactPoints()
    {
        return $this->contactPoints;
    }

    /**
     * @param $contactPoints Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
     */
    public function setContactPoints($contactPoints)
    {
        $this->contactPoints = $contactPoints;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDeathDate()
    {
        return $this->deathDate;
    }

    /**
     * @param $deathDate DateTime
     */
    public function setDeathDate($deathDate)
    {
        $this->deathDate = $deathDate;
        return $this;
    }

    /**
     * @return String
     */
    public function getDuns()
    {
        return $this->duns;
    }

    /**
     * @param $duns String
     */
    public function setDuns($duns)
    {
        $this->duns = $duns;
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
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * @param $familyName String
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
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
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getFollows()
    {
        return $this->follows;
    }

    /**
     * @param $follows Robinzhao\SchemaOrg\Thing\Person
     */
    public function setFollows($follows)
    {
        $this->follows = $follows;
        return $this;
    }

    /**
     * @return String
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param $gender String
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return String
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * @param $givenName String
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
        return $this;
    }

    /**
     * @return String
     */
    public function getGlobalLocationNumber()
    {
        return $this->globalLocationNumber;
    }

    /**
     * @param $globalLocationNumber String
     */
    public function setGlobalLocationNumber($globalLocationNumber)
    {
        $this->globalLocationNumber = $globalLocationNumber;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Place
     */
    public function getHasPOS()
    {
        return $this->hasPOS;
    }

    /**
     * @param $hasPOS Robinzhao\SchemaOrg\Thing\Place
     */
    public function setHasPOS($hasPOS)
    {
        $this->hasPOS = $hasPOS;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint|Robinzhao\SchemaOrg\Thing\Place
     */
    public function getHomeLocation()
    {
        return $this->homeLocation;
    }

    /**
     * @param $homeLocation Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint|Robinzhao\SchemaOrg\Thing\Place
     */
    public function setHomeLocation($homeLocation)
    {
        $this->homeLocation = $homeLocation;
        return $this;
    }

    /**
     * @return String
     */
    public function getHonorificPrefix()
    {
        return $this->honorificPrefix;
    }

    /**
     * @param $honorificPrefix String
     */
    public function setHonorificPrefix($honorificPrefix)
    {
        $this->honorificPrefix = $honorificPrefix;
        return $this;
    }

    /**
     * @return String
     */
    public function getHonorificSuffix()
    {
        return $this->honorificSuffix;
    }

    /**
     * @param $honorificSuffix String
     */
    public function setHonorificSuffix($honorificSuffix)
    {
        $this->honorificSuffix = $honorificSuffix;
        return $this;
    }

    /**
     * @return String
     */
    public function getInteractionCount()
    {
        return $this->interactionCount;
    }

    /**
     * @param $interactionCount String
     */
    public function setInteractionCount($interactionCount)
    {
        $this->interactionCount = $interactionCount;
        return $this;
    }

    /**
     * @return String
     */
    public function getIsicV4()
    {
        return $this->isicV4;
    }

    /**
     * @param $isicV4 String
     */
    public function setIsicV4($isicV4)
    {
        $this->isicV4 = $isicV4;
        return $this;
    }

    /**
     * @return String
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @param $jobTitle String
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getKnows()
    {
        return $this->knows;
    }

    /**
     * @param $knows Robinzhao\SchemaOrg\Thing\Person
     */
    public function setKnows($knows)
    {
        $this->knows = $knows;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    public function getMakesOffer()
    {
        return $this->makesOffer;
    }

    /**
     * @param $makesOffer Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    public function setMakesOffer($makesOffer)
    {
        $this->makesOffer = $makesOffer;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization
     */
    public function getMemberOf()
    {
        return $this->memberOf;
    }

    /**
     * @param $memberOf Robinzhao\SchemaOrg\Thing\Organization
     */
    public function setMemberOf($memberOf)
    {
        $this->memberOf = $memberOf;
        return $this;
    }

    /**
     * @return String
     */
    public function getNaics()
    {
        return $this->naics;
    }

    /**
     * @param $naics String
     */
    public function setNaics($naics)
    {
        $this->naics = $naics;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea\Country
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @param $nationality Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea\Country
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\OwnershipInfo|Robinzhao\SchemaOrg\Thing\Product
     */
    public function getOwns()
    {
        return $this->owns;
    }

    /**
     * @param $owns Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\OwnershipInfo|Robinzhao\SchemaOrg\Thing\Product
     */
    public function setOwns($owns)
    {
        $this->owns = $owns;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param $parent Robinzhao\SchemaOrg\Thing\Person
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * @param $parents Robinzhao\SchemaOrg\Thing\Person
     */
    public function setParents($parents)
    {
        $this->parents = $parents;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Event
     */
    public function getPerformerIn()
    {
        return $this->performerIn;
    }

    /**
     * @param $performerIn Robinzhao\SchemaOrg\Thing\Event
     */
    public function setPerformerIn($performerIn)
    {
        $this->performerIn = $performerIn;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getRelatedTo()
    {
        return $this->relatedTo;
    }

    /**
     * @param $relatedTo Robinzhao\SchemaOrg\Thing\Person
     */
    public function setRelatedTo($relatedTo)
    {
        $this->relatedTo = $relatedTo;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Demand
     */
    public function getSeeks()
    {
        return $this->seeks;
    }

    /**
     * @param $seeks Robinzhao\SchemaOrg\Thing\Intangible\Demand
     */
    public function setSeeks($seeks)
    {
        $this->seeks = $seeks;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getSibling()
    {
        return $this->sibling;
    }

    /**
     * @param $sibling Robinzhao\SchemaOrg\Thing\Person
     */
    public function setSibling($sibling)
    {
        $this->sibling = $sibling;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getSiblings()
    {
        return $this->siblings;
    }

    /**
     * @param $siblings Robinzhao\SchemaOrg\Thing\Person
     */
    public function setSiblings($siblings)
    {
        $this->siblings = $siblings;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getSpouse()
    {
        return $this->spouse;
    }

    /**
     * @param $spouse Robinzhao\SchemaOrg\Thing\Person
     */
    public function setSpouse($spouse)
    {
        $this->spouse = $spouse;
        return $this;
    }

    /**
     * @return String
     */
    public function getTaxID()
    {
        return $this->taxID;
    }

    /**
     * @param $taxID String
     */
    public function setTaxID($taxID)
    {
        $this->taxID = $taxID;
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

    /**
     * @return String
     */
    public function getVatID()
    {
        return $this->vatID;
    }

    /**
     * @param $vatID String
     */
    public function setVatID($vatID)
    {
        $this->vatID = $vatID;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint|Robinzhao\SchemaOrg\Thing\Place
     */
    public function getWorkLocation()
    {
        return $this->workLocation;
    }

    /**
     * @param $workLocation Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint|Robinzhao\SchemaOrg\Thing\Place
     */
    public function setWorkLocation($workLocation)
    {
        $this->workLocation = $workLocation;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization
     */
    public function getWorksFor()
    {
        return $this->worksFor;
    }

    /**
     * @param $worksFor Robinzhao\SchemaOrg\Thing\Organization
     */
    public function setWorksFor($worksFor)
    {
        $this->worksFor = $worksFor;
        return $this;
    }

}
