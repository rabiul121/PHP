<?php
$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$newFruits = array('jackfruits', 'tamarind');


// $someFruits = array_splice($fruits, 2, 3);
$someFruits = array_splice($fruits, 2, 3, $newFruits); // add new items in original array while slicing


print_r($someFruits);
print_r($fruits);
