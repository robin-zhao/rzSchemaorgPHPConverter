<?php
/**
 * This is an auto generated file.
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
    public $outcome;

    /**
     * Any characteristics of the population used in the study, e.g. 'males under 65'.
     *
     * @var String
     */
    public $population;

    /**
     * Sponsor of the study.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    public $sponsor;

    /**
     * The status of the study (enumerated).
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalStudyStatus
     */
    public $status;

    /**
     * The location in which the study is taking/took place.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    public $studyLocation;

    /**
     * A subject of the study, i.e. one of the medical conditions, therapies, devices, drugs, etc. investigated by the study.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity
     */
    public $studySubject;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalStudy";

    /**
     * @param $outcome String
     */
    public function addOutcome($outcome)
    {
        $this->outcome []= $outcome;
        return $this;
    }

    /**
     * @param $population String
     */
    public function addPopulation($population)
    {
        $this->population []= $population;
        return $this;
    }

    /**
     * @param $sponsor Robinzhao\SchemaOrg\Thing\Organization
     */
    public function addSponsor($sponsor)
    {
        $this->sponsor []= $sponsor;
        return $this;
    }

    /**
     * @param $status Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalStudyStatus
     */
    public function addStatus($status)
    {
        $this->status []= $status;
        return $this;
    }

    /**
     * @param $studyLocation Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    public function addStudyLocation($studyLocation)
    {
        $this->studyLocation []= $studyLocation;
        return $this;
    }

    /**
     * @param $studySubject Robinzhao\SchemaOrg\Thing\MedicalEntity
     */
    public function addStudySubject($studySubject)
    {
        $this->studySubject []= $studySubject;
        return $this;
    }


}