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
    private $distance;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/TravelAction";

    public function getdistance()
    {
        return $this->distance;
    }

    public function setdistance($distance)
    {
        $this->distance = $distance;
        return $this;
    }

}
