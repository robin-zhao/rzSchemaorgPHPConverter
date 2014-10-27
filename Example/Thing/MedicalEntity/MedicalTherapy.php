<?php

namespace Example\Thing\MedicalEntity;

use Example\Thing\MedicalEntity;

/**
 * Medical Therapy
 * http://schema.org/MedicalTherapy
 */
class MedicalTherapy extends MedicalEntity
{

    /**
     * A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or is otherwise life-threatening or requires immediate medical attention), tag it as a seriouseAdverseOutcome instead.
     *
     * @var MedicalEntity
     */
    private $adverseOutcome;

    /**
     * A contraindication for this therapy.
     *
     * @var MedicalContraindication
     */
    private $contraindication;

    /**
     * A therapy that duplicates or overlaps this one.
     *
     * @var MedicalTherapy
     */
    private $duplicateTherapy;

    /**
     * A factor that indicates use of this therapy for treatment and/or prevention of a condition, symptom, etc. For therapies such as drugs, indications can include both officially-approved indications as well as off-label uses. These can be distinguished by using the ApprovedIndication subtype of MedicalIndication.
     *
     * @var MedicalIndication
     */
    private $indication;

    /**
     * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
     *
     * @var MedicalEntity
     */
    private $seriousAdverseOutcome;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalTherapy";

    public function getadverseOutcome()
    {
        return $this->adverseOutcome;
    }

    public function setadverseOutcome($adverseOutcome)
    {
        $this->adverseOutcome = $adverseOutcome;
        return $this;
    }

    public function getcontraindication()
    {
        return $this->contraindication;
    }

    public function setcontraindication($contraindication)
    {
        $this->contraindication = $contraindication;
        return $this;
    }

    public function getduplicateTherapy()
    {
        return $this->duplicateTherapy;
    }

    public function setduplicateTherapy($duplicateTherapy)
    {
        $this->duplicateTherapy = $duplicateTherapy;
        return $this;
    }

    public function getindication()
    {
        return $this->indication;
    }

    public function setindication($indication)
    {
        $this->indication = $indication;
        return $this;
    }

    public function getseriousAdverseOutcome()
    {
        return $this->seriousAdverseOutcome;
    }

    public function setseriousAdverseOutcome($seriousAdverseOutcome)
    {
        $this->seriousAdverseOutcome = $seriousAdverseOutcome;
        return $this;
    }

}
