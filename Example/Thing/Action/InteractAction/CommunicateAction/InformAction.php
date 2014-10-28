<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action\InteractAction\CommunicateAction;

use Example\Thing\Action\InteractAction\CommunicateAction;

/**
 * Inform Action
 * http://schema.org/InformAction
 */
class InformAction extends CommunicateAction
{

    /**
     * Upcoming or past event associated with this place or organization.
     *
     * @var Example\Thing\Event
     */
    private $event;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/InformAction";

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
