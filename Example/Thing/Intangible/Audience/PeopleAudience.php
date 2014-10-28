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

    /**
     * @return Example\Thing\MedicalEntity\MedicalCondition
     */
    public function getHealthCondition()
    {
        return $this->healthCondition;
    }

    /**
     * @param $healthCondition Example\Thing\MedicalEntity\MedicalCondition
     */
    public function setHealthCondition($healthCondition)
    {
        $this->healthCondition = $healthCondition;
        return $this;
    }

    /**
     * @return String
     */
    public function getRequiredGender()
    {
        return $this->requiredGender;
    }

    /**
     * @param $requiredGender String
     */
    public function setRequiredGender($requiredGender)
    {
        $this->requiredGender = $requiredGender;
        return $this;
    }

    /**
     * @return Integer
     */
    public function getRequiredMaxAge()
    {
        return $this->requiredMaxAge;
    }

    /**
     * @param $requiredMaxAge Integer
     */
    public function setRequiredMaxAge($requiredMaxAge)
    {
        $this->requiredMaxAge = $requiredMaxAge;
        return $this;
    }

    /**
     * @return Integer
     */
    public function getRequiredMinAge()
    {
        return $this->requiredMinAge;
    }

    /**
     * @param $requiredMinAge Integer
     */
    public function setRequiredMinAge($requiredMinAge)
    {
        $this->requiredMinAge = $requiredMinAge;
        return $this;
    }

    /**
     * @return String
     */
    public function getSuggestedGender()
    {
        return $this->suggestedGender;
    }

    /**
     * @param $suggestedGender String
     */
    public function setSuggestedGender($suggestedGender)
    {
        $this->suggestedGender = $suggestedGender;
        return $this;
    }

    /**
     * @return Float
     */
    public function getSuggestedMaxAge()
    {
        return $this->suggestedMaxAge;
    }

    /**
     * @param $suggestedMaxAge Float
     */
    public function setSuggestedMaxAge($suggestedMaxAge)
    {
        $this->suggestedMaxAge = $suggestedMaxAge;
        return $this;
    }

    /**
     * @return Float
     */
    public function getSuggestedMinAge()
    {
        return $this->suggestedMinAge;
    }

    /**
     * @param $suggestedMinAge Float
     */
    public function setSuggestedMinAge($suggestedMinAge)
    {
        $this->suggestedMinAge = $suggestedMinAge;
        return $this;
    }

}
