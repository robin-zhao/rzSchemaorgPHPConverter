<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity;

use Robinzhao\SchemaOrg\Thing\MedicalEntity;

/**
 * Medical Device
 * http://schema.org/MedicalDevice
 */
class MedicalDevice extends MedicalEntity
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
     * A factor that indicates use of this therapy for treatment and/or prevention of a condition, symptom, etc. For therapies such as drugs, indications can include both officially-approved indications as well as off-label uses. These can be distinguished by using the ApprovedIndication subtype of MedicalIndication.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIndication
     */
    public $indication;

    /**
     * A description of the postoperative procedures, care, and/or followups for this device.
     *
     * @var String
     */
    public $postOp;

    /**
     * A description of the workup, testing, and other preparations required before implanting this device.
     *
     * @var String
     */
    public $preOp;

    /**
     * A description of the procedure involved in setting up, using, and/or installing the device.
     *
     * @var String
     */
    public $procedure;

    /**
     * A goal towards an action is taken. Can be concrete or abstract.
     *
     * @var Robinzhao\SchemaOrg\Thing|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose
     */
    public $purpose;

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
    public $context = "http://schema.org/MedicalDevice";

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
     * @param $indication Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIndication
     */
    public function addIndication($indication)
    {
        $this->indication []= $indication;
        return $this;
    }

    /**
     * @param $postOp String
     */
    public function addPostOp($postOp)
    {
        $this->postOp []= $postOp;
        return $this;
    }

    /**
     * @param $preOp String
     */
    public function addPreOp($preOp)
    {
        $this->preOp []= $preOp;
        return $this;
    }

    /**
     * @param $procedure String
     */
    public function addProcedure($procedure)
    {
        $this->procedure []= $procedure;
        return $this;
    }

    /**
     * @param $purpose Robinzhao\SchemaOrg\Thing|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose
     */
    public function addPurpose($purpose)
    {
        $this->purpose []= $purpose;
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