<?php
$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$random = array('a' => 12, 'b' => 45, 'c' => 34, 'd' => 22, 'e' => 77, 'f' => 31, 12 => 78, 'g' => 87);

$newFruits1 = array_slice($fruits, 0, 3);
$newFruits2 = array_slice($fruits, 3);
// $newFruits2 = array_slice($fruits, 3, null, true);

// $newFruits = $newFruits1 + $newFruits2; // won't work unless we specify (null, true) while slicing

// $newFruits = array_merge($newFruits1, $newFruits2);

// print_r($newFruits1);
// print_r($newFruits2);
// print_r($newFruits);

$r1 = array_slice($random, 0, 2, true);
$r2 = array_slice($random, 4, null, true);
$r3 = array('j' => 66, 'k' => 99);

// $randomData = array_splice($random, 2, 2, array('j' => 66, 'k' => 99)); // will result unexpected output
$randomDataCorrectWay = $r1 + $r2 + $r3;

print_r($random);
print_r($randomDataCorrectWay);
