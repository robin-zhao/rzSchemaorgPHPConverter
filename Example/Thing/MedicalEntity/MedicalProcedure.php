<?php

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
     * @var MedicalProcedureType
     */
    private $procedureType;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalProcedure";

    public function getfollowup()
    {
        return $this->followup;
    }

    public function setfollowup($followup)
    {
        $this->followup = $followup;
        return $this;
    }

    public function gethowPerformed()
    {
        return $this->howPerformed;
    }

    public function sethowPerformed($howPerformed)
    {
        $this->howPerformed = $howPerformed;
        return $this;
    }

    public function getpreparation()
    {
        return $this->preparation;
    }

    public function setpreparation($preparation)
    {
        $this->preparation = $preparation;
        return $this;
    }

    public function getprocedureType()
    {
        return $this->procedureType;
    }

    public function setprocedureType($procedureType)
    {
        $this->procedureType = $procedureType;
        return $this;
    }

}
