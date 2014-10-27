<?php

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

    public function getchildMaxAge()
    {
        return $this->childMaxAge;
    }

    public function setchildMaxAge($childMaxAge)
    {
        $this->childMaxAge = $childMaxAge;
        return $this;
    }

    public function getchildMinAge()
    {
        return $this->childMinAge;
    }

    public function setchildMinAge($childMinAge)
    {
        $this->childMinAge = $childMinAge;
        return $this;
    }

}
