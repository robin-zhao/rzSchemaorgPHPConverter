<?php

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

    public function getactiveIngredient()
    {
        return $this->activeIngredient;
    }

    public function setactiveIngredient($activeIngredient)
    {
        $this->activeIngredient = $activeIngredient;
        return $this;
    }

    public function getadministrationRoute()
    {
        return $this->administrationRoute;
    }

    public function setadministrationRoute($administrationRoute)
    {
        $this->administrationRoute = $administrationRoute;
        return $this;
    }

    public function getalcoholWarning()
    {
        return $this->alcoholWarning;
    }

    public function setalcoholWarning($alcoholWarning)
    {
        $this->alcoholWarning = $alcoholWarning;
        return $this;
    }

    public function getavailableStrength()
    {
        return $this->availableStrength;
    }

    public function setavailableStrength($availableStrength)
    {
        $this->availableStrength = $availableStrength;
        return $this;
    }

    public function getbreastfeedingWarning()
    {
        return $this->breastfeedingWarning;
    }

    public function setbreastfeedingWarning($breastfeedingWarning)
    {
        $this->breastfeedingWarning = $breastfeedingWarning;
        return $this;
    }

    public function getclincalPharmacology()
    {
        return $this->clincalPharmacology;
    }

    public function setclincalPharmacology($clincalPharmacology)
    {
        $this->clincalPharmacology = $clincalPharmacology;
        return $this;
    }

    public function getcost()
    {
        return $this->cost;
    }

    public function setcost($cost)
    {
        $this->cost = $cost;
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

    public function getdoseSchedule()
    {
        return $this->doseSchedule;
    }

    public function setdoseSchedule($doseSchedule)
    {
        $this->doseSchedule = $doseSchedule;
        return $this;
    }

    public function getdrugClass()
    {
        return $this->drugClass;
    }

    public function setdrugClass($drugClass)
    {
        $this->drugClass = $drugClass;
        return $this;
    }

    public function getfoodWarning()
    {
        return $this->foodWarning;
    }

    public function setfoodWarning($foodWarning)
    {
        $this->foodWarning = $foodWarning;
        return $this;
    }

    public function getinteractingDrug()
    {
        return $this->interactingDrug;
    }

    public function setinteractingDrug($interactingDrug)
    {
        $this->interactingDrug = $interactingDrug;
        return $this;
    }

    public function getisAvailableGenerically()
    {
        return $this->isAvailableGenerically;
    }

    public function setisAvailableGenerically($isAvailableGenerically)
    {
        $this->isAvailableGenerically = $isAvailableGenerically;
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

    public function getlabelDetails()
    {
        return $this->labelDetails;
    }

    public function setlabelDetails($labelDetails)
    {
        $this->labelDetails = $labelDetails;
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

    public function getoverdosage()
    {
        return $this->overdosage;
    }

    public function setoverdosage($overdosage)
    {
        $this->overdosage = $overdosage;
        return $this;
    }

    public function getpregnancyCategory()
    {
        return $this->pregnancyCategory;
    }

    public function setpregnancyCategory($pregnancyCategory)
    {
        $this->pregnancyCategory = $pregnancyCategory;
        return $this;
    }

    public function getpregnancyWarning()
    {
        return $this->pregnancyWarning;
    }

    public function setpregnancyWarning($pregnancyWarning)
    {
        $this->pregnancyWarning = $pregnancyWarning;
        return $this;
    }

    public function getprescribingInfo()
    {
        return $this->prescribingInfo;
    }

    public function setprescribingInfo($prescribingInfo)
    {
        $this->prescribingInfo = $prescribingInfo;
        return $this;
    }

    public function getprescriptionStatus()
    {
        return $this->prescriptionStatus;
    }

    public function setprescriptionStatus($prescriptionStatus)
    {
        $this->prescriptionStatus = $prescriptionStatus;
        return $this;
    }

    public function getrelatedDrug()
    {
        return $this->relatedDrug;
    }

    public function setrelatedDrug($relatedDrug)
    {
        $this->relatedDrug = $relatedDrug;
        return $this;
    }

    public function getwarning()
    {
        return $this->warning;
    }

    public function setwarning($warning)
    {
        $this->warning = $warning;
        return $this;
    }

}
