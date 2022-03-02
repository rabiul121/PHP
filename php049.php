<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);

function square($n)
{
    printf("The square of %d is %d\n", $n, $n ** 2);
}

function cube($n)
{
    return $n * $n * $n; // array_walk doesn't "return" anything
}

function even($n)
{
    return $n % 2 == 0;
}

function odd($n)
{
    return $n % 2 == 1;
}

// array_walk($numbers, 'square');
// array_walk($numbers, 'cube'); // array_walk doesn't return value
$newArray = array_map('cube', $numbers); // array_map return value
$evenNumbers = array_filter($numbers, 'even'); // callback function
$oddNumbers = array_filter($numbers, 'odd'); // callback function
print_r($numbers);
// print_r($newArray);
print_r($evenNumbers);
print_r($oddNumbers);


$persons = array('sujon', 'kabir', 'jamal', 'rakib', 'selim', 'robi', 'kamal', 'saya', 'maya');
function filterByS($name)
{
    return $name[0] == 's';
}

$student = array_filter($persons, 'filterByS');
print_r($student);
