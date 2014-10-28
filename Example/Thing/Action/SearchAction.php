<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action;

use Example\Thing\Action;

/**
 * Search Action
 * http://schema.org/SearchAction
 */
class SearchAction extends Action
{

    /**
     * A sub property of instrument. The query used on this action.
     *
     * @var Example\Thing\Class|String
     */
    protected $query;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/SearchAction";

    /**
     * @return Example\Thing\Class|String
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param $query Example\Thing\Class|String
     */
    public function setQuery($query)
    {
        $this->query = $query;
        return $this;
    }

}
