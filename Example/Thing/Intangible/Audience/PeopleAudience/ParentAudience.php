<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible\Audience\PeopleAudience;

use Example\Thing\Intangible\Audience\PeopleAudience;

/**
 * Parent Audience
 * http://schema.org/ParentAudience
 */
class ParentAudience extends PeopleAudience
{

    /**
     * Maximal age of the child
     *
     * @var Float
     */
    protected $childMaxAge;

    /**
     * Minimal age of the child
     *
     * @var Float
     */
    protected $childMinAge;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/ParentAudience";

    /**
     * @return Float
     */
    public function getChildMaxAge()
    {
        return $this->childMaxAge;
    }

    /**
     * @param $childMaxAge Float
     */
    public function setChildMaxAge($childMaxAge)
    {
        $this->childMaxAge = $childMaxAge;
        return $this;
    }

    /**
     * @return Float
     */
    public function getChildMinAge()
    {
        return $this->childMinAge;
    }

    /**
     * @param $childMinAge Float
     */
    public function setChildMinAge($childMinAge)
    {
        $this->childMinAge = $childMinAge;
        return $this;
    }

}
