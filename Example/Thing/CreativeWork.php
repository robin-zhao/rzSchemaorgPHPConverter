<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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

    /**
     * @return Example\Thing
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * @param $about Example\Thing
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
     * @return Example\Thing\Person
     */
    public function getAccountablePerson()
    {
        return $this->accountablePerson;
    }

    /**
     * @param $accountablePerson Example\Thing\Person
     */
    public function setAccountablePerson($accountablePerson)
    {
        $this->accountablePerson = $accountablePerson;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Rating\AggregateRating
     */
    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    /**
     * @param $aggregateRating Example\Thing\Intangible\Rating\AggregateRating
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
     * @return Example\Thing\CreativeWork\MediaObject
     */
    public function getAssociatedMedia()
    {
        return $this->associatedMedia;
    }

    /**
     * @param $associatedMedia Example\Thing\CreativeWork\MediaObject
     */
    public function setAssociatedMedia($associatedMedia)
    {
        $this->associatedMedia = $associatedMedia;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Audience
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * @param $audience Example\Thing\Intangible\Audience
     */
    public function setAudience($audience)
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\MediaObject\AudioObject
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * @param $audio Example\Thing\CreativeWork\MediaObject\AudioObject
     */
    public function setAudio($audio)
    {
        $this->audio = $audio;
        return $this;
    }

    /**
     * @return Example\Thing\Organization|Example\Thing\Person
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param $author Example\Thing\Organization|Example\Thing\Person
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
     * @return Example\Thing\CreativeWork|String
     */
    public function getCitation()
    {
        return $this->citation;
    }

    /**
     * @param $citation Example\Thing\CreativeWork|String
     */
    public function setCitation($citation)
    {
        $this->citation = $citation;
        return $this;
    }

    /**
     * @return Example\Thing\Event\UserInteraction\UserComments
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param $comment Example\Thing\Event\UserInteraction\UserComments
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return Example\Thing\Place
     */
    public function getContentLocation()
    {
        return $this->contentLocation;
    }

    /**
     * @param $contentLocation Example\Thing\Place
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
     * @return Example\Thing\Organization|Example\Thing\Person
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * @param $contributor Example\Thing\Organization|Example\Thing\Person
     */
    public function setContributor($contributor)
    {
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * @return Example\Thing\Organization|Example\Thing\Person
     */
    public function getCopyrightHolder()
    {
        return $this->copyrightHolder;
    }

    /**
     * @param $copyrightHolder Example\Thing\Organization|Example\Thing\Person
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
     * @return Example\Thing\Organization|Example\Thing\Person
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param $creator Example\Thing\Organization|Example\Thing\Person
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
     * @return Example\Thing\Person
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * @param $editor Example\Thing\Person
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\AlignmentObject
     */
    public function getEducationalAlignment()
    {
        return $this->educationalAlignment;
    }

    /**
     * @param $educationalAlignment Example\Thing\Intangible\AlignmentObject
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
     * @return Example\Thing\CreativeWork\MediaObject
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * @param $encoding Example\Thing\CreativeWork\MediaObject
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\MediaObject
     */
    public function getEncodings()
    {
        return $this->encodings;
    }

    /**
     * @param $encodings Example\Thing\CreativeWork\MediaObject
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
     * @return Example\Thing
     */
    public function getMentions()
    {
        return $this->mentions;
    }

    /**
     * @param $mentions Example\Thing
     */
    public function setMentions($mentions)
    {
        $this->mentions = $mentions;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Offer
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param $offers Example\Thing\Intangible\Offer
     */
    public function setOffers($offers)
    {
        $this->offers = $offers;
        return $this;
    }

    /**
     * @return Example\Thing\Organization|Example\Thing\Person
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param $provider Example\Thing\Organization|Example\Thing\Person
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * @return Example\Thing\Organization
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param $publisher Example\Thing\Organization
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
     * @return Example\Thing\CreativeWork\Review
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param $review Example\Thing\CreativeWork\Review
     */
    public function setReview($review)
    {
        $this->review = $review;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\Review
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * @param $reviews Example\Thing\CreativeWork\Review
     */
    public function setReviews($reviews)
    {
        $this->reviews = $reviews;
        return $this;
    }

    /**
     * @return Example\Thing\Organization
     */
    public function getSourceOrganization()
    {
        return $this->sourceOrganization;
    }

    /**
     * @param $sourceOrganization Example\Thing\Organization
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
     * @return Example\Thing\Intangible\Quantity\Duration
     */
    public function getTimeRequired()
    {
        return $this->timeRequired;
    }

    /**
     * @param $timeRequired Example\Thing\Intangible\Quantity\Duration
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
     * @return Example\Thing\CreativeWork\MediaObject\VideoObject
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param $video Example\Thing\CreativeWork\MediaObject\VideoObject
     */
    public function setVideo($video)
    {
        $this->video = $video;
        return $this;
    }

}
