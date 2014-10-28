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

    public function getAttendee()
    {
        return $this->attendee;
    }

    public function setAttendee($attendee)
    {
        $this->attendee = $attendee;
        return $this;
    }

    public function getAttendees()
    {
        return $this->attendees;
    }

    public function setAttendees($attendees)
    {
        $this->attendees = $attendees;
        return $this;
    }

    public function getDoorTime()
    {
        return $this->doorTime;
    }

    public function setDoorTime($doorTime)
    {
        $this->doorTime = $doorTime;
        return $this;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function getEventStatus()
    {
        return $this->eventStatus;
    }

    public function setEventStatus($eventStatus)
    {
        $this->eventStatus = $eventStatus;
        return $this;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    public function getOffers()
    {
        return $this->offers;
    }

    public function setOffers($offers)
    {
        $this->offers = $offers;
        return $this;
    }

    public function getPerformer()
    {
        return $this->performer;
    }

    public function setPerformer($performer)
    {
        $this->performer = $performer;
        return $this;
    }

    public function getPerformers()
    {
        return $this->performers;
    }

    public function setPerformers($performers)
    {
        $this->performers = $performers;
        return $this;
    }

    public function getPreviousStartDate()
    {
        return $this->previousStartDate;
    }

    public function setPreviousStartDate($previousStartDate)
    {
        $this->previousStartDate = $previousStartDate;
        return $this;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function getSubEvent()
    {
        return $this->subEvent;
    }

    public function setSubEvent($subEvent)
    {
        $this->subEvent = $subEvent;
        return $this;
    }

    public function getSubEvents()
    {
        return $this->subEvents;
    }

    public function setSubEvents($subEvents)
    {
        $this->subEvents = $subEvents;
        return $this;
    }

    public function getSuperEvent()
    {
        return $this->superEvent;
    }

    public function setSuperEvent($superEvent)
    {
        $this->superEvent = $superEvent;
        return $this;
    }

    public function getTypicalAgeRange()
    {
        return $this->typicalAgeRange;
    }

    public function setTypicalAgeRange($typicalAgeRange)
    {
        $this->typicalAgeRange = $typicalAgeRange;
        return $this;
    }

}
