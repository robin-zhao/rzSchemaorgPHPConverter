<?php

namespace Example\Thing;

use Example\Thing;

/**
 * Creative Work
 * http://schema.org/CreativeWork
 */
class CreativeWork extends Thing
{

    /**
     * The subject matter of the content.
     *
     * @var Example\Thing
     */
    private $about;

    /**
     * Indicates that the resource is compatible with the referenced accessibility API (WebSchemas wiki lists possible values).
     
     *
     * @var String
     */
    private $accessibilityAPI;

    /**
     * Identifies input methods that are sufficient to fully control the described resource (WebSchemas wiki lists possible values).
     *
     * @var String
     */
    private $accessibilityControl;

    /**
     * Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility (WebSchemas wiki lists possible values).
     *
     * @var String
     */
    private $accessibilityFeature;

    /**
     * A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3. (WebSchemas wiki lists possible values)
     *
     * @var String
     */
    private $accessibilityHazard;

    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     *
     * @var Example\Thing\Person
     */
    private $accountablePerson;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var Example\Thing\Intangible\Rating\AggregateRating
     */
    private $aggregateRating;

    /**
     * A secondary title of the CreativeWork.
     *
     * @var String
     */
    private $alternativeHeadline;

    /**
     * The media objects that encode this creative work. This property is a synonym for encodings.
     *
     * @var Example\Thing\CreativeWork\MediaObject
     */
    private $associatedMedia;

    /**
     * The intended audience of the item, i.e. the group for whom the item was created.
     *
     * @var Example\Thing\Intangible\Audience
     */
    private $audience;

    /**
     * An embedded audio object.
     *
     * @var Example\Thing\CreativeWork\MediaObject\AudioObject
     */
    private $audio;

    /**
     * The author of this content. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $author;

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
     * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
     *
     * @var Example\Thing\CreativeWork|String
     */
    private $citation;

    /**
     * Comments, typically from users, on this CreativeWork.
     *
     * @var Example\Thing\Event\UserInteraction\UserComments
     */
    private $comment;

    /**
     * The location of the content.
     *
     * @var Example\Thing\Place
     */
    private $contentLocation;

    /**
     * Official rating of a piece of content—for example,'MPAA PG-13'.
     *
     * @var String
     */
    private $contentRating;

    /**
     * A secondary contributor to the CreativeWork.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $contributor;

    /**
     * The party holding the legal copyright to the CreativeWork.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $copyrightHolder;

    /**
     * The year during which the claimed copyright for the CreativeWork was first asserted.
     *
     * @var Float
     */
    private $copyrightYear;

    /**
     * The creator/author of this CreativeWork or UserComments. This is the same as the Author property for CreativeWork.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $creator;

    /**
     * The date on which the CreativeWork was created.
     *
     * @var DateTime
     */
    private $dateCreated;

    /**
     * The date on which the CreativeWork was most recently modified.
     *
     * @var DateTime
     */
    private $dateModified;

    /**
     * Date of first broadcast/publication.
     *
     * @var DateTime
     */
    private $datePublished;

    /**
     * A link to the page containing the comments of the CreativeWork.
     *
     * @var String
     */
    private $discussionUrl;

    /**
     * Specifies the Person who edited the CreativeWork.
     *
     * @var Example\Thing\Person
     */
    private $editor;

    /**
     * An alignment to an established educational framework.
     *
     * @var Example\Thing\Intangible\AlignmentObject
     */
    private $educationalAlignment;

    /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     *
     * @var String
     */
    private $educationalUse;

    /**
     * A media object that encode this CreativeWork.
     *
     * @var Example\Thing\CreativeWork\MediaObject
     */
    private $encoding;

    /**
     * The media objects that encode this creative work (legacy spelling; see singular form, encoding).
     *
     * @var Example\Thing\CreativeWork\MediaObject
     */
    private $encodings;

