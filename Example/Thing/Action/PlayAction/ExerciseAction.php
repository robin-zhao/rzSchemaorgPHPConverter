<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action\PlayAction;

use Example\Thing\Action\PlayAction;

/**
 * Exercise Action
 * http://schema.org/ExerciseAction
 */
class ExerciseAction extends PlayAction
{

    /**
     * A sub property of location. The course where this action was taken.
     *
     * @var Example\Thing\Place
     */
    protected $course;

    /**
     * A sub property of instrument. The died used in this action.
     *
     * @var Example\Thing\CreativeWork\Diet
     */
    protected $diet;

    /**
     * A sub property of asset. The distance travelled.
     *
     * @var Example\Thing\Intangible\Quantity\Distance
     */
    protected $distance;

    /**
     * A sub property of instrument. The exercise plan used on this action.
     *
     * @var Example\Thing\CreativeWork\ExercisePlan
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
     * @var Example\Thing\Place|Float
     */
    protected $fromLocation;

    /**
     * A sub property of participant. The oponent on this action.
     *
     * @var Example\Thing\Person
     */
    protected $oponent;

    /**
     * A sub property of location. The sports activity location where this action occurred.
     *
     * @var Example\Thing\Organization\LocalBusiness\SportsActivityLocation
     */
    protected $sportsActivityLocation;

    /**
     * A sub property of location. The sports event where this action occurred.
     *
     * @var Example\Thing\Event\SportsEvent
     */
    protected $sportsEvent;

    /**
     * A sub property of participant. The sports team that participated on this action.
     *
     * @var Example\Thing\Organization\SportsTeam
     */
    protected $sportsTeam;

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     *
     * @var Example\Thing\Place|Float
     */
    protected $toLocation;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/ExerciseAction";

    /**
     * @return Example\Thing\Place
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param $course Example\Thing\Place
     */
    public function setCourse($course)
    {
        $this->course = $course;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\Diet
     */
    public function getDiet()
    {
        return $this->diet;
    }

    /**
     * @param $diet Example\Thing\CreativeWork\Diet
     */
    public function setDiet($diet)
    {
        $this->diet = $diet;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Quantity\Distance
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param $distance Example\Thing\Intangible\Quantity\Distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\ExercisePlan
     */
    public function getExercisePlan()
    {
        return $this->exercisePlan;
    }

    /**
     * @param $exercisePlan Example\Thing\CreativeWork\ExercisePlan
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
     * @return Example\Thing\Place|Float
     */
    public function getFromLocation()
    {
        return $this->fromLocation;
    }

    /**
     * @param $fromLocation Example\Thing\Place|Float
     */
    public function setFromLocation($fromLocation)
    {
        $this->fromLocation = $fromLocation;
        return $this;
    }

    /**
     * @return Example\Thing\Person
     */
    public function getOponent()
    {
        return $this->oponent;
    }

    /**
     * @param $oponent Example\Thing\Person
     */
    public function setOponent($oponent)
    {
        $this->oponent = $oponent;
        return $this;
    }

    /**
     * @return Example\Thing\Organization\LocalBusiness\SportsActivityLocation
     */
    public function getSportsActivityLocation()
    {
        return $this->sportsActivityLocation;
    }

    /**
     * @param $sportsActivityLocation Example\Thing\Organization\LocalBusiness\SportsActivityLocation
     */
    public function setSportsActivityLocation($sportsActivityLocation)
    {
        $this->sportsActivityLocation = $sportsActivityLocation;
        return $this;
    }

    /**
     * @return Example\Thing\Event\SportsEvent
     */
    public function getSportsEvent()
    {
        return $this->sportsEvent;
    }

    /**
     * @param $sportsEvent Example\Thing\Event\SportsEvent
     */
    public function setSportsEvent($sportsEvent)
    {
        $this->sportsEvent = $sportsEvent;
        return $this;
    }

    /**
     * @return Example\Thing\Organization\SportsTeam
     */
    public function getSportsTeam()
    {
        return $this->sportsTeam;
    }

    /**
     * @param $sportsTeam Example\Thing\Organization\SportsTeam
     */
    public function setSportsTeam($sportsTeam)
    {
        $this->sportsTeam = $sportsTeam;
        return $this;
    }

    /**
     * @return Example\Thing\Place|Float
     */
    public function getToLocation()
    {
        return $this->toLocation;
    }

    /**
     * @param $toLocation Example\Thing\Place|Float
     */
    public function setToLocation($toLocation)
    {
        $this->toLocation = $toLocation;
        return $this;
    }

}
