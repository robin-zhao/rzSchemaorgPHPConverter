<?php

namespace Example\Thing\MedicalEntity;

use Example\Thing\MedicalEntity;

/**
 * Medical Device
 * http://schema.org/MedicalDevice
 */
class MedicalDevice extends MedicalEntity
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
     * A factor that indicates use of this therapy for treatment and/or prevention of a condition, symptom, etc. For therapies such as drugs, indications can include both officially-approved indications as well as off-label uses. These can be distinguished by using the ApprovedIndication subtype of MedicalIndication.
     *
     * @var MedicalIndication
     */
    private $indication;

    /**
     * A description of the postoperative procedures, care, and/or followups for this device.
     *
     * @var String
     */
    private $postOp;

    /**
     * A description of the workup, testing, and other preparations required before implanting this device.
     *
     * @var String
     */
    private $preOp;

    /**
     * A description of the procedure involved in setting up, using, and/or installing the device.
     *
     * @var String
     */
    private $procedure;

    /**
     * A goal towards an action is taken. Can be concrete or abstract.
     *
     * @var Thing|MedicalDevicePurpose
     */
    private $purpose;

    /**
     * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
     *
     * @var MedicalEntity
     */
    private $seriousAdverseOutcome;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalDevice";

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

    public function getindication()
    {
        return $this->indication;
    }

    public function setindication($indication)
    {
        $this->indication = $indication;
        return $this;
    }

    public function getpostOp()
    {
        return $this->postOp;
    }

    public function setpostOp($postOp)
    {
        $this->postOp = $postOp;
        return $this;
    }

    public function getpreOp()
    {
        return $this->preOp;
    }

    public function setpreOp($preOp)
    {
        $this->preOp = $preOp;
        return $this;
    }

    public function getprocedure()
    {
        return $this->procedure;
    }

    public function setprocedure($procedure)
    {
        $this->procedure = $procedure;
        return $this;
    }

    public function getpurpose()
    {
        return $this->purpose;
    }

    public function setpurpose($purpose)
    {
        $this->purpose = $purpose;
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
