<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy;

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
    public $activeIngredient;

    /**
     * Descriptive information establishing a historical perspective on the supplement. May include the rationale for the name, the population where the supplement first came to prominence, etc.
     *
     * @var String
     */
    public $background;

    /**
     * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
     *
     * @var String
     */
    public $dosageForm;

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     *
     * @var Boolean
     */
    public $isProprietary;

    /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus
     */
    public $legalStatus;

    /**
     * The manufacturer of the product.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    public $manufacturer;

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule
     */
    public $maximumIntake;

    /**
     * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
     *
     * @var String
     */
    public $mechanismOfAction;

    /**
     * The generic name of this drug or supplement.
     *
     * @var String
     */
    public $nonProprietaryName;

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\RecommendedDoseSchedule
     */
    public $recommendedIntake;

    /**
     * Any potential safety concern associated with the supplement. May include interactions with other drugs and foods, pregnancy, breastfeeding, known adverse reactions, and documented efficacy of the supplement.
     *
     * @var String
     */
    public $safetyConsideration;

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     *
     * @var String
     */
    public $targetPopulation;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/DietarySupplement";

    /**
     * @param $activeIngredient String
     */
    public function addActiveIngredient($activeIngredient)
    {
        $this->activeIngredient []= $activeIngredient;
        return $this;
    }

    /**
     * @param $background String
     */
    public function addBackground($background)
    {
        $this->background []= $background;
        return $this;
    }

    /**
     * @param $dosageForm String
     */
    public function addDosageForm($dosageForm)
    {
        $this->dosageForm []= $dosageForm;
        return $this;
    }

    /**
     * @param $isProprietary Boolean
     */
    public function addIsProprietary($isProprietary)
    {
        $this->isProprietary []= $isProprietary;
        return $this;
    }

    /**
     * @param $legalStatus Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus
     */
    public function addLegalStatus($legalStatus)
    {
        $this->legalStatus []= $legalStatus;
        return $this;
    }

    /**
     * @param $manufacturer Robinzhao\SchemaOrg\Thing\Organization
     */
    public function addManufacturer($manufacturer)
    {
        $this->manufacturer []= $manufacturer;
        return $this;
    }

    /**
     * @param $maximumIntake Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule
     */
    public function addMaximumIntake($maximumIntake)
    {
        $this->maximumIntake []= $maximumIntake;
        return $this;
    }

    /**
     * @param $mechanismOfAction String
     */
    public function addMechanismOfAction($mechanismOfAction)
    {
        $this->mechanismOfAction []= $mechanismOfAction;
        return $this;
    }

    /**
     * @param $nonProprietaryName String
     */
    public function addNonProprietaryName($nonProprietaryName)
    {
        $this->nonProprietaryName []= $nonProprietaryName;
        return $this;
    }

    /**
     * @param $recommendedIntake Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\RecommendedDoseSchedule
     */
    public function addRecommendedIntake($recommendedIntake)
    {
        $this->recommendedIntake []= $recommendedIntake;
        return $this;
    }

    /**
     * @param $safetyConsideration String
     */
    public function addSafetyConsideration($safetyConsideration)
    {
        $this->safetyConsideration []= $safetyConsideration;
        return $this;
    }

    /**
     * @param $targetPopulation String
     */
    public function addTargetPopulation($targetPopulation)
    {
        $this->targetPopulation []= $targetPopulation;
        return $this;
    }


}