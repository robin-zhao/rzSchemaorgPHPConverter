<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus
     */
    private $legalStatus;

    /**
     * The manufacturer of the product.
     *
     * @var Example\Thing\Organization
     */
    private $manufacturer;

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule
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
     * @var Example\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\RecommendedDoseSchedule
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

    public function getActiveIngredient()
    {
        return $this->activeIngredient;
    }

    public function setActiveIngredient($activeIngredient)
    {
        $this->activeIngredient = $activeIngredient;
        return $this;
    }

    public function getBackground()
    {
        return $this->background;
    }

    public function setBackground($background)
    {
        $this->background = $background;
        return $this;
    }

    public function getDosageForm()
    {
        return $this->dosageForm;
    }

    public function setDosageForm($dosageForm)
    {
        $this->dosageForm = $dosageForm;
        return $this;
    }

    public function getIsProprietary()
    {
        return $this->isProprietary;
    }

    public function setIsProprietary($isProprietary)
    {
        $this->isProprietary = $isProprietary;
        return $this;
    }

    public function getLegalStatus()
    {
        return $this->legalStatus;
    }

    public function setLegalStatus($legalStatus)
    {
        $this->legalStatus = $legalStatus;
        return $this;
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function getMaximumIntake()
    {
        return $this->maximumIntake;
    }

    public function setMaximumIntake($maximumIntake)
    {
        $this->maximumIntake = $maximumIntake;
        return $this;
    }

    public function getMechanismOfAction()
    {
        return $this->mechanismOfAction;
    }

    public function setMechanismOfAction($mechanismOfAction)
    {
        $this->mechanismOfAction = $mechanismOfAction;
        return $this;
    }

    public function getNonProprietaryName()
    {
        return $this->nonProprietaryName;
    }

    public function setNonProprietaryName($nonProprietaryName)
    {
        $this->nonProprietaryName = $nonProprietaryName;
        return $this;
    }

    public function getRecommendedIntake()
    {
        return $this->recommendedIntake;
    }

    public function setRecommendedIntake($recommendedIntake)
    {
        $this->recommendedIntake = $recommendedIntake;
        return $this;
    }

    public function getSafetyConsideration()
    {
        return $this->safetyConsideration;
    }

    public function setSafetyConsideration($safetyConsideration)
    {
        $this->safetyConsideration = $safetyConsideration;
        return $this;
    }

    public function getTargetPopulation()
    {
        return $this->targetPopulation;
    }

    public function setTargetPopulation($targetPopulation)
    {
        $this->targetPopulation = $targetPopulation;
        return $this;
    }

}
