<?php

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

    public function getactivityDuration()
    {
        return $this->activityDuration;
    }

    public function setactivityDuration($activityDuration)
    {
        $this->activityDuration = $activityDuration;
        return $this;
    }

    public function getactivityFrequency()
    {
        return $this->activityFrequency;
    }

    public function setactivityFrequency($activityFrequency)
    {
        $this->activityFrequency = $activityFrequency;
        return $this;
    }

    public function getadditionalVariable()
    {
        return $this->additionalVariable;
    }

    public function setadditionalVariable($additionalVariable)
    {
        $this->additionalVariable = $additionalVariable;
        return $this;
    }

    public function getexerciseType()
    {
        return $this->exerciseType;
    }

    public function setexerciseType($exerciseType)
    {
        $this->exerciseType = $exerciseType;
        return $this;
    }

    public function getintensity()
    {
        return $this->intensity;
    }

    public function setintensity($intensity)
    {
        $this->intensity = $intensity;
        return $this;
    }

    public function getrepetitions()
    {
        return $this->repetitions;
    }

    public function setrepetitions($repetitions)
    {
        $this->repetitions = $repetitions;
        return $this;
    }

    public function getrestPeriods()
    {
        return $this->restPeriods;
    }

    public function setrestPeriods($restPeriods)
    {
        $this->restPeriods = $restPeriods;
        return $this;
    }

    public function getworkload()
    {
        return $this->workload;
    }

    public function setworkload($workload)
    {
        $this->workload = $workload;
        return $this;
    }

}
