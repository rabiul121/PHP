<?php
// array slice; make new array from another array without modifying main array
$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$random = array('a' => 10, 'b' => 20, 'c' => 45, 'd' => 11, '66' => 77, '12' => 87);
// print_r($fruits);
// $newFruits = array_slice($fruits, 2);
// $newFruits = array_slice($fruits, 2, 3); // specify length to slice or extract here - 3
// $newFruits = array_slice($fruits, 2, -1); // until last item use -1
$newFruits = array_slice($fruits, 2, -1, true); // preserve the index value in new array; include third parameter 'true'
$randomData = array_slice($random, 1, null, true);

print_r($randomData);
print_r($newFruits);
