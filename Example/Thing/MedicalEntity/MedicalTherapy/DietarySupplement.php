<?php

namespace Example\Thing\MedicalEntity\MedicalTherapy;

use Example\Thing\MedicalEntity\MedicalTherapy;

/**
 * Dietary Supplement
 * http://schema.org/DietarySupplement
 */
class DietarySupplement extends MedicalTherapy
{

    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     *
     * @var String
     */
    private $activeIngredient;

    /**
     * Descriptive information establishing a historical perspective on the supplement. May include the rationale for the name, the population where the supplement first came to prominence, etc.
     *
     * @var String
     */
    private $background;

    /**
     * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
     *
     * @var String
     */
    private $dosageForm;

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     *
     * @var Boolean
     */
    private $isProprietary;

    /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     *
     * @var DrugLegalStatus
     */
    private $legalStatus;

    /**
     * The manufacturer of the product.
     *
     * @var Organization
     */
    private $manufacturer;

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     *
     * @var MaximumDoseSchedule
     */
    private $maximumIntake;

    /**
     * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
     *
     * @var String
     */
    private $mechanismOfAction;

    /**
     * The generic name of this drug or supplement.
     *
     * @var String
     */
    private $nonProprietaryName;

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     *
     * @var RecommendedDoseSchedule
     */
    private $recommendedIntake;

    /**
     * Any potential safety concern associated with the supplement. May include interactions with other drugs and foods, pregnancy, breastfeeding, known adverse reactions, and documented efficacy of the supplement.
     *
     * @var String
     */
    private $safetyConsideration;

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     *
     * @var String
     */
    private $targetPopulation;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/DietarySupplement";

    public function getactiveIngredient()
    {
        return $this->activeIngredient;
    }

    public function setactiveIngredient($activeIngredient)
    {
        $this->activeIngredient = $activeIngredient;
        return $this;
    }

    public function getbackground()
    {
        return $this->background;
    }

    public function setbackground($background)
    {
        $this->background = $background;
        return $this;
    }

    public function getdosageForm()
    {
        return $this->dosageForm;
    }

    public function setdosageForm($dosageForm)
    {
        $this->dosageForm = $dosageForm;
        return $this;
    }

    public function getisProprietary()
    {
        return $this->isProprietary;
    }

    public function setisProprietary($isProprietary)
    {
        $this->isProprietary = $isProprietary;
        return $this;
    }

    public function getlegalStatus()
    {
        return $this->legalStatus;
    }

    public function setlegalStatus($legalStatus)
    {
        $this->legalStatus = $legalStatus;
        return $this;
    }

    public function getmanufacturer()
    {
        return $this->manufacturer;
    }

    public function setmanufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function getmaximumIntake()
    {
        return $this->maximumIntake;
    }

    public function setmaximumIntake($maximumIntake)
    {
        $this->maximumIntake = $maximumIntake;
        return $this;
    }

    public function getmechanismOfAction()
    {
        return $this->mechanismOfAction;
    }

    public function setmechanismOfAction($mechanismOfAction)
    {
        $this->mechanismOfAction = $mechanismOfAction;
        return $this;
    }

    public function getnonProprietaryName()
    {
        return $this->nonProprietaryName;
    }

    public function setnonProprietaryName($nonProprietaryName)
    {
        $this->nonProprietaryName = $nonProprietaryName;
        return $this;
    }

    public function getrecommendedIntake()
    {
        return $this->recommendedIntake;
    }

    public function setrecommendedIntake($recommendedIntake)
    {
        $this->recommendedIntake = $recommendedIntake;
        return $this;
    }

    public function getsafetyConsideration()
    {
        return $this->safetyConsideration;
    }

    public function setsafetyConsideration($safetyConsideration)
    {
        $this->safetyConsideration = $safetyConsideration;
        return $this;
    }

    public function gettargetPopulation()
    {
        return $this->targetPopulation;
    }

    public function settargetPopulation($targetPopulation)
    {
        $this->targetPopulation = $targetPopulation;
        return $this;
    }

}
