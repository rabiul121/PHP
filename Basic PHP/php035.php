<?php
// associative array
$students = array(
    "1702040" => "robiul",
    "1702011" => "abdul alim",
    "1702025" => "jahid",
    "1702044" => "sajib",
);

/* echo $students['1702040'];
echo PHP_EOL;
 */
// print_r($students); // print array in PHP

$food = [
    'vegetable' => 'brinjal, brocoli, carrot, capsicum',
    'fruits' => 'apple, guava, pineapple, orange',
    'drinks' => 'sprite, coca-cola, 7-Up, milk, water'
];

$food['drinks'] = $food['drinks'] . ", lichi drinks";
$food['drinks'] .= ", mango juice";

// echo $food['drinks'];
/*
foreach ($food as $key => $value) {
    echo $key . " : " . $value . "\n";
}
 */
$keys = array_keys($food);
for ($i = 0; $i < count($keys); $i++) {
    $key = $keys[$i];
    echo $food[$key] . "\n";
}

// print_r($keys);
