<?php

// This is the PHP script for outputting in HTML the basic, generic
// missal of the Open Source Liturgy.
// Variable names will probably need to be adjusted to fit the context
// of your system.


// NON-DIRECTORY VARIABLES:

// Now we define the sequence of languages
// (This part can be a bit technical.)
$langpath = array (
  array (
    'lst' => array (
      array (
        'lang' => 'en'
      )
    ),
    'gnr' => array()
  )
);



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

// Location of language modules.
// Currently, the language module hasn't yet been implemented - but it
// doesn't hurt to get your configuration ready for when it is.
// However, in the future, that will change. The exact wordings of many
// (if not all) prayers will be moved into the language module --- so
// that alternate language modules can be available. Even among progressive
// Catholics who speak the same language, the Reclaimists and Rewordists
// will probably have very strong differences in opinion regarding how
// many of the prayers aught to be worded.
//   The ordering of the array should begin with whatever language is
// preferred
//   It is an associative array of unassociative arrays rather than a
// simple array so as to allow you to group variational languag modules
// of the same language, separating them from modules of entirely
// different languages. This can be useful if you wish to produce
// a multilingual rendition of the missal (that is, one that will
// display the same prayer in multiple languages when it is available
// in multiple languages).
//   Also - the program will not enforce that the language that a
// module is labeled as being part of here matches the official
// language-identifier of the module. So, if you wish (for whatever
// reason) to render a missal that displays both the reclaimist
// and rewordist forms of a prayer when both are available, all
// you have to do is treat them here as though they are actually
// in different languages (as opposed to this example in which
// they are treated as variants within the same language).
$langpack = array(
  "en" => array(
    "/path/to/resource/mass-missal-lng-en-reclaimist",
    "/path/to/resource/mass-missal-lng-en-rewordist"
  )
);
//  "en" -> array (
//  )

// Preference files to modify the preferences set by default in the program.
// (This stuff isn't done in the launch script because the program has to
// set the defaults before the defaults can be modified.)
$preffile = array('pref/main.php');

// Array of files to be included in the HTML header section.
// This is a good place to put CSS styles - but if you do, they must include
// the HTML tags with which to embed the CSS.
$headfile = array(
  '/path/to/resource/osltrg-style/main.php',
);

require($liturgidir . "/main.php");


?>