<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action;

use Robinzhao\SchemaOrg\Thing\Action;

/**
 * Search Action
 * http://schema.org/SearchAction
 */
class SearchAction extends Action
{

    /**
     * A sub property of instrument. The query used on this action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Class|String
     */
    public $query;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/SearchAction";

    /**
     * @param $query Robinzhao\SchemaOrg\Thing\Class|String
     */
    public function addQuery($query)
    {
        $this->query []= $query;
        return $this;
    }

}
