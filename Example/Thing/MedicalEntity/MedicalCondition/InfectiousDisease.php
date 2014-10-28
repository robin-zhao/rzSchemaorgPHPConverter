<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity\MedicalCondition;

use Example\Thing\MedicalEntity\MedicalCondition;

/**
 * Infectious Disease
 * http://schema.org/InfectiousDisease
 */
class InfectiousDisease extends MedicalCondition
{

    /**
     * The actual infectious agent, such as a specific bacterium.
     *
     * @var String
     */
    private $infectiousAgent;

    /**
     * The class of infectious agent (bacteria, prion, etc.) that causes the disease.
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\InfectiousAgentClass
     */
    private $infectiousAgentClass;

    /**
     * How the disease spreads, either as a route or vector, for example 'direct contact', 'Aedes aegypti', etc.
     *
     * @var String
     */
    private $transmissionMethod;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/InfectiousDisease";

    public function getinfectiousAgent()
    {
        return $this->infectiousAgent;
    }

    public function setinfectiousAgent($infectiousAgent)
    {
        $this->infectiousAgent = $infectiousAgent;
        return $this;
    }

    public function getinfectiousAgentClass()
    {
        return $this->infectiousAgentClass;
    }

    public function setinfectiousAgentClass($infectiousAgentClass)
    {
        $this->infectiousAgentClass = $infectiousAgentClass;
        return $this;
    }

    public function gettransmissionMethod()
    {
        return $this->transmissionMethod;
    }

    public function settransmissionMethod($transmissionMethod)
    {
        $this->transmissionMethod = $transmissionMethod;
        return $this;
    }

}
