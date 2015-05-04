<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
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
    protected $acquiredFrom;

    /**
     * The date and time of obtaining the product.
     *
     * @var DateTime
     */
    protected $ownedFrom;

    /**
     * The date and time of giving up ownership on the product.
     *
     * @var DateTime
     */
    protected $ownedThrough;

    /**
     * The product that this structured value is referring to.
     *
     * @var Robinzhao\SchemaOrg\Thing\Product
     */
    protected $typeOfGood;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/OwnershipInfo";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function getAcquiredFrom()
    {
        return $this->acquiredFrom;
    }

    /**
     * @param $acquiredFrom Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function setAcquiredFrom($acquiredFrom)
    {
        $this->acquiredFrom = $acquiredFrom;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getOwnedFrom()
    {
        return $this->ownedFrom;
    }

    /**
     * @param $ownedFrom DateTime
     */
    public function setOwnedFrom($ownedFrom)
    {
        $this->ownedFrom = $ownedFrom;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getOwnedThrough()
    {
        return $this->ownedThrough;
    }

    /**
     * @param $ownedThrough DateTime
     */
    public function setOwnedThrough($ownedThrough)
    {
        $this->ownedThrough = $ownedThrough;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Product
     */
    public function getTypeOfGood()
    {
        return $this->typeOfGood;
    }

    /**
     * @param $typeOfGood Robinzhao\SchemaOrg\Thing\Product
     */
    public function setTypeOfGood($typeOfGood)
    {
        $this->typeOfGood = $typeOfGood;
        return $this;
    }

}
