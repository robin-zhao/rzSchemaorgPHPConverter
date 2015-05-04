<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\TradeAction;

use Robinzhao\SchemaOrg\Thing\Action\TradeAction;

/**
 * Rent Action
 * http://schema.org/RentAction
 */
class RentAction extends TradeAction
{

    /**
     * A sub property of participant. The owner of the real estate property. Sub property of destination or participant?
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    protected $landlord;

    /**
     * A sub property of participant. The real estate agent involved in the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\RealEstateAgent
     */
    protected $realEstateAgent;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/RentAction";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function getLandlord()
    {
        return $this->landlord;
    }

    /**
     * @param $landlord Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function setLandlord($landlord)
    {
        $this->landlord = $landlord;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\RealEstateAgent
     */
    public function getRealEstateAgent()
    {
        return $this->realEstateAgent;
    }

    /**
     * @param $realEstateAgent Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\RealEstateAgent
     */
    public function setRealEstateAgent($realEstateAgent)
    {
        $this->realEstateAgent = $realEstateAgent;
        return $this;
    }

}
