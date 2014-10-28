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
    private $followup;

    /**
     * How the procedure is performed.
     *
     * @var String
     */
    private $howPerformed;

    /**
     * Typical preparation that a patient must undergo before having the procedure performed.
     *
     * @var String
     */
    private $preparation;

    /**
     * The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalProcedureType
     */
    private $procedureType;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalProcedure";

    public function getFollowup()
    {
        return $this->followup;
    }

    public function setFollowup($followup)
    {
        $this->followup = $followup;
        return $this;
    }

    public function getHowPerformed()
    {
        return $this->howPerformed;
    }

    public function setHowPerformed($howPerformed)
    {
        $this->howPerformed = $howPerformed;
        return $this;
    }

    public function getPreparation()
    {
        return $this->preparation;
    }

    public function setPreparation($preparation)
    {
        $this->preparation = $preparation;
        return $this;
    }

    public function getProcedureType()
    {
        return $this->procedureType;
    }

    public function setProcedureType($procedureType)
    {
        $this->procedureType = $procedureType;
        return $this;
    }

}
