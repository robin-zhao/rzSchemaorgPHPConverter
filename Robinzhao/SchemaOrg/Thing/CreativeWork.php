<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing;

use Robinzhao\SchemaOrg\Thing;

/**
 * Creative Work
 * http://schema.org/CreativeWork
 */
class CreativeWork extends Thing
{

    /**
     * The subject matter of the content.
     *
     * @var Robinzhao\SchemaOrg\Thing
     */
    protected $about;

    /**
     * Indicates that the resource is compatible with the referenced accessibility API (WebSchemas wiki lists possible values).
     
     *
     * @var String
     */
    protected $accessibilityAPI;

    /**
     * Identifies input methods that are sufficient to fully control the described resource (WebSchemas wiki lists possible values).
     *
     * @var String
     */
    protected $accessibilityControl;

    /**
     * Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility (WebSchemas wiki lists possible values).
     *
     * @var String
     */
    protected $accessibilityFeature;

    /**
     * A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3. (WebSchemas wiki lists possible values)
     *
     * @var String
     */
    protected $accessibilityHazard;

    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $accountablePerson;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Rating\AggregateRating
     */
    protected $aggregateRating;

    /**
     * A secondary title of the CreativeWork.
     *
     * @var String
     */
    protected $alternativeHeadline;

    /**
     * The media objects that encode this creative work. This property is a synonym for encodings.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject
     */
    protected $associatedMedia;

    /**
     * The intended audience of the item, i.e. the group for whom the item was created.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Audience
     */
    protected $audience;

    /**
     * An embedded audio object.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\AudioObject
     */
    protected $audio;

    /**
     * The author of this content. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    protected $author;

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
     * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork|String
     */
    protected $citation;

    /**
     * Comments, typically from users, on this CreativeWork.
     *
     * @var Robinzhao\SchemaOrg\Thing\Event\UserInteraction\UserComments
     */
    protected $comment;

    /**
     * The location of the content.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place
     */
    protected $contentLocation;

    /**
     * Official rating of a piece of content—for example,'MPAA PG-13'.
     *
     * @var String
     */
    protected $contentRating;

    /**
     * A secondary contributor to the CreativeWork.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    protected $contributor;

    /**
     * The party holding the legal copyright to the CreativeWork.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    protected $copyrightHolder;

    /**
     * The year during which the claimed copyright for the CreativeWork was first asserted.
     *
     * @var Float
     */
    protected $copyrightYear;

    /**
     * The creator/author of this CreativeWork or UserComments. This is the same as the Author property for CreativeWork.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    protected $creator;

    /**
     * The date on which the CreativeWork was created.
     *
     * @var DateTime
     */
    protected $dateCreated;

    /**
     * The date on which the CreativeWork was most recently modified.
     *
     * @var DateTime
     */
    protected $dateModified;

    /**
     * Date of first broadcast/publication.
     *
     * @var DateTime
     */
    protected $datePublished;

    /**
     * A link to the page containing the comments of the CreativeWork.
     *
     * @var String
     */
    protected $discussionUrl;

    /**
     * Specifies the Person who edited the CreativeWork.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $editor;

    /**
     * An alignment to an established educational framework.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\AlignmentObject
     */
    protected $educationalAlignment;

    /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     *
     * @var String
     */
    protected $educationalUse;

    /**
     * A media object that encode this CreativeWork.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject
     */
    protected $encoding;

    /**
     * The media objects that encode this creative work (legacy spelling; see singular form, encoding).
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject
     */
    protected $encodings;

    /**
     * Genre of the creative work
     *
     * @var String
     */
    protected $genre;

    /**
     * Headline of the article
     *
     * @var String
     */
    protected $headline;

    /**
     * The language of the content. please use one of the language codes from the IETF BCP 47 standard.
     *
     * @var String
     */
    protected $inLanguage;

    /**
     * A count of a specific user interactions with this item—for example, 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user interaction type should be one of the sub types of UserInteraction.
     *
     * @var String
     */
    protected $interactionCount;

