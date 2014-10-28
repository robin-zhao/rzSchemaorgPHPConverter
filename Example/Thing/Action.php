<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing;

use Example\Thing;

/**
 * Action
 * http://schema.org/Action
 */
class Action extends Thing
{

    /**
     * The direct performer or driver of the action (animate or inanimate). e.g. *John* wrote a book.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $agent;

    /**
     * When the Action was performed: end time. This is for actions that span a period of time. e.g. John wrote a book from January to *December*.
     *
     * @var DateTime
     */
    private $endTime;

    /**
     * The object that helped the agent perform the action. e.g. John wrote a book with *a pen*.
     *
     * @var Example\Thing
     */
    private $instrument;

    /**
     * The location of the event, organization or action.
     *
     * @var Example\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|Example\Thing\Place
     */
    private $location;

    /**
     * The object upon the action is carried out, whose state is kept intact or changed. Also known as the semantic roles patient, affected or undergoer (which change their state) or theme (which doesn't). e.g. John read *a book*.
     *
     * @var Example\Thing
     */
    private $object;

    /**
     * Other co-agents that participated in the action indirectly. e.g. John wrote a book with *Steve*.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $participant;

    /**
     * The result produced in the action. e.g. John wrote *a book*.
     *
     * @var Example\Thing
     */
    private $result;

    /**
     * When the Action was performed: start time. This is for actions that span a period of time. e.g. John wrote a book from *January* to December.
     *
     * @var DateTime
     */
    private $startTime;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Action";

    /**
     * @return Example\Thing\Organization|Example\Thing\Person
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * @param $agent Example\Thing\Organization|Example\Thing\Person
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param $endTime DateTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return Example\Thing
     */
    public function getInstrument()
    {
        return $this->instrument;
    }

    /**
     * @param $instrument Example\Thing
     */
    public function setInstrument($instrument)
    {
        $this->instrument = $instrument;
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
     * @return Example\Thing
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param $object Example\Thing
     */
    public function setObject($object)
    {
        $this->object = $object;
        return $this;
    }

    /**
     * @return Example\Thing\Organization|Example\Thing\Person
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * @param $participant Example\Thing\Organization|Example\Thing\Person
     */
    public function setParticipant($participant)
    {
        $this->participant = $participant;
        return $this;
    }

    /**
     * @return Example\Thing
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param $result Example\Thing
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param $startTime DateTime
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

}
