<?php
/**
 * This is an auto generated file.
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
    public $landlord;

    /**
     * A sub property of participant. The real estate agent involved in the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\RealEstateAgent
     */
    public $realEstateAgent;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/RentAction";

    /**
     * @param $landlord Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addLandlord($landlord)
    {
        $this->landlord []= $landlord;
        return $this;
    }

    /**
     * @param $realEstateAgent Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\RealEstateAgent
     */
    public function addRealEstateAgent($realEstateAgent)
    {
        $this->realEstateAgent []= $realEstateAgent;
        return $this;
    }


}