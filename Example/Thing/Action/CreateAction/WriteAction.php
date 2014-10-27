<?php

namespace Example\Thing\Action\CreateAction;

use Example\Thing\Action\CreateAction;

/**
 * Write Action
 * http://schema.org/WriteAction
 */
class WriteAction extends CreateAction
{

    /**
     * A sub property of instrument. The languaged used on this action.
     *
     * @var Language
     */
    private $language;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/WriteAction";

    public function getlanguage()
    {
        return $this->language;
    }

    public function setlanguage($language)
    {
        $this->language = $language;
        return $this;
    }

}
