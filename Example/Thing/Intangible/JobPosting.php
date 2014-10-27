<?php

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
     * @var Organization
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
     * @var Place
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

    public function getbaseSalary()
    {
        return $this->baseSalary;
    }

    public function setbaseSalary($baseSalary)
    {
        $this->baseSalary = $baseSalary;
        return $this;
    }

    public function getbenefits()
    {
        return $this->benefits;
    }

    public function setbenefits($benefits)
    {
        $this->benefits = $benefits;
        return $this;
    }

    public function getdatePosted()
    {
        return $this->datePosted;
    }

    public function setdatePosted($datePosted)
    {
        $this->datePosted = $datePosted;
        return $this;
    }

    public function geteducationRequirements()
    {
        return $this->educationRequirements;
    }

    public function seteducationRequirements($educationRequirements)
    {
        $this->educationRequirements = $educationRequirements;
        return $this;
    }

    public function getemploymentType()
    {
        return $this->employmentType;
    }

    public function setemploymentType($employmentType)
    {
        $this->employmentType = $employmentType;
        return $this;
    }

    public function getexperienceRequirements()
    {
        return $this->experienceRequirements;
    }

    public function setexperienceRequirements($experienceRequirements)
    {
        $this->experienceRequirements = $experienceRequirements;
        return $this;
    }

    public function gethiringOrganization()
    {
        return $this->hiringOrganization;
    }

    public function sethiringOrganization($hiringOrganization)
    {
        $this->hiringOrganization = $hiringOrganization;
        return $this;
    }

    public function getincentives()
    {
        return $this->incentives;
    }

    public function setincentives($incentives)
    {
        $this->incentives = $incentives;
        return $this;
    }

    public function getindustry()
    {
        return $this->industry;
    }

    public function setindustry($industry)
    {
        $this->industry = $industry;
        return $this;
    }

    public function getjobLocation()
    {
        return $this->jobLocation;
    }

    public function setjobLocation($jobLocation)
    {
        $this->jobLocation = $jobLocation;
        return $this;
    }

    public function getoccupationalCategory()
    {
        return $this->occupationalCategory;
    }

    public function setoccupationalCategory($occupationalCategory)
    {
        $this->occupationalCategory = $occupationalCategory;
        return $this;
    }

    public function getqualifications()
    {
        return $this->qualifications;
    }

    public function setqualifications($qualifications)
    {
        $this->qualifications = $qualifications;
        return $this;
    }

    public function getresponsibilities()
    {
        return $this->responsibilities;
    }

    public function setresponsibilities($responsibilities)
    {
        $this->responsibilities = $responsibilities;
        return $this;
    }

    public function getsalaryCurrency()
    {
        return $this->salaryCurrency;
    }

    public function setsalaryCurrency($salaryCurrency)
    {
        $this->salaryCurrency = $salaryCurrency;
        return $this;
    }

    public function getskills()
    {
        return $this->skills;
    }

    public function setskills($skills)
    {
        $this->skills = $skills;
        return $this;
    }

    public function getspecialCommitments()
    {
        return $this->specialCommitments;
    }

    public function setspecialCommitments($specialCommitments)
    {
        $this->specialCommitments = $specialCommitments;
        return $this;
    }

    public function gettitle()
    {
        return $this->title;
    }

    public function settitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getworkHours()
    {
        return $this->workHours;
    }

    public function setworkHours($workHours)
    {
        $this->workHours = $workHours;
        return $this;
    }

}
