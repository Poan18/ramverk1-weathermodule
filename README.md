# ramverk1-weatherModule
 Weather module for redovisa webpage within the course ramverk1.

 ## Installation
 * Install the module by adding the name to your composer
 ```
 "require": {
     "pon18/ramverk1-weathermodule": "dev-master"
 }
 ```

* Install using scaffold postprocessing script file
```
bash vendor/pon18/ramverk1-weathermodule/.anax/scaffhold/postprocess.d/700_weather.bash
```
* Create the file 'ApiKeys.php' following the file 'ApiKeys_example.php'
```
<?php
return [
    "ipstack" => 'Enter Ipstack key here',
    "darksky" => 'Enter darksky key here',
];
```
