<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing;

use Robinzhao\SchemaOrg\Thing;

/**
 * Action
 * http://schema.org/Action
 */
class Action extends Thing
{

    /**
     * The direct performer or driver of the action (animate or inanimate). e.g. *John* wrote a book.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $agent;

    /**
     * When the Action was performed: end time. This is for actions that span a period of time. e.g. John wrote a book from January to *December*.
     *
     * @var DateTime
     */
    public $endTime;

    /**
     * The object that helped the agent perform the action. e.g. John wrote a book with *a pen*.
     *
     * @var Robinzhao\SchemaOrg\Thing
     */
    public $instrument;

    /**
     * The location of the event, organization or action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|Robinzhao\SchemaOrg\Thing\Place
     */
    public $location;

    /**
     * The object upon the action is carried out, whose state is kept intact or changed. Also known as the semantic roles patient, affected or undergoer (which change their state) or theme (which doesn't). e.g. John read *a book*.
     *
     * @var Robinzhao\SchemaOrg\Thing
     */
    public $object;

    /**
     * Other co-agents that participated in the action indirectly. e.g. John wrote a book with *Steve*.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $participant;

    /**
     * The result produced in the action. e.g. John wrote *a book*.
     *
     * @var Robinzhao\SchemaOrg\Thing
     */
    public $result;

    /**
     * When the Action was performed: start time. This is for actions that span a period of time. e.g. John wrote a book from *January* to December.
     *
     * @var DateTime
     */
    public $startTime;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Action";

    /**
     * @param $agent Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addAgent($agent)
    {
        $this->agent []= $agent;
        return $this;
    }

    /**
     * @param $endTime DateTime
     */
    public function addEndTime($endTime)
    {
        $this->endTime []= $endTime;
        return $this;
    }

    /**
     * @param $instrument Robinzhao\SchemaOrg\Thing
     */
    public function addInstrument($instrument)
    {
        $this->instrument []= $instrument;
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
     * @param $object Robinzhao\SchemaOrg\Thing
     */
    public function addObject($object)
    {
        $this->object []= $object;
        return $this;
    }

    /**
     * @param $participant Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addParticipant($participant)
    {
        $this->participant []= $participant;
        return $this;
    }

    /**
     * @param $result Robinzhao\SchemaOrg\Thing
     */
    public function addResult($result)
    {
        $this->result []= $result;
        return $this;
    }

    /**
     * @param $startTime DateTime
     */
    public function addStartTime($startTime)
    {
        $this->startTime []= $startTime;
        return $this;
    }

}
