<?php

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
     * @var AnatomicalSystem|SuperficialAnatomy|AnatomicalStructure
     */
    private $associatedAnatomy;

    /**
     * An underlying cause. More specifically, one of the causative agent(s) that are most directly responsible for the pathophysiologic process that eventually results in the occurrence.
     *
     * @var MedicalCause
     */
    private $cause;

    /**
     * One of a set of differential diagnoses for the condition. Specifically, a closely-related or competing diagnosis typically considered later in the cognitive process whereby this medical condition is distinguished from others most likely responsible for a similar collection of signs and symptoms to reach the most parsimonious diagnosis or diagnoses in a patient.
     *
     * @var DDxElement
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
     * @var MedicalTherapy
     */
    private $possibleTreatment;

    /**
     * A preventative therapy used to prevent an initial occurrence of the medical condition, such as vaccination.
     *
     * @var MedicalTherapy
     */
    private $primaryPrevention;

    /**
     * A modifiable or non-modifiable factor that increases the risk of a patient contracting this condition, e.g. age,  coexisting condition.
     *
     * @var MedicalRiskFactor
     */
    private $riskFactor;

    /**
     * A preventative therapy used to prevent reoccurrence of the medical condition after an initial episode of the condition.
     *
     * @var MedicalTherapy
     */
    private $secondaryPrevention;

    /**
     * A sign or symptom of this condition. Signs are objective or physically observable manifestations of the medical condition while symptoms are the subjective experienceof the medical condition.
     *
     * @var MedicalSignOrSymptom
     */
    private $signOrSymptom;

    /**
     * The stage of the condition, if applicable.
     *
     * @var MedicalConditionStage
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
     * @var MedicalTest
     */
    private $typicalTest;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalCondition";

    public function getassociatedAnatomy()
    {
        return $this->associatedAnatomy;
    }

    public function setassociatedAnatomy($associatedAnatomy)
    {
        $this->associatedAnatomy = $associatedAnatomy;
        return $this;
    }

    public function getcause()
    {
        return $this->cause;
    }

    public function setcause($cause)
    {
        $this->cause = $cause;
        return $this;
    }

    public function getdifferentialDiagnosis()
    {
        return $this->differentialDiagnosis;
    }

    public function setdifferentialDiagnosis($differentialDiagnosis)
    {
        $this->differentialDiagnosis = $differentialDiagnosis;
        return $this;
    }

    public function getepidemiology()
    {
        return $this->epidemiology;
    }

    public function setepidemiology($epidemiology)
    {
        $this->epidemiology = $epidemiology;
        return $this;
    }

    public function getexpectedPrognosis()
    {
        return $this->expectedPrognosis;
    }

    public function setexpectedPrognosis($expectedPrognosis)
    {
        $this->expectedPrognosis = $expectedPrognosis;
        return $this;
    }

    public function getnaturalProgression()
    {
        return $this->naturalProgression;
    }

    public function setnaturalProgression($naturalProgression)
    {
        $this->naturalProgression = $naturalProgression;
        return $this;
    }

    public function getpathophysiology()
    {
        return $this->pathophysiology;
    }

    public function setpathophysiology($pathophysiology)
    {
        $this->pathophysiology = $pathophysiology;
        return $this;
    }

    public function getpossibleComplication()
    {
        return $this->possibleComplication;
    }

    public function setpossibleComplication($possibleComplication)
    {
        $this->possibleComplication = $possibleComplication;
        return $this;
    }

    public function getpossibleTreatment()
    {
        return $this->possibleTreatment;
    }

    public function setpossibleTreatment($possibleTreatment)
    {
        $this->possibleTreatment = $possibleTreatment;
        return $this;
    }

    public function getprimaryPrevention()
    {
        return $this->primaryPrevention;
    }

    public function setprimaryPrevention($primaryPrevention)
    {
        $this->primaryPrevention = $primaryPrevention;
        return $this;
    }

    public function getriskFactor()
    {
        return $this->riskFactor;
    }

    public function setriskFactor($riskFactor)
    {
        $this->riskFactor = $riskFactor;
        return $this;
    }

    public function getsecondaryPrevention()
    {
        return $this->secondaryPrevention;
    }

    public function setsecondaryPrevention($secondaryPrevention)
    {
        $this->secondaryPrevention = $secondaryPrevention;
        return $this;
    }

    public function getsignOrSymptom()
    {
        return $this->signOrSymptom;
    }

    public function setsignOrSymptom($signOrSymptom)
    {
        $this->signOrSymptom = $signOrSymptom;
        return $this;
    }

    public function getstage()
    {
        return $this->stage;
    }

    public function setstage($stage)
    {
        $this->stage = $stage;
        return $this;
    }

    public function getsubtype()
    {
        return $this->subtype;
    }

    public function setsubtype($subtype)
    {
        $this->subtype = $subtype;
        return $this;
    }

    public function gettypicalTest()
    {
        return $this->typicalTest;
    }

    public function settypicalTest($typicalTest)
    {
        $this->typicalTest = $typicalTest;
        return $this;
    }

}
