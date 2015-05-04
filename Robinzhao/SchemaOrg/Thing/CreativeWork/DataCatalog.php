<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
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
    protected $dataset;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/DataCatalog";

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\Dataset
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    /**
     * @param $dataset Robinzhao\SchemaOrg\Thing\CreativeWork\Dataset
     */
    public function setDataset($dataset)
    {
        $this->dataset = $dataset;
        return $this;
    }

}
