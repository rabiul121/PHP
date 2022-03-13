<?php

$vegetables = 'carrot, brinjal, tomato, brocoli'; // string

$vegetablesArray = explode(', ', $vegetables); // convert string to array

var_dump($vegetablesArray);

echo $vegetablesArray[0];
echo PHP_EOL;

$vegetablesString = join(', ', $vegetablesArray);

echo $vegetablesString;

echo PHP_EOL;

echo count($vegetablesArray);
echo PHP_EOL;

$sweets = 'chocolate, bundiya, chanar jol,pantua,rosogolla';
$sweetsArray = preg_split('/(, |,)/', $sweets);
for ($i = 0; $i < count($sweetsArray); $i++) {
    echo $sweetsArray[$i] . " ";
}
