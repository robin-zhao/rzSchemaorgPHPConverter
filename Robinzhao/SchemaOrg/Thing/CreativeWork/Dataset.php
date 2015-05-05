<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

/**
 * Dataset
 * http://schema.org/Dataset
 */
class Dataset extends CreativeWork
{

    /**
     * A data catalog which contains a dataset.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\DataCatalog
     */
    public $catalog;

    /**
     * A downloadable form of this dataset, at a specific location, in a specific format.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\DataDownload
     */
    public $distribution;

    /**
     * The range of spatial applicability of a dataset, e.g. for a dataset of New York weather, the state of New York.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place
     */
    public $spatial;

    /**
     * The range of temporal applicability of a dataset, e.g. for a 2011 census dataset, the year 2011 (in ISO 8601 time interval format).
     *
     * @var DateTime
     */
    public $temporal;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Dataset";

    /**
     * @param $catalog Robinzhao\SchemaOrg\Thing\CreativeWork\DataCatalog
     */
    public function addCatalog($catalog)
    {
        $this->catalog []= $catalog;
        return $this;
    }

    /**
     * @param $distribution Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\DataDownload
     */
    public function addDistribution($distribution)
    {
        $this->distribution []= $distribution;
        return $this;
    }

    /**
     * @param $spatial Robinzhao\SchemaOrg\Thing\Place
     */
    public function addSpatial($spatial)
    {
        $this->spatial []= $spatial;
        return $this;
    }

    /**
     * @param $temporal DateTime
     */
    public function addTemporal($temporal)
    {
        $this->temporal []= $temporal;
        return $this;
    }

}
