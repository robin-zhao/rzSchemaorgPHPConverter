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
    private $logo;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Brand";

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

}
