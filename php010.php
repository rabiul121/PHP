<?php
$n = 13;
$r = $n % 2;

switch ($r) {
    case '0':
        echo "{$n} is an Even number \n";
        break;

    default:
        echo "{$n} is a Odd number \n";
}

$color = "red";

switch ($color) {
    case 'red':
        echo "{$color} is not my favorite color. \n";
        break;
    case 'green':
        echo "{$color} is my favorite color. \n";
        break;
    default:
        echo "{$color} is ok. \n";
}
