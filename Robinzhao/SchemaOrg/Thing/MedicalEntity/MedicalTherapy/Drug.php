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
    protected $activeIngredient;

    /**
     * A route by which this drug may be administered, e.g. 'oral'.
     *
     * @var String
     */
    protected $administrationRoute;

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of alcohol while taking this drug.
     *
     * @var String
     */
    protected $alcoholWarning;

    /**
     * An available dosage strength for the drug.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugStrength
     */
    protected $availableStrength;

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use by breastfeeding mothers.
     *
     * @var String
     */
    protected $breastfeedingWarning;

    /**
     * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
     *
     * @var String
     */
    protected $clincalPharmacology;

    /**
     * Cost per unit of the drug, as reported by the source being tagged.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugCost
     */
    protected $cost;

    /**
     * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
     *
     * @var String
     */
    protected $dosageForm;

    /**
     * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule
     */
    protected $doseSchedule;

    /**
     * The class of drug this belongs to (e.g., statins).
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\DrugClass
     */
    protected $drugClass;

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of specific foods while taking this drug.
     *
     * @var String
     */
    protected $foodWarning;

    /**
     * Another drug that is known to interact with this drug in a way that impacts the effect of this drug or causes a risk to the patient. Note: disease interactions are typically captured as contraindications.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    protected $interactingDrug;

    /**
     * True if the drug is available in a generic form (regardless of name).
     *
     * @var Boolean
     */
    protected $isAvailableGenerically;

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     *
     * @var Boolean
     */
    protected $isProprietary;

    /**
     * Link to the drug's label details.
     *
     * @var String
     */
    protected $labelDetails;

    /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus
     */
    protected $legalStatus;

    /**
     * The manufacturer of the product.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    protected $manufacturer;

    /**
     * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
     *
     * @var String
     */
    protected $mechanismOfAction;

    /**
     * The generic name of this drug or supplement.
     *
     * @var String
     */
    protected $nonProprietaryName;

    /**
     * Any information related to overdose on a drug, including signs or symptoms, treatments, contact information for emergency response.
     *
     * @var String
     */
    protected $overdosage;

    /**
     * Pregnancy category of this drug.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\DrugPregnancyCategory
     */
    protected $pregnancyCategory;

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use during pregnancy.
     *
     * @var String
     */
    protected $pregnancyWarning;

    /**
     * Link to prescribing information for the drug.
     *
     * @var String
     */
    protected $prescribingInfo;

    /**
     * Indicates whether this drug is available by prescription or over-the-counter.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\DrugPrescriptionStatus
     */
    protected $prescriptionStatus;

    /**
     * Any other drug related to this one, for example commonly-prescribed alternatives.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    protected $relatedDrug;

    /**
     * Any FDA or other warnings about the drug (text or URL).
     *
     * @var String
     */
    protected $warning;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Drug";

    /**
     * @return String
     */
    public function getActiveIngredient()
    {
        return $this->activeIngredient;
    }

    /**
     * @param $activeIngredient String
     */
    public function setActiveIngredient($activeIngredient)
    {
        $this->activeIngredient = $activeIngredient;
        return $this;
    }

    /**
     * @return String
     */
    public function getAdministrationRoute()
    {
        return $this->administrationRoute;
    }

    /**
     * @param $administrationRoute String
     */
    public function setAdministrationRoute($administrationRoute)
    {
        $this->administrationRoute = $administrationRoute;
        return $this;
    }

    /**
     * @return String
     */
    public function getAlcoholWarning()
    {
        return $this->alcoholWarning;
    }

    /**
     * @param $alcoholWarning String
     */
    public function setAlcoholWarning($alcoholWarning)
    {
        $this->alcoholWarning = $alcoholWarning;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugStrength
     */
    public function getAvailableStrength()
    {
        return $this->availableStrength;
    }

    /**
     * @param $availableStrength Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugStrength
     */
    public function setAvailableStrength($availableStrength)
    {
        $this->availableStrength = $availableStrength;
        return $this;
    }

    /**
     * @return String
     */
    public function getBreastfeedingWarning()
    {
        return $this->breastfeedingWarning;
    }

    /**
     * @param $breastfeedingWarning String
     */
    public function setBreastfeedingWarning($breastfeedingWarning)
    {
        $this->breastfeedingWarning = $breastfeedingWarning;
        return $this;
    }

    /**
     * @return String
     */
    public function getClincalPharmacology()
    {
        return $this->clincalPharmacology;
    }

    /**
     * @param $clincalPharmacology String
     */
    public function setClincalPharmacology($clincalPharmacology)
    {
        $this->clincalPharmacology = $clincalPharmacology;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugCost
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param $cost Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugCost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return String
     */
    public function getDosageForm()
    {
        return $this->dosageForm;
    }

    /**
     * @param $dosageForm String
     */
    public function setDosageForm($dosageForm)
    {
        $this->dosageForm = $dosageForm;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule
     */
    public function getDoseSchedule()
    {
        return $this->doseSchedule;
    }

    /**
     * @param $doseSchedule Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule
     */
    public function setDoseSchedule($doseSchedule)
    {
        $this->doseSchedule = $doseSchedule;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\DrugClass
     */
    public function getDrugClass()
    {
        return $this->drugClass;
    }

    /**
     * @param $drugClass Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\DrugClass
     */
    public function setDrugClass($drugClass)
    {
        $this->drugClass = $drugClass;
        return $this;
    }

    /**
     * @return String
     */
    public function getFoodWarning()
    {
        return $this->foodWarning;
    }

    /**
     * @param $foodWarning String
     */
    public function setFoodWarning($foodWarning)
    {
        $this->foodWarning = $foodWarning;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    public function getInteractingDrug()
    {
        return $this->interactingDrug;
    }

    /**
     * @param $interactingDrug Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    public function setInteractingDrug($interactingDrug)
    {
        $this->interactingDrug = $interactingDrug;
        return $this;
    }

    /**
     * @return Boolean
     */
    public function getIsAvailableGenerically()
    {
        return $this->isAvailableGenerically;
    }

    /**
     * @param $isAvailableGenerically Boolean
     */
    public function setIsAvailableGenerically($isAvailableGenerically)
    {
        $this->isAvailableGenerically = $isAvailableGenerically;
        return $this;
    }

    /**
     * @return Boolean
     */
    public function getIsProprietary()
    {
        return $this->isProprietary;
    }

    /**
     * @param $isProprietary Boolean
     */
    public function setIsProprietary($isProprietary)
    {
        $this->isProprietary = $isProprietary;
        return $this;
    }

    /**
     * @return String
     */
    public function getLabelDetails()
    {
        return $this->labelDetails;
    }

    /**
     * @param $labelDetails String
     */
    public function setLabelDetails($labelDetails)
    {
        $this->labelDetails = $labelDetails;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus
     */
    public function getLegalStatus()
    {
        return $this->legalStatus;
    }

    /**
     * @param $legalStatus Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus
     */
    public function setLegalStatus($legalStatus)
    {
        $this->legalStatus = $legalStatus;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param $manufacturer Robinzhao\SchemaOrg\Thing\Organization
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * @return String
     */
    public function getMechanismOfAction()
    {
        return $this->mechanismOfAction;
    }

    /**
     * @param $mechanismOfAction String
     */
    public function setMechanismOfAction($mechanismOfAction)
    {
        $this->mechanismOfAction = $mechanismOfAction;
        return $this;
    }

    /**
     * @return String
     */
    public function getNonProprietaryName()
    {
        return $this->nonProprietaryName;
    }

    /**
     * @param $nonProprietaryName String
     */
    public function setNonProprietaryName($nonProprietaryName)
    {
        $this->nonProprietaryName = $nonProprietaryName;
        return $this;
    }

    /**
     * @return String
     */
    public function getOverdosage()
    {
        return $this->overdosage;
    }

    /**
     * @param $overdosage String
     */
    public function setOverdosage($overdosage)
    {
        $this->overdosage = $overdosage;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\DrugPregnancyCategory
     */
    public function getPregnancyCategory()
    {
        return $this->pregnancyCategory;
    }

    /**
     * @param $pregnancyCategory Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\DrugPregnancyCategory
     */
    public function setPregnancyCategory($pregnancyCategory)
    {
        $this->pregnancyCategory = $pregnancyCategory;
        return $this;
    }

    /**
     * @return String
     */
    public function getPregnancyWarning()
    {
        return $this->pregnancyWarning;
    }

    /**
     * @param $pregnancyWarning String
     */
    public function setPregnancyWarning($pregnancyWarning)
    {
        $this->pregnancyWarning = $pregnancyWarning;
        return $this;
    }

    /**
     * @return String
     */
    public function getPrescribingInfo()
    {
        return $this->prescribingInfo;
    }

    /**
     * @param $prescribingInfo String
     */
    public function setPrescribingInfo($prescribingInfo)
    {
        $this->prescribingInfo = $prescribingInfo;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\DrugPrescriptionStatus
     */
    public function getPrescriptionStatus()
    {
        return $this->prescriptionStatus;
    }

    /**
     * @param $prescriptionStatus Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\DrugPrescriptionStatus
     */
    public function setPrescriptionStatus($prescriptionStatus)
    {
        $this->prescriptionStatus = $prescriptionStatus;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    public function getRelatedDrug()
    {
        return $this->relatedDrug;
    }

    /**
     * @param $relatedDrug Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    public function setRelatedDrug($relatedDrug)
    {
        $this->relatedDrug = $relatedDrug;
        return $this;
    }

    /**
     * @return String
     */
    public function getWarning()
    {
        return $this->warning;
    }

    /**
     * @param $warning String
     */
    public function setWarning($warning)
    {
        $this->warning = $warning;
        return $this;
    }

}
