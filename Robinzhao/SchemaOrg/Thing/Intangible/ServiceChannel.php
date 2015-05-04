<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible;

use Robinzhao\SchemaOrg\Thing\Intangible;

/**
 * Service Channel
 * http://schema.org/ServiceChannel
 */
class ServiceChannel extends Intangible
{

    /**
     * A language someone may use with the item.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Language
     */
    protected $availableLanguage;

    /**
     * Estimated processing time for the service using this channel.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    protected $processingTime;

    /**
     * The service provided by this channel.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Service
     */
    protected $providesService;

    /**
     * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place
     */
    protected $serviceLocation;

    /**
     * The phone number to use to access the service.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
     */
    protected $servicePhone;

    /**
     * The address for accessing the service by mail.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    protected $servicePostalAddress;

    /**
     * The number to access the service by text message.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
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
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Language
     */
    public function getAvailableLanguage()
    {
        return $this->availableLanguage;
    }

    /**
     * @param $availableLanguage Robinzhao\SchemaOrg\Thing\Intangible\Language
     */
    public function setAvailableLanguage($availableLanguage)
    {
        $this->availableLanguage = $availableLanguage;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public function getProcessingTime()
    {
        return $this->processingTime;
    }

    /**
     * @param $processingTime Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public function setProcessingTime($processingTime)
    {
        $this->processingTime = $processingTime;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Service
     */
    public function getProvidesService()
    {
        return $this->providesService;
    }

    /**
     * @param $providesService Robinzhao\SchemaOrg\Thing\Intangible\Service
     */
    public function setProvidesService($providesService)
    {
        $this->providesService = $providesService;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Place
     */
    public function getServiceLocation()
    {
        return $this->serviceLocation;
    }

    /**
     * @param $serviceLocation Robinzhao\SchemaOrg\Thing\Place
     */
    public function setServiceLocation($serviceLocation)
    {
        $this->serviceLocation = $serviceLocation;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
     */
    public function getServicePhone()
    {
        return $this->servicePhone;
    }

    /**
     * @param $servicePhone Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
     */
    public function setServicePhone($servicePhone)
    {
        $this->servicePhone = $servicePhone;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function getServicePostalAddress()
    {
        return $this->servicePostalAddress;
    }

    /**
     * @param $servicePostalAddress Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function setServicePostalAddress($servicePostalAddress)
    {
        $this->servicePostalAddress = $servicePostalAddress;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
     */
    public function getServiceSmsNumber()
    {
        return $this->serviceSmsNumber;
    }

    /**
     * @param $serviceSmsNumber Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
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
