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
    protected $activityDuration;

    /**
     * How often one should engage in the activity.
     *
     * @var String
     */
    protected $activityFrequency;

    /**
     * Any additional component of the exercise prescription that may need to be articulated to the patient. This may include the order of exercises, the number of repetitions of movement, quantitative distance, progressions over time, etc.
     *
     * @var String
     */
    protected $additionalVariable;

    /**
     * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
     *
     * @var String
     */
    protected $exerciseType;

    /**
     * Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of the movement.
     *
     * @var String
     */
    protected $intensity;

    /**
     * Number of times one should repeat the activity.
     *
     * @var Float
     */
    protected $repetitions;

    /**
     * How often one should break from the activity.
     *
     * @var String
     */
    protected $restPeriods;

    /**
     * Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
     *
     * @var Example\Thing\Intangible\Quantity\Energy
     */
    protected $workload;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/ExercisePlan";

    /**
     * @return Example\Thing\Intangible\Quantity\Duration
     */
    public function getActivityDuration()
    {
        return $this->activityDuration;
    }

    /**
     * @param $activityDuration Example\Thing\Intangible\Quantity\Duration
     */
    public function setActivityDuration($activityDuration)
    {
        $this->activityDuration = $activityDuration;
        return $this;
    }

    /**
     * @return String
     */
    public function getActivityFrequency()
    {
        return $this->activityFrequency;
    }

    /**
     * @param $activityFrequency String
     */
    public function setActivityFrequency($activityFrequency)
    {
        $this->activityFrequency = $activityFrequency;
        return $this;
    }

    /**
     * @return String
     */
    public function getAdditionalVariable()
    {
        return $this->additionalVariable;
    }

    /**
     * @param $additionalVariable String
     */
    public function setAdditionalVariable($additionalVariable)
    {
        $this->additionalVariable = $additionalVariable;
        return $this;
    }

    /**
     * @return String
     */
    public function getExerciseType()
    {
        return $this->exerciseType;
    }

    /**
     * @param $exerciseType String
     */
    public function setExerciseType($exerciseType)
    {
        $this->exerciseType = $exerciseType;
        return $this;
    }

    /**
     * @return String
     */
    public function getIntensity()
    {
        return $this->intensity;
    }

    /**
     * @param $intensity String
     */
    public function setIntensity($intensity)
    {
        $this->intensity = $intensity;
        return $this;
    }

    /**
     * @return Float
     */
    public function getRepetitions()
    {
        return $this->repetitions;
    }

    /**
     * @param $repetitions Float
     */
    public function setRepetitions($repetitions)
    {
        $this->repetitions = $repetitions;
        return $this;
    }

    /**
     * @return String
     */
    public function getRestPeriods()
    {
        return $this->restPeriods;
    }

    /**
     * @param $restPeriods String
     */
    public function setRestPeriods($restPeriods)
    {
        $this->restPeriods = $restPeriods;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Quantity\Energy
     */
    public function getWorkload()
    {
        return $this->workload;
    }

    /**
     * @param $workload Example\Thing\Intangible\Quantity\Energy
     */
    public function setWorkload($workload)
    {
        $this->workload = $workload;
        return $this;
    }

}
