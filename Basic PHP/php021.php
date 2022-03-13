<?php
$x = 10;
$y = 7;

function greaterOrSmaller($x, $y)
{
    if ($x > $y) {
        return 1;
    } else if ($x == $y) {
        return 0;
    } else {
        return -1;
    }
}


if (greaterOrSmaller($x, $y) == 1) {
    echo "{$x} is greater than {$y}";
} elseif (greaterOrSmaller($x, $y) == 0) {
    echo "{$x} is equal to {$y}";
} else {
    echo "{$x} is smaller than {$y}";
}



/*
    SpaceSheep Operator or Combined Operator
    $x<=>$y? returns three possible output:
    if x>y = 1
    if x<y = -1
    if x==y = 0
*/

echo PHP_EOL;
$result = $x <=> $y;

if ($result == 1) {
    echo "{$x} is greater than {$y}";
} elseif ($result == 0) {
    echo "{$x} is equal to {$y}";
} else {
    echo "{$x} is smaller than {$y}";
}
