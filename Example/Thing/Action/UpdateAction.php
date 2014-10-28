<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action;

use Example\Thing\Action;

/**
 * Update Action
 * http://schema.org/UpdateAction
 */
class UpdateAction extends Action
{

    /**
     * A sub property of object. The collection target of the action.
     *
     * @var Example\Thing
     */
    private $collection;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/UpdateAction";

    /**
     * @return Example\Thing
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param $collection Example\Thing
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;
        return $this;
    }

}
