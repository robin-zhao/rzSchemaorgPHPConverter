<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Action\AssessAction;

use Robinzhao\SchemaOrg\Thing\Action\AssessAction;

/**
 * Choose Action
 * http://schema.org/ChooseAction
 */
class ChooseAction extends AssessAction
{

    /**
     * A sub property of object. The options subject to this action.
     *
     * @var String|Robinzhao\SchemaOrg\Thing
     */
    public $option;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/ChooseAction";

    /**
     * @param $option String|Robinzhao\SchemaOrg\Thing
     */
    public function addOption($option)
    {
        $this->option []= $option;
        return $this;
    }


}