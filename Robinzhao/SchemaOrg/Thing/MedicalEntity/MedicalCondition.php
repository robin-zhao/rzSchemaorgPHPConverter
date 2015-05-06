<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity;

use Robinzhao\SchemaOrg\Thing\MedicalEntity;

/**
 * Medical Condition
 * http://schema.org/MedicalCondition
 */
class MedicalCondition extends MedicalEntity
{

    /**
     * The anatomy of the underlying organ system or structures associated with this entity.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem|Robinzhao\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public $associatedAnatomy;

    /**
     * An underlying cause. More specifically, one of the causative agent(s) that are most directly responsible for the pathophysiologic process that eventually results in the occurrence.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCause
     */
    public $cause;

    /**
     * One of a set of differential diagnoses for the condition. Specifically, a closely-related or competing diagnosis typically considered later in the cognitive process whereby this medical condition is distinguished from others most likely responsible for a similar collection of signs and symptoms to reach the most parsimonious diagnosis or diagnoses in a patient.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DDxElement
     */
    public $differentialDiagnosis;

    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     *
     * @var String
     */
    public $epidemiology;

    /**
     * The likely outcome in either the short term or long term of the medical condition.
     *
     * @var String
     */
    public $expectedPrognosis;

    /**
     * The expected progression of the condition if it is not treated and allowed to progress naturally.
     *
     * @var String
     */
    public $naturalProgression;

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     *
     * @var String
     */
    public $pathophysiology;

    /**
     * A possible unexpected and unfavorable evolution of a medical condition. Complications may include worsening of the signs or symptoms of the disease, extension of the condition to other organ systems, etc.
     *
     * @var String
     */
    public $possibleComplication;

    /**
     * A possible treatment to address this condition, sign or symptom.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public $possibleTreatment;

    /**
     * A preventative therapy used to prevent an initial occurrence of the medical condition, such as vaccination.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public $primaryPrevention;

    /**
     * A modifiable or non-modifiable factor that increases the risk of a patient contracting this condition, e.g. age,  coexisting condition.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalRiskFactor
     */
    public $riskFactor;

    /**
     * A preventative therapy used to prevent reoccurrence of the medical condition after an initial episode of the condition.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public $secondaryPrevention;

    /**
     * A sign or symptom of this condition. Signs are objective or physically observable manifestations of the medical condition while symptoms are the subjective experienceof the medical condition.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalSignOrSymptom
     */
    public $signOrSymptom;

    /**
     * The stage of the condition, if applicable.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalConditionStage
     */
    public $stage;

    /**
     * A more specific type of the condition, where applicable, for example 'Type 1 Diabetes', 'Type 2 Diabetes', or 'Gestational Diabetes' for Diabetes.
     *
     * @var String
     */
    public $subtype;

    /**
     * A medical test typically performed given this condition.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest
     */
    public $typicalTest;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalCondition";

    /**
     * @param $associatedAnatomy Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem|Robinzhao\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function addAssociatedAnatomy($associatedAnatomy)
    {
        $this->associatedAnatomy []= $associatedAnatomy;
        return $this;
    }

    /**
     * @param $cause Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCause
     */
    public function addCause($cause)
    {
        $this->cause []= $cause;
        return $this;
    }

    /**
     * @param $differentialDiagnosis Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DDxElement
     */
    public function addDifferentialDiagnosis($differentialDiagnosis)
    {
        $this->differentialDiagnosis []= $differentialDiagnosis;
        return $this;
    }

    /**
     * @param $epidemiology String
     */
    public function addEpidemiology($epidemiology)
    {
        $this->epidemiology []= $epidemiology;
        return $this;
    }

    /**
     * @param $expectedPrognosis String
     */
    public function addExpectedPrognosis($expectedPrognosis)
    {
        $this->expectedPrognosis []= $expectedPrognosis;
        return $this;
    }

    /**
     * @param $naturalProgression String
     */
    public function addNaturalProgression($naturalProgression)
    {
        $this->naturalProgression []= $naturalProgression;
        return $this;
    }

    /**
     * @param $pathophysiology String
     */
    public function addPathophysiology($pathophysiology)
    {
        $this->pathophysiology []= $pathophysiology;
        return $this;
    }

    /**
     * @param $possibleComplication String
     */
    public function addPossibleComplication($possibleComplication)
    {
        $this->possibleComplication []= $possibleComplication;
        return $this;
    }

    /**
     * @param $possibleTreatment Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public function addPossibleTreatment($possibleTreatment)
    {
        $this->possibleTreatment []= $possibleTreatment;
        return $this;
    }

    /**
     * @param $primaryPrevention Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public function addPrimaryPrevention($primaryPrevention)
    {
        $this->primaryPrevention []= $primaryPrevention;
        return $this;
    }

    /**
     * @param $riskFactor Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalRiskFactor
     */
    public function addRiskFactor($riskFactor)
    {
        $this->riskFactor []= $riskFactor;
        return $this;
    }

    /**
     * @param $secondaryPrevention Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public function addSecondaryPrevention($secondaryPrevention)
    {
        $this->secondaryPrevention []= $secondaryPrevention;
        return $this;
    }

    /**
     * @param $signOrSymptom Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalSignOrSymptom
     */
    public function addSignOrSymptom($signOrSymptom)
    {
        $this->signOrSymptom []= $signOrSymptom;
        return $this;
    }

    /**
     * @param $stage Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalConditionStage
     */
    public function addStage($stage)
    {
        $this->stage []= $stage;
        return $this;
    }

    /**
     * @param $subtype String
     */
    public function addSubtype($subtype)
    {
        $this->subtype []= $subtype;
        return $this;
    }

    /**
     * @param $typicalTest Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest
     */
    public function addTypicalTest($typicalTest)
    {
        $this->typicalTest []= $typicalTest;
        return $this;
    }


}