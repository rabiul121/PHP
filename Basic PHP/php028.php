<?php
// Recursive function
function printN($i)
{
    if ($i >= 100) {
        return;
    }
    echo $i . "\n";
    $i++;
    printN($i);
}
// printN(1);


function printNumber($i, $j, $stepping = 1)
{
    if ($i > $j) {
        return;
    }
    echo $i . "\n";
    $i += $stepping;
    printNumber($i, $j, $stepping);
}

printNumber(10, 20, 2);
