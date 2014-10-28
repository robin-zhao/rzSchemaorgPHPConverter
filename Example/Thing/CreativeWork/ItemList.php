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
    protected $itemListElement;

    /**
     * Type of ordering (e.g. Ascending, Descending, Unordered).
     *
     * @var String
     */
    protected $itemListOrder;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/ItemList";

    /**
     * @return String
     */
    public function getItemListElement()
    {
        return $this->itemListElement;
    }

    /**
     * @param $itemListElement String
     */
    public function setItemListElement($itemListElement)
    {
        $this->itemListElement = $itemListElement;
        return $this;
    }

    /**
     * @return String
     */
    public function getItemListOrder()
    {
        return $this->itemListOrder;
    }

    /**
     * @param $itemListOrder String
     */
    public function setItemListOrder($itemListOrder)
    {
        $this->itemListOrder = $itemListOrder;
        return $this;
    }

}
