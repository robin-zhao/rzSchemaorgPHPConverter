<?php

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

    public function getcollection()
    {
        return $this->collection;
    }

    public function setcollection($collection)
    {
        $this->collection = $collection;
        return $this;
    }

}
