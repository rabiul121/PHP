<?php
$name = "Robi";
var_dump($name);

$age = 23;
var_dump($age);

$null = null;
var_dump($null);

$emptyString = "";
var_dump($emptyString);

$firstName = "Charu";
$lastName = "Lota";
var_dump($firstName, $lastName);


// Variables supported in PHP
/*
    => String
    => Integer
    => Double / Float
    => Boolean
    =>  Null
    =>  Array
    =>  Object
    =>  Resource
*/


$fname = "Robiul";
$lname = "Islam";
printf("My name is %s %s\n", $fname, $lname);
printf("My %s Name is %s %s\n", "Full", $fname, $lname);

$planet1 = "Earth";
$planet2 = "Marcury";
echo "Our home planet is ".$planet1." and nearest planet is ".$planet2."\n";
echo "Our home planet is {$planet1} and nearest planet is {$planet2} \n";
printf("Our home planet is %s and nearest planet is %s", strtoupper($planet1), strtolower($planet2));
