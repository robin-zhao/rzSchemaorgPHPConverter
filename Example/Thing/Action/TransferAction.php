<?php

namespace Example\Thing\Action;

use Example\Thing\Action;

/**
 * Transfer Action
 * http://schema.org/TransferAction
 */
class TransferAction extends Action
{

    /**
     * A sub property of location. The original location of the object or the agent before the action.
     *
     * @var Place|Float
     */
    private $fromLocation;

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     *
     * @var Place|Float
     */
    private $toLocation;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/TransferAction";

    public function getfromLocation()
    {
        return $this->fromLocation;
    }

    public function setfromLocation($fromLocation)
    {
        $this->fromLocation = $fromLocation;
        return $this;
    }

    public function gettoLocation()
    {
        return $this->toLocation;
    }

    public function settoLocation($toLocation)
    {
        $this->toLocation = $toLocation;
        return $this;
    }

}
