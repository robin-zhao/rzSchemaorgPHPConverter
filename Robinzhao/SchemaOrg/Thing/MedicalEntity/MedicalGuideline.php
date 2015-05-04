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
    protected $evidenceLevel;

    /**
     * Source of the data used to formulate the guidance, e.g. RCT, consensus opinion, etc.
     *
     * @var String
     */
    protected $evidenceOrigin;

    /**
     * Date on which this guideline's recommendation was made.
     *
     * @var DateTime
     */
    protected $guidelineDate;

    /**
     * The medical conditions, treatments, etc. that are the subject of the guideline.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity
     */
    protected $guidelineSubject;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/MedicalGuideline";

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalEvidenceLevel
     */
    public function getEvidenceLevel()
    {
        return $this->evidenceLevel;
    }

    /**
     * @param $evidenceLevel Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalEvidenceLevel
     */
    public function setEvidenceLevel($evidenceLevel)
    {
        $this->evidenceLevel = $evidenceLevel;
        return $this;
    }

    /**
     * @return String
     */
    public function getEvidenceOrigin()
    {
        return $this->evidenceOrigin;
    }

    /**
     * @param $evidenceOrigin String
     */
    public function setEvidenceOrigin($evidenceOrigin)
    {
        $this->evidenceOrigin = $evidenceOrigin;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getGuidelineDate()
    {
        return $this->guidelineDate;
    }

    /**
     * @param $guidelineDate DateTime
     */
    public function setGuidelineDate($guidelineDate)
    {
        $this->guidelineDate = $guidelineDate;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity
     */
    public function getGuidelineSubject()
    {
        return $this->guidelineSubject;
    }

    /**
     * @param $guidelineSubject Robinzhao\SchemaOrg\Thing\MedicalEntity
     */
    public function setGuidelineSubject($guidelineSubject)
    {
        $this->guidelineSubject = $guidelineSubject;
        return $this;
    }

}
