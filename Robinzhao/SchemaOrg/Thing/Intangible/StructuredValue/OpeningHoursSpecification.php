<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue;

use Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue;

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
    protected $closes;

    /**
     * The day of the week for which these opening hours are valid.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DayOfWeek
     */
    protected $dayOfWeek;

    /**
     * The opening hour of the place or service on the given day(s) of the week.
     *
     * @var DateTime
     */
    protected $opens;

    /**
     * The date when the item becomes valid.
     *
     * @var DateTime
     */
    protected $validFrom;

    /**
     * The end of the validity of offer, price specification, or opening hours data.
     *
     * @var DateTime
     */
    protected $validThrough;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/OpeningHoursSpecification";

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
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DayOfWeek
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * @param $dayOfWeek Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DayOfWeek
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
