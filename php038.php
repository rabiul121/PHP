<?php
$students = [
    "fname" => 'Sajib',
    "lname" => 'Ahmed',
    "age" => 16,
    "class" => 10,
    "section" => 'B'
];

// print_r($students);
// echo $students['fname'] . " " . $students['lname'] . "\n";
// printf("%s %s \n", $students['fname'], $students['lname']);

// $serialized = serialize($students);
// echo $serialized;

// $newStudent = unserialize($serialized);
// print_r($newStudent);

$jsonData = json_encode($students);
// echo $jsonData;

// $student2 = json_decode($jsonData); // return  as stdClass Object
$student2 = json_decode($jsonData, true); // return   as Array
print_r($student2);
