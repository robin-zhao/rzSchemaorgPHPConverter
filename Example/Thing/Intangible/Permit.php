<?php

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
     * @var Organization
     */
    private $issuedBy;

    /**
     * The service through with the permit was granted.
     *
     * @var Service
     */
    private $issuedThrough;

    /**
     * The target audience for this permit.
     *
     * @var Audience
     */
    private $permitAudience;

    /**
     * The time validity of the permit.
     *
     * @var Duration
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
     * @var AdministrativeArea
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

    public function getissuedBy()
    {
        return $this->issuedBy;
    }

    public function setissuedBy($issuedBy)
    {
        $this->issuedBy = $issuedBy;
        return $this;
    }

    public function getissuedThrough()
    {
        return $this->issuedThrough;
    }

    public function setissuedThrough($issuedThrough)
    {
        $this->issuedThrough = $issuedThrough;
        return $this;
    }

    public function getpermitAudience()
    {
        return $this->permitAudience;
    }

    public function setpermitAudience($permitAudience)
    {
        $this->permitAudience = $permitAudience;
        return $this;
    }

    public function getvalidFor()
    {
        return $this->validFor;
    }

    public function setvalidFor($validFor)
    {
        $this->validFor = $validFor;
        return $this;
    }

    public function getvalidFrom()
    {
        return $this->validFrom;
    }

    public function setvalidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    public function getvalidIn()
    {
        return $this->validIn;
    }

    public function setvalidIn($validIn)
    {
        $this->validIn = $validIn;
        return $this;
    }

    public function getvalidUntil()
    {
        return $this->validUntil;
    }

    public function setvalidUntil($validUntil)
    {
        $this->validUntil = $validUntil;
        return $this;
    }

}
