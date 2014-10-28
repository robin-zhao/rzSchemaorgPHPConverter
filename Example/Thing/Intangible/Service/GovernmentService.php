<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible\Service;

use Example\Thing\Intangible\Service;

/**
 * Government Service
 * http://schema.org/GovernmentService
 */
class GovernmentService extends Service
{

    /**
     * The operating organization, if different from the provider.  This enables the representation of services that are provided by an organization, but operated by another organization like a subcontractor.
     *
     * @var Example\Thing\Organization
     */
    protected $serviceOperator;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/GovernmentService";

    /**
     * @return Example\Thing\Organization
     */
    public function getServiceOperator()
    {
        return $this->serviceOperator;
    }

    /**
     * @param $serviceOperator Example\Thing\Organization
     */
    public function setServiceOperator($serviceOperator)
    {
        $this->serviceOperator = $serviceOperator;
        return $this;
    }

}
