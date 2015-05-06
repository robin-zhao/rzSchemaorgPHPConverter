<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing;

use Robinzhao\SchemaOrg\Thing;

/**
 * Event
 * http://schema.org/Event
 */
class Event extends Thing
{

    /**
     * A person or organization attending the event.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $attendee;

    /**
     * A person attending the event (legacy spelling; see singular form, attendee).
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $attendees;

    /**
     * The time admission will commence.
     *
     * @var DateTime
     */
    public $doorTime;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public $duration;

    /**
     * The end date and time of the event or item (in ISO 8601 date format).
     *
     * @var DateTime
     */
    public $endDate;

    /**
     * An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\EventStatusType
     */
    public $eventStatus;

    /**
     * The location of the event, organization or action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|Robinzhao\SchemaOrg\Thing\Place
     */
    public $location;

    /**
     * An offer to transfer some rights to an item or to provide a service—for example, an offer to sell tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to repair a motorcycle, or to loan a book.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    public $offers;

    /**
     * A performer at the event—for example, a presenter, musician, musical group or actor.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $performer;

    /**
     * The main performer or performers of the event—for example, a presenter, musician, or actor (legacy spelling; see singular form, performer).
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $performers;

    /**
     * Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events, the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has been postponed and rescheduled multiple times, this field may be repeated.
     *
     * @var DateTime
     */
    public $previousStartDate;

    /**
     * The start date and time of the event or item (in ISO 8601 date format).
     *
     * @var DateTime
     */
    public $startDate;

    /**
     * An Event that is part of this event. For example, a conference event includes many presentations, each are a subEvent of the conference.
     *
     * @var Robinzhao\SchemaOrg\Thing\Event
     */
    public $subEvent;

    /**
     * Events that are a part of this event. For example, a conference event includes many presentations, each are subEvents of the conference (legacy spelling; see singular form, subEvent).
     *
     * @var Robinzhao\SchemaOrg\Thing\Event
     */
    public $subEvents;

    /**
     * An event that this event is a part of. For example, a collection of individual music performances might each have a music festival as their superEvent.
     *
     * @var Robinzhao\SchemaOrg\Thing\Event
     */
    public $superEvent;

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     * @var String
     */
    public $typicalAgeRange;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Event";

    /**
     * @param $attendee Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addAttendee($attendee)
    {
        $this->attendee []= $attendee;
        return $this;
    }

    /**
     * @param $attendees Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addAttendees($attendees)
    {
        $this->attendees []= $attendees;
        return $this;
    }

    /**
     * @param $doorTime DateTime
     */
    public function addDoorTime($doorTime)
    {
        $this->doorTime []= $doorTime;
        return $this;
    }

    /**
     * @param $duration Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public function addDuration($duration)
    {
        $this->duration []= $duration;
        return $this;
    }

    /**
     * @param $endDate DateTime
     */
    public function addEndDate($endDate)
    {
        $this->endDate []= $endDate;
        return $this;
    }

    /**
     * @param $eventStatus Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\EventStatusType
     */
    public function addEventStatus($eventStatus)
    {
        $this->eventStatus []= $eventStatus;
        return $this;
    }

    /**
     * @param $location Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|Robinzhao\SchemaOrg\Thing\Place
     */
    public function addLocation($location)
    {
        $this->location []= $location;
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
     * @param $performer Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addPerformer($performer)
    {
        $this->performer []= $performer;
        return $this;
    }

    /**
     * @param $performers Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addPerformers($performers)
    {
        $this->performers []= $performers;
        return $this;
    }

    /**
     * @param $previousStartDate DateTime
     */
    public function addPreviousStartDate($previousStartDate)
    {
        $this->previousStartDate []= $previousStartDate;
        return $this;
    }

    /**
     * @param $startDate DateTime
     */
    public function addStartDate($startDate)
    {
        $this->startDate []= $startDate;
        return $this;
    }

    /**
     * @param $subEvent Robinzhao\SchemaOrg\Thing\Event
     */
    public function addSubEvent($subEvent)
    {
        $this->subEvent []= $subEvent;
        return $this;
    }

    /**
     * @param $subEvents Robinzhao\SchemaOrg\Thing\Event
     */
    public function addSubEvents($subEvents)
    {
        $this->subEvents []= $subEvents;
        return $this;
    }

    /**
     * @param $superEvent Robinzhao\SchemaOrg\Thing\Event
     */
    public function addSuperEvent($superEvent)
    {
        $this->superEvent []= $superEvent;
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


}