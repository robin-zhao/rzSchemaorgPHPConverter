<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing\Place|Float
     */
    protected $fromLocation;

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     *
     * @var Example\Thing\Place|Float
     */
    protected $toLocation;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/TransferAction";

    /**
     * @return Example\Thing\Place|Float
     */
    public function getFromLocation()
    {
        return $this->fromLocation;
    }

    /**
     * @param $fromLocation Example\Thing\Place|Float
     */
    public function setFromLocation($fromLocation)
    {
        $this->fromLocation = $fromLocation;
        return $this;
    }

    /**
     * @return Example\Thing\Place|Float
     */
    public function getToLocation()
    {
        return $this->toLocation;
    }

    /**
     * @param $toLocation Example\Thing\Place|Float
     */
    public function setToLocation($toLocation)
    {
        $this->toLocation = $toLocation;
        return $this;
    }

}
