<?php
// Function

/* function isEven($number)
{
    if ($number % 2 == 0) {
        return true;
    }
    return false;
}

$number = 12;
if (isEven($number)) {
    echo "{$number} is an even number";
} else {
    echo "{$number} is an odd number";
} */


// factorial
function factorial($n)
{
    if (gettype($n) != "integer") {
        return "Invalid";
    }
    $result = 1;
    for ($i = $n; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}

$x = "asd";
echo "The factorial of {$x} is : " . factorial($x) . "\n";
