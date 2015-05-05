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
    public $issuedBy;

    /**
     * The service through with the permit was granted.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Service
     */
    public $issuedThrough;

    /**
     * The target audience for this permit.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Audience
     */
    public $permitAudience;

    /**
     * The time validity of the permit.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public $validFor;

    /**
     * The date when the item becomes valid.
     *
     * @var DateTime
     */
    public $validFrom;

    /**
     * The geographic area where the permit is valid.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    public $validIn;

    /**
     * The date when the item is no longer valid.
     *
     * @var DateTime
     */
    public $validUntil;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Permit";

    /**
     * @param $issuedBy Robinzhao\SchemaOrg\Thing\Organization
     */
    public function addIssuedBy($issuedBy)
    {
        $this->issuedBy []= $issuedBy;
        return $this;
    }

    /**
     * @param $issuedThrough Robinzhao\SchemaOrg\Thing\Intangible\Service
     */
    public function addIssuedThrough($issuedThrough)
    {
        $this->issuedThrough []= $issuedThrough;
        return $this;
    }

    /**
     * @param $permitAudience Robinzhao\SchemaOrg\Thing\Intangible\Audience
     */
    public function addPermitAudience($permitAudience)
    {
        $this->permitAudience []= $permitAudience;
        return $this;
    }

    /**
     * @param $validFor Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public function addValidFor($validFor)
    {
        $this->validFor []= $validFor;
        return $this;
    }

    /**
     * @param $validFrom DateTime
     */
    public function addValidFrom($validFrom)
    {
        $this->validFrom []= $validFrom;
        return $this;
    }

    /**
     * @param $validIn Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    public function addValidIn($validIn)
    {
        $this->validIn []= $validIn;
        return $this;
    }

    /**
     * @param $validUntil DateTime
     */
    public function addValidUntil($validUntil)
    {
        $this->validUntil []= $validUntil;
        return $this;
    }

}
