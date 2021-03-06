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

    - Generate classes: /usr/bin/php console convert --namespace=Robin\\SchemaOrg

### Json-ld formatter

    See example in json-ld-formater-example.php

    php json-ld-formater-example.php | python -mjson.tool


```php
    $loader = new ClassLoader();
    $loader->add('Robinzhao', '.');
    $loader->register();

    $videoObject = new VideoObject();

    $person = new Person();
    $person->addTelephone('123456789');
    $person->addName('Robin');
    $videoObject->addAuthor($person);

    $person = new Person();
    $person->addTelephone('987654321');
    $person->addName('Tom');
    $videoObject->addAuthor($person);

    $videoObject->addAward("This is a award.");
    $videoObject->addAward("This is another award.");


    echo $videoObject->toJson();
```

    with output like:

    {
        "@context": "http://schema.org",
        "@type": "VideoObject",
        "author": [
            {
                "@type": "Person",
                "name": "Robin",
                "telephone": "123456789"
            },
            {
                "@type": "Person",
                "name": "Tom",
                "telephone": "987654321"
            }
        ],
        "award": [
            "This is a award.",
            "This is another award."
        ]
    }



### Known Issue

    - Robinzhao\SchemaOrg\Thing\Class   Class is a reserved keyword... 

    - @todo  
         - Handle Date, Time, DateTime type
         - ...
