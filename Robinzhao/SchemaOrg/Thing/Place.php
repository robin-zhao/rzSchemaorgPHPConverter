<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing;

use Robinzhao\SchemaOrg\Thing;

/**
 * Place
 * http://schema.org/Place
 */
class Place extends Thing
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
     * The basic containment relation between places.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place
     */
    public $containedIn;

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
     * The geo coordinates of the place.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\GeoCoordinates|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape
     */
    public $geo;

    /**
     * The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
     *
     * @var String
     */
    public $globalLocationNumber;

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
     * A logo associated with an organization.
     *
     * @var String|Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public $logo;

    /**
     * A URL to a map of the place.
     *
     * @var String
     */
    public $map;

    /**
     * A URL to a map of the place (legacy spelling; see singular form, map).
     *
     * @var String
     */
    public $maps;

    /**
     * The opening hours of a certain place.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification
     */
    public $openingHoursSpecification;

    /**
     * A photograph of this place.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject|Robinzhao\SchemaOrg\Thing\CreativeWork\Photograph
     */
    public $photo;

    /**
     * Photographs of this place (legacy spelling; see singular form, photo).
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject|Robinzhao\SchemaOrg\Thing\CreativeWork\Photograph
     */
    public $photos;

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
     * The telephone number.
     *
     * @var String
     */
    public $telephone;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Place";

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
     * @param $containedIn Robinzhao\SchemaOrg\Thing\Place
     */
    public function addContainedIn($containedIn)
    {
        $this->containedIn []= $containedIn;
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
     * @param $geo Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\GeoCoordinates|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape
     */
    public function addGeo($geo)
    {
        $this->geo []= $geo;
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
     * @param $logo String|Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function addLogo($logo)
    {
        $this->logo []= $logo;
        return $this;
    }

    /**
     * @param $map String
     */
    public function addMap($map)
    {
        $this->map []= $map;
        return $this;
    }

    /**
     * @param $maps String
     */
    public function addMaps($maps)
    {
        $this->maps []= $maps;
        return $this;
    }

    /**
     * @param $openingHoursSpecification Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification
     */
    public function addOpeningHoursSpecification($openingHoursSpecification)
    {
        $this->openingHoursSpecification []= $openingHoursSpecification;
        return $this;
    }

    /**
     * @param $photo Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject|Robinzhao\SchemaOrg\Thing\CreativeWork\Photograph
     */
    public function addPhoto($photo)
    {
        $this->photo []= $photo;
        return $this;
    }

    /**
     * @param $photos Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject|Robinzhao\SchemaOrg\Thing\CreativeWork\Photograph
     */
    public function addPhotos($photos)
    {
        $this->photos []= $photos;
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
     * @param $telephone String
     */
    public function addTelephone($telephone)
    {
        $this->telephone []= $telephone;
        return $this;
    }


}