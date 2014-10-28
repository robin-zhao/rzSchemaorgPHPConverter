rzSchemaOrgPHPConverter
==============================

Generate php classes from http://schema.rdfs.org/all.json
And a simple Json-ld formatter based on the classes.

### Requirement

    PHP5.3+, Composer

### Installation

    - git clone https://github.com/robin-zhao/rzSchemaorgPHPConverter.git 
    - composer install

### How to use

    - Generate classes: /usr/bin/php console convert

### Json-ld formatter

    See example in json-ld-formater-example.php

    php json-ld-formater-example.php | python -mjson.tool


```php
    $videoObject = new VideoObject();

    $person = new Person();
    $person->setTelephone('123456789');
    $person->setName('Robin');
    $videoObject->setAuthor($person);

    $videoObject->setAward("This is a award.");

    $formatter = new JsonLDFormatter($videoObject);

    echo $formatter->toJson();
```

    with output like:

    {
        "@context": "http://schema.org",
        "@type": "VideoObject",
        "author": {
            "@type": "Person",
            "name": "Robin",
            "telephone": "123456789"
        },
        "award": "This is a award."
    }


### Known Issue

    - Example\Thing\Class   Class is a reserved keyword... 

    - @todo  
         - Handle Date, Time, DateTime type
         - support json array
         - ...