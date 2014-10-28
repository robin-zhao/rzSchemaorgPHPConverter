<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

/**
 * Data Catalog
 * http://schema.org/DataCatalog
 */
class DataCatalog extends CreativeWork
{

    /**
     * A dataset contained in a catalog.
     *
     * @var Example\Thing\CreativeWork\Dataset
     */
    private $dataset;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/DataCatalog";

    public function getdataset()
    {
        return $this->dataset;
    }

    public function setdataset($dataset)
    {
        $this->dataset = $dataset;
        return $this;
    }

}
