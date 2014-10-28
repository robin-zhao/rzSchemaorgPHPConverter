<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible;

use Example\Thing\Intangible;

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
    protected $baseSalary;

    /**
     * Description of benefits associated with the job.
     *
     * @var String
     */
    protected $benefits;

    /**
     * Publication date for the job posting.
     *
     * @var DateTime
     */
    protected $datePosted;

    /**
     * Educational background needed for the position.
     *
     * @var String
     */
    protected $educationRequirements;

    /**
     * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
     *
     * @var String
     */
    protected $employmentType;

    /**
     * Description of skills and experience needed for the position.
     *
     * @var String
     */
    protected $experienceRequirements;

    /**
     * Organization offering the job position.
     *
     * @var Example\Thing\Organization
     */
    protected $hiringOrganization;

    /**
     * Description of bonus and commission compensation aspects of the job.
     *
     * @var String
     */
    protected $incentives;

    /**
     * The industry associated with the job position.
     *
     * @var String
     */
    protected $industry;

    /**
     * A (typically single) geographic location associated with the job position.
     *
     * @var Example\Thing\Place
     */
    protected $jobLocation;

    /**
     * Category or categories describing the job. Use BLS O*NET-SOC taxonomy: http://www.onetcenter.org/taxonomy.html. Ideally includes textual label and formal code, with the property repeated for each applicable value.
     *
     * @var String
     */
    protected $occupationalCategory;

    /**
     * Specific qualifications required for this role.
     *
     * @var String
     */
    protected $qualifications;

    /**
     * Responsibilities associated with this role.
     *
     * @var String
     */
    protected $responsibilities;

    /**
     * The currency (coded using ISO 4217, http://en.wikipedia.org/wiki/ISO_4217 used for the main salary information in this job posting.
     *
     * @var String
     */
    protected $salaryCurrency;

    /**
     * Skills required to fulfill this role.
     *
     * @var String
     */
    protected $skills;

    /**
     * Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
     *
     * @var String
     */
    protected $specialCommitments;

    /**
     * The title of the job.
     *
     * @var String
     */
    protected $title;

    /**
     * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
     *
     * @var String
     */
    protected $workHours;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/JobPosting";

    /**
     * @return Float
     */
    public function getBaseSalary()
    {
        return $this->baseSalary;
    }

    /**
     * @param $baseSalary Float
     */
    public function setBaseSalary($baseSalary)
    {
        $this->baseSalary = $baseSalary;
        return $this;
    }

    /**
     * @return String
     */
    public function getBenefits()
    {
        return $this->benefits;
    }

    /**
     * @param $benefits String
     */
    public function setBenefits($benefits)
    {
        $this->benefits = $benefits;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDatePosted()
    {
        return $this->datePosted;
    }

    /**
     * @param $datePosted DateTime
     */
    public function setDatePosted($datePosted)
    {
        $this->datePosted = $datePosted;
        return $this;
    }

    /**
     * @return String
     */
    public function getEducationRequirements()
    {
        return $this->educationRequirements;
    }

    /**
     * @param $educationRequirements String
     */
    public function setEducationRequirements($educationRequirements)
    {
        $this->educationRequirements = $educationRequirements;
        return $this;
    }

    /**
     * @return String
     */
    public function getEmploymentType()
    {
        return $this->employmentType;
    }

    /**
     * @param $employmentType String
     */
    public function setEmploymentType($employmentType)
    {
        $this->employmentType = $employmentType;
        return $this;
    }

    /**
     * @return String
     */
    public function getExperienceRequirements()
    {
        return $this->experienceRequirements;
    }

    /**
     * @param $experienceRequirements String
     */
    public function setExperienceRequirements($experienceRequirements)
    {
        $this->experienceRequirements = $experienceRequirements;
        return $this;
    }

    /**
     * @return Example\Thing\Organization
     */
    public function getHiringOrganization()
    {
        return $this->hiringOrganization;
    }

    /**
     * @param $hiringOrganization Example\Thing\Organization
     */
    public function setHiringOrganization($hiringOrganization)
    {
        $this->hiringOrganization = $hiringOrganization;
        return $this;
    }

    /**
     * @return String
     */
    public function getIncentives()
    {
        return $this->incentives;
    }

    /**
     * @param $incentives String
     */
    public function setIncentives($incentives)
    {
        $this->incentives = $incentives;
        return $this;
    }

    /**
     * @return String
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * @param $industry String
     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;
        return $this;
    }

    /**
     * @return Example\Thing\Place
     */
    public function getJobLocation()
    {
        return $this->jobLocation;
    }

    /**
     * @param $jobLocation Example\Thing\Place
     */
    public function setJobLocation($jobLocation)
    {
        $this->jobLocation = $jobLocation;
        return $this;
    }

    /**
     * @return String
     */
    public function getOccupationalCategory()
    {
        return $this->occupationalCategory;
    }

    /**
     * @param $occupationalCategory String
     */
    public function setOccupationalCategory($occupationalCategory)
    {
        $this->occupationalCategory = $occupationalCategory;
        return $this;
    }

    /**
     * @return String
     */
    public function getQualifications()
    {
        return $this->qualifications;
    }

    /**
     * @param $qualifications String
     */
    public function setQualifications($qualifications)
    {
        $this->qualifications = $qualifications;
        return $this;
    }

    /**
     * @return String
     */
    public function getResponsibilities()
    {
        return $this->responsibilities;
    }

    /**
     * @param $responsibilities String
     */
    public function setResponsibilities($responsibilities)
    {
        $this->responsibilities = $responsibilities;
        return $this;
    }

    /**
     * @return String
     */
    public function getSalaryCurrency()
    {
        return $this->salaryCurrency;
    }

    /**
     * @param $salaryCurrency String
     */
    public function setSalaryCurrency($salaryCurrency)
    {
        $this->salaryCurrency = $salaryCurrency;
        return $this;
    }

    /**
     * @return String
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param $skills String
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;
        return $this;
    }

    /**
     * @return String
     */
    public function getSpecialCommitments()
    {
        return $this->specialCommitments;
    }

    /**
     * @param $specialCommitments String
     */
    public function setSpecialCommitments($specialCommitments)
    {
        $this->specialCommitments = $specialCommitments;
        return $this;
    }

    /**
     * @return String
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $title String
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return String
     */
    public function getWorkHours()
    {
        return $this->workHours;
    }

    /**
     * @param $workHours String
     */
    public function setWorkHours($workHours)
    {
        $this->workHours = $workHours;
        return $this;
    }

}
