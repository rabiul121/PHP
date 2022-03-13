<?php
// unlimited argument in function definition
function sum(int ...$numbers): int
{
    $result = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $result += $numbers[$i];
    }
    return $result;
}

echo sum(1, 2, 34, 5, 1);
