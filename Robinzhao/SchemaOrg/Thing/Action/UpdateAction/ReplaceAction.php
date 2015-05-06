<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Action\UpdateAction;

use Robinzhao\SchemaOrg\Thing\Action\UpdateAction;

/**
 * Replace Action
 * http://schema.org/ReplaceAction
 */
class ReplaceAction extends UpdateAction
{

    /**
     * A sub property of object. The object that is being replaced.
     *
     * @var Robinzhao\SchemaOrg\Thing
     */
    public $replacee;

    /**
     * A sub property of object. The object that replaces.
     *
     * @var Robinzhao\SchemaOrg\Thing
     */
    public $replacer;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/ReplaceAction";

    /**
     * @param $replacee Robinzhao\SchemaOrg\Thing
     */
    public function addReplacee($replacee)
    {
        $this->replacee []= $replacee;
        return $this;
    }

    /**
     * @param $replacer Robinzhao\SchemaOrg\Thing
     */
    public function addReplacer($replacer)
    {
        $this->replacer []= $replacer;
        return $this;
    }


}