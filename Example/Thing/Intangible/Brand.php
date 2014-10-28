<?php

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

    public function getlogo()
    {
        return $this->logo;
    }

    public function setlogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

}
