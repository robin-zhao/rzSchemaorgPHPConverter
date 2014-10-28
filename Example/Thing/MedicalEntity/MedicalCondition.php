<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity;

use Example\Thing\MedicalEntity;

/**
 * Medical Condition
 * http://schema.org/MedicalCondition
 */
class MedicalCondition extends MedicalEntity
{

    /**
     * The anatomy of the underlying organ system or structures associated with this entity.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalSystem|Example\Thing\MedicalEntity\SuperficialAnatomy|Example\Thing\MedicalEntity\AnatomicalStructure
     */
    private $associatedAnatomy;

    /**
     * An underlying cause. More specifically, one of the causative agent(s) that are most directly responsible for the pathophysiologic process that eventually results in the occurrence.
     *
     * @var Example\Thing\MedicalEntity\MedicalCause
     */
    private $cause;

    /**
     * One of a set of differential diagnoses for the condition. Specifically, a closely-related or competing diagnosis typically considered later in the cognitive process whereby this medical condition is distinguished from others most likely responsible for a similar collection of signs and symptoms to reach the most parsimonious diagnosis or diagnoses in a patient.
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\DDxElement
     */
    private $differentialDiagnosis;

    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     *
     * @var String
     */
    private $epidemiology;

    /**
     * The likely outcome in either the short term or long term of the medical condition.
     *
     * @var String
     */
    private $expectedPrognosis;

    /**
     * The expected progression of the condition if it is not treated and allowed to progress naturally.
     *
     * @var String
     */
    private $naturalProgression;

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     *
     * @var String
     */
    private $pathophysiology;

    /**
     * A possible unexpected and unfavorable evolution of a medical condition. Complications may include worsening of the signs or symptoms of the disease, extension of the condition to other organ systems, etc.
     *
     * @var String
     */
    private $possibleComplication;

    /**
     * A possible treatment to address this condition, sign or symptom.
     *
     * @var Example\Thing\MedicalEntity\MedicalTherapy
     */
    private $possibleTreatment;

    /**
     * A preventative therapy used to prevent an initial occurrence of the medical condition, such as vaccination.
     *
     * @var Example\Thing\MedicalEntity\MedicalTherapy
     */
    private $primaryPrevention;

    /**
     * A modifiable or non-modifiable factor that increases the risk of a patient contracting this condition, e.g. age,  coexisting condition.
     *
     * @var Example\Thing\MedicalEntity\MedicalRiskFactor
     */
    private $riskFactor;

    /**
     * A preventative therapy used to prevent reoccurrence of the medical condition after an initial episode of the condition.
     *
     * @var Example\Thing\MedicalEntity\MedicalTherapy
     */
    private $secondaryPrevention;

    /**
     * A sign or symptom of this condition. Signs are objective or physically observable manifestations of the medical condition while symptoms are the subjective experienceof the medical condition.
     *
     * @var Example\Thing\MedicalEntity\MedicalSignOrSymptom
     */
    private $signOrSymptom;

    /**
     * The stage of the condition, if applicable.
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\MedicalConditionStage
     */
    private $stage;

    /**
     * A more specific type of the condition, where applicable, for example 'Type 1 Diabetes', 'Type 2 Diabetes', or 'Gestational Diabetes' for Diabetes.
     *
     * @var String
     */
    private $subtype;

    /**
     * A medical test typically performed given this condition.
     *
     * @var Example\Thing\MedicalEntity\MedicalTest
     */
    private $typicalTest;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalCondition";

    public function getAssociatedAnatomy()
    {
        return $this->associatedAnatomy;
    }

    public function setAssociatedAnatomy($associatedAnatomy)
    {
        $this->associatedAnatomy = $associatedAnatomy;
        return $this;
    }

    public function getCause()
    {
        return $this->cause;
    }

    public function setCause($cause)
    {
        $this->cause = $cause;
        return $this;
    }

    public function getDifferentialDiagnosis()
    {
        return $this->differentialDiagnosis;
    }

    public function setDifferentialDiagnosis($differentialDiagnosis)
    {
        $this->differentialDiagnosis = $differentialDiagnosis;
        return $this;
    }

    public function getEpidemiology()
    {
        return $this->epidemiology;
    }

    public function setEpidemiology($epidemiology)
    {
        $this->epidemiology = $epidemiology;
        return $this;
    }

    public function getExpectedPrognosis()
    {
        return $this->expectedPrognosis;
    }

    public function setExpectedPrognosis($expectedPrognosis)
    {
        $this->expectedPrognosis = $expectedPrognosis;
        return $this;
    }

    public function getNaturalProgression()
    {
        return $this->naturalProgression;
    }

    public function setNaturalProgression($naturalProgression)
    {
        $this->naturalProgression = $naturalProgression;
        return $this;
    }

    public function getPathophysiology()
    {
        return $this->pathophysiology;
    }

    public function setPathophysiology($pathophysiology)
    {
        $this->pathophysiology = $pathophysiology;
        return $this;
    }

    public function getPossibleComplication()
    {
        return $this->possibleComplication;
    }

    public function setPossibleComplication($possibleComplication)
    {
        $this->possibleComplication = $possibleComplication;
        return $this;
    }

    public function getPossibleTreatment()
    {
        return $this->possibleTreatment;
    }

    public function setPossibleTreatment($possibleTreatment)
    {
        $this->possibleTreatment = $possibleTreatment;
        return $this;
    }

    public function getPrimaryPrevention()
    {
        return $this->primaryPrevention;
    }

    public function setPrimaryPrevention($primaryPrevention)
    {
        $this->primaryPrevention = $primaryPrevention;
        return $this;
    }

    public function getRiskFactor()
    {
        return $this->riskFactor;
    }

    public function setRiskFactor($riskFactor)
    {
        $this->riskFactor = $riskFactor;
        return $this;
    }

    public function getSecondaryPrevention()
    {
        return $this->secondaryPrevention;
    }

    public function setSecondaryPrevention($secondaryPrevention)
    {
        $this->secondaryPrevention = $secondaryPrevention;
        return $this;
    }

    public function getSignOrSymptom()
    {
        return $this->signOrSymptom;
    }

    public function setSignOrSymptom($signOrSymptom)
    {
        $this->signOrSymptom = $signOrSymptom;
        return $this;
    }

    public function getStage()
    {
        return $this->stage;
    }

    public function setStage($stage)
    {
        $this->stage = $stage;
        return $this;
    }

    public function getSubtype()
    {
        return $this->subtype;
    }

    public function setSubtype($subtype)
    {
        $this->subtype = $subtype;
        return $this;
    }

    public function getTypicalTest()
    {
        return $this->typicalTest;
    }

    public function setTypicalTest($typicalTest)
    {
        $this->typicalTest = $typicalTest;
        return $this;
    }

}
