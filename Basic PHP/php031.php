<?php
// find factorial of a number using recursive function
function factorial($n)
{
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}


echo factorial(6);
