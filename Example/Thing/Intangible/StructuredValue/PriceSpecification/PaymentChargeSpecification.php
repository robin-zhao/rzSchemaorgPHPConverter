<?php

namespace Example\Thing\Intangible\StructuredValue\PriceSpecification;

use Example\Thing\Intangible\StructuredValue\PriceSpecification;

/**
 * Payment Charge Specification
 * http://schema.org/PaymentChargeSpecification
 */
class PaymentChargeSpecification extends PriceSpecification
{

    /**
     * The delivery method(s) to which the delivery charge or payment charge specification applies.
     *
     * @var Example\Thing\Intangible\Enumeration\DeliveryMethod
     */
    private $appliesToDeliveryMethod;

    /**
     * The payment method(s) to which the payment charge specification applies.
     *
     * @var Example\Thing\Intangible\Enumeration\PaymentMethod
     */
    private $appliesToPaymentMethod;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/PaymentChargeSpecification";

    public function getappliesToDeliveryMethod()
    {
        return $this->appliesToDeliveryMethod;
    }

    public function setappliesToDeliveryMethod($appliesToDeliveryMethod)
    {
        $this->appliesToDeliveryMethod = $appliesToDeliveryMethod;
        return $this;
    }

    public function getappliesToPaymentMethod()
    {
        return $this->appliesToPaymentMethod;
    }

    public function setappliesToPaymentMethod($appliesToPaymentMethod)
    {
        $this->appliesToPaymentMethod = $appliesToPaymentMethod;
        return $this;
    }

}
