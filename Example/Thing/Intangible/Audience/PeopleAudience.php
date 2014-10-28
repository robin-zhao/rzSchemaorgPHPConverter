<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible\Audience;

use Example\Thing\Intangible\Audience;

/**
 * People Audience
 * http://schema.org/PeopleAudience
 */
class PeopleAudience extends Audience
{

    /**
     * Expectations for health conditions of target audience
     *
     * @var Example\Thing\MedicalEntity\MedicalCondition
     */
    private $healthCondition;

    /**
     * Audiences defined by a person's gender.
     *
     * @var String
     */
    private $requiredGender;

    /**
     * Audiences defined by a person's maximum age.
     *
     * @var Integer
     */
    private $requiredMaxAge;

    /**
     * Audiences defined by a person's minimum age.
     *
     * @var Integer
     */
    private $requiredMinAge;

    /**
     * The gender of the person or audience.
     *
     * @var String
     */
    private $suggestedGender;

    /**
     * Maximal age recommended for viewing content
     *
     * @var Float
     */
    private $suggestedMaxAge;

    /**
     * Minimal age recommended for viewing content
     *
     * @var Float
     */
    private $suggestedMinAge;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/PeopleAudience";

    public function getHealthCondition()
    {
        return $this->healthCondition;
    }

    public function setHealthCondition($healthCondition)
    {
        $this->healthCondition = $healthCondition;
        return $this;
    }

    public function getRequiredGender()
    {
        return $this->requiredGender;
    }

    public function setRequiredGender($requiredGender)
    {
        $this->requiredGender = $requiredGender;
        return $this;
    }

    public function getRequiredMaxAge()
    {
        return $this->requiredMaxAge;
    }

    public function setRequiredMaxAge($requiredMaxAge)
    {
        $this->requiredMaxAge = $requiredMaxAge;
        return $this;
    }

    public function getRequiredMinAge()
    {
        return $this->requiredMinAge;
    }

    public function setRequiredMinAge($requiredMinAge)
    {
        $this->requiredMinAge = $requiredMinAge;
        return $this;
    }

    public function getSuggestedGender()
    {
        return $this->suggestedGender;
    }

    public function setSuggestedGender($suggestedGender)
    {
        $this->suggestedGender = $suggestedGender;
        return $this;
    }

    public function getSuggestedMaxAge()
    {
        return $this->suggestedMaxAge;
    }

    public function setSuggestedMaxAge($suggestedMaxAge)
    {
        $this->suggestedMaxAge = $suggestedMaxAge;
        return $this;
    }

    public function getSuggestedMinAge()
    {
        return $this->suggestedMinAge;
    }

    public function setSuggestedMinAge($suggestedMinAge)
    {
        $this->suggestedMinAge = $suggestedMinAge;
        return $this;
    }

}
