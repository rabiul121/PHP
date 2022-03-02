<?php
$person = [
    'fname' => 'rabiul',
    'lname' => 'islam'
];

print_r($person);

// remove data from associative array
unset($person['lname']);
print_r($person);
