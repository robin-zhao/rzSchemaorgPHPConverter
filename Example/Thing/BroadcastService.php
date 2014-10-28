<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing;

use Example\Thing;

/**
 * Broadcast Service
 * http://schema.org/BroadcastService
 */
class BroadcastService extends Thing
{

    /**
     * The area within which users can expect to reach the broadcast service.
     *
     * @var Example\Thing\Place
     */
    private $area;

    /**
     * The organization owning or operating the broadcast service.
     *
     * @var Example\Thing\Organization
     */
    private $broadcaster;

    /**
     * A broadcast service to which the broadcast service may belong to such as regional variations of a national channel.
     *
     * @var Example\Thing\BroadcastService
     */
    private $parentService;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/BroadcastService";

    public function getArea()
    {
        return $this->area;
    }

    public function setArea($area)
    {
        $this->area = $area;
        return $this;
    }

    public function getBroadcaster()
    {
        return $this->broadcaster;
    }

    public function setBroadcaster($broadcaster)
    {
        $this->broadcaster = $broadcaster;
        return $this;
    }

    public function getParentService()
    {
        return $this->parentService;
    }

    public function setParentService($parentService)
    {
        $this->parentService = $parentService;
        return $this;
    }

}
