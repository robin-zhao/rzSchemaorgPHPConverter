<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Event;

use Example\Thing\Event;

/**
 * Publication Event
 * http://schema.org/PublicationEvent
 */
class PublicationEvent extends Event
{

    /**
     * A flag to signal that the publication is accessible for free.
     *
     * @var Boolean
     */
    private $free;

    /**
     * A broadcast service associated with the publication event
     *
     * @var Example\Thing\BroadcastService
     */
    private $publishedOn;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/PublicationEvent";

    public function getFree()
    {
        return $this->free;
    }

    public function setFree($free)
    {
        $this->free = $free;
        return $this;
    }

    public function getPublishedOn()
    {
        return $this->publishedOn;
    }

    public function setPublishedOn($publishedOn)
    {
        $this->publishedOn = $publishedOn;
        return $this;
    }

}
