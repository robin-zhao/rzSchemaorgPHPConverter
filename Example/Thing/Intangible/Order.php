<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible;

use Example\Thing\Intangible;

/**
 * Order
 * http://schema.org/Order
 */
class Order extends Intangible
{

    /**
     * The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
     *
     * @var Example\Thing\Intangible\Offer
     */
    private $acceptedOffer;

    /**
     * The billing address for the order.
     *
     * @var Example\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    private $billingAddress;

    /**
     * A number that confirms the given order.
     *
     * @var String
     */
    private $confirmationNumber;

    /**
     * Party placing the order.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $customer;

    /**
     * Any discount applied (to an Order).
     *
     * @var Float|String
     */
    private $discount;

    /**
     * Code used to redeem a discount.
     *
     * @var String
     */
    private $discountCode;

    /**
     * The currency (in 3-letter ISO 4217 format) of the discount.
     *
     * @var String
     */
    private $discountCurrency;

    /**
     * Was the offer accepted as a gift for someone other than the buyer.
     *
     * @var Boolean
     */
    private $isGift;

    /**
     * The party taking the order (e.g. Amazon.com is a merchant for many sellers).
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $merchant;

    /**
     * Date order was placed.
     *
     * @var DateTime
     */
    private $orderDate;

    /**
     * The item ordered.
     *
     * @var Example\Thing\Product
     */
    private $orderedItem;

    /**
     * The identifier of the transaction.
     *
     * @var String
     */
    private $orderNumber;

    /**
     * The current status of the order.
     *
     * @var Example\Thing\Intangible\Enumeration\OrderStatus
     */
    private $orderStatus;

    /**
     * The date that payment is due.
     *
     * @var DateTime
     */
    private $paymentDue;

    /**
     * The name of the credit card or other method of payment for the order.
     *
     * @var Example\Thing\Intangible\Enumeration\PaymentMethod
     */
    private $paymentMethod;

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
     *
     * @var String
     */
    private $paymentMethodId;

    /**
     * The URL for sending a payment.
     *
     * @var String
     */
    private $paymentUrl;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Order";

    /**
     * @return Example\Thing\Intangible\Offer
     */
    public function getAcceptedOffer()
    {
        return $this->acceptedOffer;
    }

    /**
     * @param $acceptedOffer Example\Thing\Intangible\Offer
     */
    public function setAcceptedOffer($acceptedOffer)
    {
        $this->acceptedOffer = $acceptedOffer;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @param $billingAddress Example\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
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
     * @return Example\Thing\Organization|Example\Thing\Person
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param $customer Example\Thing\Organization|Example\Thing\Person
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
     * @return Example\Thing\Organization|Example\Thing\Person
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * @param $merchant Example\Thing\Organization|Example\Thing\Person
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
     * @return Example\Thing\Product
     */
    public function getOrderedItem()
    {
        return $this->orderedItem;
    }

    /**
     * @param $orderedItem Example\Thing\Product
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
     * @return Example\Thing\Intangible\Enumeration\OrderStatus
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param $orderStatus Example\Thing\Intangible\Enumeration\OrderStatus
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
     * @return Example\Thing\Intangible\Enumeration\PaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param $paymentMethod Example\Thing\Intangible\Enumeration\PaymentMethod
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
