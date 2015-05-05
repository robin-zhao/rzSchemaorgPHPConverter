<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

/**
 * Exercise Plan
 * http://schema.org/ExercisePlan
 */
class ExercisePlan extends CreativeWork
{

    /**
     * Length of time to engage in the activity.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public $activityDuration;

    /**
     * How often one should engage in the activity.
     *
     * @var String
     */
    public $activityFrequency;

    /**
     * Any additional component of the exercise prescription that may need to be articulated to the patient. This may include the order of exercises, the number of repetitions of movement, quantitative distance, progressions over time, etc.
     *
     * @var String
     */
    public $additionalVariable;

    /**
     * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
     *
     * @var String
     */
    public $exerciseType;

    /**
     * Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of the movement.
     *
     * @var String
     */
    public $intensity;

    /**
     * Number of times one should repeat the activity.
     *
     * @var Float
     */
    public $repetitions;

    /**
     * How often one should break from the activity.
     *
     * @var String
     */
    public $restPeriods;

    /**
     * Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Energy
     */
    public $workload;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/ExercisePlan";

    /**
     * @param $activityDuration Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public function addActivityDuration($activityDuration)
    {
        $this->activityDuration []= $activityDuration;
        return $this;
    }

    /**
     * @param $activityFrequency String
     */
    public function addActivityFrequency($activityFrequency)
    {
        $this->activityFrequency []= $activityFrequency;
        return $this;
    }

    /**
     * @param $additionalVariable String
     */
    public function addAdditionalVariable($additionalVariable)
    {
        $this->additionalVariable []= $additionalVariable;
        return $this;
    }

    /**
     * @param $exerciseType String
     */
    public function addExerciseType($exerciseType)
    {
        $this->exerciseType []= $exerciseType;
        return $this;
    }

    /**
     * @param $intensity String
     */
    public function addIntensity($intensity)
    {
        $this->intensity []= $intensity;
        return $this;
    }

    /**
     * @param $repetitions Float
     */
    public function addRepetitions($repetitions)
    {
        $this->repetitions []= $repetitions;
        return $this;
    }

    /**
     * @param $restPeriods String
     */
    public function addRestPeriods($restPeriods)
    {
        $this->restPeriods []= $restPeriods;
        return $this;
    }

    /**
     * @param $workload Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Energy
     */
    public function addWorkload($workload)
    {
        $this->workload []= $workload;
        return $this;
    }

}
