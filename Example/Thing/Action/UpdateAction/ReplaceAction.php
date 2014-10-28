<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action\UpdateAction;

use Example\Thing\Action\UpdateAction;

/**
 * Replace Action
 * http://schema.org/ReplaceAction
 */
class ReplaceAction extends UpdateAction
{

    /**
     * A sub property of object. The object that is being replaced.
     *
     * @var Example\Thing
     */
    private $replacee;

    /**
     * A sub property of object. The object that replaces.
     *
     * @var Example\Thing
     */
    private $replacer;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/ReplaceAction";

    public function getReplacee()
    {
        return $this->replacee;
    }

    public function setReplacee($replacee)
    {
        $this->replacee = $replacee;
        return $this;
    }

    public function getReplacer()
    {
        return $this->replacer;
    }

    public function setReplacer($replacer)
    {
        $this->replacer = $replacer;
        return $this;
    }

}
