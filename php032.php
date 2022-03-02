<?php
// array
$students = array(
    "robiul",
    "abdul alim",
    "jahid",
    "sajib",
);
/*
var_dump($students);
echo count($students);
echo PHP_EOL;
echo $students[0];
echo PHP_EOL;
echo $students[1];
echo PHP_EOL;
echo $students[2];
echo PHP_EOL;
echo $students[3];
 */

/* //  iterate array items
$n = count($students); //count the number of elements in the array
for ($i = 0; $i < $n; $i++) {
    echo $students[$i] . "\n";
} */

// print array items in reverse order
$n = count($students); //count the number of elements in the array
for ($i = $n - 1; $i >= 0; $i--) {
    echo strtoupper($students[$i]) . "\n";
}
