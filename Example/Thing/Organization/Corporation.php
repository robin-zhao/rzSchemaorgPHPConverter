<?php

namespace Example\Thing\Organization;

use Example\Thing\Organization;

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
    private $tickerSymbol;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Corporation";

    public function gettickerSymbol()
    {
        return $this->tickerSymbol;
    }

    public function settickerSymbol($tickerSymbol)
    {
        $this->tickerSymbol = $tickerSymbol;
        return $this;
    }

}
