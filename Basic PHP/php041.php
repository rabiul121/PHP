<?php

// check is value is set or not / empty or not empty

// $name; // result = not set, empty
// $name = ''; // result = set, empty
$name = false; // result = set, empty

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

if (isset($name) && (is_numeric($name)) || $name != '') {
    echo "Name is set and it's not empty";
} else {
    echo "Name is either not set or it's empty";
}
