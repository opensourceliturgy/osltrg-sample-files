<?php

// This is the PHP script for outputting in HTML the basic, generic
// missal of the Open Source Liturgy.
// Variable names will probably need to be adjusted to fit the context
// of your system.



// INDIVIDUAL DIRECTORY VARIABLES:
// The value of each of the following directory paths must be wrapped
// through the function realpath() (as demonstrated below) to prevent
// a few possible malfunctions.

// Location of the main module of the Mass.
$liturgidir = realpath("/path/to/resource/mass-missal-main");

// Location of the PHP library for the Open Source Liturgy.
$libdir = realpath("/path/to/resource/mass-missal-library");

// Location of the lectionary.
$locuta = realpath("/path/to/resource/mass-missal-lectionary");

// Location of the calendar of saints.
$canonical = realpath("/path/to/resource/osltrg-saints-primary");



// DIRECTORY-ARRAY VARIABLES:
// The values of the following directory paths do not need to be wrapped
// in realpath() because the program will do so for you when these
// arrays are used.

# Location of language modules.
$langpack = array("Users/sophiashapira/gitter/pray/mass-missal-lng-reclaimist");

# Preference files to modify the preferences set by default in the program.
# (This stuff isn't done in the launch script because the program has to
# set the defaults before the defaults can be modified.)
$preffile = array('pref/main.php');

# Array of files to be included in the HTML header section.
# This is a good place to put CSS styles - but if you do, they must include
# the HTML tags with which to embed the CSS.
$headfile = array(
  '/path/to/resource/osltrg-style/main.php',
);

require($liturgidir . "/main.php");


?>