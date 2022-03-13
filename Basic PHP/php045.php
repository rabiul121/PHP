<?php

/*
    * sort function modify/change the main array
    * sort types:
        => sort()
        => rsort() ; reverse sort
        => asort() ; preserve the key
        => arsort() ; reverse of asort
        => ksort() ; sort according to key value
        => krsort() ; reverse of ksort()
        => usort() ; custom sort

*/

$fruits = ['orange', 'favorite' => 'banana', 'pineapple', 'guava', 'mango', 'apple'];
$numbers = [12, 114, 56, 98, 65, 1, 0, 33, 37, 45, 76];
$caseSort = array('orange', 'apple', 'Orange', 'Apple', 'guava', 'Guava');
sort($caseSort, SORT_STRING | SORT_FLAG_CASE); // case insensitive sort
print_r($caseSort);

// sort($numbers);
// asort($numbers);
sort($numbers, SORT_STRING); // sort as string

// sort($fruits); // don't preserve key
asort($fruits); // preserve key

print_r($fruits);

print_r($numbers);

/* // will print the original $numbers array; because asort() function preserve the key
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . "\n";
}
echo PHP_EOL;

// solution to this problem is to use foreach loop
foreach ($numbers as $number) {
    echo $number . "\n";
} */
