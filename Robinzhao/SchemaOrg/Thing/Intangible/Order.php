<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible;

use Robinzhao\SchemaOrg\Thing\Intangible;

/**
 * Order
 * http://schema.org/Order
 */
class Order extends Intangible
{

    /**
     * The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    public $acceptedOffer;

    /**
     * The billing address for the order.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public $billingAddress;

    /**
     * A number that confirms the given order.
     *
     * @var String
     */
    public $confirmationNumber;

    /**
     * Party placing the order.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $customer;

    /**
     * Any discount applied (to an Order).
     *
     * @var Float|String
     */
    public $discount;

    /**
     * Code used to redeem a discount.
     *
     * @var String
     */
    public $discountCode;

    /**
     * The currency (in 3-letter ISO 4217 format) of the discount.
     *
     * @var String
     */
    public $discountCurrency;

    /**
     * Was the offer accepted as a gift for someone other than the buyer.
     *
     * @var Boolean
     */
    public $isGift;

    /**
     * The party taking the order (e.g. Amazon.com is a merchant for many sellers).
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $merchant;

    /**
     * Date order was placed.
     *
     * @var DateTime
     */
    public $orderDate;

    /**
     * The item ordered.
     *
     * @var Robinzhao\SchemaOrg\Thing\Product
     */
    public $orderedItem;

    /**
     * The identifier of the transaction.
     *
     * @var String
     */
    public $orderNumber;

    /**
     * The current status of the order.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\OrderStatus
     */
    public $orderStatus;

    /**
     * The date that payment is due.
     *
     * @var DateTime
     */
    public $paymentDue;

    /**
     * The name of the credit card or other method of payment for the order.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod
     */
    public $paymentMethod;

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
     *
     * @var String
     */
    public $paymentMethodId;

    /**
     * The URL for sending a payment.
     *
     * @var String
     */
    public $paymentUrl;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Order";

    /**
     * @param $acceptedOffer Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    public function addAcceptedOffer($acceptedOffer)
    {
        $this->acceptedOffer []= $acceptedOffer;
        return $this;
    }

    /**
     * @param $billingAddress Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function addBillingAddress($billingAddress)
    {
        $this->billingAddress []= $billingAddress;
        return $this;
    }

    /**
     * @param $confirmationNumber String
     */
    public function addConfirmationNumber($confirmationNumber)
    {
        $this->confirmationNumber []= $confirmationNumber;
        return $this;
    }

    /**
     * @param $customer Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addCustomer($customer)
    {
        $this->customer []= $customer;
        return $this;
    }

    /**
     * @param $discount Float|String
     */
    public function addDiscount($discount)
    {
        $this->discount []= $discount;
        return $this;
    }

    /**
     * @param $discountCode String
     */
    public function addDiscountCode($discountCode)
    {
        $this->discountCode []= $discountCode;
        return $this;
    }

    /**
     * @param $discountCurrency String
     */
    public function addDiscountCurrency($discountCurrency)
    {
        $this->discountCurrency []= $discountCurrency;
        return $this;
    }

    /**
     * @param $isGift Boolean
     */
    public function addIsGift($isGift)
    {
        $this->isGift []= $isGift;
        return $this;
    }

    /**
     * @param $merchant Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addMerchant($merchant)
    {
        $this->merchant []= $merchant;
        return $this;
    }

    /**
     * @param $orderDate DateTime
     */
    public function addOrderDate($orderDate)
    {
        $this->orderDate []= $orderDate;
        return $this;
    }

    /**
     * @param $orderedItem Robinzhao\SchemaOrg\Thing\Product
     */
    public function addOrderedItem($orderedItem)
    {
        $this->orderedItem []= $orderedItem;
        return $this;
    }

    /**
     * @param $orderNumber String
     */
    public function addOrderNumber($orderNumber)
    {
        $this->orderNumber []= $orderNumber;
        return $this;
    }

    /**
     * @param $orderStatus Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\OrderStatus
     */
    public function addOrderStatus($orderStatus)
    {
        $this->orderStatus []= $orderStatus;
        return $this;
    }

    /**
     * @param $paymentDue DateTime
     */
    public function addPaymentDue($paymentDue)
    {
        $this->paymentDue []= $paymentDue;
        return $this;
    }

    /**
     * @param $paymentMethod Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod
     */
    public function addPaymentMethod($paymentMethod)
    {
        $this->paymentMethod []= $paymentMethod;
        return $this;
    }

    /**
     * @param $paymentMethodId String
     */
    public function addPaymentMethodId($paymentMethodId)
    {
        $this->paymentMethodId []= $paymentMethodId;
        return $this;
    }

    /**
     * @param $paymentUrl String
     */
    public function addPaymentUrl($paymentUrl)
    {
        $this->paymentUrl []= $paymentUrl;
        return $this;
    }


}