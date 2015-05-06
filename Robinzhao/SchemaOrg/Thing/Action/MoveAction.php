<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Action;

use Robinzhao\SchemaOrg\Thing\Action;

/**
 * Move Action
 * http://schema.org/MoveAction
 */
class MoveAction extends Action
{

    /**
     * A sub property of location. The original location of the object or the agent before the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place|Float
     */
    public $fromLocation;

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place|Float
     */
    public $toLocation;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MoveAction";

    /**
     * @param $fromLocation Robinzhao\SchemaOrg\Thing\Place|Float
     */
    public function addFromLocation($fromLocation)
    {
        $this->fromLocation []= $fromLocation;
        return $this;
    }

    /**
     * @param $toLocation Robinzhao\SchemaOrg\Thing\Place|Float
     */
    public function addToLocation($toLocation)
    {
        $this->toLocation []= $toLocation;
        return $this;
    }


}