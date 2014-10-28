<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing;

use Example\Thing;

/**
 * Property
 * http://schema.org/Property
 */
class Property extends Thing
{

    /**
     * Relates a property to a class that is (one of) the type(s) the property is expected to be used on.
     *
     * @var Example\Thing\Class
     */
    private $domainIncludes;

    /**
     * Relates a property to a class that constitutes (one of) the expected type(s) for values of the property.
     *
     * @var Example\Thing\Class
     */
    private $rangeIncludes;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Property";

    public function getdomainIncludes()
    {
        return $this->domainIncludes;
    }

    public function setdomainIncludes($domainIncludes)
    {
        $this->domainIncludes = $domainIncludes;
        return $this;
    }

    public function getrangeIncludes()
    {
        return $this->rangeIncludes;
    }

    public function setrangeIncludes($rangeIncludes)
    {
        $this->rangeIncludes = $rangeIncludes;
        return $this;
    }

}