    /**
     * The predominant mode of learning supported by the learning resource. Acceptable values are 'active', 'expositive', or 'mixed'.
     *
     * @var String
     */
    protected $interactivityType;

    /**
     * A resource that was used in the creation of this resource. This term can be repeated for multiple sources. For example, http://example.com/great-multiplication-intro.html
     *
     * @var String
     */
    protected $isBasedOnUrl;

    /**
     * Indicates whether this content is family friendly.
     *
     * @var Boolean
     */
    protected $isFamilyFriendly;

    /**
     * The keywords/tags used to describe this content.
     *
     * @var String
     */
    protected $keywords;

    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     *
     * @var String
     */
    protected $learningResourceType;

    /**
     * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
     *
     * @var Robinzhao\SchemaOrg\Thing
     */
    protected $mentions;

    /**
     * An offer to transfer some rights to an item or to provide a service—for example, an offer to sell tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to repair a motorcycle, or to loan a book.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    protected $offers;

    /**
     * The organization or agency that is providing the service.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    protected $provider;

    /**
     * The publisher of the creative work.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    protected $publisher;

    /**
     * Link to page describing the editorial principles of the organization primarily responsible for the creation of the CreativeWork.
     *
     * @var String
     */
    protected $publishingPrinciples;

    /**
     * A review of the item.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    protected $review;

    /**
     * Review of the item (legacy spelling; see singular form, review).
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    protected $reviews;

    /**
     * The Organization on whose behalf the creator was working.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    protected $sourceOrganization;

    /**
     * The textual content of this CreativeWork.
     *
     * @var String
     */
    protected $text;

    /**
     * A thumbnail image relevant to the Thing.
     *
     * @var String
     */
    protected $thumbnailUrl;

    /**
     * Approximate or typical time it takes to work with or through this learning resource for the typical intended target audience, e.g. 'P30M', 'P1H25M'.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    protected $timeRequired;

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     * @var String
     */
    protected $typicalAgeRange;

    /**
     * The version of the CreativeWork embodied by a specified resource.
     *
     * @var Float
     */
    protected $version;

    /**
     * An embedded video object.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject
     */
    protected $video;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/CreativeWork";

    /**
     * @return Robinzhao\SchemaOrg\Thing
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * @param $about Robinzhao\SchemaOrg\Thing
     */
    public function setAbout($about)
    {
        $this->about = $about;
        return $this;
    }

    /**
     * @return String
     */
    public function getAccessibilityAPI()
    {
        return $this->accessibilityAPI;
    }

    /**
     * @param $accessibilityAPI String
     */
    public function setAccessibilityAPI($accessibilityAPI)
    {
        $this->accessibilityAPI = $accessibilityAPI;
        return $this;
    }

    /**
     * @return String
     */
    public function getAccessibilityControl()
    {
        return $this->accessibilityControl;
    }

    /**
     * @param $accessibilityControl String
     */
    public function setAccessibilityControl($accessibilityControl)
    {
        $this->accessibilityControl = $accessibilityControl;
        return $this;
    }

    /**
     * @return String
     */
    public function getAccessibilityFeature()
    {
        return $this->accessibilityFeature;
    }

    /**
     * @param $accessibilityFeature String
     */
    public function setAccessibilityFeature($accessibilityFeature)
    {
        $this->accessibilityFeature = $accessibilityFeature;
        return $this;
    }

    /**
     * @return String
     */
    public function getAccessibilityHazard()
    {
        return $this->accessibilityHazard;
    }

