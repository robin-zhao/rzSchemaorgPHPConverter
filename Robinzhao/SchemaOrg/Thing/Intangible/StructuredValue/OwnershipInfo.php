<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue;

use Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue;

/**
 * Ownership Info
 * http://schema.org/OwnershipInfo
 */
class OwnershipInfo extends StructuredValue
{

    /**
     * The organization or person from which the product was acquired.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $acquiredFrom;

    /**
     * The date and time of obtaining the product.
     *
     * @var DateTime
     */
    public $ownedFrom;

    /**
     * The date and time of giving up ownership on the product.
     *
     * @var DateTime
     */
    public $ownedThrough;

    /**
     * The product that this structured value is referring to.
     *
     * @var Robinzhao\SchemaOrg\Thing\Product
     */
    public $typeOfGood;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/OwnershipInfo";

    /**
     * @param $acquiredFrom Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addAcquiredFrom($acquiredFrom)
    {
        $this->acquiredFrom []= $acquiredFrom;
        return $this;
    }

    /**
     * @param $ownedFrom DateTime
     */
    public function addOwnedFrom($ownedFrom)
    {
        $this->ownedFrom []= $ownedFrom;
        return $this;
    }

    /**
     * @param $ownedThrough DateTime
     */
    public function addOwnedThrough($ownedThrough)
    {
        $this->ownedThrough []= $ownedThrough;
        return $this;
    }

    /**
     * @param $typeOfGood Robinzhao\SchemaOrg\Thing\Product
     */
    public function addTypeOfGood($typeOfGood)
    {
        $this->typeOfGood []= $typeOfGood;
        return $this;
    }


}