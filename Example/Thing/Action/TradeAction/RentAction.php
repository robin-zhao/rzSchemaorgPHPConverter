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
    private $landlord;

    /**
     * A sub property of participant. The real estate agent involved in the action.
     *
     * @var Example\Thing\Organization\LocalBusiness\RealEstateAgent
     */
    private $realEstateAgent;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/RentAction";

    public function getlandlord()
    {
        return $this->landlord;
    }

    public function setlandlord($landlord)
    {
        $this->landlord = $landlord;
        return $this;
    }

    public function getrealEstateAgent()
    {
        return $this->realEstateAgent;
    }

    public function setrealEstateAgent($realEstateAgent)
    {
        $this->realEstateAgent = $realEstateAgent;
        return $this;
    }

}
