// cSpell:disable
<?php
// array
/* $students = array(
    "robiul",
    "abdul alim",
    "jahid",
    "sajib",
); */

// alternative way of array deceleration
$students = [
    "robiul",
    "abdul alim",
    "jahid",
    "sajib",
];

// array is mutable, means we can change the elements in array.
$students[2] = "rakib";


for ($i = 0; $i < count($students); $i++) {
    echo $students[$i] . "\n";
    // echo PHP_EOL;
}
