<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Product;

use Example\Thing\Product;

/**
 * Product Model
 * http://schema.org/ProductModel
 */
class ProductModel extends Product
{

    /**
     * A pointer to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive.
     *
     * @var Example\Thing\Product\ProductModel
     */
    protected $isVariantOf;

    /**
     * A pointer from a previous, often discontinued variant of the product to its newer variant.
     *
     * @var Example\Thing\Product\ProductModel
     */
    protected $predecessorOf;

    /**
     * A pointer from a newer variant of a product  to its previous, often discontinued predecessor.
     *
     * @var Example\Thing\Product\ProductModel
     */
    protected $successorOf;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/ProductModel";

    /**
     * @return Example\Thing\Product\ProductModel
     */
    public function getIsVariantOf()
    {
        return $this->isVariantOf;
    }

    /**
     * @param $isVariantOf Example\Thing\Product\ProductModel
     */
    public function setIsVariantOf($isVariantOf)
    {
        $this->isVariantOf = $isVariantOf;
        return $this;
    }

    /**
     * @return Example\Thing\Product\ProductModel
     */
    public function getPredecessorOf()
    {
        return $this->predecessorOf;
    }

    /**
     * @param $predecessorOf Example\Thing\Product\ProductModel
     */
    public function setPredecessorOf($predecessorOf)
    {
        $this->predecessorOf = $predecessorOf;
        return $this;
    }

    /**
     * @return Example\Thing\Product\ProductModel
     */
    public function getSuccessorOf()
    {
        return $this->successorOf;
    }

    /**
     * @param $successorOf Example\Thing\Product\ProductModel
     */
    public function setSuccessorOf($successorOf)
    {
        $this->successorOf = $successorOf;
        return $this;
    }

}
