<?php
$color = array(122, 233, 65);
// $red = $color[0];
// $green = $color[1];
// $blue = $color[2];

// alternative way
list($red, $green, $blue) = $color;
echo $blue;
echo PHP_EOL;
$student = array('fName', 'lName', 'email', 'phone');
list($f, $l, $e, $p) = $student;
list($f, $l, $e, $p) = array('fName', 'lName', 'email', 'phone'); // alternative way
echo $l;
