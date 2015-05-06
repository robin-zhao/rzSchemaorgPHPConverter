<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity;

use Robinzhao\SchemaOrg\Thing\MedicalEntity;

/**
 * Medical Therapy
 * http://schema.org/MedicalTherapy
 */
class MedicalTherapy extends MedicalEntity
{

    /**
     * A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or is otherwise life-threatening or requires immediate medical attention), tag it as a seriouseAdverseOutcome instead.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity
     */
    public $adverseOutcome;

    /**
     * A contraindication for this therapy.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalContraindication
     */
    public $contraindication;

    /**
     * A therapy that duplicates or overlaps this one.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public $duplicateTherapy;

    /**
     * A factor that indicates use of this therapy for treatment and/or prevention of a condition, symptom, etc. For therapies such as drugs, indications can include both officially-approved indications as well as off-label uses. These can be distinguished by using the ApprovedIndication subtype of MedicalIndication.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIndication
     */
    public $indication;

    /**
     * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity
     */
    public $seriousAdverseOutcome;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalTherapy";

    /**
     * @param $adverseOutcome Robinzhao\SchemaOrg\Thing\MedicalEntity
     */
    public function addAdverseOutcome($adverseOutcome)
    {
        $this->adverseOutcome []= $adverseOutcome;
        return $this;
    }

    /**
     * @param $contraindication Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalContraindication
     */
    public function addContraindication($contraindication)
    {
        $this->contraindication []= $contraindication;
        return $this;
    }

    /**
     * @param $duplicateTherapy Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public function addDuplicateTherapy($duplicateTherapy)
    {
        $this->duplicateTherapy []= $duplicateTherapy;
        return $this;
    }

    /**
     * @param $indication Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIndication
     */
    public function addIndication($indication)
    {
        $this->indication []= $indication;
        return $this;
    }

    /**
     * @param $seriousAdverseOutcome Robinzhao\SchemaOrg\Thing\MedicalEntity
     */
    public function addSeriousAdverseOutcome($seriousAdverseOutcome)
    {
        $this->seriousAdverseOutcome []= $seriousAdverseOutcome;
        return $this;
    }


}