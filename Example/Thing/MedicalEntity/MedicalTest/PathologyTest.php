<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity\MedicalTest;

use Example\Thing\MedicalEntity\MedicalTest;

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
    private $tissueSample;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/PathologyTest";

    public function gettissueSample()
    {
        return $this->tissueSample;
    }

    public function settissueSample($tissueSample)
    {
        $this->tissueSample = $tissueSample;
        return $this;
    }

}
