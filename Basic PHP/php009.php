<?php
// Ternary Operators

$n = 12;
if (12 == $n) {
    echo "Twelve";
} elseif (10 == $n) {
    echo "Ten";
} else {
    echo "A number";
}
echo "\n";

$numberInWords = (12 == $n) ? "Twelve" : ((10 == $n)? "Ten" : "A number");
echo $numberInWords;

echo "\n";

if($n % 2 == 0){
    echo "Even";
} else {
    echo "Odd";
}

echo "\n";

// in ternary
$result = $n % 2 == 0 ? "Even" : "Odd";
echo $result;
echo "\n";
