<?php

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
     * @var Organization|Person
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
     * @var Product
     */
    private $typeOfGood;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/OwnershipInfo";

    public function getacquiredFrom()
    {
        return $this->acquiredFrom;
    }

    public function setacquiredFrom($acquiredFrom)
    {
        $this->acquiredFrom = $acquiredFrom;
        return $this;
    }

    public function getownedFrom()
    {
        return $this->ownedFrom;
    }

    public function setownedFrom($ownedFrom)
    {
        $this->ownedFrom = $ownedFrom;
        return $this;
    }

    public function getownedThrough()
    {
        return $this->ownedThrough;
    }

    public function setownedThrough($ownedThrough)
    {
        $this->ownedThrough = $ownedThrough;
        return $this;
    }

    public function gettypeOfGood()
    {
        return $this->typeOfGood;
    }

    public function settypeOfGood($typeOfGood)
    {
        $this->typeOfGood = $typeOfGood;
        return $this;
    }

}
