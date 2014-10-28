<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing;

use Example\Thing;

/**
 * Event
 * http://schema.org/Event
 */
class Event extends Thing
{

    /**
     * A person or organization attending the event.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $attendee;

    /**
     * A person attending the event (legacy spelling; see singular form, attendee).
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $attendees;

    /**
     * The time admission will commence.
     *
     * @var DateTime
     */
    private $doorTime;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
     *
     * @var Example\Thing\Intangible\Quantity\Duration
     */
    private $duration;

    /**
     * The end date and time of the event or item (in ISO 8601 date format).
     *
     * @var DateTime
     */
    private $endDate;

    /**
     * An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.
     *
     * @var Example\Thing\Intangible\Enumeration\EventStatusType
     */
    private $eventStatus;

    /**
     * The location of the event, organization or action.
     *
     * @var Example\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|Example\Thing\Place
     */
    private $location;

    /**
     * An offer to transfer some rights to an item or to provide a service—for example, an offer to sell tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to repair a motorcycle, or to loan a book.
     *
     * @var Example\Thing\Intangible\Offer
     */
    private $offers;

    /**
     * A performer at the event—for example, a presenter, musician, musical group or actor.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $performer;

    /**
     * The main performer or performers of the event—for example, a presenter, musician, or actor (legacy spelling; see singular form, performer).
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $performers;

    /**
     * Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events, the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has been postponed and rescheduled multiple times, this field may be repeated.
     *
     * @var DateTime
     */
    private $previousStartDate;

    /**
     * The start date and time of the event or item (in ISO 8601 date format).
     *
     * @var DateTime
     */
    private $startDate;

    /**
     * An Event that is part of this event. For example, a conference event includes many presentations, each are a subEvent of the conference.
     *
     * @var Example\Thing\Event
     */
    private $subEvent;

    /**
     * Events that are a part of this event. For example, a conference event includes many presentations, each are subEvents of the conference (legacy spelling; see singular form, subEvent).
     *
     * @var Example\Thing\Event
     */
    private $subEvents;

    /**
     * An event that this event is a part of. For example, a collection of individual music performances might each have a music festival as their superEvent.
     *
     * @var Example\Thing\Event
     */
    private $superEvent;

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     * @var String
     */
    private $typicalAgeRange;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Event";

    /**
     * @return Example\Thing\Organization|Example\Thing\Person
     */
    public function getAttendee()
    {
        return $this->attendee;
    }

    /**
     * @param $attendee Example\Thing\Organization|Example\Thing\Person
     */
    public function setAttendee($attendee)
    {
        $this->attendee = $attendee;
        return $this;
    }

    /**
     * @return Example\Thing\Organization|Example\Thing\Person
     */
    public function getAttendees()
    {
        return $this->attendees;
    }

    /**
     * @param $attendees Example\Thing\Organization|Example\Thing\Person
     */
    public function setAttendees($attendees)
    {
        $this->attendees = $attendees;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDoorTime()
    {
        return $this->doorTime;
    }

    /**
     * @param $doorTime DateTime
     */
    public function setDoorTime($doorTime)
    {
        $this->doorTime = $doorTime;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Quantity\Duration
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param $duration Example\Thing\Intangible\Quantity\Duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param $endDate DateTime
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Enumeration\EventStatusType
     */
    public function getEventStatus()
    {
        return $this->eventStatus;
    }

    /**
     * @param $eventStatus Example\Thing\Intangible\Enumeration\EventStatusType
     */
    public function setEventStatus($eventStatus)
    {
        $this->eventStatus = $eventStatus;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|Example\Thing\Place
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param $location Example\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|Example\Thing\Place
     */
    public function setLocation($location)
    {
        $this->location = $location;
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
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * @param $performer Example\Thing\Organization|Example\Thing\Person
     */
    public function setPerformer($performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * @return Example\Thing\Organization|Example\Thing\Person
     */
    public function getPerformers()
    {
        return $this->performers;
    }

    /**
     * @param $performers Example\Thing\Organization|Example\Thing\Person
     */
    public function setPerformers($performers)
    {
        $this->performers = $performers;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getPreviousStartDate()
    {
        return $this->previousStartDate;
    }

    /**
     * @param $previousStartDate DateTime
     */
    public function setPreviousStartDate($previousStartDate)
    {
        $this->previousStartDate = $previousStartDate;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param $startDate DateTime
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return Example\Thing\Event
     */
    public function getSubEvent()
    {
        return $this->subEvent;
    }

    /**
     * @param $subEvent Example\Thing\Event
     */
    public function setSubEvent($subEvent)
    {
        $this->subEvent = $subEvent;
        return $this;
    }

    /**
     * @return Example\Thing\Event
     */
    public function getSubEvents()
    {
        return $this->subEvents;
    }

    /**
     * @param $subEvents Example\Thing\Event
     */
    public function setSubEvents($subEvents)
    {
        $this->subEvents = $subEvents;
        return $this;
    }

    /**
     * @return Example\Thing\Event
     */
    public function getSuperEvent()
    {
        return $this->superEvent;
    }

    /**
     * @param $superEvent Example\Thing\Event
     */
    public function setSuperEvent($superEvent)
    {
        $this->superEvent = $superEvent;
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

}
