<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue;

use Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue;

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
    public $box;

    /**
     * A circle is the circular region of a specified radius centered at a specified latitude and longitude. A circle is expressed as a pair followed by a radius in meters.
     *
     * @var String
     */
    public $circle;

    /**
     * The elevation of a location.
     *
     * @var String|Float
     */
    public $elevation;

    /**
     * A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two or more point objects separated by space.
     *
     * @var String
     */
    public $line;

    /**
     * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A polygon is expressed as a series of four or more spacedelimited points where the first and final points are identical.
     *
     * @var String
     */
    public $polygon;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/GeoShape";

    /**
     * @param $box String
     */
    public function addBox($box)
    {
        $this->box []= $box;
        return $this;
    }

    /**
     * @param $circle String
     */
    public function addCircle($circle)
    {
        $this->circle []= $circle;
        return $this;
    }

    /**
     * @param $elevation String|Float
     */
    public function addElevation($elevation)
    {
        $this->elevation []= $elevation;
        return $this;
    }

    /**
     * @param $line String
     */
    public function addLine($line)
    {
        $this->line []= $line;
        return $this;
    }

    /**
     * @param $polygon String
     */
    public function addPolygon($polygon)
    {
        $this->polygon []= $polygon;
        return $this;
    }

}
