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
