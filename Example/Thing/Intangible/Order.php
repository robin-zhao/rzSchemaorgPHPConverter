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

    public function getAcceptedOffer()
    {
        return $this->acceptedOffer;
    }

    public function setAcceptedOffer($acceptedOffer)
    {
        $this->acceptedOffer = $acceptedOffer;
        return $this;
    }

    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    public function setBillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }

    public function getConfirmationNumber()
    {
        return $this->confirmationNumber;
    }

    public function setConfirmationNumber($confirmationNumber)
    {
        $this->confirmationNumber = $confirmationNumber;
        return $this;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    public function getDiscountCode()
    {
        return $this->discountCode;
    }

    public function setDiscountCode($discountCode)
    {
        $this->discountCode = $discountCode;
        return $this;
    }

    public function getDiscountCurrency()
    {
        return $this->discountCurrency;
    }

    public function setDiscountCurrency($discountCurrency)
    {
        $this->discountCurrency = $discountCurrency;
        return $this;
    }

    public function getIsGift()
    {
        return $this->isGift;
    }

    public function setIsGift($isGift)
    {
        $this->isGift = $isGift;
        return $this;
    }

    public function getMerchant()
    {
        return $this->merchant;
    }

    public function setMerchant($merchant)
    {
        $this->merchant = $merchant;
        return $this;
    }

    public function getOrderDate()
    {
        return $this->orderDate;
    }

    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
        return $this;
    }

    public function getOrderedItem()
    {
        return $this->orderedItem;
    }

    public function setOrderedItem($orderedItem)
    {
        $this->orderedItem = $orderedItem;
        return $this;
    }

    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    public function getPaymentDue()
    {
        return $this->paymentDue;
    }

    public function setPaymentDue($paymentDue)
    {
        $this->paymentDue = $paymentDue;
        return $this;
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    public function getPaymentMethodId()
    {
        return $this->paymentMethodId;
    }

    public function setPaymentMethodId($paymentMethodId)
    {
        $this->paymentMethodId = $paymentMethodId;
        return $this;
    }

    public function getPaymentUrl()
    {
        return $this->paymentUrl;
    }

    public function setPaymentUrl($paymentUrl)
    {
        $this->paymentUrl = $paymentUrl;
        return $this;
    }

}