    /**
     * Genre of the creative work
     *
     * @var String
     */
    private $genre;

    /**
     * Headline of the article
     *
     * @var String
     */
    private $headline;

    /**
     * The language of the content. please use one of the language codes from the IETF BCP 47 standard.
     *
     * @var String
     */
    private $inLanguage;

    /**
     * A count of a specific user interactions with this item—for example, 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user interaction type should be one of the sub types of UserInteraction.
     *
     * @var String
     */
    private $interactionCount;

    /**
     * The predominant mode of learning supported by the learning resource. Acceptable values are 'active', 'expositive', or 'mixed'.
     *
     * @var String
     */
    private $interactivityType;

    /**
     * A resource that was used in the creation of this resource. This term can be repeated for multiple sources. For example, http://example.com/great-multiplication-intro.html
     *
     * @var String
     */
    private $isBasedOnUrl;

    /**
     * Indicates whether this content is family friendly.
     *
     * @var Boolean
     */
    private $isFamilyFriendly;

    /**
     * The keywords/tags used to describe this content.
     *
     * @var String
     */
    private $keywords;

    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     *
     * @var String
     */
    private $learningResourceType;

    /**
     * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
     *
     * @var Example\Thing
     */
    private $mentions;

    /**
     * An offer to transfer some rights to an item or to provide a service—for example, an offer to sell tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to repair a motorcycle, or to loan a book.
     *
     * @var Example\Thing\Intangible\Offer
     */
    private $offers;

    /**
     * The organization or agency that is providing the service.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $provider;

    /**
     * The publisher of the creative work.
     *
     * @var Example\Thing\Organization
     */
    private $publisher;

    /**
     * Link to page describing the editorial principles of the organization primarily responsible for the creation of the CreativeWork.
     *
     * @var String
     */
    private $publishingPrinciples;

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
     * The Organization on whose behalf the creator was working.
     *
     * @var Example\Thing\Organization
     */
    private $sourceOrganization;

    /**
     * The textual content of this CreativeWork.
     *
     * @var String
     */
    private $text;

    /**
     * A thumbnail image relevant to the Thing.
     *
     * @var String
     */
    private $thumbnailUrl;

    /**
     * Approximate or typical time it takes to work with or through this learning resource for the typical intended target audience, e.g. 'P30M', 'P1H25M'.
     *
     * @var Example\Thing\Intangible\Quantity\Duration
     */
    private $timeRequired;

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     * @var String
     */
    private $typicalAgeRange;

    /**
     * The version of the CreativeWork embodied by a specified resource.
     *
     * @var Float
     */
    private $version;

    /**
     * An embedded video object.
     *
     * @var Example\Thing\CreativeWork\MediaObject\VideoObject
     */
    private $video;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/CreativeWork";

    public function getabout()
    {
        return $this->about;
    }

    public function setabout($about)
    {
        $this->about = $about;
        return $this;
    }

    public function getaccessibilityAPI()
    {
        return $this->accessibilityAPI;
    }

    public function setaccessibilityAPI($accessibilityAPI)
    {
        $this->accessibilityAPI = $accessibilityAPI;
        return $this;
    }

    public function getaccessibilityControl()
    {
        return $this->accessibilityControl;
    }

    public function setaccessibilityControl($accessibilityControl)
    {
        $this->accessibilityControl = $accessibilityControl;
        return $this;
    }

    public function getaccessibilityFeature()
    {
        return $this->accessibilityFeature;
    }

    public function setaccessibilityFeature($accessibilityFeature)
    {
        $this->accessibilityFeature = $accessibilityFeature;
        return $this;
    }

    public function getaccessibilityHazard()
    {
        return $this->accessibilityHazard;
    }

    public function setaccessibilityHazard($accessibilityHazard)
    {
        $this->accessibilityHazard = $accessibilityHazard;
        return $this;
    }

    public function getaccountablePerson()
    {
        return $this->accountablePerson;
    }

