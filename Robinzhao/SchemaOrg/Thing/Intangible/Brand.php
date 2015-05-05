<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible;

use Robinzhao\SchemaOrg\Thing\Intangible;

/**
 * Brand
 * http://schema.org/Brand
 */
class Brand extends Intangible
{

    /**
     * A logo associated with an organization.
     *
     * @var String|Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public $logo;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Brand";

    /**
     * @param $logo String|Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function addLogo($logo)
    {
        $this->logo []= $logo;
        return $this;
    }

}