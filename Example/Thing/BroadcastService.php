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
    protected $area;

    /**
     * The organization owning or operating the broadcast service.
     *
     * @var Example\Thing\Organization
     */
    protected $broadcaster;

    /**
     * A broadcast service to which the broadcast service may belong to such as regional variations of a national channel.
     *
     * @var Example\Thing\BroadcastService
     */
    protected $parentService;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/BroadcastService";

    /**
     * @return Example\Thing\Place
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param $area Example\Thing\Place
     */
    public function setArea($area)
    {
        $this->area = $area;
        return $this;
    }

    /**
     * @return Example\Thing\Organization
     */
    public function getBroadcaster()
    {
        return $this->broadcaster;
    }

    /**
     * @param $broadcaster Example\Thing\Organization
     */
    public function setBroadcaster($broadcaster)
    {
        $this->broadcaster = $broadcaster;
        return $this;
    }

    /**
     * @return Example\Thing\BroadcastService
     */
    public function getParentService()
    {
        return $this->parentService;
    }

    /**
     * @param $parentService Example\Thing\BroadcastService
     */
    public function setParentService($parentService)
    {
        $this->parentService = $parentService;
        return $this;
    }

}
