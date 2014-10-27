<?php

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
     * @var PostalAddress
     */
    private $address;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var AggregateRating
     */
    private $aggregateRating;

    /**
     * The basic containment relation between places.
     *
     * @var Place
     */
    private $containedIn;

    /**
     * Upcoming or past event associated with this place or organization.
     *
     * @var Event
     */
    private $event;

    /**
     * Upcoming or past events associated with this place or organization (legacy spelling; see singular form, event).
     *
     * @var Event
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
     * @var GeoCoordinates|GeoShape
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
     * @var String|ImageObject
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
     * @var OpeningHoursSpecification
     */
    private $openingHoursSpecification;

    /**
     * A photograph of this place.
     *
     * @var ImageObject|Photograph
     */
    private $photo;

    /**
     * Photographs of this place (legacy spelling; see singular form, photo).
     *
     * @var ImageObject|Photograph
     */
    private $photos;

    /**
     * A review of the item.
     *
     * @var Review
     */
    private $review;

    /**
     * Review of the item (legacy spelling; see singular form, review).
     *
     * @var Review
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

    public function getcontainedIn()
    {
        return $this->containedIn;
    }

    public function setcontainedIn($containedIn)
    {
        $this->containedIn = $containedIn;
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

    public function getgeo()
    {
        return $this->geo;
    }

    public function setgeo($geo)
    {
        $this->geo = $geo;
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

    public function getlogo()
    {
        return $this->logo;
    }

    public function setlogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

    public function getmap()
    {
        return $this->map;
    }

    public function setmap($map)
    {
        $this->map = $map;
        return $this;
    }

    public function getmaps()
    {
        return $this->maps;
    }

    public function setmaps($maps)
    {
        $this->maps = $maps;
        return $this;
    }

    public function getopeningHoursSpecification()
    {
        return $this->openingHoursSpecification;
    }

    public function setopeningHoursSpecification($openingHoursSpecification)
    {
        $this->openingHoursSpecification = $openingHoursSpecification;
        return $this;
    }

    public function getphoto()
    {
        return $this->photo;
    }

    public function setphoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }

    public function getphotos()
    {
        return $this->photos;
    }

    public function setphotos($photos)
    {
        $this->photos = $photos;
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

    public function gettelephone()
    {
        return $this->telephone;
    }

    public function settelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

}
