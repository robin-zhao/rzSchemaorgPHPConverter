<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
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
    protected $course;

    /**
     * A sub property of instrument. The died used in this action.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Diet
     */
    protected $diet;

    /**
     * A sub property of asset. The distance travelled.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance
     */
    protected $distance;

    /**
     * A sub property of instrument. The exercise plan used on this action.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\ExercisePlan
     */
    protected $exercisePlan;

    /**
     * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
     *
     * @var String
     */
    protected $exerciseType;

    /**
     * A sub property of location. The original location of the object or the agent before the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place|Float
     */
    protected $fromLocation;

    /**
     * A sub property of participant. The oponent on this action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $oponent;

    /**
     * A sub property of location. The sports activity location where this action occurred.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\SportsActivityLocation
     */
    protected $sportsActivityLocation;

    /**
     * A sub property of location. The sports event where this action occurred.
     *
     * @var Robinzhao\SchemaOrg\Thing\Event\SportsEvent
     */
    protected $sportsEvent;

    /**
     * A sub property of participant. The sports team that participated on this action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization\SportsTeam
     */
    protected $sportsTeam;

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place|Float
     */
    protected $toLocation;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/ExerciseAction";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Place
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param $course Robinzhao\SchemaOrg\Thing\Place
     */
    public function setCourse($course)
    {
        $this->course = $course;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\Diet
     */
    public function getDiet()
    {
        return $this->diet;
    }

    /**
     * @param $diet Robinzhao\SchemaOrg\Thing\CreativeWork\Diet
     */
    public function setDiet($diet)
    {
        $this->diet = $diet;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param $distance Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\ExercisePlan
     */
    public function getExercisePlan()
    {
        return $this->exercisePlan;
    }

    /**
     * @param $exercisePlan Robinzhao\SchemaOrg\Thing\CreativeWork\ExercisePlan
     */
    public function setExercisePlan($exercisePlan)
    {
        $this->exercisePlan = $exercisePlan;
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
     * @return Robinzhao\SchemaOrg\Thing\Place|Float
     */
    public function getFromLocation()
    {
        return $this->fromLocation;
    }

    /**
     * @param $fromLocation Robinzhao\SchemaOrg\Thing\Place|Float
     */
    public function setFromLocation($fromLocation)
    {
        $this->fromLocation = $fromLocation;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getOponent()
    {
        return $this->oponent;
    }

    /**
     * @param $oponent Robinzhao\SchemaOrg\Thing\Person
     */
    public function setOponent($oponent)
    {
        $this->oponent = $oponent;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\SportsActivityLocation
     */
    public function getSportsActivityLocation()
    {
        return $this->sportsActivityLocation;
    }

    /**
     * @param $sportsActivityLocation Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\SportsActivityLocation
     */
    public function setSportsActivityLocation($sportsActivityLocation)
    {
        $this->sportsActivityLocation = $sportsActivityLocation;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Event\SportsEvent
     */
    public function getSportsEvent()
    {
        return $this->sportsEvent;
    }

    /**
     * @param $sportsEvent Robinzhao\SchemaOrg\Thing\Event\SportsEvent
     */
    public function setSportsEvent($sportsEvent)
    {
        $this->sportsEvent = $sportsEvent;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization\SportsTeam
     */
    public function getSportsTeam()
    {
        return $this->sportsTeam;
    }

    /**
     * @param $sportsTeam Robinzhao\SchemaOrg\Thing\Organization\SportsTeam
     */
    public function setSportsTeam($sportsTeam)
    {
        $this->sportsTeam = $sportsTeam;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Place|Float
     */
    public function getToLocation()
    {
        return $this->toLocation;
    }

    /**
     * @param $toLocation Robinzhao\SchemaOrg\Thing\Place|Float
     */
    public function setToLocation($toLocation)
    {
        $this->toLocation = $toLocation;
        return $this;
    }

}
