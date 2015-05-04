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
    protected $query;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/SearchAction";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Class|String
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param $query Robinzhao\SchemaOrg\Thing\Class|String
     */
    public function setQuery($query)
    {
        $this->query = $query;
        return $this;
    }

}
