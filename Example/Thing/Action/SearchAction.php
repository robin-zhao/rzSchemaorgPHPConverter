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
    private $query;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/SearchAction";

    public function getquery()
    {
        return $this->query;
    }

    public function setquery($query)
    {
        $this->query = $query;
        return $this;
    }

}
