<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Product;

use Robinzhao\SchemaOrg\Thing\Product;

/**
 * Some Products
 * http://schema.org/SomeProducts
 */
class SomeProducts extends Product
{

    /**
     * The current approximate inventory level for the item or items.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public $inventoryLevel;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/SomeProducts";

    /**
     * @param $inventoryLevel Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function addInventoryLevel($inventoryLevel)
    {
        $this->inventoryLevel []= $inventoryLevel;
        return $this;
    }

}
