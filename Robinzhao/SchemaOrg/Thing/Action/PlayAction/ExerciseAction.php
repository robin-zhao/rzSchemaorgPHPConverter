<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Action\PlayAction;

use Robinzhao\SchemaOrg\Thing\Action\PlayAction;

/**
 * Exercise Action
 * http://schema.org/ExerciseAction
 */
class ExerciseAction extends PlayAction
{

    /**
     * A sub property of location. The course where this action was taken.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place
     */
    public $course;

    /**
     * A sub property of instrument. The died used in this action.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Diet
     */
    public $diet;

    /**
     * A sub property of asset. The distance travelled.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance
     */
    public $distance;

    /**
     * A sub property of instrument. The exercise plan used on this action.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\ExercisePlan
     */
    public $exercisePlan;

    /**
     * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
     *
     * @var String
     */
    public $exerciseType;

    /**
     * A sub property of location. The original location of the object or the agent before the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place|Float
     */
    public $fromLocation;

    /**
     * A sub property of participant. The oponent on this action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $oponent;

    /**
     * A sub property of location. The sports activity location where this action occurred.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\SportsActivityLocation
     */
    public $sportsActivityLocation;

    /**
     * A sub property of location. The sports event where this action occurred.
     *
     * @var Robinzhao\SchemaOrg\Thing\Event\SportsEvent
     */
    public $sportsEvent;

    /**
     * A sub property of participant. The sports team that participated on this action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization\SportsTeam
     */
    public $sportsTeam;

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place|Float
     */
    public $toLocation;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/ExerciseAction";

    /**
     * @param $course Robinzhao\SchemaOrg\Thing\Place
     */
    public function addCourse($course)
    {
        $this->course []= $course;
        return $this;
    }

    /**
     * @param $diet Robinzhao\SchemaOrg\Thing\CreativeWork\Diet
     */
    public function addDiet($diet)
    {
        $this->diet []= $diet;
        return $this;
    }

    /**
     * @param $distance Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance
     */
    public function addDistance($distance)
    {
        $this->distance []= $distance;
        return $this;
    }

    /**
     * @param $exercisePlan Robinzhao\SchemaOrg\Thing\CreativeWork\ExercisePlan
     */
    public function addExercisePlan($exercisePlan)
    {
        $this->exercisePlan []= $exercisePlan;
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
     * @param $fromLocation Robinzhao\SchemaOrg\Thing\Place|Float
     */
    public function addFromLocation($fromLocation)
    {
        $this->fromLocation []= $fromLocation;
        return $this;
    }

    /**
     * @param $oponent Robinzhao\SchemaOrg\Thing\Person
     */
    public function addOponent($oponent)
    {
        $this->oponent []= $oponent;
        return $this;
    }

    /**
     * @param $sportsActivityLocation Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\SportsActivityLocation
     */
    public function addSportsActivityLocation($sportsActivityLocation)
    {
        $this->sportsActivityLocation []= $sportsActivityLocation;
        return $this;
    }

    /**
     * @param $sportsEvent Robinzhao\SchemaOrg\Thing\Event\SportsEvent
     */
    public function addSportsEvent($sportsEvent)
    {
        $this->sportsEvent []= $sportsEvent;
        return $this;
    }

    /**
     * @param $sportsTeam Robinzhao\SchemaOrg\Thing\Organization\SportsTeam
     */
    public function addSportsTeam($sportsTeam)
    {
        $this->sportsTeam []= $sportsTeam;
        return $this;
    }

    /**
     * @param $toLocation Robinzhao\SchemaOrg\Thing\Place|Float
     */
    public function addToLocation($toLocation)
    {
        $this->toLocation []= $toLocation;
        return $this;
    }


}