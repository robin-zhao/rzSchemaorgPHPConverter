<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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

    public function getAvailableLanguage()
    {
        return $this->availableLanguage;
    }

    public function setAvailableLanguage($availableLanguage)
    {
        $this->availableLanguage = $availableLanguage;
        return $this;
    }

    public function getProcessingTime()
    {
        return $this->processingTime;
    }

    public function setProcessingTime($processingTime)
    {
        $this->processingTime = $processingTime;
        return $this;
    }

    public function getProvidesService()
    {
        return $this->providesService;
    }

    public function setProvidesService($providesService)
    {
        $this->providesService = $providesService;
        return $this;
    }

    public function getServiceLocation()
    {
        return $this->serviceLocation;
    }

    public function setServiceLocation($serviceLocation)
    {
        $this->serviceLocation = $serviceLocation;
        return $this;
    }

    public function getServicePhone()
    {
        return $this->servicePhone;
    }

    public function setServicePhone($servicePhone)
    {
        $this->servicePhone = $servicePhone;
        return $this;
    }

    public function getServicePostalAddress()
    {
        return $this->servicePostalAddress;
    }

    public function setServicePostalAddress($servicePostalAddress)
    {
        $this->servicePostalAddress = $servicePostalAddress;
        return $this;
    }

    public function getServiceSmsNumber()
    {
        return $this->serviceSmsNumber;
    }

    public function setServiceSmsNumber($serviceSmsNumber)
    {
        $this->serviceSmsNumber = $serviceSmsNumber;
        return $this;
    }

    public function getServiceUrl()
    {
        return $this->serviceUrl;
    }

    public function setServiceUrl($serviceUrl)
    {
        $this->serviceUrl = $serviceUrl;
        return $this;
    }

}
