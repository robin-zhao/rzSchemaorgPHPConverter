<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

/**
 * Exercise Plan
 * http://schema.org/ExercisePlan
 */
class ExercisePlan extends CreativeWork
{

    /**
     * Length of time to engage in the activity.
     *
     * @var Example\Thing\Intangible\Quantity\Duration
     */
    private $activityDuration;

    /**
     * How often one should engage in the activity.
     *
     * @var String
     */
    private $activityFrequency;

    /**
     * Any additional component of the exercise prescription that may need to be articulated to the patient. This may include the order of exercises, the number of repetitions of movement, quantitative distance, progressions over time, etc.
     *
     * @var String
     */
    private $additionalVariable;

    /**
     * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
     *
     * @var String
     */
    private $exerciseType;

    /**
     * Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of the movement.
     *
     * @var String
     */
    private $intensity;

    /**
     * Number of times one should repeat the activity.
     *
     * @var Float
     */
    private $repetitions;

    /**
     * How often one should break from the activity.
     *
     * @var String
     */
    private $restPeriods;

    /**
     * Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
     *
     * @var Example\Thing\Intangible\Quantity\Energy
     */
    private $workload;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/ExercisePlan";

    public function getActivityDuration()
    {
        return $this->activityDuration;
    }

    public function setActivityDuration($activityDuration)
    {
        $this->activityDuration = $activityDuration;
        return $this;
    }

    public function getActivityFrequency()
    {
        return $this->activityFrequency;
    }

    public function setActivityFrequency($activityFrequency)
    {
        $this->activityFrequency = $activityFrequency;
        return $this;
    }

    public function getAdditionalVariable()
    {
        return $this->additionalVariable;
    }

    public function setAdditionalVariable($additionalVariable)
    {
        $this->additionalVariable = $additionalVariable;
        return $this;
    }

    public function getExerciseType()
    {
        return $this->exerciseType;
    }

    public function setExerciseType($exerciseType)
    {
        $this->exerciseType = $exerciseType;
        return $this;
    }

    public function getIntensity()
    {
        return $this->intensity;
    }

    public function setIntensity($intensity)
    {
        $this->intensity = $intensity;
        return $this;
    }

    public function getRepetitions()
    {
        return $this->repetitions;
    }

    public function setRepetitions($repetitions)
    {
        $this->repetitions = $repetitions;
        return $this;
    }

    public function getRestPeriods()
    {
        return $this->restPeriods;
    }

    public function setRestPeriods($restPeriods)
    {
        $this->restPeriods = $restPeriods;
        return $this;
    }

    public function getWorkload()
    {
        return $this->workload;
    }

    public function setWorkload($workload)
    {
        $this->workload = $workload;
        return $this;
    }

}
