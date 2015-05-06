<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity;

use Robinzhao\SchemaOrg\Thing\MedicalEntity;

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
    public $followup;

    /**
     * How the procedure is performed.
     *
     * @var String
     */
    public $howPerformed;

    /**
     * Typical preparation that a patient must undergo before having the procedure performed.
     *
     * @var String
     */
    public $preparation;

    /**
     * The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalProcedureType
     */
    public $procedureType;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalProcedure";

    /**
     * @param $followup String
     */
    public function addFollowup($followup)
    {
        $this->followup []= $followup;
        return $this;
    }

    /**
     * @param $howPerformed String
     */
    public function addHowPerformed($howPerformed)
    {
        $this->howPerformed []= $howPerformed;
        return $this;
    }

    /**
     * @param $preparation String
     */
    public function addPreparation($preparation)
    {
        $this->preparation []= $preparation;
        return $this;
    }

    /**
     * @param $procedureType Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalProcedureType
     */
    public function addProcedureType($procedureType)
    {
        $this->procedureType []= $procedureType;
        return $this;
    }


}