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
    protected $availableLanguage;

    /**
     * Estimated processing time for the service using this channel.
     *
     * @var Example\Thing\Intangible\Quantity\Duration
     */
    protected $processingTime;

    /**
     * The service provided by this channel.
     *
     * @var Example\Thing\Intangible\Service
     */
    protected $providesService;

    /**
     * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
     *
     * @var Example\Thing\Place
     */
    protected $serviceLocation;

    /**
     * The phone number to use to access the service.
     *
     * @var Example\Thing\Intangible\StructuredValue\ContactPoint
     */
    protected $servicePhone;

    /**
     * The address for accessing the service by mail.
     *
     * @var Example\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    protected $servicePostalAddress;

    /**
     * The number to access the service by text message.
     *
     * @var Example\Thing\Intangible\StructuredValue\ContactPoint
     */
    protected $serviceSmsNumber;

    /**
     * The website to access the service.
     *
     * @var String
     */
    protected $serviceUrl;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/ServiceChannel";

    /**
     * @return Example\Thing\Intangible\Language
     */
    public function getAvailableLanguage()
    {
        return $this->availableLanguage;
    }

    /**
     * @param $availableLanguage Example\Thing\Intangible\Language
     */
    public function setAvailableLanguage($availableLanguage)
    {
        $this->availableLanguage = $availableLanguage;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Quantity\Duration
     */
    public function getProcessingTime()
    {
        return $this->processingTime;
    }

    /**
     * @param $processingTime Example\Thing\Intangible\Quantity\Duration
     */
    public function setProcessingTime($processingTime)
    {
        $this->processingTime = $processingTime;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Service
     */
    public function getProvidesService()
    {
        return $this->providesService;
    }

    /**
     * @param $providesService Example\Thing\Intangible\Service
     */
    public function setProvidesService($providesService)
    {
        $this->providesService = $providesService;
        return $this;
    }

    /**
     * @return Example\Thing\Place
     */
    public function getServiceLocation()
    {
        return $this->serviceLocation;
    }

    /**
     * @param $serviceLocation Example\Thing\Place
     */
    public function setServiceLocation($serviceLocation)
    {
        $this->serviceLocation = $serviceLocation;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\StructuredValue\ContactPoint
     */
    public function getServicePhone()
    {
        return $this->servicePhone;
    }

    /**
     * @param $servicePhone Example\Thing\Intangible\StructuredValue\ContactPoint
     */
    public function setServicePhone($servicePhone)
    {
        $this->servicePhone = $servicePhone;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function getServicePostalAddress()
    {
        return $this->servicePostalAddress;
    }

    /**
     * @param $servicePostalAddress Example\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function setServicePostalAddress($servicePostalAddress)
    {
        $this->servicePostalAddress = $servicePostalAddress;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\StructuredValue\ContactPoint
     */
    public function getServiceSmsNumber()
    {
        return $this->serviceSmsNumber;
    }

    /**
     * @param $serviceSmsNumber Example\Thing\Intangible\StructuredValue\ContactPoint
     */
    public function setServiceSmsNumber($serviceSmsNumber)
    {
        $this->serviceSmsNumber = $serviceSmsNumber;
        return $this;
    }

    /**
     * @return String
     */
    public function getServiceUrl()
    {
        return $this->serviceUrl;
    }

    /**
     * @param $serviceUrl String
     */
    public function setServiceUrl($serviceUrl)
    {
        $this->serviceUrl = $serviceUrl;
        return $this;
    }

}
