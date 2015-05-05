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
    public $closes;

    /**
     * The day of the week for which these opening hours are valid.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DayOfWeek
     */
    public $dayOfWeek;

    /**
     * The opening hour of the place or service on the given day(s) of the week.
     *
     * @var DateTime
     */
    public $opens;

    /**
     * The date when the item becomes valid.
     *
     * @var DateTime
     */
    public $validFrom;

    /**
     * The end of the validity of offer, price specification, or opening hours data.
     *
     * @var DateTime
     */
    public $validThrough;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/OpeningHoursSpecification";

    /**
     * @param $closes DateTime
     */
    public function addCloses($closes)
    {
        $this->closes []= $closes;
        return $this;
    }

    /**
     * @param $dayOfWeek Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DayOfWeek
     */
    public function addDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek []= $dayOfWeek;
        return $this;
    }

    /**
     * @param $opens DateTime
     */
    public function addOpens($opens)
    {
        $this->opens []= $opens;
        return $this;
    }

    /**
     * @param $validFrom DateTime
     */
    public function addValidFrom($validFrom)
    {
        $this->validFrom []= $validFrom;
        return $this;
    }

    /**
     * @param $validThrough DateTime
     */
    public function addValidThrough($validThrough)
    {
        $this->validThrough []= $validThrough;
        return $this;
    }

}
