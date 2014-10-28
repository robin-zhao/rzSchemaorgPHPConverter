<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing\Place\AdministrativeArea
     */
    private $geographicArea;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Audience";

    /**
     * @return String
     */
    public function getAudienceType()
    {
        return $this->audienceType;
    }

    /**
     * @param $audienceType String
     */
    public function setAudienceType($audienceType)
    {
        $this->audienceType = $audienceType;
        return $this;
    }

    /**
     * @return Example\Thing\Place\AdministrativeArea
     */
    public function getGeographicArea()
    {
        return $this->geographicArea;
    }

    /**
     * @param $geographicArea Example\Thing\Place\AdministrativeArea
     */
    public function setGeographicArea($geographicArea)
    {
        $this->geographicArea = $geographicArea;
        return $this;
    }

}
