[![Build Status](https://travis-ci.org/Poan18/ramverk1-weathermodule.svg?branch=master)](https://travis-ci.org/Poan18/ramverk1-weathermodule)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Poan18/ramverk1-weathermodule/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Poan18/ramverk1-weathermodule/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/Poan18/ramverk1-weathermodule/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Poan18/ramverk1-weathermodule/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/Poan18/ramverk1-weathermodule/badges/build.png?b=master)](https://scrutinizer-ci.com/g/Poan18/ramverk1-weathermodule/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/Poan18/ramverk1-weathermodule/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)

[![CircleCI](https://circleci.com/gh/Poan18/ramverk1-weathermodule.svg?style=svg)](https://circleci.com/gh/Poan18/ramverk1-weathermodule)

# ramverk1-weatherModule
 Weather module for redovisa webpage within the course ramverk1.

 ## Installation
 * Install the module by adding the name to your composer or going to your anax installation folder and write(Latest version may change):
 ```
 composer require pon18/ramverk1-weathermodule ^v1.0.4
 ```


* Install using scaffold postprocessing script file
```
bash vendor/pon18/ramverk1-weathermodule/.anax/scaffold/postprocess.d/700_weather.bash
```
* Create the file 'ApiKeys.php' following the file 'ApiKeys_example.php'
```
<?php
return [
    "ipstack" => 'Enter Ipstack key here',
    "darksky" => 'Enter darksky key here',
];
```

* Add css height to the id 'map' if you want to enable the map.
