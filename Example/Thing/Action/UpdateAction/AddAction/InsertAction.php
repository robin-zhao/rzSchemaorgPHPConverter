<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing\Place|Float
     */
    protected $toLocation;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/InsertAction";

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
