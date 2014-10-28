<?php

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

/**
 * TV Season
 * http://schema.org/TVSeason
 */
class TVSeason extends CreativeWork
{

    /**
     * The TV series to which this episode or season belongs. (legacy form; partOfSeries is preferred)
     *
     * @var Example\Thing\CreativeWork\TVSeries
     */
    private $partOfTVSeries;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/TVSeason";

    public function getpartOfTVSeries()
    {
        return $this->partOfTVSeries;
    }

    public function setpartOfTVSeries($partOfTVSeries)
    {
        $this->partOfTVSeries = $partOfTVSeries;
        return $this;
    }

}
