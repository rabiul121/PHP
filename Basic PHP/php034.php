<?php
// array
$students = array(
    "robiul",
    "abdul alim",
    "jahid",
    "sajib",
);

/*
    * array manipulation
    * available functions are:
        - array_shift();
        - array_unshift();
        - array_pop();
        - array_push();
*/

// array_pop() ; removes last items from the array; removes "sajib"
array_pop($students);

// array_push() ; inset/add one items at the end of the array; add "kamal"
array_push($students, "kamal");
$students[] = "jamal"; // alternative to array_push(); add "jamal"

// array_shift() ; remove one item from the beginning of the array; remove "robiul"
array_shift($students);

// array_unshift() ; remove one item from the beginning of the array; add "monir"
array_unshift($students, "monir");

for ($i = 0; $i < count($students); $i++) {
    echo $students[$i] . "\n";
    // echo PHP_EOL;
}
