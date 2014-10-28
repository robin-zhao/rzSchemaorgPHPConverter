<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork\Episode;

use Example\Thing\CreativeWork\Episode;

/**
 * TV Episode
 * http://schema.org/TVEpisode
 */
class TVEpisode extends Episode
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
    protected $context = "http://schema.org/TVEpisode";

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
