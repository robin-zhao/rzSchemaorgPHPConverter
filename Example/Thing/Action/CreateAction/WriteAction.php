<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing\Intangible\Language
     */
    protected $language;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/WriteAction";

    /**
     * @return Example\Thing\Intangible\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param $language Example\Thing\Intangible\Language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

}
