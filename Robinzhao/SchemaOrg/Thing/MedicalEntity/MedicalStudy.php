<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity;

use Robinzhao\SchemaOrg\Thing\MedicalEntity;

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
    protected $outcome;

    /**
     * Any characteristics of the population used in the study, e.g. 'males under 65'.
     *
     * @var String
     */
    protected $population;

    /**
     * Sponsor of the study.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    protected $sponsor;

    /**
     * The status of the study (enumerated).
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalStudyStatus
     */
    protected $status;

    /**
     * The location in which the study is taking/took place.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    protected $studyLocation;

    /**
     * A subject of the study, i.e. one of the medical conditions, therapies, devices, drugs, etc. investigated by the study.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity
     */
    protected $studySubject;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/MedicalStudy";

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
     * @return Robinzhao\SchemaOrg\Thing\Organization
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * @param $sponsor Robinzhao\SchemaOrg\Thing\Organization
     */
    public function setSponsor($sponsor)
    {
        $this->sponsor = $sponsor;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalStudyStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $status Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalStudyStatus
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    public function getStudyLocation()
    {
        return $this->studyLocation;
    }

    /**
     * @param $studyLocation Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    public function setStudyLocation($studyLocation)
    {
        $this->studyLocation = $studyLocation;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity
     */
    public function getStudySubject()
    {
        return $this->studySubject;
    }

    /**
     * @param $studySubject Robinzhao\SchemaOrg\Thing\MedicalEntity
     */
    public function setStudySubject($studySubject)
    {
        $this->studySubject = $studySubject;
        return $this;
    }

}
