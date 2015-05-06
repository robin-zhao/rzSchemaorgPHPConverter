<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\Audience;

use Robinzhao\SchemaOrg\Thing\Intangible\Audience;

/**
 * People Audience
 * http://schema.org/PeopleAudience
 */
class PeopleAudience extends Audience
{

    /**
     * Expectations for health conditions of target audience
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCondition
     */
    public $healthCondition;

    /**
     * Audiences defined by a person's gender.
     *
     * @var String
     */
    public $requiredGender;

    /**
     * Audiences defined by a person's maximum age.
     *
     * @var Integer
     */
    public $requiredMaxAge;

    /**
     * Audiences defined by a person's minimum age.
     *
     * @var Integer
     */
    public $requiredMinAge;

    /**
     * The gender of the person or audience.
     *
     * @var String
     */
    public $suggestedGender;

    /**
     * Maximal age recommended for viewing content
     *
     * @var Float
     */
    public $suggestedMaxAge;

    /**
     * Minimal age recommended for viewing content
     *
     * @var Float
     */
    public $suggestedMinAge;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/PeopleAudience";

    /**
     * @param $healthCondition Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCondition
     */
    public function addHealthCondition($healthCondition)
    {
        $this->healthCondition []= $healthCondition;
        return $this;
    }

    /**
     * @param $requiredGender String
     */
    public function addRequiredGender($requiredGender)
    {
        $this->requiredGender []= $requiredGender;
        return $this;
    }

    /**
     * @param $requiredMaxAge Integer
     */
    public function addRequiredMaxAge($requiredMaxAge)
    {
        $this->requiredMaxAge []= $requiredMaxAge;
        return $this;
    }

    /**
     * @param $requiredMinAge Integer
     */
    public function addRequiredMinAge($requiredMinAge)
    {
        $this->requiredMinAge []= $requiredMinAge;
        return $this;
    }

    /**
     * @param $suggestedGender String
     */
    public function addSuggestedGender($suggestedGender)
    {
        $this->suggestedGender []= $suggestedGender;
        return $this;
    }

    /**
     * @param $suggestedMaxAge Float
     */
    public function addSuggestedMaxAge($suggestedMaxAge)
    {
        $this->suggestedMaxAge []= $suggestedMaxAge;
        return $this;
    }

    /**
     * @param $suggestedMinAge Float
     */
    public function addSuggestedMinAge($suggestedMinAge)
    {
        $this->suggestedMinAge []= $suggestedMinAge;
        return $this;
    }


}