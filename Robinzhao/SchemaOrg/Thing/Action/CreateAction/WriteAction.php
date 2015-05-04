<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\CreateAction;

use Robinzhao\SchemaOrg\Thing\Action\CreateAction;

/**
 * Write Action
 * http://schema.org/WriteAction
 */
class WriteAction extends CreateAction
{

    /**
     * A sub property of instrument. The languaged used on this action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Language
     */
    protected $language;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/WriteAction";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param $language Robinzhao\SchemaOrg\Thing\Intangible\Language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

}
