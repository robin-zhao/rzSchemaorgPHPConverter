<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork\Episode;

use Robinzhao\SchemaOrg\Thing\CreativeWork\Episode;

/**
 * TV Episode
 * http://schema.org/TVEpisode
 */
class TVEpisode extends Episode
{

    /**
     * The TV series to which this episode or season belongs. (legacy form; partOfSeries is preferred)
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\TVSeries
     */
    public $partOfTVSeries;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/TVEpisode";

    /**
     * @param $partOfTVSeries Robinzhao\SchemaOrg\Thing\CreativeWork\TVSeries
     */
    public function addPartOfTVSeries($partOfTVSeries)
    {
        $this->partOfTVSeries []= $partOfTVSeries;
        return $this;
    }


}