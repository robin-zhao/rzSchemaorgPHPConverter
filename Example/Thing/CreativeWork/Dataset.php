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
    protected $catalog;

    /**
     * A downloadable form of this dataset, at a specific location, in a specific format.
     *
     * @var Example\Thing\CreativeWork\MediaObject\DataDownload
     */
    protected $distribution;

    /**
     * The range of spatial applicability of a dataset, e.g. for a dataset of New York weather, the state of New York.
     *
     * @var Example\Thing\Place
     */
    protected $spatial;

    /**
     * The range of temporal applicability of a dataset, e.g. for a 2011 census dataset, the year 2011 (in ISO 8601 time interval format).
     *
     * @var DateTime
     */
    protected $temporal;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Dataset";

    /**
     * @return Example\Thing\CreativeWork\DataCatalog
     */
    public function getCatalog()
    {
        return $this->catalog;
    }

    /**
     * @param $catalog Example\Thing\CreativeWork\DataCatalog
     */
    public function setCatalog($catalog)
    {
        $this->catalog = $catalog;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\MediaObject\DataDownload
     */
    public function getDistribution()
    {
        return $this->distribution;
    }

    /**
     * @param $distribution Example\Thing\CreativeWork\MediaObject\DataDownload
     */
    public function setDistribution($distribution)
    {
        $this->distribution = $distribution;
        return $this;
    }

    /**
     * @return Example\Thing\Place
     */
    public function getSpatial()
    {
        return $this->spatial;
    }

    /**
     * @param $spatial Example\Thing\Place
     */
    public function setSpatial($spatial)
    {
        $this->spatial = $spatial;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getTemporal()
    {
        return $this->temporal;
    }

    /**
     * @param $temporal DateTime
     */
    public function setTemporal($temporal)
    {
        $this->temporal = $temporal;
        return $this;
    }

}
