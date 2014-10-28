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
    private $course;

    /**
     * A sub property of instrument. The died used in this action.
     *
     * @var Example\Thing\CreativeWork\Diet
     */
    private $diet;

    /**
     * A sub property of asset. The distance travelled.
     *
     * @var Example\Thing\Intangible\Quantity\Distance
     */
    private $distance;

    /**
     * A sub property of instrument. The exercise plan used on this action.
     *
     * @var Example\Thing\CreativeWork\ExercisePlan
     */
    private $exercisePlan;

    /**
     * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
     *
     * @var String
     */
    private $exerciseType;

    /**
     * A sub property of location. The original location of the object or the agent before the action.
     *
     * @var Example\Thing\Place|Float
     */
    private $fromLocation;

    /**
     * A sub property of participant. The oponent on this action.
     *
     * @var Example\Thing\Person
     */
    private $oponent;

    /**
     * A sub property of location. The sports activity location where this action occurred.
     *
     * @var Example\Thing\Organization\LocalBusiness\SportsActivityLocation
     */
    private $sportsActivityLocation;

    /**
     * A sub property of location. The sports event where this action occurred.
     *
     * @var Example\Thing\Event\SportsEvent
     */
    private $sportsEvent;

    /**
     * A sub property of participant. The sports team that participated on this action.
     *
     * @var Example\Thing\Organization\SportsTeam
     */
    private $sportsTeam;

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     *
     * @var Example\Thing\Place|Float
     */
    private $toLocation;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/ExerciseAction";

    public function getcourse()
    {
        return $this->course;
    }

    public function setcourse($course)
    {
        $this->course = $course;
        return $this;
    }

    public function getdiet()
    {
        return $this->diet;
    }

    public function setdiet($diet)
    {
        $this->diet = $diet;
        return $this;
    }

    public function getdistance()
    {
        return $this->distance;
    }

    public function setdistance($distance)
    {
        $this->distance = $distance;
        return $this;
    }

    public function getexercisePlan()
    {
        return $this->exercisePlan;
    }

    public function setexercisePlan($exercisePlan)
    {
        $this->exercisePlan = $exercisePlan;
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

    public function getfromLocation()
    {
        return $this->fromLocation;
    }

    public function setfromLocation($fromLocation)
    {
        $this->fromLocation = $fromLocation;
        return $this;
    }

    public function getoponent()
    {
        return $this->oponent;
    }

    public function setoponent($oponent)
    {
        $this->oponent = $oponent;
        return $this;
    }

    public function getsportsActivityLocation()
    {
        return $this->sportsActivityLocation;
    }

    public function setsportsActivityLocation($sportsActivityLocation)
    {
        $this->sportsActivityLocation = $sportsActivityLocation;
        return $this;
    }

    public function getsportsEvent()
    {
        return $this->sportsEvent;
    }

    public function setsportsEvent($sportsEvent)
    {
        $this->sportsEvent = $sportsEvent;
        return $this;
    }

    public function getsportsTeam()
    {
        return $this->sportsTeam;
    }

    public function setsportsTeam($sportsTeam)
    {
        $this->sportsTeam = $sportsTeam;
        return $this;
    }

    public function gettoLocation()
    {
        return $this->toLocation;
    }

    public function settoLocation($toLocation)
    {
        $this->toLocation = $toLocation;
        return $this;
    }

}
