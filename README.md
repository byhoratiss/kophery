## Kophery - Phery jQuery module for Kohana 3.1(.2)

VERY Simplistic [Kohana 3](https://github.com/kohana/kohana) module implementation of [gahgneh's phery](https://github.com/gahgneh/phery)

Phery allows jQuery methods to be called using php.

## Usage
Add the Kophery module to your Kohana 3.1(.2) installation. Navigate to http://[yourkohanainstallation]/pherydemo

IMPORTANT: Have a look at [gahgneh's repo](https://github.com/gahgneh/phery) for getting a feeling of all the possibilities! This module only sets the parts in place for running as a Kohana module, nothing more!

## Info
This module includes a media controller for loading of the js files. If using in older Ko3 versions, there might be needed a change in the [media controller](https://github.com/cambiata/kopjax/blob/master/classes/controller/media.php) (response->check_cache should be replaced with request->check_cache).


## Credits
All credits to [gahgneh](https://github.com/gahgneh)
and the [Kohana team](http://kohanaframework.org/team) for keeping up the great work!