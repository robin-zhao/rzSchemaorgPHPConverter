<?php

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
     * @var Dataset
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