<?php

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

    public function gethealthCondition()
    {
        return $this->healthCondition;
    }

    public function sethealthCondition($healthCondition)
    {
        $this->healthCondition = $healthCondition;
        return $this;
    }

    public function getrequiredGender()
    {
        return $this->requiredGender;
    }

    public function setrequiredGender($requiredGender)
    {
        $this->requiredGender = $requiredGender;
        return $this;
    }

    public function getrequiredMaxAge()
    {
        return $this->requiredMaxAge;
    }

    public function setrequiredMaxAge($requiredMaxAge)
    {
        $this->requiredMaxAge = $requiredMaxAge;
        return $this;
    }

    public function getrequiredMinAge()
    {
        return $this->requiredMinAge;
    }

    public function setrequiredMinAge($requiredMinAge)
    {
        $this->requiredMinAge = $requiredMinAge;
        return $this;
    }

    public function getsuggestedGender()
    {
        return $this->suggestedGender;
    }

    public function setsuggestedGender($suggestedGender)
    {
        $this->suggestedGender = $suggestedGender;
        return $this;
    }

    public function getsuggestedMaxAge()
    {
        return $this->suggestedMaxAge;
    }

    public function setsuggestedMaxAge($suggestedMaxAge)
    {
        $this->suggestedMaxAge = $suggestedMaxAge;
        return $this;
    }

    public function getsuggestedMinAge()
    {
        return $this->suggestedMinAge;
    }

    public function setsuggestedMinAge($suggestedMinAge)
    {
        $this->suggestedMinAge = $suggestedMinAge;
        return $this;
    }

}
