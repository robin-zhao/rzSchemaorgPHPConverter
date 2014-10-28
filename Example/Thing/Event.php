<?php

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

    public function getattendee()
    {
        return $this->attendee;
    }

    public function setattendee($attendee)
    {
        $this->attendee = $attendee;
        return $this;
    }

    public function getattendees()
    {
        return $this->attendees;
    }

    public function setattendees($attendees)
    {
        $this->attendees = $attendees;
        return $this;
    }

    public function getdoorTime()
    {
        return $this->doorTime;
    }

    public function setdoorTime($doorTime)
    {
        $this->doorTime = $doorTime;
        return $this;
    }

    public function getduration()
    {
        return $this->duration;
    }

    public function setduration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    public function getendDate()
    {
        return $this->endDate;
    }

    public function setendDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function geteventStatus()
    {
        return $this->eventStatus;
    }

    public function seteventStatus($eventStatus)
    {
        $this->eventStatus = $eventStatus;
        return $this;
    }

    public function getlocation()
    {
        return $this->location;
    }

    public function setlocation($location)
    {
        $this->location = $location;
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

    public function getperformer()
    {
        return $this->performer;
    }

    public function setperformer($performer)
    {
        $this->performer = $performer;
        return $this;
    }

    public function getperformers()
    {
        return $this->performers;
    }

    public function setperformers($performers)
    {
        $this->performers = $performers;
        return $this;
    }

    public function getpreviousStartDate()
    {
        return $this->previousStartDate;
    }

    public function setpreviousStartDate($previousStartDate)
    {
        $this->previousStartDate = $previousStartDate;
        return $this;
    }

    public function getstartDate()
    {
        return $this->startDate;
    }

    public function setstartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function getsubEvent()
    {
        return $this->subEvent;
    }

    public function setsubEvent($subEvent)
    {
        $this->subEvent = $subEvent;
        return $this;
    }

    public function getsubEvents()
    {
        return $this->subEvents;
    }

    public function setsubEvents($subEvents)
    {
        $this->subEvents = $subEvents;
        return $this;
    }

    public function getsuperEvent()
    {
        return $this->superEvent;
    }

    public function setsuperEvent($superEvent)
    {
        $this->superEvent = $superEvent;
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

}
