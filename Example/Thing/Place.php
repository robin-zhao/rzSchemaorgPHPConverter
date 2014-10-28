<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing;

use Example\Thing;

/**
 * Place
 * http://schema.org/Place
 */
class Place extends Thing
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
     * The basic containment relation between places.
     *
     * @var Example\Thing\Place
     */
    private $containedIn;

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
     * The geo coordinates of the place.
     *
     * @var Example\Thing\Intangible\StructuredValue\GeoCoordinates|Example\Thing\Intangible\StructuredValue\GeoShape
     */
    private $geo;

    /**
     * The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
     *
     * @var String
     */
    private $globalLocationNumber;

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
     * A logo associated with an organization.
     *
     * @var String|Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    private $logo;

    /**
     * A URL to a map of the place.
     *
     * @var String
     */
    private $map;

    /**
     * A URL to a map of the place (legacy spelling; see singular form, map).
     *
     * @var String
     */
    private $maps;

    /**
     * The opening hours of a certain place.
     *
     * @var Example\Thing\Intangible\StructuredValue\OpeningHoursSpecification
     */
    private $openingHoursSpecification;

    /**
     * A photograph of this place.
     *
     * @var Example\Thing\CreativeWork\MediaObject\ImageObject|Example\Thing\CreativeWork\Photograph
     */
    private $photo;

    /**
     * Photographs of this place (legacy spelling; see singular form, photo).
     *
     * @var Example\Thing\CreativeWork\MediaObject\ImageObject|Example\Thing\CreativeWork\Photograph
     */
    private $photos;

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
     * The telephone number.
     *
     * @var String
     */
    private $telephone;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Place";

    /**
     * @return Example\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param $address Example\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function setAddress($address)
    {
        $this->address = $address;
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
     * @return Example\Thing\Place
     */
    public function getContainedIn()
    {
        return $this->containedIn;
    }

    /**
     * @param $containedIn Example\Thing\Place
     */
    public function setContainedIn($containedIn)
    {
        $this->containedIn = $containedIn;
        return $this;
    }

    /**
     * @return Example\Thing\Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param $event Example\Thing\Event
     */
    public function setEvent($event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * @return Example\Thing\Event
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param $events Example\Thing\Event
     */
    public function setEvents($events)
    {
        $this->events = $events;
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
     * @return Example\Thing\Intangible\StructuredValue\GeoCoordinates|Example\Thing\Intangible\StructuredValue\GeoShape
     */
    public function getGeo()
    {
        return $this->geo;
    }

    /**
     * @param $geo Example\Thing\Intangible\StructuredValue\GeoCoordinates|Example\Thing\Intangible\StructuredValue\GeoShape
     */
    public function setGeo($geo)
    {
        $this->geo = $geo;
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
     * @return String|Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param $logo String|Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * @return String
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * @param $map String
     */
    public function setMap($map)
    {
        $this->map = $map;
        return $this;
    }

    /**
     * @return String
     */
    public function getMaps()
    {
        return $this->maps;
    }

    /**
     * @param $maps String
     */
    public function setMaps($maps)
    {
        $this->maps = $maps;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\StructuredValue\OpeningHoursSpecification
     */
    public function getOpeningHoursSpecification()
    {
        return $this->openingHoursSpecification;
    }

    /**
     * @param $openingHoursSpecification Example\Thing\Intangible\StructuredValue\OpeningHoursSpecification
     */
    public function setOpeningHoursSpecification($openingHoursSpecification)
    {
        $this->openingHoursSpecification = $openingHoursSpecification;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\MediaObject\ImageObject|Example\Thing\CreativeWork\Photograph
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param $photo Example\Thing\CreativeWork\MediaObject\ImageObject|Example\Thing\CreativeWork\Photograph
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\MediaObject\ImageObject|Example\Thing\CreativeWork\Photograph
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param $photos Example\Thing\CreativeWork\MediaObject\ImageObject|Example\Thing\CreativeWork\Photograph
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
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

}
