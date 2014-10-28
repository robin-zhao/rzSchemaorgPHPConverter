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
    private $childMaxAge;

    /**
     * Minimal age of the child
     *
     * @var Float
     */
    private $childMinAge;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/ParentAudience";

    public function getChildMaxAge()
    {
        return $this->childMaxAge;
    }

    public function setChildMaxAge($childMaxAge)
    {
        $this->childMaxAge = $childMaxAge;
        return $this;
    }

    public function getChildMinAge()
    {
        return $this->childMinAge;
    }

    public function setChildMinAge($childMinAge)
    {
        $this->childMinAge = $childMinAge;
        return $this;
    }

}
