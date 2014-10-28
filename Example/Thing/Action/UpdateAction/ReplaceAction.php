<?php

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

    public function getreplacee()
    {
        return $this->replacee;
    }

    public function setreplacee($replacee)
    {
        $this->replacee = $replacee;
        return $this;
    }

    public function getreplacer()
    {
        return $this->replacer;
    }

    public function setreplacer($replacer)
    {
        $this->replacer = $replacer;
        return $this;
    }

}
