<?php
// PHP Logic Control

$number = 125;
if ($number % 2 == 0) {
    echo "$number is an even number.";
} else {
    echo "$number is an odd number.";
}

echo ("\n");

$alam = 500;
$kamal = 400;
if ($alam == $kamal) {
    # code...
    echo "Alam has equal money to Kamal.";
} elseif ($alam < $kamal) {
    # code...
    echo "Alam has less money than Kamal.";
} else {
    echo "Alam has more money to Kamal.";
}


echo ("\n");

$age = 5;
if ($age >= 13 && $age <= 19) {
    echo "This person is a teenager.";
} elseif ($age >= 19 && $age <= 50) {
    echo "This person is an adult";
} elseif ($age >50) {
    # code...
    echo "This person is a Senior Citizen";
} else {

    echo "This person is an Child.";
}
