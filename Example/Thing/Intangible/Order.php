<?php

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
     * @var Offer
     */
    private $acceptedOffer;

    /**
     * The billing address for the order.
     *
     * @var PostalAddress
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
     * @var Organization|Person
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
     * @var Organization|Person
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
     * @var Product
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
     * @var OrderStatus
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
     * @var PaymentMethod
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

    public function getacceptedOffer()
    {
        return $this->acceptedOffer;
    }

    public function setacceptedOffer($acceptedOffer)
    {
        $this->acceptedOffer = $acceptedOffer;
        return $this;
    }

    public function getbillingAddress()
    {
        return $this->billingAddress;
    }

    public function setbillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }

    public function getconfirmationNumber()
    {
        return $this->confirmationNumber;
    }

    public function setconfirmationNumber($confirmationNumber)
    {
        $this->confirmationNumber = $confirmationNumber;
        return $this;
    }

    public function getcustomer()
    {
        return $this->customer;
    }

    public function setcustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    public function getdiscount()
    {
        return $this->discount;
    }

    public function setdiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    public function getdiscountCode()
    {
        return $this->discountCode;
    }

    public function setdiscountCode($discountCode)
    {
        $this->discountCode = $discountCode;
        return $this;
    }

    public function getdiscountCurrency()
    {
        return $this->discountCurrency;
    }

    public function setdiscountCurrency($discountCurrency)
    {
        $this->discountCurrency = $discountCurrency;
        return $this;
    }

    public function getisGift()
    {
        return $this->isGift;
    }

    public function setisGift($isGift)
    {
        $this->isGift = $isGift;
        return $this;
    }

    public function getmerchant()
    {
        return $this->merchant;
    }

    public function setmerchant($merchant)
    {
        $this->merchant = $merchant;
        return $this;
    }

    public function getorderDate()
    {
        return $this->orderDate;
    }

    public function setorderDate($orderDate)
    {
        $this->orderDate = $orderDate;
        return $this;
    }

    public function getorderedItem()
    {
        return $this->orderedItem;
    }

    public function setorderedItem($orderedItem)
    {
        $this->orderedItem = $orderedItem;
        return $this;
    }

    public function getorderNumber()
    {
        return $this->orderNumber;
    }

    public function setorderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    public function getorderStatus()
    {
        return $this->orderStatus;
    }

    public function setorderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    public function getpaymentDue()
    {
        return $this->paymentDue;
    }

    public function setpaymentDue($paymentDue)
    {
        $this->paymentDue = $paymentDue;
        return $this;
    }

    public function getpaymentMethod()
    {
        return $this->paymentMethod;
    }

    public function setpaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    public function getpaymentMethodId()
    {
        return $this->paymentMethodId;
    }

    public function setpaymentMethodId($paymentMethodId)
    {
        $this->paymentMethodId = $paymentMethodId;
        return $this;
    }

    public function getpaymentUrl()
    {
        return $this->paymentUrl;
    }

    public function setpaymentUrl($paymentUrl)
    {
        $this->paymentUrl = $paymentUrl;
        return $this;
    }

}
