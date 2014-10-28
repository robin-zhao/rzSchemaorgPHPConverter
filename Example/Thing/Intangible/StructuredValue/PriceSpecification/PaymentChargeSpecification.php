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
    protected $appliesToDeliveryMethod;

    /**
     * The payment method(s) to which the payment charge specification applies.
     *
     * @var Example\Thing\Intangible\Enumeration\PaymentMethod
     */
    protected $appliesToPaymentMethod;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/PaymentChargeSpecification";

    /**
     * @return Example\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public function getAppliesToDeliveryMethod()
    {
        return $this->appliesToDeliveryMethod;
    }

    /**
     * @param $appliesToDeliveryMethod Example\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public function setAppliesToDeliveryMethod($appliesToDeliveryMethod)
    {
        $this->appliesToDeliveryMethod = $appliesToDeliveryMethod;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Enumeration\PaymentMethod
     */
    public function getAppliesToPaymentMethod()
    {
        return $this->appliesToPaymentMethod;
    }

    /**
     * @param $appliesToPaymentMethod Example\Thing\Intangible\Enumeration\PaymentMethod
     */
    public function setAppliesToPaymentMethod($appliesToPaymentMethod)
    {
        $this->appliesToPaymentMethod = $appliesToPaymentMethod;
        return $this;
    }

}
