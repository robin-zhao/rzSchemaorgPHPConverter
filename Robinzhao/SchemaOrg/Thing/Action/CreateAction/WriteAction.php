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
    public $language;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/WriteAction";

    /**
     * @param $language Robinzhao\SchemaOrg\Thing\Intangible\Language
     */
    public function addLanguage($language)
    {
        $this->language []= $language;
        return $this;
    }

}
