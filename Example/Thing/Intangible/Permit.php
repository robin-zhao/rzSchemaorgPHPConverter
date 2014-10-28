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

    /**
     * @return Example\Thing\Organization
     */
    public function getIssuedBy()
    {
        return $this->issuedBy;
    }

    /**
     * @param $issuedBy Example\Thing\Organization
     */
    public function setIssuedBy($issuedBy)
    {
        $this->issuedBy = $issuedBy;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Service
     */
    public function getIssuedThrough()
    {
        return $this->issuedThrough;
    }

    /**
     * @param $issuedThrough Example\Thing\Intangible\Service
     */
    public function setIssuedThrough($issuedThrough)
    {
        $this->issuedThrough = $issuedThrough;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Audience
     */
    public function getPermitAudience()
    {
        return $this->permitAudience;
    }

    /**
     * @param $permitAudience Example\Thing\Intangible\Audience
     */
    public function setPermitAudience($permitAudience)
    {
        $this->permitAudience = $permitAudience;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Quantity\Duration
     */
    public function getValidFor()
    {
        return $this->validFor;
    }

    /**
     * @param $validFor Example\Thing\Intangible\Quantity\Duration
     */
    public function setValidFor($validFor)
    {
        $this->validFor = $validFor;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param $validFrom DateTime
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * @return Example\Thing\Place\AdministrativeArea
     */
    public function getValidIn()
    {
        return $this->validIn;
    }

    /**
     * @param $validIn Example\Thing\Place\AdministrativeArea
     */
    public function setValidIn($validIn)
    {
        $this->validIn = $validIn;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * @param $validUntil DateTime
     */
    public function setValidUntil($validUntil)
    {
        $this->validUntil = $validUntil;
        return $this;
    }

}
