<?php
// factorial of a number
echo "find factorial\n";
echo "----------------\n";

$n = 6;
for ($i = $n, $factorial = 1; $i > 1; $i--) {
    // $factorial = $factorial * $i;
    $factorial *= $i; // Another way to express
}
printf("Factorial of %d = %d \n", $n, $factorial);
