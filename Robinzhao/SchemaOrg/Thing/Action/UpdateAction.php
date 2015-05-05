<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action;

use Robinzhao\SchemaOrg\Thing\Action;

/**
 * Update Action
 * http://schema.org/UpdateAction
 */
class UpdateAction extends Action
{

    /**
     * A sub property of object. The collection target of the action.
     *
     * @var Robinzhao\SchemaOrg\Thing
     */
    public $collection;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/UpdateAction";

    /**
     * @param $collection Robinzhao\SchemaOrg\Thing
     */
    public function addCollection($collection)
    {
        $this->collection []= $collection;
        return $this;
    }

}
