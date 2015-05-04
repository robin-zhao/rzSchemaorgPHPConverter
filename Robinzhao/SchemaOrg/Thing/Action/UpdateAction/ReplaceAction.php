<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
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
    protected $replacee;

    /**
     * A sub property of object. The object that replaces.
     *
     * @var Robinzhao\SchemaOrg\Thing
     */
    protected $replacer;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/ReplaceAction";

    /**
     * @return Robinzhao\SchemaOrg\Thing
     */
    public function getReplacee()
    {
        return $this->replacee;
    }

    /**
     * @param $replacee Robinzhao\SchemaOrg\Thing
     */
    public function setReplacee($replacee)
    {
        $this->replacee = $replacee;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing
     */
    public function getReplacer()
    {
        return $this->replacer;
    }

    /**
     * @param $replacer Robinzhao\SchemaOrg\Thing
     */
    public function setReplacer($replacer)
    {
        $this->replacer = $replacer;
        return $this;
    }

}
