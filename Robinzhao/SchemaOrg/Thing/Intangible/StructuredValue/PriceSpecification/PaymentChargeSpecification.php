<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

use Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

/**
 * Payment Charge Specification
 * http://schema.org/PaymentChargeSpecification
 */
class PaymentChargeSpecification extends PriceSpecification
{

    /**
     * The delivery method(s) to which the delivery charge or payment charge specification applies.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public $appliesToDeliveryMethod;

    /**
     * The payment method(s) to which the payment charge specification applies.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod
     */
    public $appliesToPaymentMethod;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/PaymentChargeSpecification";

    /**
     * @param $appliesToDeliveryMethod Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public function addAppliesToDeliveryMethod($appliesToDeliveryMethod)
    {
        $this->appliesToDeliveryMethod []= $appliesToDeliveryMethod;
        return $this;
    }

    /**
     * @param $appliesToPaymentMethod Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod
     */
    public function addAppliesToPaymentMethod($appliesToPaymentMethod)
    {
        $this->appliesToPaymentMethod []= $appliesToPaymentMethod;
        return $this;
    }

}
