<?php

use Example\Thing;
use Example\Thing\CreativeWork\MediaObject\VideoObject;

/**
 * Description of JsonLDFormatter
 *
 * @author Jian Zhao
 */
class JsonLDFormatter
{

    private $thing;

    public function __construct(Thing $thing)
    {
        $this->thing = $thing;
    }

    public function format()
    {
        $reflectionClass = new ReflectionClass($this->thing);
        $properties = $reflectionClass->getProperties();
        var_dump($properties);
    }
}

require 'vendor/autoload.php';

$loader = new Composer\Autoload\ClassLoader();
$loader->add('Example', '.');
$loader->register();


$videoObject = new VideoObject();

$person = new Thing\Person();
$person->setTelephone('123456789');
$person->setName('Robin');

$videoObject->setAuthor($person);

$formatter = new JsonLDFormatter($videoObject);

$json = $formatter->format();

echo $json;
