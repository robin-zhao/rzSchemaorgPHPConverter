<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest;

/**
 * Pathology Test
 * http://schema.org/PathologyTest
 */
class PathologyTest extends MedicalTest
{

    /**
     * The type of tissue sample required for the test.
     *
     * @var String
     */
    public $tissueSample;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/PathologyTest";

    /**
     * @param $tissueSample String
     */
    public function addTissueSample($tissueSample)
    {
        $this->tissueSample []= $tissueSample;
        return $this;
    }

}
