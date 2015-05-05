<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\Audience\PeopleAudience;

use Robinzhao\SchemaOrg\Thing\Intangible\Audience\PeopleAudience;

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
    public $childMaxAge;

    /**
     * Minimal age of the child
     *
     * @var Float
     */
    public $childMinAge;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/ParentAudience";

    /**
     * @param $childMaxAge Float
     */
    public function addChildMaxAge($childMaxAge)
    {
        $this->childMaxAge []= $childMaxAge;
        return $this;
    }

    /**
     * @param $childMinAge Float
     */
    public function addChildMinAge($childMinAge)
    {
        $this->childMinAge []= $childMinAge;
        return $this;
    }

}
