<?php
// return datatype define
function sum(int $num1, int $num2, int $num3): int
{
    // return "String"; // will output fetal error
    return $num1 + $num2 + $num3;
}

echo sum(15, 2, 3);
