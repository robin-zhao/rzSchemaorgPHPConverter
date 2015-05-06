<?php
/**
 * This is an auto generated file.
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
    public $audienceType;

    /**
     * The geographic area associated with the audience.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    public $geographicArea;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Audience";

    /**
     * @param $audienceType String
     */
    public function addAudienceType($audienceType)
    {
        $this->audienceType []= $audienceType;
        return $this;
    }

    /**
     * @param $geographicArea Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    public function addGeographicArea($geographicArea)
    {
        $this->geographicArea []= $geographicArea;
        return $this;
    }


}