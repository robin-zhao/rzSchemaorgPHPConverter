<?php

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
     * @var ProductModel
     */
    private $isVariantOf;

    /**
     * A pointer from a previous, often discontinued variant of the product to its newer variant.
     *
     * @var ProductModel
     */
    private $predecessorOf;

    /**
     * A pointer from a newer variant of a product  to its previous, often discontinued predecessor.
     *
     * @var ProductModel
     */
    private $successorOf;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/ProductModel";

    public function getisVariantOf()
    {
        return $this->isVariantOf;
    }

    public function setisVariantOf($isVariantOf)
    {
        $this->isVariantOf = $isVariantOf;
        return $this;
    }

    public function getpredecessorOf()
    {
        return $this->predecessorOf;
    }

    public function setpredecessorOf($predecessorOf)
    {
        $this->predecessorOf = $predecessorOf;
        return $this;
    }

    public function getsuccessorOf()
    {
        return $this->successorOf;
    }

    public function setsuccessorOf($successorOf)
    {
        $this->successorOf = $successorOf;
        return $this;
    }

}
