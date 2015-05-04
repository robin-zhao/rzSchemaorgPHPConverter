<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
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
    protected $acceptedOffer;

    /**
     * The billing address for the order.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    protected $billingAddress;

    /**
     * A number that confirms the given order.
     *
     * @var String
     */
    protected $confirmationNumber;

    /**
     * Party placing the order.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    protected $customer;

    /**
     * Any discount applied (to an Order).
     *
     * @var Float|String
     */
    protected $discount;

    /**
     * Code used to redeem a discount.
     *
     * @var String
     */
    protected $discountCode;

    /**
     * The currency (in 3-letter ISO 4217 format) of the discount.
     *
     * @var String
     */
    protected $discountCurrency;

    /**
     * Was the offer accepted as a gift for someone other than the buyer.
     *
     * @var Boolean
     */
    protected $isGift;

    /**
     * The party taking the order (e.g. Amazon.com is a merchant for many sellers).
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    protected $merchant;

    /**
     * Date order was placed.
     *
     * @var DateTime
     */
    protected $orderDate;

    /**
     * The item ordered.
     *
     * @var Robinzhao\SchemaOrg\Thing\Product
     */
    protected $orderedItem;

    /**
     * The identifier of the transaction.
     *
     * @var String
     */
    protected $orderNumber;

    /**
     * The current status of the order.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\OrderStatus
     */
    protected $orderStatus;

    /**
     * The date that payment is due.
     *
     * @var DateTime
     */
    protected $paymentDue;

    /**
     * The name of the credit card or other method of payment for the order.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod
     */
    protected $paymentMethod;

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
     *
     * @var String
     */
    protected $paymentMethodId;

    /**
     * The URL for sending a payment.
     *
     * @var String
     */
    protected $paymentUrl;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Order";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    public function getAcceptedOffer()
    {
        return $this->acceptedOffer;
    }

    /**
     * @param $acceptedOffer Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    public function setAcceptedOffer($acceptedOffer)
    {
        $this->acceptedOffer = $acceptedOffer;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @param $billingAddress Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function setBillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }

    /**
     * @return String
     */
    public function getConfirmationNumber()
    {
        return $this->confirmationNumber;
    }

    /**
     * @param $confirmationNumber String
     */
    public function setConfirmationNumber($confirmationNumber)
    {
        $this->confirmationNumber = $confirmationNumber;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param $customer Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return Float|String
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param $discount Float|String
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return String
     */
    public function getDiscountCode()
    {
        return $this->discountCode;
    }

    /**
     * @param $discountCode String
     */
    public function setDiscountCode($discountCode)
    {
        $this->discountCode = $discountCode;
        return $this;
    }

    /**
     * @return String
     */
    public function getDiscountCurrency()
    {
        return $this->discountCurrency;
    }

    /**
     * @param $discountCurrency String
     */
    public function setDiscountCurrency($discountCurrency)
    {
        $this->discountCurrency = $discountCurrency;
        return $this;
    }

    /**
     * @return Boolean
     */
    public function getIsGift()
    {
        return $this->isGift;
    }

    /**
     * @param $isGift Boolean
     */
    public function setIsGift($isGift)
    {
        $this->isGift = $isGift;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * @param $merchant Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function setMerchant($merchant)
    {
        $this->merchant = $merchant;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @param $orderDate DateTime
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Product
     */
    public function getOrderedItem()
    {
        return $this->orderedItem;
    }

    /**
     * @param $orderedItem Robinzhao\SchemaOrg\Thing\Product
     */
    public function setOrderedItem($orderedItem)
    {
        $this->orderedItem = $orderedItem;
        return $this;
    }

    /**
     * @return String
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param $orderNumber String
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\OrderStatus
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param $orderStatus Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\OrderStatus
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getPaymentDue()
    {
        return $this->paymentDue;
    }

    /**
     * @param $paymentDue DateTime
     */
    public function setPaymentDue($paymentDue)
    {
        $this->paymentDue = $paymentDue;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param $paymentMethod Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * @return String
     */
    public function getPaymentMethodId()
    {
        return $this->paymentMethodId;
    }

    /**
     * @param $paymentMethodId String
     */
    public function setPaymentMethodId($paymentMethodId)
    {
        $this->paymentMethodId = $paymentMethodId;
        return $this;
    }

    /**
     * @return String
     */
    public function getPaymentUrl()
    {
        return $this->paymentUrl;
    }

    /**
     * @param $paymentUrl String
     */
    public function setPaymentUrl($paymentUrl)
    {
        $this->paymentUrl = $paymentUrl;
        return $this;
    }

}
