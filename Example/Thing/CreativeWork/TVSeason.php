<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
    protected $partOfTVSeries;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/TVSeason";

    /**
     * @return Example\Thing\CreativeWork\TVSeries
     */
    public function getPartOfTVSeries()
    {
        return $this->partOfTVSeries;
    }

    /**
     * @param $partOfTVSeries Example\Thing\CreativeWork\TVSeries
     */
    public function setPartOfTVSeries($partOfTVSeries)
    {
        $this->partOfTVSeries = $partOfTVSeries;
        return $this;
    }

}
