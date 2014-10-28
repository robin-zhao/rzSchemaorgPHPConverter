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

    /**
     * @return String
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * @param $outcome String
     */
    public function setOutcome($outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * @return String
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * @param $population String
     */
    public function setPopulation($population)
    {
        $this->population = $population;
        return $this;
    }

    /**
     * @return Example\Thing\Organization
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * @param $sponsor Example\Thing\Organization
     */
    public function setSponsor($sponsor)
    {
        $this->sponsor = $sponsor;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalStudyStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $status Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalStudyStatus
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return Example\Thing\Place\AdministrativeArea
     */
    public function getStudyLocation()
    {
        return $this->studyLocation;
    }

    /**
     * @param $studyLocation Example\Thing\Place\AdministrativeArea
     */
    public function setStudyLocation($studyLocation)
    {
        $this->studyLocation = $studyLocation;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity
     */
    public function getStudySubject()
    {
        return $this->studySubject;
    }

    /**
     * @param $studySubject Example\Thing\MedicalEntity
     */
    public function setStudySubject($studySubject)
    {
        $this->studySubject = $studySubject;
        return $this;
    }

}
