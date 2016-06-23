<?php

$liturgidir = realpath("/path/to/resource/mass-missal-main");
$libdir = realpath("/path/to/resource/mass-missal-library");
$locuta = realpath("/path/to/resource/mass-missal-lectionary");
$canonical = realpath("/path/to/resource/osltrg-saints-primary");

$langpack = array(); # Highest preference to lowest
$preffile = array(); # Array of preference files (No nead to realpath() wrap them)

# Array of files to be included in the HTML header section.
# This is a good place to put CSS styles - but if you do, they must include
# the HTML tags with which to embed the CSS.
$headfile = array(
  '/path/to/resource/osltrg-style/main.php',
);

require($liturgidir . "/main.php");


?>