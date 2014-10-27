<?php

namespace Example\Thing\Intangible;

use Example\Thing\Intangible;

/**
 * Audience
 * http://schema.org/Audience
 */
class Audience extends Intangible
{

    /**
     * The target group associated with a given audience (e.g. veterans, car owners, musicians, etc.)
      domain: Audience
      Range: Text
    
     *
     * @var String
     */
    private $audienceType;

    /**
     * The geographic area associated with the audience.
     *
     * @var AdministrativeArea
     */
    private $geographicArea;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Audience";

    public function getaudienceType()
    {
        return $this->audienceType;
    }

    public function setaudienceType($audienceType)
    {
        $this->audienceType = $audienceType;
        return $this;
    }

    public function getgeographicArea()
    {
        return $this->geographicArea;
    }

    public function setgeographicArea($geographicArea)
    {
        $this->geographicArea = $geographicArea;
        return $this;
    }

}
