<?php

namespace Example\Thing\CreativeWork\Clip;

use Example\Thing\CreativeWork\Clip;

/**
 * TV Clip
 * http://schema.org/TVClip
 */
class TVClip extends Clip
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
    private $url = "http://schema.org/TVClip";

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
