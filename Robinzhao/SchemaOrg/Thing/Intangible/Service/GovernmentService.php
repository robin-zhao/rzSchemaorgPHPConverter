<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\Service;

use Robinzhao\SchemaOrg\Thing\Intangible\Service;

/**
 * Government Service
 * http://schema.org/GovernmentService
 */
class GovernmentService extends Service
{

    /**
     * The operating organization, if different from the provider.  This enables the representation of services that are provided by an organization, but operated by another organization like a subcontractor.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    public $serviceOperator;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/GovernmentService";

    /**
     * @param $serviceOperator Robinzhao\SchemaOrg\Thing\Organization
     */
    public function addServiceOperator($serviceOperator)
    {
        $this->serviceOperator []= $serviceOperator;
        return $this;
    }


}