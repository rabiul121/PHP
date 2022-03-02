<?php

// Nested array

$food = [
    'vegetable' => explode(', ', 'brinjal, brocoli, carrot, capsicum'),
    'fruits' => explode(', ', 'apple, guava, pineapple, orange'),
    'drinks' => explode(', ', 'sprite, coca-cola, 7-Up, milk, water')
];

print_r($food);

array_push($food['vegetable'], 'ladies finger');

echo "\n";
print_r($food);

echo $food['fruits'][2];
