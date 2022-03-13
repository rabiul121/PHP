<?php
$number1 = array(1, 4, 7, 11, 32, 56, 98, 76, 33, 77, 92, 23);
$number2 = array(1, 4, 7, 14, 36, 56, 78, 76, 33, 77, 79, 83);
$fruits1 = array("a" => "apple", "b" => "banana", "e" => "lemon");
$fruits2 = array("d" => "pineapple", "b" => "malta", "d" => "grapes", "c" => "lemon");

$common = array_intersect($number1, $number2);
print_r($common);

// $commonFruits = array_intersect($fruits1, $fruits2);
$commonFruits = array_intersect_assoc($fruits1, $fruits2); // also check the key alongside the value
print_r($commonFruits);

$diff = array_diff($number1, $number2);
print_r($diff);

// $diff2 = array_diff($fruits1, $fruits2);
$diff2 = array_diff_assoc($fruits1, $fruits2); // also check for key alongside value
print_r($diff2);
