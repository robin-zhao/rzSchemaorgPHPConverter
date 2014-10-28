<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action\TradeAction;

use Example\Thing\Action\TradeAction;

/**
 * Rent Action
 * http://schema.org/RentAction
 */
class RentAction extends TradeAction
{

    /**
     * A sub property of participant. The owner of the real estate property. Sub property of destination or participant?
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    protected $landlord;

    /**
     * A sub property of participant. The real estate agent involved in the action.
     *
     * @var Example\Thing\Organization\LocalBusiness\RealEstateAgent
     */
    protected $realEstateAgent;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/RentAction";

    /**
     * @return Example\Thing\Organization|Example\Thing\Person
     */
    public function getLandlord()
    {
        return $this->landlord;
    }

    /**
     * @param $landlord Example\Thing\Organization|Example\Thing\Person
     */
    public function setLandlord($landlord)
    {
        $this->landlord = $landlord;
        return $this;
    }

    /**
     * @return Example\Thing\Organization\LocalBusiness\RealEstateAgent
     */
    public function getRealEstateAgent()
    {
        return $this->realEstateAgent;
    }

    /**
     * @param $realEstateAgent Example\Thing\Organization\LocalBusiness\RealEstateAgent
     */
    public function setRealEstateAgent($realEstateAgent)
    {
        $this->realEstateAgent = $realEstateAgent;
        return $this;
    }

}
