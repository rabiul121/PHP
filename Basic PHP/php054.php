<?php

/*
Check if there any value in the variable.
*/

// $name;
// $name = '';
// $name = 'Robi';
$name = false;

if (isset($name)) {
    echo "Name is set";
} else {
    echo "Name is not set";
}

echo "\n";

if (empty($name)) {
    echo "Name is empty";
} else {
    echo "Name is not empty";
}

echo "\n";

if (isset($name) && (is_numeric($name) || $name != '')) {
    echo "Name is set and its not empty";
} else {
    echo "Name is either not set or its empty";
}
