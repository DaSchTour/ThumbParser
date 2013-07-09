ThumbParser
===========
Adds ParserFunktion #thumb that prints the thumb size that a user has defined
It takes three different parameters

* {{#thumb:size}}
** the thumbsize
* {{#thumb:px}}
** the thumbsize with px added at the end
* {{#thumb:width}}
** the thumbsize +10 with px added (size of a thumb with box)


== Installation ==
Download the files from github. Put them in /extensions/ThumbParser and but the following to your LocalSettings.php
require_once( "$IP/extensions/ThumbParser/ThumbParser.php" );
