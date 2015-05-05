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
    public $about;

    /**
     * Indicates that the resource is compatible with the referenced accessibility API (WebSchemas wiki lists possible values).
     
     *
     * @var String
     */
    public $accessibilityAPI;

    /**
     * Identifies input methods that are sufficient to fully control the described resource (WebSchemas wiki lists possible values).
     *
     * @var String
     */
    public $accessibilityControl;

    /**
     * Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility (WebSchemas wiki lists possible values).
     *
     * @var String
     */
    public $accessibilityFeature;

    /**
     * A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3. (WebSchemas wiki lists possible values)
     *
     * @var String
     */
    public $accessibilityHazard;

    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $accountablePerson;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Rating\AggregateRating
     */
    public $aggregateRating;

    /**
     * A secondary title of the CreativeWork.
     *
     * @var String
     */
    public $alternativeHeadline;

    /**
     * The media objects that encode this creative work. This property is a synonym for encodings.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject
     */
    public $associatedMedia;

    /**
     * The intended audience of the item, i.e. the group for whom the item was created.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Audience
     */
    public $audience;

    /**
     * An embedded audio object.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\AudioObject
     */
    public $audio;

    /**
     * The author of this content. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $author;

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
     * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork|String
     */
    public $citation;

    /**
     * Comments, typically from users, on this CreativeWork.
     *
     * @var Robinzhao\SchemaOrg\Thing\Event\UserInteraction\UserComments
     */
    public $comment;

    /**
     * The location of the content.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place
     */
    public $contentLocation;

    /**
     * Official rating of a piece of content—for example,'MPAA PG-13'.
     *
     * @var String
     */
    public $contentRating;

    /**
     * A secondary contributor to the CreativeWork.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $contributor;

    /**
     * The party holding the legal copyright to the CreativeWork.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $copyrightHolder;

    /**
     * The year during which the claimed copyright for the CreativeWork was first asserted.
     *
     * @var Float
     */
    public $copyrightYear;

    /**
     * The creator/author of this CreativeWork or UserComments. This is the same as the Author property for CreativeWork.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $creator;

    /**
     * The date on which the CreativeWork was created.
     *
     * @var DateTime
     */
    public $dateCreated;

    /**
     * The date on which the CreativeWork was most recently modified.
     *
     * @var DateTime
     */
    public $dateModified;

    /**
     * Date of first broadcast/publication.
     *
     * @var DateTime
     */
    public $datePublished;

    /**
     * A link to the page containing the comments of the CreativeWork.
     *
     * @var String
     */
    public $discussionUrl;

    /**
     * Specifies the Person who edited the CreativeWork.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $editor;

    /**
     * An alignment to an established educational framework.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\AlignmentObject
     */
    public $educationalAlignment;

    /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     *
     * @var String
     */
    public $educationalUse;

    /**
     * A media object that encode this CreativeWork.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject
     */
    public $encoding;

    /**
     * The media objects that encode this creative work (legacy spelling; see singular form, encoding).
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject
     */
    public $encodings;

    /**
     * Genre of the creative work
     *
     * @var String
     */
    public $genre;

    /**
     * Headline of the article
     *
     * @var String
     */
    public $headline;

    /**
     * The language of the content. please use one of the language codes from the IETF BCP 47 standard.
     *
     * @var String
     */
    public $inLanguage;

    /**
     * A count of a specific user interactions with this item—for example, 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user interaction type should be one of the sub types of UserInteraction.
     *
     * @var String
     */
    public $interactionCount;

    /**
     * The predominant mode of learning supported by the learning resource. Acceptable values are 'active', 'expositive', or 'mixed'.
     *
     * @var String
     */
    public $interactivityType;

    /**
     * A resource that was used in the creation of this resource. This term can be repeated for multiple sources. For example, http://example.com/great-multiplication-intro.html
     *
     * @var String
     */
    public $isBasedOnUrl;

    /**
     * Indicates whether this content is family friendly.
     *
     * @var Boolean
     */
    public $isFamilyFriendly;

    /**
     * The keywords/tags used to describe this content.
     *
     * @var String
     */
    public $keywords;

    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     *
     * @var String
     */
    public $learningResourceType;

    /**
     * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
     *
     * @var Robinzhao\SchemaOrg\Thing
     */
    public $mentions;

    /**
     * An offer to transfer some rights to an item or to provide a service—for example, an offer to sell tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to repair a motorcycle, or to loan a book.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    public $offers;

    /**
     * The organization or agency that is providing the service.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $provider;

    /**
     * The publisher of the creative work.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    public $publisher;

    /**
     * Link to page describing the editorial principles of the organization primarily responsible for the creation of the CreativeWork.
     *
     * @var String
     */
    public $publishingPrinciples;

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
     * The Organization on whose behalf the creator was working.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    public $sourceOrganization;

    /**
     * The textual content of this CreativeWork.
     *
     * @var String
     */
    public $text;

    /**
     * A thumbnail image relevant to the Thing.
     *
     * @var String
     */
    public $thumbnailUrl;

    /**
     * Approximate or typical time it takes to work with or through this learning resource for the typical intended target audience, e.g. 'P30M', 'P1H25M'.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public $timeRequired;

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     * @var String
     */
    public $typicalAgeRange;

    /**
     * The version of the CreativeWork embodied by a specified resource.
     *
     * @var Float
     */
    public $version;

    /**
     * An embedded video object.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject
     */
    public $video;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/CreativeWork";

    /**
     * @param $about Robinzhao\SchemaOrg\Thing
     */
    public function addAbout($about)
    {
        $this->about []= $about;
        return $this;
    }

    /**
     * @param $accessibilityAPI String
     */
    public function addAccessibilityAPI($accessibilityAPI)
    {
        $this->accessibilityAPI []= $accessibilityAPI;
        return $this;
    }

    /**
     * @param $accessibilityControl String
     */
    public function addAccessibilityControl($accessibilityControl)
    {
        $this->accessibilityControl []= $accessibilityControl;
        return $this;
    }

    /**
     * @param $accessibilityFeature String
     */
    public function addAccessibilityFeature($accessibilityFeature)
    {
        $this->accessibilityFeature []= $accessibilityFeature;
        return $this;
    }

    /**
     * @param $accessibilityHazard String
     */
    public function addAccessibilityHazard($accessibilityHazard)
    {
        $this->accessibilityHazard []= $accessibilityHazard;
        return $this;
    }

    /**
     * @param $accountablePerson Robinzhao\SchemaOrg\Thing\Person
     */
    public function addAccountablePerson($accountablePerson)
    {
        $this->accountablePerson []= $accountablePerson;
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
     * @param $alternativeHeadline String
     */
    public function addAlternativeHeadline($alternativeHeadline)
    {
        $this->alternativeHeadline []= $alternativeHeadline;
        return $this;
    }

    /**
     * @param $associatedMedia Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject
     */
    public function addAssociatedMedia($associatedMedia)
    {
        $this->associatedMedia []= $associatedMedia;
        return $this;
    }

    /**
     * @param $audience Robinzhao\SchemaOrg\Thing\Intangible\Audience
     */
    public function addAudience($audience)
    {
        $this->audience []= $audience;
        return $this;
    }

    /**
     * @param $audio Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\AudioObject
     */
    public function addAudio($audio)
    {
        $this->audio []= $audio;
        return $this;
    }

    /**
     * @param $author Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addAuthor($author)
    {
        $this->author []= $author;
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
     * @param $citation Robinzhao\SchemaOrg\Thing\CreativeWork|String
     */
    public function addCitation($citation)
    {
        $this->citation []= $citation;
        return $this;
    }

    /**
     * @param $comment Robinzhao\SchemaOrg\Thing\Event\UserInteraction\UserComments
     */
    public function addComment($comment)
    {
        $this->comment []= $comment;
        return $this;
    }

    /**
     * @param $contentLocation Robinzhao\SchemaOrg\Thing\Place
     */
    public function addContentLocation($contentLocation)
    {
        $this->contentLocation []= $contentLocation;
        return $this;
    }

    /**
     * @param $contentRating String
     */
    public function addContentRating($contentRating)
    {
        $this->contentRating []= $contentRating;
        return $this;
    }

    /**
     * @param $contributor Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addContributor($contributor)
    {
        $this->contributor []= $contributor;
        return $this;
    }

    /**
     * @param $copyrightHolder Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addCopyrightHolder($copyrightHolder)
    {
        $this->copyrightHolder []= $copyrightHolder;
        return $this;
    }

    /**
     * @param $copyrightYear Float
     */
    public function addCopyrightYear($copyrightYear)
    {
        $this->copyrightYear []= $copyrightYear;
        return $this;
    }

    /**
     * @param $creator Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addCreator($creator)
    {
        $this->creator []= $creator;
        return $this;
    }

    /**
     * @param $dateCreated DateTime
     */
    public function addDateCreated($dateCreated)
    {
        $this->dateCreated []= $dateCreated;
        return $this;
    }

    /**
     * @param $dateModified DateTime
     */
    public function addDateModified($dateModified)
    {
        $this->dateModified []= $dateModified;
        return $this;
    }

    /**
     * @param $datePublished DateTime
     */
    public function addDatePublished($datePublished)
    {
        $this->datePublished []= $datePublished;
        return $this;
    }

    /**
     * @param $discussionUrl String
     */
    public function addDiscussionUrl($discussionUrl)
    {
        $this->discussionUrl []= $discussionUrl;
        return $this;
    }

    /**
     * @param $editor Robinzhao\SchemaOrg\Thing\Person
     */
    public function addEditor($editor)
    {
        $this->editor []= $editor;
        return $this;
    }

    /**
     * @param $educationalAlignment Robinzhao\SchemaOrg\Thing\Intangible\AlignmentObject
     */
    public function addEducationalAlignment($educationalAlignment)
    {
        $this->educationalAlignment []= $educationalAlignment;
        return $this;
    }

    /**
     * @param $educationalUse String
     */
    public function addEducationalUse($educationalUse)
    {
        $this->educationalUse []= $educationalUse;
        return $this;
    }

    /**
     * @param $encoding Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject
     */
    public function addEncoding($encoding)
    {
        $this->encoding []= $encoding;
        return $this;
    }

    /**
     * @param $encodings Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject
     */
    public function addEncodings($encodings)
    {
        $this->encodings []= $encodings;
        return $this;
    }

    /**
     * @param $genre String
     */
    public function addGenre($genre)
    {
        $this->genre []= $genre;
        return $this;
    }

    /**
     * @param $headline String
     */
    public function addHeadline($headline)
    {
        $this->headline []= $headline;
        return $this;
    }

    /**
     * @param $inLanguage String
     */
    public function addInLanguage($inLanguage)
    {
        $this->inLanguage []= $inLanguage;
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
     * @param $interactivityType String
     */
    public function addInteractivityType($interactivityType)
    {
        $this->interactivityType []= $interactivityType;
        return $this;
    }

    /**
     * @param $isBasedOnUrl String
     */
    public function addIsBasedOnUrl($isBasedOnUrl)
    {
        $this->isBasedOnUrl []= $isBasedOnUrl;
        return $this;
    }

    /**
     * @param $isFamilyFriendly Boolean
     */
    public function addIsFamilyFriendly($isFamilyFriendly)
    {
        $this->isFamilyFriendly []= $isFamilyFriendly;
        return $this;
    }

    /**
     * @param $keywords String
     */
    public function addKeywords($keywords)
    {
        $this->keywords []= $keywords;
        return $this;
    }

    /**
     * @param $learningResourceType String
     */
    public function addLearningResourceType($learningResourceType)
    {
        $this->learningResourceType []= $learningResourceType;
        return $this;
    }

    /**
     * @param $mentions Robinzhao\SchemaOrg\Thing
     */
    public function addMentions($mentions)
    {
        $this->mentions []= $mentions;
        return $this;
    }

    /**
     * @param $offers Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    public function addOffers($offers)
    {
        $this->offers []= $offers;
        return $this;
    }

    /**
     * @param $provider Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addProvider($provider)
    {
        $this->provider []= $provider;
        return $this;
    }

    /**
     * @param $publisher Robinzhao\SchemaOrg\Thing\Organization
     */
    public function addPublisher($publisher)
    {
        $this->publisher []= $publisher;
        return $this;
    }

    /**
     * @param $publishingPrinciples String
     */
    public function addPublishingPrinciples($publishingPrinciples)
    {
        $this->publishingPrinciples []= $publishingPrinciples;
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
     * @param $sourceOrganization Robinzhao\SchemaOrg\Thing\Organization
     */
    public function addSourceOrganization($sourceOrganization)
    {
        $this->sourceOrganization []= $sourceOrganization;
        return $this;
    }

    /**
     * @param $text String
     */
    public function addText($text)
    {
        $this->text []= $text;
        return $this;
    }

    /**
     * @param $thumbnailUrl String
     */
    public function addThumbnailUrl($thumbnailUrl)
    {
        $this->thumbnailUrl []= $thumbnailUrl;
        return $this;
    }

    /**
     * @param $timeRequired Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public function addTimeRequired($timeRequired)
    {
        $this->timeRequired []= $timeRequired;
        return $this;
    }

    /**
     * @param $typicalAgeRange String
     */
    public function addTypicalAgeRange($typicalAgeRange)
    {
        $this->typicalAgeRange []= $typicalAgeRange;
        return $this;
    }

    /**
     * @param $version Float
     */
    public function addVersion($version)
    {
        $this->version []= $version;
        return $this;
    }

    /**
     * @param $video Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject
     */
    public function addVideo($video)
    {
        $this->video []= $video;
        return $this;
    }

}
