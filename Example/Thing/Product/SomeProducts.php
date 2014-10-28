<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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

    public function getInventoryLevel()
    {
        return $this->inventoryLevel;
    }

    public function setInventoryLevel($inventoryLevel)
    {
        $this->inventoryLevel = $inventoryLevel;
        return $this;
    }

}
