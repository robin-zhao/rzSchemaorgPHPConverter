<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

/**
 * TV Season
 * http://schema.org/TVSeason
 */
class TVSeason extends CreativeWork
{

    /**
     * The TV series to which this episode or season belongs. (legacy form; partOfSeries is preferred)
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\TVSeries
     */
    protected $partOfTVSeries;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/TVSeason";

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\TVSeries
     */
    public function getPartOfTVSeries()
    {
        return $this->partOfTVSeries;
    }

    /**
     * @param $partOfTVSeries Robinzhao\SchemaOrg\Thing\CreativeWork\TVSeries
     */
    public function setPartOfTVSeries($partOfTVSeries)
    {
        $this->partOfTVSeries = $partOfTVSeries;
        return $this;
    }

}
