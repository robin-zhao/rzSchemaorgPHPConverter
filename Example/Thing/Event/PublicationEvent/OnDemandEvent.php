<?php

namespace Example\Thing\Event\PublicationEvent;

use Example\Thing\Event\PublicationEvent;

/**
 * On Demand Event
 * http://schema.org/OnDemandEvent
 */
class OnDemandEvent extends PublicationEvent
{

    /**
     * schema.org url
     */
    private $url = "http://schema.org/OnDemandEvent";

}
