<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue;

use Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue;

/**
 * Geo Coordinates
 * http://schema.org/GeoCoordinates
 */
class GeoCoordinates extends StructuredValue
{

    /**
     * The elevation of a location.
     *
     * @var String|Float
     */
    public $elevation;

    /**
     * The latitude of a location. For example 37.42242.
     *
     * @var Float|String
     */
    public $latitude;

    /**
     * The longitude of a location. For example -122.08585.
     *
     * @var Float|String
     */
    public $longitude;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/GeoCoordinates";

    /**
     * @param $elevation String|Float
     */
    public function addElevation($elevation)
    {
        $this->elevation []= $elevation;
        return $this;
    }

    /**
     * @param $latitude Float|String
     */
    public function addLatitude($latitude)
    {
        $this->latitude []= $latitude;
        return $this;
    }

    /**
     * @param $longitude Float|String
     */
    public function addLongitude($longitude)
    {
        $this->longitude []= $longitude;
        return $this;
    }

}
