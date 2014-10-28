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

    public function getCloses()
    {
        return $this->closes;
    }

    public function setCloses($closes)
    {
        $this->closes = $closes;
        return $this;
    }

    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    public function setDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }

    public function getOpens()
    {
        return $this->opens;
    }

    public function setOpens($opens)
    {
        $this->opens = $opens;
        return $this;
    }

    public function getValidFrom()
    {
        return $this->validFrom;
    }

    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    public function getValidThrough()
    {
        return $this->validThrough;
    }

    public function setValidThrough($validThrough)
    {
        $this->validThrough = $validThrough;
        return $this;
    }

}
