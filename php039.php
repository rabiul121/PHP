<?php
$person = [
    'firstName' => 'Md. Rabiul',
    'lastName' => 'Islam'
];

// copy by value or deep copy
// only changes value in new array

// $newPerson = $person;

// $newPerson['firstName'] = 'Shrabonti';
// $newPerson['lastName'] = 'Rahman';

// print_r($person);
// print("\n");
// print_r($newPerson);

// copy by reference or shallow copy
// changes values in both new and old array
// $newPerson2 = &$person;
// $newPerson2['firstName'] = 'Shrabonti';
// $newPerson2['lastName'] = 'Rahman';

// print_r($person);
// print("\n");
// print_r($newPerson2);

function changeData($person) // using &$person will change values in both place
{
    $person['firstName'] .= ' Changed';
    print_r($person);
}

changeData($person);
print_r($person);
