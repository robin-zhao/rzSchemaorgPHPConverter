<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible\StructuredValue;

use Example\Thing\Intangible\StructuredValue;

/**
 * Opening Hours Specification
 * http://schema.org/OpeningHoursSpecification
 */
class OpeningHoursSpecification extends StructuredValue
{

    /**
     * The closing hour of the place or service on the given day(s) of the week.
     *
     * @var DateTime
     */
    private $closes;

    /**
     * The day of the week for which these opening hours are valid.
     *
     * @var Example\Thing\Intangible\Enumeration\DayOfWeek
     */
    private $dayOfWeek;

    /**
     * The opening hour of the place or service on the given day(s) of the week.
     *
     * @var DateTime
     */
    private $opens;

    /**
     * The date when the item becomes valid.
     *
     * @var DateTime
     */
    private $validFrom;

    /**
     * The end of the validity of offer, price specification, or opening hours data.
     *
     * @var DateTime
     */
    private $validThrough;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/OpeningHoursSpecification";

    /**
     * @return DateTime
     */
    public function getCloses()
    {
        return $this->closes;
    }

    /**
     * @param $closes DateTime
     */
    public function setCloses($closes)
    {
        $this->closes = $closes;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Enumeration\DayOfWeek
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * @param $dayOfWeek Example\Thing\Intangible\Enumeration\DayOfWeek
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getOpens()
    {
        return $this->opens;
    }

    /**
     * @param $opens DateTime
     */
    public function setOpens($opens)
    {
        $this->opens = $opens;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param $validFrom DateTime
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }

    /**
     * @param $validThrough DateTime
     */
    public function setValidThrough($validThrough)
    {
        $this->validThrough = $validThrough;
        return $this;
    }

}
