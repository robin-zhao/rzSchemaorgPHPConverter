<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Organization;

use Robinzhao\SchemaOrg\Thing\Organization;

/**
 * Corporation
 * http://schema.org/Corporation
 */
class Corporation extends Organization
{

    /**
     * The exchange traded instrument associated with a Corporation object. The tickerSymbol is expressed as an exchange and an instrument name separated by a space character. For the exchange component of the tickerSymbol attribute, we reccommend using the controlled vocaulary of Market Identifier Codes (MIC) specified in ISO15022.
     *
     * @var String
     */
    public $tickerSymbol;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Corporation";

    /**
     * @param $tickerSymbol String
     */
    public function addTickerSymbol($tickerSymbol)
    {
        $this->tickerSymbol []= $tickerSymbol;
        return $this;
    }


}