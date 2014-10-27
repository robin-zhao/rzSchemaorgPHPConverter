<?php

namespace Example\Thing\Intangible\StructuredValue\PriceSpecification;

use Example\Thing\Intangible\StructuredValue\PriceSpecification;

/**
 * Delivery Charge Specification
 * http://schema.org/DeliveryChargeSpecification
 */
class DeliveryChargeSpecification extends PriceSpecification
{

    /**
     * The delivery method(s) to which the delivery charge or payment charge specification applies.
     *
     * @var DeliveryMethod
     */
    private $appliesToDeliveryMethod;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.
     *
     * @var String|GeoShape
     */
    private $eligibleRegion;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/DeliveryChargeSpecification";

    public function getappliesToDeliveryMethod()
    {
        return $this->appliesToDeliveryMethod;
    }

    public function setappliesToDeliveryMethod($appliesToDeliveryMethod)
    {
        $this->appliesToDeliveryMethod = $appliesToDeliveryMethod;
        return $this;
    }

    public function geteligibleRegion()
    {
        return $this->eligibleRegion;
    }

    public function seteligibleRegion($eligibleRegion)
    {
        $this->eligibleRegion = $eligibleRegion;
        return $this;
    }

}
