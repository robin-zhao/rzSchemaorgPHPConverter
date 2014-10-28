<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity;

use Example\Thing\MedicalEntity;

/**
 * Medical Procedure
 * http://schema.org/MedicalProcedure
 */
class MedicalProcedure extends MedicalEntity
{

    /**
     * Typical or recommended followup care after the procedure is performed.
     *
     * @var String
     */
    protected $followup;

    /**
     * How the procedure is performed.
     *
     * @var String
     */
    protected $howPerformed;

    /**
     * Typical preparation that a patient must undergo before having the procedure performed.
     *
     * @var String
     */
    protected $preparation;

    /**
     * The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalProcedureType
     */
    protected $procedureType;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/MedicalProcedure";

    /**
     * @return String
     */
    public function getFollowup()
    {
        return $this->followup;
    }

    /**
     * @param $followup String
     */
    public function setFollowup($followup)
    {
        $this->followup = $followup;
        return $this;
    }

    /**
     * @return String
     */
    public function getHowPerformed()
    {
        return $this->howPerformed;
    }

    /**
     * @param $howPerformed String
     */
    public function setHowPerformed($howPerformed)
    {
        $this->howPerformed = $howPerformed;
        return $this;
    }

    /**
     * @return String
     */
    public function getPreparation()
    {
        return $this->preparation;
    }

    /**
     * @param $preparation String
     */
    public function setPreparation($preparation)
    {
        $this->preparation = $preparation;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalProcedureType
     */
    public function getProcedureType()
    {
        return $this->procedureType;
    }

    /**
     * @param $procedureType Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalProcedureType
     */
    public function setProcedureType($procedureType)
    {
        $this->procedureType = $procedureType;
        return $this;
    }

}
