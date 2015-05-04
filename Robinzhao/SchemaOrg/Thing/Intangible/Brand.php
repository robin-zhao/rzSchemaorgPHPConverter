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
    protected $logo;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Brand";

    /**
     * @return String|Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param $logo String|Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

}
