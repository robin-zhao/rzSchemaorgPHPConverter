<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible;

use Robinzhao\SchemaOrg\Thing\Intangible;

/**
 * Permit
 * http://schema.org/Permit
 */
class Permit extends Intangible
{

    /**
     * The organization issuing the permit.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    protected $issuedBy;

    /**
     * The service through with the permit was granted.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Service
     */
    protected $issuedThrough;

    /**
     * The target audience for this permit.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Audience
     */
    protected $permitAudience;

    /**
     * The time validity of the permit.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    protected $validFor;

    /**
     * The date when the item becomes valid.
     *
     * @var DateTime
     */
    protected $validFrom;

    /**
     * The geographic area where the permit is valid.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    protected $validIn;

    /**
     * The date when the item is no longer valid.
     *
     * @var DateTime
     */
    protected $validUntil;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Permit";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization
     */
    public function getIssuedBy()
    {
        return $this->issuedBy;
    }

    /**
     * @param $issuedBy Robinzhao\SchemaOrg\Thing\Organization
     */
    public function setIssuedBy($issuedBy)
    {
        $this->issuedBy = $issuedBy;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Service
     */
    public function getIssuedThrough()
    {
        return $this->issuedThrough;
    }

    /**
     * @param $issuedThrough Robinzhao\SchemaOrg\Thing\Intangible\Service
     */
    public function setIssuedThrough($issuedThrough)
    {
        $this->issuedThrough = $issuedThrough;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Audience
     */
    public function getPermitAudience()
    {
        return $this->permitAudience;
    }

    /**
     * @param $permitAudience Robinzhao\SchemaOrg\Thing\Intangible\Audience
     */
    public function setPermitAudience($permitAudience)
    {
        $this->permitAudience = $permitAudience;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public function getValidFor()
    {
        return $this->validFor;
    }

    /**
     * @param $validFor Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
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
     * @return Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    public function getValidIn()
    {
        return $this->validIn;
    }

    /**
     * @param $validIn Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
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