    public function setaccountablePerson($accountablePerson)
    {
        $this->accountablePerson = $accountablePerson;
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

    public function getalternativeHeadline()
    {
        return $this->alternativeHeadline;
    }

    public function setalternativeHeadline($alternativeHeadline)
    {
        $this->alternativeHeadline = $alternativeHeadline;
        return $this;
    }

    public function getassociatedMedia()
    {
        return $this->associatedMedia;
    }

    public function setassociatedMedia($associatedMedia)
    {
        $this->associatedMedia = $associatedMedia;
        return $this;
    }

    public function getaudience()
    {
        return $this->audience;
    }

    public function setaudience($audience)
    {
        $this->audience = $audience;
        return $this;
    }

    public function getaudio()
    {
        return $this->audio;
    }

    public function setaudio($audio)
    {
        $this->audio = $audio;
        return $this;
    }

    public function getauthor()
    {
        return $this->author;
    }

    public function setauthor($author)
    {
        $this->author = $author;
        return $this;
    }

    public function getaward()
    {
        return $this->award;
    }

    public function setaward($award)
    {
        $this->award = $award;
        return $this;
    }

    public function getawards()
    {
        return $this->awards;
    }

    public function setawards($awards)
    {
        $this->awards = $awards;
        return $this;
    }

    public function getcitation()
    {
        return $this->citation;
    }

    public function setcitation($citation)
    {
        $this->citation = $citation;
        return $this;
    }

    public function getcomment()
    {
        return $this->comment;
    }

    public function setcomment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    public function getcontentLocation()
    {
        return $this->contentLocation;
    }

    public function setcontentLocation($contentLocation)
    {
        $this->contentLocation = $contentLocation;
        return $this;
    }

    public function getcontentRating()
    {
        return $this->contentRating;
    }

    public function setcontentRating($contentRating)
    {
        $this->contentRating = $contentRating;
        return $this;
    }

    public function getcontributor()
    {
        return $this->contributor;
    }

    public function setcontributor($contributor)
    {
        $this->contributor = $contributor;
        return $this;
    }

    public function getcopyrightHolder()
    {
        return $this->copyrightHolder;
    }

    public function setcopyrightHolder($copyrightHolder)
    {
        $this->copyrightHolder = $copyrightHolder;
        return $this;
    }

    public function getcopyrightYear()
    {
        return $this->copyrightYear;
    }

    public function setcopyrightYear($copyrightYear)
    {
        $this->copyrightYear = $copyrightYear;
        return $this;
    }

    public function getcreator()
    {
        return $this->creator;
    }

    public function setcreator($creator)
    {
        $this->creator = $creator;
        return $this;
    }

    public function getdateCreated()
    {
        return $this->dateCreated;
    }

    public function setdateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    public function getdateModified()
    {
        return $this->dateModified;
    }

    public function setdateModified($dateModified)
    {
        $this->dateModified = $dateModified;
        return $this;
    }

    public function getdatePublished()
    {
        return $this->datePublished;
    }

    public function setdatePublished($datePublished)
    {
        $this->datePublished = $datePublished;
        return $this;
    }

    public function getdiscussionUrl()
    {
        return $this->discussionUrl;
    }

    public function setdiscussionUrl($discussionUrl)
    {
        $this->discussionUrl = $discussionUrl;
        return $this;
    }

    public function geteditor()
    {
        return $this->editor;
    }

    public function seteditor($editor)
    {
        $this->editor = $editor;
        return $this;
    }

    public function geteducationalAlignment()
    {
        return $this->educationalAlignment;
    }

    public function seteducationalAlignment($educationalAlignment)
    {
        $this->educationalAlignment = $educationalAlignment;
        return $this;
    }

    public function geteducationalUse()
    {
        return $this->educationalUse;
    }

    public function seteducationalUse($educationalUse)
    {
        $this->educationalUse = $educationalUse;
        return $this;
    }

    public function getencoding()
    {
        return $this->encoding;
    }

    public function setencoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }

