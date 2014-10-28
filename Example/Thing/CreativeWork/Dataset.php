<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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

    public function getCatalog()
    {
        return $this->catalog;
    }

    public function setCatalog($catalog)
    {
        $this->catalog = $catalog;
        return $this;
    }

    public function getDistribution()
    {
        return $this->distribution;
    }

    public function setDistribution($distribution)
    {
        $this->distribution = $distribution;
        return $this;
    }

    public function getSpatial()
    {
        return $this->spatial;
    }

    public function setSpatial($spatial)
    {
        $this->spatial = $spatial;
        return $this;
    }

    public function getTemporal()
    {
        return $this->temporal;
    }

    public function setTemporal($temporal)
    {
        $this->temporal = $temporal;
        return $this;
    }

}
