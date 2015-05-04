<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible;

use Robinzhao\SchemaOrg\Thing\Intangible;

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
    protected $audienceType;

    /**
     * The geographic area associated with the audience.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    protected $geographicArea;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Audience";

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
     * @return Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    public function getGeographicArea()
    {
        return $this->geographicArea;
    }

    /**
     * @param $geographicArea Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    public function setGeographicArea($geographicArea)
    {
        $this->geographicArea = $geographicArea;
        return $this;
    }

}
