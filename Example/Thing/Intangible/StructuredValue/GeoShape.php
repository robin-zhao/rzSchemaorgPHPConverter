<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible\StructuredValue;

use Example\Thing\Intangible\StructuredValue;

/**
 * Geo Shape
 * http://schema.org/GeoShape
 */
class GeoShape extends StructuredValue
{

    /**
     * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A polygon is expressed as a series of four or more spacedelimited points where the first and final points are identical.
     *
     * @var String
     */
    protected $box;

    /**
     * A circle is the circular region of a specified radius centered at a specified latitude and longitude. A circle is expressed as a pair followed by a radius in meters.
     *
     * @var String
     */
    protected $circle;

    /**
     * The elevation of a location.
     *
     * @var String|Float
     */
    protected $elevation;

    /**
     * A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two or more point objects separated by space.
     *
     * @var String
     */
    protected $line;

    /**
     * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A polygon is expressed as a series of four or more spacedelimited points where the first and final points are identical.
     *
     * @var String
     */
    protected $polygon;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/GeoShape";

    /**
     * @return String
     */
    public function getBox()
    {
        return $this->box;
    }

    /**
     * @param $box String
     */
    public function setBox($box)
    {
        $this->box = $box;
        return $this;
    }

    /**
     * @return String
     */
    public function getCircle()
    {
        return $this->circle;
    }

    /**
     * @param $circle String
     */
    public function setCircle($circle)
    {
        $this->circle = $circle;
        return $this;
    }

    /**
     * @return String|Float
     */
    public function getElevation()
    {
        return $this->elevation;
    }

    /**
     * @param $elevation String|Float
     */
    public function setElevation($elevation)
    {
        $this->elevation = $elevation;
        return $this;
    }

    /**
     * @return String
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * @param $line String
     */
    public function setLine($line)
    {
        $this->line = $line;
        return $this;
    }

    /**
     * @return String
     */
    public function getPolygon()
    {
        return $this->polygon;
    }

    /**
     * @param $polygon String
     */
    public function setPolygon($polygon)
    {
        $this->polygon = $polygon;
        return $this;
    }

}
