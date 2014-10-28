<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action;

use Example\Thing\Action;

/**
 * Move Action
 * http://schema.org/MoveAction
 */
class MoveAction extends Action
{

    /**
     * A sub property of location. The original location of the object or the agent before the action.
     *
     * @var Example\Thing\Place|Float
     */
    private $fromLocation;

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     *
     * @var Example\Thing\Place|Float
     */
    private $toLocation;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MoveAction";

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
