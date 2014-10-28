<?php

namespace Example\Thing\Intangible;

use Example\Thing\Intangible;

/**
 * Service Channel
 * http://schema.org/ServiceChannel
 */
class ServiceChannel extends Intangible
{

    /**
     * A language someone may use with the item.
     *
     * @var Example\Thing\Intangible\Language
     */
    private $availableLanguage;

    /**
     * Estimated processing time for the service using this channel.
     *
     * @var Example\Thing\Intangible\Quantity\Duration
     */
    private $processingTime;

    /**
     * The service provided by this channel.
     *
     * @var Example\Thing\Intangible\Service
     */
    private $providesService;

    /**
     * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
     *
     * @var Example\Thing\Place
     */
    private $serviceLocation;

    /**
     * The phone number to use to access the service.
     *
     * @var Example\Thing\Intangible\StructuredValue\ContactPoint
     */
    private $servicePhone;

    /**
     * The address for accessing the service by mail.
     *
     * @var Example\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    private $servicePostalAddress;

    /**
     * The number to access the service by text message.
     *
     * @var Example\Thing\Intangible\StructuredValue\ContactPoint
     */
    private $serviceSmsNumber;

    /**
     * The website to access the service.
     *
     * @var String
     */
    private $serviceUrl;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/ServiceChannel";

    public function getavailableLanguage()
    {
        return $this->availableLanguage;
    }

    public function setavailableLanguage($availableLanguage)
    {
        $this->availableLanguage = $availableLanguage;
        return $this;
    }

    public function getprocessingTime()
    {
        return $this->processingTime;
    }

    public function setprocessingTime($processingTime)
    {
        $this->processingTime = $processingTime;
        return $this;
    }

    public function getprovidesService()
    {
        return $this->providesService;
    }

    public function setprovidesService($providesService)
    {
        $this->providesService = $providesService;
        return $this;
    }

    public function getserviceLocation()
    {
        return $this->serviceLocation;
    }

    public function setserviceLocation($serviceLocation)
    {
        $this->serviceLocation = $serviceLocation;
        return $this;
    }

    public function getservicePhone()
    {
        return $this->servicePhone;
    }

    public function setservicePhone($servicePhone)
    {
        $this->servicePhone = $servicePhone;
        return $this;
    }

    public function getservicePostalAddress()
    {
        return $this->servicePostalAddress;
    }

    public function setservicePostalAddress($servicePostalAddress)
    {
        $this->servicePostalAddress = $servicePostalAddress;
        return $this;
    }

    public function getserviceSmsNumber()
    {
        return $this->serviceSmsNumber;
    }

    public function setserviceSmsNumber($serviceSmsNumber)
    {
        $this->serviceSmsNumber = $serviceSmsNumber;
        return $this;
    }

    public function getserviceUrl()
    {
        return $this->serviceUrl;
    }

    public function setserviceUrl($serviceUrl)
    {
        $this->serviceUrl = $serviceUrl;
        return $this;
    }

}
