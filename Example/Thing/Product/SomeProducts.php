<?php

namespace Example\Thing\Product;

use Example\Thing\Product;

/**
 * Some Products
 * http://schema.org/SomeProducts
 */
class SomeProducts extends Product
{

    /**
     * The current approximate inventory level for the item or items.
     *
     * @var Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    private $inventoryLevel;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/SomeProducts";

    public function getinventoryLevel()
    {
        return $this->inventoryLevel;
    }

    public function setinventoryLevel($inventoryLevel)
    {
        $this->inventoryLevel = $inventoryLevel;
        return $this;
    }

}
