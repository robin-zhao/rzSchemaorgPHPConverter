<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Product;

use Robinzhao\SchemaOrg\Thing\Product;

/**
 * Product Model
 * http://schema.org/ProductModel
 */
class ProductModel extends Product
{

    /**
     * A pointer to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive.
     *
     * @var Robinzhao\SchemaOrg\Thing\Product\ProductModel
     */
    public $isVariantOf;

    /**
     * A pointer from a previous, often discontinued variant of the product to its newer variant.
     *
     * @var Robinzhao\SchemaOrg\Thing\Product\ProductModel
     */
    public $predecessorOf;

    /**
     * A pointer from a newer variant of a product  to its previous, often discontinued predecessor.
     *
     * @var Robinzhao\SchemaOrg\Thing\Product\ProductModel
     */
    public $successorOf;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/ProductModel";

    /**
     * @param $isVariantOf Robinzhao\SchemaOrg\Thing\Product\ProductModel
     */
    public function addIsVariantOf($isVariantOf)
    {
        $this->isVariantOf []= $isVariantOf;
        return $this;
    }

    /**
     * @param $predecessorOf Robinzhao\SchemaOrg\Thing\Product\ProductModel
     */
    public function addPredecessorOf($predecessorOf)
    {
        $this->predecessorOf []= $predecessorOf;
        return $this;
    }

    /**
     * @param $successorOf Robinzhao\SchemaOrg\Thing\Product\ProductModel
     */
    public function addSuccessorOf($successorOf)
    {
        $this->successorOf []= $successorOf;
        return $this;
    }


}