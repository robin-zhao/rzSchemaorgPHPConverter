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
    private $baseSalary;

    /**
     * Description of benefits associated with the job.
     *
     * @var String
     */
    private $benefits;

    /**
     * Publication date for the job posting.
     *
     * @var DateTime
     */
    private $datePosted;

    /**
     * Educational background needed for the position.
     *
     * @var String
     */
    private $educationRequirements;

    /**
     * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
     *
     * @var String
     */
    private $employmentType;

    /**
     * Description of skills and experience needed for the position.
     *
     * @var String
     */
    private $experienceRequirements;

    /**
     * Organization offering the job position.
     *
     * @var Example\Thing\Organization
     */
    private $hiringOrganization;

    /**
     * Description of bonus and commission compensation aspects of the job.
     *
     * @var String
     */
    private $incentives;

    /**
     * The industry associated with the job position.
     *
     * @var String
     */
    private $industry;

    /**
     * A (typically single) geographic location associated with the job position.
     *
     * @var Example\Thing\Place
     */
    private $jobLocation;

    /**
     * Category or categories describing the job. Use BLS O*NET-SOC taxonomy: http://www.onetcenter.org/taxonomy.html. Ideally includes textual label and formal code, with the property repeated for each applicable value.
     *
     * @var String
     */
    private $occupationalCategory;

    /**
     * Specific qualifications required for this role.
     *
     * @var String
     */
    private $qualifications;

    /**
     * Responsibilities associated with this role.
     *
     * @var String
     */
    private $responsibilities;

    /**
     * The currency (coded using ISO 4217, http://en.wikipedia.org/wiki/ISO_4217 used for the main salary information in this job posting.
     *
     * @var String
     */
    private $salaryCurrency;

    /**
     * Skills required to fulfill this role.
     *
     * @var String
     */
    private $skills;

    /**
     * Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
     *
     * @var String
     */
    private $specialCommitments;

    /**
     * The title of the job.
     *
     * @var String
     */
    private $title;

    /**
     * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
     *
     * @var String
     */
    private $workHours;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/JobPosting";

    public function getBaseSalary()
    {
        return $this->baseSalary;
    }

    public function setBaseSalary($baseSalary)
    {
        $this->baseSalary = $baseSalary;
        return $this;
    }

    public function getBenefits()
    {
        return $this->benefits;
    }

    public function setBenefits($benefits)
    {
        $this->benefits = $benefits;
        return $this;
    }

    public function getDatePosted()
    {
        return $this->datePosted;
    }

    public function setDatePosted($datePosted)
    {
        $this->datePosted = $datePosted;
        return $this;
    }

    public function getEducationRequirements()
    {
        return $this->educationRequirements;
    }

    public function setEducationRequirements($educationRequirements)
    {
        $this->educationRequirements = $educationRequirements;
        return $this;
    }

    public function getEmploymentType()
    {
        return $this->employmentType;
    }

    public function setEmploymentType($employmentType)
    {
        $this->employmentType = $employmentType;
        return $this;
    }

    public function getExperienceRequirements()
    {
        return $this->experienceRequirements;
    }

    public function setExperienceRequirements($experienceRequirements)
    {
        $this->experienceRequirements = $experienceRequirements;
        return $this;
    }

    public function getHiringOrganization()
    {
        return $this->hiringOrganization;
    }

    public function setHiringOrganization($hiringOrganization)
    {
        $this->hiringOrganization = $hiringOrganization;
        return $this;
    }

    public function getIncentives()
    {
        return $this->incentives;
    }

    public function setIncentives($incentives)
    {
        $this->incentives = $incentives;
        return $this;
    }

    public function getIndustry()
    {
        return $this->industry;
    }

    public function setIndustry($industry)
    {
        $this->industry = $industry;
        return $this;
    }

    public function getJobLocation()
    {
        return $this->jobLocation;
    }

    public function setJobLocation($jobLocation)
    {
        $this->jobLocation = $jobLocation;
        return $this;
    }

    public function getOccupationalCategory()
    {
        return $this->occupationalCategory;
    }

    public function setOccupationalCategory($occupationalCategory)
    {
        $this->occupationalCategory = $occupationalCategory;
        return $this;
    }

    public function getQualifications()
    {
        return $this->qualifications;
    }

    public function setQualifications($qualifications)
    {
        $this->qualifications = $qualifications;
        return $this;
    }

    public function getResponsibilities()
    {
        return $this->responsibilities;
    }

    public function setResponsibilities($responsibilities)
    {
        $this->responsibilities = $responsibilities;
        return $this;
    }

    public function getSalaryCurrency()
    {
        return $this->salaryCurrency;
    }

    public function setSalaryCurrency($salaryCurrency)
    {
        $this->salaryCurrency = $salaryCurrency;
        return $this;
    }

    public function getSkills()
    {
        return $this->skills;
    }

    public function setSkills($skills)
    {
        $this->skills = $skills;
        return $this;
    }

    public function getSpecialCommitments()
    {
        return $this->specialCommitments;
    }

    public function setSpecialCommitments($specialCommitments)
    {
        $this->specialCommitments = $specialCommitments;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getWorkHours()
    {
        return $this->workHours;
    }

    public function setWorkHours($workHours)
    {
        $this->workHours = $workHours;
        return $this;
    }

}
