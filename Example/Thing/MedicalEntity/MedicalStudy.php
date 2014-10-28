<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity;

use Example\Thing\MedicalEntity;

/**
 * Medical Study
 * http://schema.org/MedicalStudy
 */
class MedicalStudy extends MedicalEntity
{

    /**
     * Expected or actual outcomes of the study.
     *
     * @var String
     */
    private $outcome;

    /**
     * Any characteristics of the population used in the study, e.g. 'males under 65'.
     *
     * @var String
     */
    private $population;

    /**
     * Sponsor of the study.
     *
     * @var Example\Thing\Organization
     */
    private $sponsor;

    /**
     * The status of the study (enumerated).
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalStudyStatus
     */
    private $status;

    /**
     * The location in which the study is taking/took place.
     *
     * @var Example\Thing\Place\AdministrativeArea
     */
    private $studyLocation;

    /**
     * A subject of the study, i.e. one of the medical conditions, therapies, devices, drugs, etc. investigated by the study.
     *
     * @var Example\Thing\MedicalEntity
     */
    private $studySubject;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalStudy";

    public function getoutcome()
    {
        return $this->outcome;
    }

    public function setoutcome($outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    public function getpopulation()
    {
        return $this->population;
    }

    public function setpopulation($population)
    {
        $this->population = $population;
        return $this;
    }

    public function getsponsor()
    {
        return $this->sponsor;
    }

    public function setsponsor($sponsor)
    {
        $this->sponsor = $sponsor;
        return $this;
    }

    public function getstatus()
    {
        return $this->status;
    }

    public function setstatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function getstudyLocation()
    {
        return $this->studyLocation;
    }

    public function setstudyLocation($studyLocation)
    {
        $this->studyLocation = $studyLocation;
        return $this;
    }

    public function getstudySubject()
    {
        return $this->studySubject;
    }

    public function setstudySubject($studySubject)
    {
        $this->studySubject = $studySubject;
        return $this;
    }

}
