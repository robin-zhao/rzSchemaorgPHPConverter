<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

use Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

/**
 * Delivery Charge Specification
 * http://schema.org/DeliveryChargeSpecification
 */
class DeliveryChargeSpecification extends PriceSpecification
{

    /**
     * The delivery method(s) to which the delivery charge or payment charge specification applies.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public $appliesToDeliveryMethod;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.
     *
     * @var String|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape
     */
    public $eligibleRegion;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/DeliveryChargeSpecification";

    /**
     * @param $appliesToDeliveryMethod Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public function addAppliesToDeliveryMethod($appliesToDeliveryMethod)
    {
        $this->appliesToDeliveryMethod []= $appliesToDeliveryMethod;
        return $this;
    }

    /**
     * @param $eligibleRegion String|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape
     */
    public function addEligibleRegion($eligibleRegion)
    {
        $this->eligibleRegion []= $eligibleRegion;
        return $this;
    }

}
