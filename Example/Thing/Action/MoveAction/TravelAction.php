<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action\MoveAction;

use Example\Thing\Action\MoveAction;

/**
 * Travel Action
 * http://schema.org/TravelAction
 */
class TravelAction extends MoveAction
{

    /**
     * A sub property of asset. The distance travelled.
     *
     * @var Example\Thing\Intangible\Quantity\Distance
     */
    protected $distance;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/TravelAction";

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

}
