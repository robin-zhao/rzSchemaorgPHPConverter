<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Event;

use Robinzhao\SchemaOrg\Thing\Event;

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
    protected $free;

    /**
     * A broadcast service associated with the publication event
     *
     * @var Robinzhao\SchemaOrg\Thing\BroadcastService
     */
    protected $publishedOn;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/PublicationEvent";

    /**
     * @return Boolean
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * @param $free Boolean
     */
    public function setFree($free)
    {
        $this->free = $free;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\BroadcastService
     */
    public function getPublishedOn()
    {
        return $this->publishedOn;
    }

    /**
     * @param $publishedOn Robinzhao\SchemaOrg\Thing\BroadcastService
     */
    public function setPublishedOn($publishedOn)
    {
        $this->publishedOn = $publishedOn;
        return $this;
    }

}
