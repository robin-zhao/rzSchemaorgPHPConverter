<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

/**
 * Item List
 * http://schema.org/ItemList
 */
class ItemList extends CreativeWork
{

    /**
     * A single list item.
     *
     * @var String
     */
    private $itemListElement;

    /**
     * Type of ordering (e.g. Ascending, Descending, Unordered).
     *
     * @var String
     */
    private $itemListOrder;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/ItemList";

    public function getitemListElement()
    {
        return $this->itemListElement;
    }

    public function setitemListElement($itemListElement)
    {
        $this->itemListElement = $itemListElement;
        return $this;
    }

    public function getitemListOrder()
    {
        return $this->itemListOrder;
    }

    public function setitemListOrder($itemListOrder)
    {
        $this->itemListOrder = $itemListOrder;
        return $this;
    }

}
