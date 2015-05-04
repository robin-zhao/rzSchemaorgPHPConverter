<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCondition;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCondition;

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
    protected $infectiousAgent;

    /**
     * The class of infectious agent (bacteria, prion, etc.) that causes the disease.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\InfectiousAgentClass
     */
    protected $infectiousAgentClass;

    /**
     * How the disease spreads, either as a route or vector, for example 'direct contact', 'Aedes aegypti', etc.
     *
     * @var String
     */
    protected $transmissionMethod;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/InfectiousDisease";

    /**
     * @return String
     */
    public function getInfectiousAgent()
    {
        return $this->infectiousAgent;
    }

    /**
     * @param $infectiousAgent String
     */
    public function setInfectiousAgent($infectiousAgent)
    {
        $this->infectiousAgent = $infectiousAgent;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\InfectiousAgentClass
     */
    public function getInfectiousAgentClass()
    {
        return $this->infectiousAgentClass;
    }

    /**
     * @param $infectiousAgentClass Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\InfectiousAgentClass
     */
    public function setInfectiousAgentClass($infectiousAgentClass)
    {
        $this->infectiousAgentClass = $infectiousAgentClass;
        return $this;
    }

    /**
     * @return String
     */
    public function getTransmissionMethod()
    {
        return $this->transmissionMethod;
    }

    /**
     * @param $transmissionMethod String
     */
    public function setTransmissionMethod($transmissionMethod)
    {
        $this->transmissionMethod = $transmissionMethod;
        return $this;
    }

}
