<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action\InteractAction;

use Example\Thing\Action\InteractAction;

/**
 * Leave Action
 * http://schema.org/LeaveAction
 */
class LeaveAction extends InteractAction
{

    /**
     * Upcoming or past event associated with this place or organization.
     *
     * @var Example\Thing\Event
     */
    protected $event;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/LeaveAction";

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

}
