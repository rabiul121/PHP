<?php

$numbers = range(40, 72);
echo count($numbers);
echo PHP_EOL;

// generate random number
$random = mt_rand(0, 32);

$luck = $numbers[$random];
if ($luck % 2 == 0) {
    echo "Head";
} else {
    echo "Tail";
}
echo PHP_EOL;

shuffle($numbers);
print_r($numbers);

// index is fixed but value is changing continuously, that's produce random number in every run
$randomNumber = $numbers[3];

echo $randomNumber;
