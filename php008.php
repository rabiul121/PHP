<?php
/*
    --> Leap year calculation conditions
        1. If divisible by 4
        2. If divisible by 100
        3. If divisible by 400
*/

$year = 2020;
// echo $year;
if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
    echo "{$year} is a leap year.";
}
else if ($year % 4 ==0 && $year % 100 == 0) {
    echo "{$year} is not a leap year.";
} elseif ($year % 4 == 0) {
    echo "{$year} is a leap year.";
}

else {
    echo "{$year} is not a leap year.";
}

echo "\n";

// Alternative way
if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
    echo "{$year} is a leap year.";
} else {
    echo "{$year} is not a leap year.";
}
