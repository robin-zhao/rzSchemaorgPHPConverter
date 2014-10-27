<?php

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
     * @var DayOfWeek
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

    public function getcloses()
    {
        return $this->closes;
    }

    public function setcloses($closes)
    {
        $this->closes = $closes;
        return $this;
    }

    public function getdayOfWeek()
    {
        return $this->dayOfWeek;
    }

    public function setdayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }

    public function getopens()
    {
        return $this->opens;
    }

    public function setopens($opens)
    {
        $this->opens = $opens;
        return $this;
    }

    public function getvalidFrom()
    {
        return $this->validFrom;
    }

    public function setvalidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    public function getvalidThrough()
    {
        return $this->validThrough;
    }

    public function setvalidThrough($validThrough)
    {
        $this->validThrough = $validThrough;
        return $this;
    }

}
