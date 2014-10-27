<?php

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
     * @var MedicalEvidenceLevel
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
     * @var MedicalEntity
     */
    private $guidelineSubject;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalGuideline";

    public function getevidenceLevel()
    {
        return $this->evidenceLevel;
    }

    public function setevidenceLevel($evidenceLevel)
    {
        $this->evidenceLevel = $evidenceLevel;
        return $this;
    }

    public function getevidenceOrigin()
    {
        return $this->evidenceOrigin;
    }

    public function setevidenceOrigin($evidenceOrigin)
    {
        $this->evidenceOrigin = $evidenceOrigin;
        return $this;
    }

    public function getguidelineDate()
    {
        return $this->guidelineDate;
    }

    public function setguidelineDate($guidelineDate)
    {
        $this->guidelineDate = $guidelineDate;
        return $this;
    }

    public function getguidelineSubject()
    {
        return $this->guidelineSubject;
    }

    public function setguidelineSubject($guidelineSubject)
    {
        $this->guidelineSubject = $guidelineSubject;
        return $this;
    }

}
