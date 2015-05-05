<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\UpdateAction\AddAction;

use Robinzhao\SchemaOrg\Thing\Action\UpdateAction\AddAction;

/**
 * Insert Action
 * http://schema.org/InsertAction
 */
class InsertAction extends AddAction
{

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
    public $context = "http://schema.org/InsertAction";

    /**
     * @param $toLocation Robinzhao\SchemaOrg\Thing\Place|Float
     */
    public function addToLocation($toLocation)
    {
        $this->toLocation []= $toLocation;
        return $this;
    }

}
