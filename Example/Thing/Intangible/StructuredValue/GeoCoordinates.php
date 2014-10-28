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

    public function getElevation()
    {
        return $this->elevation;
    }

    public function setElevation($elevation)
    {
        $this->elevation = $elevation;
        return $this;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

}
