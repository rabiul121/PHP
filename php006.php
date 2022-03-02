<?php
$fname = "Md. Rabiul";
$lname = "Islam";

printf('My name is %2$s %1$s', $fname, $lname);

echo ("\n");

// Print only fixed digits after the decimal point
$n = 12.1234;
printf("%.2f", $n);

$m = 123.12; // append 0 and print like this: 0123
$n = 27.042; // append 00 and print like this: 0027
echo ("\n");

printf("%04d \n", $m);
printf("%04d \n", $n);

echo ("\n");

printf("%07.3f \n", $m);
printf("%07.3f \n", $n);


// use of sprintf
$output = sprintf("My name is %s %s", $fname, $lname);
echo strtoupper($output), ".";
