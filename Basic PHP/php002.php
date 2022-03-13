<?php
define('PI', 3.14159); // constant always should be in UPPER case. (PI)
$task = "Read";
echo $task;
echo "\n";
$task = "Write";
echo $task;
echo "\n";

// echo "The value of PI is: ".PI; // Printing constant
// echo "\n";
// echo constant('PI'); // Another method to print constant
// echo "\n";
$constant = 'constant';
echo "The value of PI = {$constant('PI')}"; // Interesting method to print constant
