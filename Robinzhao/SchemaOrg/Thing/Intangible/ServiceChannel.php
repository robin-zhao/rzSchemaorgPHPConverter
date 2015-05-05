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
    public $availableLanguage;

    /**
     * Estimated processing time for the service using this channel.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public $processingTime;

    /**
     * The service provided by this channel.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Service
     */
    public $providesService;

    /**
     * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place
     */
    public $serviceLocation;

    /**
     * The phone number to use to access the service.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
     */
    public $servicePhone;

    /**
     * The address for accessing the service by mail.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public $servicePostalAddress;

    /**
     * The number to access the service by text message.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
     */
    public $serviceSmsNumber;

    /**
     * The website to access the service.
     *
     * @var String
     */
    public $serviceUrl;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/ServiceChannel";

    /**
     * @param $availableLanguage Robinzhao\SchemaOrg\Thing\Intangible\Language
     */
    public function addAvailableLanguage($availableLanguage)
    {
        $this->availableLanguage []= $availableLanguage;
        return $this;
    }

    /**
     * @param $processingTime Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public function addProcessingTime($processingTime)
    {
        $this->processingTime []= $processingTime;
        return $this;
    }

    /**
     * @param $providesService Robinzhao\SchemaOrg\Thing\Intangible\Service
     */
    public function addProvidesService($providesService)
    {
        $this->providesService []= $providesService;
        return $this;
    }

    /**
     * @param $serviceLocation Robinzhao\SchemaOrg\Thing\Place
     */
    public function addServiceLocation($serviceLocation)
    {
        $this->serviceLocation []= $serviceLocation;
        return $this;
    }

    /**
     * @param $servicePhone Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
     */
    public function addServicePhone($servicePhone)
    {
        $this->servicePhone []= $servicePhone;
        return $this;
    }

    /**
     * @param $servicePostalAddress Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function addServicePostalAddress($servicePostalAddress)
    {
        $this->servicePostalAddress []= $servicePostalAddress;
        return $this;
    }

    /**
     * @param $serviceSmsNumber Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
     */
    public function addServiceSmsNumber($serviceSmsNumber)
    {
        $this->serviceSmsNumber []= $serviceSmsNumber;
        return $this;
    }

    /**
     * @param $serviceUrl String
     */
    public function addServiceUrl($serviceUrl)
    {
        $this->serviceUrl []= $serviceUrl;
        return $this;
    }

}
