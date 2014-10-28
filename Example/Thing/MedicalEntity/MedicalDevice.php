<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing\MedicalEntity
     */
    private $adverseOutcome;

    /**
     * A contraindication for this therapy.
     *
     * @var Example\Thing\MedicalEntity\MedicalContraindication
     */
    private $contraindication;

    /**
     * A factor that indicates use of this therapy for treatment and/or prevention of a condition, symptom, etc. For therapies such as drugs, indications can include both officially-approved indications as well as off-label uses. These can be distinguished by using the ApprovedIndication subtype of MedicalIndication.
     *
     * @var Example\Thing\MedicalEntity\MedicalIndication
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
     * @var Example\Thing|Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose
     */
    private $purpose;

    /**
     * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
     *
     * @var Example\Thing\MedicalEntity
     */
    private $seriousAdverseOutcome;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalDevice";

    /**
     * @return Example\Thing\MedicalEntity
     */
    public function getAdverseOutcome()
    {
        return $this->adverseOutcome;
    }

    /**
     * @param $adverseOutcome Example\Thing\MedicalEntity
     */
    public function setAdverseOutcome($adverseOutcome)
    {
        $this->adverseOutcome = $adverseOutcome;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalContraindication
     */
    public function getContraindication()
    {
        return $this->contraindication;
    }

    /**
     * @param $contraindication Example\Thing\MedicalEntity\MedicalContraindication
     */
    public function setContraindication($contraindication)
    {
        $this->contraindication = $contraindication;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalIndication
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * @param $indication Example\Thing\MedicalEntity\MedicalIndication
     */
    public function setIndication($indication)
    {
        $this->indication = $indication;
        return $this;
    }

    /**
     * @return String
     */
    public function getPostOp()
    {
        return $this->postOp;
    }

    /**
     * @param $postOp String
     */
    public function setPostOp($postOp)
    {
        $this->postOp = $postOp;
        return $this;
    }

    /**
     * @return String
     */
    public function getPreOp()
    {
        return $this->preOp;
    }

    /**
     * @param $preOp String
     */
    public function setPreOp($preOp)
    {
        $this->preOp = $preOp;
        return $this;
    }

    /**
     * @return String
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * @param $procedure String
     */
    public function setProcedure($procedure)
    {
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * @return Example\Thing|Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * @param $purpose Example\Thing|Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity
     */
    public function getSeriousAdverseOutcome()
    {
        return $this->seriousAdverseOutcome;
    }

    /**
     * @param $seriousAdverseOutcome Example\Thing\MedicalEntity
     */
    public function setSeriousAdverseOutcome($seriousAdverseOutcome)
    {
        $this->seriousAdverseOutcome = $seriousAdverseOutcome;
        return $this;
    }

}
