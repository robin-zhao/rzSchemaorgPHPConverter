<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity\MedicalTherapy;

use Example\Thing\MedicalEntity\MedicalTherapy;

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
    private $activeIngredient;

    /**
     * A route by which this drug may be administered, e.g. 'oral'.
     *
     * @var String
     */
    private $administrationRoute;

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of alcohol while taking this drug.
     *
     * @var String
     */
    private $alcoholWarning;

    /**
     * An available dosage strength for the drug.
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\DrugStrength
     */
    private $availableStrength;

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use by breastfeeding mothers.
     *
     * @var String
     */
    private $breastfeedingWarning;

    /**
     * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
     *
     * @var String
     */
    private $clincalPharmacology;

    /**
     * Cost per unit of the drug, as reported by the source being tagged.
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\DrugCost
     */
    private $cost;

    /**
     * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
     *
     * @var String
     */
    private $dosageForm;

    /**
     * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\DoseSchedule
     */
    private $doseSchedule;

    /**
     * The class of drug this belongs to (e.g., statins).
     *
     * @var Example\Thing\MedicalEntity\MedicalTherapy\DrugClass
     */
    private $drugClass;

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of specific foods while taking this drug.
     *
     * @var String
     */
    private $foodWarning;

    /**
     * Another drug that is known to interact with this drug in a way that impacts the effect of this drug or causes a risk to the patient. Note: disease interactions are typically captured as contraindications.
     *
     * @var Example\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    private $interactingDrug;

    /**
     * True if the drug is available in a generic form (regardless of name).
     *
     * @var Boolean
     */
    private $isAvailableGenerically;

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     *
     * @var Boolean
     */
    private $isProprietary;

    /**
     * Link to the drug's label details.
     *
     * @var String
     */
    private $labelDetails;

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
     * Any information related to overdose on a drug, including signs or symptoms, treatments, contact information for emergency response.
     *
     * @var String
     */
    private $overdosage;

    /**
     * Pregnancy category of this drug.
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\DrugPregnancyCategory
     */
    private $pregnancyCategory;

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use during pregnancy.
     *
     * @var String
     */
    private $pregnancyWarning;

    /**
     * Link to prescribing information for the drug.
     *
     * @var String
     */
    private $prescribingInfo;

    /**
     * Indicates whether this drug is available by prescription or over-the-counter.
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\DrugPrescriptionStatus
     */
    private $prescriptionStatus;

    /**
     * Any other drug related to this one, for example commonly-prescribed alternatives.
     *
     * @var Example\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    private $relatedDrug;

    /**
     * Any FDA or other warnings about the drug (text or URL).
     *
     * @var String|String
     */
    private $warning;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Drug";

    public function getActiveIngredient()
    {
        return $this->activeIngredient;
    }

    public function setActiveIngredient($activeIngredient)
    {
        $this->activeIngredient = $activeIngredient;
        return $this;
    }

    public function getAdministrationRoute()
    {
        return $this->administrationRoute;
    }

    public function setAdministrationRoute($administrationRoute)
    {
        $this->administrationRoute = $administrationRoute;
        return $this;
    }

    public function getAlcoholWarning()
    {
        return $this->alcoholWarning;
    }

    public function setAlcoholWarning($alcoholWarning)
    {
        $this->alcoholWarning = $alcoholWarning;
        return $this;
    }

    public function getAvailableStrength()
    {
        return $this->availableStrength;
    }

    public function setAvailableStrength($availableStrength)
    {
        $this->availableStrength = $availableStrength;
        return $this;
    }

    public function getBreastfeedingWarning()
    {
        return $this->breastfeedingWarning;
    }

    public function setBreastfeedingWarning($breastfeedingWarning)
    {
        $this->breastfeedingWarning = $breastfeedingWarning;
        return $this;
    }

    public function getClincalPharmacology()
    {
        return $this->clincalPharmacology;
    }

    public function setClincalPharmacology($clincalPharmacology)
    {
        $this->clincalPharmacology = $clincalPharmacology;
        return $this;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function setCost($cost)
    {
        $this->cost = $cost;
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

    public function getDoseSchedule()
    {
        return $this->doseSchedule;
    }

    public function setDoseSchedule($doseSchedule)
    {
        $this->doseSchedule = $doseSchedule;
        return $this;
    }

    public function getDrugClass()
    {
        return $this->drugClass;
    }

    public function setDrugClass($drugClass)
    {
        $this->drugClass = $drugClass;
        return $this;
    }

    public function getFoodWarning()
    {
        return $this->foodWarning;
    }

    public function setFoodWarning($foodWarning)
    {
        $this->foodWarning = $foodWarning;
        return $this;
    }

    public function getInteractingDrug()
    {
        return $this->interactingDrug;
    }

    public function setInteractingDrug($interactingDrug)
    {
        $this->interactingDrug = $interactingDrug;
        return $this;
    }

    public function getIsAvailableGenerically()
    {
        return $this->isAvailableGenerically;
    }

    public function setIsAvailableGenerically($isAvailableGenerically)
    {
        $this->isAvailableGenerically = $isAvailableGenerically;
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

    public function getLabelDetails()
    {
        return $this->labelDetails;
    }

    public function setLabelDetails($labelDetails)
    {
        $this->labelDetails = $labelDetails;
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

    public function getOverdosage()
    {
        return $this->overdosage;
    }

    public function setOverdosage($overdosage)
    {
        $this->overdosage = $overdosage;
        return $this;
    }

    public function getPregnancyCategory()
    {
        return $this->pregnancyCategory;
    }

    public function setPregnancyCategory($pregnancyCategory)
    {
        $this->pregnancyCategory = $pregnancyCategory;
        return $this;
    }

    public function getPregnancyWarning()
    {
        return $this->pregnancyWarning;
    }

    public function setPregnancyWarning($pregnancyWarning)
    {
        $this->pregnancyWarning = $pregnancyWarning;
        return $this;
    }

    public function getPrescribingInfo()
    {
        return $this->prescribingInfo;
    }

    public function setPrescribingInfo($prescribingInfo)
    {
        $this->prescribingInfo = $prescribingInfo;
        return $this;
    }

    public function getPrescriptionStatus()
    {
        return $this->prescriptionStatus;
    }

    public function setPrescriptionStatus($prescriptionStatus)
    {
        $this->prescriptionStatus = $prescriptionStatus;
        return $this;
    }

    public function getRelatedDrug()
    {
        return $this->relatedDrug;
    }

    public function setRelatedDrug($relatedDrug)
    {
        $this->relatedDrug = $relatedDrug;
        return $this;
    }

    public function getWarning()
    {
        return $this->warning;
    }

    public function setWarning($warning)
    {
        $this->warning = $warning;
        return $this;
    }

}
