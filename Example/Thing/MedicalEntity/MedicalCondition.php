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

    /**
     * @return Example\Thing\MedicalEntity\AnatomicalSystem|Example\Thing\MedicalEntity\SuperficialAnatomy|Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function getAssociatedAnatomy()
    {
        return $this->associatedAnatomy;
    }

    /**
     * @param $associatedAnatomy Example\Thing\MedicalEntity\AnatomicalSystem|Example\Thing\MedicalEntity\SuperficialAnatomy|Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function setAssociatedAnatomy($associatedAnatomy)
    {
        $this->associatedAnatomy = $associatedAnatomy;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalCause
     */
    public function getCause()
    {
        return $this->cause;
    }

    /**
     * @param $cause Example\Thing\MedicalEntity\MedicalCause
     */
    public function setCause($cause)
    {
        $this->cause = $cause;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalIntangible\DDxElement
     */
    public function getDifferentialDiagnosis()
    {
        return $this->differentialDiagnosis;
    }

    /**
     * @param $differentialDiagnosis Example\Thing\MedicalEntity\MedicalIntangible\DDxElement
     */
    public function setDifferentialDiagnosis($differentialDiagnosis)
    {
        $this->differentialDiagnosis = $differentialDiagnosis;
        return $this;
    }

    /**
     * @return String
     */
    public function getEpidemiology()
    {
        return $this->epidemiology;
    }

    /**
     * @param $epidemiology String
     */
    public function setEpidemiology($epidemiology)
    {
        $this->epidemiology = $epidemiology;
        return $this;
    }

    /**
     * @return String
     */
    public function getExpectedPrognosis()
    {
        return $this->expectedPrognosis;
    }

    /**
     * @param $expectedPrognosis String
     */
    public function setExpectedPrognosis($expectedPrognosis)
    {
        $this->expectedPrognosis = $expectedPrognosis;
        return $this;
    }

    /**
     * @return String
     */
    public function getNaturalProgression()
    {
        return $this->naturalProgression;
    }

    /**
     * @param $naturalProgression String
     */
    public function setNaturalProgression($naturalProgression)
    {
        $this->naturalProgression = $naturalProgression;
        return $this;
    }

    /**
     * @return String
     */
    public function getPathophysiology()
    {
        return $this->pathophysiology;
    }

    /**
     * @param $pathophysiology String
     */
    public function setPathophysiology($pathophysiology)
    {
        $this->pathophysiology = $pathophysiology;
        return $this;
    }

    /**
     * @return String
     */
    public function getPossibleComplication()
    {
        return $this->possibleComplication;
    }

    /**
     * @param $possibleComplication String
     */
    public function setPossibleComplication($possibleComplication)
    {
        $this->possibleComplication = $possibleComplication;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalTherapy
     */
    public function getPossibleTreatment()
    {
        return $this->possibleTreatment;
    }

    /**
     * @param $possibleTreatment Example\Thing\MedicalEntity\MedicalTherapy
     */
    public function setPossibleTreatment($possibleTreatment)
    {
        $this->possibleTreatment = $possibleTreatment;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalTherapy
     */
    public function getPrimaryPrevention()
    {
        return $this->primaryPrevention;
    }

    /**
     * @param $primaryPrevention Example\Thing\MedicalEntity\MedicalTherapy
     */
    public function setPrimaryPrevention($primaryPrevention)
    {
        $this->primaryPrevention = $primaryPrevention;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalRiskFactor
     */
    public function getRiskFactor()
    {
        return $this->riskFactor;
    }

    /**
     * @param $riskFactor Example\Thing\MedicalEntity\MedicalRiskFactor
     */
    public function setRiskFactor($riskFactor)
    {
        $this->riskFactor = $riskFactor;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalTherapy
     */
    public function getSecondaryPrevention()
    {
        return $this->secondaryPrevention;
    }

    /**
     * @param $secondaryPrevention Example\Thing\MedicalEntity\MedicalTherapy
     */
    public function setSecondaryPrevention($secondaryPrevention)
    {
        $this->secondaryPrevention = $secondaryPrevention;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalSignOrSymptom
     */
    public function getSignOrSymptom()
    {
        return $this->signOrSymptom;
    }

    /**
     * @param $signOrSymptom Example\Thing\MedicalEntity\MedicalSignOrSymptom
     */
    public function setSignOrSymptom($signOrSymptom)
    {
        $this->signOrSymptom = $signOrSymptom;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalIntangible\MedicalConditionStage
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * @param $stage Example\Thing\MedicalEntity\MedicalIntangible\MedicalConditionStage
     */
    public function setStage($stage)
    {
        $this->stage = $stage;
        return $this;
    }

    /**
     * @return String
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * @param $subtype String
     */
    public function setSubtype($subtype)
    {
        $this->subtype = $subtype;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalTest
     */
    public function getTypicalTest()
    {
        return $this->typicalTest;
    }

    /**
     * @param $typicalTest Example\Thing\MedicalEntity\MedicalTest
     */
    public function setTypicalTest($typicalTest)
    {
        $this->typicalTest = $typicalTest;
        return $this;
    }

}
