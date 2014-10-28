<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity;

use Example\Thing\MedicalEntity;

/**
 * Medical Guideline
 * http://schema.org/MedicalGuideline
 */
class MedicalGuideline extends MedicalEntity
{

    /**
     * Strength of evidence of the data used to formulate the guideline (enumerated).
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalEvidenceLevel
     */
    private $evidenceLevel;

    /**
     * Source of the data used to formulate the guidance, e.g. RCT, consensus opinion, etc.
     *
     * @var String
     */
    private $evidenceOrigin;

    /**
     * Date on which this guideline's recommendation was made.
     *
     * @var DateTime
     */
    private $guidelineDate;

    /**
     * The medical conditions, treatments, etc. that are the subject of the guideline.
     *
     * @var Example\Thing\MedicalEntity
     */
    private $guidelineSubject;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalGuideline";

    public function getEvidenceLevel()
    {
        return $this->evidenceLevel;
    }

    public function setEvidenceLevel($evidenceLevel)
    {
        $this->evidenceLevel = $evidenceLevel;
        return $this;
    }

    public function getEvidenceOrigin()
    {
        return $this->evidenceOrigin;
    }

    public function setEvidenceOrigin($evidenceOrigin)
    {
        $this->evidenceOrigin = $evidenceOrigin;
        return $this;
    }

    public function getGuidelineDate()
    {
        return $this->guidelineDate;
    }

    public function setGuidelineDate($guidelineDate)
    {
        $this->guidelineDate = $guidelineDate;
        return $this;
    }

    public function getGuidelineSubject()
    {
        return $this->guidelineSubject;
    }

    public function setGuidelineSubject($guidelineSubject)
    {
        $this->guidelineSubject = $guidelineSubject;
        return $this;
    }

}
