<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

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
    public $itemListElement;

    /**
     * Type of ordering (e.g. Ascending, Descending, Unordered).
     *
     * @var String
     */
    public $itemListOrder;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/ItemList";

    /**
     * @param $itemListElement String
     */
    public function addItemListElement($itemListElement)
    {
        $this->itemListElement []= $itemListElement;
        return $this;
    }

    /**
     * @param $itemListOrder String
     */
    public function addItemListOrder($itemListOrder)
    {
        $this->itemListOrder []= $itemListOrder;
        return $this;
    }


}