<?php

namespace Example\Thing\Event\PublicationEvent;

use Example\Thing\Event\PublicationEvent;

/**
 * Broadcast Event
 * http://schema.org/BroadcastEvent
 */
class BroadcastEvent extends PublicationEvent
{

    /**
     * schema.org url
     */
    private $url = "http://schema.org/BroadcastEvent";

}
