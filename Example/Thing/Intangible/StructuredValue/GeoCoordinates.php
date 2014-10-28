<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible\StructuredValue;

use Example\Thing\Intangible\StructuredValue;

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
    private $elevation;

    /**
     * The latitude of a location. For example 37.42242.
     *
     * @var Float|String
     */
    private $latitude;

    /**
     * The longitude of a location. For example -122.08585.
     *
     * @var Float|String
     */
    private $longitude;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/GeoCoordinates";

    public function getelevation()
    {
        return $this->elevation;
    }

    public function setelevation($elevation)
    {
        $this->elevation = $elevation;
        return $this;
    }

    public function getlatitude()
    {
        return $this->latitude;
    }

    public function setlatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getlongitude()
    {
        return $this->longitude;
    }

    public function setlongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

}
