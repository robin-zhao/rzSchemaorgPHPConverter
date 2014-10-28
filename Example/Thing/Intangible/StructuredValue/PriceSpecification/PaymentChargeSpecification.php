<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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

    public function getAppliesToDeliveryMethod()
    {
        return $this->appliesToDeliveryMethod;
    }

    public function setAppliesToDeliveryMethod($appliesToDeliveryMethod)
    {
        $this->appliesToDeliveryMethod = $appliesToDeliveryMethod;
        return $this;
    }

    public function getAppliesToPaymentMethod()
    {
        return $this->appliesToPaymentMethod;
    }

    public function setAppliesToPaymentMethod($appliesToPaymentMethod)
    {
        $this->appliesToPaymentMethod = $appliesToPaymentMethod;
        return $this;
    }

}
