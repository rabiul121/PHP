<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
function sum($oldValues, $newValues)
{
    if ($newValues % 2 == 1) {
        return $oldValues + $newValues;
    }
    return $oldValues;
}
$sum = array_reduce($numbers, 'sum');
echo $sum;
