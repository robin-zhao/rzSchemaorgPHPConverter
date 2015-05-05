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
    public $additionalName;

    /**
     * Physical address of the item.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public $address;

    /**
     * An organization that this person is affiliated with. For example, a school/university, a club, or a team.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    public $affiliation;

    /**
     * An educational organizations that the person is an alumni of.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization\EducationalOrganization
     */
    public $alumniOf;

    /**
     * An award won by this person or for this creative work.
     *
     * @var String
     */
    public $award;

    /**
     * Awards won by this person or for this creative work. (legacy spelling; see singular form, award)
     *
     * @var String
     */
    public $awards;

    /**
     * Date of birth.
     *
     * @var DateTime
     */
    public $birthDate;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Brand
     */
    public $brand;

    /**
     * A child of the person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $children;

    /**
     * A colleague of the person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $colleague;

    /**
     * A colleague of the person (legacy spelling; see singular form, colleague).
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $colleagues;

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
     * Date of death.
     *
     * @var DateTime
     */
    public $deathDate;

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
     * Family name. In the U.S., the last name of an Person. This can be used along with givenName instead of the Name property.
     *
     * @var String
     */
    public $familyName;

    /**
     * The fax number.
     *
     * @var String
     */
    public $faxNumber;

    /**
     * The most generic uni-directional social relation.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $follows;

    /**
     * Gender of the person.
     *
     * @var String
     */
    public $gender;

    /**
     * Given name. In the U.S., the first name of a Person. This can be used along with familyName instead of the Name property.
     *
     * @var String
     */
    public $givenName;

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
     * A contact location for a person's residence.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint|Robinzhao\SchemaOrg\Thing\Place
     */
    public $homeLocation;

    /**
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
     *
     * @var String
     */
    public $honorificPrefix;

    /**
     * An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
     *
     * @var String
     */
    public $honorificSuffix;

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
     * The job title of the person (for example, Financial Manager).
     *
     * @var String
     */
    public $jobTitle;

    /**
     * The most generic bi-directional social/work relation.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $knows;

    /**
     * A pointer to products or services offered by the organization or person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    public $makesOffer;

    /**
     * An organization to which the person belongs.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    public $memberOf;

    /**
     * The North American Industry Classification System (NAICS) code for a particular organization or business person.
     *
     * @var String
     */
    public $naics;

    /**
     * Nationality of the person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea\Country
     */
    public $nationality;

    /**
     * Products owned by the organization or person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\OwnershipInfo|Robinzhao\SchemaOrg\Thing\Product
     */
    public $owns;

    /**
     * A parent of this person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $parent;

    /**
     * A parents of the person (legacy spelling; see singular form, parent).
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $parents;

    /**
     * Event that this person is a performer or participant in.
     *
     * @var Robinzhao\SchemaOrg\Thing\Event
     */
    public $performerIn;

    /**
     * The most generic familial relation.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $relatedTo;

    /**
     * A pointer to products or services sought by the organization or person (demand).
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Demand
     */
    public $seeks;

    /**
     * A sibling of the person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $sibling;

    /**
     * A sibling of the person (legacy spelling; see singular form, sibling).
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $siblings;

    /**
     * The person's spouse.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $spouse;

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
     * A contact location for a person's place of work.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint|Robinzhao\SchemaOrg\Thing\Place
     */
    public $workLocation;

    /**
     * Organizations that the person works for.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    public $worksFor;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Person";

    /**
     * @param $additionalName String
     */
    public function addAdditionalName($additionalName)
    {
        $this->additionalName []= $additionalName;
        return $this;
    }

    /**
     * @param $address Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function addAddress($address)
    {
        $this->address []= $address;
        return $this;
    }

    /**
     * @param $affiliation Robinzhao\SchemaOrg\Thing\Organization
     */
    public function addAffiliation($affiliation)
    {
        $this->affiliation []= $affiliation;
        return $this;
    }

    /**
     * @param $alumniOf Robinzhao\SchemaOrg\Thing\Organization\EducationalOrganization
     */
    public function addAlumniOf($alumniOf)
    {
        $this->alumniOf []= $alumniOf;
        return $this;
    }

    /**
     * @param $award String
     */
    public function addAward($award)
    {
        $this->award []= $award;
        return $this;
    }

    /**
     * @param $awards String
     */
    public function addAwards($awards)
    {
        $this->awards []= $awards;
        return $this;
    }

    /**
     * @param $birthDate DateTime
     */
    public function addBirthDate($birthDate)
    {
        $this->birthDate []= $birthDate;
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
     * @param $children Robinzhao\SchemaOrg\Thing\Person
     */
    public function addChildren($children)
    {
        $this->children []= $children;
        return $this;
    }

    /**
     * @param $colleague Robinzhao\SchemaOrg\Thing\Person
     */
    public function addColleague($colleague)
    {
        $this->colleague []= $colleague;
        return $this;
    }

    /**
     * @param $colleagues Robinzhao\SchemaOrg\Thing\Person
     */
    public function addColleagues($colleagues)
    {
        $this->colleagues []= $colleagues;
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
     * @param $deathDate DateTime
     */
    public function addDeathDate($deathDate)
    {
        $this->deathDate []= $deathDate;
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
     * @param $familyName String
     */
    public function addFamilyName($familyName)
    {
        $this->familyName []= $familyName;
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
     * @param $follows Robinzhao\SchemaOrg\Thing\Person
     */
    public function addFollows($follows)
    {
        $this->follows []= $follows;
        return $this;
    }

    /**
     * @param $gender String
     */
    public function addGender($gender)
    {
        $this->gender []= $gender;
        return $this;
    }

    /**
     * @param $givenName String
     */
    public function addGivenName($givenName)
    {
        $this->givenName []= $givenName;
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
     * @param $homeLocation Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint|Robinzhao\SchemaOrg\Thing\Place
     */
    public function addHomeLocation($homeLocation)
    {
        $this->homeLocation []= $homeLocation;
        return $this;
    }

    /**
     * @param $honorificPrefix String
     */
    public function addHonorificPrefix($honorificPrefix)
    {
        $this->honorificPrefix []= $honorificPrefix;
        return $this;
    }

    /**
     * @param $honorificSuffix String
     */
    public function addHonorificSuffix($honorificSuffix)
    {
        $this->honorificSuffix []= $honorificSuffix;
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
     * @param $jobTitle String
     */
    public function addJobTitle($jobTitle)
    {
        $this->jobTitle []= $jobTitle;
        return $this;
    }

    /**
     * @param $knows Robinzhao\SchemaOrg\Thing\Person
     */
    public function addKnows($knows)
    {
        $this->knows []= $knows;
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
     * @param $memberOf Robinzhao\SchemaOrg\Thing\Organization
     */
    public function addMemberOf($memberOf)
    {
        $this->memberOf []= $memberOf;
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
     * @param $nationality Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea\Country
     */
    public function addNationality($nationality)
    {
        $this->nationality []= $nationality;
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
     * @param $parent Robinzhao\SchemaOrg\Thing\Person
     */
    public function addParent($parent)
    {
        $this->parent []= $parent;
        return $this;
    }

    /**
     * @param $parents Robinzhao\SchemaOrg\Thing\Person
     */
    public function addParents($parents)
    {
        $this->parents []= $parents;
        return $this;
    }

    /**
     * @param $performerIn Robinzhao\SchemaOrg\Thing\Event
     */
    public function addPerformerIn($performerIn)
    {
        $this->performerIn []= $performerIn;
        return $this;
    }

    /**
     * @param $relatedTo Robinzhao\SchemaOrg\Thing\Person
     */
    public function addRelatedTo($relatedTo)
    {
        $this->relatedTo []= $relatedTo;
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
     * @param $sibling Robinzhao\SchemaOrg\Thing\Person
     */
    public function addSibling($sibling)
    {
        $this->sibling []= $sibling;
        return $this;
    }

    /**
     * @param $siblings Robinzhao\SchemaOrg\Thing\Person
     */
    public function addSiblings($siblings)
    {
        $this->siblings []= $siblings;
        return $this;
    }

    /**
     * @param $spouse Robinzhao\SchemaOrg\Thing\Person
     */
    public function addSpouse($spouse)
    {
        $this->spouse []= $spouse;
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

    /**
     * @param $workLocation Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint|Robinzhao\SchemaOrg\Thing\Place
     */
    public function addWorkLocation($workLocation)
    {
        $this->workLocation []= $workLocation;
        return $this;
    }

    /**
     * @param $worksFor Robinzhao\SchemaOrg\Thing\Organization
     */
    public function addWorksFor($worksFor)
    {
        $this->worksFor []= $worksFor;
        return $this;
    }

}
