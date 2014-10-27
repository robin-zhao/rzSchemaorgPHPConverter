<?php

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
    private $box;

    /**
     * A circle is the circular region of a specified radius centered at a specified latitude and longitude. A circle is expressed as a pair followed by a radius in meters.
     *
     * @var String
     */
    private $circle;

    /**
     * The elevation of a location.
     *
     * @var String|Float
     */
    private $elevation;

    /**
     * A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two or more point objects separated by space.
     *
     * @var String
     */
    private $line;

    /**
     * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A polygon is expressed as a series of four or more spacedelimited points where the first and final points are identical.
     *
     * @var String
     */
    private $polygon;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/GeoShape";

    public function getbox()
    {
        return $this->box;
    }

    public function setbox($box)
    {
        $this->box = $box;
        return $this;
    }

    public function getcircle()
    {
        return $this->circle;
    }

    public function setcircle($circle)
    {
        $this->circle = $circle;
        return $this;
    }

    public function getelevation()
    {
        return $this->elevation;
    }

    public function setelevation($elevation)
    {
        $this->elevation = $elevation;
        return $this;
    }

    public function getline()
    {
        return $this->line;
    }

    public function setline($line)
    {
        $this->line = $line;
        return $this;
    }

    public function getpolygon()
    {
        return $this->polygon;
    }

    public function setpolygon($polygon)
    {
        $this->polygon = $polygon;
        return $this;
    }

}
