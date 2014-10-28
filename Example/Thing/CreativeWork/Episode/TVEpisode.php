<?php

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
    private $partOfTVSeries;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/TVEpisode";

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
