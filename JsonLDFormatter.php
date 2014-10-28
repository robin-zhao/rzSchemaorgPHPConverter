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
    private $json;

    public function __construct(Thing $thing)
    {
        $this->thing = $thing;
        $this->json = new stdClass();
    }

    public function format($topLevel = true)
    {
        $reflectionClass = new ReflectionClass($this->thing);
        $properties = $reflectionClass->getProperties();
        foreach ($properties as $property) {
            $getter = 'get' . ucfirst($property->name);
            if (!is_null($this->thing->$getter())) {

                if ($property->name == 'context') {

                    $parts = explode('/', $this->thing->$getter());
                    $type = array_pop($parts);

                    if ($topLevel) {
                        $context = implode('/', $parts);
                        $label = '@context';
                        $this->json->{$label} = $context;
                    }

                    $label = '@type';
                    $this->json->{$label} = $type;
                } else {
                    // Text based property.
                    $doc = $property->getDocComment();
                    $match = array();
                    preg_match('/@var ([a-zA-Z\\\\]+)/', $doc, $match);

                    switch ($match[1])
                    {
                        case 'String':
                            $this->json->{$property->name} = $this->thing->$getter();
                            break;
                        case 'Integer':
                        case 'float':
                            throw new Exception('no implemented');
                            break;
                        default:
                            $newJsonLDFormatter = new JsonLDFormatter($this->thing->$getter());
                            $this->json->{$property->name} = $newJsonLDFormatter->format(false);
                            break;
                    }
                }
            }
        }

        return $this->json;
    }

    public function toJson()
    {
        echo json_encode($this->json);
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

$videoObject->setAward("This is a award.");



$formatter = new JsonLDFormatter($videoObject);

$formatter->format();
$formatter->toJson();
