<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible;

use Robinzhao\SchemaOrg\Thing\Intangible;

/**
 * Job Posting
 * http://schema.org/JobPosting
 */
class JobPosting extends Intangible
{

    /**
     * The base salary of the job.
     *
     * @var Float
     */
    public $baseSalary;

    /**
     * Description of benefits associated with the job.
     *
     * @var String
     */
    public $benefits;

    /**
     * Publication date for the job posting.
     *
     * @var DateTime
     */
    public $datePosted;

    /**
     * Educational background needed for the position.
     *
     * @var String
     */
    public $educationRequirements;

    /**
     * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
     *
     * @var String
     */
    public $employmentType;

    /**
     * Description of skills and experience needed for the position.
     *
     * @var String
     */
    public $experienceRequirements;

    /**
     * Organization offering the job position.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    public $hiringOrganization;

    /**
     * Description of bonus and commission compensation aspects of the job.
     *
     * @var String
     */
    public $incentives;

    /**
     * The industry associated with the job position.
     *
     * @var String
     */
    public $industry;

    /**
     * A (typically single) geographic location associated with the job position.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place
     */
    public $jobLocation;

    /**
     * Category or categories describing the job. Use BLS O*NET-SOC taxonomy: http://www.onetcenter.org/taxonomy.html. Ideally includes textual label and formal code, with the property repeated for each applicable value.
     *
     * @var String
     */
    public $occupationalCategory;

    /**
     * Specific qualifications required for this role.
     *
     * @var String
     */
    public $qualifications;

    /**
     * Responsibilities associated with this role.
     *
     * @var String
     */
    public $responsibilities;

    /**
     * The currency (coded using ISO 4217, http://en.wikipedia.org/wiki/ISO_4217 used for the main salary information in this job posting.
     *
     * @var String
     */
    public $salaryCurrency;

    /**
     * Skills required to fulfill this role.
     *
     * @var String
     */
    public $skills;

    /**
     * Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
     *
     * @var String
     */
    public $specialCommitments;

    /**
     * The title of the job.
     *
     * @var String
     */
    public $title;

    /**
     * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
     *
     * @var String
     */
    public $workHours;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/JobPosting";

    /**
     * @param $baseSalary Float
     */
    public function addBaseSalary($baseSalary)
    {
        $this->baseSalary []= $baseSalary;
        return $this;
    }

    /**
     * @param $benefits String
     */
    public function addBenefits($benefits)
    {
        $this->benefits []= $benefits;
        return $this;
    }

    /**
     * @param $datePosted DateTime
     */
    public function addDatePosted($datePosted)
    {
        $this->datePosted []= $datePosted;
        return $this;
    }

    /**
     * @param $educationRequirements String
     */
    public function addEducationRequirements($educationRequirements)
    {
        $this->educationRequirements []= $educationRequirements;
        return $this;
    }

    /**
     * @param $employmentType String
     */
    public function addEmploymentType($employmentType)
    {
        $this->employmentType []= $employmentType;
        return $this;
    }

    /**
     * @param $experienceRequirements String
     */
    public function addExperienceRequirements($experienceRequirements)
    {
        $this->experienceRequirements []= $experienceRequirements;
        return $this;
    }

    /**
     * @param $hiringOrganization Robinzhao\SchemaOrg\Thing\Organization
     */
    public function addHiringOrganization($hiringOrganization)
    {
        $this->hiringOrganization []= $hiringOrganization;
        return $this;
    }

    /**
     * @param $incentives String
     */
    public function addIncentives($incentives)
    {
        $this->incentives []= $incentives;
        return $this;
    }

    /**
     * @param $industry String
     */
    public function addIndustry($industry)
    {
        $this->industry []= $industry;
        return $this;
    }

    /**
     * @param $jobLocation Robinzhao\SchemaOrg\Thing\Place
     */
    public function addJobLocation($jobLocation)
    {
        $this->jobLocation []= $jobLocation;
        return $this;
    }

    /**
     * @param $occupationalCategory String
     */
    public function addOccupationalCategory($occupationalCategory)
    {
        $this->occupationalCategory []= $occupationalCategory;
        return $this;
    }

    /**
     * @param $qualifications String
     */
    public function addQualifications($qualifications)
    {
        $this->qualifications []= $qualifications;
        return $this;
    }

    /**
     * @param $responsibilities String
     */
    public function addResponsibilities($responsibilities)
    {
        $this->responsibilities []= $responsibilities;
        return $this;
    }

    /**
     * @param $salaryCurrency String
     */
    public function addSalaryCurrency($salaryCurrency)
    {
        $this->salaryCurrency []= $salaryCurrency;
        return $this;
    }

    /**
     * @param $skills String
     */
    public function addSkills($skills)
    {
        $this->skills []= $skills;
        return $this;
    }

    /**
     * @param $specialCommitments String
     */
    public function addSpecialCommitments($specialCommitments)
    {
        $this->specialCommitments []= $specialCommitments;
        return $this;
    }

    /**
     * @param $title String
     */
    public function addTitle($title)
    {
        $this->title []= $title;
        return $this;
    }

    /**
     * @param $workHours String
     */
    public function addWorkHours($workHours)
    {
        $this->workHours []= $workHours;
        return $this;
    }


}