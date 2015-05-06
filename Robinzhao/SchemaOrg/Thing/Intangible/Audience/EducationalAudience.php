<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\Audience;

use Robinzhao\SchemaOrg\Thing\Intangible\Audience;

/**
 * Educational Audience
 * http://schema.org/EducationalAudience
 */
class EducationalAudience extends Audience
{

    /**
     * An educationalRole of an EducationalAudience
     *
     * @var String
     */
    public $educationalRole;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/EducationalAudience";

    /**
     * @param $educationalRole String
     */
    public function addEducationalRole($educationalRole)
    {
        $this->educationalRole []= $educationalRole;
        return $this;
    }


}