<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible\StructuredValue;

use Example\Thing\Intangible\StructuredValue;

/**
 * Ownership Info
 * http://schema.org/OwnershipInfo
 */
class OwnershipInfo extends StructuredValue
{

    /**
     * The organization or person from which the product was acquired.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $acquiredFrom;

    /**
     * The date and time of obtaining the product.
     *
     * @var DateTime
     */
    private $ownedFrom;

    /**
     * The date and time of giving up ownership on the product.
     *
     * @var DateTime
     */
    private $ownedThrough;

    /**
     * The product that this structured value is referring to.
     *
     * @var Example\Thing\Product
     */
    private $typeOfGood;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/OwnershipInfo";

    public function getAcquiredFrom()
    {
        return $this->acquiredFrom;
    }

    public function setAcquiredFrom($acquiredFrom)
    {
        $this->acquiredFrom = $acquiredFrom;
        return $this;
    }

    public function getOwnedFrom()
    {
        return $this->ownedFrom;
    }

    public function setOwnedFrom($ownedFrom)
    {
        $this->ownedFrom = $ownedFrom;
        return $this;
    }

    public function getOwnedThrough()
    {
        return $this->ownedThrough;
    }

    public function setOwnedThrough($ownedThrough)
    {
        $this->ownedThrough = $ownedThrough;
        return $this;
    }

    public function getTypeOfGood()
    {
        return $this->typeOfGood;
    }

    public function setTypeOfGood($typeOfGood)
    {
        $this->typeOfGood = $typeOfGood;
        return $this;
    }

}