    /**
     * @param $accessibilityHazard String
     */
    public function setAccessibilityHazard($accessibilityHazard)
    {
        $this->accessibilityHazard = $accessibilityHazard;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getAccountablePerson()
    {
        return $this->accountablePerson;
    }

    /**
     * @param $accountablePerson Robinzhao\SchemaOrg\Thing\Person
     */
    public function setAccountablePerson($accountablePerson)
    {
        $this->accountablePerson = $accountablePerson;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Rating\AggregateRating
     */
    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    /**
     * @param $aggregateRating Robinzhao\SchemaOrg\Thing\Intangible\Rating\AggregateRating
     */
    public function setAggregateRating($aggregateRating)
    {
        $this->aggregateRating = $aggregateRating;
        return $this;
    }

    /**
     * @return String
     */
    public function getAlternativeHeadline()
    {
        return $this->alternativeHeadline;
    }

    /**
     * @param $alternativeHeadline String
     */
    public function setAlternativeHeadline($alternativeHeadline)
    {
        $this->alternativeHeadline = $alternativeHeadline;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject
     */
    public function getAssociatedMedia()
    {
        return $this->associatedMedia;
    }

    /**
     * @param $associatedMedia Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject
     */
    public function setAssociatedMedia($associatedMedia)
    {
        $this->associatedMedia = $associatedMedia;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Audience
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * @param $audience Robinzhao\SchemaOrg\Thing\Intangible\Audience
     */
    public function setAudience($audience)
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\AudioObject
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * @param $audio Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\AudioObject
     */
    public function setAudio($audio)
    {
        $this->audio = $audio;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param $author Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function setAuthor($author)
    {
        $this->author = $author;
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
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork|String
     */
    public function getCitation()
    {
        return $this->citation;
    }

    /**
     * @param $citation Robinzhao\SchemaOrg\Thing\CreativeWork|String
     */
    public function setCitation($citation)
    {
        $this->citation = $citation;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Event\UserInteraction\UserComments
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param $comment Robinzhao\SchemaOrg\Thing\Event\UserInteraction\UserComments
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Place
     */
    public function getContentLocation()
    {
        return $this->contentLocation;
    }

    /**
     * @param $contentLocation Robinzhao\SchemaOrg\Thing\Place
     */
    public function setContentLocation($contentLocation)
    {
        $this->contentLocation = $contentLocation;
        return $this;
    }

    /**
     * @return String
     */
    public function getContentRating()
    {
        return $this->contentRating;
    }

    /**
     * @param $contentRating String
     */
    public function setContentRating($contentRating)
    {
        $this->contentRating = $contentRating;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * @param $contributor Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function setContributor($contributor)
    {
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function getCopyrightHolder()
    {
        return $this->copyrightHolder;
    }

    /**
     * @param $copyrightHolder Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function setCopyrightHolder($copyrightHolder)
    {
        $this->copyrightHolder = $copyrightHolder;
        return $this;
    }

    /**
     * @return Float
     */
    public function getCopyrightYear()
    {
        return $this->copyrightYear;
    }

    /**
     * @param $copyrightYear Float
     */
    public function setCopyrightYear($copyrightYear)
    {
        $this->copyrightYear = $copyrightYear;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param $creator Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param $dateCreated DateTime
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * @param $dateModified DateTime
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDatePublished()
    {
        return $this->datePublished;
    }

    /**
     * @param $datePublished DateTime
     */
    public function setDatePublished($datePublished)
    {
        $this->datePublished = $datePublished;
        return $this;
    }

    /**
     * @return String
     */
    public function getDiscussionUrl()
    {
        return $this->discussionUrl;
    }

    /**
     * @param $discussionUrl String
     */
    public function setDiscussionUrl($discussionUrl)
    {
        $this->discussionUrl = $discussionUrl;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * @param $editor Robinzhao\SchemaOrg\Thing\Person
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\AlignmentObject
     */
    public function getEducationalAlignment()
    {
        return $this->educationalAlignment;
    }

    /**
     * @param $educationalAlignment Robinzhao\SchemaOrg\Thing\Intangible\AlignmentObject
     */
    public function setEducationalAlignment($educationalAlignment)
    {
        $this->educationalAlignment = $educationalAlignment;
        return $this;
    }

    /**
     * @return String
     */
    public function getEducationalUse()
    {
        return $this->educationalUse;
    }

    /**
     * @param $educationalUse String
     */
    public function setEducationalUse($educationalUse)
    {
        $this->educationalUse = $educationalUse;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * @param $encoding Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject
     */
    public function getEncodings()
    {
        return $this->encodings;
    }

    /**
     * @param $encodings Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject
     */
    public function setEncodings($encodings)
    {
        $this->encodings = $encodings;
        return $this;
    }

    /**
     * @return String
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param $genre String
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * @return String
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * @param $headline String
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;
        return $this;
    }

    /**
     * @return String
     */
    public function getInLanguage()
    {
        return $this->inLanguage;
    }

    /**
     * @param $inLanguage String
     */
    public function setInLanguage($inLanguage)
    {
        $this->inLanguage = $inLanguage;
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
    public function getInteractivityType()
    {
        return $this->interactivityType;
    }

    /**
     * @param $interactivityType String
     */
    public function setInteractivityType($interactivityType)
    {
        $this->interactivityType = $interactivityType;
        return $this;
    }

    /**
     * @return String
     */
    public function getIsBasedOnUrl()
    {
        return $this->isBasedOnUrl;
    }

    /**
     * @param $isBasedOnUrl String
     */
    public function setIsBasedOnUrl($isBasedOnUrl)
    {
        $this->isBasedOnUrl = $isBasedOnUrl;
        return $this;
    }

    /**
     * @return Boolean
     */
    public function getIsFamilyFriendly()
    {
        return $this->isFamilyFriendly;
    }

    /**
     * @param $isFamilyFriendly Boolean
     */
    public function setIsFamilyFriendly($isFamilyFriendly)
    {
        $this->isFamilyFriendly = $isFamilyFriendly;
        return $this;
    }

    /**
     * @return String
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param $keywords String
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * @return String
     */
    public function getLearningResourceType()
    {
        return $this->learningResourceType;
    }

    /**
     * @param $learningResourceType String
     */
    public function setLearningResourceType($learningResourceType)
    {
        $this->learningResourceType = $learningResourceType;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing
     */
    public function getMentions()
    {
        return $this->mentions;
    }

    /**
     * @param $mentions Robinzhao\SchemaOrg\Thing
     */
    public function setMentions($mentions)
    {
        $this->mentions = $mentions;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param $offers Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    public function setOffers($offers)
    {
        $this->offers = $offers;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param $provider Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param $publisher Robinzhao\SchemaOrg\Thing\Organization
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * @return String
     */
    public function getPublishingPrinciples()
    {
        return $this->publishingPrinciples;
    }

    /**
     * @param $publishingPrinciples String
     */
    public function setPublishingPrinciples($publishingPrinciples)
    {
        $this->publishingPrinciples = $publishingPrinciples;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param $review Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    public function setReview($review)
    {
        $this->review = $review;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * @param $reviews Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    public function setReviews($reviews)
    {
        $this->reviews = $reviews;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization
     */
    public function getSourceOrganization()
    {
        return $this->sourceOrganization;
    }

    /**
     * @param $sourceOrganization Robinzhao\SchemaOrg\Thing\Organization
     */
    public function setSourceOrganization($sourceOrganization)
    {
        $this->sourceOrganization = $sourceOrganization;
        return $this;
    }

    /**
     * @return String
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param $text String
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return String
     */
    public function getThumbnailUrl()
    {
        return $this->thumbnailUrl;
    }

    /**
     * @param $thumbnailUrl String
     */
    public function setThumbnailUrl($thumbnailUrl)
    {
        $this->thumbnailUrl = $thumbnailUrl;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public function getTimeRequired()
    {
        return $this->timeRequired;
    }

    /**
     * @param $timeRequired Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public function setTimeRequired($timeRequired)
    {
        $this->timeRequired = $timeRequired;
        return $this;
    }

    /**
     * @return String
     */
    public function getTypicalAgeRange()
    {
        return $this->typicalAgeRange;
    }

    /**
     * @param $typicalAgeRange String
     */
    public function setTypicalAgeRange($typicalAgeRange)
    {
        $this->typicalAgeRange = $typicalAgeRange;
        return $this;
    }

    /**
     * @return Float
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param $version Float
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param $video Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject
     */
    public function setVideo($video)
    {
        $this->video = $video;
        return $this;
    }

}
