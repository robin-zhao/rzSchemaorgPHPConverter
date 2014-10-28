<?php

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

    public function getagent()
    {
        return $this->agent;
    }

    public function setagent($agent)
    {
        $this->agent = $agent;
        return $this;
    }

    public function getendTime()
    {
        return $this->endTime;
    }

    public function setendTime($endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    public function getinstrument()
    {
        return $this->instrument;
    }

    public function setinstrument($instrument)
    {
        $this->instrument = $instrument;
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

    public function getobject()
    {
        return $this->object;
    }

    public function setobject($object)
    {
        $this->object = $object;
        return $this;
    }

    public function getparticipant()
    {
        return $this->participant;
    }

    public function setparticipant($participant)
    {
        $this->participant = $participant;
        return $this;
    }

    public function getresult()
    {
        return $this->result;
    }

    public function setresult($result)
    {
        $this->result = $result;
        return $this;
    }

    public function getstartTime()
    {
        return $this->startTime;
    }

    public function setstartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

}
