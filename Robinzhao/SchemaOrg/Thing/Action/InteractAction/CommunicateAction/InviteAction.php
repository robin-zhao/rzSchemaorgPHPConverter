<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

use Robinzhao\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

/**
 * Invite Action
 * http://schema.org/InviteAction
 */
class InviteAction extends CommunicateAction
{

    /**
     * Upcoming or past event associated with this place or organization.
     *
     * @var Robinzhao\SchemaOrg\Thing\Event
     */
    protected $event;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/InviteAction";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param $event Robinzhao\SchemaOrg\Thing\Event
     */
    public function setEvent($event)
    {
        $this->event = $event;
        return $this;
    }

}
