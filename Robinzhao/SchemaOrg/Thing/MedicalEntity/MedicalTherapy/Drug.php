<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy;

/**
 * Drug
 * http://schema.org/Drug
 */
class Drug extends MedicalTherapy
{

    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     *
     * @var String
     */
    public $activeIngredient;

    /**
     * A route by which this drug may be administered, e.g. 'oral'.
     *
     * @var String
     */
    public $administrationRoute;

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of alcohol while taking this drug.
     *
     * @var String
     */
    public $alcoholWarning;

    /**
     * An available dosage strength for the drug.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugStrength
     */
    public $availableStrength;

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use by breastfeeding mothers.
     *
     * @var String
     */
    public $breastfeedingWarning;

    /**
     * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
     *
     * @var String
     */
    public $clincalPharmacology;

    /**
     * Cost per unit of the drug, as reported by the source being tagged.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugCost
     */
    public $cost;

    /**
     * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
     *
     * @var String
     */
    public $dosageForm;

    /**
     * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule
     */
    public $doseSchedule;

    /**
     * The class of drug this belongs to (e.g., statins).
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\DrugClass
     */
    public $drugClass;

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of specific foods while taking this drug.
     *
     * @var String
     */
    public $foodWarning;

    /**
     * Another drug that is known to interact with this drug in a way that impacts the effect of this drug or causes a risk to the patient. Note: disease interactions are typically captured as contraindications.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    public $interactingDrug;

    /**
     * True if the drug is available in a generic form (regardless of name).
     *
     * @var Boolean
     */
    public $isAvailableGenerically;

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     *
     * @var Boolean
     */
    public $isProprietary;

    /**
     * Link to the drug's label details.
     *
     * @var String
     */
    public $labelDetails;

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
     * Any information related to overdose on a drug, including signs or symptoms, treatments, contact information for emergency response.
     *
     * @var String
     */
    public $overdosage;

    /**
     * Pregnancy category of this drug.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\DrugPregnancyCategory
     */
    public $pregnancyCategory;

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use during pregnancy.
     *
     * @var String
     */
    public $pregnancyWarning;

    /**
     * Link to prescribing information for the drug.
     *
     * @var String
     */
    public $prescribingInfo;

    /**
     * Indicates whether this drug is available by prescription or over-the-counter.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\DrugPrescriptionStatus
     */
    public $prescriptionStatus;

    /**
     * Any other drug related to this one, for example commonly-prescribed alternatives.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    public $relatedDrug;

    /**
     * Any FDA or other warnings about the drug (text or URL).
     *
     * @var String
     */
    public $warning;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Drug";

    /**
     * @param $activeIngredient String
     */
    public function addActiveIngredient($activeIngredient)
    {
        $this->activeIngredient []= $activeIngredient;
        return $this;
    }

    /**
     * @param $administrationRoute String
     */
    public function addAdministrationRoute($administrationRoute)
    {
        $this->administrationRoute []= $administrationRoute;
        return $this;
    }

    /**
     * @param $alcoholWarning String
     */
    public function addAlcoholWarning($alcoholWarning)
    {
        $this->alcoholWarning []= $alcoholWarning;
        return $this;
    }

    /**
     * @param $availableStrength Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugStrength
     */
    public function addAvailableStrength($availableStrength)
    {
        $this->availableStrength []= $availableStrength;
        return $this;
    }

    /**
     * @param $breastfeedingWarning String
     */
    public function addBreastfeedingWarning($breastfeedingWarning)
    {
        $this->breastfeedingWarning []= $breastfeedingWarning;
        return $this;
    }

    /**
     * @param $clincalPharmacology String
     */
    public function addClincalPharmacology($clincalPharmacology)
    {
        $this->clincalPharmacology []= $clincalPharmacology;
        return $this;
    }

    /**
     * @param $cost Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugCost
     */
    public function addCost($cost)
    {
        $this->cost []= $cost;
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
     * @param $doseSchedule Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule
     */
    public function addDoseSchedule($doseSchedule)
    {
        $this->doseSchedule []= $doseSchedule;
        return $this;
    }

    /**
     * @param $drugClass Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\DrugClass
     */
    public function addDrugClass($drugClass)
    {
        $this->drugClass []= $drugClass;
        return $this;
    }

    /**
     * @param $foodWarning String
     */
    public function addFoodWarning($foodWarning)
    {
        $this->foodWarning []= $foodWarning;
        return $this;
    }

    /**
     * @param $interactingDrug Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    public function addInteractingDrug($interactingDrug)
    {
        $this->interactingDrug []= $interactingDrug;
        return $this;
    }

    /**
     * @param $isAvailableGenerically Boolean
     */
    public function addIsAvailableGenerically($isAvailableGenerically)
    {
        $this->isAvailableGenerically []= $isAvailableGenerically;
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
     * @param $labelDetails String
     */
    public function addLabelDetails($labelDetails)
    {
        $this->labelDetails []= $labelDetails;
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
     * @param $overdosage String
     */
    public function addOverdosage($overdosage)
    {
        $this->overdosage []= $overdosage;
        return $this;
    }

    /**
     * @param $pregnancyCategory Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\DrugPregnancyCategory
     */
    public function addPregnancyCategory($pregnancyCategory)
    {
        $this->pregnancyCategory []= $pregnancyCategory;
        return $this;
    }

    /**
     * @param $pregnancyWarning String
     */
    public function addPregnancyWarning($pregnancyWarning)
    {
        $this->pregnancyWarning []= $pregnancyWarning;
        return $this;
    }

    /**
     * @param $prescribingInfo String
     */
    public function addPrescribingInfo($prescribingInfo)
    {
        $this->prescribingInfo []= $prescribingInfo;
        return $this;
    }

    /**
     * @param $prescriptionStatus Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\DrugPrescriptionStatus
     */
    public function addPrescriptionStatus($prescriptionStatus)
    {
        $this->prescriptionStatus []= $prescriptionStatus;
        return $this;
    }

    /**
     * @param $relatedDrug Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    public function addRelatedDrug($relatedDrug)
    {
        $this->relatedDrug []= $relatedDrug;
        return $this;
    }

    /**
     * @param $warning String
     */
    public function addWarning($warning)
    {
        $this->warning []= $warning;
        return $this;
    }

}
