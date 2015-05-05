<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity;

use Robinzhao\SchemaOrg\Thing\MedicalEntity;

/**
 * Medical Guideline
 * http://schema.org/MedicalGuideline
 */
class MedicalGuideline extends MedicalEntity
{

    /**
     * Strength of evidence of the data used to formulate the guideline (enumerated).
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalEvidenceLevel
     */
    public $evidenceLevel;

    /**
     * Source of the data used to formulate the guidance, e.g. RCT, consensus opinion, etc.
     *
     * @var String
     */
    public $evidenceOrigin;

    /**
     * Date on which this guideline's recommendation was made.
     *
     * @var DateTime
     */
    public $guidelineDate;

    /**
     * The medical conditions, treatments, etc. that are the subject of the guideline.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity
     */
    public $guidelineSubject;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalGuideline";

    /**
     * @param $evidenceLevel Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalEvidenceLevel
     */
    public function addEvidenceLevel($evidenceLevel)
    {
        $this->evidenceLevel []= $evidenceLevel;
        return $this;
    }

    /**
     * @param $evidenceOrigin String
     */
    public function addEvidenceOrigin($evidenceOrigin)
    {
        $this->evidenceOrigin []= $evidenceOrigin;
        return $this;
    }

    /**
     * @param $guidelineDate DateTime
     */
    public function addGuidelineDate($guidelineDate)
    {
        $this->guidelineDate []= $guidelineDate;
        return $this;
    }

    /**
     * @param $guidelineSubject Robinzhao\SchemaOrg\Thing\MedicalEntity
     */
    public function addGuidelineSubject($guidelineSubject)
    {
        $this->guidelineSubject []= $guidelineSubject;
        return $this;
    }

}
