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

    public function getItemListElement()
    {
        return $this->itemListElement;
    }

    public function setItemListElement($itemListElement)
    {
        $this->itemListElement = $itemListElement;
        return $this;
    }

    public function getItemListOrder()
    {
        return $this->itemListOrder;
    }

    public function setItemListOrder($itemListOrder)
    {
        $this->itemListOrder = $itemListOrder;
        return $this;
    }

}
