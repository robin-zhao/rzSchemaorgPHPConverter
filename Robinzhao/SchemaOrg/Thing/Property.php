<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing;

use Robinzhao\SchemaOrg\Thing;

/**
 * Property
 * http://schema.org/Property
 */
class Property extends Thing
{

    /**
     * Relates a property to a class that is (one of) the type(s) the property is expected to be used on.
     *
     * @var Robinzhao\SchemaOrg\Thing\Class
     */
    public $domainIncludes;

    /**
     * Relates a property to a class that constitutes (one of) the expected type(s) for values of the property.
     *
     * @var Robinzhao\SchemaOrg\Thing\Class
     */
    public $rangeIncludes;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Property";

    /**
     * @param $domainIncludes Robinzhao\SchemaOrg\Thing\Class
     */
    public function addDomainIncludes($domainIncludes)
    {
        $this->domainIncludes []= $domainIncludes;
        return $this;
    }

    /**
     * @param $rangeIncludes Robinzhao\SchemaOrg\Thing\Class
     */
    public function addRangeIncludes($rangeIncludes)
    {
        $this->rangeIncludes []= $rangeIncludes;
        return $this;
    }


}