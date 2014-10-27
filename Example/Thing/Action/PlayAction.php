<?php

namespace Example\Thing\Action;

use Example\Thing\Action;

/**
 * Play Action
 * http://schema.org/PlayAction
 */
class PlayAction extends Action
{

    /**
     * The intended audience of the item, i.e. the group for whom the item was created.
     *
     * @var Audience
     */
    private $audience;

    /**
     * Upcoming or past event associated with this place or organization.
     *
     * @var Event
     */
    private $event;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/PlayAction";

    public function getaudience()
    {
        return $this->audience;
    }

    public function setaudience($audience)
    {
        $this->audience = $audience;
        return $this;
    }

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
