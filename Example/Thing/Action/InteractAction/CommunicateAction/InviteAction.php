<?php

namespace Example\Thing\Action\InteractAction\CommunicateAction;

use Example\Thing\Action\InteractAction\CommunicateAction;

/**
 * Invite Action
 * http://schema.org/InviteAction
 */
class InviteAction extends CommunicateAction
{

    /**
     * Upcoming or past event associated with this place or organization.
     *
     * @var Event
     */
    private $event;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/InviteAction";

    public function getevent()
    {
        return $this->event;
    }

    public function setevent($event)
    {
        $this->event = $event;
        return $this;
    }

}
