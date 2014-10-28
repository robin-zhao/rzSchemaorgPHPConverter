<?php

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

/**
 * Dataset
 * http://schema.org/Dataset
 */
class Dataset extends CreativeWork
{

    /**
     * A data catalog which contains a dataset.
     *
     * @var Example\Thing\CreativeWork\DataCatalog
     */
    private $catalog;

    /**
     * A downloadable form of this dataset, at a specific location, in a specific format.
     *
     * @var Example\Thing\CreativeWork\MediaObject\DataDownload
     */
    private $distribution;

    /**
     * The range of spatial applicability of a dataset, e.g. for a dataset of New York weather, the state of New York.
     *
     * @var Example\Thing\Place
     */
    private $spatial;

    /**
     * The range of temporal applicability of a dataset, e.g. for a 2011 census dataset, the year 2011 (in ISO 8601 time interval format).
     *
     * @var DateTime
     */
    private $temporal;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Dataset";

    public function getcatalog()
    {
        return $this->catalog;
    }

    public function setcatalog($catalog)
    {
        $this->catalog = $catalog;
        return $this;
    }

    public function getdistribution()
    {
        return $this->distribution;
    }

    public function setdistribution($distribution)
    {
        $this->distribution = $distribution;
        return $this;
    }

    public function getspatial()
    {
        return $this->spatial;
    }

    public function setspatial($spatial)
    {
        $this->spatial = $spatial;
        return $this;
    }

    public function gettemporal()
    {
        return $this->temporal;
    }

    public function settemporal($temporal)
    {
        $this->temporal = $temporal;
        return $this;
    }

}
