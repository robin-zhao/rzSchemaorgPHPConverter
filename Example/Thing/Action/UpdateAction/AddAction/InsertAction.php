<?php

namespace Example\Thing\Action\UpdateAction\AddAction;

use Example\Thing\Action\UpdateAction\AddAction;

/**
 * Insert Action
 * http://schema.org/InsertAction
 */
class InsertAction extends AddAction
{

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     *
     * @var Place|Float
     */
    private $toLocation;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/InsertAction";

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