    public function getencodings()
    {
        return $this->encodings;
    }

    public function setencodings($encodings)
    {
        $this->encodings = $encodings;
        return $this;
    }

    public function getgenre()
    {
        return $this->genre;
    }

    public function setgenre($genre)
    {
        $this->genre = $genre;
        return $this;
    }

    public function getheadline()
    {
        return $this->headline;
    }

    public function setheadline($headline)
    {
        $this->headline = $headline;
        return $this;
    }

    public function getinLanguage()
    {
        return $this->inLanguage;
    }

    public function setinLanguage($inLanguage)
    {
        $this->inLanguage = $inLanguage;
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

    public function getinteractivityType()
    {
        return $this->interactivityType;
    }

    public function setinteractivityType($interactivityType)
    {
        $this->interactivityType = $interactivityType;
        return $this;
    }

    public function getisBasedOnUrl()
    {
        return $this->isBasedOnUrl;
    }

    public function setisBasedOnUrl($isBasedOnUrl)
    {
        $this->isBasedOnUrl = $isBasedOnUrl;
        return $this;
    }

    public function getisFamilyFriendly()
    {
        return $this->isFamilyFriendly;
    }

    public function setisFamilyFriendly($isFamilyFriendly)
    {
        $this->isFamilyFriendly = $isFamilyFriendly;
        return $this;
    }

    public function getkeywords()
    {
        return $this->keywords;
    }

    public function setkeywords($keywords)
    {
        $this->keywords = $keywords;
        return $this;
    }

    public function getlearningResourceType()
    {
        return $this->learningResourceType;
    }

    public function setlearningResourceType($learningResourceType)
    {
        $this->learningResourceType = $learningResourceType;
        return $this;
    }

    public function getmentions()
    {
        return $this->mentions;
    }

    public function setmentions($mentions)
    {
        $this->mentions = $mentions;
        return $this;
    }

    public function getoffers()
    {
        return $this->offers;
    }

    public function setoffers($offers)
    {
        $this->offers = $offers;
        return $this;
    }

    public function getprovider()
    {
        return $this->provider;
    }

    public function setprovider($provider)
    {
        $this->provider = $provider;
        return $this;
    }

    public function getpublisher()
    {
        return $this->publisher;
    }

    public function setpublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    public function getpublishingPrinciples()
    {
        return $this->publishingPrinciples;
    }

    public function setpublishingPrinciples($publishingPrinciples)
    {
        $this->publishingPrinciples = $publishingPrinciples;
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

    public function getsourceOrganization()
    {
        return $this->sourceOrganization;
    }

    public function setsourceOrganization($sourceOrganization)
    {
        $this->sourceOrganization = $sourceOrganization;
        return $this;
    }

    public function gettext()
    {
        return $this->text;
    }

    public function settext($text)
    {
        $this->text = $text;
        return $this;
    }

    public function getthumbnailUrl()
    {
        return $this->thumbnailUrl;
    }

    public function setthumbnailUrl($thumbnailUrl)
    {
        $this->thumbnailUrl = $thumbnailUrl;
        return $this;
    }

    public function gettimeRequired()
    {
        return $this->timeRequired;
    }

    public function settimeRequired($timeRequired)
    {
        $this->timeRequired = $timeRequired;
        return $this;
    }

    public function gettypicalAgeRange()
    {
        return $this->typicalAgeRange;
    }

    public function settypicalAgeRange($typicalAgeRange)
    {
        $this->typicalAgeRange = $typicalAgeRange;
        return $this;
    }

    public function getversion()
    {
        return $this->version;
    }

    public function setversion($version)
    {
        $this->version = $version;
        return $this;
    }

    public function getvideo()
    {
        return $this->video;
    }

    public function setvideo($video)
    {
        $this->video = $video;
        return $this;
    }

}
