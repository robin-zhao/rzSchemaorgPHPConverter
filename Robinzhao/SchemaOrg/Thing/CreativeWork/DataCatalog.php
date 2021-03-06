<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

/**
 * Data Catalog
 * http://schema.org/DataCatalog
 */
class DataCatalog extends CreativeWork
{

    /**
     * A dataset contained in a catalog.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Dataset
     */
    public $dataset;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/DataCatalog";

    /**
     * @param $dataset Robinzhao\SchemaOrg\Thing\CreativeWork\Dataset
     */
    public function addDataset($dataset)
    {
        $this->dataset []= $dataset;
        return $this;
    }


}