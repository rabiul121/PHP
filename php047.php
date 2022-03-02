<?php
$names = array('40' => 'robi', 'shahin', 'rakib', '25' => 'jahid', '12' => 'abdul alim', '41' => 'anika', '15');
$check = '15';
if (in_array($check, $names, true)) {       // true will check the type as well as value
    printf("{$check} is found!\n");
} else {
    printf("{$check} is not found!\n");
}

$offset = array_search('rakib', $names);
echo $offset;
echo PHP_EOL;
if (key_exists('25', $names)) {
    printf("Key is exists!\n");
} else {
    printf("Key is not exists!\n");
}
