<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\MoveAction;

use Robinzhao\SchemaOrg\Thing\Action\MoveAction;

/**
 * Travel Action
 * http://schema.org/TravelAction
 */
class TravelAction extends MoveAction
{

    /**
     * A sub property of asset. The distance travelled.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance
     */
    protected $distance;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/TravelAction";

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

}
