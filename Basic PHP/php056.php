<?php

$fruits = array('a' => 'apple', 'b' => 'banana', 'o' => 'orange', 'p' => 'plum', 'd' => 'dates', 'm' => 'mango');
// shuffle($fruits);
// print_r($fruits); // associative array : shuffled but key is not preserved!!

$key = array_rand($fruits);
// echo $key; // returns a random key without modifying the main array
// echo PHP_EOL;
echo $fruits[$key];
