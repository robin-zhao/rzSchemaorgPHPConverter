<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
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
    protected $domainIncludes;

    /**
     * Relates a property to a class that constitutes (one of) the expected type(s) for values of the property.
     *
     * @var Robinzhao\SchemaOrg\Thing\Class
     */
    protected $rangeIncludes;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Property";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Class
     */
    public function getDomainIncludes()
    {
        return $this->domainIncludes;
    }

    /**
     * @param $domainIncludes Robinzhao\SchemaOrg\Thing\Class
     */
    public function setDomainIncludes($domainIncludes)
    {
        $this->domainIncludes = $domainIncludes;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Class
     */
    public function getRangeIncludes()
    {
        return $this->rangeIncludes;
    }

    /**
     * @param $rangeIncludes Robinzhao\SchemaOrg\Thing\Class
     */
    public function setRangeIncludes($rangeIncludes)
    {
        $this->rangeIncludes = $rangeIncludes;
        return $this;
    }

}
