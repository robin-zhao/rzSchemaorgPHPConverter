<?php
/**
 * This is an auto generated file.
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
    public $infectiousAgent;

    /**
     * The class of infectious agent (bacteria, prion, etc.) that causes the disease.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\InfectiousAgentClass
     */
    public $infectiousAgentClass;

    /**
     * How the disease spreads, either as a route or vector, for example 'direct contact', 'Aedes aegypti', etc.
     *
     * @var String
     */
    public $transmissionMethod;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/InfectiousDisease";

    /**
     * @param $infectiousAgent String
     */
    public function addInfectiousAgent($infectiousAgent)
    {
        $this->infectiousAgent []= $infectiousAgent;
        return $this;
    }

    /**
     * @param $infectiousAgentClass Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\InfectiousAgentClass
     */
    public function addInfectiousAgentClass($infectiousAgentClass)
    {
        $this->infectiousAgentClass []= $infectiousAgentClass;
        return $this;
    }

    /**
     * @param $transmissionMethod String
     */
    public function addTransmissionMethod($transmissionMethod)
    {
        $this->transmissionMethod []= $transmissionMethod;
        return $this;
    }


}