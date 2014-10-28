<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible;

use Example\Thing\Intangible;

/**
 * Permit
 * http://schema.org/Permit
 */
class Permit extends Intangible
{

    /**
     * The organization issuing the permit.
     *
     * @var Example\Thing\Organization
     */
    private $issuedBy;

    /**
     * The service through with the permit was granted.
     *
     * @var Example\Thing\Intangible\Service
     */
    private $issuedThrough;

    /**
     * The target audience for this permit.
     *
     * @var Example\Thing\Intangible\Audience
     */
    private $permitAudience;

    /**
     * The time validity of the permit.
     *
     * @var Example\Thing\Intangible\Quantity\Duration
     */
    private $validFor;

    /**
     * The date when the item becomes valid.
     *
     * @var DateTime
     */
    private $validFrom;

    /**
     * The geographic area where the permit is valid.
     *
     * @var Example\Thing\Place\AdministrativeArea
     */
    private $validIn;

    /**
     * The date when the item is no longer valid.
     *
     * @var DateTime
     */
    private $validUntil;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Permit";

    public function getIssuedBy()
    {
        return $this->issuedBy;
    }

    public function setIssuedBy($issuedBy)
    {
        $this->issuedBy = $issuedBy;
        return $this;
    }

    public function getIssuedThrough()
    {
        return $this->issuedThrough;
    }

    public function setIssuedThrough($issuedThrough)
    {
        $this->issuedThrough = $issuedThrough;
        return $this;
    }

    public function getPermitAudience()
    {
        return $this->permitAudience;
    }

    public function setPermitAudience($permitAudience)
    {
        $this->permitAudience = $permitAudience;
        return $this;
    }

    public function getValidFor()
    {
        return $this->validFor;
    }

    public function setValidFor($validFor)
    {
        $this->validFor = $validFor;
        return $this;
    }

    public function getValidFrom()
    {
        return $this->validFrom;
    }

    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    public function getValidIn()
    {
        return $this->validIn;
    }

    public function setValidIn($validIn)
    {
        $this->validIn = $validIn;
        return $this;
    }

    public function getValidUntil()
    {
        return $this->validUntil;
    }

    public function setValidUntil($validUntil)
    {
        $this->validUntil = $validUntil;
        return $this;
    }

}
