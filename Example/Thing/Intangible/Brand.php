<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible;

use Example\Thing\Intangible;

/**
 * Brand
 * http://schema.org/Brand
 */
class Brand extends Intangible
{

    /**
     * A logo associated with an organization.
     *
     * @var String|Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    protected $logo;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Brand";

    /**
     * @return String|Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param $logo String|Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

}
